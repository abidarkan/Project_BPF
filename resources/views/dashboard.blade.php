@extends('layouts.user_type.guest')

@section('content')

<main class="main-content mt-0">
    <section>
        <div class="page-header min-vh-75">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Card Section -->
                    <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-8">
                            <!-- Card Header with Image and Title -->
                            <div>
                                <img src="../assets/img/Binus.png" class="navbar-brand-img h-100 w-100" alt="Binus Logo">
                            </div>
                            <div class="card-header pb-0 text-left bg-transparent">
                                <h3 class="font-weight-bolder text-info text-gradient">Selamat Datang di UKM Computer Science Binus</h3>
                                <p class="mb-0">Kami adalah komunitas mahasiswa di bidang teknologi dan ilmu komputer di Universitas Bina Nusantara.</p>
                                <p class="mb-0">Temui pengurus kami:</p>
                                <ul>
                                    <li><b>Ketua:</b> [Nama Ketua]</li>
                                    <li><b>Wakil Ketua:</b> [Nama Wakil Ketua]</li>
                                    <li><b>Divisi Teknologi:</b> [Nama Divisi Teknologi]</li>
                                    <li><b>Divisi Pengembangan Karir:</b> [Nama Divisi Pengembangan Karir]</li>
                                </ul>
                                <p class="mb-0">Untuk bergabung dan menjadi bagian dari kami, silakan login atau buat akun baru.</p>
                            </div>

                            <!-- Card Body with Form -->
                            <div class="card-body">
                                <form role="form" method="POST" action="/session">
                                    @csrf
                                    <label>Email</label>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="admin@softui.com" aria-label="Email" aria-describedby="email-addon">
                                        @error('email')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <label>Password</label>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="secret" aria-label="Password" aria-describedby="password-addon">
                                        @error('password')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Masuk</button>
                                    </div>
                                </form>
                            </div>

                            <!-- Card Footer with Sign-Up Link -->
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    Belum punya akun? 
                                    <a href="register" class="text-info text-gradient font-weight-bold">Daftar</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Background Image Section -->
                    <div class="col-md-6 d-none d-md-block">
                        <div class="oblique position-absolute top-0 h-100 d-md-block">
                            <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0" style="background-image:url('../assets/img/Kids.jpg')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
