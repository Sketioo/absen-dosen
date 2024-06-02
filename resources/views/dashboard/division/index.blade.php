@extends('dashboard.layouts.main')

@section('container')
      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <a href="/dashboard/divisions/create" class="btn btn-success">Tambah Data</a>
        </div>
      </div>
      <br>
      <!-- end page title -->

    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card mb-3">
                <h5 class="card-header p-3"><i class="fa-solid fa-circle-info"></i> Divisi</h5>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NAMA DIVISI</th>
                            <th scope="col">AKSI</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($divisions as $division)
                            <tr>
                                <th scope="row">{{ $division->id }}</th>
                                <td>{{ $division->name }}</td>
                                <td><a href="/dashboard/divisions/{{ $division->id }}/edit" class="badge bg-primary border-0">Edit</a>
                                    <form action="/dashboard/divisions/{{ $division->id }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="badge bg-danger border-0" data-bs-toggle="modal" data-bs-target="#exampleModal">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
              </div>
        </div>
        
    </div>

    <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="fa-solid fa-circle-exclamation"></i> Konfirmasi Hapus</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h5>Apakah Anda yakin ingin menghapus data ini?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <form action="/dashboard/divisions/{{ $division->id }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Hapus</button>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
