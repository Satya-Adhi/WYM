<?php
class Admin extends CI_Controller{

   
   public function __construct()
   {
      parent::__construct();
      $this->load->model('m_admin');
      $this->load->model('m_video');
   }
   

   public function index(){
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data ['judul']= 'Halaman Dashboard';
    $data['film'] = $this->m_admin->get_film();
    $data['film'] = $this->m_admin->get_video();
       $this->load->view('admin/header',$data);
       $this->load->view('admin/dashboard', $data);
       $this->load->view('admin/footer');
   }
   public function Country($id_country){

      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $country = $this->m_admin->get_country_row($id_country);
      $data ['judul']= 'Country '. $country->nama_country;
      $data ['film'] = $this->m_admin->get_film_by_country($id_country);
      $this->load->view('admin/header', $data);
      $this->load->view('admin/country', $data);
      $this->load->view('admin/footer', $data);
   }
   public function Detail($id_video){

      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data ['judul']= 'Halaman Menonton';
      $data['film'] = $this->m_admin->detail($id_video);
    $this->load->view('admin/header', $data);
    $this->load->view('admin/detail', $data);
    $this->load->view('admin/footer');
   }
   public function Genre(){

      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data ['judul']= 'Halaman Genre';
      $data['film'] = $this->m_admin->get_film();
    $this->load->view('admin/header', $data);
    $this->load->view('admin/genre',$data);
    $this->load->view('admin/footer');
   }
   public function Advanced(){

      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data ['judul']= 'Halaman advanced';
    $this->load->view('admin/header', $data);
    $this->load->view('admin/advanced');
    $this->load->view('admin/footer');
   }

   public function about(){
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data ['judul']= 'Halaman advanced';
    $this->load->view('admin/header', $data);
    $this->load->view('admin/about');
    $this->load->view('admin/footer');
   }
}


?>