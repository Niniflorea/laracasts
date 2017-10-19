<?php 


class Task
{
	public $description;

	public $completed = false;

	


	public function __construct($description)
	{
		//Automatically trigged at instantiation 


		$this->description = $description;
	}



	public function complete()
	{

		$this->completed = true;
	}


	public function isComplete()
	{
		return $this->completed;
	}
}




$tasks = [

	new Task('Go to the store'),

	new Task('Finish screencast'),

	new task('Clean my room')
];

$tasks[0]->complete();

	

require 'index.view.php';


