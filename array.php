<html>
    <head>
        <meta http-equiv='Content-Type' content="text/html; charset=utf-8" />
        <title>php_array</title>
    </head>
    <body>

        <? 

            $score[0]=78;
            $score[1]=83;
            $score[2]=97;
            $score[3]=88;
            $score[4]=78;


            $sum = 0;

            for($a =0; $a<count($score); $a++){

                $sum= $sum + $score[$a];
            }

            $avg = $sum/5;

            print "subject_score : $score[0], $score[1], $score[2], $score[3], $score[4]<br>";
            print "total : $sum, average : $avg";

            //--------------------------------------------------------------------------------

            $eng_score = array(87,76,98,87,87,93,79,85,88,63,74,84,93,89,81,70,80,95);

            $sum=0;

            for($a=0; $a<count($eng_score); $a++){

                $sum += $eng_score[$a];
            }

            $avg = $sum / count($eng_score);

            echo "<br>english_score :";

            for($a=0; $a<count($eng_score); $a++){
                echo "$eng_score[$a]"." ";
            }

            echo "<br> english_total : $sum";
            echo "<br> english_average : $avg <br><br><br>";

            //--------------------------------------------------------------------------------

            $student_score = array(array(88,98,96,77,63), array(86,77,66,86,93), array(74,83,95,86,97));

            for($i=0; $i< count($student_score); $i++){
                
                for($j=0; $j<count($student_score[$i]); $j++){
                    echo "\$student_score[$i][$j] =". $student_score[$i][$j]. "<br>";
                }

                echo "<br>";
            }

            for($i=0; $i< count($student_score); $i++){

                $sum = 0;

                for($j=0; $j<count($student_score[$i]); $j++){
                
                    $sum += $student_score[$i][$j];
                }

                $avg= $sum /count($student_score[$i]);

                $student_num = $i +1;

                echo "$student_num th student's score => total : $sum, average : $avg <br>";
            }

        ?>

    </body>
</html>