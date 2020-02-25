<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                Copyrights 2018. <span>THEAIRYAONANG</span> | All rights reserved. Developed by <a href="http://www.me-fi.com" target="_blank">ME-FI.com</a>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
<!-- Modal -->
<!-- sample modal content -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title titleA" id="myModalLabel">Modal Heading</h4>
            </div>
            <div class="modal-body bodyA"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div id="modal_Large" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>                                           
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- sample modal content -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- jQuery  -->
<script src="<?php echo base_url('asset/control/assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('asset/control/assets/js/popper.min.js') ?>"></script>
<script src="<?php echo base_url('asset/control/assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('asset/control/assets/js/waves.js') ?>"></script>
<script src="<?php echo base_url('asset/control/assets/js/jquery.slimscroll.js') ?>"></script>
<!-- Modal-Effect -->
<script src="<?php echo base_url('asset/control/plugins/custombox/js/custombox.min.js') ?>"></script>
<script src="<?php echo base_url('asset/control/plugins/custombox/js/legacy.min.js') ?>"></script>
<!-- Bootstrap fileupload js -->
<script src="<?php echo base_url('asset/control/plugins/bootstrap-fileupload/bootstrap-fileupload.js') ?>"></script>
<script src="<?php echo base_url('asset/control/plugins/tinymce/tinymce.min.js') ?>"></script>
<!-- Dropzone js -->
<script src="<?php echo base_url('asset/control/plugins/dropzone/dropzone.js') ?>"></script>
<script src="<?php echo base_url('asset/control/plugins/switchery/switchery.min.js') ?>"></script>
<!-- Toastr js -->
<script src="<?php echo base_url('asset/control/plugins/jquery-toastr/jquery.toast.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('asset/control/assets/pages/jquery.toastr.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('asset/control/plugins/summernote/summernote-bs4.min.js') ?>"></script>
<!-- Sweet Alert Js  -->
<script src="<?php echo base_url('asset/control/plugins/sweet-alert/sweetalert2.min.js') ?>"></script>
<script src="<?php echo base_url('asset/control/assets/pages/jquery.sweet-alert.init.js') ?>"></script>
<!-- Required datatable js -->
<script src="<?php echo base_url('asset/control/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('asset/control/plugins/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<!-- App js -->
<script src="<?php echo base_url('asset/control/assets/js/jquery.core.js') ?>"></script>
<script src="<?php echo base_url('asset/control/assets/js/jquery.app.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        tinymce.init({
            selector: "textarea.ex",
            theme: "modern",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
            style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ]
        });
    });
    /////////////////////////////////	
    // Default Datatable
    $('#table2').DataTable();
    //modify buttons style
    function cangePassForm() {
        $.post('<?php echo base_url('control/cangePassForm') ?>', {}, function (data) {
            $('#myModal .modal-body').empty();
            $('#myModalLabel').text('Change Password');
            $('.bodyA').html(data);
            $('#myModal').modal('show');
        })
    }
    //-----------------------newpass cnewpass
    function DoChangePass() {
        var newpass = $('#newpass').val();
        var cnewpass = $('#cnewpass').val();
        if (newpass == '') {
            $('#ShowError').html('<span class="text-danger">Please enter a new password.</span>');
            return false;
        } else if (cnewpass == '') {
            $('#ShowError').html('<span class="text-danger">Please confirm the new password.</span>');
            return false;
        } else if (newpass != cnewpass) {
            $('#ShowError').html('<span class="text-danger">Password and password verification must match.</span>');
            return false;
        } else {
            $('#ShowError').empty();
            $.post('<?php echo base_url('control/doChangePass') ?>', {newpass: newpass}, function (data) {
                if (data == 1) {
                    alert('Change password successfully.');
                    $('#myModal').modal('hide');
                } else {
                    $('#ShowError').html('<span class="text-danger">Error Password can not be changed.</span>');
                }
            })
        }
    }
</script>
