<?php

class Update extends CI_Controller {

public function __construct(){
     parent::__construct();
     $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
     
      $this->load->model('UserModel');
  
}

public function index(){
    $this->load->helper('url');
    $this->load->view('template/header.php');
    $this->load->view('editar');
    $this->load->view('template/footer.php');
}


public function update($identificacion)
{

    $this->UserModel->update($identificacion);
    $this->session->set_flashdata('success', 'actualizado correctamente ');

    redirect();

}






}

