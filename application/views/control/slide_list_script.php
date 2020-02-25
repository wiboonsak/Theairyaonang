<script>
    function comfirmDelete(DataID, NewsTitle) {
        swal({
            title: 'Delete data ?' + NewsTitle,
            text: "Please confirm the delete. !",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Confirm delete',
            cancelButtonText: 'Cancel',
            confirmButtonClass: 'btn btn-success mt-2',
            cancelButtonClass: 'btn btn-danger ml-2 mt-2',
            buttonsStyling: false
        }).then(function () {
            $.post('<?php echo base_url('control/deleteSlide') ?>', {DataID: DataID}, function (data) {
                console.log(data);
                if (data == '1') {
                    swal({
                        title: 'Deleted !',
                        text: "Successfully deleted.",
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    })
                    $('#row' + DataID).remove();
                    setTimeout(function () {
                window.location.href = "<?php echo base_url('control/slide_list') ?>";
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
                    text: "undelete",
                    type: 'error',
                    confirmButtonClass: 'btn btn-confirm mt-2'
                })
            }
        })
    }
    //------------------------------
    function setShow_onWeb(dataID, val2, table) {
        var changeCheckbox = document.querySelector('.js-check-change');
        var x = changeCheckbox.checked;
        if (val2 == '0') {
            var check = '1';
        }
        if (val2 == '1') {
            var check = '0';
        }
        $.post('<?php echo base_url('control/set_ShowOnWeb') ?>', {dataID: dataID, check: check, table: table}, function (data) {
            if (data == 1) {
                $('#ch' + dataID).val(check);
                swal({
                    title: 'Edit data successfully.',
                    type: 'success',
                    confirmButtonClass: 'btn btn-confirm mt-2'
                });
            } else {
                swal({
                    title: 'Can not be edited!',
                    type: 'warning',
                    confirmButtonClass: 'btn btn-confirm mt-2'
                });
            }
        });
    }
    //==================================
    function updateOrder(dataID, FieldName, changeValue) {
        if ((changeValue == '')) {
            swal({
                title: 'warning !',
                text: "Please enter a Order",
                type: 'warning',
                confirmButtonClass: 'btn btn-confirm mt-2'
            })  
        } else {
            $.post('<?php echo base_url('control/updateorderslide') ?>', {dataID: dataID, FieldName: FieldName, changeValue: changeValue});
            setTimeout(function () {
                window.location.href = "<?php echo base_url('control/slide_list') ?>";
            }, 2000);
        }
    }
//------------------------------
    $('#datatable').DataTable({
    "order": false,
    "search" : true
});

</script>