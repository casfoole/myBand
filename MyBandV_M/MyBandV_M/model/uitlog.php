<?php
/**
 * Created by PhpStorm.
 * User: cas
 * Date: 29-6-2017
 * Time: 12:41
 */


session_start();
//als de variable id bestaat.
if (isset($_SESSION['id'])) {
    // sessievariabelen vernietigen
    $_SESSION = array();
    // cookeie met sess-id vernietigen
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(),'',time() - 3600);
    }
    //sessie vernietigen
    session_destroy();
}
// cookies met id en username vernietigen
setcookie('id', '', time() - 3600);
setcookie('username', '', time() - 3600);

header("location:index.php");

