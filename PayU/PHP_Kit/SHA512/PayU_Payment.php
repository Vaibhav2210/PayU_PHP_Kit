<!DOCTYPE html>
<html>
<body>

<h2>PayU Biz</h2>

<form id="payment_form" action="https://test.payu.in/_payment" method="POST">
  <label for="fname">Key:</label><br>
  <input type="text" id="key" name="key" value="QyT13U"><br>

  <label for="fname">Transaction ID:</label><br>
  <input type="text" id="txnid" name="txnid" value="12343212324"><br>

  <label for="fname">Amount:</label><br>
  <input type="text" id="amount" name="amount" value="1"><br>

  <label for="fname">Productinfo:</label><br>
  <input type="text" id="productinfo" name="productinfo" value="VaibhavSarode"><br>

  <label for="fname">Firstname:</label><br>
  <input type="text" id="firstname" name="firstname" value="vaibhav"><br>

  <label for="fname">Email:</label><br>
  <input type="text" id="email" name="email" value="test@test.com"><br>

  <label for="fname">Phone:</label><br>
  <input type="text" id="phone" name="phone" value="9876543210"><br>

  <label for="lname">Salt:</label><br>
  <input type="text" id="salt" name="salt" value="UnJ0FGO0kt3dUgnHo9Xgwi0lpipBV0hB"><br><br>

  <label for="lname">SURL:</label><br>
  <input type="text" id="surl" name="surl" value="http://localhost/PayU/PHP_Kit/SHA512"><br><br>

  <label for="lname">CURL:</label><br>
  <input type="text" id="curl" name="curl" value="http://localhost/PayU/PHP_Kit/SHA512"><br><br>

  <label for="lname">Hash:</label><br>
  <input type="text" id="hash" name="hash" value="c2bff2d7a510b8758e694ad29af5ebdd87e00d9808403779796504ab204de4d2adb080004e252d9c49599d65a46989d469ae2b30ae492c87cfbda745e7747cc5"><br><br>

  <input type="submit" value="User Defined Fields" >

</form> 
</body>
</html>

