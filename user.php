<?php
session_start();
if (!isset($_SERVER['PHP_AUTH_USER']) || $_SESSION['loginAttempt'] == FALSE) {
    $_SESSION['loginAttempt'] = TRUE;
    header('WWW-Authenticate: Basic realm="My Website"');
    header('HTTP/1.0 401 Unauthorized');
    echo "<p>Access denied. You did not enter a user.</p>";
    echo "<p><a href='index.php'>zurück zur Startseite</a><p>";
    exit; 
}

//$pw_hash = select pw_hash from user where unsername = '$_SERVER['PHP_AUTH_USER']'

//if(password_verify($plainPW, hashPW))

if ($_SERVER['PHP_AUTH_PW'] != '1234') {
    header('WWW-Authenticate: Basic realm="My Website"');
    header('HTTP/1.0 401 Unauthorized');
    echo '<p>Access denied. You did  enter a  wrong password.</p>';
    echo "<p><a href='index.php'>zurück zur Startseite</a><p>";
    exit; 
    
} 
echo '<p>Hallo '.$_SERVER['PHP_AUTH_USER'].'</p>';
echo "<p>session: $_SESSION[loginAttempt]</p>";
echo "<p><a href='?action=logout'>abmelden</a><p>";

if(isset($_GET['action']) && $_GET['action']=="logout"){
    session_destroy();
    header('Location: index.php');
    break;
}
}
//----------------------------------------------------------------



?>