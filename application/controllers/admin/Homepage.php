<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';
use WebPConvert\WebPConvert;
class Homepage extends Veripay_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->result = new StdClass();
        $this->result->status = false;
        $this->load->model('admin/' . $this->router->fetch_class() . '_model', 'model');
    }

    public function response()
    {
        echo json_encode($this->result);
        exit();
    }

    public function index()
    {
        $this->admin_logout();
        $admin_info = $this->get_user();
        $data = new stdClass();
        $data->user=$this->session->userdata('admin_info');
        $data->slider=$this->model->get_slider();

        //prex($data->user);
        $data->admin_info = $admin_info;
        $data->active = "home_page";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }
    public function update(){
        $data=new stdClass();
        $this->form_validation->set_rules('slogan','slogan','required|xss_clean|trim');
        $this->form_validation->set_rules('id','id','required|xss_clean|trim');
        if ($this->form_validation->run() !=FALSE){
            $post=new stdClass();
            $post->slogan=$this->input->post('slogan',true);
            $post->id=$this->input->post('id',true);
            if ($this->session->userdata('images')) {
                $post->image_path = $this->session->userdata('images');
                $this->session->unset_userdata('images');
            }
            if ($this->model->update($post)){
                $this->result->status=true;
                $this->result->url='';
                $this->response();
            }
            else{
                $this->result->error = "Güncelleme İşlemi Esnasında Bir Hata Oluştu Lütfen Tekrar Deneyin.";
                $this->response();
            }
        }else {
            $this->result->error = validation_errors();
            if (!empty($this->result->error)) {
                $this->response();
            }
        }
    }

    public function add_image()
    {
        $this->load->library('image_lib');
        $config['upload_path'] = 'assets/uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = 1024;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('file')) {
            $this->output->set_status_header('404');
            print strip_tags($this->upload->display_errors());
            exit;
        } else {
            $image_data = $this->upload->data();
            $image_config = array(
                'image_library' => 'gd2',
                'source_image' => $image_data['full_path'],
                'maintain_ratio' => TRUE,
                'width' => 500,
            );
            $this->image_lib->clear();
            $this->image_lib->initialize($image_config);
            $this->image_lib->resize();

            $uploaded_image = 'assets/uploads/' . $this->upload->data('file_name');
            $source = 'assets/uploads/' . $this->upload->data('file_name');
            $destination = $source . '.webp';
            $options = [
                'fail' => 'throw',
                'fail-when-fail-fails' => 'throw',
                'serve-original' => false,
                'reconvert' => false,
                'show-report' => false,
                'size-in-percentage' => 90,
                'serve-image' => [
                    'headers' => [
                        'cache-control' => true,
                        'content-length' => true,
                        'content-type' => true,
                        'expires' => false,
                        'last-modified' => true,
                        'vary-accept' => false
                    ],
                    'cache-control-header' => 'public, max-age=31536000',
                ],
                'convert' => [
                    'quality' => 85,
                ],
                'converter-options' => [
                    'vips' => [
                        'quality' => 72
                    ],
                ]
            ];
            WebPConvert::convert($source, $destination, $options);
            $this->session->set_userdata('images', $uploaded_image);
            pre($this->session->userdata('images'));
        }

    }
    public function slider(){
        $this->admin_logout();
        $admin_info = $this->get_user();
        $data = new stdClass();
        $data->user=$this->session->userdata('admin_info');
        $data->admin_info = $admin_info;



        $this->load->view('admin/header', $data);
        $this->load->view('admin/sliderekle');
        $this->load->view('admin/footer');
    }
    public function slideradd(){
        $this->form_validation->set_rules('slogan','slogan','required|xss_clean|trim');
        if ($this->form_validation->run() !=FALSE){
            $post=new stdClass();
            $post->slogan=$this->input->post('slogan',true);
            if ($this->session->userdata('images')) {
                $post->image_path = $this->session->userdata('images');
                $this->session->unset_userdata('images');
            }
            if ($this->model->insertslider($post)){
                $this->result->status=true;
                $this->result->url='';
                $this->response();
            }
            else{
                $this->result->error = "Güncelleme İşlemi Esnasında Bir Hata Oluştu Lütfen Tekrar Deneyin.";
                $this->response();
            }
        }else {
            $this->result->error = validation_errors();
            if (!empty($this->result->error)) {
                $this->response();
            }
        }
     
    }
    public function sliderlist(){
        $this->admin_logout();
        $admin_info = $this->get_user();
        $data = new stdClass();
        $data->user=$this->session->userdata('admin_info');
        $data->admin_info = $admin_info;

        $data->sliders=$this->model->get_galery();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sliderlistele');
        $this->load->view('admin/footer');

    }
    public function sliderdelete(){
        $id = $this->input->post('id', true);
        if ($this->model->sliderdelete($id)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }
    public function about(){
        $this->admin_logout();
        $admin_info = $this->get_user();
        $data = new stdClass();
        $data->user=$this->session->userdata('admin_info');
        $data->admin_info = $admin_info;
        $data->about=$this->model->get_about();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/about');
        $this->load->view('admin/footer');

    }
    public function updateabout(){
        $this->form_validation->set_rules('title','title','required|xss_clean|trim');
        $this->form_validation->set_rules('text','text','required|xss_clean|trim');
        $this->form_validation->set_rules('id','id','required|xss_clean|trim');
        if ($this->form_validation->run() !=FALSE){
            $post=new stdClass();
            $post->text=$this->input->post('text',true);
            $post->title=$this->input->post('title',true);
            $post->id=$this->input->post('id',true);
            if ($this->model->updateabout($post)){
                $this->result->status=true;
                $this->result->url='';
                $this->response();
            }
            else{
                $this->result->error = "Güncelleme İşlemi Esnasında Bir Hata Oluştu Lütfen Tekrar Deneyin.";
                $this->response();
            }
        }else {
            $this->result->error = validation_errors();
            if (!empty($this->result->error)) {
                $this->response();
            }
        }

    }
     

}