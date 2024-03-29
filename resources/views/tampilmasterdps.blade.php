@extends('layout.admin')

@section('content')
<body>
    <h1 class="text-center mb-4">EDIT DATA DPS</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/updatedps/{{$datarfid->tag_rfid}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            
                            <div class="mb-3">
                                <label for="exampleInputEmail1">DPS</label>
                                <input type="text" name="DPS" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="{{$datarfid->dps}}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1">Spesies Code</label>
                                <input type="text" name="species_code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="{{$datarfid->species_code}}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1">Spesies Desc</label>
                                <input type="text" name="species_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="{{$datarfid->species_description}}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1">Size Code</label>
                                <input type="text" name="size_code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="{{$datarfid->size_code}}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1">Size Desc</label>
                                <input type="text" name="size_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="{{$datarfid->size_description}}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1">Fish Lot</label>
                                <input type="text" name="fish_lot" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="{{$datarfid->fish_lot}}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1">Berat DPS</label>
                                <input type="text" name="input_dps" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="{{$datarfid->input_dps}}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1">Planing Date</label>
                                <input type="text" name="planning_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="{{$datarfid->planning_date}}">
                              
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
@endsection