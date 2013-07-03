<?php
class Meeting extends ORM {

    var $table = 'meetings';
	
	var $has_one = array('user');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>