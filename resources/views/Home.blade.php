@include('header')



<div id='body'>
    

    <div class="Carding">
        <div class="row" id='cardRow'>
            <div class="col">
                <div class="row">
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="cards" style="width: 18rem;">
                            <img src="{{ asset('Images/Coffee.jpeg') }}" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">New Coffee Shop</h5>
                                <p class="card-text">
                                    So"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit..."
                                </p>
                                <a href="#" class="btn btn-primary">Visit Store</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="cards" style="width: 18rem;">
                            <img src="{{ asset('Images/BurgerShop.jpeg') }}" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">New Burger Shop</h5>
                                <p class="card-text">
                                    So"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit..."
                                </p>
                                <a href="#" class="btn btn-primary">Visit Store</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="cards" style="width: 18rem;">
                        <img src="{{ asset('Images/PizzaShop.jpeg') }}" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">New Pizza Shop</h5>
                                <p class="card-text">
                                    So"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit..."
                                </p>
                                <a href="#" class="btn btn-primary">Visit Store</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="cards" style="width: 18rem;">
                        <img src="{{ asset('Images/Jenkins.jpeg') }}" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">New Cake Shop</h5>
                                <p class="card-text">
                                    So"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit..."
                                </p>
                                <a href="#" class="btn btn-primary">Visit Store</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Caros">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0"> <!-- Change col-sm-3 to col-sm-6 -->
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('Images/plate-removebg-preview.png') }}"
                                    class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('Images/plate-removebg-preview.png') }}"
                                    class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('Images/plate-removebg-preview.png') }}"
                                    class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                         
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="ratio ratio-4x3">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/NC9KlaxtfLg"
                                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@include('footer')