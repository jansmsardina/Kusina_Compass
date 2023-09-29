<title>Edit Menu</title>
    <!-- Add Bootstrap CSS link here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center">Edit Menu</h1>

    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Product') }}</div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div>
                            @if($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>

                        <form method="POST" action="{{ route('products.update', ['product' => $product]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            @if(isset($product))
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                            @endif

                            <div class="form-group">
                                <label for="product_name">Product Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name ?? '' }}">
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}">
                            </div>

                            <div class="form-group">
                                <label for="category">Description</label>
                                <input type="text" class="form-control" id="category" name="description" value="{{ $product->description }}">
                            </div>

                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#updateProductModal">Update Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>