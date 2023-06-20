{{-- @extends('layout')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Profile</h4>
            <table class="table table-responsive">
                <tr>
                    <th class="col col-2">Foto Profile</th>
                    <th class="col col-2">Nama Lengkap</th>
                    <th class="col col-2">Tempat Tinggal</th>
                    <th class="col col-2">Tanggal Lahir</th>
                    <th class="col col-2">Jenis Kelamin</th>
                    <th class="col col-2">Email</th>
                    <th class="col col-2">Hobi</th>
                </tr>
                @foreach ($profile as $key => $item)
                    <tr>
                        <td><img src="/storage/{{ $item->fotoProfile }}" alt="" width="100" height="100"></td>
                        <td>{{ $item->namaLengkap }}</td>
                        <td>{{ $item->tempatTinggal }}</td>
                        <td>{{ $item->tanggalLahir }}</td>
                        <td>{{ $item->jenisKelamin }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->hobi }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection --}}



@extends('layout')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Profile</h4>
                <form class="forms-sample" action="{{ $action }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label">Foto Profile</label>
                            <div class="input-group col-xs-12">
                                @if (file_exists('storage/' . $profile->fotoProfile))
                                <img src="/storage/{{ $profile->fotoProfile }}" alt="" width="100" height="100">
                                 @endif
                                <input type="text" class="form-control file-upload-info" disabled>
                                <span class="input-group-append">
                                    <input type="file" name="fotoProfile" id="fotoProfile" class="form-control bg-primary">
                                </span>
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input class="form-control" type="text" name="namaLengkap" id="namaLengkap" value="{{ $profile->namaLengkap }}"
                            placeholder="Full name">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input class="form-control" type="text" name="status" id="status" value="{{ $profile->status }}"
                            placeholder="Status">
                    </div>
                    <div class="form-group">
                        <label>Tempat Tinggal</label>
                      <textarea class="form-control" name="tempatTinggal" id="tempatTinggal" cols="10" rows="3" placeholder="Alamat">{{ $profile->tempatTinggal }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>TanggalLahir</label>
                        <input class="form-control" type="date" name="tanggalLahir" id="tanggalLahir" value="{{ $profile->tanggalLahir }}"
                            placeholder="Tanggal Lahir">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jenisKelamin" id="jenisKelamin">
                            <option value="{{ $profile->jenisKelamin }}">jenis-kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email" id="email" value="{{ $profile->email }}"
                            placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Hobi</label>
                        <input class="form-control" type="text" name="hobi" id="hobi" placeholder="Hobi" value="{{ $profile->hobi }}">
                    </div>
                    <div class="form-group">
                        <label>Whatsapp</label>
                        <input class="form-control" type="text" name="whatsapp" id="whatsapp" value="{{ $profile->whatsapp }}"
                            placeholder="No Whatsapp">
                    </div>
                    <div class="form-group">
                        <label>Instagram</label>
                        <input class="form-control" type="text" name="instagram" id="instagram" value="{{ $profile->instagram }}"
                            placeholder="Username Instagram">
                    </div>
                    <div class="form-group">
                        <label>Telegram</label>
                        <input class="form-control" type="text" name="telegram" id="telegram" value="{{ $profile->telegram }}"
                            placeholder="Username Telegram">
                    </div>
                    <div class="form-group">
                        <label>Twittter</label>
                        <input class="form-control" type="text" name="twittter" id="twittter" value="{{ $profile->twittter }}"
                            placeholder="Username twittter">
                    </div>
                    <button  type="submit" name="simpan" class="form-control btn btn-primary me-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection


