<?php
session_start();
// although 2nd and 3rd line is not needed session_destroy() is needed,
// but just to be extra sure that no session remains in the cache.
$_SESSION = array();
unset($_SESSION);
session_destroy();
echo '<script>window.location.href="https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://localhost:8080/ML/masterlogin.html";</script>';
?>