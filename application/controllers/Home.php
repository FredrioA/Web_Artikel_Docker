<?php
class Home extends CI_Controller
{

	public function __construct()
    {
       Parent::__construct();
       $this->load->model('Post_model');
    }

    public function index()
    {
        $data['judul'] = "Home";

        $this->load->library('pagination');

        $config['base_url'] = 'https://ci-web-artikel.herokuapp.com/post/index';

        if ($this->session->userdata('search') == false) {
            $this->session->set_userdata('search','');
        }

        if(isset($_POST['submit'])){
            $data['search'] = $this->input->post('search');
            $this->session->set_userdata('search', $data['search']);
        }else{
            $data['search'] = $_SESSION['search'];
        }

        $config['total_rows'] = $this->Post_model->countPosts($data['search']);
        $config['per_page'] = 6;

        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = ['class' => 'page-link'];

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['post'] = $this->Post_model->getSearch($config['per_page'], $data['start'], $data['search']);
        
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id)
    {
        $data['judul'] = "Baca Artikel";
        $data['post'] = $this->Post_model->getId($id);
        $data['npost'] = $this->Post_model->newPost();

        $this->load->view('templates/header', $data);
        $this->load->view('home/view', $data);
        $this->load->view('templates/footer');
    }
    
}
