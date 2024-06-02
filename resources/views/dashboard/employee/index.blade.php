@extends('dashboard.layouts.main')

@section('container')

<!-- start page title -->
<div class="row">
  <div class="col-12">
      <div class="page-title-box d-flex align-items-center justify-content-between">
          {{-- <h4 class="page-title mb-0 font-size-18">Data Karyawan</h4> --}}

          <div class="page-title-right">
              <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item"><a href="/dashboard/employees/create" class="btn btn-success">Tambah Data</a></li>
              </ol>
          </div>

      </div>
  </div>
</div> <br>
<!-- end page title -->

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="row">
    <div class="col">
        <div class="card mb-3">
            <h5 class="card-header p-3"> Karyawan</h5>
            <div class="card-body">
                <table class="table table-striped table-hover" id="datatable">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">DIVISI</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">NOMOR TELEPON</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>

                            <td>
                                @if ($user->division)
                                  {{ $user->division->name }}
                                @else
                                  <p class="text-danger"><i class="fa-solid fa-triangle-exclamation"></i> Division does not exist</p>
                                @endif
                            </td>

                            <td>{{ $user->address }}</td>
                            <td>{{ $user->phonenumber }}</td>
                            <td>{{ $user->email }}</td>
                            <td><a href="/dashboard/employees/{{ $user->id }}/edit" class="badge bg-primary border-0 text-light">Edit</a>
                                <form action="/dashboard/employees/{{ $user->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="badge bg-danger border-0 text-light" data-bs-toggle="modal" data-bs-target="#deleteData">Hapus</button>
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
  {{-- <div class="modal fade" id="deleteData" tabindex="-1" aria-labelledby="deleteDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteDataLabel"><i class="fa-solid fa-circle-exclamation"></i> Konfirmasi Hapus</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h5>Apakah Anda yakin ingin menghapus data ini?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <form action="/dashboard/employees/{{ $user->id }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Hapus</button>
          </form>
        </div>
      </div>
    </div>
  </div> --}}


@endsection
