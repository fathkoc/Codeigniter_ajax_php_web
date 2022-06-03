

  

    <div class="site-blocks-cover overlay" style="background-image: url(<?php echo webp_support(site_url($slider->image_path)) ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            

            <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold"><?php echo $slider->slogan ?></h1>
          </div>
        </div>
      </div>
    </div>  



    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="mb-0 text-primary">KARAMAN VİNÇ & KONTEYNER</h2>

          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary fas fa-truck-moving"></span></div>
              <div>
                <h3>Vinç Hizmetleri</h3>
                <p>Karaman Vinç Kiralama olarak sorun değil çözüm sunuyoruz.</p>
              </div>
            </div>
          </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary fas fa-landmark"></span></div>
                    <div>
                        <h3>Konteyner Hizmetleri</h3>
                        <p>Prefabrik Yaşam Alanı İstediğiniz Yere Taşıyoruz.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary fas fa-truck-loading"></span></div>
                    <div>
                        <h3>VİNÇ KİRALAMA HİZMETLERİ</h3>
                        <p>Deneyimli kadromuz ve son bakımları yapılmış araçlarımız ile sizi bekliyoruz.</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  

    <div class="site-section block-13">
      <!-- <div class="container"></div> -->


      <div class="owl-carousel nonloop-block-13 bakcaz">

          <?php if (!empty($galery)){
              foreach ($galery as $value){
          ?>
          <div>
          <a class="unit-1 text-center">
            <img src="<?php echo webp_support(site_url($value->image_path)) ?>" alt="Image" class="img-fluid">
            <div class="unit-1-text">
            <?php if (!empty($galery->slogan)){  ?>  <h3 class="unit-1-heading"><?php echo $value->slogan ?></h3> <?php } ?>
            </div>
          </a>
        </div>
          <?php }} ?>
      </div>
    </div>


    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">HİZMETLER</h2>

          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary fas fa-shield-alt"></span></div>
              <div>
                <h3>GÜVENLİ HİZMET</h3>
                <p>Karaman Vinç Kiralama Hizmetleri
                    olarak güvenli hizmet sunuyoruz.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary fas fa-phone"></span></div>
              <div>
                <h3>Destek</h3>
                <p>Karaman Vinç Kiralama Hizmetleri
                    olarak müşterilerimizin her zaman yanındayız.</p>

              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary fas fa-hourglass-end"></span></div>
              <div>
                <h3>Zaman</h3>
                <p>Karaman Vinç Kiralama Hizmetleri
                    olarak zamanında teslimatı önemsiyoruz.</p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
