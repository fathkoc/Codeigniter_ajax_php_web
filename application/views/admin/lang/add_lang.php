<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Diller</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
                            </li>
                            <li class="breadcrumb-item active">Dil Ekle</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-content collpase show">
                            <div class="card-body">

                                <form class="form" id="infoAddLang" method="post">
                                    <div class="form-body">


                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Dil Adı</label>
                                                <input type="text"  class="form-control"  name="lang_name">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Dil Kısaltması</label>
                                                <input type="text"  class="form-control"  name="lang_short">
                                            </div>
                                        </div>
                                        <label class="mt-3 mb-2">Sabit Alanları Çeviriniz Lütfen</label>
                                        <div class="row">
                                            <?php
                                                $words = Array
                                                (
                                                    'anasayfa' => '','odalar' => '','kurumsal' => '','toplanti_balo' => '','restoran_bar' => '',
                                                    'galeri' => '', 'iletisim' => '', 'rezervasyon_yap' => '',
                                                    'giris_tarihi' => '', 'cikis_tarihi' => '', 'yetiskin' => '',
                                                    'hakkimizda' => '', 'cocuk' => '', 'konaklama' => '', 'kesfet' => '',
                                                    'bize_ulasin' => '', 'telefon' => '', 'e_posta' => '',
                                                    'adresimiz' => '', 'hizli_menu' => '', 'konumu_gor' => '',
                                                    'sosyal_medyada_biz' => '', 'iletisim_bilgileri' => '','tum_haklari_saklidir' => '',
                                                    'incele' => '','onceki' => '', 'sonraki' => '','gecelik' => '',
                                                    'zorunlu_alanlar' => '','diger_odalar' => '','oda_detaylari' =>'',
                                                    'oda_ozellikleri' => '',  'vizyonumuz' => '',  'misyonumuz' => '',
                                                    'iletisim_bilgilerimiz' => '', 'iletisim_formu' => '', 'telefon_numaramiz' => '',
                                                    'e_posta_adresimiz' => '','adiniz_soyadiniz' => '', 'e_posta_adresiniz' => '',
                                                    'mesajiniz' => '',  'gonder' => '', 'tumunu_gor' => '', 'oda_tipi' => '',
                                                    'aciklama' => '', 'salon_ozellikleri' => '', 'diger_toplanti_odalarimiz' => '',
                                                    'iletisim_formu_slogani' => '', 'telefon_numaraniz' => '' , 'diger_restoranlarımiz' => '',


                                                );
                                                foreach($words as $key => $val) { ?>
                                                    <div class="col-lg-6 mt-2">
                                                        <label><?php echo $key ?></label>
                                                        <input type="text"  class="form-control"  name="<?php echo $key ?>" value="<?php echo $val ?>">
                                                    </div>
                                            <?php } ?>
                                        </div>



                                    </div>

                                    <div class="form-actions right">
                                        <button type="button" class="btn btn-outline-warning mr-1" onclick="window.location.href ='<?php echo site_url('yonetim-paneli/dil-listele'); ?>'">
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
