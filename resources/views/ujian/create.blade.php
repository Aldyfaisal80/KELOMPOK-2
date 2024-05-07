<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/brands.min.css"
        integrity="sha512-DJLNx+VLY4aEiEQFjiawXaiceujj5GA7lIY8CHCIGQCBPfsEG0nGz1edb4Jvw1LR7q031zS5PpPqFuPA8ihlRA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    <div class="container mt-4">
        <section class="h-100 h-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-8 col-xl-6">
                        <div class="card rounded-3">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
                                class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                                alt="Sample photo">
                            <div class="card-body p-4 p-md-5">
                                @if (Session::has('kunci'))
                                    <div>
                                        <h1 class="fs-1">{{ session('kunci') }}</h1>
                                    </div>
                                @endif
                                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Form Data Siswa Baru</h3>

                                <form class="px-md-2" method="POST" action="">
                                    @csrf
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="form3Example1q" class="form-control" id="form-control"
                                            name="name" />
                                        <label class="form-label" for="form3Example1q">Name</label>
                                    </div>
                                    `
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="form3Example1q" class="form-control" />
                                        <label class="form-label" for="form3Example1q">NIM</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="form3Example1q" class="form-control" />
                                        <label class="form-label" for="form3Example1q">Jurusan</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="form3Example1q" class="form-control" />
                                        <label class="form-label" for="form3Example1q">Semester</label>
                                    </div>
                                    <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-success btn-lg mb-1">Submit</button>
                                </form>

                            </div>
                        </div>



                    </div>
                </div>
            </div>
    </div>
    </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
