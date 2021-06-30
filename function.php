<html>
    <head>
        <meta http-equiv='Content-Type' content="text/html; charset=utf-8" />
        <title>php_function</title>
        <style>
        table {
            border: 1px solid #cccccc;
       }

       
        </style>
    </head>
    <body>
        <div> 
            <table>
                <tr>
                    <td colspan="2">php_내장함수(수학)</td>
                </tr>
                <tr>
                    <td>abs() </td>
                    <td>절대값 </td>
                </tr>
                <tr>
                    <td>sin()</td>
                    <td>삼각형의 사인값 계산</td>
                </tr>
                <tr>
                    <td>cos()</td>
                    <td>삼각형의 사인값 계산</td>
                </tr>
                <tr>
                    <td>tan()</td>
                    <td>삼각형의 사인값 계산</td>
                </tr>
                <tr>
                    <td>date()</td>
                    <td>현재 날짜</td>
                </tr>
                <tr>
                    <td>ceil()</td>
                    <td>소수점 아래에서 올린 정수값</td>
                </tr>

                <tr>
                    <td>floor()</td>
                    <td>소수점 아래에서 내린 정수값</td>
                </tr>
                <tr>
                    <td>round()</td>
                    <td>반올림값 계산</td>
                </tr>
                <tr>
                    <td>date()</td>
                    <td>삼각형의 사인값 계산</td>
                </tr>
                <tr>
                    <td>sqrt()</td>
                    <td>제곱근 계산</td>
                </tr>
                <tr>
                    <td>rand()</td>
                    <td>임의의 난수 계산</td>
                </tr>
            </table>
            <br><br> 
            <table>
                <tr>
                    <td colspan="2">php_내장함수(문자열)</td>
                </tr>
                <tr>
                    <td>echo()</td>
                    <td>문자열 출력</td>
                </tr>
                <tr>
                    <td>explode()</td>
                    <td>특정문자 기준으로 문자열 분리</td>
                </tr>
                <tr>
                    <td>str_len()</td>
                    <td>문자열 길이 계산</td>
                </tr>
                <tr>
                    <td>str_replace()</td>
                    <td>문자열 바꾸기</td>
                </tr>
                <tr>
                    <td>substr()</td>
                    <td>문자열에서 문자열의 일부 추출</td>
                </tr>
                <tr>
                    <td>nl2br()</td>
                    <td>행바꿈 (\n)을 <br> 태그로 변환</td>
                </tr>
                <tr>
                    <td>sprinf()</td>
                    <td>문자열을 특정 양식에 맞춤 </td>
                </tr>
            </table>
            <br><br>
            <table>
                <tr>
                    <td colspan="2">php_내장함수(파일)</td>
                </tr>
                <tr>
                    <td>copy()</td>
                    <td>파일 복사</td>
                </tr>
                <tr>
                    <td>mkdir()</td>
                    <td>디렉터리 생성</td>
                </tr>
                <tr>
                    <td>chdir()</td>
                    <td>디렉터리 변경</td>
                </tr>
                <tr>
                    <td>fopen()</td>
                    <td>파일열기</td>
                </tr>
                <tr>
                    <td>fread()</td>
                    <td>파일읽기</td>
                </tr>
                <tr>
                    <td>fwrite()</td>
                    <td>파일쓰기</td>
                </tr>
            </table>
            <br><br>
            <table style="border:1px solid #ffffff;">
                <tr>
                    <td colspan="2">php_내장함수(파일)</td>
                </tr>
                <tr>
                    <td>mysql_connect()</td>
                    <td>데이터베이스 접속</td>
                </tr>
                <tr>
                    <td>mysql_create_db()</td>
                    <td>데이터베이스 생성</td>
                </tr>
                <tr>
                    <td>mysql_drop_db()</td>
                    <td>데이터베이스 삭제</td>
                </tr>
                <tr>
                    <td>mysql_close()</td>
                    <td>데이터베이스 접속 종료</td>
                </tr>
            </table>
        </div>
        
         <br><br>

        <?

            $tel = "010-1111-2222";

            $num_tel = strlen($tel);

            echo "strlen() function : $num_tel<br>";


            $tel1 = substr($tel, 0, 3);
            $tel2 = substr($tel, 4, 4);
            $tel3 = substr($tel, 9, 4);

            echo "substr() function : $tel1 $tel2 $tel3<br>";

            $phone = explode("-", $tel);

            echo "explode() function : $phone[0] $phone[1] $phone[2]<br>";

        ?>

 
        <?
            function plus($a, $b){
                $c= $a + $b;
                return $c;
            }

            $result= plus(15,25);
            echo "user-defined function : $result <br>";

            $result= plus(15,55);
            echo "user-defined function : $result <br>";


            function plus_minus($a, $b, $c){
                $d = $a + $b - $c;
                return $d;
            }

            $i = 100;
            $j = 200;
            $k = 300;

            $result = plus_minus($i, $j, $k);
            echo "user-defined function : $result <br>"; 


            function total($a, $b){

                $sum=0;
                while($a <= $b){
                    $sum = $sum +$a;
                    $a++;
                }

                return $sum;
            }

            $from =1;
            $to =100;

            $result = total($from, $to);

            echo "from $from to $to total : $result";


            //caculate international age(depending on current date)
            function man_age($year, $month, $day, $b_year, $b_month, $b_day){

                //$year, $month, $day current date
                //$b_year, $b_month, $b_day birth date

                if($b_month < $month){
                    $age= $year- $b_year;
                }else if($b_month==$month){
                    
                    if($b_day <= $day){
                        $age=$year-$b_year;
                    }else{
                        $age=$year-$b_year-1; 
                    }
                }else{
                    $age=$year-$b_year-1; 
                }

                return $age;

            }
        
        ?>

    </body>
</html>