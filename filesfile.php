<?php
$name=$_POST['name'];
if($name != ''){
	echo json_encode($name);
}
?>
