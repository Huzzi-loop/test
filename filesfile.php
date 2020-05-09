<?php
$name=$_REQUEST['name'];
if($name != ''){
	echo json_encode($name);
}
?>
