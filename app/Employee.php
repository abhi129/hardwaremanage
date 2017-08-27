<?php

namespace App;
use Eloquent;

class Employee extends Eloquent {
	public $table='Employees';
	public $timestamp=true;
}