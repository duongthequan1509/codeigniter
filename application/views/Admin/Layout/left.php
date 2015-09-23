<div id='left'>Left
<img src='<?php echo base_url()?>public/Admin/left/left.jpg' width='250px' />
<?php
	if(@$menu['left']){
		foreach($menu['left'] as $lval){
			echo"<h4>";
				echo"<a href='#'>".$lval['catename']."</a>";
			echo"</h4>";
		}
	}else{
		echo"<h3>Empty data, Please insert data in the table cate!</h3>";
	}
?>
</div>