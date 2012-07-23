<?php
class Admin extends CI_Controller {
  function __construct() {
       parent::__construct();
       $this->load->helper('url');
       $this->load->model('m_data_admin');
       $this->load->library('session','table');
       $this->load->helper('dom');
      // session_start();
   }

        function index(){
            $this->load->view('admin_view');
        }


        function auth(){
            if($this->input->post("name")&&$this->input->post("pass")){
                $q=$this->m_data_admin->get_admin($this->input->post("name"),$this->input->post("pass"));//var_dump($admin);die;
                if($q!==""){
                $admin=$q;
                }
                if($admin!==NULL){
                    foreach($admin as $row){
                        if($this->input->post("name")==$row['name']&&$this->input->post("pass")==$row['pass']){
                            $this->session->set_userdata('admin', 'true');
                            redirect("/admin/lang",'refresh');
                        }

                    }
                }else if($admin==NULL){die("Доступ запрещен! Проверьте правильность вводимых данных логина: '".$this->input->post("name")."' и пароля: ".$this->input->post("pass"));}




            }else{
                die("Доступ запрещен!Введите логин и пароль");
            }

        }

        function lang($base_url='no_page',$type=null,$sub=""){
        $data['base_url']=$base_url;
        $data['type']=$type;
        $data['sub']=$sub;
        $lang='ru';
        $data['ln']=$this->m_data->get_lang($lang);
        $data['menu']=$this->m_data_admin->get_menu($lang);
            
         if($base_url=='main' || $type=='main' || $sub=='main') redirect("/",'refresh');
         if(isset ($base_url) and $base_url!=='no_page' and $type=="")
         {   $data['menu']=$this->m_data_admin->get_menu($base_url);
             $data['ln']=$this->m_data->get_lang($base_url);
             $data['menu_activ']='none';
         }
         if(isset ($base_url) and isset($type))
         {   $data['menu']=$this->m_data_admin->get_menu($base_url);
             $data['page']=$this->m_data_admin->get_page($base_url,$type);
             $data['ln']=$this->m_data_admin->get_lang($base_url);
             $data['menu_activ']='none';
         }
         if(isset ($base_url) and isset($sub) and $type=='update')
         {   
              if($this->input->post("text")){
              $this->m_data_admin->update_page($sub,$this->input->post("text"));
              redirect("/admin/lang/".$base_url."/",'refresh');
              }
         }
         if(isset($base_url) and ($type='report'))
         {
            $data['sendSet'] = $this->m_data_admin->get_send();
         }
         $this->load->view('main_admin_view',$data);


        }


}

