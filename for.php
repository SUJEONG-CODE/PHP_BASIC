
   

   <html>
    <head>
        <meta http-equiv='Content-Type' content="text/html; charset=utf-8" />
        <title>php</title>
    </head>
    <body>
        <?
            echo "-----------------<br>";
                
            for($a=2; $a<=9; $a++){
                for($b=1; $b<=9; $b++){
                    $c = $a * $b;
                    echo "$a * $b = $c <br>";
                }
                
                echo "-----------------<br>";
            }
        
         
        
            for($a=1; $a<=10; $a++){
                
                for($b=1; $b<=$a; $b++){
                    echo "* ";
                }
                
                echo "<br>";
            }
        ?>
    </body>
</html>