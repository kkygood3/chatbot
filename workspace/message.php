<?php
    header('Content-Type: text/html; charset=UTF-8');
    
	//카카오톡에서 보내진 json형식의 값을 decode해줍니다.
    $data = json_decode(file_get_contents('php://input'), true);
    
    //보내진 json에서 사용자가 입력한 값을 저장합니다.
    $content = $data["content"];
    //function으로 이미 구현해둔 php를 불러옵니다.
    
    switch($content)
    {
        case "공지사항":
            echo '
                {
                    "message":
                    {
                        "text": "본 입양추천챗봇은 오픈소스이며\\nMIT 라이센스에 따라 이용이 가능합니다.\\n\\n오류 발생시 언제든지 문의주세요!\\n\\n개발자 : TeamSparta(kkygood3@naver.com)"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["공지사항", "입양추천", "입양시 주의사항"]
                    } 
                }
            ';
            break;

        case "입양추천":
            echo '
                {
                    "message":
                    {
                        "text": "입양을 원하시는 종을 선택해주세요!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["강아지", "고양이", "기타동물", "돌아가기"]
                    } 
                }
            ';
            break;
        
            
		case "강아지":
		    
            echo '
                {
                    "message":
                    {
                        "text": "성별을 골라주세요~"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["남자강아지", "여자강아지", "돌아가기"]
                    } 
                }
            ';
            break;
            
		case "고양이":
		    
            echo '
                {
                    "message":
                    {
                        "text": "성별을 골라주세요~"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["남자고양이", "여자고양이", "돌아가기"]
                    } 
                }
            ';
            break;
            
		case "기타동물":
			
            echo '
                {
                    "message":
                    {
                        "text": "성별을 골라주세요~"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["남자아이", "여자아이","상관없음", "돌아가기"]
                    } 
                }
            ';
            
            break;
        
        case "남자강아지":

            echo '
                {
                    "message":
                    {
                        "text": "지역을 선택해주세요!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["※ 강원도", "※ 경기도", "※ 경상도", "※ 광주광역시", "※ 대구광역시", "※ 부산광역시", "※ 대전광역시", "※ 서울특별시", "※ 세종특별자치시", "※ 울산광역시", "※ 전라도", "※ 제주도","※ 충청도","※ 인천광역시", "돌아가기"]
                    } 
                }
            ';
            break;
        
        case "여자강아지":

            echo '
                {
                    "message":
                    {
                        "text": "지역을 선택해주세요!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["￥ 강원도", "￥ 경기도", "￥ 경상도", "￥ 광주광역시", "￥ 대구광역시", "￥ 부산광역시", "￥ 대전광역시", "￥ 서울특별시", "￥ 세종특별자치시", "￥ 울산광역시", "￥ 전라도", "￥ 제주도","￥ 충청도","￥ 인천광역시", "돌아가기"]
                    } 
                }
            ';
            break;
        
        case "남자고양이":

            echo '
                {
                    "message":
                    {
                        "text": "지역을 선택해주세요!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["♬ 강원도", "♬ 경기도", "♬ 경상도", "♬ 광주광역시", "♬ 대구광역시", "♬ 부산광역시", "♬ 대전광역시", "♬ 서울특별시", "♬ 세종특별자치시", "♬ 울산광역시", "♬ 전라도", "♬ 제주도","♬ 충청도","♬ 인천광역시", "돌아가기"]
                    } 
                }
            ';
            break;
        
        case "여자고양이":

            echo '
                {
                    "message":
                    {
                        "text": "지역을 선택해주세요!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["♪ 강원도", "♪ 경기도", "♪ 경상도", "♪ 광주광역시", "♪ 대구광역시", "♪ 부산광역시", "♪ 대전광역시", "♪ 서울특별시", "♪ 세종특별자치시", "♪ 울산광역시", "♪ 전라도", "♪ 제주도","♪ 충청도","♪ 인천광역시", "돌아가기"]
                    } 
                }
            ';  
            break;
        
        case "남자아이":

            echo '
                {
                    "message":
                    {
                        "text": "지역을 선택해주세요!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["● 강원도", "● 경기도", "● 경상도", "● 광주광역시", "● 대구광역시", "● 부산광역시", "● 대전광역시", "● 서울특별시", "● 세종특별자치시", "● 울산광역시", "● 전라도", "● 제주도","● 충청도","● 인천광역시", "돌아가기"]
                    } 
                }
            ';
            break;
        
        case "여자아이":

            echo '
                {
                    "message":
                    {
                        "text": "지역을 선택해주세요!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["◆ 강원도", "◆ 경기도", "◆ 경상도", "◆ 광주광역시", "◆ 대구광역시", "◆ 부산광역시", "◆ 대전광역시", "◆ 서울특별시", "◆ 세종특별자치시", "◆ 울산광역시", "◆ 전라도", "◆ 제주도","◆ 충청도","◆ 인천광역시", "돌아가기"]
                    } 
                }
            ';
            break;
            
        case "상관없음":
            echo '
                {
                    "message":
                    {
                        "text": "지역을 선택해주세요!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["★ 강원도", "★ 경기도", "★ 경상도", "★ 광주광역시", "★ 대구광역시", "★ 부산광역시", "★ 대전광역시", "★ 서울특별시", "★ 세종특별자치시", "★ 울산광역시", "★ 전라도", "★ 제주도","★ 충청도","★ 인천광역시", "돌아가기"]
                    } 
                }
            ';
            break;
            
        case "※ 강원도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '남자아이'){
            if($data[13] == '강원도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        case "※ 경기도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '남자아이'){
            if($data[13] == '경기도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        case "※ 경상도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '남자아이'){
            if($data[13] == '경상도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        
        case "※ 광주광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '남자아이'){
            if($data[13] == '광주광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        
        case "※ 대구광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '남자아이'){
            if($data[13] == '대구광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            
        case "※ 부산광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '남자아이'){
            if($data[13] == '부산광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            
        case "※ 경기도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '남자아이'){
            if($data[13] == '경기도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            
        case "※ 서울특별시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '남자아이'){
            if($data[13] == '서울특별시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            
        case "※ 세종특별자치시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '남자아이'){
            if($data[13] == '세종특별자치시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            
        case "※ 울산광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '남자아이'){
            if($data[13] == '울산광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            
        case "※ 전라도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '남자아이'){
            if($data[13] == '전라도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            
        case "※ 제주도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '남자아이'){
            if($data[13] == '제주도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            
        case "※ 충청도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '남자아이'){
            if($data[13] == '충청도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            
        case "※ 인천광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '남자아이'){
            if($data[13] == '인천광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        
        case "￥ 강원도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '여자아이'){
            if($data[13] == '강원도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        case "￥ 경기도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '여자아이'){
            if($data[13] == '경기도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            case "￥ 경상도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '여자아이'){
            if($data[13] == '경상도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;

            case "￥ 광주광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '여자아이'){
            if($data[13] == '광주광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            case "￥ 대구광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '여자아이'){
            if($data[13] == '대구광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            case "￥ 부산광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '여자아이'){
            if($data[13] == '부산광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            case "￥ 대전광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '여자아이'){
            if($data[13] == '대전광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            case "￥ 서울특별시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '여자아이'){
            if($data[13] == '서울특별시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            case "￥ 세종특별자치시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '여자아이'){
            if($data[13] == '세종특별자치시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            case "￥ 울산광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '여자아이'){
            if($data[13] == '울산광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            case "￥ 전라도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '여자아이'){
            if($data[13] == '전라도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            case "￥ 제주도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '여자아이'){
            if($data[13] == '제주도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            case "￥ 충청도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '여자아이'){
            if($data[13] == '충청도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            case "￥ 인천광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '개'){
            if($data[14] == '여자아이'){
            if($data[13] == '인천광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        case "♪ 강원도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '여자아이'){
            if($data[13] == '강원도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
case "♪ 경기도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '여자아이'){
            if($data[13] == '경기도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
case "♪ 경상도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '여자아이'){
            if($data[13] == '경상도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
case "♪ 광주광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '여자아이'){
            if($data[13] == '광주광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
case "♪ 대구광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '여자아이'){
            if($data[13] == '대구광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
case "♪ 부산광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '여자아이'){
            if($data[13] == '부산광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
case "♪ 대전광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '여자아이'){
            if($data[13] == '대전광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
case "♪ 서울특별시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '여자아이'){
            if($data[13] == '서울특별시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
case "♪ 세종특별자치시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '여자아이'){
            if($data[13] == '세종특별자치시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
case "♪ 울산광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '여자아이'){
            if($data[13] == '울산광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
case "♪ 전라도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '여자아이'){
            if($data[13] == '전라도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
case "♪ 제주도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '여자아이'){
            if($data[13] == '제주도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
case "♪ 충청도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '여자아이'){
            if($data[13] == '충청도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
case "♪ 인천광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '여자아이'){
            if($data[13] == '인천광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
        case "◆ 강원도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '여자아이'){
            if($data[13] == '강원도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "◆ 경기도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '여자아이'){
            if($data[13] == '경기도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "◆ 경상도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '여자아이'){
            if($data[13] == '경상도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;

case "◆ 광주광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '여자아이'){
            if($data[13] == '광주광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "◆ 대구광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '여자아이'){
            if($data[13] == '대구광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "◆ 부산광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '여자아이'){
            if($data[13] == '부산광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "◆ 대전광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '여자아이'){
            if($data[13] == '대전광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "◆ 서울특별시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '여자아이'){
            if($data[13] == '서울특별시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "◆ 세종특별자치시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '여자아이'){
            if($data[13] == '세종특별자치시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "◆ 울산광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '여자아이'){
            if($data[13] == '울산광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "◆ 전라도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '여자아이'){
            if($data[13] == '전라도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "◆ 제주도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '여자아이'){
            if($data[13] == '제주도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "◆ 충청도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '여자아이'){
            if($data[13] == '충청도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        case "◆ 인천광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '여자아이'){
            if($data[13] == '인천광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        case "★ 강원도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[13] == '강원도'){
            for ($c=0; $c < $num; $c++) {
                // echo $data[$c] . "<br />,";
                $data_test[$c] = $data[$c];
            }
            $randomNum = mt_rand(1, 3);
            if($randomNum == 3) break;
            }
            }
            }
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        case "★ 경기도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[13] == '경기도'){
            for ($c=0; $c < $num; $c++) {
                // echo $data[$c] . "<br />,";
                $data_test[$c] = $data[$c];
            }
            $randomNum = mt_rand(1, 3);
            if($randomNum == 3) break;
            }
            }
            }
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        case "★ 경상도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[13] == '경상도'){
            for ($c=0; $c < $num; $c++) {
                // echo $data[$c] . "<br />,";
                $data_test[$c] = $data[$c];
            }
            $randomNum = mt_rand(1, 3);
            if($randomNum == 3) break;
            }
            }
            }
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        case "★ 광주광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[13] == '광주광역시'){
            for ($c=0; $c < $num; $c++) {
                // echo $data[$c] . "<br />,";
                $data_test[$c] = $data[$c];
            }
            $randomNum = mt_rand(1, 3);
            if($randomNum == 3) break;
            }
            }
            }
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        case "★ 대구광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[13] == '대구광역시'){
            for ($c=0; $c < $num; $c++) {
                // echo $data[$c] . "<br />,";
                $data_test[$c] = $data[$c];
            }
            $randomNum = mt_rand(1, 3);
            if($randomNum == 3) break;
            }
            }
            }
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        case "★ 부산광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[13] == '부산광역시'){
            for ($c=0; $c < $num; $c++) {
                // echo $data[$c] . "<br />,";
                $data_test[$c] = $data[$c];
            }
            $randomNum = mt_rand(1, 3);
            if($randomNum == 3) break;
            }
            }
            }
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        case "★ 대전광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[13] == '대전광역시'){
            for ($c=0; $c < $num; $c++) {
                // echo $data[$c] . "<br />,";
                $data_test[$c] = $data[$c];
            }
            $randomNum = mt_rand(1, 3);
            if($randomNum == 3) break;
            }
            }
            }
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        case "★ 서울특별시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[13] == '서울특별시'){
            for ($c=0; $c < $num; $c++) {
                // echo $data[$c] . "<br />,";
                $data_test[$c] = $data[$c];
            }
            $randomNum = mt_rand(1, 3);
            if($randomNum == 3) break;
            }
            }
            }
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        case "★ 세종특별자치시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[13] == '세종특별자치시'){
            for ($c=0; $c < $num; $c++) {
                // echo $data[$c] . "<br />,";
                $data_test[$c] = $data[$c];
            }
            $randomNum = mt_rand(1, 3);
            if($randomNum == 3) break;
            }
            }
            }
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        case "★ 울산광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[13] == '울산광역시'){
            for ($c=0; $c < $num; $c++) {
                // echo $data[$c] . "<br />,";
                $data_test[$c] = $data[$c];
            }
            $randomNum = mt_rand(1, 3);
            if($randomNum == 3) break;
            }
            }
            }
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        case "★ 전라도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[13] == '전라도'){
            for ($c=0; $c < $num; $c++) {
                // echo $data[$c] . "<br />,";
                $data_test[$c] = $data[$c];
            }
            $randomNum = mt_rand(1, 3);
            if($randomNum == 3) break;
            }
            }
            }
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        case "★ 제주도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[13] == '제주도'){
            for ($c=0; $c < $num; $c++) {
                // echo $data[$c] . "<br />,";
                $data_test[$c] = $data[$c];
            }
            $randomNum = mt_rand(1, 3);
            if($randomNum == 3) break;
            }
            }
            }
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        case "★ 충청도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[13] == '충청도'){
            for ($c=0; $c < $num; $c++) {
                // echo $data[$c] . "<br />,";
                $data_test[$c] = $data[$c];
            }
            $randomNum = mt_rand(1, 3);
            if($randomNum == 3) break;
            }
            }
            }
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        case "★ 인천광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[13] == '인천광역시'){
            for ($c=0; $c < $num; $c++) {
                // echo $data[$c] . "<br />,";
                $data_test[$c] = $data[$c];
            }
            $randomNum = mt_rand(1, 3);
            if($randomNum == 3) break;
            }
            }
            }
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        case "● 강원도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '남자아이'){
            if($data[13] == '강원도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "● 경기도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '남자아이'){
            if($data[13] == '경기도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "● 경상도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '남자아이'){
            if($data[13] == '경상도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "● 광주광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '남자아이'){
            if($data[13] == '광주광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "● 대구광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '남자아이'){
            if($data[13] == '대구광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "● 부산광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '남자아이'){
            if($data[13] == '부산광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "● 대전광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '남자아이'){
            if($data[13] == '대전광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "● 서울특별시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '남자아이'){
            if($data[13] == '서울특별시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "● 세종특별자치시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '남자아이'){
            if($data[13] == '세종특별자치시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "● 울산광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '남자아이'){
            if($data[13] == '울산광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "● 전라도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '남자아이'){
            if($data[13] == '전라도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "● 제주도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '남자아이'){
            if($data[13] == '제주도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "● 충청도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '남자아이'){
            if($data[13] == '충청도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "● 인천광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '기타축종'){
            if($data[14] == '남자아이'){
            if($data[13] == '인천광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
        case "♬ 강원도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '남자아이'){
            if($data[13] == '강원도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "♬ 경기도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '남자아이'){
            if($data[13] == '경기도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "♬ 경상도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '남자아이'){
            if($data[13] == '경상도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;

case "♬ 광주광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '남자아이'){
            if($data[13] == '광주광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "♬ 대구광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '남자아이'){
            if($data[13] == '대구광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "♬ 부산광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '남자아이'){
            if($data[13] == '부산광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "♬ 대전광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '남자아이'){
            if($data[13] == '대전광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "♬ 서울특별시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '남자아이'){
            if($data[13] == '서울특별시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "♬ 세종특별자치시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '남자아이'){
            if($data[13] == '세종특별자치시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "♬ 울산광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '남자아이'){
            if($data[13] == '울산광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "♬ 전라도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '남자아이'){
            if($data[13] == '전라도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "♬ 제주도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '남자아이'){
            if($data[13] == '제주도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "♬ 충청도":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '남자아이'){
            if($data[13] == '충청도'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
case "♬ 인천광역시":
            if (($handle = fopen("animal.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num 라인 : $row: <br /></p>\n";
            // $row++;
            
            if($data[12] == '고양이'){
            if($data[14] == '남자아이'){
            if($data[13] == '인천광역시'){
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
            fclose($handle);
            }
            if($data_test[0] == NULL){
                echo '
                {
                    "message":
                    {
                        "text": "해당 지역에서 관리중인 유기동물이 없습니다!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            }
            echo '
                {
                    "message":
                    {
                        "text": "나이 : '.$data_test[0].'\\n종류 : '.$data_test[4].'\\n발견장소 : '.$data_test[1].'\\n보호소 : '.$data_test[2].'\\n번호 : '.$data_test[7].'\\n색깔 : '.$data_test[3].'\\n특징 : '.$data_test[10].'\\n무게 : '.$data_test[11].'",
                        "photo": {
                        "url": "'.$data_test[8].'",
                        "width": 640,
                        "height": 480}
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
		case "입양시 주의사항":
		    
            echo '
                {
                    "message":
                    {
                        "text": "• 반려동물을 맞이할 환경적 준비, 마음의 각오는 되어 있나요?\\n• 개, 고양이는 10~15년 이상 삽니다. 결혼, 임신, 유학, 이사 등으로 가정환경이 바뀌어도 한번 인연을 맺은 동물은 끝까지 책임지고 보살피겠다는 결심이 섰나요?\\n• 모든 가족과의 합의는 되어 있어요?\\n• 반려동물을 기른 경험은 있나요? 내 동물을 위해 공부할 각오가 되어 있어요?\\n• 아플 때 적절한 치료를 해주고, 중성화수술(불임수술)과 내장칩 삽입을 실천하실거죠?\\n• 입양으로 인한 경제적 부담을 짊어질 의사와 능력이 있나요?\\n• 우리 집에서 키우는 다른 동물과 잘 어울릴 수 있을까요?\\n• 시·군·구청에서 보호하고 있는 유기동물 중 보호시설을 공고한 지 10일이 지나도 주인이 나타나지 않는 경우 일반인에게 분양할 수 있습니다.\\n • 입양 보호시설에 미리 전화로 문의하시고, 담당자의 안내에 따라 방문 일시 등을 예약합니다.\\n• 입양 시 신분증 복사본2장과 개집,개줄,목걸이 등 필요한 물품을 준비하고 보호시설을 방문해 입양계약서를 작성해야 합니다.\\n• 입양 보호시설에는 신청자 본인이 직접 방문해야 합니다.\\n• 미성년자에게는 반려동물을 분양하지 않습니다. 분양을 원하는 미성년자는 부모님의 허락을 얻어 반드시 부모님과 함께 방문해야 합니다.\\n• 동물들이 당신을 기다리고 있습니다. 유기동물에게 사랑을 줄 준비가 되셨나요? \\n"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["돌아가기"]
                    } 
                }
            ';
            break;
            
		case "돌아가기":
		    
            echo '
                {
                    "message":
                    {
                        "text": "메인화면으로 돌아갑니다."
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["공지사항", "입양추천", "입양시 주의사항"]
                    } 
                }
            ';
            break;
            
		default:
		    
			echo '
                {
                    "message":
                    {
                        "text": "지정되지 않은 명령어입니다."
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["공지사항", "입양추천", "입양시 주의사항"]
                    }                
                }
            ';
            break;
	}
?>