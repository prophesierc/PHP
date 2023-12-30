<?php
// continuation of index.php
echo '<b>continuation of index.php</b>';
echo '<br>';

class User 
{
	public $name = 'Brian Knowles';
	public $age = 25;
	protected $email = 'tugrp@example.com';
	private $ssn = '123-45-6789';
}
$Brian = new User();
echo $Brian->age;
?>