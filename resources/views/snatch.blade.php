@extends('layouts.Template')

@section('content')

<div id="content-body">
            <div  class="container">
                <div class="row row-offcanvas row-offcanvas-left">
                    <hr />
                    <div class="web_potrait">
                        <p class="hidden-md-up sideBtn navbar-inverse">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </p>
                        
                        <div class="col col-md-3 col-xs-12 sidebar-offcanvas" id="sidebar">
                            <div class="side-section">
                                <div class="side-header">latest issue</div>
                                <ul class="side-list">
                                    <li><a href="#" class="active">Travellust</a></li>
                                    <li><a href="#" class="">Gastronome</a></li>
                                    <li><a href="#" class="">Pleasure</a></li>
                                    <li><a href="#" class="">Healhty Life</a></li>
                                    <li><a href="#" class="">Cutting Edge</a></li>
                                    <li><a href="#" class="">Auto Lux</a></li>
                                    <li><a href="#" class="">Feast</a></li>
                                </ul>
                            </div>
                            <div class="side-section">
                                <div class="side-header">previous issue</div>
                                <ul class="side-list">
                                    <li><a href="#" class="">Vol.09 | october 2017</a></li>
                                    <li><a href="#" class="">Vol.08 | september 2017</a></li>
                                    <li><a href="#" class="">Vol.07 | august 2017</a></li>
                                    <li><a href="#" class="">Vol.06 | july 2017</a></li>
                                    <li><a href="#" class="">Vol.05 | june 2017</a></li>
                                    <li><a href="#" class="">Vol.04 | may 2017</a></li>
                                    <li><a href="#" class="">Vol.03 | april 2017</a></li>
                                    <li><a href="#" class="">Vol.06 | july 2017</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div id="web_snatch" class="col col-md-9 col-xs-12">
                            <div class="slider-container"> 
                               <!--Main Slider Start--> 
                               <div id="slider" class="slider owl-carousel"> 
                                  <!--Repeat the below item to add more items in slider--> 
                                  <div class="item"> 
                                     <div class="content"> 
                                        <img src='assets/images/snatch-2.jpg' />
                                     </div> 
                                  </div> 
                                   <div class="item"> 
                                     <div class="content"> 
                                        <img src='assets/images/snatch-3.jpg' />
                                     </div> 
                                  </div> 
                                   <div class="item"> 
                                     <div class="content"> 
                                        <img src='assets/images/snatch-4.jpg' />
                                     </div> 
                                  </div> 
                                   <div class="item"> 
                                     <div class="content"> 
                                        <img src='assets/images/snatch-5.jpg' />
                                     </div> 
                                  </div> 
                               </div> 
                               <!--Main Slider End-->

                               <!--Navigation Links For the Main Items--> 
                               <div class="slider-controls"> 
                                  <a class="slider-left" href="javascript:;"><span><i class="fa fa-2x fa-chevron-left"></i></span></a> 
                                  <a class="slider-right" href="javascript:;"><span><i class="fa fa-2x fa-chevron-right"></i></span></a> 
                               </div> 
                            </div> 
                            <!--Thumbnail slider container--> 
                            <div class="thumbnail-slider-container"> 
                               <!--Thumbnail Slider Start--> 
                               <div id="thumbnailSlider" class="thumbnail-slider owl-carousel"> 
                                  <div class="item"> 
                                     <div class="content"> 
                                        <img src="assets/images/snatch-2.jpg" class="img-responsive"> 
                                     </div> 
                                  </div> 
                                   <div class="item"> 
                                     <div class="content"> 
                                        <img src="assets/images/snatch-3.jpg" class="img-responsive"> 
                                     </div> 
                                  </div> 
                                  <div class="item"> 
                                     <div class="content"> 
                                        <img src="assets/images/snatch-4.jpg" class="img-responsive"> 
                                     </div> 
                                  </div> 
                                   <div class="item"> 
                                     <div class="content"> 
                                        <img src="assets/images/snatch-5.jpg" class="img-responsive"> 
                                     </div> 
                                  </div> 
                               </div> 
                               <!--Thumbnail Slider End--> 
                            </div>

                            <div class="web-lifestyle2">
                                <h1>ART STAGE JAKARTA 2017</h1>
                                <span>24.07.2017</span>
                                <p>Dibentuk pada tahun 2010 oleh sang President, Lorenzo Rudolf, Art Stage yang bermula di Singapura ini semakin berkembang dari tahun ke tahun. Berfokus pada Asian art yang bersifat kontemporer, Art Stage Singapore kemudian berhasil membawa identitas Asia ke festival seni bertaraf Internasional. Keberhasilan inilah yang akhirnya membuat Lorenzo memutuskan untuk membawa Art Stage tidak hanya berada di Singapura, tapi juga merambah pasar di Indonesia. Masuk di tahun kedua, Art Stage Jakarta kembali digelar pada 11-13 Agustus 2017 lalu di Sheraton Grand Jakarta, Gandaria City Hotel. Sebagai bukti high quality dan high standards dari Art Stage Jakarta, kali ini mereka menggandeng 60 galeri seni terbaik di Indonesia, Asia Tenggara serta dunia dan membawa mereka bersatu di Jakarta, sehingga sukses membuat Art Stage Jakarta sebagai pameran seni premium di Indonesia. Selain 24 galeri seni asal Indonesia, terdapat 36 galeri seni berskala dunia, diantaranya dari Australia, China, Perancis, Jerman, Hong Kong, Jepang, Malaysia, Belanda, Filipina, Rusia, Singapore, Korea Utara, Spanyol, Taiwan, Thailand, dan Amerika.</p>
                            </div>
                            <hr/>
                            <div class="snatch-bottom">
                                <div class="card-deck">
                                  <div class="card">
                                    <img class="card-img-top" src="assets/images/snatch-6.jpg" alt="Card image cap">
                                    <div class="card-block">
                                      <p class="card-title-jumbo">ART AWARD 2017</p>
                                      <p class="card-text">Di tahun kedua, Art Stage Jakarta, sebuah pameran seni premium bertaraf Internasional, menggelar Art Award untuk menghargai seniman, institusi dan galeri seni di Indonesia atas Authenticity, Leadership, Excellence, Quality, dan Seriousness terhadap seni. Acara yang diinisiasi oleh kolektor Alex Tedja dan diselenggarakan di Institut Francais d’Indonésie, Jakarta pada 10 Agustus ini mengukuhkan Melati Suryodarmo sebagai The Best Artist, Aditya Novali sebagai The Best Young Artist, Enin Supriyanto sebagai The Best Curator, 17/71 sebagai The Best Exhibition, Indonesian Visual Art Archive (IVAA) sebagai The Best Art Institution, S. Sudjono dan Martin Suryajaya sebagai The Best Art Publication, Jim Supangkat, Sunaryo, dan Ir. Ciputra yang masing-masing mendapatkan Lifetime Achievement Award dalam kategori Kurator, Seniman, dan Kolektor. Seluruh pemenang mendapatkan trophy yang dirancang khusus oleh seniman Indonesia, Handiwirman Saputra.</p>
                                    </div>
                                  </div>
                                  <div class="card">
                                    <img class="card-img-top" src="assets/images/snatch-7.jpg" alt="Card image cap">
                                    <div class="card-block">
                                      <p class="card-title-jumbo">TEA & TALK WITH GLOSKIN</p>
                                      <p class="card-text">Penyanyi dan juga designer Rihanna telah sukses dalam dua seasons yang ditampilkan pada Paris Fashion Week, dan sekarang ia siap membawa brand nya Fenty Puma  ke kota New York untuk koleksi Spring 2018 mendatang. Sayangnya, Rihanna belum menyebutkan tanggal, waktu dan lokasi untuk shownya tersebut.</p>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection