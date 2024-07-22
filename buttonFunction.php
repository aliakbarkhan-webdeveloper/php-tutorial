<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Button functionality</title>
  </head>
  <body>
<form action="" method="post">
<button type="submit" name="btn">Submit</button>

</form>

  </body>
</html>
<?php
if ( isset($_POST["btn"])) {
    # code...
    btnClicked();
}
function btnClicked(){
    echo "submit button is Working";
}
?>