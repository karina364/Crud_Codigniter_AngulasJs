<?php

header('Access-Control-Allow-Origin: *');


require APPPATH . 'libraries/REST_Controller.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class RestGetController extends REST_Controller {

	
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('ContactModel');
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == "") {
        die();
        }
    }

 
    // public function index_get($id = 0)
    // {
        
    //     if (!empty($id)) {
    //         $data = $this->db->get_where("contact", ['contact_id' => $id])->row_array();
    //     } else {
    //         $data = $this->db->get("contact")->result();
    //     }
        

    //     $this->response($data, REST_Controller::HTTP_OK);
    // }

    
    // public function index_post()
    // {
        
    //     if (!empty($id)) {
    //         $data = $this->db->get_where("contact", ['contact_id' => $id])->row_array();
    //     } else {
    //         $data = $this->db->get("contact")->result();
    //     }
        

    //     $this->response($data, REST_Controller::HTTP_OK);
    // }

    
    // public function index_put($id)
    // {
    //     $input = $this->put();
    //     $this->db->update('contact', $input, array('contact_id' => $id));

    //     $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
    // }

    
    // public function index_delete($id)
    // {
    //     $this->db->delete('contact', array('contact_id' => $id));

    //     $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    // }


    function fetch_all_contact_get(){
        
        $data = $this->ContactModel->fetch_all_users();
        $this->response($data);
    }


    
    


} 