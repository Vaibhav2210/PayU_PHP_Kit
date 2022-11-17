<?php

$postdata = $_POST;
$msg = '';
//$salt = "4R38IvwiV57FwVpsgOvTXBdLE4tHUXFW"; 
$salt = "UkojH5TS"; 


echo "<h2>Response Payload:</h2>";

foreach ($_POST as $key => $value) {
        echo $key." = " .$value."<br>";
}

if (isset($postdata ['key'])) {
	$key				=   $postdata['key'];
	$txnid 				= 	$postdata['txnid'];
    $amount      		= 	$postdata['amount'];
	$productInfo  		= 	$postdata['productinfo'];
	$firstname    		= 	$postdata['firstname'];
	$email        		=	$postdata['email'];
	//$udf5				=   $postdata['udf5'];	
	$status				= 	$postdata['status'];
	$resphash			= 	$postdata['hash'];

	$splitInfo                  =		$postdata['splitInfo'];

	$error_Message		=   $postdata['error_Message'];
	$error              =   $postdata['error'];
	//Calculate response hash to verify	
	$keyString 	  		=  	$key.'|'.$txnid.'|'.$amount.'|'.$productInfo.'|'.$firstname.'|'.$email.'||||||||||';

	//echo $keyString."<br><br>";
	$keyArray 	  		= 	explode("|",$keyString);
	$reverseKeyArray 	= 	array_reverse($keyArray);
	$reverseKeyString	=	implode("|",$reverseKeyArray);
	$CalcHashString 	= 	strtolower(hash('sha512', $salt.'|'.$status.'|'.$reverseKeyString)); 

	//echo $salt.'|'.$status.'|'.$reverseKeyString;

	$additionalCharges  = 	"";
	
	If (isset($postdata["additionalCharges"])) {
       $additionalCharges=$postdata["additionalCharges"];
	   //hash with additionalcharges
	   $CalcHashString 	= 	strtolower(hash('sha512', $additionalCharges.'|'.$splitInfo.'|'.$salt.'|'.$status.'|'.$reverseKeyString));
	}

	}


echo "<h2>Response:</h2>";
echo "<B>Resposne splitInfo: </B>".$splitInfo."<br>";

echo "<B>Resposne Key: </B>".$key;
echo "<br>";

echo "<B>Salt: </B>".$salt;
echo "<br>";

echo "<B>Resposne Transaction ID: </B>".$txnid;
echo "<br>";
echo "<B>Resposne Amount: </B>".$amount;
echo "<br>";
echo "<B>Resposne Prodcuct Information</B>".$productInfo;
echo "<br>";
echo "<B>Resposne firstname: </B>".$firstname;

echo "<br>";
echo "<B>Resposne Status: </B>".$status;

echo "<br>";
echo "<B>Resposne Hash: </B>".$resphash;

echo "<br>";
echo "<B>Resposne Error: </B>".$error;


echo "<br>";
echo "<B>Resposne Error error_Message: </B>".$error_Message;

echo "<br>";
echo $reverseKeyString;

echo "<br>";
echo $CalcHashString;


if ($CalcHashString == $resphash && $status == 'success'){
	print("<br>Transaction Successful and Hash Verified Successfully!!");
	print("<br>Executing verify_payment API<br>");
	verifyPayment($key,$salt,$txnid,$status);
}elseif($CalcHashString == $resphash && $status == 'failure') {
	print("<br><br><B>Transaction Failed, Howerver Hash Verified Successfully!!</B>");
	print("<br>Executing verify_payment API<br>");
	verifyPayment($key,$salt,$txnid,$status);
}else {
	print("<br>Verification Failed!!");
}



function verifyPayment($key,$salt,$txnid,$status){
	$command = "verify_payment"; //mandatory parameter
	
	$hash_str = $key  . '|' . $command . '|' . $txnid . '|' . $salt ;
	$hash = strtolower(hash('sha512', $hash_str)); //generate hash for verify payment request

	print($hash);
	//exit();

    $r = array('key' => $key , 'hash' =>$hash , 'var1' => $txnid, 'command' => $command);
	    
    $qs= http_build_query($r);
	$wsUrl = "https://test.payu.in/merchant/postservice.php?form=2";
	
	try 
	{		
		$c = curl_init();
		curl_setopt($c, CURLOPT_URL, $wsUrl);
		curl_setopt($c, CURLOPT_POST, 1);
		curl_setopt($c, CURLOPT_POSTFIELDS, $qs);
		curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($c, CURLOPT_SSLVERSION, 6); //TLS 1.2 mandatory
		curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
		$o = curl_exec($c);
		if (curl_errno($c)) {
			$sad = curl_error($c);
			throw new Exception($sad);
		}
		curl_close($c);

		$response = json_decode($o,true);

		if($o!= null){
				print("<br><B>verify_payment Executed Successfully!!<br></B>");
				print("<br><br>".$o);

		}
        		
		if(isset($response['status']))
		{
			// response is in Json format. Use the transaction_detailspart for status
			$response = $response['transaction_details'];
			$response = $response[$txnid];

			if($response['status'] == $status) //payment response status and verify status matched
				return true;
			else
				return false;
		}
		else {
			return false;
		}
	}
	catch (Exception $e){
		return false;	
	}
}
?>
