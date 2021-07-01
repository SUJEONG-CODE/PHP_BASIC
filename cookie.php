<html>
    <head>
        <meta http-equiv='Content-Type' content="text/html; charset=utf-8" />
        <title>php</title>
    </head>
    <body>

        <?
        
            session_start();

            // how to set cookie
            $a= setcookie("userid", "sujeong", time()+60*60*24);
            $b= setcookie("pw", "123456", time()+60*60*24);

            echo "Welcome".$_SESSION["userid"];

            if($a && $b){
                echo "cookie complete 'userid' and 'pw'";
                echo "cookie 'userid' and 'pw' lasts a day'";

            }
        

            // how to use cookie
            //if register_globals = On

            echo "when register_globals is On userid is $userid <br>";
            echo "when register_globals is On pw is $pw <br>";  


            //if register_globals = Off
            $userid = $_COOKIE["userid"];
            $pw=$_COOKIE["pw"];
            echo "when register_globals is Off userid is $userid <br>";
            echo "when register_globals is Off pw is $pw <br>";  





        ?>

    </body>
</html>