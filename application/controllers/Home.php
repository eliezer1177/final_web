<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {

    private $table = 'halaman';
    // public $lang = '';

    public function __construct()
    {
        parent::__construct();
      
    }

    public function bikin_pass(){
        $pass = do_hash('admin123');
        var_dump($pass);
    }

    public function index()
    {
        // $this->bikin_pass(); 

        $data = array(  'title'     => 'Beranda Departemen Sistem Perkapalan',
                        'isi'       => 'homepage/home/landing_#id');
        $this->load->view('homepage/_layout/wrapper', $data);
    }
    
   
}




