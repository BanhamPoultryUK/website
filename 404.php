<?php

if ( substr($_SERVER['REQUEST_URI'], -5) == '.html' ) {
	header('HTTP/1.1 301 Moved Permanently'); 
	header('Location: http://banhampoultryuk.com'.substr($_SERVER['REQUEST_URI'], 0, -5).'?ref=404');
} else header('Location: http://banhampoultryuk.com/?ref=404');

exit;