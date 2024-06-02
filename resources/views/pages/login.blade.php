
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets')}}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            
                        </div>
                        <div class="card-body pt-5">
                          @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            @if (session()->has('errorlogin'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('errorlogin') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
                            <div class="p-2">
                                <form class="form-horizontal" action="/login" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="username">Username</label>
                                        {{-- <input type="text" class="form-control" id="username" placeholder="Enter username"> --}}
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" autofocus required>
                                        {{-- <label for="email">Email address</label> --}}
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        {{-- <input type="password" class="form-control" id="userpassword"
                                        placeholder="Enter password"> --}}
                                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customControlInline">
                                        <label class="form-check-label" for="customControlInline">Remember
                                            me</label>
                                    </div>

                                    <div class="mt-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log
                                            In</button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>©
                            <script>document.write(new Date().getFullYear())</script> Qovex. Crafted with <i
                                class="mdi mdi-heart text-danger"></i> by Themesbrand
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets')}}/js/sb-admin-2.min.js"></script>

</body>

</html>