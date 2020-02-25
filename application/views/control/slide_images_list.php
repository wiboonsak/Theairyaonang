<table class="table table-bordered table-hover">
    <?php foreach ($slideImg->result() AS $data) { ?>
        <tr id="Dimg">
            <td><span class="text-danger"><img src="<?php echo base_url('uploadfile/banner/') . $data->first_pic ?>" class="img-thumbnail" style="width:300px;"></span></td>

        </tr>
    <?php } ?>
</table>

