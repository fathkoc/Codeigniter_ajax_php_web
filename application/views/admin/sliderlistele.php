<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">ÜRÜN </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Anasayfa</a>
                            </li>
                            <li class="breadcrumb-item active">ÜRÜN Listele</li>
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
                                        <table class="table table-striped table-bordered zero-configuration-slider">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 35%;">İSİM</th>
                                                <th style="width: 15%;">Sil</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <?php if ($sliders){ foreach ($sliders as $value){ ?>
                                                <tr id="delete<?php echo $value->id ?>">
                                                    <td><?php echo $value->id ?></td>
                                                    <td><?php echo $value->slogan ?></td>
                                                    <td>
                                                        <button class="w-100 btn btn-danger buttonAnimation slidersil"
                                                                data-id="<?php echo $value->id ?>"
                                                                data-animation="bounce"><i class=" la la-trash"></i></button>
                                                    </td>
                                                </tr>
                                            <?php }} ?>
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