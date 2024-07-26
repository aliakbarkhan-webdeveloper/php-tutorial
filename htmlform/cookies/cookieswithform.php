<form action="" method="post">
    <input type="text" name="name" placeholder="name"><br><br>
    <input type="text" name="user" placeholder="user name"><br><br>
    <button type="submit" name="button" value="set">set cookie</button><br><br>
    <button type="submit" name="button" value="display">get cookie</button><br><br>
    <button type="submit" name="button" value="delete">delete cookie</button>
    
</form>
<?php
if (isset($_POST["button"])) {
    # code...

    if ($_POST["button"]=="set") {
        # code...

        $val=$_POST["name"];
        setcookie("cookie",$val);
    }
    if ($_POST["button"]=="delete") {
        # code...
        setcookie("cookie",null,-1);
    }
}
?>