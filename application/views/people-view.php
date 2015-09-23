<html>
 
<head>
 
    <title>People View</title>
     
</head>
 
<body>
 
    <?php
     
        foreach($people as $p)
        {
            echo '<p>Tên: '.$p->fullname.', tuổi: '.$p->age.'</p>';
        }
     
    ?>
     
</body>
 
</html>