
<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
        name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, admin pro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, "
    />
    <meta
        name="description"
        content="Admin Pro is powerful and clean admin dashboard template"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Admin Pro Template by WrapPixel</title>
    <link
        rel="canonical"
        href="https://www.wrappixel.com/templates/ampleadmin/"
    />
    <!-- Favicon icon -->
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="../../assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link href="../../css/style-log.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="main-wrapper">

    <div class="row auth-wrapper gx-0">
        <div class="col-lg-4 col-xl-3 bg-info auth-box-2 on-sidebar">
            <div class="h-100 d-flex align-items-center justify-content-center">
                <div class="row justify-content-center text-center">
                    <div class="col-md-7 col-lg-12 col-xl-9">
                        <h2 class="text-white mt-4 fw-light">
                            Build
                            <span class="font-weight-medium">Social & Role </span> Web
                            Apps with Socialite  and Spatie package
                        </h2>
                        <p class="op-5 text-white fs-4 mt-4">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="
            col-lg-8 col-xl-9
            d-flex
            align-items-center
            justify-content-center
          "
        >
            <div class="row justify-content-center w-100 mt-4 mt-lg-0">
                <div class="col-lg-6 col-xl-3 col-md-7">
                    <div class="card" id="registerform">

                        <div class="card-body">
                            <h2>Sign Up Form</h2>
                            <p class="text-muted fs-4">
                                Enter given details for new account
                            </p>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input id="name" type="text" class="form-control form-input-bg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label for="tb-rfname">Full Name</label>
                                    <div class="invalid-feedback">Full name is required</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input id="email" type="email" class="form-control form-input-bg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label for="tb-remail">Email</label>
                                    <div class="invalid-feedback">Email is required</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input id="password" type="password" class="form-control form-input-bg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label for="text-rpassword">Password</label>
                                    <div class="invalid-feedback">Password is required</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input id="password-confirm" type="password" class="form-control form-input-bg" name="password_confirmation" required autocomplete="new-password">
                                    <label for="text-rcpassword">Confirm Password</label>
                                    <div class="invalid-feedback">Password is required</div>
                                </div>
                                <div class="d-flex align-items-stretch button-group">
                                    <button type="submit" class="btn btn-info btn-lg px-4">
                                        Submit
                                    </button>
                                    <a
                                        href="javascript:void(0)"
                                        id="to-login2"
                                        class="
                          btn btn-lg btn-light-secondary
                          text-secondary
                          font-weight-medium
                        "
                                    >Cancel</a
                                    >
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- Login box.scss -->
    <!-- -------------------------------------------------------------- -->
</div>

<script>
    $(".preloader").fadeOut();
    // ---------------------------
    // Login and Recover Password
    // ---------------------------
    $("#to-recover").on("click", function () {
        $("#loginform").hide();
        $("#recoverform").fadeIn();
    });

    $("#to-login").on("click", function () {
        $("#loginform").fadeIn();
        $("#recoverform").hide();
    });

    $("#to-register").on("click", function () {
        $("#loginform").hide();
        $("#registerform").fadeIn();
    });

    $("#to-login2").on("click", function () {
        $("#loginform").fadeIn();
        $("#registerform").hide();
    });

    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        "use strict";

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll(".needs-validation");

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener(
                "submit",
                function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add("was-validated");
                },
                false
            );
        });
    })();
</script>
</body>
</html>
