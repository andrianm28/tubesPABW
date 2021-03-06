<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detaillapangan extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('futsal');
    }
    public function view($page = 'futsal')
    {
        if (!file_exists(APPPATH . "views/category/" . $page . '.php')) {
			# code...
            show_404();
        }

        $data['judul'] = $page;
        $this->load->view('header', $data);
        $this->load->view($page);
        $this->load->view('footer');

    }
}