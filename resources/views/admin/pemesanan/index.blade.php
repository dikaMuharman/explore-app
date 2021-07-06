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
            <th scope="col">Nama</th>
            <th scope="col">Wisata</th>
            <th scope="col">Nama Paket</th>
            <th scope="col">Harga</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pemesanans as $pemesanan)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$pemesanan->nama_pemesan}}</td>
            <td>{{$pemesanan->wisata}}</td>
            <td>{{$pemesanan->paket}}</td>
            <td>{{$pemesanan->harga_paket}}</td>
            <td>
              <button data-url="{{route('pemesanan.show',$pemesanan)}}" data-href="{{route('pemesanan.edit',$pemesanan)}}" data-toggle="modal" data-target="#detailPemesanan" class="btn btn-primary"><i class="far fa-eye"></i></button>
              <a href="{{route('pemesanan.edit',$pemesanan)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
              <form action="{{route('pemesanan.destroy',$pemesanan)}}" method="POST" class="d-inline">
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
<div class="modal fade" id="detailPemesanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail pemesanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
                <label for="nama_pemesan">Nama Pemesan</label>
                <input type="text" name="nama_pemesan" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="wisata">Wisata</label>
                <input type="text" name="wisata" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="paket">Paket</label>
                <input type="text" name="paket" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="tanggal_berangkat">Tanggal berangkat</label>
                <input type="text" name="tanggal_berangkat" class="form-control " readonly>
            </div>
            <div class="form-group">
                <label for="tanggal_pulang">Tanggal pulang</label>
                <input type="text" name="tanggal_pulang" class="form-control " readonly>
            </div>
            <div class="form-group">
                <label for="harga_paket">Harga Paket</label>
                <input type="text" name="harga_paket" class="form-control " readonly>
            </div>
            <div class="form-group">
                <label for="jumlah_paket">Jumlah Paket</label>
                <input type="text" name="jumlah_paket" class="form-control " readonly>
            </div>
            <div class="form-group">
                <label for="total_harga">total Harga</label>
                <input type="text" name="total_harga" class="form-control " readonly>
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
      $('#detailPemesanan').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var url = button.data('url')
        $.ajax({
          url: url,
          type: 'GET',
          dataType: 'html'
        }).done(function(data) {
          var dataJson = $.parseJSON(data)
          $('input[name="nama_pemesan"]').val(dataJson.nama_pemesan)
          $('input[name="wisata"]').val(dataJson.wisata)
          $('input[name="paket"]').val(dataJson.paket)
          $('input[name="tanggal_berangkat"]').val(dataJson.tanggal_berangkat)
          $('input[name="tanggal_pulang"]').val(dataJson.tanggal_pulang)
          $('input[name="harga_paket"]').val(dataJson.harga_paket)
          $('input[name="jumlah_paket"]').val(dataJson.jumlah_paket)
          $('input[name="total_harga"]').val(dataJson.total_harga)
          $('a.link').on('click',function() {
            window.location.href = button.data('href')
          })
        })
      });
    </script>
@endsection