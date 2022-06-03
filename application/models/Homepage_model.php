<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage_model extends CI_Model {

    public function get_slider()
    {
        $this->db->from('slider');
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0) {
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_about()
    {
        $this->db->from('about');
        if(empty($this->session->userdata('langue'))) {
            $this->db->where(['lang' => 1]);
        } else {
            $this->db->where(['lang' => $this->session->userdata('langue')]);
        }
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0) {
            return $return_query->row();
        } else {
            return false;
        }
    }
    public  function get_contact()
    {
        $this->db->from('contact');
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0) {
            return $return_query->row();
        } else {
            return false;
        }
    }
    public function get_site_settings($id)
    {
        $this->db->select('title,description');
        $this->db->from('site_settings')->where(['id' => $id]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0) {
            return  $return_query->row();
        } else {
            return false;
        }
    }
    public function get_address(){
        $this->db->from('contact');
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0) {
            return $return_query->row();
        } else {
            return false;
        }
    }
    public function gets_about(){
        $this->db->from('index_about');
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0) {
            return $return_query->row();
        } else {
            return false;
        }
    }
    public function get_abouts(){
        $this->db->from('about');
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0) {
            return $return_query->row();
        } else {
            return false;
        }
    }
     public function get_galery(){
         $this->db->from('galery')->where(['deleted'=>0]);
         $return_query = $this->db->get();
         if($return_query->num_rows() > 0) {
             return $return_query->result();
         } else {
             return false;
         }

     }
     public function addmesaj($post){
         $this->db->set($post)->insert('messages');
         if($this->db->affected_rows() > 0){
             return true;
         }
         else{
             return false;
         }

     }







}