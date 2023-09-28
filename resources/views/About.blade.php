@include('header')

<div class="AboutUsBackground">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-6">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="{{ asset('Images/vy (2).jpg') }}" class="card-img-top" alt="..." />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>"Vy Cortez"</h5>
                                    <p>Ang Sarap ng Cake ni Cong</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                            <img src="{{ asset('Images/Burger.jpg') }}" class="card-img-top" alt="..." />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>"Angels'Burger"</h5>
                                    <p>Unang Kagat Tinapay Lahat</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                            <img src="{{ asset('Images/Angels.jpg') }}" class="card-img-top" alt="..." />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>"Angel De Leon"</h5>
                                    <p>Ang pizza mo, Pizza ko, Pizza Nating lahat</p>
                                </div>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-sm-6 Aboutus mb-6 mb-sm-0">
                <img src="{{ asset('Images/BackMot.png') }}" class="card-img-top" alt="..." />
                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')