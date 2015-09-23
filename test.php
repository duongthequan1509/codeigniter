<html>
<head>
<title>Bài 13 - Kiểu dữ liệu dạng mảng</title>
</head>
 
<body>
<?php
    /*
    Khai báo và gán dữ liệu cho mảng items.
    */
    $items = array('blue','green','yellow','brown');
     
    //Truy xuất nội dung mảng bằng vòng lặp foreach()
    foreach($items as $item)
    {
        echo $item.'<br />';
    }
?>
</body>
</html>