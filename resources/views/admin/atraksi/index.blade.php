@extends('layouts.admin')

@section('title','Daftar atraksi')

@section('content')
<div class="card shadow mb-4">
  <div class="card-body">
    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <span>{{session('status')}}</span>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <div class="d-flex flex-row justify-content-between align-items-center mb-4">
      <h2 class="h4"><strong>List atraksi</strong></h2>
      <a href="{{route('atraksi.create')}}" class="btn btn-primary">Tambah atraksi</a>
    </div>
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Atraksi</th>
            <th scope="col">Nama Wisata</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($atraksis as $atraksi)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$atraksi->nama}}</td>
            <td>{{$atraksi->wisata->nama}}</td>
            <td>
              <button class="btn btn-primary" data-url="{{route('atraksi.show',$atraksi)}}" data-href="{{route('atraksi.edit',$atraksi)}}" id="atraksiBtn" data-target="#detailAtraksi" data-toggle="modal"><i class="far fa-eye"></i></button>
              <a href="{{route('atraksi.edit',$atraksi)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
              <form action="{{route('atraksi.destroy',$atraksi)}}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('yakin mau di hapus ?')"><i class="far fa-trash-alt"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

{{-- Modal detail --}}
<div class="modal fade" id="detailAtraksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail pengguna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="nama">Nama Atraksi</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="wisata_id">Nama Wisata</label>
            <input type="text" name="wisata_id" class="form-control">
        </div>
        <div class="d-flex">
          <label>Foto</label>
          <img class="img-thumbnail" style="width: 200px;object-fit: cover">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary link">Edit</a>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
    <script>
      $('#detailAtraksi').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var url = button.data('url')
        $.ajax({
          url: url,
          type: 'GET',
          dataType: 'html'
        }).done(function(data) {
          var dataJson = $.parseJSON(data)
          console.log(dataJson)
          $('input[name="nama"]').val(dataJson.atraksi.nama)
          $('input[name="wisata_id"]').val(dataJson.wisata)
          $('img.img-thumbnail').attr( 'src',`{{asset('atraksi/${dataJson.atraksi.foto}')}}`)
          $('a.link').on('click',function() {
            window.location.href = button.data('href')
          })
        })
      });
    </script>
@endsection