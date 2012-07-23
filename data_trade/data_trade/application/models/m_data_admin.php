<?php
class M_data_admin extends CI_Model {
   function __construct() {
       parent::__construct();
   }

   function get_admin($name,$pass){
    $this->db->select("name,pass,fio");
    $this->db->where("name",$name);
    $this->db->where("pass",$pass);
    $this->db->limit(1);
    $Q=$this->db->get("admin");
        if($Q->num_rows()>0){
        $Q=$Q->result_array();
        return $Q;
        }else false;
    }
    function get_menu($lang){
        $this->db->select("*");
        $this->db->where("lang",$lang);
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
    function get_page($lang, $page){
        $this->db->select("*");
		$this->db->where("lang","$lang");
        $this->db->where("url","$page");
        $Q=$this->db->get("page");
        $Q=$Q->result_array();
        return $Q;
    }
   function update_page( $id, $text){
       $data=array(
           'text'=>$text,
        );
        $this->db->where("id",$id);
        $this->db->update('page',$data);
   }
    function get_send(){
        $this->db->select("*");
        $data = $this->db->get('send')->result_array();
        //$data = $this->db->get('send');
        return $data;
    }

}