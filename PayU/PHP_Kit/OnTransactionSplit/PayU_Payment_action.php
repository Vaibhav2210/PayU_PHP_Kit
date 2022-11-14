<?php 

$action = 'https://test.payu.in/_payment';

echo $_POST['key'].'|'.$_POST['txnid'].'|'.$_POST['amount'].'|'.$_POST['productinfo'].'|'.$_POST['firstname'].'|'.$_POST['email'].'|||||||||||'.$_POST['salt'].'|'.$_POST['splitRequest'];

echo "<br>".$_POST['splitRequest']."<br>";

echo $HASHED = hash('sha512', $_POST['key'].'|'.$_POST['txnid'].'|'.$_POST['amount'].'|'.$_POST['productinfo'].'|'.$_POST['firstname'].'|'.$_POST['email'].'|||||||||||'.$_POST['salt'].'|'.$_POST['splitRequest']);


$html = '<form action="'.$action.'" id="payment_form_submit" method="post">
			<input type="hidden" id="surl" name="surl" value="'.$_POST['surl'].'" />
			<input type="hidden" id="furl" name="furl" value="'.$_POST['furl'].'" />
			<input type="hidden" id="curl" name="curl" value="'.$_POST['curl'].'" />
			<input type="hidden" id="key" name="key" value="'.$_POST['key'].'" />
			<input type="hidden" id="txnid" name="txnid" value="'.$_POST['txnid'].'" />
			<input type="hidden" id="amount" name="amount" value="'.$_POST['amount'].'" />
			<input type="hidden" id="productinfo" name="productinfo" value="'.$_POST['productinfo'].'" />
			<input type="hidden" id="firstname" name="firstname" value="'.$_POST['firstname'].'" />
			<input type="hidden" id="email" name="email" value="'.$_POST['email'].'" />
			<input type="hidden" id="phone" name="phone" value="'.$_POST['phone'].'" />
			<input type="hidden" id="hash" name="hash" value="'.$HASHED.'" />
			<input type="hidden" id="pg" name="pg" value="'.$_POST['pg'].'" />
			<input type="hidden" id="bankcode" name="bankcode" value="'.$_POST['bankcode'].'" />
			<input type="text" id="splitRequest" name="splitRequest" value="'.$_POST['splitRequest'].'" />
			<input type="submit" value="Verify Split Data">


			</form>
			<script type="text/javascript"><!--
				let name = "vaibhav";

				window.stop();
				jsonObject={"type":"absolute",
					"splitInfo":{
					  "imAJ7I":{
						"aggregatorSubTxnId":"633aaaa35b555",
						"aggregatorSubAmt":1,"aggregatorCharges":1}
					  }
				}

				var str = JSON.stringify(jsonObject);

				//document.getElementById("splitRequest").innerHTML = str;
				//document.getElementById("splitRequest").attribute = str;


				var xhr = new XMLHttpRequest();
				var url = "'.$action.'";
				xhr.open("POST", url, true);
				xhr.setRequestHeader("Content-Type", "application/json");
				xhr.send(str);



				//document.getElementById("payment_form_submit").submit();	
			//-->
			</script>';
		if($html) echo $html;
?>

