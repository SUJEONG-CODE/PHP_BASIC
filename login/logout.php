<?
    session_start();
 
    unset($_SESSION['userid']);
    unset($_SESSION['pw']);
    setcookie("userid","");
    setcookie("pw","");

    header("Location:http://localhost/login/login_form.php");
?>