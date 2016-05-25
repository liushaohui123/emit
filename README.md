emit
------
###code###
```php
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
```
###example###
```php
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
```