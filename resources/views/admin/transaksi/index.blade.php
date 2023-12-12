@extends('admin.layout.appadmin')
@section('content')
    <h1 class="mt-4">Transaksi</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('admin/produk/import') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            {{ csrf_field() }}
                            <input type="file" name="file" required="required">

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    <!-- batas modal -->

    <div class="card mb-4">
        {{-- <div class="card-header ">
            <a href="{{ url('admin/produk/create') }}" class="btn btn-primary" type="submit">
                <i class="fas fa-plus"></i> Tambah
            </a>
            <a href="{{ url('admin/produk/produkPDF') }}" class="btn btn-danger" type="submit">
                <i class="fas fa-file-pdf"></i> PDF
            </a>
            <a href="{{ url('admin/produk/produkPDF') }}" class="btn btn-danger" type="submit">
                <i class="fas fa-file-pdf">
            </a>
            <a href="{{ url('admin/produk/generatePDF') }}" class="btn btn-info" type="submit">
                <i class="fas fa-file-pdf"></i> Dowload PDF
            </a>
            <a href="{{ url('admin/produk/export') }}" class="btn btn-success"><i class="fas fa-file-excel"></i> Excel</a>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-upload"></i> Upload Data
            </button>
        </div> --}}
        <div class="card-body">
            <div class="table-responsive ">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="2">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Nama Pembeli</th>
                            <th>No Telepon</th>
                            <th>Status Pembayaran</th>
                            <th>Total Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    {{-- <tfoot>
                        <tr align="center">
                            <th>No</th>
                            <th>Nama Pembeli</th>
                            <th>No Telepon</th>
                            <th>Status Pembayaran</th>
                            <th>Total Harga</th>
                        </tr>
                    </tfoot> --}}
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($transaksi as $tran)
                            <tr align="center">
                                <td>{{ $no++ }}</td>
                                <td>{{ $tran->nama }}</td>
                                <td>{{ $tran->telp }}</td>
                                <td>{{ $tran->status }}</td>
                                <td>{{ $tran->total }}</td>
                                <td>
                                    <a href="{{ url('admin/transaksi/show/' . $tran->id) }}" class="btn btn-sm btn-info">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{url('admin/transaksi/edit/'.$tran->id)}}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
