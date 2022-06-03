<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage_model extends CI_Model {

    public function get_slider(){
        $this->db->from('slider');
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0) {
            return $return_query->row();
        } else {
            return false;
        }

    }
    public function update($post){
        $this->db->set($post)->WHERE(['id'=>$post->id])->update('slider');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        else {
            return false;
        }

    }
    public function insertslider($post){
        $this->db->set($post)->insert('galery');
        if($this->db->affected_rows() > 0){
            return true;
        }
        else{
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
    public function sliderdelete($id){
        $this->db->set(['deleted'=>1])->WHERE(['id'=>$id])->update('galery');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        else {
            return false;
        }

    }
    public function get_about(){
        $this->db->from('about');
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0) {
            return $return_query->row();
        } else {
            return false;
        }

    }
    public function updateabout($post){
        $this->db->set($post)->WHERE(['id'=>$post->id])->update('about');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        else {
            return false;
        }

    }


}