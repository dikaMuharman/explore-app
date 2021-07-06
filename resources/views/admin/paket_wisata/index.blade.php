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
      <h2 class="h4"><strong>List paket wisata</strong></h2>
      <a href="{{route('paket-wisata.create')}}" class="btn btn-primary">Tambah paket wisata</a>
    </div>
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Paket</th>
            <th scope="col">Lokasi Wisata</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($paketWisata as $paket_wisatum)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$paket_wisatum->nama_wisata}}</td>
            <td>{{$paket_wisatum->wisata->nama}}</td>
            <td>
              <button class="btn btn-primary" data-url="{{route('paket-wisata.show',$paket_wisatum)}}" data-href="{{route('paket-wisata.edit',$paket_wisatum)}}" id="paketBtn" data-target="#detailPaket" data-toggle="modal"><i class="far fa-eye"></i></button>
              <a href="{{route('paket-wisata.edit',$paket_wisatum)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
              <form action="{{route('paket-wisata.destroy',$paket_wisatum)}}" method="POST" class="d-inline">
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
<div class="modal fade" id="detailPaket" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail paket wisata</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="nama_wisata">nama Paket</label>
            <input type="text" name="nama_wisata" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="wisata_id">Wisata</label>
            <input type="text" class="form-control " name="wisata_id" readonly>
        </div>
        <div class="form-group">
            <label for="nama_hotel">Hotel</label>
            <input type="text" name="nama_hotel" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="text" name="rating" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="nama_pesawat">Pesawat</label>
            <input type="text" name="nama_pesawat" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="kelas_pesawat">Kelas Pesawat</label>
            <input type="text" name="kelas_pesawat" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="fasilitas">Fasilitas</label>
            <div class="row">
                <div class="col-md-5">
                    Nama fasilitas
                </div>
                <div class="col-md-7">
                    Icon fasilitas
                </div>
            </div>
            <div id="container" >
                
            </div>
        </div>
        <div class="form-group">
            <label for="harga_paket">Harga Paket</label>
            <input type="text" name="harga_paket" class="form-control" readonly>
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
      const fasilitasContainer = (nama, icon) => { 
        return `<div class="row mt-2" id="form">
                    <div class="col-md-5">
                        <input type="text" value="${nama}"  class="form-control" readonly>
                    </div>
                    <div class="col-md-6">
                        <input type="text" value="${icon}" class="form-control" readonly>
                    </div>
                </div>`};

      const htmlSpecialCharacther = str => str.replace(/&/g, "&amp;").replace(/>/g, "&gt;").replace(/</g, "&lt;").replace(/"/g, "&quot;")

      $('#detailPaket').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var url = button.data('url')
        $.ajax({
          url: url,
          type: 'GET',
          dataType: 'html'
        }).done(function(data) {
          var dataJson = $.parseJSON(data)
          console.log(dataJson)
          $('input[name="nama_wisata"]').val(dataJson.paketWisata.nama_wisata)
          $('input[name="wisata_id"]').val(dataJson.namaWisata)
          $('input[name="nama_hotel"]').val(dataJson.paketWisata.nama_hotel)
          $('input[name="nama_pesawat"]').val(dataJson.paketWisata.nama_pesawat)
          $('input[name="rating"]').val(dataJson.paketWisata.rating)
          $('input[name="kelas_pesawat"]').val(dataJson.paketWisata.kelas_pesawat)
          $('input[name="harga_paket"]').val(dataJson.paketWisata.harga_paket)
          const iconContainer = document.getElementById('container')
          iconContainer.innerHTML = '';
          dataJson.paketWisata.fasilitas.forEach(fasilitas => {
            iconContainer.innerHTML += fasilitasContainer(fasilitas.nama, htmlSpecialCharacther(fasilitas.icon))
          })
          $('a.link').on('click',function() {
            window.location.href = button.data('href')
          })
        })
      });
    </script>
@endsection