<!-- jQuery  -->
<script src="<?php echo base_url('asset/control/assets/js/jquery.slimscroll.js') ?>"></script>
<script src="<?php echo base_url('asset/control/plugins/jquery-toastr/jquery.toast.min.js') ?>"></script>
<script src="<?php echo base_url('asset/control/assets/pages/jquery.toastr.js') ?>"></script>
<script src="<?php echo base_url('asset/control/plugins/moment/moment.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('js/bootstrap-filestyle.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('asset/control/plugins/bootstrap-xeditable/js/bootstrap-editable.min.js') ?>" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        loadImages('<?php echo $currentID ?>');
    })
    function Add() {
        var name = $('#name').val();
        var description = $('#description').val();
        var Detail = tinyMCE.editors[$('#Detail').attr('id')].getContent();
        $('#comment2').val(Detail);
        var CANCELLATION = tinyMCE.editors[$('#CANCELLATION').attr('id')].getContent();
        $('#comment3').val(CANCELLATION);
        var PAYMENT = tinyMCE.editors[$('#PAYMENT').attr('id')].getContent();
        $('#comment4').val(PAYMENT);
        var CONDITIONS = tinyMCE.editors[$('#CONDITIONS').attr('id')].getContent();
        $('#comment5').val(CONDITIONS);
        var img = $('#img').val();
        var img_old = $('#img_old').val();
        var currentID = $('#currentID').val();
        console.log(img);
        if (name == '') {
            swal(
                    {
                        title: 'Please enter Room name !',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            )
        }
        if (description == '') {
            swal(
                    {
                        title: 'Please enter Room description!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            )
        }
        if ((img == '') && (img_old == '')) {
            swal(
                    {
                        title: 'Please enter Room banner image !',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            )
        } else {
            //---------------------------------------------
            var imgs = $('#img').val();
            //console.log('imgs=>'+imgs)
            var postData = new FormData($("#newroomForm")[0]);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('Control/addRoom') ?>',
                processData: false,
                contentType: false,
                data: postData,
                success: function (data, status) {
                    //console.log(data);
                    $('#currentID').val(data);
                    if (status == 'success') {
                        swal({
                            title: 'Successfully saved.',
                            //text: 'You clicked the button!',
                            type: 'success',
                            confirmButtonClass: 'btn btn-confirm mt-2'
                        });
                        setTimeout(function () {
                            window.location.href = "<?php echo base_url('Control/AddNewRoom/') ?>" + data;
                        }, 2000);
                    } else {
                        swal({
                            title: 'Can not be saved.!',
                            //text: "You won't be able to revert this!",
                            type: 'warning',
                            confirmButtonClass: 'btn btn-confirm mt-2'
                        });
                    }
                }
            });
        }
    }
    //----------------------
    function removeFile(dataID, file_name, txt1, table, field, ch) {
        var txt2 = 'Delete' + txt1 + '?';
        swal({
            title: txt2,
            type: 'warning',
            showCancelButton: true,
            confirmButtonClass: 'btn btn-confirm mt-2',
            cancelButtonClass: 'btn btn-cancel ml-2 mt-2',
            confirmButtonText: 'Delete Data'
        }).then(function () {
            $.post('<?php echo base_url('Control/remove_file') ?>', {dataID: dataID, table: table, file_name: file_name, field: field},
                    function (data) {
                        if (data == '1') {
                            swal({
                                title: 'Delete' + txt1 + 'completed',
                                type: 'success',
                                confirmButtonClass: 'btn btn-confirm mt-2'
                            }).then(okay => {
                                if (okay) {
                                    if (txt1 == 'รูปภาพ') {
                                        $("#upload_preview").empty();
                                        $("#upload_preview").addClass("fileupload-exists");
                                        $("#upload_new").removeClass("fileupload-exists");
                                        $("#" + field).val("");
                                        $("#img_old").val("");
                                        $("#" + field + dataID).val("");
                                        $("[data-provides=fileupload]").removeClass("fileupload-exists");
                                        $("[data-provides=fileupload]").addClass("fileupload-new");
                                    }
                                }
                            })
                        } else {
                            swal({
                                title: 'Can not delete' + txt1 + '!',
                                //text: "You won't be able to revert this!",
                                type: 'warning',
                                confirmButtonClass: 'btn btn-confirm mt-2'
                            })
                        }
                    })
        })
    }
//--------------------------------------------------
    $(".fileupload-exists").click(function () {
        $("#upload_preview").empty();
        $("#upload_preview").addClass("fileupload-exists");
        $("#upload_new").removeClass("fileupload-exists");
        $("#img").val("");
        $("[data-provides=fileupload]").removeClass("fileupload-exists");
        $("[data-provides=fileupload]").addClass("fileupload-new");
    });
    //--------------------------------------
    function Addimg() {
        var currentID = $('#currentID2').val();
        var postData = new FormData($("#imgForm")[0]);
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('Control/addimg') ?>',
            processData: false,
            contentType: false,
            data: postData,
            success: function (data, status) {
                $('#currentID').val(data);
                if (status == 'success') {
                    swal({
                        title: 'Successfully saved.',
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    });
                    setTimeout(function () {
                        window.location.href = "<?php echo base_url('Control/AddNewRoom/') ?>" + currentID;
                    }, 2000);
                } else {
                    swal({
                        title: 'Can not be saved.!',
                        type: 'warning',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    });
                }
            }
        });
    }
    //--------------------------- 
    function  loadImages(ProID) {
        $.post('<?php echo base_url('control/loadImg') ?>', {ProID: ProID}, function (data) {
            $('#showImage').empty();
            $('#showImage').html(data);

        });
    }
    //---------------------------------------- 
    function comfirmDelete(DataID, fileType, FileName) {
        var currentID = $('#currentID').val();
        swal({
            title: 'Delete Data ?',
            text: "Please confirm the delete !",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Confirm delete',
            cancelButtonText: 'Cancel',
            confirmButtonClass: 'btn btn-success mt-2',
            cancelButtonClass: 'btn btn-danger ml-2 mt-2',
            buttonsStyling: false
        }).then(function () {
            $.post('<?php echo base_url('control/deletePorductFile1') ?>', {DataID: DataID, fileType: fileType, FileName: FileName}, function (data) {
                console.log(data);
                if (data == '1') {
                    swal({
                        title: 'Deleted !',
                        text: "Data has been successfully deleted.",
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    })
                    setTimeout(function () {
                        window.location.href = "<?php echo base_url('Control/AddNewRoom/') ?>" + currentID;
                    }, 2000);
                } else {
                    swal({
                        title: 'Error',
                        text: "Can not be deleted.",
                        type: 'error',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    })
                }
            });
        }, function (dismiss) {
            if (dismiss === 'cancel') {
                swal({
                    title: 'Cancelled',
                    text: "You have canceled the data.",
                    type: 'error',
                    confirmButtonClass: 'btn btn-confirm mt-2'
                })
            }
        })
    }
    //------------------------------------
       //===============================
        function ADDFacilities(){
             
        $('#Name_a').append('<br><input name="Facilities[]" type="text" class="form-control form-control-sm author3" value="">');
    
        }
        //================================
    function updateFacilities(dataID,FieldName,changeValue){
		//var returnValue = $('#chkOrder'+dataID).val();
		//console.log('returnValue:-'+returnValue)
		 if((changeValue=='')){
							swal({
								title: 'คำเตือน !',
								text: "กรุณาใส่ Facilities",
								type: 'warning',
								confirmButtonClass: 'btn btn-confirm mt-2'
							}) 
			 //$('#order'+dataID).val(returnValue);
			 return false;   
		}else{
			$.post('<?php echo base_url('Control/updateFacilities')?>',{ dataID:dataID , FieldName:FieldName , changeValue:changeValue })
				
		}
	}
             //----------------------
	function deleteFacilities(dataID,table){  
		swal({
           title: 'ต้องการลบข้อมูลนี้?',
           //text: "You won't be able to revert this!",
           type: 'warning',
           showCancelButton: true,
           confirmButtonClass: 'btn btn-confirm mt-2',
           cancelButtonClass: 'btn btn-cancel ml-2 mt-2',
           confirmButtonText: 'ลบข้อมูล'
        }).then(function () {
		   $.post('<?php echo base_url('Control/deleteData')?>' , { dataID : dataID , table : table }, 
			function(data){
				if(data==1){ 
                	swal({
                        title: 'ลบข้อมูลเรียบร้อยแล้ว',
                        //text: "Your file has been deleted",
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    }).then(okay => {
					   if (okay) {
						   location.reload();
					   }
					})
				}else{
					swal({
						title: 'ไม่สามารถลบข้อมูลได้!',
						//text: "You won't be able to revert this!",
						type: 'warning',
						confirmButtonClass: 'btn btn-confirm mt-2'
					})
				}
			})
		})
	}
             //==================================
    function updateOrder(dataID, FieldName, changeValue) {
    var currentID = $('#currentID').val();
        if ((changeValue == '')) {
            swal({
                title: 'Warning !',
                text: "Please enter a Order.",
                type: 'warning',
                confirmButtonClass: 'btn btn-confirm mt-2'
            }) 
        } else {
            $.post('<?php echo base_url('Control/updateorder4') ?>', {dataID: dataID, FieldName: FieldName, changeValue: changeValue});
             setTimeout(function () {
                        window.location.href = "<?php echo base_url('Control/AddNewRoom/') ?>" + currentID;
                    }, 2000);
        }
    }

</script>
