<?
    session_start();

    $userid = $_REQUEST["userid"];
    $pw = $_REQUEST["pw"];
    //$chbox = $_REQUEST["chbox"];

    if($userid =="admin" && $pw =="123456"){
        
        
        if(isset( $_REQUEST["chbox"])){

            // how to set cookie
            $a= setcookie("userid", $userid, time()+60*60*24);
            $b= setcookie("pw", $pw, time()+60*60*24);

        } 

        
        $_SESSION['userid']=$userid; //if admin success sign in
        header("Location:http://localhost/login/login_form.php");
        exit;
    }else{ 
?>
        <script>
            alert("there is wrong userid and pw");
            history.back();
        </script>
<?
    }
?>