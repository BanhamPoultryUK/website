<?php

if ( $_SERVER['HTTP_HOST'] === 'www.banhampoultryuk.com' ) {
	header('HTTP/1.1 301 Moved Permanently'); 
	header('Location: http://banhampoultryuk.com'.$_SERVER['REQUEST_URI'].'?ref=www');
	exit;
}