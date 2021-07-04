<meta http-equiv="content-type" content="text/html; charset=euc-kr"/>
<?

    //PHPINFO();
    /*
     if (mysqli_connect_errno($connect)) {
      echo "error " . mysqli_connect_error();
     } else {
      echo "success";
     } 

    */
   
    //connect database
    $connect =mysql_connect("localhost", "sujeong", "1234");
 

    //choose database
    mysql_select_db("sujeong_db",$connect);
    
 
    if($mode=="insert"){
        
      
        $sum=$sub1+$sub2+$sub3+$sub4+$sub5;
        $avg=$sum/5;
        
        $sql="insert into stud_score(name, sub1, sub2, sub3, sub4, sub5, sum, avg) values";
        
        $sql.="('$name', '$sub1', '$sub2', '$sub3', '$sub4', '$sub5', '$sum', '$avg')";
        
        $result=mysql_query($sql, $connect);
        
      
 
    }

   
?>


<meta http-equiv="content-type" content="text/html; charset=euc-kr"/>
<h3>1) insert record</h3>

<form action="score_list.php?mode=insert" method="post">
    <table width="1100" border="1" cellpadding="5">
        <tr>
            <td>name : <input type="text" size="6" name="name"> &nbsp;
                subject1 : <input type="text" size="6" name="sub1"> &nbsp;
                subject2 : <input type="text" size="6" name="sub2"> &nbsp;
                subject3 : <input type="text" size="6" name="sub3"> &nbsp;
                subject4 : <input type="text" size="6" name="sub4"> &nbsp;
                subject5 : <input type="text" size="6" name="sub5">  
            </td>
            <td align="center">
                <input type="submit" value="submit">
            </td>
        </tr>
    </table>
</form>

<p>
    <h3>2) print record</h3>
    <p>
        <a href="score_list.php?mode=big_first">descending sort</a>
        <a href="score_list.php?mode=small_first">ascending sort</a>
    </p>
</p>
    <!--start title-->
    <table width="720" border="1" cellpadding="5">
       <tr align="center" bgcolor="#eeeeee">
            <td>num</td>
            <td>name</td>
            <td>subject1</td>
            <td>subject2</td>
            <td>subject3</td>
            <td>subject4</td>
            <td>subject5</td>
            <td>total</td>
            <td>average</td>
            <td>&nbsp;</td>
       </tr>
    
    <?
        if($mode=="big_first"){
            $sql="select * from stud_score order by sum desc";
        }else if($mode=="small_first"){
            $sql="select * from stud_score order by sum";
        }else{
            $sql="select * from stud_score";
        }
        
        $result=mysql_query($sql);
        
        $count=1;
        
        while($row=mysql_fetch_array($result)){
            
            $avg=round($row[avg],1);
            
            $num=$row[num];
            
            echo "<tr align='center'>
                <td>$count</td>
                <td>$row[name]</td>
                <td>$row[sub1]</td>
                <td>$row[sub2]</td>
                <td>$row[sub3]</td>
                <td>$row[sub4]</td>
                <td>$row[sub5]</td>
                <td>$row[sum]</td>
                <td>$avg</td>
                <td><a href='score_delete.php?num=$num'>[delete]</a></td>
                </tr>";
            
            $count++;
        }
        
        mysql_close();
        
    ?>
    </table>
    
    
    
 
