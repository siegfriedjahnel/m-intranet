 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>title</title>
<meta name="author" content="name">
<meta name="description" content="description here">
<meta name="keywords" content="keywords,here">

</head>
<body>
<?php
$hash1 = password_hash($_POST['passwort1'], PASSWORD_DEFAULT);
$hash2 = password_hash($_POST['passwort2'], PASSWORD_DEFAULT);
if(password_verify($_POST['passwort2'], $hash1) && password_verify($_POST['passwort1'], $hash2)){
    echo "<p>OK!!!!!!</p>";

}
echo "<p>$_POST[passwort1]</p>";
echo "<p>$_POST[passwort2]</p>";
echo "<p></p>";
echo "<p>hash1: $hash1</p>";
echo "<p>hash2: $hash2</p>";

?>
<form method = "POST">
<label for="vorname">Passwort1</label>    <input id = "vorname" type = "text" name = "vorname"> <br>
<label for="nachname">Passwort2</label>    <input id = "nachname" type = "text" name = "nachname"> <br>
<label for="username">Passwort2</label>    <input id = "username" type = "text" name = "username"> <br>
<label for="passwort">Passwort2</label>    <input id = "passwort" type = "text" name = "passwort"> <br>
<input type = "submit">
</form>
</body>
<script></script>
</html>