

  

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?php echo site_url($slider->image_path) ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">GALERİ</h1>
            <p class="breadcrumb-custom"><a href="<?php echo site_url('') ?>">ANASAYFA</a> <span class="mx-2">&gt;</span> <span>GALERİ</span></p>
          </div>
        </div>
      </div>
    </div>  

    
  
    <div class="site-section">
      <div class="container">
        <div class="row">
            <?php foreach ($galery as $value){ ?>
          <div class="col-md-6 col-lg-4 mb-4 bakcaz">
            <a  class="unit-1 text-center">
              <img src="<?php echo site_url($value->image_path) ?>" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading"><?php echo $value->slogan ?></h3>

              </div>
            </a>
          </div>
            <?php } ?>

          
        </div>
      </div>
    </div>


