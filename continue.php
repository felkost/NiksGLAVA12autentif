<?php
session_start();

if (isset($_SESSION['username']))
{
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $forename = $_SESSION['forename'];
    $surname  = $_SESSION['surname'];

    destroy_session_and_data();

    echo "З поверненням $forename.<br>
          Ваше повне ім'я $forename $surname.<br>
          Ваше ім'я користувача '$username'
          та Ваш пароль '$password'.";
}
else echo "Будь ласка <a href='authenticate2.php'>натисніть тут</a> щоб увійти.";

function destroy_session_and_data()
{
    $_SESSION = array();
    setcookie(session_name(), '', time() - 2592000, '/');
    session_destroy();
}
?>
