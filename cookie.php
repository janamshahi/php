<?php
$cookie_name = "collage";
$cookie_value = "spa collage";

setcookie($cookie_name, $cookie_value, time() + (60* 1), "/");
?>

<html>
<body>
<?php
if (isset($_COOKIE[$cookie_name])) {
    echo "Cookie value is: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie not set";
}
?>
</body>
</html>
