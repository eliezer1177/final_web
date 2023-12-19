<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact extends Public_Controller {

    private $table = 'halaman';
    // public $lang = '';

    public function __construct()
    {
        parent::__construct();
      
    }

    public function index()
    {
        $this->load->model('Crud');                        
        $data['contacts'] = $this->Crud->ga('contact');


        $data = array(  'title'     => 'Beranda Departemen Sistem Perkapalan',
                        'isi'       => 'homepage/contact/index',
                        'contacts'  => $data['contacts']                          
                    );
        $this->load->view('homepage/_layout/wrapper', $data);
    }
 
    public function tambah(){
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        
        $data = array(  'name' => $name,
                        'email' => $email,
                        'subject' => $subject,
                        'message' => $message);

        
        $this ->crud->i("contact", $data);
        redirect('contact/index');
    }

    
    public function delete($id) {
        $this->load->model('Crud');
        
        $this->Crud->d('contact', array('id' => $id));
        redirect('contact/index');
    }

    public function update($id) {
        $this->load->model('Crud');
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');
    
            $data = array(
                'name' => $name,
                'email' => $email,
                'subject' => $subject,
                'message' => $message
            );
    
            $this->Crud->u('contact', $data, array('id' => $id));
            redirect('contact/index');
        } else {

            $data['contact'] = $this->Crud->gd('contact', array('id' => $id));
    
            $data['title'] = 'Edit Contact';
            $data['isi'] = 'homepage/contact/edit';
            $this->load->view('homepage/_layout/wrapper', $data);
    }
}
    
}



