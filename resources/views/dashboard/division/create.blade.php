@extends('dashboard.layouts.main')

@section('container')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            {{-- <h4 class="page-title mb-0 font-size-18">Tambah Divisi</h4> --}}

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
        <h5 class="card-header p-3">Tambah Divisi</h5>
        <div class="card-body mx-2">
            <form action="/dashboard/divisions" method="POST">
                @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Divisi</label>
                            <input type="name" class="form-control" id="name" name="name" placeholder="CEO" autofocus required>
                        </div>
                    <button class="btn btn-primary py-2 mt-3" type="submit">Tambah</button>
                </div>
            </form>
            </div>
        </div>
</div>

@endsection
