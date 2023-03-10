 <?php
 echo "<p>user: ". $_SERVER['PHP_AUTH_USER']."</p>";

 ?>
 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Intranet-Landingpage</title>
<meta name="author" content="name">
<meta name="description" content="description here">
<meta name="keywords" content="keywords,here">
<link rel="shortcut icon" href="favicon.ico" >

</head>
<body>
    <h1>INTRANET</h1>
<p><a href = "user.php">User-login</a></p>
<p><a href = "admin.php">Admin-login</a></p>
<p><a href = "index.php?action=sendNewPW">Passwort vergessen</a></p>
<p><a href = "index.php?action=sendMyUsername">Username vergessen</a></p>

<?php
if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = "default";
}

switch($action){
    case "sendNewPW":
        echo "<p>Bitte senden sie mir ein neues Passwort an diese email-Adresse:</p>";
        echo "<p><form method = 'GET' action='index.php?action=newPWSent'><input type='email'> <input type='submit' value='senden'></form</p>";
    break;
    case "sendMyUsername":

    break;
}

?>
</body>

</html>