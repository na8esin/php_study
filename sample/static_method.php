<?php
class Sample
{
	public $name;
	
	public function main()
	{
		self::utility();
	}
	
	public static function utility()
	{
		echo 'I am utility.';
	}
	
	public static function accessField()
	{
		// Error: Using $this when not in object context
		$this->name = 'John';
	}

}

(new Sample)->main();

Sample::accessField();