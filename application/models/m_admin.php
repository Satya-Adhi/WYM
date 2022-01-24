<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    public function get_film(){
        $this->db->select('*');
        $this->db->from('film');
        $this->db->join('type', 'type.id_type = film.id_type', 'left');
        return $this->db->get()->result();
    }

    public function detail($id_video){
        $this->db->select('*');
        $this->db->from('video');
        $this->db->join('film', 'film.id_film = video.id_film', 'left');
        $this->db->join('type', 'type.id_type = video.id_type', 'left');
        $this->db->join('status', 'status.id_status = video.id_status', 'left');
        $this->db->join('genre', 'genre.id_genre = video.id_genre', 'left');
        $this->db->where('id_video', $id_video);
        
        return $this->db->get()->row();
    }

    public function get_video(){
        $this->db->select('*');
        $this->db->from('video');
        $this->db->join('film', 'film.id_film = video.id_film', 'left');
        $this->db->join('type', 'type.id_type = video.id_type', 'left');
        $this->db->join('status', 'status.id_status = video.id_status', 'left');
        $this->db->join('genre', 'genre.id_genre = video.id_genre', 'left');
        return $this->db->get()->result();
    }

    public function get_genre(){
        $this->db->select('*');
        $this->db->from('genre');
        $this->db->order_by('id_genre', 'desc');
        return $this->db->get()->result();
    }

    public function get_country(){
        $this->db->select('*');
        $this->db->from('country');
        $this->db->order_by('id_country', 'desc');
        return $this->db->get()->result(); 
    }

    public function get_country_row($id_country){
        $this->db->select('*');
        $this->db->from('country');
        $this->db->where('id_country', $id_country);
        return $this->db->get()->row(); 
    }

    public function get_film_by_country($id_country){
        $this->db->select('*');
        $this->db->from('film');
        $this->db->join('country', 'country.id_country = film.id_country', 'left');
        $this->db->where('film.id_country', $id_country);
        return $this->db->get()->result();
    }
}