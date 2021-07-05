@extends('layouts.admin')

@section('title','Tambah paket wisata')

@section('content')
    <div class="card">
      <div class="card-body">
          <form action="{{route('user.store')}}" method="POST">
            @csrf
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
                <input type="text" name="wisata" class="form-control @error('wisata') is-invalid @enderror" value="{{old('wisata')}}">
                @error('wisata')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="paket">Paket</label>
                <select class="custom-select @error('role') is-invalid @enderror" name="role">
                    <option value="" selected>Pilih paket</option>
                    <option value="user" @if (old('role') == 'user') selected @endif>User</option>
                    <option value="admin" @if (old('role') == 'admin') selected @endif>Admin</option>
                </select>
                @error('paket')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="tanggal_reservasi">Tanggal reservasi</label>
                <input type="text" name="tanggal_reservasi" class="form-control @error('tanggal_pulang') is-invalid @enderror" value="{{old('tanggal_pulang')}}">
                @error('tanggal_pulang')
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
                <a href="{{route('user.index')}}" class="btn btn-secondary mr-3">Back</a>
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