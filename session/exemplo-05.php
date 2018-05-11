<?php  

require("config.php");

echo session_save_path()."</br>";
var_dump(session_status());
switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "Sessão desabilitada";
		break;
	case PHP_SESSION_NONE:
		echo "Sessão habilitada mas nenhuma existe";
		break;
	case PHP_SESSION_ACTIVE:
		echo "Sessão habilitada e uma existe";	
	
}