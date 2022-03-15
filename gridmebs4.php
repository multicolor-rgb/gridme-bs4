<?php

 
# get correct id for plugin
$thisfile=basename(__FILE__, ".php");
 
# register plugin
register_plugin(
	$thisfile, //Plugin id
	'Gridme Bootstrap 4 edition', 	//Plugin name
	'1.1', 		//Plugin version
	'Mateusz Skrzypczak',  //Plugin author
	'https://multicolor.stargard.pl', //author website
	'add new grid (bs4 compatible) options on ckeditor', //Plugin description
	'plugins', //page type - on which admin tab to display
	'gridmebs4'  //main function (administration)
);
 

register_script('gridmebs4_script', $SITEURL.'plugins/gridmebs4/js/script.js', '0.1', TRUE);
register_style('gridmebs4_style', $SITEURL.'plugins/gridmebs4/css/style.css', '0.1', FALSE);

queue_script ( 'gridmebs4_script' , GSBACK ) ; 
queue_style( 'gridmebs4_style' , GSBACK ) ;



?>