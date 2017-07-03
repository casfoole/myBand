<?php
/**
 * Created by PhpStorm.
 * User: cas
 * Date: 29-6-2017
 * Time: 12:41
 */
//         Cookies
setcookie('username','$username',time() + (3600 * 24 * 7));

$username = strip_tags($_COOKIE['username']);
echo 'welkom' . $username . '<br>';

session_start();
$_SESSION['username'] = 'Harry';

echo 'Hallo ' . $_SESSION['username'];

session_start();

if (!isset($_SESSION['id'])) {
    if (isset($_COOKIE['id']) && isset($_COOKIE['username'])) {
        $_SESSION['id'] = $_COOKIE['id'];
        $_SESSION['username'] = $_COOKIE['username'];


        // Sessions
        $dbc = mysqli_connect('localhost','22937_cas','22937','myband');
        $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
        $password = mysqli_real_escape_string($dbc, trim($_POST['password']));
        $password = hash('sha512',$password);

        if (!empty($username) && !empty($password)) {
            $query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
            $result = mysqli_real_escape_string($dbc, $query);

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);

                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];

                setcookie('id', $row['id'], time() + (60 * 60 * 24 * 30));
                setcookie('username', $row['username'], time() + (60 * 60 * 24 * 30));

                header('Location: index.php');


            }
        }

    }
}
