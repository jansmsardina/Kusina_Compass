<x-app-layout>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Menu') }}
            </h2>
        </x-slot>
        @if(session('success'))    
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="mb-3">
            <a class="btn btn-primary" href="{{ route('product.create') }}">Add a Product</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
                            <tbody>
                            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    
                    <td>
                    @if($product->image)
                    <img src="{{ asset('storage/Uploads/ProductUploads/' . $product->image) }}" alt="Product Image" class="img-thumbnail" style="max-width: 100px;">
                @else
                    <!-- You can add a placeholder or default image here if no image is provided for the product -->
                @endif
                    </td>
                    <td>
                        
                        <a href="{{ route('product.edit', ['product' => $product]) }}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                       
                    <button onclick="deleteProduct('{{ $product->id }}')" class="btn btn-danger">delete</button>  
                    </td>
                </tr>
                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        
        
            function deleteProduct(id) {
    
             if(confirm("Are you sure to delete this product?") == true){
                window.location.href = "<?php echo env('APP_URL'); ?>/KusinaCompass3/products/destroy/" + id;


             }
            
    
    }
       
    </script>
</x-app-layout>
