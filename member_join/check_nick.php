<metak charset="euc-kr">
<?

    if(!$nick){
        echo "check nickname";
    }else{
        
        include "../member_join/dbconn.php";
        
        $sql="select * from member where nick='$nick'";
        
        $result=mysql_query($sql, $connect);
        
        $num_record=mysql_num_rows($result);
        
        if($num_record){
            echo "nickname doubled<br>";
            echo "please use other nickname<br>";
        }else{
            echo "usable nickname";
        }
        
        mysql_close();
        
    }
?>