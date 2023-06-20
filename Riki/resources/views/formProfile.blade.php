{{-- <form action="{{ $action }}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>POTO PTOFILE</td>
            <td>
                @if (file_exists('storage/' . $profile->fotoProfile))
                    <img src="/storage/{{ $profile->fotoProfile }}" alt="" width="100" height="100"><br>
                @endif
                <br>
                <input type="file" name="fotoProfile" id="fotoProfile">
            </td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="namaLengkap" id="namaLengkap" value="{{ $profile->namaLengkap }}"></td>
        </tr>
        <tr>
            <td>Status</td>
            <td><input type="text" name="status" id="status" value="{{ $profile->namaLengkap }}"></td>
        </tr>
        <tr>
            <td>TANGGGAL LAHIR</td>
            <td><input type="date" name="tanggalLahir" id="tanggalLahir" value="{{ $profile->tanggalLahir }}"></td>
        </tr>
        <tr>
            <td valign="top">ALAMAT</td>
            <td>
                <textarea name="tempatTinggal" id="tempatTinggal" cols="30" rows="10">{{ $profile->tempatTinggal }}</textarea>
            </td>
        </tr>
        <tr>
            <td>JENIS KELAMIN</td>
            <td>
                <select name="jenisKelamin" id="jenisKelamin">
                    <option value="">jenis-kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" id="email" value="{{ $profile->email }}"></td>
        </tr>
        <tr>
            <td>hobi</td>
            <td><input type="text" name="hobi" id="hobi" value="{{ $profile->hobi }}"></td>
        </tr>
        </tr>
        <tr>
            <td colspan="2" align="right"><input type="submit" value="{{ $tombol }}" name="simpan"></td>
        </tr>
    </table>
</form> --}}


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
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="Upload Image">
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
                            <option value="{{ $profile->jenisKelamin }}"">jenis-kelamin</option>
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
                    <button  type="submit" value="{{ $tombol }}" name="simpan" class="form-control btn btn-primary me-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection


