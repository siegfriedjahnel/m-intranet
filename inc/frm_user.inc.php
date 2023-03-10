<?php
var_dump($_POST['rolle']);
$checked = implode(',', $_POST['rolle']);
$arr = explode(',',$checked);
echo $checked;
var_dump($arr);
?>
<form method="POST" action="" class="input-form">
    <label for="vorname">Vorname</label>
    <input id="vorname" type="text" name="vorname" placeholder="" value="<?php if(isset($vornane))  echo $vorname ?>" required><br>

    <label for="nachname">Nachname</label>
    <input id="nachname" type="text" name="nachname" placeholder="" value="<?php if(isset($nachnane))  echo $nachname ?>" required><br>

    <label for="email">email</label>
    <input id="email" type="email" name="email" placeholder="" value="<?php if(isset($email))  echo $email ?>" required><br>

    <input type="checkbox" name="rolle[]" value="1">Azubi 
    <input type="checkbox" name="rolle[]" value="2">Lehrer 
    <input type="checkbox" name="rolle[]" value="3">Admin   

    <br>
    <input type="hidden" name="" value="">
    
    <input type="submit" name="submit" value="senden">


</form>