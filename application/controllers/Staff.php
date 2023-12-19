
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends Public_Controller {

    private $table = 'halaman';
    public $lang = '';

    public function __construct()
    {
        parent::__construct();
        $this->lang = get_cookie('lang');
        $this->load->library('counter');
        $this->counter->add_visitor($this->input->ip_address());
    }

    public function index()
    {
        $staff = $this->crud_fakultas->ga('pengelola');

        $data = array('title' => 'Staff Akademik',
            'staff' => $staff,
            'isi' => 'homepage/staff/view_#id');
        $this->load->view('homepage/_layout/wrapper', $data);
    }

    public function pages($link)
    {
        $page = $this->db->where('link_en', $link)->or_where('link_id', $link)->get($this->table)->row();
        if (!$page) {
            if ($this->lang == 'en') {
                $data = array(  'title'     => 'Error 404',
                                'page'      => '<h2 class="title-page">Page Not Found!</h2><p>The page you are looking for is not found.</p><br/><br/>',
                                'isi'       => 'homepage/_error/404');
            } else {
                $data = array(  'title'     => 'Error 404',
                                'page'      => '<h2 class="title-page">Halaman tidak ditemukan!</h2><p>Sepertinya halaman yang Anda cari tidak ditemukan.</p><br/><br/>',
                                'isi'       => 'homepage/_error/404');
            }
            $this->load->view('homepage/_layout/wrapper', $data);
            return;
        }
        $data = array(  'title'     => $page->nama_id,
                        'page'      => $page,
                        'isi'       => 'homepage/home/view_#'.$this->lang);
        $this->load->view('homepage/_layout/wrapper', $data);
    }

    public function switch_lang($lang)
    {
        set_lang($lang);
        header('Content-Type: text/plain');
        echo 'oke';;
    }
}