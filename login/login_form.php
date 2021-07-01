<?
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login_form</title>
</head>
<body>
    <?
    if(($_COOKIE["userid"])){
        $_SESSION["userid"] =$_COOKIE["userid"];
    }
    ?>
   <?
    if(empty($_SESSION["userid"])){
    ?>
        <form action="login_result.php" method="post"> 
            <input type="text" name="userid" placeholder="id" required autofocus><br>
            <input type="password" name="pw" placeholder="pw" required><br>
            <input type="checkbox" name="chbox" value="yes">stay sign in<br>
            <input type="submit" value="sign in">
        </form>
    <?
    }else{
    ?>
        Welcome <?=$_SESSION['userid']?><br>
        <a href="logout.php">sign out</a> 
    <?
    }
    ?>
</body>
</html>