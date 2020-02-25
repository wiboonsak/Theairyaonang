<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accommodation extends CI_Controller {

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
	function __construct() {
       parent::__construct();
	   $this->load->model('Control_model');  
    }
    //----------------------------------
	public function index()
	{
	$data['getroomdata'] = $this->Control_model->getroomdata('1');
        $data['getgallerydata'] = $this->Control_model->getgallerydata('1');
        $this->load->view('accommodation',$data);
	}
    //----------------------------------
	public function room($roomID)
	{
	$data['getroomdata'] = $this->Control_model->getroomdata('1');
        $data['getgallerydata'] = $this->Control_model->getgallerydata('1');
            $roomName=$this->Control_model->roomDetail($roomID);
            foreach($roomName->result() AS $roomName2){ }
            $data['roomName']=$roomName2->room_type_en;
            $data['FacilitiesData'] = $this->Control_model->list_Facilities($roomID);
            $data['roomList']=$this->Control_model->roomDetailbyID($roomID);  
            $data['imagesList']=$this->Control_model->loadroomImg($roomID);
        $this->load->view('roomDetail',$data);
	}
  
	
}
