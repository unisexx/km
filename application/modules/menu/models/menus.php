<?php
class Menus extends ORM
{
	var $table = "menu";
	
	function __construct($id=NULL)
	{
		parent::__construct($id);
	}
}