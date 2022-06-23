<?php
/*Author:Fortune Langat
  Date:24th june 2022
  Purpose:Sell Templates on YouTube
  */


/*CODE TO INITIATE STK PUSH NOTIFICATION*/

/*MUST CHECK IF PAYMENT IS SUCCESSFUL BEFORE SHOWING THE SUCCESS PAGE AND SENDING SOURCE CODE*/

if(isset($_POST['submit'])){

    $amount = 100; //Amount to transact 
    $phone = $_POST['phone']; // Phone number paying
    $whatsapp_phone = $_POST['whatsapp_phone']; // Phone number receiving the source code
    $Account_no = 'COMRADE MARKET'; // Enter account number optional
    $url = 'https://tinypesa.com/api/v1/express/initialize';
    $data = array(
        'amount' => $amount,
        'msisdn' => $phone,
        'account_no'=>$Account_no
    );
    $headers = array(
        'Content-Type: application/x-www-form-urlencoded',
        'ApiKey: UX0bRhL3c20' // Replace with your api key
     );
    $info = http_build_query($data);
    
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $info);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $resp = curl_exec($curl);
    $msg_resp = json_decode($resp);
    
    
    if ($msg_resp ->success == 'true') {
        echo "<center> <h2>WAIT FOR  STK POP UP🔥</h2></center>";
      } else {
        echo "Transaction Failed";
       
      }
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIMP 1.0 🔥😎</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="login-dark">
        <form method="post">
            <center> <h5>Purchase Source Code</h5> </center>
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group caution">  </div>
            <div class="form-group"><input class="form-control" type="text" name="phone" placeholder="Enter Mpesa Number"></div>
            <div class="form-group"><input class="form-control" type="text" name="whatsapp_phone" placeholder="Enter Whatsapp Number"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" value="submit" name="submit">Download Now</button></div><a href="#" class="forgot">Contact Support</a></form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>