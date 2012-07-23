<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
   function __construct() {
       parent::__construct();
        $this->load->helper('url');
        $this->load->helper('dom');
        session_start();
   }

    public function index()
	{   $lang='ru';
        $data['nav']=$this->m_data->get_nav($lang);
        $data['ln']=$this->m_data->get_lang($lang);
        $data['menu_activ']='none';
		$this->load->view('main_view',$data);
	}

     function lang($base_url='no_page',$type=null, $send=null){
         $data['base_url']=$base_url;
         $data['type']=$type;
         $data['send']=$send;
         if(isset ($base_url) and $type=="")
         {   $data['nav']=$this->m_data->get_nav($base_url);
             $data['ln']=$this->m_data->get_lang($base_url);
             $data['menu_activ']='none';
             $this->load->view('main_view',$data);
         }
         if(isset ($base_url) and isset ($type) and $type=='contact'and $send=="" )
         {   $data['nav']=$this->m_data->get_nav($base_url);
             $data['contact']=$base_url;
             $data['ln']=$this->m_data->get_lang($base_url);
             $data['menu_activ']='contact';
             $this->load->view('main_view',$data);
         }
         if(isset ($base_url) and isset ($type) and $type=='o_nas' )
         {   $data['nav']=$this->m_data->get_nav($base_url);
             $data['o_nas']=$this->m_data->get_page($base_url,$type);
             $data['ln']=$this->m_data->get_lang($base_url);
             $data['menu_activ']='o_nas';
             $this->load->view('main_view',$data);
         }
         if(isset ($base_url) and isset($type) and $type!=='contact'and $type!=='o_nas'){
             $data['nav']=$this->m_data->get_nav($base_url);
             $data['page']=$this->m_data->get_page($base_url,$type);
             $data['ln']=$this->m_data->get_lang($base_url);
             $data['menu_activ']='none';
             $this->load->view('main_view',$data);
         }
         if($send=='send'){
            if($base_url=='ru'){
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');


                $this->form_validation->set_message('required', 'Не заполнено поле %s.');
                $this->form_validation->set_message('valid_email', 'Не корректный e-mail');
                $this->form_validation->set_message('min_length', 'Слишком короткое имя.');
                $this->form_validation->set_message('max_length', 'Слишком длинное имя.');


                $this->form_validation->set_rules('text', 'Текст', 'required|min_length[1]');

                $this->form_validation->set_rules('username', 'Имя', 'required|min_length[2]|max_length[40]|is_unique[users.username]');

                $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');

                if ($this->form_validation->run() == FALSE)
                {
                     $data['nav']=$this->m_data->get_nav($base_url);
                     $data['contact']=$base_url;
                     $data['ln']=$this->m_data->get_lang($base_url);
                     $data['menu_activ']='contact';
                     $this->load->view('main_view',$data);
                }
                else
                {
                     $mes=$this->input->post("text");
                     $q=$this->m_data->get_number();
                     $new=$q[0]['number'];$new++;
                     $HEAD='Sales Request #'.$new.'('.$this->input->post("username").')';
                     $this->load->library('email');

                     $this->email->from($this->input->post("email"), 'trade.dts.dp.ua');
                     $this->email->to('trelone@yandex.ru');
                     $this->email->subject($HEAD);
                     $this->email->message($mes);
                     if (!$this -> email -> send()) {
                        echo ('Не удалось выполнить отправку письма!');
                     } else {
                         $this->m_data->update_number($new);
						 $this->m_data->add_mes($HEAD,$this->input->post("username"),$this->input->post("email"),$mes);
                         $data['nav']=$this->m_data->get_nav($base_url);
                         $data['contact']=$base_url;
                         $data['ln']=$this->m_data->get_lang($base_url);
                         $data['menu_activ']='contact';
                         $data['otpr']='Ваше письмо успешно отправлено!';
                         $this->load->view('formsuccess',$data);
                        //redirect("/main/lang/".$base_url."/contact",'refresh');
                    }
                }
            }else if($base_url=='en'){
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                $this->form_validation->set_rules('text', 'Text', 'required|min_length[1]');

                $this->form_validation->set_rules('username', 'Name', 'required|min_length[1]|max_length[40]|is_unique[users.username]');

                $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');

                if ($this->form_validation->run() == FALSE)
                {
                     $data['nav']=$this->m_data->get_nav($base_url);
                     $data['contact']=$base_url;
                     $data['ln']=$this->m_data->get_lang($base_url);
                     $data['menu_activ']='contact';
                     $this->load->view('main_view',$data);
                }
                else
                {
                     $mes=$this->input->post("text");
                     $q=$this->m_data->get_number();
                     $new=$q[0]['number'];$new++;
                     $HEAD='Sales Request #'.$new.'('.$this->input->post("username").')';
                     $this->load->library('email');

                     $this->email->from($this->input->post("email"), 'trade.dts.dp.ua');
                     $this->email->to('trelone@yandex.ru');
                     $this->email->subject($HEAD);
                     $this->email->message($mes);
                     if (!$this -> email -> send()) {
                        echo ('Failed to send emails!');
                     } else {
                        $this->m_data->update_number($new);
						$this->m_data->add_mes($HEAD,$this->input->post("username"),$this->input->post("email"),$mes);
                         $data['nav']=$this->m_data->get_nav($base_url);
                         $data['contact']=$base_url;
                         $data['ln']=$this->m_data->get_lang($base_url);
                         $data['menu_activ']='contact';
                         $data['otpr']='Your email has been sent!';
                        $this->load->view('formsuccess',$data);
                       // redirect("/main/lang/".$base_url."/contact",'refresh');
                    }


            //echo $this->email->print_debugger();

            //redirect("/main/lang/ru/contact",'refresh');
           // echo $this->email->print_debugger();
                }
            }


         }

	}

}
