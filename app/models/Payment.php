<?php
namespace models;

class Payment extends Application
{
	// payment belongs to a person
	static $belongs_to = array(
		array('person'),
		array('order'));
}
?>
