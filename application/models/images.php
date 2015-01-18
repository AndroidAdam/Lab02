<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Images
 *
 * @author Adam
 */
class Images extends CI_Model
{

    
    // Constructor
    function __construct()
    {
		parent::__construct();
		$this->_tableName = get_class($this);
    }
    
	// return all images, descending order by post date
    function all()
    {
        $this->db->order_by("id", "desc");
        $query = $this->db->get('images');
        return $query->result_array();
    }
}