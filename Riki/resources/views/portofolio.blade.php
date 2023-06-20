@extends('layout')

@section('content')
<h3 class="text-center">Data Portofolio</h3>
    <button type="button" class="btn btn-primary mt-2 btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Data
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="">Tambah Data Portofolio</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="forms-sample" action="/portofolio/create" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama Project</label>
                            <input type="text" class="form-control" name="namaProject" id="namaProject"
                                placeholder="Nama Project">
                        </div>
                        <div class="form-group">
                            <label">Upload Project</label>
                                <div class="input-group col-xs-12">

                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="Upload Image">
                                    <span class="input-group-append">
                                        <input type="file" name="project" id="project" width="" height=""
                                            class="form-control bg-primary">
                                    </span>
                                </div>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Project</label>
                            <textarea class="form-control" name="desProject" id="desProject" rows="4" placeholder="Deskripsi Project"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Project</h4>
                <table class="table table-responsive">
                    <tr>
                        <th class="col col-1">No</th>
                        <th class="col col-3">Nama Project</th>
                        <th class="col col-3">Foto Project</th>
                        <th class="col col-2">Deskripsi</th>
                        <th class="col col-2">Aksi</th>
                    </tr>
                    @foreach ($portofolio as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->namaProject }}</td>
                            <td><img src="/storage/{{ $item->project }}" width="100" height="100"></td>
                            <td>{{ $item->desProject }}</td>
                            <td>
                                <a href="portofolio/hapus/{{ $item->id }}" class="btn btn-danger btn-sm">Delete</a>
                                <a href="portofolio/edit/{{ $item->id }}" class="btn btn-warning btn-sm">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
