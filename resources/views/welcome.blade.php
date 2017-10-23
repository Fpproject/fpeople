@extends('layouts.Template')

@section('content')



    <div id="content-body">
        <div  class="container">
            <div class="row">
                <hr />
                <div class="content-top">

                    <div class="col-md-8 col-xs-12">
                        <div class="vid-container" onClick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/xLxTVElhbu0?autoplay=1&rel=0&showinfo=0&autohide=1'">
                            <iframe id="vid_frame" src="https://www.youtube.com/embed/xLxTVElhbu0?rel=0&showinfo=0&autohide=1" frameborder="0"></iframe>
                        </div>
                        <div class="title-vid-now-playing">NOW PLAYING:</div>
                        <div class="vid-item" onClick="document.getElementById('vid_frame').src='http://youtube.com/embed/eqZjFKwjT94?autoplay=1&rel=0&showinfo=0&autohide=1'">
                            <div class="title-vid">NEXT VIDEO:</div>
                            <div class="thumb">
                                <img src="http://img.youtube.com/vi/eqZjFKwjT94/0.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <img src="assets/images/img3.jpg" alt="">
                        <img src="assets/images/img4.jpg" alt="">
                    </div>
                </div>
                <div class="content-bottom">
                    <div class="col-lg-12">
                        <div class="title-content"><h2>Lorem Ipsum <br/> Dolor Sit Amet</h2></div>
                        <div class="row blog-grid">
                            <div class="col-md-12 col-lg-3 post-item">
                                <!-- Post-->
                                <div class="row">
                                    <article class="post col-md-6 col-lg-12">
                                        <div class="post-preview" style="background-image: url('assets/images/000000430014.jpg')></div>
                                    <div class="post-wrapper">
                                        <div class="post-header">
                                            <ul class="post-meta h5">
                                                <li>August 18, 2016</li>
                                            </ul>
                                            <h2 class="post-title"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>
                                        </div>
                                        <div class="post-more"><a href="#">Read More →</a></div>
                                </div>
                                </article>
                                <!-- Post end-->
                                <!-- Post-->
                                <article class="post col-md-6 col-lg-12">
                                    <div class="post-preview" style="background-image: url('assets/images/13_HENSHIN_0693.jpg');"></div>
                                    <div class="post-wrapper">
                                        <div class="post-header">
                                            <ul class="post-meta h5">
                                                <li>August 18, 2016</li>
                                            </ul>

                                            <h2 class="post-title"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>

                                        </div>
                                        <div class="post-more"><a href="#">Read More →</a></div>
                                    </div>
                                </article>
                                <!-- Post end-->
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 post-item center-section">
                            <!-- Post-->
                            <article class="post">
                                <div class="post-preview" style="background-image: url('assets/images/imgCenter.jpg');"></div>
                                <div class="post-wrapper">
                                    <div class="post-header">
                                        <ul class="post-meta h5">
                                            <li>August 18, 2016</li>
                                        </ul>
                                        <h2 class="post-title"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>

                                    </div>
                                    <div class="post-more"><a href="#">Read More →</a></div>
                                </div>
                            </article>
                            <!-- Post end-->
                        </div>
                        <div class="col-md-12 col-lg-3 post-item">
                            <!-- Post-->
                            <div class="row">
                                <article class="post col-md-6 col-lg-12">
                                    <div class="post-preview" style="background-image: url('assets/images/ACNE_STUDIOS_2.jpg');"></div>
                                    <div class="post-wrapper">
                                        <div class="post-header">
                                            <ul class="post-meta h5">
                                                <li>August 18, 2016</li>
                                            </ul>
                                            <h2 class="post-title"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>

                                        </div>
                                        <div class="post-more"><a href="#">Read More →</a></div>
                                    </div>
                                </article>
                                <!-- Post end-->
                                <!-- Post-->
                                <article class="post col-md-6 col-lg-12">
                                    <div class="post-preview" style="background-image: url('assets/images/kim_k_copy.jpg');"></div>
                                    <div class="post-wrapper">
                                        <div class="post-header">
                                            <ul class="post-meta h5">
                                                <li>August 18, 2016</li>
                                            </ul>

                                            <h2 class="post-title"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>

                                        </div>
                                        <div class="post-more"><a href="#">Read More →</a></div>
                                    </div>
                                </article>
                                <!-- Post end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('footer')

    @endsection

