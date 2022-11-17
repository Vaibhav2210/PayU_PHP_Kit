<!DOCTYPE html>
<html>

<head>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>
<body>

<h2>PayU Biz - SEAMLESS INTEGRATION</h2>

<form id="payment_form" action="./PayU_Payment_action.php" method="POST">
  <label for="fname">Key:</label><br>
  <input type="text" id="key" name="key" value="oZ7oo9"><br>

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
  <input type="text" id="salt" name="salt" value="UkojH5TS"><br><br>

  <label for="surl">SURL:</label><br>
  <input type="text" id="surl" name="surl" value="http://localhost/PayU/PHP_Kit/OntTransactionSICreation/PayU_Payment_Response.php"><br><br>

  <label for="curl">CURL:</label><br>
  <input type="text" id="curl" name="curl" value="http://localhost/PayU/PHP_Kit/OntTransactionSICreation/PayU_Payment_Response.php"><br><br>

  <label for="furl">FURL:</label><br>
  <input type="text" id="furl" name="furl" value="http://localhost/PayU/PHP_Kit/OntTransactionSICreation/PayU_Payment_Response.php"><br><br>

  <label for="seamless"><h2>Addition Paramaters for SI:</h2></label><br>

  <label for="si_details">SI Details:</label><br>
  <input type="text" id="si_details" name="si_details" value=""><br><br>

  <input type="submit" value="User Defined Fields">

</form> 
</body>
</html>

