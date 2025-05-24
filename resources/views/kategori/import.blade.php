<div class="modal fade" id="import-form" tabindex="-1" role="dialog" aria-labelledby="import-form">
    <div class="modal-dialog modal-lg" role="document">
        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            @method('post')

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="file_excel" class="col-lg-3 control-label">File Excel</label>
                        <div class="col-lg-6">
                            <input type="file" name="file_excel" id="file_excel" class="form-control" accept=".xlsx,.xls" required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-offset-3 col-lg-6">
                            <a href="/path/to/template.xlsx" class="btn btn-sm btn-info" download>
                                <i class="fa fa-download"></i> Download Template
                            </a>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-flat btn-primary"><i class="fa fa-save"></i> Import</button>
                    <button type="button" class="btn btn-sm btn-flat btn-warning" data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i> Batal</button>
                </div>
            </div>
        </form>
    </div>
</div>