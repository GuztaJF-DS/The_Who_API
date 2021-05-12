<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class theWho extends REST_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function index_get($id=0){
		if(!empty($id)){
			$data=$this->db->get_where("thewho_uksingles",['id'=>$id])->row_array();
		}else{
			$data=$this->db->get("thewho_uksingles")->result();
		}
		$this->response($data, REST_Controller::HTTP_OK);
	}
	
	public function index_post(){
		$input=$this->input->post();
		$this->db->insert('thewho_uksingles',$input);
		$this->response(['Registro gravado com sucesso'], REST_Controller::HTTP_OK);
	}
	
	public function index_put($id){
		$input=$this->put();
		$this->db->update('thewho_uksingles',$input,array('id'=>$id));
		$this->response(['Registro alterado com sucesso'], REST_Controller::HTTP_OK);
	}
	
	public function index_delete($id){
		$input=$this->put();
		$this->db->delete('thewho_uksingles',array('id'=>$id));
		$this->response(['Registro deletado com sucesso'],REST_Controller::HTTP_OK);
	}
}
?>
