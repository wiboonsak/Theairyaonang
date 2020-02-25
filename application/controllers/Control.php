<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

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
        if ($this->session->userdata('user_id') == '') {
            redirect(base_url('login'), 'refresh');
            exit();
        }
        $this->load->model('Control_model');
    }

    //---------------------
    public function index() {
        $this->load->view('control/control_header');
        $this->load->view('control/control_index');
        $this->load->view('control/control_footer');
    }

    //---------------------
    public function AddNewRoom($currentID = null, $dataID = null) {
        $data['currentID'] = $currentID;
        $data['dataID'] = $dataID;
        $this->load->view('control/control_header');
        $this->load->view('control/AddNewRoom', $data);
        $this->load->view('control/control_footer');
        $this->load->view('control/AddNewRoom_script');
    }

    //------------------------------- 	
    public function addRoom() {
        $name = $this->input->post('name');
        $description = $this->input->post('description');
        $comment2 = $this->input->post('comment2');
        $comment3 = $this->input->post('comment3');
        $comment4 = $this->input->post('comment4');
        $comment5 = $this->input->post('comment5');
        $Facilities =$this->input->post('Facilities');
        $currentID = $this->input->post('currentID');
        $img = $this->input->post('img_old');
        $upload_path = './uploadfile/room/';
        $upload_pathName = 'uploadfile/room/';
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'gif|jpg|png|jpegGIF|JPG|PNG|JPEG';
        $config['max_size'] = '0';
        $image_data = array();
        //check for errors
        $is_file_error = FALSE;
        $Result = 0;
        $this->load->library('upload', $config);
        $countFiles = count($_FILES['img']['name']);
        //print_r($_FILES['img']['name']);
        if ($_FILES['img']['name'][0] != '') {
            $this->load->helper("file");
            @unlink('uploadfile/room/' . $img);
            for ($i = 0; $i < $countFiles; $i++) {
                //---------------------------
                $_FILES['file_upload2']['name'] = $_FILES['img']['name'][$i];
                $_FILES['file_upload2']['type'] = $_FILES['img']['type'][$i];
                $_FILES['file_upload2']['tmp_name'] = $_FILES['img']['tmp_name'][$i];
                $_FILES['file_upload2']['error'] = $_FILES['img']['error'][$i];
                $_FILES['file_upload2']['size'] = $_FILES['img']['size'][$i];
                $this->upload->initialize($config);
                if ($this->upload->do_upload('file_upload2')) {
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $img = $uploadData[$i]['file_name'];
                }
            }
        }
        $result_id = $this->Control_model->addRoom($name, $description,$comment2,$comment3,$comment4,$comment5, $img, $currentID);
        //--------------------------                  
                 foreach($Facilities AS $value){
                     if($value !=''){
                         $result_id2 = $this->Control_model->addFacilities($currentID , $value);
                         //$dataID = $dataID2;
                     }  //else {
                       //  $dataID = $dataID;
                    // }                     
                     
                 }                 
        echo $result_id;
    }
    //-------------------
    public function remove_file() {
        $file_name = $this->input->post('file_name');
        $file_name = 'uploadfile/' . $file_name;
        $img = '';
        $result = $this->Control_model->remove_file($img);
        if ($result == '1') {
            $this->load->helper("file");
            @unlink($file_name);
            echo $result;
        }
    }
    //----------------------------
    public function addimg() {
        $currentID = $this->input->post('currentID2');
        $upload_path = './uploadfile/room/';
        $upload_pathName = 'uploadfile/room/';
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
        $config['max_size'] = '0';
        $image_data = array();
        $is_file_error = FALSE;
        $Result = 0;
        $this->load->library('upload', $config);
        $countFiles = count($_FILES['img2']['name']);
        if ($countFiles > 0) {
            for ($i = 0; $i < $countFiles; $i++) {
                //---------------------------
                $_FILES['file_upload2']['name'] = $_FILES['img2']['name'][$i];
                $_FILES['file_upload2']['type'] = $_FILES['img2']['type'][$i];
                $_FILES['file_upload2']['tmp_name'] = $_FILES['img2']['tmp_name'][$i];
                $_FILES['file_upload2']['error'] = $_FILES['img2']['error'][$i];
                $_FILES['file_upload2']['size'] = $_FILES['img2']['size'][$i];
                $this->upload->initialize($config);
                if ($this->upload->do_upload('file_upload2')) {
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $img = $uploadData[$i]['file_name'];
                     $result_id = $this->Control_model->addimg($img, $currentID);
                }
            }
        }
        echo $currentID;
    }
    //----------------------------------
    public function loadImg() {
        $ProID = $this->input->post('ProID');
        $imglist = $this->Control_model->loadImg($ProID);
        echo '<table class="table table-bordered table-hover">';
        foreach ($imglist->result() AS $data) {
            echo '<tr id = "RowImg' . $data->id . '">';
            echo '<td width="400"><span class="text-danger"><img src="' . base_url('uploadfile/room/') . $data->image_name . '" style="width:150px;" class="thumbnail"></span></td>';
            ?>
            <td style="text-align: -webkit-center;"><input style="text-align:center;width: 200px;" id="order<?php echo $data->id ?>" type="text" class="form-control form-control-sm OrderCate" value="<?php echo $data->sort_number ?>" onChange="updateOrder('<?php echo $data->id ?>', 'sort_number', this.value)">
                <input type="hidden" id="chkOrder<?php echo $data->id ?>" value="<?php echo $data->sort_number ?>"></td><?php
            echo '<td width="30"><button type="button" class="btn btn-danger btn-sm" onclick="comfirmDelete(\'' . $data->id . '\' , \'imgfile\', \'' . $data->image_name . '\')"><i class="icon-trash"></i></button></td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    //-----------------------------------------------------------------	
    public function loadImggallery() {
        $ProID = $this->input->post('ProID');
        $imglist = $this->Control_model->loadImggallery($ProID);
        echo '<table class="table table-bordered table-hover">';
        foreach ($imglist->result() AS $data) {
            echo '<tr id = "RowImg' . $data->id . '">';
            echo '<td width="400"><span class="text-danger"><img src="' . base_url('uploadfile/gallery/') . $data->image_name . '" style="width:150px;" class="thumbnail"></span></td>';?>
            <td style="text-align: -webkit-center;"><input style="text-align:center;width: 200px;" id="order<?php echo $data->id ?>" type="text" class="form-control form-control-sm OrderCate" value="<?php echo $data->sort_number ?>" onChange="updateOrder('<?php echo $data->id ?>', 'sort_number', this.value)">
                <input type="hidden" id="chkOrder<?php echo $data->id ?>" value="<?php echo $data->sort_number ?>"></td><?php
            echo '<td width="30"><button type="button" class="btn btn-danger btn-sm" onclick="comfirmDelete(\'' . $data->id . '\' , \'imgfile\', \'' . $data->image_name . '\')"><i class="icon-trash"></i></button></td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    //-------------------------------
    public function deletePorductFile1() {
        $fileType = $this->input->post('fileType');
        $DataID = $this->input->post('DataID');
        $FileName = $this->input->post('FileName');
        $result = $this->Control_model->deleteProductFile1($DataID, $fileType, $FileName);
        echo $result;
    }
    //-------------------------------
    public function deletePorductFile2() {
        $fileType = $this->input->post('fileType');
        $DataID = $this->input->post('DataID');
        $FileName = $this->input->post('FileName');
        $result = $this->Control_model->deleteProductFile2($DataID, $fileType, $FileName);
        echo $result;
    }
    //---------------------
    public function listRoom() {
        $currentID = '';
        $data['roomData'] = $this->Control_model->list_roomData($currentID);
        $this->load->view('control/control_header');
        $this->load->view('control/listRoom', $data);
        $this->load->view('control/control_footer');
        $this->load->view('control/listRoom_script');
    }
    //---------------------
    public function GalleryList() {
        $currentID = '';
        $data['galleryData'] = $this->Control_model->list_galleryData($currentID);
        $this->load->view('control/control_header');
        $this->load->view('control/listGallery', $data);
        $this->load->view('control/control_footer');
        $this->load->view('control/listGallery_script');
    }
    // //------------------dataID changeValue //
    public function updateorder() {
        $dataID = $this->input->post('dataID');
        $changeValue = $this->input->post('changeValue');
        $result = $this->Control_model->updateorder($dataID, $changeValue);
        echo $result;
    }
    //-------------------
    public function set_ShowOnWeb() {
        $dataID = $this->input->post('dataID');
        $check = $this->input->post('check');
        $table = $this->input->post('table');
        $result = $this->Control_model->ShowOnWeb($dataID, $check, $table);
        echo $result;
    }
    //-------------------
    public function set_ShowOnWeb2() {
        $dataID = $this->input->post('dataID');
        $check = $this->input->post('check');
        $table = $this->input->post('table');
        $result = $this->Control_model->ShowOnWeb2($dataID, $check, $table);
        echo $result;
    }
    //-------------------
    public function deleteroom() {
        $dataID = $this->input->post('dataID');
        $table = $this->input->post('table');
        $result = $this->Control_model->deleteroom($dataID, $table);
        echo $result;
    }
    //---------------------
    public function setseason() {

        $this->load->view('control/control_header');
        $this->load->view('control/setseason');
        $this->load->view('control/control_footer');
        $this->load->view('control/setseason_script');
    }
    //----------------------------
    public function addseason() {
        $currentID = $this->input->post('currentID');
        $season_name = $this->input->post('season_name');
        $dstart = $this->input->post('dstart');
        $mstart = $this->input->post('mstart');
        $dend = $this->input->post('dend');
        $mend = $this->input->post('mend');
        $result_id = $this->Control_model->addseason($currentID, $season_name, $dstart, $mstart, $dend, $mend);
        echo $result_id;
    }
    //----------------------------
    public function updateThis() {
        $currentID = $this->input->post('currentID');
        $season_name = $this->input->post('season_name');
        $dstart = $this->input->post('dstart');
        $mstart = $this->input->post('mstart');
        $dend = $this->input->post('dend');
        $mend = $this->input->post('mend');
        $result_id = $this->Control_model->updateseason($currentID, $season_name, $dstart, $mstart, $dend, $mend);
        echo $result_id;
    }
    //-------------------------------	
    public function cangePassForm() {
        $this->load->view('changepassform');
    }
    //------------------------------- 
    public function doChangePass() {
        $newpass = trim($this->input->post('newpass'));

        $result = $this->Control_model->doChangePass($newpass);
        echo $result;
    }
    //------------------------
    public function loadSeason() {
        $season = $this->Control_model->season();
        $monthnames = Array("1" => "January", "2" => "February", "3" => "March", "4" => "April", "5" => "May", "6" => "June", "7" => "July", "8" => "August", "9" => "September", "10" => "October", "11" => "November", "12" => "December");
        ?>
        <form name="seasonForm" id="seasonForm">
            <table class="table table-bordered table-hover" id="table1">
                <thead>	
                    <tr style="background-color: #F2F2F2">
                        <th width="60">No</th>
                        <th width="281" > season name</th>
                        <th width="56" style="text-align:center">start season</th>
                        <th width="96" style="text-align:center">end season</th>
                        <th width="100" nowrap="nowrap" style="text-align:center">edit season</th>
                        <th width="100" nowrap="nowrap" style="text-align:center">delete season</th>
                    </tr>
                </thead>	
                <tbody>	
        <?php $n = 1;
        foreach ($season->result() as $season2) { ?>
                        <tr>
                            <td><?php echo $n ?></td>
                            <td>
                                <input type="text" id="name<?php echo $season2->id ?>" name="name" class="form-control form-control-sm" value="<?php echo $season2->season_name ?>">

                            <td style="text-align:center">
                                <select name="dstart" id="dstart<?php echo $season2->id ?>">
                                    <?php for ($i = 1; $i <= 31; $i++) { ?>
                                        <option value="<?php echo $i ?>" <?php if ($season2->start_day == $i) {echo "selected";} ?>><?php echo $i ?></option>
            <?php } ?>
                                </select>  
                                -
                                <select name="mstart" id="mstart<?php echo $season2->id ?>">
            <?php reset($monthnames);
            foreach ($monthnames as $key => $value) { ?>
                                        <option value="<?php echo $key ?>" <?php if ($season2->start_month == $key) {echo "selected";} ?>><?php echo $value ?></option>
            <?php } ?> 
                                </select>
                            </td>
                            <td style="text-align:center">
                                <select name="dend" id="dend<?php echo $season2->id ?>">
            <?php for ($i = 1; $i <= 31; $i++) { ?>
                                        <option value="<?php echo $i ?>" <?php if ($season2->stop_day == $i) {echo "selected";} ?>><?php echo $i ?></option>
            <?php } ?>
                                </select>  
                                -
                                <select name="mend" id="mend<?php echo $season2->id ?>">
            <?php reset($monthnames);
            foreach ($monthnames as $key => $value) { ?>
                                        <option value="<?php echo $key ?>" <?php if ($season2->stop_month == $key) {echo "selected";} ?>><?php echo $value ?></option>
            <?php } ?> 
                                </select>
                                <input type="hidden" name="dataID" id="dataID<?php echo $season2->id ?>" value="<?php echo $season2->id ?>" >  
                            </td>
                            <td style="text-align:center;" ><button type="button" class="btn btn-success btn-sm" onClick="updateThis('<?php echo $season2->id ?>')"><i class="icon-pencil"></i></button></td>
                            <td style="text-align:center;"><button type="button" class="btn btn-danger btn-sm" onClick="delete_data('<?php echo $season2->id ?>', 'tbl_season_time')"><i class="icon-trash"></i></button></td>
                        </tr>
            <?php $n++;} ?>
                </tbody>
            </table> 
        </form>
        <script>
            $(document).ready(function () {
                $('#table1').DataTable({
                    searching: true,
                    ordering: false,
                    pageLength: 15,
                    lengthChange: false
                });
                ///////////////////////////////////////	

                $('[data-plugin="switchery"]').each(function (idx, obj) {
                    new Switchery($(this)[0], $(this).data());
                });
            })
        </script> 
        <?php
    }
    //--------------------
    public function setfullrate() {
        $data['season'] = $this->Control_model->season();
        $data['roomData'] = $this->Control_model->roomData();
        $this->load->view('control/control_header');
        $this->load->view('control/setfullrate', $data);
        $this->load->view('control/control_footer');
        $this->load->view('control/setfullrate_script');
    }
    //-------------------------------
    public function slide_add($curentID = NULL) {
        $slideDetail = $this->Control_model->getslideDetail($curentID);
        if ($slideDetail->num_rows() > 0) {
            foreach ($slideDetail->result() AS $slide) {
            }
            $data['desc_en'] = $slide->desc_en;
            $data['desc_en2'] = $slide->desc_en2;
            $data['desc_en3'] = $slide->desc_en3;
            $data['first_pic'] = $slide->first_pic;
            $data['currentID'] = $slide->id;
        } else {
            $data['desc_en'] = '';
            $data['desc_en2'] = '';
            $data['desc_en3'] = '';
            $data['first_pic'] = '';
            $data['currentID'] = '';
        }
        $this->load->view('control/control_header');
        $this->load->view('control/slide_add', $data);
        $this->load->view('control/control_footer');
        $this->load->view('control/slide_add_script');
    }
    //------------------------------- 	
    public function addSlide() {
        $desc_en = $this->input->post('desc_en');
        $desc_en2 = $this->input->post('desc_en2');
        $desc_en3 = $this->input->post('desc_en3');
        $currentID = $this->input->post('currentID');
        $img = $this->input->post('img_old');
        $upload_path = './uploadfile/banner/';
        $upload_pathName = 'uploadfile/banner/';
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
        $config['max_size'] = '0';
        $image_data = array();
        //check for errors
        $is_file_error = FALSE;
        $Result = 0;
        $this->load->library('upload', $config);
        $countFiles = count($_FILES['img']['name']);
        //print_r($_FILES['img']['name']);
        if ($_FILES['img']['name'][0] != '') {
            $this->load->helper("file");
            @unlink('uploadfile/banner/' . $img);
            for ($i = 0; $i < $countFiles; $i++) {
                //---------------------------
                $_FILES['file_upload2']['name'] = $_FILES['img']['name'][$i];
                $_FILES['file_upload2']['type'] = $_FILES['img']['type'][$i];
                $_FILES['file_upload2']['tmp_name'] = $_FILES['img']['tmp_name'][$i];
                $_FILES['file_upload2']['error'] = $_FILES['img']['error'][$i];
                $_FILES['file_upload2']['size'] = $_FILES['img']['size'][$i];
                $this->upload->initialize($config);
                if ($this->upload->do_upload('file_upload2')) {
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $img = $uploadData[$i]['file_name'];
                }
            }
        }
        $result_id = $this->Control_model->addSlide($desc_en, $desc_en2, $desc_en3, $img,$currentID);

        echo $result_id;
    }
    //-------------------------------
    public function loadSlideImages() {
        $ProID = $this->input->post('ProID');
        $data['slideImg'] = $this->Control_model->loadSlideImg($ProID);
        $this->load->view('control/slide_images_list', $data);
    }
    //-------------------------------
    public function slide_list() {
        $data['SlideList'] = $this->Control_model->slide_list();
        $this->load->view('control/control_header');
        $this->load->view('control/slide_list', $data);
        $this->load->view('control/control_footer');
        $this->load->view('control/slide_list_script');
    }
    //-----------------------------------
    public function deleteSlide() {
        $DataID = $this->input->post('DataID');
        $result = $this->Control_model->deleteSlide($DataID);
        echo $result;
    }
    // //------------------
    public function updateorderslide() {
        $dataID = $this->input->post('dataID');
        $changeValue = $this->input->post('changeValue');
        $result = $this->Control_model->updateorderslide($dataID, $changeValue);
        echo $result;
    }
    // //------------------
    public function updateroomrate() {
        $dataID = $this->input->post('dataID');
        $changeValue = $this->input->post('changeValue');
        $result = $this->Control_model->updateroomrate($dataID, $changeValue);
        echo $result;
    }
    //---------------------
    public function GalleryAdd($currentID = null, $dataID = null) {
        $data['currentID'] = $currentID;
        $data['dataID'] = $dataID;
        $this->load->view('control/control_header');
        $this->load->view('control/GalleryAdd', $data);
        $this->load->view('control/control_footer');
        $this->load->view('control/GalleryAdd_script');
    }
    //------------------------------- 	
    public function addGallery() {
        $name = $this->input->post('name');
        $currentID = $this->input->post('currentID');
        $result_id = $this->Control_model->addGallery($name, $currentID);

        echo $result_id;
    }
    //----------------------------
    public function addimggallery() {
        $currentID = $this->input->post('currentID2');
        $upload_path = './uploadfile/gallery/';
        $upload_pathName = 'uploadfile/gallery/';
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
        $config['max_size'] = '0';
        $image_data = array();
        //check for errors
        $is_file_error = FALSE;
        $Result = 0;
        $this->load->library('upload', $config);
        $countFiles = count($_FILES['img2']['name']);
        if ($countFiles > 0) {
            for ($i = 0; $i < $countFiles; $i++) {
                //---------------------------
                $_FILES['file_upload2']['name'] = $_FILES['img2']['name'][$i];
                $_FILES['file_upload2']['type'] = $_FILES['img2']['type'][$i];
                $_FILES['file_upload2']['tmp_name'] = $_FILES['img2']['tmp_name'][$i];
                $_FILES['file_upload2']['error'] = $_FILES['img2']['error'][$i];
                $_FILES['file_upload2']['size'] = $_FILES['img2']['size'][$i];
                $this->upload->initialize($config);
                if ($this->upload->do_upload('file_upload2')) {
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $img = $uploadData[$i]['file_name'];
                    $result_id = $this->Control_model->addimggallery($img, $currentID);
                }
            }
        }
        echo $currentID;
    }
    // //------------------dataID changeValue //
    public function updateorder2() {
        $dataID = $this->input->post('dataID');
        $changeValue = $this->input->post('changeValue');
        $result = $this->Control_model->updateorder2($dataID, $changeValue);
        echo $result;
    }
    // //------------------dataID changeValue //
    public function updateorder3() {
        $dataID = $this->input->post('dataID');
        $changeValue = $this->input->post('changeValue');
        $result = $this->Control_model->updateorder3($dataID, $changeValue);
        echo $result;
    }
    // //------------------dataID changeValue //
    public function updateorder4() {
        $dataID = $this->input->post('dataID');
        $changeValue = $this->input->post('changeValue');
        $result = $this->Control_model->updateorder4($dataID, $changeValue);
        echo $result;
    }
    // //------------------dataID changeValue //
    public function addroomrate() {
        $roomid = $this->input->post('roomid');
        $seasonid = $this->input->post('seasonid');
        $changeValue = $this->input->post('changeValue');
        $result = $this->Control_model->addroomrate($roomid,$seasonid,$changeValue);
        echo $result;
    }
       // //------------------dataID changeValue //
	public  function updateFacilities(){
		$dataID = $this->input->post('dataID');
		$changeValue = $this->input->post('changeValue');
		$result = $this->Control_model->updateFacilities($dataID,$changeValue);
		echo $result;
		
	} 
         //-------------------
    public function deleteData() {
        $dataID = $this->input->post('dataID');
        $table = $this->input->post('table');
        $result = $this->Control_model->delete_data($dataID, $table);
        echo $result;
    }
        //---------------------
    public function listSubscribe() {
        $data['subscribeData'] = $this->Control_model->subscribeData();
        $this->load->view('control/control_header');
        $this->load->view('control/listSubscribe', $data);
        $this->load->view('control/control_footer');
        $this->load->view('control/listSubscribe_script');
    }
}
