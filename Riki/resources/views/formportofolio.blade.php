 @extends('layout')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Portofolio</h4>
                <form class="forms-sample" action="{{ $action }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama Project</label>
                        <input type="text" class="form-control" name="namaProject" id="namaProject" value="{{ $portofolio->namaProject }}"
                            placeholder="Nama Project">
                    </div>
                    <div class="form-group">
                        <label">Upload Project</label>
                            <div class="input-group col-xs-12">
                                @if (file_exists('storage/' . $portofolio->project))
                                <img src="/storage/{{ $portofolio->project}}" alt="100" width="100" height="">
                                 @endif
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <input type="file" name="project" id="project" width="100" height="100" class="form-control bg-primary">
                                </span>
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Project</label>
                        <textarea class="form-control" name="desProject" id="desProject" rows="4" placeholder="Deskripsi Project">{{ $portofolio->desProject}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
