<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="users-list-wrapper">
                    <div class="users-list-filter">
                        @if(session()->has('error') && !session()->get('error'))
                        <div class="alert alert-success alert-dismissible mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <div class="d-flex align-items-center">
                                <i class="bx bx-like"></i>
                                <span>
                                    {{ session()->get('message') }}
                                </span>
                            </div>
                        </div>
                        @endif
                        @if(session()->has('error') && session()->get('error'))
                        <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <div class="d-flex align-items-center">
                                <i class="bx bx-error"></i>
                                <span>
                                    {{ session()->get('message') }}
                                </span>
                            </div>
                        </div>
                        @endif
                        <div class="card col-12 col-sm-12 col-lg-8">
                            <div class="card-header">
                                <h4 class="card-title">SignUp</h4>
                            </div>
                            <div class="card-content" >
                                <div class="card-body">
                                    <form action="#" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-lg-12" style="margin-top:5px;">
                                                <input type="text" class="form-control" name="username" placeholder="User name" required>
                                            </div>
                                            <div class="col-12 col-sm-12 col-lg-12" style="margin-top:5px;">
                                                <input type="text" class="form-control" name="email" placeholder="Email" required>
                                            </div>
                                            <div class="col-12 col-sm-12 col-lg-12" style="margin-top:5px;">
                                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                                            </div>
                                            <div class="col-12 col-sm-12 col-lg-12" style="margin-top:5px;">
                                                <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password" required>
                                            </div>
                                            <div class="col-12 col-sm-12 col-lg-12" style="margin-top:5px;">
                                                <input type="text" class="form-control" name="country" placeholder="Country" >
                                            </div>
                                            <div class="col-12 col-sm-12 col-lg-12" style="margin-top:5px;">
                                                <input type="number" class="form-control" name="phone" placeholder="Phone" required>
                                            </div>
                                            <div class="col-12 col-sm-12 col-lg-12" style="margin-top:5px;">
                                                <input type="text" class="form-control" name="company_name" placeholder="Company Name" >
                                            </div>
                                            <div class="col-12 col-sm-12 col-lg-12" style="margin-top:5px;">
                                                <input type="text" class="form-control" name="type" placeholder="type" >
                                            </div>

                                            
                                            
                                            <div class="col-12 col-sm-12" style="margin-top: 10px">
                                                <button type="submit" class="btn btn-block btn-success glow">Register</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users list ends -->
            </div>
        </div>
    </div>
</body>
</html>