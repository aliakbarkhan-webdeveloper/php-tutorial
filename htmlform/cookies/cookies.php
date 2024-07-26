<?php

setcookie("cookietest","cookie is set by Ali",time()+(15),"/");
print_r($_COOKIE["cookiestest"]);
?>