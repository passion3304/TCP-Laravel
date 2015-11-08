<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Journeys_model extends CI_Model {
	
	public $fname;
	public $title;
	public $date;
	public $body;
	public $htags;
	public $img;
	
	public function __construct()
    {
            // Call the CI_Model constructor
            parent::__construct();
    }
	
	public function insert_entry($post)
	{
		$this->db->insert('journeys', $post);
	}
	
	public function getTenLatestPosts() 
	{
		return $this->db->order_by('date', 'desc')->get('journeys', 10)->result();
	}
	
	public function edit()
	{
		$this->db->replace('journeys', $data);
	}
	
	public function delete($id)
	{
		$this->db->delete('journeys', array('id' => $id));
	}
}