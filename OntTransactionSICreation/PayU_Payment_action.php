<?php 

$action = 'https://test.payu.in/_payment';

echo $_POST['key'].'|'.$_POST['txnid'].'|'.$_POST['amount'].'|'.$_POST['productinfo'].'|'.$_POST['firstname'].'|'.$_POST['email'].'|||||||||||'.$_POST['si_details'].'|'.$_POST['salt'];

echo "<br><br>".$_POST['si_details']."<br>";

//echo $HASHED = hash('sha512', $_POST['key'].'|'.$_POST['txnid'].'|'.$_POST['amount'].'|'.$_POST['productinfo'].'|'.$_POST['firstname'].'|'.$_POST['email'].'|||||||||||'.$_POST['salt']);
$newHash = hash('sha512',$_POST['key'].'|'.$_POST['txnid'].'|'.$_POST['amount'].'|'.$_POST['productinfo'].'|'.$_POST['firstname'].'|'.$_POST['email'].'|||||||||||'.$_POST['si_details'].'|'.$_POST['salt']);

print($newHash);
//stop();
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
			<input type="text" id="hash" name="hash" value="'.$newHash.'" />
			<input type="hidden" id="pg" name="pg" value="CC" />
			<input type="hidden" id="bankcode" name="bankcode" value="'.$_POST['bankcode'].'" />
			<input type="text" id="si_details" name="si_details" value="'.$_POST['si_details'].'" />
			<input type="text" id="si" name="si" value="1" />
			<select name="api_version">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="14">14</option>
			<option value="15">15</option>
		  </select>
			<input type="submit" value="Submit">


			</form>
			<script type="text/javascript"><!--
				//document.getElementById("payment_form_submit").submit();	
			//-->
			</script>';
		if($html) echo $html;
?>

