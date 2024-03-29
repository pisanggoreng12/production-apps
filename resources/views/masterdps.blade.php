@extends('layout.admin')
@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" 
integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />    
@endpush

@section('content')
                    <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">MASTER DPS</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Preparation</li>
                                </ol>
                            </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>

                <div class="container">
    
   
    <div class="row g-3 align-items-center mt-2">
        <div class="col-auto">
        <form action="/masterdps" method="GET">
          <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
        </form>
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
                    <th scope="col">ID CARD</th>
                    <th scope="col">DPS</th>
                    <th scope="col">Spesies Code</th>
                    <th scope="col">Spesies Desc</th>
                    <th scope="col">Size Code</th>
                    <th scope="col">Size Desc</th>
                    <th scope="col">Fish Lot</th>
                    <th scope="col">Berat DPS</th>
                    <th scope="col">Planing Date</th>
                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>
            @foreach ($datarfid as $row)
            <tr>
                {{-- <th scope="row">{{ $row ->}}</th> --}}
                <td>{{ $row->tag_rfid}}</td>
                <td>{{ $row->dps}}</td>
                <td>{{ $row->species_code}}</td>
                <td>{{ $row->species_description}}</td>
                <td>{{ $row->size_code}}</td>
                <td>{{ $row->size_description}}</td>
                <td>{{ $row->fish_lot}}</td>
                <td>{{ $row->input_dps}}</td>
                <td>{{ $row->planning_date}}</td>
                <td>
                    <a href="/tampilkandps/{{ $row ->tag_rfid}}" class="btn btn-info">Edit</a>
                    
                    
                </td>

            </tr>
            @endforeach
                
               
        </tbody>
    </table>
    {{$datarfid->links()}}

</div>
</div>
</div>

@push('scripts')
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
@endpush



<!-- /.content -->

@endsection