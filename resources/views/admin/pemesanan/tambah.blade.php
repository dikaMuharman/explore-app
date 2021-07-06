@extends('layouts.admin')

@section('title','Tambah Pesanan')

@section('content')
    <div class="card">
      <div class="card-body">
          <form action="{{route('pemesanan.update',$pemesanan)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_pemesan">Nama Pemesan</label>
                <input type="text" name="nama_pemesan" class="form-control @error('nama_pemesan') is-invalid @enderror" value="{{old('nama_pemesan')}}">
                @error('nama_pemesan')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="wisata">Wisata</label>
                <select class="custom-select @error('wisata_id') is-invalid @enderror" name="wisata_id">
                    <option value="" selected>Pilih wisata</option>
                    @foreach ($wisatas as $wisata)
                    <option value="{{$wisata->id}}" @if (old('wisata') == $wisata->nama) selected @endif>{{$wisata->nama}}</option>
                    @endforeach
                </select>
                @error('wisata_id')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="paket">Paket</label>
                <input type="text" name="paket" class="form-control @error('paket') is-invalid @enderror" value="{{old('paket')}}">
                @error('paket')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="tanggal_reservasi">Tanggal reservasi</label>
                <input type="text" name="tanggal_reservasi" class="form-control @error('tanggal_reservasi') is-invalid @enderror" value="{{old('tanggal_reservasi')}}">
                @error('tanggal_reservasi')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="harga_paket">Harga Paket</label>
                <input type="text" name="harga_paket" class="form-control @error('harga_paket') is-invalid @enderror" value="{{old('harga_paket')}}">
                @error('harga_paket')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="jumlah_paket">Jumlah Paket</label>
                <input type="text" name="jumlah_paket" class="form-control @error('jumlah_paket') is-invalid @enderror" value="{{old('jumlah_paket')}}">
                @error('jumlah_paket')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="total_harga">total Harga</label>
                <input type="text" name="total_harga" class="form-control @error('total_harga') is-invalid @enderror" value="{{old('total_harga')}}">
                @error('total_harga')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="d-flex justify-content-end ">
                <a href="{{route('pemesanan.index')}}" class="btn btn-secondary mr-3">Back</a>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
      </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
    <script>
        const picker = new Litepicker({
            element: document.querySelector('input[name="tanggal_reservasi"]'),
            minDays: 4,
            minDate: new Date(),
            numberOfColumns: 2,
            numberOfMonths: 2,
            selectForward: true,
            startDate: new Date(),
            format: 'YYYY-MM-DD',
            singleMode: false,
            tooltipText: {
                one: 'night',
                other: 'nights',
            },
            tooltipNumber: (totalDays) => {
                return totalDays - 1;
            },
            setup: (picker) => {
                picker.on('selected', (date1, date2) => {
                const difference = date1.getTime() - date2.getTime();
                const days = Math.abs(Math.ceil(difference / (1000 * 3600 * 24)));
                totalPriceContainer.value = parseInt(totalPriceContainer.value) * days;
                });
            },
            });
    </script>
@endsection