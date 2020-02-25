<script>
    function comfirmDelete(DataID, cateName) {
        swal({
            title: 'Deleta Data ?' + cateName,
            text: "Please confirm the delete !",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Confirm delete',
            cancelButtonText: 'Cancel',
            confirmButtonClass: 'btn btn-success mt-2',
            cancelButtonClass: 'btn btn-danger ml-2 mt-2',
            buttonsStyling: false
        }).then(function () {
            $.post('<?php echo base_url('control/deleteProduct') ?>', {DataID: DataID}, function (data) {
                console.log(data);
                if (data == '1') {
                    swal({
                        title: 'Deleted !',
                        text: "Successfully deleted.",
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    })
                    $('#row' + DataID).remove();
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
            // dismiss can be 'cancel', 'overlay',
            // 'close', and 'timer'
            if (dismiss === 'cancel') {
                swal({
                    title: 'Cancelled',
                    text: "You have cancel the data.",
                    type: 'error',
                    confirmButtonClass: 'btn btn-confirm mt-2'
                })
            }
        })
    }

    //--------------------------------
    $('#datatable').DataTable({
    "order": false,
    "search" : true
});
    
    //$(document).ready(function () {
    //})
    //==================================
    function updateOrder(dataID, FieldName, changeValue) {
        if ((changeValue == '')) {
            swal({
                title: 'Warning !',
                text: "Please enter a Order.",
                type: 'warning',
                confirmButtonClass: 'btn btn-confirm mt-2'
            }) 
        } else {
            $.post('<?php echo base_url('Control/updateorder') ?>', {dataID: dataID, FieldName: FieldName, changeValue: changeValue});
            setTimeout(function () {
                window.location.href = "<?php echo base_url('control/listRoom') ?>";
            }, 2000);
        }
    }
    //----------------------
    function setShow_onWeb(dataID, val2, table) {
        var changeCheckbox = document.querySelector('.js-check-change');
        var x = changeCheckbox.checked;
        if (val2 == '0') {
            var check = '1';
        }
        if (val2 == '1') {
            var check = '0';
        }
        $.post('<?php echo base_url('Control/set_ShowOnWeb') ?>', {dataID: dataID, check: check, table: table}, function (data) {
            if (data == 1) {
                $('#ch' + dataID).val(check);
                swal({
                    title: 'Edit data successfully.',
                    //text: 'You clicked the button!',
                    type: 'success',
                    confirmButtonClass: 'btn btn-confirm mt-2'
                });
            } else {
                swal({
                    title: 'Can not be edited.!',
                    //text: "You won't be able to revert this!",
                    type: 'warning',
                    confirmButtonClass: 'btn btn-confirm mt-2'
                });
            }
        });
    }
    //----------------------
    function delete_data(dataID, table) {
        swal({
            title: 'Delete Data?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonClass: 'btn btn-confirm mt-2',
            cancelButtonClass: 'btn btn-cancel ml-2 mt-2',
            confirmButtonText: 'Delete data'
        }).then(function () {
            $.post('<?php echo base_url('Control/deleteroom') ?>', {dataID: dataID, table: table},
                    function (data) {
                        if (data == 1) {
                            swal({
                                title: 'Successfully deleted.',
                                //text: "Your file has been deleted",
                                type: 'success',
                                confirmButtonClass: 'btn btn-confirm mt-2'
                            }).then(okay => {
                                if (okay) {
                                    location.reload();
                                }
                            });
                        } else {
                            swal({
                                title: 'Can not be deleted!',
                                //text: "You won't be able to revert this!",
                                type: 'warning',
                                confirmButtonClass: 'btn btn-confirm mt-2'
                            });
                        }
                    });
        });
    }

</script>