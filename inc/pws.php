<?php
$plainPW = "123346zhjlkl";
$hashPW = password_hash($plainPW,PASSWORD_DEFAULT);
echo "<p>$hashPW</p>";
if(password_verify($plainPW, $hashPW)){
    echo "<p>fits!!!</p>";
}else{
    echo "<p>NOOOOO!!!!!!!!!</p>";
}

?>