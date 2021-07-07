<?
    $scale=5;
    
    include "../memo/dbconn.php";

    $sql="select * from memo order by num desc";
    $result=mysql_query($sql, $connect);

    $total_record=mysql_num_rows($result);

    //check total page 
    if($total_record & $scale==0){
        $total_page=floor($total_record/$scale);
    }else{
        $total_page=floor($total_record/$scale)+1;
    }


    //page number default 1
    if(!$page){
        $page=1;
    }


    //check start page depends on page number 
    $start=($page-1) * $scale;
    $number=$total_record-$start;


?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=euc-kr"/>  
     
    <style>
  
        
    </style>
    <script>
         
        function insert_memo(){
             document.memo_form.submit();
        }
        
        function insert_ripple(){
             document.getElementById('ripple_form').submit();
        }
        
 
         
         
      
    </script>
    </head>
<body>
   <div style="width:700px;"> 
    <div id="memo_row1" style="position:relative;">
        <form name="memo_form" method="post" action="insert.php">
            <div id="memo_writer" style="margin-bottom:10px;">writer: <input type="text" name="name"></div>
            <div id="memo1">
                <textarea name="content" cols="95" rows="6"></textarea>
            </div>
            <div id="memo2" style="position:absolute;right:0;top:0;">
                <input type="button" onclick="insert_memo()" value="save">
            </div>
        </form>
    </div>
     
    <?
        for($i=$start; $i<$start+$scale && $i<$total_record; $i++){
        
            mysql_data_seek($result, $i);
            
            $row= mysql_fetch_array($result);
            
            $memo_num=$row[num];
            $memo_name=$row[name];
            $memo_content=$row[content];
            $memo_date=$row[regist_day];
            
            
            $memo_content = str_replace("\n", "<br>", $row[content]);
            
            $memo_content = str_replace("", "&nbsp;", $row[content]);
     
    
    ?>
    
    <div id="memo_write_title">
        <div style="height:35px; border-bottom: 1px dotted #cccccc; line-height:35px;border-top: 1px solid #aaaaaa;position:relative;">
            <div id="writer_title1" style="float:left;width:10%;"><?=$number ?></div>
            <div id="writer_title3" style="float:left;width:10%;"><?=$memo_name ?></div>
            <div id="writer_title2"><?=$memo_date ?></div>
            <input type="button" onclick="location.href='delete.php?num=<?=$memo_num ?>'" value="delete" style="position:absolute;right:0;top:6px;">
        </div>
           <div>   
            <div id="writer_title4" style="border-bottom:1px solid #cccccc; line-height:50px;"><?=$memo_content ?></div>
        </div>
         
    </div>
    <div id="ripple" style="padding-left:100px;position:relative;">
  
        <div id="ripple1" style="padding-top: 20px;">
            <?
                $sql="select * from memo_ripple where parent='$memo_num'";
                $ripple_result=mysql_query($sql);
            
                while($row_ripple=mysql_fetch_array($ripple_result))
                {
                    $ripple_num=$row_ripple[num];
                    $ripple_name=$row_ripple[name];
                    
                    $ripple_content = str_replace("\n", "<br>", $row_ripple[content]);
            
                    $ripple_content = str_replace("", "&nbsp;", $row_ripple[content]);
     
                    $ripple_date=$row[regist_day];
                
            ?>
                <div id="ripple_title" style="border-bottom: 1px solid #cccccc;margin-bottom: 10px;margin-top: 10px;">
                    <div>
                        <div id="ripple_title1" style="float:left;width:15%;">Comment</div>
                        <div id="ripple_title2" style="float:left;width:10%;"><?=$ripple_name ?></div>
                        <div id="ripple_title3"><?=$ripple_date ?></div>
                    </div>
                    <div>   
                        <div id="ripple_title4"><?=$ripple_content ?></div>
                    </div>
                </div>
            <?
                }
            ?>
     
            
            <form name="ripple_form" id="ripple_form" method="post" action="insert_ripple.php">
                <input type="hidden" name="num" value="<?=$memo_num ?>">
                <div id="ripple_issert">
                    <div id="ripple_textarea">
                        <textarea name="ripple_content"  cols="80" rows="3"></textarea>
                    </div>
                    <div id="ripple_button" style="text-align:right; margin-top:10px;">
                        <input type="button" onclick="insert_ripple()" value="save">
                    </div>
                </div>
            </form>
        </div></div>
        <div class="clear"></div>
        <?
            $number--;
            }
            mysql_close();
        ?>
        
        <div id="page_num" style="text-align:center;">
            before &nbsp;&nbsp;&nbsp;&nbsp;
            <?
                for($i=1; $i <= $total_page; $i++){
                    if($page==$i){
                        echo "<b>$i</b>";
                    }else{
                        echo "<a href='memo.php?page=$i'>$i</a>";
                    }
                }
            ?>
            &nbsp;&nbsp;&nbsp;&nbsp; after 
        </div>
    </div>
   
  
</body>
</html>