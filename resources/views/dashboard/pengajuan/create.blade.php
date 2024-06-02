@extends('dashboard.layouts.main')

@section('container')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            {{-- <h4 class="page-title mb-0 font-size-18">Tambah Pengajuan</h4> --}}

        </div>
    </div>
  </div>
  <!-- end page title -->

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif


<div class="row mb-3">
    <div class="col-6">
    <div class="card">
        <h5 class="card-header p-3">Tambah Pengajuan</h5>
        <div class="card-body mx-2">
            <form action="/dashboard/pengajuan" method="POST">
                @csrf
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="" autofocus required>
                        </div>
                        <div class="mb-3">
                            <label for="jenis" class="form-label">Jenis</label>
                            <select name="jenis" class="form-control" id="" required>
                                <option value=""></option>
                                <option value="Izin">Izin</option>
                                <option value="Lupa Absen">Lupa Absen</option>
                                <option value="Telat Absen">Telat Absen</option>
                            </select>
                        </div>
                    <button class="btn btn-primary py-2 mt-3" type="submit">Tambah</button>
                </div>
            </form>
            </div>
        </div>
</div>

@endsection
