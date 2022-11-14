<!DOCTYPE html>
<html>

<head>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>
<body>

<h2>PayU Biz - SEAMLESS INTEGRATION</h2>

<form id="payment_form" action="./PayU_Payment_action.php" method="POST">
  <label for="fname">Key:</label><br>
  <input type="text" id="key" name="key" value="A6lB8r"><br>

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
  <input type="text" id="salt" name="salt" value="c5KkKHlv"><br><br>

  <label for="surl">SURL:</label><br>
  <input type="text" id="surl" name="surl" value="http://localhost/PayU/PHP_Kit/OnTransactionSplit/PayU_Payment_Response.php"><br><br>

  <label for="curl">CURL:</label><br>
  <input type="text" id="curl" name="curl" value="http://localhost/PayU/PHP_Kit/OnTransactionSplit/PayU_Payment_Response.php"><br><br>

  <label for="furl">FURL:</label><br>
  <input type="text" id="furl" name="furl" value="http://localhost/PayU/PHP_Kit/OnTransactionSplit/PayU_Payment_Response.php"><br><br>

  <!--label for="lname">Hash:</label><br>
  <input type="text" id="hash" name="hash" value=""><br><br-->

  <label for="seamless"><h2>Addition Paramaters for Split:</h2></label><br>


  <label for="splitRequest">Split Request:</label><br>
  <input type="text" id="splitRequest" name="splitRequest" value=""><br><br>

  <!--input type="button" value="getJSON_Data" onclick="submitData()"-->
  <!--input type="button" value="getJSON_Data" onclick="createJSON()"-->


  <!--label for="type">Type:</label><br>
  <input type="text" id="type" name="type" value="absolute"><br><br>

  <label for="splitInfo">Split Information:</label><br>
  <input type="text" id="splitInfo" name="splitInfo" value=""><br><br>

  <input type="text" id="showJson" name="showJson" value=""><br><br-->

  <input type="submit" value="User Defined Fields">

</form> 

<script>
/*function submitData() {

  var TYPE = $('#type').val();
  var SPLITINFO = $('#splitInfo').val();

  jsonObject={
    "Type":"",
    "SplitInfo":""
  }

//"splitRequest" => "{"type":"absolute","splitInfo":{"imAJ7I":{"aggregatorSubTxnId":"633aaaa35b555","aggregatorSubAmt":1,"aggregatorCharges":1}}}"
  jsonObject.Type=TYPE;
  jsonObject.SplitInfo=SPLITINFO;

  var str = JSON.stringify(jsonObject);

  document.write(str);

  alert("Hello! I am an alert box!");
}*/
function createJSON() {

    //var SPLITREQIEST = $('#splitRequest').val();
    //var SPLITREQIEST;

    jsonObject={"type":"absolute",
      "splitInfo":{
        "imAJ7I":{
          "aggregatorSubTxnId":"633aaaa35b555",
          "aggregatorSubAmt":1,"aggregatorCharges":1}
        }
  }


  //jsonObject.splitRequest=SPLITREQIEST;

  var str = JSON.stringify(jsonObject);

  //document.write(str);

  document.getElementById('showJson').innerHTML=str;

  alert("Hello! I am an alert box!");

}



</script>
</body>
</html>

