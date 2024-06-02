@extends('dashboard.layouts.main')

@section('container')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            {{-- <h4 class="page-title mb-0 font-size-18">Edit Profile</h4> --}}
  
        </div>
    </div>
  </div>
  <!-- end page title -->

@if (session()->has('success'))
<div class="alert alert-success col-8" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="row">
        <div class="col-6">
        <div class="card">
            <h5 class="card-header p-3"><i class="dripicons-align-left"></i> Edit Data Diri</h5>
            <div class="card-body mx-2">
                <form action="/dashboard/profile/{{ $user->id }}" method="POST">
                    @method('put')
                    @csrf
                        <div class="row">
                        <div class="col-6 mb-3">
                          <label for="name" class="form-label">Nama</label>
                          <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" readonly>
                        </div>
                        <div class="col-6 mb-3">
                          <label for="address" class="form-label">Alamat</label>
                          <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $user->address) }}" required>
                        </div>
                        </div>
                        <div class="row">
                        <div class="mb-3 col-6">
                          <label for="divisions_id" class="form-label">Divisi</label>
                          <input type="hidden" class="form-control" id="divisions_id" name="divisions_id" value="{{ $user->divisions_id }}" readonly required>
                          <input type="text" class="form-control" value="{{ $user->division->name ?? 'DIVISI TIDAK DITEMUKAN! SILAHKAN HUBUNGI ADMIN!' }}" readonly required>
                        </div>
                        <div class="mb-3 col-6">
                          <label for="phonenumber" class="form-label">Nomor Telepon</label>
                          <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="{{ old('phonenumber', $user->phonenumber) }}" required>
                        </div>
                        <div class="mb-3 col-6">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>
                    <a href="/dashboard/profile" class="btn btn-outline-dark my-3">Kembali</a>
                    <button class="btn btn-primary" type="submit">Perbarui Data</button>
                </form>
                </div>
            </div>
          </div>

          
    </div>

@endsection


