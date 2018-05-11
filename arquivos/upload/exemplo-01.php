<form method="post" enctype="multipart/form-data">
	<input type="file" name="file-upload">
	<button>Enviar</button>
</form>

<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$file = $_FILES["file-upload"];

	if ($file["error"]) {
		throw new Exception("Error: ".$_FILES["error"]);		
	}

	$dir_uploads = "uploads";
	if (!is_dir($dir_uploads)) {
		mkdir($dir_uploads);
	}

	if (move_uploaded_file($file["tmp_name"],$dir_uploads.DIRECTORY_SEPARATOR.$file["name"])) {
		echo "Upload realizado com sucesso";
	}else{
		
		throw new Exception("Não foi possível fazer o upload");
	
	}
}