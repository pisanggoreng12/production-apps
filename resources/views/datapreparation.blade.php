<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Preparation CRUD</title>
</head>

<body>
    <h1 class="text-center mb-4">PREPARATION</h1>

    <div class="container">
        <a href="/tambahdataprep" class="btn btn-success">Tambah</a>
       
        <div class="row g-3 align-items-center mt-2">
            <div class="col-auto">
            <form action="/preparation" method="GET">
              <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
            </form>
            </div>
            <div class="col-auto">
                <a href="/exportpdfprep" class="btn btn-danger">Export PDF</a>
            </div>
          </div>


        <div class="row">
            {{--@if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{$message}}
              </div> 
            @endif--}}
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Production id</th>
                        <th scope="col">DPS</th>
                        <th scope="col">Spesies</th>
                        <th scope="col">Size</th>
                        <th scope="col">Weight/DPS</th>
                        <th scope="col">Dibuat</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $row)
                <tr>
                    <th scope="row">{{ $row ->productionid}}</th>
                    <td>{{ $row->batch}}</td>
                    <td>{{ $row->spesies}}</td>
                    <td>{{ $row->size}}</td>
                    <td>{{ $row->weight}}</td>
                    <td>{{ $row->created_at}}</td>
                    <td>
                        <a href="/tampilkandataprep/{{ $row ->productionid}}" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger delete" dataprep-id="{{ $row ->productionid}}">Hapus</a>
                        
                    </td>

                </tr>
                @endforeach
                    
                   
                </tbody>
            </table>
            {{ $data->links() }}

        </div>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



</body>
<script>
    $('.delete').click( function(){
        var datapreparationid= $(this).attr('dataprep-id');
        swal({
                            title: "Kamu Yakin?",
                            text: "Kamu akan menghapus data preparation dengan production id "+datapreparationid+" ",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                            })
                            .then((willDelete) => {
                            if (willDelete) {
                                window.location = "/deletedataprep/"+datapreparationid+""
                                swal("Data berhasil di hapus!", {
                                icon: "success",
                                });
                            } else {
                                swal("Data tidak jadi di hapus!");
                            }
                     });


    });
                   
</script>

<script>
@if (Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
@endif
</script>
</html>