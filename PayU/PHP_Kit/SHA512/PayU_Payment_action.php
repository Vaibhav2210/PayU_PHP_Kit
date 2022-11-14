<?php 
$action = 'https://test.payu.in/_payment';

echo $_POST['key'].'|'.$_POST['txnid'].'|'.$_POST['amount'].'|'.$_POST['productinfo'].'|'.$_POST['firstname'].'|'.$_POST['email'].'|||||||||||'.$_POST['salt'];

echo "<br>";

echo $HASHED = hash('sha512', $_POST['key'].'|'.$_POST['txnid'].'|'.$_POST['amount'].'|'.$_POST['productinfo'].'|'.$_POST['firstname'].'|'.$_POST['email'].'|||||||||||'.$_POST['salt']);

//sleep(10);

	$html = '<form action="'.$action.'" id="payment_form_submit" method="post">
			<input type="hidden" id="surl" name="surl" value="http://localhost/PayU/PHP_Kit/SHA512/PayU_Payment_Response.php" />
			<input type="hidden" id="furl" name="furl" value="http://localhost/PayU/PHP_Kit/SHA512/PayU_Payment_Response.php" />
			<input type="hidden" id="curl" name="curl" value="http://localhost/PayU/PHP_Kit/SHA512/PayU_Payment_Response.php" />
			<input type="hidden" id="key" name="key" value="'.$_POST['key'].'" />
			<input type="hidden" id="txnid" name="txnid" value="'.$_POST['txnid'].'" />
			<input type="hidden" id="amount" name="amount" value="'.$_POST['amount'].'" />
			<input type="hidden" id="productinfo" name="productinfo" value="'.$_POST['productinfo'].'" />
			<input type="hidden" id="firstname" name="firstname" value="'.$_POST['firstname'].'" />
			<input type="hidden" id="email" name="email" value="'.$_POST['email'].'" />
			<input type="hidden" id="phone" name="phone" value="'.$_POST['phone'].'" />
			<input type="hidden" id="hash" name="hash" value="'.$HASHED.'" />
			</form>
			<script type="text/javascript"><!--
				document.getElementById("payment_form_submit").submit();	
			//-->
			</script>';


		if($html) echo $html;
?>

