 @extends('layout')

 @section('content')
     <div class="col-12 grid-margin stretch-card">
         <div class="card">
             <div class="card-body">
                 <h4 class="card-title">Pesan Contact</h4>
                 <table class="table table-responsive">
                     <tr>
                         <th class="col col-3">Nama</th>
                         <th class="col col-3">email</th>
                         <th class="col col-3">pesan</th>
                         <th class="col col-1">Aksi</th>
                     </tr>
                     @foreach ($contact as $key => $item)
                         <tr>
                             <td>{{ $item->namaLengkap }}</td>
                             <td>{{ $item->email }}</td>
                             <td>{{ $item->pesan }}</td>
                             <td>
                                <a href="contact/hapus/{{ $item->id }}" class="btn btn-danger btn-sm">Delete</a>
                             </td>
                         </tr>
                     @endforeach
                 </table>
             </div>
         </div>
     </div>
 @endsection

 {{-- <div class="container-scroller">
     <div class="container-fluid page-body-wrapper  full-page-wrapper">
         <div class="content-wrapper d-flex align-items-center auth px-0">
             <div class="row w-100 mx-0">
                 <div class="col-lg-6 mx-auto">
                     <div class="auth-form-light rounded-3 text-left py-5 px-4 px-sm-5">
                         <div class="brand-logo">
                         </div>
                         <h1 class="text-center">Contact</h1>
                         <form class="pt-3" action="/contact/create" method="post">
                             @csrf
                             <div class="form-group">
                                 <input type="text" class="form-control form-control-lg" name="namaLengkap"
                                     placeholder="Nama Lengkap">
                             </div>
                             <div class="form-group">
                                 <input type="email" class="form-control form-control-lg" name="email"
                                     placeholder="Email">
                             </div>
                             <div class="form-group">
                                 <textarea class="form-control form-control-lg" name="pesan" cols="30" rows="10" placeholder="Masukan pesan"></textarea>
                             </div>
                             <div class="mt-3">
                                 <button type="submit" class="btn btn-sm mb-3 btn-primary col col-12">Simpan</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>

     </div>

 </div> --}}
