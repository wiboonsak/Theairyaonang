<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Control_model extends CI_Model {

    //---------------------- 
    function checklogin($username, $password) {
        $password = md5($password);
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('data_status', '1');
        $query = $this->db->get('tbl_admin_user');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row)
                ;
            $userdata = array(
                'user_id' => $row->id,
                'name' => $row->admin_name,
                'userLv' => $row->admin_status
            );
            $this->session->set_userdata($userdata);
            $pass = 1;
            //-----------last update----------//
            date_default_timezone_set('Asia/Bangkok');
            $now = date("Y-m-d H:i:s");
            $data = array(
                'last_login' => $now
            );
            $this->db->where('id', $row->id);
            $this->db->update('tbl_admin_user', $data);
        } else {
            $pass = 0;
        }
        return $pass;
    }
    //---------------------------
    function list_roomData($dataID = NULL) {
        if ($dataID != '') {
            $sql = "SELECT * FROM `tbl_room_data` WHERE id = '$dataID' AND room_status = '1' ORDER BY sort_number ASC";
            $query = $this->db->query($sql);
        } else {
            $sql = "SELECT * FROM `tbl_room_data` ORDER BY sort_number ASC";
            $query = $this->db->query($sql);
        }
        return $query;
    }
    //---------------------------
    function loadImg($ProID) {
        $sql = $this->db->query("SELECT * FROM `tbl_room_img` WHERE room_id ='" . $ProID . "' ORDER BY sort_number ASC ");
        return $sql;
    }
    //---------------------------
    function loadImggallery($ProID) {
        $sql = $this->db->query("SELECT * FROM `tbl_gallery_img` WHERE cate_id ='" . $ProID . "' ORDER BY sort_number ASC ");
        return $sql;
    }
    //-----------------------------------
    function addRoom($name = null, $description = null, $comment2 = null,$comment3 = null,$comment4 = null, $comment5 = null,$img = null, $currentID = null) {
        $sql = $this->db->query("SELECT MAX(sort_number) AS nNax FROM  tbl_room_data WHERE room_status='1'");
        foreach ($sql->result() AS $data) {
        }
        $nMaxIns = $data->nNax + 1;
        $data = array(
            'room_type_en' => $name,
            'room_short_info_en' => $description,
            'room_info_en' => $comment2,
            'CANCELLATION' => $comment3,
            'PAYMENT' => $comment4,
            'TERMS_AND_CONDITIONS' => $comment5,
            'first_pic' => $img,
            'room_status' => '1',
            'sort_number' => $nMaxIns);
        if ($currentID == '') {
            if ($this->db->insert('tbl_room_data', $data)) {
                $currentID = $this->db->insert_id();
            } else {
                $currentID = 'Error';
            }
        } else {
            $data = array(
                'room_type_en' => $name,
                'room_short_info_en' => $description,
                'room_info_en' => $comment2,
                'CANCELLATION' => $comment3,
                'PAYMENT' => $comment4,
                'TERMS_AND_CONDITIONS' => $comment5,
                'first_pic' => $img);
            $this->db->where('id', $currentID);
            if ($this->db->update('tbl_room_data', $data)) {
                $currentID = $currentID;
            } else {
                $currentID = 'Error';
            }
        }
        return $currentID;
    }
    //---------------------------   
    function remove_file($img = null) {
        $data = array('first_pic' => $img);
        if ($this->db->update('tbl_room_data', $data)) {
            return "1";
        } else {
            return "0";
        }
    }
    //=----------------
    function addimg($img = null, $currentID = null) {
        $sql = $this->db->query("SELECT MAX(sort_number) AS nNax FROM tbl_room_img WHERE room_id  ='".$currentID."'");
        foreach ($sql->result() AS $data) {
        }
        $nMaxIns = $data->nNax + 1;
        $sql = "INSERT INTO `tbl_room_img`(`room_id`, `image_name`,`sort_number`) VALUES ('" . $currentID . "','" . $img . "','" . $nMaxIns . "')";
        $query = $this->db->query($sql);
        return $query;
    }
    //=----------------
    function addimggallery($img = null, $currentID = null) {
        $sql = $this->db->query("SELECT MAX(sort_number) AS nNax FROM tbl_gallery_img WHERE cate_id  ='".$currentID."'");
        foreach ($sql->result() AS $data) {
        }
        $nMaxIns = $data->nNax + 1;
        $sql = "INSERT INTO `tbl_gallery_img`(`cate_id`, `image_name`,`sort_number`) VALUES ('" . $currentID . "','" . $img . "','" . $nMaxIns . "')";
        $query = $this->db->query($sql);
        return $query;
    }
    //----------------------
    function deleteProductFile1($DataID, $fileType, $fileName) {
        if ($fileType == 'imgfile') {
            $this->db->where('image_name', $fileName);
            $this->db->where('id', $DataID);
            if ($this->db->delete('tbl_room_img')) {
                $pass = 1;
                @unlink('./uploadfile/room/' . $fileName);
            } else {
                $pass = 0;
            }
        } else {
            $pass = 0;
        }
        return $pass;
    }
    //------------------------------------
    function updateorder($dataID, $changeValue) {
        $data = array('sort_number' => $changeValue);
        $this->db->where('id', $dataID);
        if ($this->db->update(' tbl_room_data', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
    //---------------------------	 
    function update_ShowOnWeb($dataID = NULL, $check = NULL, $table = NULL) {
        $data = array(
            'room_status' => $check
        );
        $this->db->where('id', $dataID);
        if ($this->db->update($table, $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
    //---------------------------------
    function deleteroom($dataID = NULL, $table = NULL) {
        $this->db->where('id', $dataID);
        if ($this->db->DELETE($table)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
    //-------------------------------------------
    function addseason($currentID = null, $season_name = null, $dstart = null, $mstart = null, $dend = null, $mend = null) {
        $data = array(
            'season_name' => $season_name,
            'start_day' => $dstart,
            'start_month' => $mstart,
            'stop_day' => $dend,
            'stop_month' => $mend);
        if ($this->db->insert('tbl_season_time', $data)) {
            $currentID = $this->db->insert_id();
        } else {
            $currentID = 'Error';
        }return $currentID;
    }
    //=----------------
    function season() {
        $sql = $this->db->query("SELECT * FROM `tbl_season_time` ORDER BY id ASC");
        return $sql;
    }
    //=----------------
    function roomData() {
        $sql = $this->db->query("SELECT * FROM `tbl_room_data` WHERE room_status = '1' ORDER BY sort_number ASC");
        return $sql;
    }
    //=----------------
    function updateseason($currentID = null, $season_name = null, $dstart = null, $mstart = null, $dend = null, $mend = null) {
        $data = array(
            'season_name' => $season_name,
            'start_day' => $dstart,
            'start_month' => $mstart,
            'stop_day' => $dend,
            'stop_month' => $mend);

        $this->db->where('id', $currentID);
        if ($this->db->update('tbl_season_time', $data)) {
            $currentID = 1;
        } else {
            $currentID = 0;
        }return $currentID;
    }
    //-------------------------------------
    function doChangePass($newpass) {
        $newpass = md5($newpass);
        $sql = "UPDATE tbl_admin_user SET `password` = '" . $newpass . "' ";
        if ($this->db->query($sql)) {
            return 1;
        } else {
            return 0;
        }
    }
//------------------------------------
    function getMonth($strDate = NULL) {
        $mon = $strDate;
        $monthArray = array("1" => "January", "2" => "February", "3" => "March", "4" => "April", "5" => "May", "6" => "June", "7" => "July", "8" => "August", "9" => "September", "10" => "October", "11" => "November", "12" => "December");
        $day = $monthArray[$mon];
        return $day;
    }
//------------------------------------
    function getnamemonth($strDate = NULL) {
        $mon1 = $strDate;
        $monthArray1 = array("1" => "Jan", "2" => "Feb", "3" => "Mar", "4" => "Apr", "5" => "May", "6" => "Jun", "7" => "Jul", "8" => "Aug", "9" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
        $day1 = $monthArray1[$mon1];
        return $day1;
    }
    //---------------------
    function getroomrate($roomid = null, $seasonid = null) {
        $sql = "SELECT * FROM tba_season_roomrate WHERE room_id = '" . $roomid . "' AND season_id = '" . $seasonid . "'";
        $query = $this->db->query($sql);
        return $query;
    }
    //------------------------------------
    function getslideDetail($curentID = null) {
        $this->db->where('id', $curentID);
        $sql = $this->db->get('tbl_img_slide');
        return $sql;
    }
    //--------------------------- 
    function addSlide($desc_en = null, $desc_en2 = null, $desc_en3 = null, $img = null,$currentID = null) {
        $sql = $this->db->query("SELECT MAX(sort_number) AS nNax FROM tbl_img_slide WHERE status ='1'");
        foreach ($sql->result() AS $data) {
        }
        $nMaxIns = $data->nNax + 1;
        $today = date("Y-m-d H:i:s");
        $data = array(
            'desc_en' => $desc_en,
            'desc_en2' => $desc_en2,
            'desc_en3' => $desc_en3,
            'first_pic' => $img,
            'sort_number' => $nMaxIns,
            'add_date' => $today);
        if ($currentID == '') {
            if ($this->db->insert('tbl_img_slide', $data)) {
                $currentID = $this->db->insert_id();
            } else {
                $currentID = 'Error';
            }
        } else {
            $data = array(
                'desc_en' => $desc_en,
                'desc_en2' => $desc_en2,
                'desc_en3' => $desc_en3,
                'first_pic' => $img);
            $this->db->where('id', $currentID);
            if ($this->db->update('tbl_img_slide', $data)) {
                $currentID = $currentID;
            } else {
                $currentID = 'Error';
            }
        }
        return $currentID;
    }
    //----------------------------
    function loadSlideImg($ProID) {
        $sql = $this->db->query("SELECT `first_pic` FROM `tbl_img_slide` WHERE id ='" . $ProID . "'  ");
        return $sql;
    }
    //---------------------------
    function slide_list() {
        $sql = $this->db->query("SELECT * FROM tbl_img_slide ORDER BY sort_number ASC");
        return $sql;
    }
    //---------------------------	 
    function ShowOnWeb($dataID = NULL, $check = NULL, $table = NULL) {
        $data = array(
            'status' => $check
        );
        $this->db->where('id', $dataID);
        if ($this->db->update($table, $data)) {
            $pass = 1;
        } else {
            $pass = 0;
            //$this->db->_error_message(); 
        }
        return $pass;
    }
    //---------------------------	 
    function ShowOnWeb2($dataID = NULL, $check = NULL, $table = NULL) {
        $data = array(
            'data_status' => $check
        );
        $this->db->where('id', $dataID);
        if ($this->db->update($table, $data)) {
            $pass = 1;
        } else {
            $pass = 0;
            //$this->db->_error_message(); 
        }
        return $pass;
    }
    //------------------------------------
    function deleteSlide($DataID = null) {
        $sql = $this->db->query("SELECT * FROM tbl_img_slide WHERE id ='" . $DataID . "' ");
        foreach ($sql->result() AS $data) {
            @unlink('./uploadfile/banner/' . $data->first_pic);
        }
        $this->db->where('id', $DataID);
        $this->db->delete('tbl_img_slide');
        $this->db->where('id', $DataID);
        if ($this->db->delete('tbl_img_slide')) {
            $pass = '1';
        } else {
            $pass = 'Error';
        }
        return $pass;
    }
    //------------------------------------
    function updateorderslide($dataID, $changeValue) {
        $data = array('sort_number' => $changeValue);
        $this->db->where('id', $dataID);
        if ($this->db->update('tbl_img_slide', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
    //------------------------------------
    function updateroomrate($dataID, $changeValue) {
        $data = array('room_price' => $changeValue);
        $this->db->where('id', $dataID);
        if ($this->db->update('tba_season_roomrate', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
    //---------------------------
    function list_galleryData($dataID = NULL) {
        if ($dataID != '') {
            $sql = "SELECT * FROM `tbl_gallery_data` WHERE id = '$dataID' ORDER BY sort_number ASC ";
            $query = $this->db->query($sql);
        } else {
            $sql = "SELECT * FROM `tbl_gallery_data` ORDER BY sort_number ASC";
            $query = $this->db->query($sql);
        }
        return $query;
    }
    //--------------------------- 
    function addGallery($name = null, $currentID = null) {
        $sql = $this->db->query("SELECT MAX(sort_number) AS nNax FROM  tbl_gallery_data ");
        foreach ($sql->result() AS $data) {
        }
        $nMaxIns = $data->nNax + 1;
        $data = array(
            'name_en' => $name,
            'sort_number' => $nMaxIns);
        if ($currentID == '') {
            if ($this->db->insert('tbl_gallery_data', $data)) {
                $currentID = $this->db->insert_id();
            } else {
                $currentID = 'Error';
            }
        } else {
            $data = array(
                'name_en' => $name);
            $this->db->where('id', $currentID);
            if ($this->db->update('tbl_gallery_data', $data)) {
                $currentID = $currentID;
            } else {
                $currentID = 'Error';
            }
        }
        return $currentID;
    }
    //------------------------------------
    function updateorder2($dataID, $changeValue) {
        $data = array('sort_number' => $changeValue);
        $this->db->where('id', $dataID);
        if ($this->db->update('tbl_gallery_data', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
    //------------------------------------
    function updateorder3($dataID, $changeValue) {
        $data = array('sort_number' => $changeValue);
        $this->db->where('id', $dataID);
        if ($this->db->update('tbl_gallery_img', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
    //------------------------------------
    function updateorder4($dataID, $changeValue) {
        $data = array('sort_number' => $changeValue);
        $this->db->where('id', $dataID);
        if ($this->db->update('tbl_room_img', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
    //----------------------
    function deleteProductFile2($DataID, $fileType, $fileName) {
        if ($fileType == 'imgfile') {
            $this->db->where('image_name', $fileName);
            $this->db->where('id', $DataID);
            if ($this->db->delete('tbl_gallery_img')) {
                $pass = 1;
                @unlink('./uploadfile/gallery/' . $fileName);
            } else {
                $pass = 0;
            }
        } else {
            $pass = 0;
        }
        return $pass;
    }
       //-------------------------------------------
    function addroomrate($roomid=null,$seasonid=null,$changeValue=null) {
        $data = array(
            'room_id' => $roomid,
            'season_id' => $seasonid,
            'room_price' => $changeValue);
        if ($this->db->insert('tba_season_roomrate', $data)) {
            $currentID = $this->db->insert_id();
        } else {
            $currentID = 'Error';
        }return $currentID;
    }
        //-------------------------
    function getroomdata($datatype = null) {
        $sql = $this->db->query("SELECT * FROM tbl_room_data WHERE room_status='" . $datatype . "' ORDER BY sort_number ASC ");
        return $sql;
    }
        //-------------------------
    function getgallerydata($datatype = null) {
        $sql = $this->db->query("SELECT * FROM tbl_gallery_data WHERE data_status='" . $datatype . "' ORDER BY sort_number ASC ");
        return $sql;
    }
      //---------------------
    function roomDetail($roomID = null) {
        $sql = $this->db->query("SELECT * FROM tbl_room_data WHERE id = '" . $roomID . "' ");
        return $sql;
    }
       //--------------------
    function roomDetailbyID($roomID = null) {
      
        $sql = "SELECT * FROM tbl_room_data WHERE id ='" . $roomID . "' AND room_status='1' ";
        $query = $this->db->query($sql);
        return $query;
    }
    //------------------------
        function loadroomImg($roomID = null) {
        $sql = $this->db->query("SELECT * FROM `tbl_room_img` WHERE room_id ='" . $roomID . "' ORDER BY sort_number ASC ");
        return $sql;
    }
    //-----------------------
        function list_Facilities($currentID = NULL) {
        if ($currentID != '') {
            $this->db->where('room_id', $currentID);
        }
        $this->db->select('*'); 
        $query = $this->db->get('tbl_facilities');
        return $query;
    }
        //-------------------------------
    function addFacilities ($dataID=null , $value=null) {
       
        $data = array('facilities' => $value,
            'room_id' =>$dataID,
        );
            if ($this->db->insert('tbl_facilities', $data)) {
                $dataID = $this->db->insert_id();
            } else {
                $dataID = 'Error';
            }
   
    }
             //------------------------------------
    function updateFacilities($dataID, $changeValue) {
        $data = array('facilities' => $changeValue);
        $this->db->where('id', $dataID);
        if ($this->db->update(' tbl_facilities', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
    //------------------------------------------
        function delete_data($dataID = NULL, $table = NULL) {
        $data = array('id' => $dataID);
        if ($this->db->delete($table, $data)) {
            $pass = 1;
        } else {
            $pass = 0;
            //$this->db->_error_message(); 
        }
        return $pass;
    }
          //---------------------
    function galleryDetail($galleryID = null) {
        $sql = $this->db->query("SELECT * FROM tbl_gallery_data WHERE id = '" . $galleryID . "' ");
        return $sql;
    }
       //--------------------
    function galleryDetailbyID($galleryID = null) {
      
        $sql = "SELECT * FROM tbl_gallery_data WHERE id ='" . $galleryID . "' AND data_status='1' ";
        $query = $this->db->query($sql);
        return $query;
    }
        //------------------------
        function loadgalleryImg($galleryID = null) {
        $sql = $this->db->query("SELECT * FROM `tbl_gallery_img` WHERE cate_id ='" . $galleryID . "' ORDER BY sort_number ASC ");
        return $sql;
    }
        //------------------------
        function loadgalleryImgall() {
        $sql = $this->db->query("SELECT a.* ,b.* FROM  tbl_gallery_img a LEFT JOIN tbl_gallery_data b ON a.cate_id=b.id ORDER BY a.sort_number ASC");
        return $sql;
    }
        //---------------------------
    function loadSlide($status=null) {
        $sql = $this->db->query("SELECT * FROM `tbl_img_slide` WHERE status = '" . $status . "'");
        return $sql;
    }
        //=----------------
    function loadroomData() {
        $sql = $this->db->query("SELECT * FROM `tbl_room_data`  WHERE room_status = '1'  ORDER BY sort_number DESC LIMIT 2");
        return $sql;
    }
         //------------------------------ 
	function count_email($mail=NULL){
				 
		$sql = "SELECT * FROM `tbl_subscribe` WHERE subscribe ='".$mail."' ";
        $query = $this->db->query($sql);
		$numberCount = $query->num_rows();			
		return $numberCount;		
	}
            //--------------------------
         function addsub($sub=null){
             $today =  $today = date("Y-m-d H:i:s");
             $data = array('subscribe' => $sub,
            'date_add' => $today
        );
        $result = $this->db->insert('tbl_subscribe', $data);
        return '1';
         }
       //-------------------------
    function subscribeData() {
        $sql = $this->db->query("SELECT * FROM tbl_subscribe ");
        return $sql;
    }
}
