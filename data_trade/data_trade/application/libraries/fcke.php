<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FCKe {
   
    private $editor = null;
   
    function FCKe() {
        $CI = get_instance();
        $CI->config->load('fckeditor');
        $fcke_url = $CI->config->item('base_url').$CI->config->item('fckeditor_url');
        $fcke_path = substr(FCPATH, 0, strrpos(FCPATH, DIRECTORY_SEPARATOR) + 1)
            .$CI->config->item('fckeditor_path');
        include_once($fcke_path.'ckeditor.php');
        $this->editor = new FCKeditor($CI->config->item('fckeditor_name'));
        $this->editor->BasePath = $fcke_url;
        $this->editor->Height = $CI->config->item('fckeditor_height');
    }
 
    function __call($method, $arguments) {
        return call_user_func_array(array($this->editor, $method), $arguments);
    }
}
/* End of file fckeditor.php */
/* Location: ./system/application/libraries/fckeditor/fckeditor.php */