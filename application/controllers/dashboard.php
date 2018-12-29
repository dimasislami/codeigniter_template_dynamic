<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Dashboard extends CI_Controller{
    function __construct(){
        parent:: __construct();
            $this->desc = 'Dashboard';
            $this->url_breadcrumb = '';
    }
    
    public function index(){
        
            $data = array(
                'desc'                  => $this->desc,
                'submenu'               => '',
                'breadcrumb'            => '',
                'url_breadcrumb'        => $this->url_breadcrumb,
                'content'               => 'index'
            );
            $this->load->view('layout/wrapper', $data);
       
}

}

