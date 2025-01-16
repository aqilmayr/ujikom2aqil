<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
      <style>
        .background-radial-gradient {
          background-color: hsl(218, 41%, 15%);
          background-image: radial-gradient(650px circle at 0% 0%,
              hsl(218, 41%, 35%) 15%,
              hsl(218, 41%, 30%) 35%,
              hsl(218, 41%, 20%) 75%,
              hsl(218, 41%, 19%) 80%,
              transparent 100%),
            radial-gradient(1250px circle at 100% 100%,
              hsl(218, 41%, 45%) 15%,
              hsl(218, 41%, 30%) 35%,
              hsl(218, 41%, 20%) 75%,
              hsl(218, 41%, 19%) 80%,
              transparent 100%);
        }
    
        #radius-shape-1 {
          height: 220px;
          width: 220px;
          top: -60px;
          left: -130px;
          background: radial-gradient(#cf943a, #bb4704);
          overflow: hidden;
        }
    
        #radius-shape-2 {
          border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
          bottom: -60px;
          right: -110px;
          width: 300px;
          height: 300px;
          background: radial-gradient(#cf943a, #bb4704);
          overflow: hidden;
        }
    
        .bg-glass {
          background-color: hsla(0, 0%, 100%, 0.9) !important;
          backdrop-filter: saturate(200%) blur(25px);
        }
      </style>
</head>
<body>
  <section class="background-radial-gradient overflow-hidden">
    
      <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5" style="height: 100vh; display: flex;"> 
        <div class="row gx-lg-5 align-items-center mb-5">
          <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
            <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
              Aplikasi Kasir Cepat, Akurat <br />
              <span style="color: hsl(36, 94%, 45%)">& Mudah Digunakan</span>
            </h1>
            <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
              Permudah transaksi bisnis Anda dengan aplikasi kasir yang cepat, akurat, 
              dan mudah digunakan, memberikan pengalaman berbelanja yang lebih efisien dan terorganisir, s
              erta mendukung perkembangan usaha Anda.
            </p>
          </div>
    
          <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
            <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
            <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
    
            <div class="card bg-glass">
              <div class="card-body px-4 py-5 px-md-5">
                <form method="POST" action="{{ url('/login') }}">
                  @csrf
                  <!-- 2 column grid layout with text inputs for the first and last names -->

                  <div class="title">
                    <center>
                      <a href="{{ route('welcome') }}">
                        <img src="{{ asset('assets/media/logos/logokasir.png') }}" style="height: 70px; width: 70px;">
                    </a>
                    
                      <h1> LOG IN </h1>
                      <h6>Welcome Back</h6>
                      <br>
                    </center>
  
    
                  <!-- Email input -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Email address</label>
                    <input type="email" id="form3Example3" class="form-control" />
                  </div>
    
                  <!-- Password input -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">Password</label>
                    <input type="password" id="form3Example4" class="form-control" />
                  </div>

                  <div>
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember me</label>
                </div>
    
                  <!-- Submit button -->
                  <center>
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                      Log In
                    </button>
                  </center>
  
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
</body>
</html>