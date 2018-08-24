<?php
    header('Content-Type: text/html; charset=UTF-8');
    if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '남자아이'){
            if($data[13] == '강원'){
            for ($c=0; $c < $num; $c++) {
                // echo $data[$c] . "<br />,";
                $data_test[$c] = $data[$c];
            }
            $randomNum = mt_rand(1, 3);
            if($randomNum == 3) break;
            }
            }
            }
            
            }
            if($data_test[0] == NULL) {echo "없습니다.";}
            else {echo "$data_test[0] $data_test[1]";}
            fclose($handle);
            }
?>