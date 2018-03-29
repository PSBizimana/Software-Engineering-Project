<?php
class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->library('cart');
    }

    public function index()
    {
        $data['user'] = $this->user_model->get_user();
        $data['title'] = 'User archive';

        $this->load->view('templates/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }


    public function view()
    {
        $data['authLevel'] = 0;
        $this->load->view('templates/loginAuth', $data);
        
        $data['user_item'] = $this->user_model->get_user($_SESSION['User_ID']);


        if (empty($data['user_item']))
        {
            show_404();
        }


        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        $this->load->view('user/view', $data);
        $this->load->view('templates/footer');
    }

    public function login()
    {
      $this->load->helper('form');
      $this->load->library('form_validation');

      $data['title'] = 'Login';

      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');

      if ($this->form_validation->run() === FALSE)
      {
          $this->load->view('templates/header');
          $this->load->view('templates/nav');
          $this->load->view('user/login');
          $this->load->view('templates/footer');

      }
      else
      {
          $user  = $this->user_model->get_user_by_usn($this->input->post("username"));
          if(password_verify($this->input->post("password"),$user['Password']))
          {
            $this->session->set_userdata($user);
            $this->view();
          }
          else
          {
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('user/login');
            $this->load->view('templates/footer');
          }
      }

    }

    public function logout(){
          $this->session->sess_destroy();
          redirect(site_url('user/login'));
    }

    public function create()
    {
        $data['authLevel'] = 2;
        $this->load->view('templates/loginAuth', $data);
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a User';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav');
            $this->load->view('user/create');
            $this->load->view('templates/footer');

        }
        else
        {
            $this->user_model->set_user();
            $user  = $this->user_model->get_user_by_usn($this->input->post("username"));
            $this->session->set_userdata($user);
            redirect(site_url('user/view'));
        }
    }



}
