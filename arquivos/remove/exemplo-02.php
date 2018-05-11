<?php 

if (!is_dir("images")) {
	mkdir("images");
}

foreach (scandir("images") as $image) {
	if (!in_array($image, array(".",".."))) {
		unlink("images/".$image);
	}
}

echo "OK";