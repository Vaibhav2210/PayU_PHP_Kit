<?php

$Key = $_POST['key'];
$TransactionID = $_POST['txnid'];
$Amount = $_POST['amount'];
$ProductInfo = $_POST['productinfo'];
$FirstName = $_POST['firstname'];
$Email = $_POST['email'];
$Salt = $_POST['salt'];
$Phone = $_POST['phone'];

$action = 'https://test.payu.in/_payment';

$HASHED =hash('sha512', $key.'|'.$TransactionID.'|'.$Amount.'|'.$ProductInfo.'|'.$FirstName.'|'.$Email.'|||||||||||'.$Salt);


print($HASHED);

//sleep(30);
	$html = '<form action="'.$action.'" id="payment_form_submit" method="post">
			<input type="hidden" id="surl" name="surl" value="http://localhost/PayU/PHP_Kit/SHA512" />
			<input type="hidden" id="furl" name="furl" value="http://localhost/PayU/PHP_Kit/SHA512/action_page.php" />
			<input type="hidden" id="curl" name="curl" value="http://localhost/PayU/PHP_Kit/SHA512/action_page.php" />
			<input type="hidden" id="key" name="key" value="'.trim($Key).'" />
			<input type="hidden" id="txnid" name="txnid" value="'.trim($TransactionID).'" />
			<input type="hidden" id="amount" name="amount" value="'.trim($Amount).'" />
			<input type="hidden" id="productinfo" name="productinfo" value="'.trim($ProductInfo).'" />
			<input type="hidden" id="firstname" name="firstname" value="'.trim($FirstName).'" />
			<input type="hidden" id="email" name="email" value="'.trim($Email).'" />
			<input type="hidden" id="phone" name="phone" value="'.trim($Phone).'" />
			<input type="hidden" id="hash" name="hash" value="'.trim($HASHED).'" />
			</form>
			<script type="text/javascript"><!--
				document.getElementById("payment_form_submit").submit();	
			//-->
			</script>';


		if($html) echo $html;




?>	