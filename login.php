<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <nav class="navbar navbar-expand-lg" style="background-color: #808080; color: #fff;">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold fs-3 ms-2" href="#">UANG KAS </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class="row justify-content-center">
    <h1 class="text-center mt-5 mb-4">FORM LOGIN</h1>
        <div class="col-lg-6" style="border: 1px solid; padding: 30px;">
            <form method="post" action="aksi_login.php">
                <div>
                    <p class="mt-3 mb-1 fw-semibold">USERNAME :</p>
                    <input class="form-control" type="text" name="username">
                </div>
                <div>
                    <p class="mt-3 mb-1 fw-semibold">PASSWORD :</p>
                    <input class="form-control" type="password" name="password">
                </div>
                <?php
                session_start();

                if (isset($_SESSION['error'])) {
                    echo '<p class="text-danger text-center mt-4 mb-2">' . $_SESSION['error'] . '</p>';
                    unset($_SESSION['error']);
                }
                ?>
                <div class="text-center mt-4">
                    <button class="btn fw-semibold btn-primary me-2" style="padding: 5px 50px 5px 50px;" type="submit">LOGIN</button>
                </div>
            </form>
        </div>
    </div>
    </body>

</html