<div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p style="font-size: 11px !important;" class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="mr-auto d-block d-md-inline-block">Copyright &copy; 2021 <a class="text-bold-800 grey darken-2" href="https://veriweb.com.tr/" target="_blank">VERİWEB</a></span></p>
    </footer>
    <!-- END: Footer-->

    <script src="<?php echo site_url('assets/back/app-assets/vendors/js/vendors.min.js?v='.md5(date('Y-m-d-H-i-s'))); ?> "></script>
    <script src="<?php echo site_url('assets/back/app-assets/vendors/js/charts/chart.min.js'); ?> "></script>
    <script src="<?php echo site_url('assets/back/app-assets/vendors/js/charts/apexcharts/apexcharts.min.js'); ?> "></script>

    <script src='<?php echo site_url('assets/back/app-assets/js/cookie.js'); ?>'></script>
    <script src="<?php echo site_url('assets/back/app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/back/app-assets/vendors/js/forms/toggle/switchery.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/back/app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/back/app-assets/js/scripts/forms/switch.js'); ?>"></script>
    <script src="<?php echo site_url('assets/back/app-assets/js/core/app.js'); ?> "></script>
    <script src="<?php echo site_url('assets/back/app-assets/js/core/app-menu.js'); ?> "></script>
    <script src="<?php echo site_url('assets/back/app-assets/vendors/js/editors/summernote/summernote.js'); ?>"></script>
    <script src="<?php echo site_url('assets/back/app-assets/vendors/js/extensions/dropzone.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/back/app-assets/vendors/js/tables/datatable/datatables.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/back/app-assets/js/scripts/tables/datatables/datatable-basic.js'); ?>"></script>
    <script src="<?php echo site_url('assets/back/app-assets/js/jquery-ui.js'); ?> "></script>
    <script src="<?php echo site_url('assets/back/app-assets/vendors/js/animation/jquery.appear.js'); ?>"></script>
    <script src="<?php echo site_url('assets/back/app-assets/js/scripts/animation/animation.js'); ?>"></script>
    <script src="<?php echo site_url('assets/back/ckeditor/ckeditor.js'); ?>"></script>
    <script src="<?php echo site_url('assets/back/app-assets/vendors/js/extensions/transition.js'); ?>"></script>
    <script src="<?php echo site_url('assets/back/app-assets/vendors/js/extensions/zoom.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/back/app-assets/js/scripts/extensions/toastr.js')?>"></script>
    <script src="<?php echo site_url('assets/back/app-assets/vendors/js/extensions/toastr.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/back/jconfirm/jConfirm.min.js?');?>" ></script>
    <script src="<?php echo site_url('assets/back/assets/js/select_2.js');?>" ></script>
    <script src="<?php echo site_url('assets/back/assets/js/home_text.js');?>" ></script>
<script src="<?php echo site_url('assets/back/assets/js/jquery.mask.js');?>" ></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Lck588fAAAAABVtYrX2uSLrZPD2gZng8UOzbCLG"></script>
<script src="<?php echo site_url('assets/front/js/recaptcha.js') ?>"></script>

<?php if(isset($active) && $active == 'product') { ?>
<script src="<?php echo site_url('assets/back/assets/js/product.js?v='.md5(date('Y-m-d-H-i-s')));?>" ></script>
<?php } ?>
<?php if(isset($active) && $active == 'marka') { ?>
<script src="<?php echo site_url('assets/back/assets/js/marka.js?v='.md5(date('Y-m-d-H-i-s')));?>" ></script>
<?php } ?>
<?php if(isset($active) && $active == 'catalog') { ?>
<script src="<?php echo site_url('assets/back/assets/js/catalog.js?v='.md5(date('Y-m-d-H-i-s')));?>" ></script>
<?php } ?>
        <script src="<?php echo site_url('assets/back/assets/js/home_text.js?v='.md5(date('Y-m-d-H-i-s')));?>" ></script>


        <script src="<?php echo site_url('assets/back/assets/js/slider.js?v='.md5(date('Y-m-d-H-i-s')));?>" ></script>

    <?php if(isset($active) && $active == 'site_settings') { ?>
        <script src="<?php echo site_url('assets/back/assets/js/site_settings.js?v='.md5(date('Y-m-d-H-i-s')));?>" ></script>
    <?php } ?>
    <?php if(isset($active) && $active == 'admin') { ?>
        <script src="<?php echo site_url('assets/back/assets/js/admin.js?v='.md5(date('Y-m-d-H-i-s')));?>" ></script>
    <?php } ?>
    <?php if(isset($active) && $active == 'messages') { ?>
        <script src="<?php echo site_url('assets/back/assets/js/messages.js?v='.md5(date('Y-m-d-H-i-s')));?>" ></script>
    <?php } ?>
    <?php if(isset($active) && $active == 'edit_profile') { ?>
        <script src="<?php echo site_url('assets/back/assets/js/edit_profile.js?v='.md5(date('Y-m-d-H-i-s')));?>" ></script>
    <?php } ?>
    <?php if(isset($active) && $active == 'about') { ?>
        <script src="<?php echo site_url('assets/back/assets/js/about.js?v='.md5(date('Y-m-d-H-i-s')));?>" ></script>
    <?php } ?>
    <?php if(isset($active) && $active == 'contact') { ?>
        <script src="<?php echo site_url('assets/back/assets/js/contact.js?v='.md5(date('Y-m-d-H-i-s')));?>" ></script>
    <?php } ?>
    <?php if(isset($active) && $active == 'banner') { ?>
        <script src="<?php echo site_url('assets/back/assets/js/banner.js?v='.md5(date('Y-m-d-H-i-s')));?>" ></script>
    <?php } ?>
    <?php if(isset($active) && $active == 'sub_slider') { ?>
        <script src="<?php echo site_url('assets/back/assets/js/sub_slider.js?v='.md5(date('Y-m-d-H-i-s')));?>" ></script>
        <script>
            Dropzone.autoDiscover = false;
        </script>
    <?php } ?>
    <?php if(isset($active) && $active == 'gallery') { ?>
    <script src="<?php echo site_url('assets/back/assets/js/gallery.js?v='.md5(date('Y-m-d-H-i-s')));?>" ></script>
        <script>
            Dropzone.autoDiscover = false;
        </script>
    <?php } ?>
<script>
    $(document).ready(function() {
        $('.search_select').select2();
    });
</script>
<script src="<?php echo site_url('assets/back/assets/js/index_about.js?v='.md5(date('Y-m-d-H-i-s')));?>" ></script>


</body>
</html>