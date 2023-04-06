<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <!-- sign in form -->
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                                    <form class="mx-1 mx-md-4">
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <!-- name field -->
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="name" class="form-control" name="name" />
                                                <label class="form-label" for="form3Example1c">Your Name</label>
                                                <label for="" id="name_msg"></label>
                                            </div>
                                        </div>
                                        <!-- email field -->
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" id="email" class="form-control" name="email" />
                                                <label class="form-label" for="form3Example3c">Your Email</label>
                                                <label for="" id="email_msg"></label>
                                            </div>
                                        </div>
                                        <!-- password field -->
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="pswd" class="form-control" name="pswd" />
                                                <label class="form-label" for="form3Example4c">Password</label>
                                                <label for="" id="pswd_msg"></label>
                                            </div>
                                        </div>
                                        <!-- confirm password field -->
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="cpswd" class="form-control" name="cpswd" />
                                                <label class="form-label" for="form3Example4cd">Repeat your password</label>
                                                <label for="" id="cpswd_msg"></label>
                                            </div>
                                        </div>
                                        <!-- login and submit button -->
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <input type="button" class="btn btn-primary btn-lg" value="submit" id="submit"> </input>
                                            <a href="login.php" class="btn btn-info ms-4">Login</a>
                                        </div>
                                    </form>
                                    <span id="msg"></span>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="./JS/script.js"></script>

</html>