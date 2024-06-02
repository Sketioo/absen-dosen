@extends('dashboard.layouts.main')

@section('container')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            {{-- <h4 class="page-title mb-0 font-size-18">Edit Data Divisi</h4> --}}
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
            <h5 class="card-header p-3"> Edit Data Divisi</h5>
            <div class="card-body mx-2">
                <form action="/dashboard/divisions/{{ $division->id }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Divisi</label>
                        <input type="name" class="form-control" id="name" name="name" placeholder="CEO" value="{{ old('name', $division->name) }}" required>
                    </div>
                    <a href="/dashboard/divisions" class="btn btn-outline-dark my-3">Kembali</a>
                    <button class="btn btn-primary" type="submit">Perbarui Divisi</button>
                </form>
            </div>
            </div>
        </div>

            
    </div>

@endsection
