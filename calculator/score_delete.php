<?

    $connect = mysql_connect("localhost", "sujeong", "1234");

    mysql_select_db("sujeong_db",$connect);

    //delete record
    $sql="delete from stud_score where num=$num";
    mysql_query($sql, $connect);

    mysql_close($connect);

    //back to score_list.php
    header("location:score_list.php");

?>