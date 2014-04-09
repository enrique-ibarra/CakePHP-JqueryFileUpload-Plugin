<form id="fileupload" action="<?php echo isset($action) ? $action : '/'; ?>" method="POST" enctype="multipart/form-data">
    <!-- Redirect browsers with JavaScript disabled to the origin page -->
    <noscript>
        <?php echo __('Enable javascript...'); ?>
    </noscript>
    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
    <div class="row-fluid fileupload-buttonbar">
        <div class="span7">
            <!-- The fileinput-button span is used to style the file input field as button -->
            <span class="btn btn-success btn-xs fileinput-button">
                <i class="fa fa-plus"></i>
                <span><?php echo __('Add file') ?></span>
                <input type="file" data-url="" name="files[]" multiple>
            </span>
            <button type="submit" class="btn btn-xs btn-primary start">
                <i class="fa fa-upload"></i>
                <span><?php echo __('Start Upload') ?></span>
            </button>
            <button type="reset" class="btn btn-xs btn-warning cancel">
                <i class="fa fa-ban"></i>
                <span><?php echo __('Cancel Upload') ?></span>
            </button>
            <button type="button" class="btn btn-xs btn-danger delete">
                <i class="fa fa-trash-o"></i>
                <span><?php echo __('Remove') ?></span>
            </button>
            <label class="checkbox">
                <input type="checkbox" class="toggle"> <?php echo __('Choose file'); ?>
            </label>
        </div>
        <!-- The global progress information -->
        <div class="span5 fileupload-progress fade">
            <!-- The global progress bar -->
            <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                <div class="bar" style="width:0%;"></div>
            </div>
            <!-- The extended global progress information -->
            <div class="progress-extended">&nbsp;</div>
        </div>
    </div>
    <!-- The loading indicator is shown during file processing -->
    <div class="fileupload-loading"></div>
    <br>
    <!-- The table listing the files available for upload/download -->
    <table role="presentation" class="table table-striped"><tbody class="files" data-toggle="modal-gallery" data-target="#modal-gallery"></tbody></table>
</form>