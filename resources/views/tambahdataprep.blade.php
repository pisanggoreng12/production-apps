<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>TAMBAH DATA CRUD</title>
</head>

<body>
    <h1 class="text-center mb-4">TAMBAH DATA PREPARATION</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/insertdataprep" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                              <label for="exampleInputEmail1">Production ID</label>
                              <input type="number" name="productionid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1">DPS</label>
                                <input type="text" name="batch" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1">Spesies</label>
                                <select class="custom-select" name="spesies" >
                                    <option selected>Pilih Spesies</option>
                                    <option value="sj">SJ</option>
                                    <option value="be">BE</option>
                                    <option value="alb">ALB</option>
                                    <option value="yf">YF</option>
                                  </select>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1">Size</label>
                                <select class="custom-select" name="size">
                                    <option selected>Tipe Berat</option>
                                    <option value="0.7-0.99">0.7-0.99</option>
                                    <option value="1.0-1.39">1.0-1.39</option>
                                    <option value="1.4-1.79">1.4-1.79</option>
                                    <option value="1.8-2.39">1.8-2.39</option>
                                    <option value="3.4-4.49">3.4-4.49</option>
                                    <option value="4.5-5.99">4.5-5.99</option>
                                    <option value="6.0-8.99">6.0-8.99</option>
                                    <option value="9.0-11.99">9.0-11.99</option>
                                    <option value="12.0-14.99">12.0-14.99</option>
                                    <option value="15.0-17.99">15.0-17.99</option>
                                    <option value="18.0-20.99">18.0-20.99</option>
                                    <option value="21.0-23.99">21.0-23.99</option>
                                    <option value="24.0-26.99">24.0-26.99</option>
                                    <option value="30.0-32.99">30.0-32.99</option>
                                    <option value="33.0-35.99">33.0-35.99</option>
                                </select>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1">Weight/DPS</label>
                                    <input type="text" name="weight" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>                                  
                              </div>
                           
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>