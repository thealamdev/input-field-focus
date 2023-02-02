<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        input {
            width: 100%;
        }
    </style>
    <title>Focus</title>
</head>

<body>

    <div class="container">
        <div class="row m-5">

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Product</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>discount</th>
                                <th>Category</th>
                            </thead>

                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->discount }}%</td>
                                    <td>{{ $product->category }}</td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Product</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Product Name</label>
                                <input type="name" name="name" class="formInput form-control" autofocus id="name">

                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Product Price</label>
                                <input type="price" name="price" class="formInput form-control" id="price">

                            </div>
                            <div class="mb-3">
                                <label for="discount" class="form-label">Product Discount</label>
                                <input type="discount" name="discount" class="formInput form-control" id="discount">

                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Product category</label>
                                <input type="category" name="category" class="formInput form-control" id="category">

                            </div>
                            <button type="button" class="formInput submit btn btn-primary" >Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        var input = document.querySelectorAll('.formInput');
        input.forEach((element, index) => {
            element.addEventListener('keyup',function(){
                if(event.key === "Enter"){
                    input[index + 1].focus()
                }
            })
        });
        
        var submit = document.querySelector('.submit')
        submit.addEventListener('focus',function(){
            this.type = "submit"
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
