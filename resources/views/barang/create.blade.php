@extends('layouts.app')
@section('content')
    <form action="{{ route('barangs.store') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 border col-xl-6">
                <div class="mb-3 text-center">
                    <h4>Tambah Barang</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="namaBarang" class="form-label">Nama Barang</label>
                        <input class="form-control @error('namaBarang') is-invalid @enderror" type="text" name="namaBarang"
                            id="namaBarang" value="{{ old('namaBarang') }}" placeholder="Masukkan nama barang">
                        @error('namaBarang')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="hargaBarang" class="form-label">Harga Barang</label>
                        <input class="form-control @error('hargaBarang') is-invalid @enderror" type="text" name="hargaBarang"
                            id="hargaBarang" value="{{ old('hargaBarang') }}" placeholder="Masukkan Harga Barang">
                        @error('hargaBarang')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="deskripsiBarang" class="form-label">Deskripsi Barang</label><input
                            class="form-control @error('deskripsiBarang') is-invalid @enderror" type="text" name="deskripsiBarang"
                            id="deskripsiBarang" value="{{ old('deskripsiBarang') }}"placeholder="Masukkan deskripsi barang">
                        @error('deskripsiBarang')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="satuan" class="formlabel">Satuan</label>
                        <select name="satuan" id="satuan" class="formselect">
                            @foreach ($satuans as $satuan)
                                <option value="{{ $satuan->id }}"
                                    {{ old('satuan') == $satuan->id ? 'selected' : '' }}>
                                    {{ $satuan->code . ' - ' . $satuan->namasatuan }}</option>
                            @endforeach
                        </select>
                        @error('position')
                            <div class="textdanger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 d-grid">
                        <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                class="bi-arrow-left-circle me-2"></i>Cancel</a>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                            Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection