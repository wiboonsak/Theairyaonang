<?php
if (!isset($currentID)) {
    $currentID = '';
}
if (!isset($desc_en)) {
    $desc_en = '';
}
if (!isset($first_pic)) {
    $first_pic = '';
}
?> 
<div class="wrapper">
    <div class="container-fluid">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <br>
<!--                <p style="font-size: 24px">Slide background image firstpage</p>-->
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
                        <form enctype="multipart/form-data" id="slideForm" name="slideForm">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Link :	</label>
                                <div class="col-sm-6">
                                    <input type="text" id="desc_en" name="desc_en" class="form-control form-control-sm" value="<?php echo $desc_en ?>" >
                                </div>
                                <div class="col-sm-4">	</div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">image file</label>
                                <div class="col-sm-6">
                                    <input   type="file" id="img" name="img[]"  /> 
                                    <br>
                                    <a style="color:red">Image size width 1920 pixel height 1080 pixel . jpg png support</a>
                                </div>
                                <div class="col-sm-4">	</div>
                            </div>	
                            <div class="form-group row" >
                                <div class="col-sm-6" style="text-align: center">
                                    <button type="button" class="btn btn-success btn-sm" onClick="AddSlide()">Add/Edit Data</button>
                                    <input type="hidden" name="currentID" id="currentID" value="<?php echo $currentID ?>">
                                    <input type="hidden" name="img_old" id="img_old" value="<?php echo $first_pic ?>">
                                </div>
                            </div>
                        </form>
                        <div id="showImage" style="margin-top: 5px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->

</div> <!-- end container -->
