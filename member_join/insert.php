<metak charset="euc-kr">
<?

    $hp=$hp1."-".$hp2."-".$hp3;
    $email=$email1."@".$email2;
    
    $regist_dat=date("Y-m-d (H:i)");
    $ip=$REMORT_ADDR;
    
    include "../member_join/dbconn.php";
    
    $sql="select * from member where id='$id'";
    
    $result=mysql_query($sql,$connect);
    
    $exist_id=mysql_num_rows($result);
    
    if($exist_id){
        echo "<script>
            window.alert('this id already joined');
            history.go(-1);
        </script>";
        
        exit;
    }else{
        
        $sql="insert into member(id, pass, name, nick, hp, email, regist_day, level)";
        
        $sql.="values('$id','$pass','$name','$nick','$hp','$email','$regist_day',9)";
        
        mysql_query($sql,$connect);
        
    }
    
    mysql_close();
    
    echo "<script>
        window.alert('welcome $id');
        location.href='../member_join/member_form.php';
    </script>";
    
  
?>