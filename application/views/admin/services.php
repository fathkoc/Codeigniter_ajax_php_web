<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">

        <div class="content-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Hizmet Alanlarımız</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collpase show">
                            <div class="card-body">
                                <form class="form" id="infoUpdateServices" method="post">
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="la la-file-text"></i>Bilgiler</h4>

                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Başlık</label>
                                                    <input type="text" class="form-control" placeholder="Başlık" name="title" value="<?php echo $services->title;?>">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Metin</label>
                                                    <textarea id="welcome_text" name="text" class="ckeditor"><?php echo $services->text;?></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Site Başlığı</label>
                                                    <input type="text" class="form-control" placeholder="Site Başlığı" name="site_title" value="<?php echo $services->site_title;?>">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Site Açıklaması</label>
                                                    <input type="text" class="form-control" placeholder="Site Açıklaması" name="site_description" value="<?php echo $services->site_description;?>">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <div action="<?php echo site_url('admin/Add_images/add-image2'); ?>" class="dropzone dropzone-area" id="dpz-single-file">
                                                        <div class="dz-message">
						                                    <span class="m-dropzone__msg-desc">
						                                        Bir Adet Banner Resmi Seçiniz.
						                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="mt-2 mr-1 text-center">
                                                    <span >Yüklü Resim</span>
                                                    <img src="<?php echo !empty($services->banner_image) ? site_url($services->banner_image) : '' ; ?>" alt="Holi" class=" w-100 rounded img-fluid float-left mr-2 mb-1" width="400" height="300" data-action="zoom">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <div action="<?php echo site_url('admin/Add_images/add-image'); ?>" class="dropzone dropzone-area" id="dpz-single-file">
                                                        <div class="dz-message">
						                                    <span class="m-dropzone__msg-desc">
						                                        Bir Adet Sayfa Resmi Seçiniz.
						                                    </span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="mt-2 mr-1 text-center">
                                                    <span >Yüklü Resim</span>
                                                    <img src="<?php echo !empty($services->image_path) ? site_url($services->image_path) : '' ; ?>" alt="Holi" class=" w-100 rounded img-fluid float-left mr-2 mb-1" width="400" height="300" data-action="zoom">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions right">
                                        <button type="button" class="btn btn-outline-warning mr-1" onclick="window.location.href ='<?php echo site_url('yonetim-paneli'); ?>'">
                                            <i class="ft-x"></i> Çık
                                        </button>
                                        <button type="submit" class="btn btn-outline-success">
                                            <i class="ft-check"></i> Kaydet
                                        </button>
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