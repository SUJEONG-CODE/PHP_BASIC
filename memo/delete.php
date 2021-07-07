<meta charset="euc-kr">
<?
 
  

    include "../memo/dbconn.php";

    $sql="delete from memo where num=$num";
  

    $result= mysql_query($sql, $connect);


    if($result){
        
        $sql = "select parent from memo_ripple where parent=$num";
        $result= mysql_query($sql, $connect);
        $cnt=mysql_num_rows($result);
        
        if($cnt >0 ){
            $sql="delete from memo_ripple where parent=$num";
            $result= mysql_query($sql, $connect);
        }
         
    }

    mysql_close();

    echo "<script>
            location.href='memo.php';     
        </script>";

    


?>