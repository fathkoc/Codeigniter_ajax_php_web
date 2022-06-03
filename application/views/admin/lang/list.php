<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Diller </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
                            </li>
                            <li class="breadcrumb-item active">Diller'i Listele</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">

            <!-- Zero configuration table -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 35%;">Dil Adı</th>
                                                <th style="width: 15%;">Dil Kısaltması</th>
                                                <th style="width: 15%;">Sitede Göster</th>
                                                <th style="width: 15%;">Düzenle</th>
                                                <th style="width: 15%;">Sil</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(!empty($langs)) { ?>
                                                <?php foreach ($langs as $key => $val) { ?>
                                                    <tr id="delete<?php echo $val->id; ?>">
                                                        <td><?php echo $val->id; ?></td>
                                                        <td><?php echo $val->lang_name; ?></td>
                                                        <td>
                                                            <?php echo $val->lang_short; ?>
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" class="switch lang-status"
                                                                   data-id="<?php echo $val->id; ?>"
                                                                   id="switch1" <?php echo $val->status == 1 ? "checked " :""; ?> />
                                                        </td>
                                                        <td>
                                                            <button onclick="window.location.href='<?php echo site_url('yonetim-paneli/dil-duzenle/'.$val->id); ?>'" class="w-100 btn btn-warning buttonAnimation" data-animation="pulse"><i class="la la-refresh"></i></button>
                                                        </td>
                                                        <td>
                                                            <button class="w-100 btn btn-danger buttonAnimation delete-lang"
                                                                    data-id="<?php echo $val->id; ?>"
                                                                    data-animation="bounce"><i class=" la la-trash"></i></button>
                                                        </td>
                                                    </tr>
                                                    <div class="modal fade text-left" id="default<?php echo $val->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                        <div class=" modal-lg modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <p><?php echo $val->title; ?></p>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <?php echo $val->description?>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Kapat</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Zero configuration table -->
        </div>
    </div>
</div>