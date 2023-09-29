<x-app-layout>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>
<body>
        <div class="container mt-4">
             <h1 class="text-center">Menu</h1>
        </div>
        
        @if(session('success'))    
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="mb-3">
            <a class="btn btn-primary" href="{{ route('product.create') }}">Add a Product</a>
        </div>
        <div class="container mt-5">
        <table id="myTable" style="border: 1px solid #000;">
    
            <thead>
                <tr>
                    <th style="border: 0.5px solid #000; background-color: rgba(0, 0, 0, 0.1);">ID</th>
                    <th style="border: 0.5px solid #000; background-color: rgba(0, 0, 0, 0.1);">Name</th>
                    <th style="border: 1px solid #000;">Price</th>
                    <th style="border: 1px solid #000;">Description</th>
                    <th style="border: 1px solid #000;">Image</th>
                    <th style="border: 1px solid #000;">Edit</th>
                    <th style="border: 1px solid #000;">Delete</th>
                </tr>
            </thead>
                            <tbody>
                            @foreach($products as $product)
                <tr>
                    <td style="border: 1px solid #000;">{{ $product->id }}</td>
                    <td style="border: 1px solid #000;">{{ $product->name }}</td>
                    <td style="border: 1px solid #000;">{{ $product->price }}</td>
                    <td style="border: 1px solid #000;">{{ $product->description }}</td>
                    
                    <td style="border: 1px solid #000;">
                        <img src="{{ asset('public/storage/Uploads/ProductUploads/' . $product->image) }}" alt="Product Image" class="img-thumbnail" style="max-width: 100px;">
                
                        
                    <td style="border: 1px solid #000;">
                        
                        <a href="{{ route('product.edit', ['product' => $product]) }}" class="btn btn-warning">Edit</a>
                    </td>
                    <td style="border: 1px solid #000;">
                       
                    <button onclick="deleteProduct('{{ $product->id }}')" class="btn btn-danger">delete</button>  
                    </td>
                </tr>
                @endforeach
                            </tbody>
                        </table>
                        
        </div>
    </div>

    <script>
        
        
            function deleteProduct(id) {
    
             if(confirm("Are you sure to delete this product?") == true){
                window.location.href = "<?php echo env('APP_URL'); ?>/KusinaCompass3/products/destroy/" + id;


             }
            
    
    }
       
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"> </script>
   
   <script> 
        let table = new DataTable('#myTable');
    </script>
    </body>
</x-app-layout>
