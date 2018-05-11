<?php

$filename = "logo.png";
$base64 = base64_encode(file_get_contents($filename));
$fileinfo = new finfo(FILEINFO_MIME_TYPE);
$mimetype = $fileinfo->file($filename);

$imagem = "data:".$mimetype.";base64,".$base64;

?>

<a href="<?=$imagem?>" target="_blank">Imagem</a>
<img src="<?=$imagem?>">