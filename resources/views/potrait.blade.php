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
                                <li><a href="#" class="">Cover Story</a></li>
                                <li><a href="#" class="">Potrait</a></li>
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

                    <div class="col col-md-9 col-xs-12 ">
                        <div class="card-deck">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/coverStory.jpg" alt="Card image cap">
                                <div class="card-block">
                                    <h4 class="card-title">Cover Story</h4>
                                    <p class="card-title-jumbo">Lorem Ipsum</p>
                                    <p class="card-text"><a href='#' class="text-muted">Read More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="card-deck">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/coverStory2.jpg" alt="Card image cap">
                                <div class="card-block">
                                    <h4 class="card-title">Potrait</h4>
                                    <p class="card-title-jumbo">Lorem Ipsum</p>
                                    <p class="card-text"><a href='#' class="text-muted">Read More</a></p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="assets/images/coverStory3.jpg" alt="Card image cap">
                                <div class="card-block">
                                    <h4 class="card-title">Potrair</h4>
                                    <p class="card-title-jumbo">Lorem Ipsum</p>
                                    <p class="card-text"><a href='#' class="text-muted">Read More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="card-deck">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/coverStory3.jpg" alt="Card image cap">
                                <div class="card-block">
                                    <h4 class="card-title">Potrait</h4>
                                    <p class="card-title-jumbo">Lorem Ipsum</p>
                                    <p class="card-text"><a href='#' class="text-muted">Read More</a></p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="assets/images/coverStory2.jpg" alt="Card image cap">
                                <div class="card-block">
                                    <h4 class="card-title">Potrait</h4>
                                    <p class="card-title-jumbo">Lorem Ipsum</p>
                                    <p class="card-text"><a href='#' class="text-muted">Read More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>





@endsection