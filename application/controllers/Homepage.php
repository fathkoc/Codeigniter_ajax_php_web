<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends Veripay_Controller
{
    function __construct()
    {
        parent:: __construct();

        $this->result = new StdClass();
        $this->result->status = false;
        $this->load->model($this->router->fetch_class() . '_model', 'model');
    }

    public function response()
    {
        echo json_encode($this->result);
        exit();
    }

    public function index(){
        $data=new stdClass();
        $data->slider=$this->model->get_slider();
        $data->galery=$this->model->get_galery();

        $this->load->view('front/header', $data);
        $this->load->view('front/index');
        $this->load->view('front/footer');
    }

    public function about(){
        $data=new stdClass();
        $data->slider=$this->model->get_slider();
        $data->about=$this->model->get_abouts();
        //prex($data->about);
        $this->load->view('front/header', $data);
        $this->load->view('front/about');
        $this->load->view('front/footer');

    }
    public function contact(){
        $data=new stdClass();
        $data->slider=$this->model->get_slider();
        if ($_POST){
            $this->form_validation->set_rules('fname','fname','required|xss_clean|trim');
            $this->form_validation->set_rules('lname','lname','required|xss_clean|trim');
            $this->form_validation->set_rules('message','message','required|xss_clean|trim');
            $this->form_validation->set_rules('subject','subject','required|xss_clean|trim');
            $this->form_validation->set_rules('e-mail','e-mail','required|xss_clean|trim');
            if ($this->form_validation->run() !=FALSE){
                $post=new stdClass();
                $post->fname=$this->input->post('fname',true);
                $post->lname=$this->input->post('lname',true);
                $post->message=$this->input->post('message',true);
                $post->subject=$this->input->post('subject',true);
                $post->mail=$this->input->post('e-mail',true);
                if ($this->model->addmesaj($post)){
                }

            }
        }
        $data->csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        $this->load->view('front/header', $data);
        $this->load->view('front/contact');
        $this->load->view('front/footer');
    }
    public function deneme(){
        $data=new stdClass();
        $data->slider=$this->model->get_slider();
        $data->galery=$this->model->get_galery();
        $this->load->view('front/header', $data);
        $this->load->view('front/industries');
        $this->load->view('front/footer');

    }
}