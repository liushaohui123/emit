<?php
include __dir__.'/../class/emit.class.php';
$emit = new emit;
$emit->on('start',function (){
	echo "start1";
});
$emit->on('end',function($a){
	echo "end".$a;
});
$emit->on('start',function(){
	echo "start2";
});
$emit->trigger('start');
$emit->trigger('end','ok');