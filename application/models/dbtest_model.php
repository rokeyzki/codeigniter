<?php
class dbtest_model extends CI_Model {

  	public function __construct(){
    	$this->load->database();
  	}
  
	public function get_txt($ad_id = FALSE){
		if ($ad_id === FALSE)
	  	{
	    	$query = $this->db->get('ci_admin_default');
	    	return $query->result_array();
	  	}
	  
	  	$query = $this->db->get_where('ci_admin_default', array('ad_id' => $ad_id));
	  	return $query->row_array();
	}  
    public function add_txt()
    {
        //$this->load->helper('url');
  		
		//date_default_timezone_set('PRC');
		
		$time = date("Y-m-d H:i:s");
		
		$data = array(
		    'ad_txt' => $this->input->post('text'),
		    'ad_time' => $time
		 );
  
  		return $this->db->insert('ci_admin_default', $data);  
    }
}