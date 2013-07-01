<?php
class Office extends ORM {

    var $table = 'office';
	
    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>