<?php
class M_data extends CI_Model {

	function __construct(){
	parent::__construct();
	} 
    function get_nav($lang){
        $this->db->select("*");
        $this->db->where("lang",$lang);
        $Q=$this->db->get("menu");
        $Q=$Q->result_array();
        return $Q;
    }

    function get_page($lang, $page){
        $this->db->select("*");
		$this->db->where("lang","$lang");
        $this->db->where("url","$page");
        $Q=$this->db->get("page");
        $Q=$Q->result_array();
        return $Q;
    }

    function get_lang($lang){
        $this->db->select("*");
        $this->db->where("lang",$lang);
        $Q=$this->db->get("lang");
        $Q=$Q->result_array();
        return $Q;
    }
    function get_number(){
        $this->db->select("number");
        $Q=$this->db->get("number_email");
        $Q=$Q->result_array();
        return $Q;
    }
    function update_number($new){
       $data=array(
           'number'=>$new,
        );
        $this->db->update('number_email',$data);
   }
      function add_mes($tema,$name,$email,$text){
        $data=array(
          'tema'=>$tema,
          'name'=>$name,
		  'email'=>$email,
		  'text'=>$text
        );
       $this->db->insert('send',$data);
   
   }

}
?>