
<link href="<?php echo base_url('css/metismenu.min.css') ?>" rel="stylesheet" type="text/css" />
<!-- X editable -->
<link href="<?php echo base_url('asset/control/plugins/bootstrap-xeditable/css/bootstrap-editable.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('asset/control/plugins/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('asset/control/plugins/datatables/buttons.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('asset/control/plugins/bootstrap-fileupload/bootstrap-fileupload.css') ?>" rel="stylesheet" />
<div class="wrapper">
    <div class="container-fluid">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <br>
                <p style="font-size: 24px"><?php if ($currentID == '') {echo 'Add new room';
} else {
    echo 'Room detail';
} ?></p>
                <hr>
            </div>
            <div class="page-content">
                <div class="ace-settings-container" id="ace-settings-container">
                </div>
            </div>
<?php
if ($currentID != '') {
    $roomData = $this->Control_model->list_roomData($currentID);
    foreach ($roomData->result() AS $roomData2) {
    }
}
?>
            <form enctype="multipart/form-data" id="newroomForm" name="newroomForm">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Room name :</label>
                    <div class="col-sm-9">
                        <input type="text" id="name" name="name" class="form-control form-control-sm" value="<?php if ($currentID != '') {echo $roomData2->room_type_en;} ?> " >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Room description :</label>
                    <div class="col-sm-9">
                        <textarea id="description" name="description" class="form-control form-control-sm" ><?php if ($currentID != '') {echo $roomData2->room_short_info_en;} ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Facilities :</label>
                    <div  id="Name_a" class="col-sm-7">
                        <input id="Facilities" name="Facilities[]" type="text" class="form-control form-control-sm author3" value="">  
                    </div>
                    <div class="col-2">
                                                        <a href="#" id="bt1"class="btn btn-custom waves-effect waves-light btn-sm" onclick="ADDFacilities()">Add</a>
                                                    </div>
                </div>
                  <div class="form-group row">
                                                <?php
                                                   // if ($currentID != '') { 
                                                     // $authorData = $this->journal_model_2->list_authorData($currentID);
                                                    //  foreach ($authorData->result() AS $authorData2){}?>   
                                                   
                                                      <?php
                                                    if ($currentID != '') { 
                                                      $FacilitiesData = $this->Control_model->list_Facilities($currentID);
                                                      foreach ($FacilitiesData->result() AS $FacilitiesData2){?>
                                                     <label class="col-sm-3"></label>
                                                    <div class="col-7">                                            <input id="order<?php echo $FacilitiesData2->id ?>" type="text" class="form-control form-control-sm " value="<?php echo $FacilitiesData2->facilities?>" onChange="updateFacilities('<?php echo $FacilitiesData2->id ?>', 'facilities', this.value)">  <br>    <!--<input type="hidden" id="chkOrder<?php //echo $authorData2->id ?>" value="<?php //echo $authorData2->name ?>">  -->  
                                                    </div> 
                                                     <div class="col-2">
                                                        <a href="#" id="bt2"class="btn btn-danger waves-effect waves-light btn-sm fa fa-remove" onclick="deleteFacilities('<?php echo $FacilitiesData2->id ?>', 'tbl_facilities')"></a>
                                                         
                                                    </div>
                                                    <?php  } } ?> 
                                                 </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Room Detail :</label>
                    <div class="col-sm-9">
                        <textarea id="Detail" name="Detail" class="ex" ><?php if ($currentID != '') {echo $roomData2->room_info_en;} ?></textarea>
                    </div>
                </div>	
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">TERMS AND CONDITIONS :</label>
                    <div class="col-sm-9">
                        <textarea id="CONDITIONS" name="CONDITIONS" class="ex" ><?php if ($currentID != '') {echo $roomData2->TERMS_AND_CONDITIONS;} ?></textarea>
                    </div>
                </div>	
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">CANCELLATION POLICIES :</label>
                    <div class="col-sm-9">
                        <textarea id="CANCELLATION" name="CANCELLATION" class="ex" ><?php if ($currentID != '') {echo $roomData2->CANCELLATION;} ?></textarea>
                    </div>
                </div>	
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">PAYMENT TERM :</label>
                    <div class="col-sm-9">
                        <textarea id="PAYMENT" name="PAYMENT" class="ex" ><?php if ($currentID != '') {echo $roomData2->PAYMENT;} ?></textarea>
                    </div>
                </div>	
                <div class="form-group row">
                    <label class="col-md-3 ">Room banner image : </label>
                    <div class="fileupload <?php if (($currentID != '') && ($roomData2->first_pic != '')) {
                                echo 'fileupload-exists';
                            } else {
                                echo 'fileupload-new';
                            } ?>" data-provides="fileupload"> 
<?php if ($currentID == '') { ?>
                            <div class="fileupload-new thumbnail col-md-9" style="width: 225px; height: 150px;" id="upload_new">
                                <img src="<?php echo base_url('images/picture-not-available.jpg') ?>" alt="image" />				</div>
                            <div class="fileupload-preview fileupload-exists thumbnail" id="upload_preview" style="max-width: 225px; max-height: 150px; line-height: 20px;"></div>													<?php } ?>
                            <?php if ($currentID != '') { ?>
                            <div class="fileupload-new thumbnail" style="width: 225px; height: 150px;" id="upload_new">	
                                <img src="<?php echo base_url('images/picture-not-available.jpg') ?>" alt="image" />
                            </div>
                            <div class="fileupload-preview fileupload-exists thumbnail" id="upload_preview" style="max-width: 225px; max-height: 150px; line-height: 20px;">
    <?php if ($roomData2->first_pic != '') { ?>
                                    <img src="<?php echo base_url('uploadfile/room/'). $roomData2->first_pic ?>" alt="image" style="max-width: 225px; max-height: 150px; line-height: 20px;" onClick="window.open('<?php echo base_url('uploadfile/room/'). $roomData2->first_pic ?>', '_blank'); location.reload();" />
    <?php } ?>
                            </div>
<?php } ?>
                        <div class="col-md-9">
                            <button type="button" class="btn btn-custom btn-file">
                                <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                <input type="file" class="btn-light" id="img" name="img[]" />
                            </button>
<?php if (($currentID != '') && ($roomData2->first_pic != '')) { ?>
                                <a href="javascript:void(0)" class="btn btn-danger fileupload-exists" onClick="removeFile('<?php echo $currentID ?>', '<?php echo $roomData2->first_pic ?>', 'รูปภาพ', 'tbl_room_data', 'first_pic', '')" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
<?php } else { ?>
                                <a href="javascript:void(0)" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
            <?php } ?>				
                        </div>
                        <small class="text-danger" style="font-size: 16px">Image size width 626 pixel height 464 pixel .  jpg png support</small>
                    </div>
                </div>
                <div class="form-group row" >
                    <div class="col-sm-12" style="text-align: center">
                        <button type="button" class="btn btn-success btn-sm" onClick="Add()">Add/Edit Data</button>
                        <input type="hidden" name="currentID" id="currentID" value="<?php if ($currentID != '') {
                echo $roomData2->id;
            } ?>" >
                        <input type="hidden" name="comment2" id="comment2" >
                        <input type="hidden" name="comment3" id="comment3" >
                        <input type="hidden" name="comment4" id="comment4" >
                        <input type="hidden" name="comment5" id="comment5" >
                        <input type="hidden" name="img_old" id="img_old" value="<?php if ($currentID != '') {
                echo $roomData2->first_pic;
            } ?>" >
                    </div>
                </div>					
            </form>					
<?php if ($currentID != '') { ?>
                <br>
                <hr>
                <br>
                <br>
                <div id="showSection" >
                    <div class="form-group row">
                        <label class="col-sm-3 fa fa-file-image-o" style="font-size:16px;font-weight: bold;">
                            Room Images additional
                        </label>
                        <form enctype="multipart/form-data" id="imgForm" name="imgForm" method="post">
                            <div class="col-sm-12">
                                <label>&emsp;&emsp;If you want to add a photo Click Browse to select the image file. Then press the Add Photos button. The system can add unlimited images. The image should be no larger than 1024 by 768 pixels high. ( .jpg .gif .png support) </label>
                                <a>choose file</a>
                                <input type="hidden" name="currentID2" id="currentID2" value="<?php if ($currentID != '') {
        echo $roomData2->id;
    } ?>" >
                                <input type="file" class="btn-light" id="img2" name="img2[]" multiple/>
                                <a class="btn btn-custom waves-effect waves-light" onClick="Addimg()">Add image</a>
                                <div id="showImage" style="margin-top: 5px;"></div>
                            </div>
                        </form>
                    </div>
                </div>
<?php } ?>
       </div> 
    </div>
</div>