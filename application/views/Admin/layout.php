<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href='<?php echo base_url()?>public/Admin/css/css.css' rel='stylesheet' type='text/css' />
<title><?php echo $title ?></title>

</head>

<body>
	<?php
        $this->load->view("Admin/Layout/banner");//Banner
    ?>
    
    <?php
        $this->load->view("Admin/Layout/top",$menu);//Top
    ?>
    
    <?php
        $this->load->view("Admin/Layout/left",$menu);//Left
    ?>
    <div id='content'>
        <?php
            $this->load->view($show,$data='');//Content
        ?>
    </div>
    <?php
        $this->load->view("Admin/Layout/right",$menu);//Right
    ?>
    
    <?php
        $this->load->view("Admin/Layout/bottom");//Bottom
    ?>
</body>
</html>