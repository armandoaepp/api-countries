<?php

	define('FOLDER', 'public');
	define('APP', FOLDER.'/app');
	define('MODELS', APP.'/models');
	define('BEANS', APP.'/beans');
	define('CONTROLLERS', APP.'/controllers');
	define('API', APP.'/api');
	define('HELPERS', APP.'/helpers');
	define('ADMIN', FOLDER.'/admin');



	function copiandofiles(){

		if (!file_exists(APP )) {
			mkdir(APP , 0777);

			full_copy('core_app',APP) ;

		}

		if (!file_exists(MODELS)) {
			mkdir(MODELS, 0777);
		}

		if (!file_exists(BEANS)) {
			mkdir(BEANS, 0777);
		}

		if (!file_exists(CONTROLLERS)) {
			mkdir(CONTROLLERS, 0777);
		}

		if (!file_exists(API)) {
			mkdir(API, 0777);
		}

		if (!file_exists(HELPERS)) {
			mkdir(HELPERS, 0777);
			full_copy('core_app/helpers',HELPERS) ;

		}

		if (!file_exists(APP."/config" )) {
			mkdir(APP."/config" , 0777);
		}

		if (!file_exists(ADMIN )) {
			mkdir(ADMIN , 0777);

			full_copy('templates/admin', ADMIN ) ;
		}

		// copy("files_app/Conexion.php", APP."/models/Conexion.php");



			return "Archivos Creados Correctamente";
	}
