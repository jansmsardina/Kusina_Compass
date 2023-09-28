@include('header')

<div class="Carding">
        <div class="row" id='cardRow'>
            <div class="col">
                <div class="row">
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="cards" style="width: 18rem;">
                            <img src="{{ asset('public/storage/Images/Coffee.jpeg') }}" class="card-img-top" alt="..." />
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
                            <img src="{{ asset('public/storage/Images/BurgerShop.jpeg') }}" class="card-img-top" alt="..." />
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
                        <img src="{{ asset('public/storage/Images/PizzaShop.jpeg') }}" class="card-img-top" alt="..." />
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
                        <img src="{{ asset('public/storage/Images/Jenkins.jpeg') }}" class="card-img-top" alt="..." />
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

@include('footer')