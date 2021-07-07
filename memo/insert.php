<meta charset="euc-kr">
<?
 
    if(!$content){
        echo "<script>
                window.alert('fill out content');
                history.go(-1)
            </script>";
        exit;
    }


    $regist_day=date("Y-m-d (H:i)");

    include "../memo/dbconn.php";

    $sql="insert into memo (name, content, regist_day) ";
    $sql.="values('$name','$content','$regist_day' )";

    mysql_query($sql, $connect);

    mysql_close();

    echo "<script>
            location.href='memo.php';     
        </script>";

    


?>