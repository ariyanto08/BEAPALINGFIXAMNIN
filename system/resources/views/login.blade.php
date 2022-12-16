<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ url('public') }}/assets/images/logo-FIX.png" type="image/png" />
    <!--plugins-->
    <link href="{{ url('public') }}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{ url('public') }}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{ url('public') }}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ url('public') }}/assets/css/pace.min.css" rel="stylesheet" />
    <script src="{{ url('public') }}/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ url('public') }}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/app.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/icons.css" rel="stylesheet">
    <title>BCukai Ketapang - LOGIN</title>
</head>

<body class="bg-theme bg-theme2">
    <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="mb-4 text-center">
                            <img src="{{ url('public') }}/assets/images/LOGO-ADMIN.svg" width="180" alt="" />
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">LOGIN</h3>
                                    </div>
                                    <div class="form-body">
                                        @include('utils.notif')
                                        <form class="row g-3" action="{{ url('login') }}" method="post">
                                            @csrf
                                            <div class="col-12">
                                                <label for="inputNIP" class="form-label">NIP</label>
                                                <input type="nip" class="form-control" id="inputNIP"
                                                    placeholder="NIP" name="nip">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Enter
                                                    Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input name="password" type="password" class="form-control border-end-0"
                                                        id="inputChoosePassword" placeholder="Enter Password"> <a
                                                        href="javascript:;" class="input-group-text bg-transparent"><i
                                                            class='bx bx-hide'></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckChecked" checked>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckChecked">Remember Me</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-light"><i
                                                            class="bx bxs-lock-open"></i>Sign in</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="{{ url('public') }}/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="{{ url('public') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('public') }}/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="{{ url('public') }}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="{{ url('public') }}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!--Password show & hide js -->
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
    <!--app JS-->
    <script src="{{ url('public') }}/assets/js/app.js"></script>
</body>

</html>
