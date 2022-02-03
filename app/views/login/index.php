<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= BASEURL ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">

    <style>
        body {
            background: #f8f9fd;
        }
    </style>
</head>

<body>
    <section id="admin">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                    <form action="<?= BASEURL ?>/Admin/processLogin" method="POST">
                        <div class="card p-4">
                            <span class="text-center mb-3">
                                <i class="fas fa-user-circle fa-5x" style="color:#0d6efd;"></i>
                            </span>
                            <h4 class="text-center mb-4">Login Admin</h4>
                            <?php FlasherLogin::flash(); ?>
                            <div class="input-group my-1">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="input-group my-1">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary mt-2" name="login">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="<?= BASEURL ?>/js/bootstrap.bundle.min.js"></script>

</body>

</html>