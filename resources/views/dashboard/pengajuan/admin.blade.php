@extends('dashboard.layouts.main')

@section('container')

<!-- start page title -->
<div class="row">
  <div class="col-12">
    <a href="/dashboard/pengajuan/create" class="btn btn-success">Tambah Data</a>
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
    <div class="col">
        <div class="card mb-3">
            <h5 class="card-header p-3"> Pengajuan</h5>
            <div class="card-body">
                <table class="table table-striped table-hover" id="datatable">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">TGL</th>
                        <th scope="col">JENIS</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($pengajuan as $user)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $user->tanggal }}</td>
                            <td>{{ $user->jenis }}</td>
                            <td>{{ $user->status == 1 ? "Setuju" : "Belum disetujui/Ditolak" }}</td>
                            <td>
                                @if ($user->status == 0) 
                                <form action="/dashboard/pengajuan/approve/{{ $user->id }}" method="POST" class="d-inline">
                                    @method('get')
                                    @csrf
                                    <button type="submit" class="badge bg-primary border-0 text-light" >Approve</button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
          </div>
    </div>
    </div>




@endsection
