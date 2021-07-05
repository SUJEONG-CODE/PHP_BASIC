<metak charset="euc-kr">
<?

    if(!$id){
        echo "check id";
    }else{
        
        include "../member_join/dbconn.php";
        
        $sql="select * from member where id='$id'";
        
        $result=mysql_query($sql, $connect);
        
        $num_record=mysql_num_rows($result);
        
        if($num_record){
            echo "id doubled<br>";
            echo "please use other id<br>";
        }else{
            echo "usable id";
        }
        
        mysql_close();
        
    }
?>