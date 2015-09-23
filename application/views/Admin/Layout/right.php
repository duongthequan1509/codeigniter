<div id='right'>
<?php
	foreach($menu['action'] as $right){
		echo"<h4><a href='".base_url()."Admin/$contr/$right' >$right</a><h4>";
	}
?>
<img src='<?php echo base_url()?>public/Admin/right/right.jpg' width='250px' />
</div>