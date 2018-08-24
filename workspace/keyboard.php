<?php
    header('Content-Type: text/html; charset=UTF-8');
        
    setcookie('kind', '개', time() + 3600);
    
    setcookie('sex', '남자아이', time() + 3600);
    
    setcookie('address', '경기도', time() + 3600);

    echo '
    {
        "type": "buttons",
        "buttons": ["공지사항", "입양추천", "입양시 주의사항"]
    }
    ';
?>