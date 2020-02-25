<!-- DataTables -->
<link href="<?php echo base_url('asset/control/plugins/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('asset/control/plugins/datatables/buttons.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('asset/control/plugins/datatables/select.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
<div class="wrapper">
    <div class="container-fluid">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <br>
                <p style="font-size: 24px">List all rooms</p>
                <hr>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card m-b-30 card-body">
                        <h5 class="card-title">
                            <div class="progress mb-0" style="display: none">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                            </div>
                        </h5> 										<div id="showData">
                            <div class="pull-right">
                                <button type="button" class="btn btn-success btn-sm" onClick="window.location.href = '<?php echo base_url('control/AddNewRoom') ?>'"><i class="fa fa-plus"></i>Add New Room</button>
                            </div>
                            <table id="datatable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Room Type</th>
                                        <th style="text-align:center;">Order</th>
                                        <th style="text-align:center;">Show on web</th>
                                        <th style="text-align:center;" width="100">Room detail</th>
                                        <th style="text-align:center;" width="100">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($roomData->result() AS $data) { ?>	
                                        <tr id="row">
                                            <td><?php echo $data->room_type_en ?></td>
                                            <td width="100"><input style="text-align:center;" id="order<?php echo $data->id ?>" type="text" class="form-control form-control-sm OrderCate" value="<?php echo $data->sort_number ?>" onChange="updateOrder('<?php echo $data->id ?>', 'sort_number', this.value)">
                                                <input type="hidden" id="chkOrder<?php echo $data->id ?>" value="<?php echo $data->sort_number ?>"></td>
                                            <td align="center">
                                                <label>
                                                    <input id="ch<?php echo $data->id ?>"  type="checkbox" class="js-switch js-check-change" onClick="setShow_onWeb('<?php echo $data->id ?>', this.value, 'tbl_room_data')" value="<?php echo $data->room_status ?>"  <?php
                                                    if ($data->room_status == '1') {
                                                        echo 'checked';
                                                    }
                                                    ?> data-plugin="switchery" data-color="#007bff" data-size="small"  /></label>
                                            </td>
                                            <td style="text-align:center;" ><button type="button" class="btn btn-success btn-sm" onClick="window.location.href = '<?php echo base_url('control/AddNewRoom/' . $data->id) ?>'"><i class="icon-pencil"></i></button></td>
                                            <td style="text-align:center;"><button type="button" class="btn btn-danger btn-sm" onClick="delete_data('<?php echo $data->id ?>', 'tbl_room_data')"><i class="icon-trash"></i></button></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </div>
</div>