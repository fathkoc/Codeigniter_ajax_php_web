
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?php echo site_url($slider->image_path) ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">İLETİŞİM</h1>
            <p class="breadcrumb-custom"><a href="<?php echo site_url('') ?>">ANASAYFA</a> <span class="mx-2">&gt;</span> <span>İLETİŞİM</span></p>
          </div>
        </div>
      </div>
    </div>  

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form method="post" action="">
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">AD</label>
                  <input type="text"  name="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">SOY AD</label>
                  <input type="text"  name="lname" class="form-control">
                </div>
              </div>
                <input type="hidden" name="<?php echo $csrf['name'];?>" value="<?php echo $csrf['hash'];?>"/>
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email"  name="e-mail" class="form-control">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" for="subject">BAŞLIK</label>
                  <input type="subject" name="subject"  class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">MESAJ</label>
                  <textarea name="message"  cols="30" rows="7" class="form-control" placeholder="MESAJINIZI GİRİNİZ"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="MESAJ GÖNDER" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">Toybelen, 55090 İlkadım/Samsun</p>

              <p class="mb-0 font-weight-bold">Telefon</p>
              <p class="mb-4"><a href="tel:0544 524 47 61">0544 524 47 61</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="mailto:samsunkaramanvinc@hotmail.com">samsunkaramanvinc@hotmail.com</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">AÇIKLAMA</h3>
              <p>KARAMAN VİNÇ KİRALIK İŞ MAKİNELERİ SEPETLİ VİNÇ HER TONAJTA VİNÇLER VE KONTEYNERLAR HİZMET VERMEKTEYİZ.</p>

            </div>

          </div>
        </div>
      </div>
    </div>
