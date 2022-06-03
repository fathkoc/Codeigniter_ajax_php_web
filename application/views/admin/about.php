<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">

        <div class="content-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Hakkkmızda</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collpase show">
                            <div class="card-body">
                                <form class="form" id="aboutupdate" method="post">
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="la la-file-text"></i>Bilgiler</h4>

                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Metin</label>
                                                    <textarea id="text" name="title" class="ckeditor"><?php echo $about->title;?></textarea>
                                                </div>
                                            </div>
                                            <input type="hidden" name="id" value="<?php echo $about->id ?>">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Metin</label>
                                                    <textarea id="text" name="text" class="ckeditor"><?php echo $about->text;?></textarea>
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