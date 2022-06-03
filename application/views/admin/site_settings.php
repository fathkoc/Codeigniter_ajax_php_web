<?php ?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Site Ayarları</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
                            </li>
                            <li class="breadcrumb-item active">Site Ayarları</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- account setting page start -->
            <section id="page-account-settings">
                <div class="row">
                    <!-- left menu section -->
                    <div class="col-md-3 mb-2 mb-md-0">
                        <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                            <?php if(!empty($site_settings)) { ?>
                                <?php foreach($site_settings as $key => $val) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex <?php echo $key == 0 ? 'active' : '' ?>" id="a<?php echo $val->page_name ?>" data-toggle="pill"
                                           href="#<?php echo $val->page_name ?>" aria-expanded="true">
                                            <?php echo $val->seen_name ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- right content section -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="tab-content">

                                        <?php if(!empty($site_settings)) { ?>
                                            <?php foreach($site_settings as $key => $val) { ?>
                                                <div class="tab-pane <?php echo $key == 0 ? 'active' : 'fade' ?> " id="<?php echo $val->page_name ?>" role="tabpanel"
                                                     aria-labelledby="account-pill-password" aria-expanded="false">
                                                    <form id="infoUpdateSiteSettings" action="post">
                                                        <input type="hidden" name="id" value="<?php echo $val->id;?>">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Site Başlığı</label>
                                                                    <input type="text"
                                                                           id="title"
                                                                           class="form-control"
                                                                           placeholder="Başlık"
                                                                           name="title"
                                                                           value="<?php echo $val->title;?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mb-4">
                                                                <label>Site Açıklaması</label>
                                                                <textarea
                                                                        id="description"
                                                                        class="form-control"
                                                                        name="description"><?php echo $val->description;?></textarea>
                                                            </div>
                                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                <button type="submit" class="btn btn-info mr-sm-1 mb-1 mb-sm-0">
                                                                    Değişiklikleri Kaydet
                                                                </button>
                                                                <button type="reset" class="btn btn-danger" onclick="location.href='<?php echo site_url('yonetim-paneli')?>'">Çık</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- account setting page end -->
        </div>
    </div>
</div>
<!-- END: Content-->