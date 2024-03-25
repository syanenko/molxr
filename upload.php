<?php
header('Access-Control-Allow-Origin: *');

$TEMP_DIR = sha1_file($_FILES['model']['tmp_name']);
$UPLOADS_DIR = 'uploads/' . $TEMP_DIR . '/';

if(!is_dir($UPLOADS_DIR))
{
  mkdir($UPLOADS_DIR);
}

$model_path = $UPLOADS_DIR . $_FILES['model']['name'];
move_uploaded_file($_FILES['model']["tmp_name"], $model_path);

echo json_encode($model_path);
?>