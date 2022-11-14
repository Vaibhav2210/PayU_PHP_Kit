<!DOCTYPE html>
<html>
<body>

<h2>PayU Biz - SEAMLESS INTEGRATION</h2>

<form id="payment_form" action="./PayU_Payment_action.php" method="POST">
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

  <label for="salt">Salt:</label><br>
  <input type="text" id="salt" name="salt" value="UnJ0FGO0kt3dUgnHo9Xgwi0lpipBV0hB"><br><br>

  <label for="surl">SURL:</label><br>
  <input type="text" id="surl" name="surl" value="http://localhost/PayU/PHP_Kit/Seamless/PayU_Payment_Response.php"><br><br>

  <label for="curl">CURL:</label><br>
  <input type="text" id="curl" name="curl" value="http://localhost/PayU/PHP_Kit/Seamless/PayU_Payment_Response.php"><br><br>

  <label for="furl">FURL:</label><br>
  <input type="text" id="furl" name="furl" value="http://localhost/PayU/PHP_Kit/Seamless/PayU_Payment_Response.php"><br><br>

  <!--label for="lname">Hash:</label><br>
  <input type="text" id="hash" name="hash" value=""><br><br-->

  <label for="seamless"><h2>Addition Paramaters for Seamless:</h2></label><br>


  <label for="pg">Payment Mode:</label><br>
  <input type="text" id="pg" name="pg" value="NB"><br><br>

  <label for="bankcode">FURL:</label><br>
  <input type="text" id="bankcode" name="bankcode" value="AXIB"><br><br>

  <input type="submit" value="User Defined Fields">

</form> 
</body>
</html>

