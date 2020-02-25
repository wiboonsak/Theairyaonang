<!-- DataTables -->
<link href="<?php echo base_url('asset/control/plugins/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('asset/control/plugins/datatables/buttons.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('asset/control/plugins/datatables/select.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
<div class="wrapper">
    <div class="container-fluid">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <br>
                <p style="font-size: 24px">LIST ALL SLIDE</p>
                <hr>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card m-b-30 card-body">
                        <h5 class="card-title">
                            <div class="progress mb-0" style="display: none">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                            </div>
                        </h5>
                        <div class="table-responsive" id="showData">
                            <table id="datatable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th width="10" style="text-align: center">#</th>
                                        <th>Image</th>
                                        <th width="100" style="text-align: center">Order</th>
                                        <th style="text-align: center">Show on web</th>
                                        <th width="5" style="text-align: center">Edit</th>
                                        <th width="5" style="text-align: center">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $n = 1;
                                    foreach ($SlideList->result() AS $data) { ?>	
                                        <tr id="row<?php echo $data->id ?>">
                                            <th scope="row"><?php echo $n ?></th>
                                            <td><img src="<?php echo base_url('uploadfile/banner/') . $data->first_pic ?>" class="img-thumbnail" style="width:280px;height: 180px"></td>
                                            <td><input style="text-align:center;" id="order<?php echo $data->id ?>" type="text" class="form-control form-control-sm OrderCate" value="<?php echo $data->sort_number ?>" onChange="updateOrder('<?php echo $data->id ?>', 'sort_number', this.value)">
                                                <input type="hidden" id="chkOrder<?php echo $data->id ?>" value="<?php echo $data->sort_number ?>"></td>
                                            <td align="center">
                                                <label>
                                                    <input id="ch<?php echo $data->id ?>"  type="checkbox" class="js-switch js-check-change" onClick="setShow_onWeb('<?php echo $data->id ?>', this.value, 'tbl_img_slide')" value="<?php echo $data->status ?>"  <?php
                                                    if ($data->status == '1') {
                                                        echo 'checked';
                                                    }
                                                    ?> data-plugin="switchery" data-color="#007bff" data-size="small"  /></label>
                                            </td>
                                            <td><button type="button" class="btn btn-success btn-sm" onClick="window.location.href = '<?php echo base_url('control/slide_add/' . $data->id) ?>'"><i class="icon-pencil"></i></button></td>
                                            <td><button type="button" class="btn btn-danger btn-sm" onClick="comfirmDelete('<?php echo $data->id ?>', '<?php echo $data->desc_en ?>')"><i class="icon-trash"></i></button></td>
                                        </tr>
    <?php $n++;
} ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div> <!-- end container -->
