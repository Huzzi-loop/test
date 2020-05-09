<?php
$json=file_get_contents('php://input');
$obj=json_decode('$json',true);
$name=$obj['name'];
if($name != ''){
	echo json_encode($name);
}
?>
