<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Menu2 extends CI_Controller{
    function __construct(){
        parent:: __construct();
            $this->desc = 'Menu 2';
            $this->url_breadcrumb = '';
    }
    
    public function index(){
        
            $data = array(
                'desc'                  => $this->desc,
                'submenu'               => '',
                'breadcrumb'            => '',
                'url_breadcrumb'        => $this->url_breadcrumb,
                'content'               => 'menu2/index'
            );
            $this->load->view('layout/wrapper', $data);
       
}

}

