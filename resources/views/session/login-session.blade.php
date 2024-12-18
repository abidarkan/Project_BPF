@extends('layouts.user_type.guest')

@section('content')

<main class="main-content mt-0">
  <section>
    <div class="page-header min-vh-100" style="background-image: url('../assets/img/BinusOutdoor.jpg'); background-size: cover; background-position: center;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
            <div class="card card-plain bg-white bg-opacity-75 mt-8">
              <div class="card-body">
                <div class="text-center mb-4">
                  <img src="../assets/img/Binus.png" class="navbar-brand-img h-100" alt="Binus Logo">
                </div>
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Selamat Datang di UKM Computer Science Binus</h3>
                
                  <p>Untuk bergabung dan menjadi bagian dari kami, silakan login atau buat akun baru.</p>
                </div>
                <form role="form" method="POST" action="/session">
                  @csrf
                  <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                    @error('email')
                      <p class="text-danger text-xs mt-2">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                    @error('password')
                      <p class="text-danger text-xs mt-2">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Masuk</button>
                  </div>
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-4 text-sm mx-auto">
                  Belum punya akun?
                  <a href="register" class="text-info text-gradient font-weight-bold">Daftar</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

@endsection
