<script>
    //-----------------------------------
    function AddSlide() {  // news_title  news_detail
        var img = $('#img').val();
        var img_old = $('#img_old').val();
        if ((img == '') && (img_old == '')) {
            swal({
                title: 'warning!',
                text: "Please enter a image",
                type: 'warning',
                confirmButtonClass: 'btn btn-confirm mt-2'
            })
        } else {
            console.log('........................' + img_old);
            var postData = new FormData($("#slideForm")[0]);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('control/addSlide') ?>',
                processData: false,
                contentType: false,
                data: postData,
                xhr: function () {
                    var xhr = $.ajaxSettings.xhr();
                    if (xhr.upload) {
                        $(".progress").show();
                        xhr.upload.addEventListener('progress', function (event) {
                            var percent = 0;
                            var position = event.loaded || event.position;
                            var total = event.total;
                            if (event.lengthComputable) {
                                percent = Math.ceil(position / total * 100);
                            }
                            $(".progress-bar").css("width", +percent + "%");
                            $('#progress_bar_id' + " .status").text(percent + "%");
                        }, true);
                    }
                    return xhr;
                },
                success: function (data, status) {
                    console.log(data);
                    $('#currentID').val(data);
                    console.log('data->' + data + '  status->' + status);
                    if (status == 'success') {
                        loadImages(data);
                        $.toast({
                            heading: 'Successfully saved.',
                            text: '',
                            position: 'top-right',
                            loaderBg: '#5ba035',
                            icon: 'success',
                            hideAfter: 3000,
                            stack: 1
                        });
                        setTimeout(function () {
                            window.location.href = "<?php echo base_url('Control/slide_add/') ?>" + data;
                        }, 2000);
                    } else {
                        $.toast({
                            heading: ' Can not be edited.',
                            text: '',
                            position: 'top-right',
                            loaderBg: '#FF5B5E',
                            icon: 'warning',
                            hideAfter: 3000,
                            stack: 1
                        });
                    }

                }
            });
        }
    }
    //--------------------------- 
    function  loadImages(currentID) {
        $.post('<?php echo base_url('control/loadSlideImages') ?>', {ProID: currentID}, function (data) {
            $('#showImage').empty();
            $('#showImage').html(data);
        })
    }
    //--------------------------
    $(document).ready(function () {
        var currentID = $('#currentID').val();
        loadImages(currentID);
    })
</script>


