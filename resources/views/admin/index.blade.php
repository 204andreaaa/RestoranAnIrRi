@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
          <h4>Simple Table</h4>
          <div>
            <a href="/add" class="btn btn-primary">Tambah data</a>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-md">
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Foto</th>
                <th>Action</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Nasi Ayam Bakar</td>
                <td>20.000</td>
                <td><div class="badge badge-success">Active</div></td>
                <td><a href="#" class="btn btn-warning">Edit</a>&nbsp;<a href="#" class="btn btn-danger">Hapus</a></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Kusnadi</td>
                <td>2017-01-11</td>
                <td><div class="badge badge-danger">Not Active</div></td>
                <td><a href="#" class="btn btn-warning">Edit</a>&nbsp;<a href="#" class="btn btn-danger">Hapus</a></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="card-footer text-right">
          <nav class="d-inline-block">
            <ul class="pagination mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>

@endsection