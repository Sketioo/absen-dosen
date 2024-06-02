@extends('dashboard.layouts.main')

@section('container')

<!-- start page title -->
<div class="row">
  <div class="col-12">
      <div class="page-title-box d-flex align-items-center justify-content-between">
          {{-- <h4 class="page-title mb-0 font-size-18">Edit Data Karyawan</h4> --}}

      </div>
  </div>
</div>
<!-- end page title -->

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="row">
        <div class="col-6">
        <div class="card">
            <h5 class="card-header p-3"> Edit Data Karyawan</h5>
            <div class="card-body mx-2">
                <form action="/dashboard/employees/{{ $user->id }}" method="POST">
                    @method('put')
                    @csrf
                        <div class="row">
                        <div class=" col-6 mb-3">
                          <label for="name" class="form-label">Nama</label>
                          <input type="text" class="form-control" id="name" name="name" required value="{{ old('name', $user->name) }}">
                        </div>
                        <div class=" col-6 mb-3">
                          <label for="address" class="form-label">Alamat</label>
                          <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $user->address) }}">
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="divisions_id" class="form-label">Divisi</label>
                                <select class="form-control" id="divisions_id" name="divisions_id" required>
                                    @foreach ($divisions as $division)
                                    @if (old('divisions_id', $user->divisions_id) == $division->id)
                                    <option value="{{ $division->id }}" selected>{{ $division->name }}</option>
                                    @else
                                    <option value="{{ $division->id }}">{{ $division->name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                </div>
                        <div class="col-6 mb-3">
                          <label for="phonenumber" class="form-label">Nomor Telepon</label>
                          <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="{{ old('phonenumber', $user->phonenumber) }}"required>
                        </div>
                        </div>
                        <div class="row">
                        <div class="mb-3 col-6">
                          <label for="email" class="form-label">Email</label>
                          <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                        </div>
                        <div class="mb-3 col-6">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <a href="/dashboard/employees" class="btn btn-outline-dark my-3">Kembali</a>
                    <button class="btn btn-primary" type="submit">Perbarui Data</button>
                </form>
                </div>
                </div>
          </div>

    </div>

@endsection
