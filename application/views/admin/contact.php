<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">İletişim Bilgileri</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
                            </li>
                            <li class="breadcrumb-item active">İletişim Bilgileri</li>
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


                                <form class="form" id="infoUpdateContact" method="post">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Telefon</label>
                                                    <input type="text" id="phone" class="form-control" placeholder="Telefon" name="phone" value="<?php echo !empty($contact) ? $contact->phone : "";?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Sabit Hat Son 2 Hane</label>
                                                    <input type="text" id="phone" class="form-control" placeholder="Telefon" name="phone2" value="<?php echo !empty($contact) ? $contact->phone2 : "";?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Sabit Hat Son 2 Hane</label>
                                                    <input type="text" id="phone" class="form-control" placeholder="Telefon" name="phone3" value="<?php echo !empty($contact) ? $contact->phone3 : "";?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Telefon4</label>
                                                    <input type="text" id="phone" class="form-control" placeholder="Telefon" name="phone4" value="<?php echo !empty($contact) ? $contact->phone4 : "";?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Telefon5</label>
                                                    <input type="text" id="phone" class="form-control" placeholder="Telefon" name="phone6" value="<?php echo !empty($contact) ? $contact->phone6 : "";?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Fax</label>
                                                    <input type="text" id="phone" class="form-control" placeholder="Telefon" name="phone5" value="<?php echo !empty($contact) ? $contact->phone5 : "";?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Mail</label>
                                                    <input type="text" id="mail" class="form-control" placeholder="Mail" name="e_mail" value="<?php echo !empty($contact) ? $contact->e_mail : "";?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label>Adres</label>
                                                <textarea id="address" class="form-control" rows="4" name="address"><?php echo !empty($contact) ? $contact->address : "";?></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Facebook</label>
                                                    <input type="text" id="facebook" class="form-control" placeholder="Facebook" name="facebook" value="<?php echo !empty($contact) ? $contact->facebook : "";?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Linkedin</label>
                                                    <input type="text" id="linkedin" class="form-control" placeholder="Linkedin" name="linkedin" value="<?php echo !empty($contact) ? $contact->linkedin : "";?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Twitter</label>
                                                    <input type="text" id="youtube" class="form-control" placeholder="Twitter" name="twitter" value="<?php echo !empty($contact) ? $contact->twitter : "";?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Instagram</label>
                                                    <input type="text" id="instagram" class="form-control" placeholder="Instagram" name="instagram" value="<?php echo !empty($contact) ? $contact->instagram : "";?>">
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