<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
         parent::__construct();
		 $this->load->helper(array('form', 'url'));
		  $this->load->library('form_validation');
		 
		  $this->load->model('UserModel');
      
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	

		$this->load->helper('url');
        $this->load->view('template/header.php');
		$this->load->view('index.php');
        $this->load->view('template/footer.php');
	
	}

	public function store()
	{

		$nombres = $this ->input->post("nombres");
		$apellidos = $this ->input->post("apellidos");
		$email = $this ->input->post("email");
		$identificacion = $this ->input->post("identificacion");

		$data = array(
			"nombres"=>$nombres ,
			"apellidos"=>$apellidos ,
			"email"=>$email ,
			"identificacion"=>$identificacion

		);

	$this->UserModel->guardar($data);
	$this->session->set_flashdata('success', 'guardado ok');
	redirect();
	
	}

	
	public function all()
	{
	
		echo json_encode ($this->UserModel->getall());

		
	
	}


	public function editar()
	{
		$id=$this->uri->segment(2);
		$datosdb= $this->UserModel->update($id);
		
			foreach ($datosdb->result() as $value) {
				$nombres = $value->nombres;
				$apellidos = $value->apellidos;
				$email = $value->email;
				# code...
			}
			$datos = array(
				'identificacion' =>$id,
				'email'=>$email,
				'apellidos' =>$apellidos,
				'nombres' => $nombres);

		$this->load->helper('url');
        $this->load->view('template/header.php');
		$this->load->view('editar.php', $datos);
        $this->load->view('template/footer.php');
       
	
		
	
	}


	public function update()
	{
		$id=$this->uri->segment(2);
		
		$data = array(
			"nombres"=>$this ->input->post("nombres") ,
			"apellidos"=>$this ->input->post("apellidos"),
			"email"=>$this ->input->post("email")
		);
		

		$this->UserModel->editarUser($id, $data);



		$this->session->set_flashdata('success', 'actualizado correctamete ok');
		redirect();
	
		
	
	}


	public function delete($identificacion)
	{
	
	$this->UserModel->delete($identificacion);
	$this->session->set_flashdata('success', 'eliminado correctamete ok');
	redirect();
	
	}



}


