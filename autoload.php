<?php
spl_autoload_register('autoload');

function autoload ($className) {
	if (file_exists('classes/' . strtr($className,'_','/') . '.php')) {
		include 'classes/' . strtr($className,'_','/') . '.php';
	}
}
