<?php
class Admin extends CI_Controller{
   public function index(){
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data ['judul']= 'Halaman Dashboard';
       $this->load->view('admin/header',$data);
       $this->load->view('admin/dashboard');
       $this->load->view('admin/footer');
   }
   public function Categories(){

      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data ['judul']= 'Halaman Categories';
    $this->load->view('admin/header', $data);
    $this->load->view('admin/categories');
    $this->load->view('admin/footer');
   }
   public function Detail(){

      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data ['judul']= 'Halaman Menonton';
    $this->load->view('admin/header', $data);
    $this->load->view('admin/detail');
    $this->load->view('admin/footer');
   }
   public function Genre(){

      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data ['judul']= 'Halaman Genre';
    $this->load->view('admin/header', $data);
    $this->load->view('admin/genre');
    $this->load->view('admin/footer');
   }
}


?>