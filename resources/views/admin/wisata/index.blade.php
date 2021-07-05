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
      <h2 class="h4"><strong>List wisata</strong></h2>
      <a href="{{route('wisata.create')}}" class="btn btn-primary">Tambah wisata</a>
    </div>
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Wisata</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($wisatas as $wisatum)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$wisatum->nama}}</td>
            <td>Aktif</td>
            <td>
              <button class="btn btn-primary" data-url="{{route('wisata.show',$wisatum)}}" data-href="{{route('wisata.edit',$wisatum)}}" id="wisatabtn" data-target="#detailWisata" data-toggle="modal"><i class="far fa-eye"></i></button>
              <a href="{{route('wisata.edit',$wisatum)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
              <form action="{{route('wisata.destroy',$wisatum)}}" method="POST" class="d-inline">
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
<div class="modal fade" id="detailWisata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="text" name="rating" class="form-control" readonly>
        </div>
       <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" name="lokasi" class="form-control" readonly>
        </div>
        <div class="form-group">
              <label for="deskripsi">Deskripsi</label>
              <textarea name="deskripsi" class="form-control" readonly></textarea>
        </div>
        <div class="d-flex" id="foto">
          
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary link" >Edit</a>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
    <script>
      $('#detailWisata').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var url = button.data('url')
        $.ajax({
          url: url,
          type: 'GET',
          dataType: 'html'
        }).done(function(data) {
          var dataJson = $.parseJSON(data)
          $('input[name="nama"]').val(dataJson.nama)
          $('input[name="lokasi"]').val(dataJson.lokasi)
          $('input[name="rating"]').val(dataJson.rating)
          $('textarea[name="deskripsi"]').text(dataJson.deskripsi)
          const photoContainer = document.getElementById('foto');
          photoContainer.innerHTML = '';
          dataJson.foto.forEach(photo => {
            const img = document.createElement('img');
            img.setAttribute('class','img-thumbnail');
            img.style.width = "150px";
            img.style.objectFit = 'cover';
            img.setAttribute('src',`{{asset('wisata/${photo}')}}`);
            photoContainer.appendChild(img);
          })
          $('a.link').on('click',function() {
            window.location.href = button.data('href')
          })
        })
      });
    </script>
@endsection