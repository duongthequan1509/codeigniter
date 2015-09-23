<div id='top'>
<?php
	foreach($menu['controller'] as $top){
		echo"<a href='".base_url()."Admin/$top/view'>$top</a>";
	}
?>
</div>