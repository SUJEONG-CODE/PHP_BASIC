<?
    session_start();
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=euc-kr"/>  
     
    <style>
        *{
            list-style: none;
        }

        #join1{float: left; width: 22%;}
        #join2{float: left; width: 78%;}
        #id1{float: left; }
        #nick{float: left; }
        
    </style>
    <script>
         
        function check_id(){
            window.open("check_id.php?id="+document.member_form.id.value, "IDcheck"
                       ,"left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
        }
        
         function check_nick(){
            window.open("check_nick.php?nick="+document.member_form.nick.value, "NICKcheck"
                       ,"left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
        }
        
        
        function check_input(){
            
            if(!document.member_form.id.value){
                alert("check id");
                document.member_form.id.focus();
                return;
            }
            
            if(!document.member_form.pass.value){
                alert("check password");
                document.member_form.pass.focus();
                return;
            }
            
            if(!document.member_form.pass_confirm.value){
                alert("check pass_confirm");
                document.member_form.pass_confirm.focus();
                return;
            }
            
            if(!document.member_form.name.value){
                alert("check name");
                document.member_form.name.focus();
                return;
            }
            
            if(!document.member_form.nick.value){
                alert("check nickname");
                document.member_form.nick.focus();
                return;
            }
            
            if(!document.member_form.hp2.value || !document.member_form.hp3.value){
                alert("check phone");
                document.member_form.hp2.focus();
                return;
            }
            
            if(document.member_form.pass.value != document.member_form.pass_confirm.value  ){
                alert("password is not correct plese check it");
                document.member_form.pass.focus();
                document.member_form.pass.select();
                return;
            }
            
            document.member_form.submit();
            
        }
        
        function reset_from(){
            document.member_form.id.value='';
            document.member_form.pass.value='';
            document.member_form.pass_confirm.value='';
            document.member_form.name.value='';
            document.member_form.nick.value='';
            document.member_form.hp1.value='010';
            document.member_form.hp2.value='';
            document.member_form.hp3.value='';
            document.member_form.email1.value='';
            document.member_form.email2.value='';
            
            document.member_form.id.focus();   
        }
    </script>
    </head>
<body>
<form name="member_form" method="post" action="insert.php"> 
<div id="form_join" style="border: 1px solid #cccccc;width:70%;">
   <div id="join1">
       <ul>
           <li style="height: 45px;">*ID</li>
           <li>*PASSWORD</li>
           <li>*CHECK PASSWORD</li>
           <li>*NAME</li>
           <li>*NICKNAME</li>
           <li>*PHONE</li>
           <li>*EMAIL</li>
       </ul>
   </div>
    <div id="join2">
        <ul>
            <li>
                <div id="id1"><input type="text" name="id"></div>
                <div id="id2"><input type="button" onclick="check_id()" value="double_check"></div>
                <div id="id3">only use 4-12 lower case, number and special symbol(_)</div>
            </li>
            <li><input type="password" name="pass"></li>
            <li><input type="password" name="pass_confirm"></li>
            <li><input type="text" name="name"></li>
            <li>
                <div id="nick"><input type="text" name="nick"></div>
                <div id="nick2"><input type="button" onclick="check_nick()" value="double_check"></div>
            </li>
            <li>
                <select name="hp1" class="hp">
                    <option value="010">010</option>
                    <option value="011">011</option>
                    <option value="016">016</option>
                    <option value="017">017</option>
                    <option value="018">018</option>
                    <option value="019">019</option>   
                </select>
                -
                <input type="text" class="hp" name="hp2">
                -
                <input type="text" class="hp" name="hp3">
            </li>
            <li>
                <input type="text" id="email1" name="email1">@<input type="text" name="email2">
            </li>
        </ul>
    </div>
    <div class="clear"></div>
    <div id="must">* is nessary</div>
    <div style="text-align:center;"> 
        <input type="button" onclick="check_input()" value="save"> 
        <input type="button" onclick="reset_from()" value="reset"> 
    </div>
</div>

 
</form>
</body>
</html>