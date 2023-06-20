<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <title>My Portofolio | Riki Ahmad Fauzan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <style type="text/css">
        .card {
            background-color: var(--bs-gray-900);
        }

        .navbar .navbar-nav .nav-link:hover {
            color: var(--bs-gray-500);
        }

        .navbar .navbar-nav .nav-link::after {
            content: '';
            display: block;
            padding-bottom: 0.5rem;
            border-bottom: 0.1rem solid var(--bs-gray-500);
            transform: scaleX(0);
            transition: 0.2s linear;
        }

        .navbar .navbar-nav .nav-link:hover::after {
            transform: scaleX(0.6);
        }
    </style>
</head>

<body>

    <!--Navbar-->

    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">{{ $profile->namaLengkap }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
             <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#projects">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <!--Akhir Navbar-->

    <!--Home-->

    <section id="home" class="pt-5">
        <div class="container-fluid p-0">
          <div class="p-5 text-light text-center">
            @if (file_exists('storage/' . $profile->fotoProfile))
            <img src="/storage/{{ $profile->fotoProfile }}" alt="riki ahmad fauzan" width="200" class="rounded-circle img-thumbnail">
        @endif
            <h2 class="mt-3 fw-bold text-black">{{ $profile->namaLengkap }}</h2>
            <p class="fs-5 text-black">{{ $profile->status }}</p>
          </div>
        </div>
      </section>

    <!--Akhir Home-->

    <!--About Me-->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>About Me</h2>
            </div>

            <div class="row">
                    @if (file_exists('storage/' . $profile->fotoProfile))
                        <img src="/storage/{{ $profile->fotoProfile }}" alt="" class="col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start">
                    @endif
                <div class="col-lg-8 d-flex flex-column align-items-stretch">
                    <div class="content ps-lg-4 d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Nama Lengkap:</strong> <span>{{ $profile->namaLengkap }}</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span>{{ $profile->tempatTinggal }}</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Tangal Lahir:</strong> <span>{{ $profile->tanggalLahir }}</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Status</strong> <span>{{ $profile->status }}</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Jenis Kelamin:</strong> <span>{{ $profile->jenisKelamin }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Hobi:</strong>{{ $profile->hobi }}<span><a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Akhir About-->

    <!--My Project-->
    <section id="projects" class="pt-5">
        <div class="container text-light">
            <div class="p-5 text-dark text-center">
                <h3 class="fw-bold mb-3">My Projects</h3>
                <div class="row justify-content-center">
                    @foreach ($portofolio as $item)
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img src="/storage/{{ $item->project }}" width="180"
                                    height="180"class="card-img-top" alt="Projects 1">
                                <label for="" class="text-white bg-black">
                                    <h3>{{ $item->namaProject }}</h3>
                                </label>
                                <div class="card-body">
                                    <p class="card-text text-white">{{ $item->desProject }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>



    <!--Akhir Projects-->

    <!--Awal Contact-->

    <section id="contact" class="pt-5">
        <div class="container text-dark">
            <div class="p-5">
                <h3 class="fw-bold text-center mb-3">Contact Me</h3>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action="/contact/create" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap<span>*</span></label>
                                <input type="text" class="form-control" name="namaLengkap">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email<span>*</span></label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="pesan" class="form-label">Pesan<span>*</span></label>
                                <textarea class="form-control" name="pesan" cols="" rows="3"></textarea>
                            </div>
                            <button type="submit" class=" btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Akhir Contact -->


    <!-- Footer -->
    <footer class="footer text-center bg-success">
        <div class="container">
            <div class="row">
                <!-- Footer Social Icons-->
                <div class="col py-3">

                    <a class="btn btn-outline-light btn-social mx-1"
                        href="https://wa.me/+62{{ $profile->whatsapp }}"><i class="fab fa-fw fa-whatsapp"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://t.me/{{ $profile->telegram }}"><i
                            class="fab fa-fw fa-telegram"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1"
                        href="https://www.instagram.com/{{ $profile->instagram }}"><i
                            class="fab fa-fw fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1"
                        href="https://twitter.com/{{ $profile->twittter }}"><i
                            class="fab fa-fw fa-twitter"></i></a><br>
                    <small>Copyright &copy;iki 2023</small>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>



