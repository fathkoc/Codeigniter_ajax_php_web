<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Anasayfa</h3>
            </div>
        </div>

        <div class="content-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-content collpase show">
                            <div class="card-body">

                                <form class="form" id="sliderguncel" method="post">
                                    <div class="form-body">
                                        <div class="row mt-2">

                                            <div class="col-md-12">
                                                <label>Slogan</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" id="slogan" aria-describedby="basic-addon3" value="<?php echo $slider->slogan  ?>" name="slogan">
                                                </div>
                                                <input type="hidden" name="id" value="<?php echo $slider->id ?>">
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div action="<?php echo site_url('admin/Homepage/add-image'); ?>" class="dropzone dropzone-area" id="dpz-single-file">
                                                        <div class="dz-message">
						                                    <span class="m-dropzone__msg-desc">
						                                        Bir Adet Resim Seçiniz.
						                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-actions right">
                                            <button type="submit" class="btn btn-outline-success">
                                                <i class="ft-check"></i> Kaydet
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>