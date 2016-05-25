<?php
/**
* emit
*/
class Emit  
{
	public $events = array();
	public function on($event, $fun){
		$this->events[$event][] = $fun;
	}
	public function trigger($event, $args=array()){
		foreach ($this->events[$event] as $call) {
		call_user_func_array($call, (array)$args);
		}
	}
}
