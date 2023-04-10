@extends('layouts.admin')
@section('content')

<div class="row">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
        <h4>Data masukan user</h4>
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
              <th>Email</th>
              <th>Subject</th>
              <th>Deskripsi</th>
            </tr>
            @foreach($contacts as $contact)
            <tr>
              <td>{{ $contact->id  }}</td>
              <td>{{ $contact->nama }}</td>
              <td>{{ $contact->email }}</td>
              <td>{{ $contact->subject }}</td>
              <td>{{ $contact->deskripsi }}</td>
            </tr>
            @endforeach
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