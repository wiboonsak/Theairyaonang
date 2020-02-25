<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
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

    public function index() {
        $data['getroomdata'] = $this->Control_model->getroomdata('1');
        $data['getgallerydata'] = $this->Control_model->getgallerydata('1');
        $data['imagesList']=$this->Control_model->loadgalleryImgall();
        $this->load->view('gallery',$data);
    }
        //----------------------------------
	public function gallery($galleryID)
	{
	$data['getroomdata'] = $this->Control_model->getroomdata('1');
        $data['getgallerydata'] = $this->Control_model->getgallerydata('1');
            $galleryName=$this->Control_model->galleryDetail($galleryID);
            foreach($galleryName->result() AS $galleryName2){ }
            $data['galleryName']=$galleryName2->name_en;
            $data['galleryList']=$this->Control_model->galleryDetailbyID($galleryID);  
            $data['imagesList']=$this->Control_model->loadgalleryImg($galleryID);
        $this->load->view('gallerydetail',$data);
	}

}
