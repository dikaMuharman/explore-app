@extends('layouts.admin')

@section('title','Daftar wisata')

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
          <tr>
            <th scope="row">1</th>
            <td>Ngeteh</td>
            <td>Alhamdulillah</td>
            <td>
              <button class="btn btn-primary"><i class="far fa-eye"></i></button>
              <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>
              <a href="#" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

{{-- Modal detail --}}
<div class="modal fade" id="detailUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" readonly >
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <input type="text" name="role" class="form-control" readonly >
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
      $('#detailUser').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var url = button.data('url')
        $.ajax({
          url: url,
          type: 'GET',
          dataType: 'html'
        }).done(function(data) {
          var dataJson = $.parseJSON(data)
          console.log(dataJson)
          $('input[name="username"]').val(dataJson.username)
          $('input[name="email"]').val(dataJson.email)
          $('input[name="role"]').val(dataJson.role)
          $('a.link').on('click',function() {
            window.location.href = button.data('href')
          })
        })
      });
    </script>
@endsection