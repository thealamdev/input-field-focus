<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
                            </thead>

                            <tbody>
                                <tr>
                                    <td>ALLU</td>
                                    <td>4785</td>
                                    <td>6%</td>
                                </tr>
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
                        <form>
                            <div class="mb-3">
                              <label for="name" class="form-label">Product Name</label>
                              <input type="name" class="form-control" id="name">
                               
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Product Price</label>
                                <input type="price" class="form-control" id="price">
                                 
                              </div>
                              <div class="mb-3">
                                <label for="discount" class="form-label">Product Discount</label>
                                <input type="discount" class="form-control" id="discount">
                                 
                              </div>
                            <button type="button" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>