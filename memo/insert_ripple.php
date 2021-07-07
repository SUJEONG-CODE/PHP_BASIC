<meta charset="euc-kr">
<?
 
    if(!$ripple_content){
        echo "<script>
                window.alert('fill out comment');
                history.go(-1)
            </script>";
        exit;
    }


    $regist_day=date("Y-m-d (H:i)");

    include "../memo/dbconn.php";

    $sql="insert into  memo_ripple (parent, content,regist_day) ";
    $sql.="values('$num','$ripple_content','$regist_day' )";

    mysql_query($sql, $connect);

    mysql_close();

    echo "<script>
            location.href='memo.php';     
        </script>";

    


?>