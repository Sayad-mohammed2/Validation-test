<!--  -->
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <!--  -->
    <main>
        <form class="container my-5 p-5" action="register.php" method="post" enctype="multipart/form-data">

            <div class="row">
                <h3 class="text-center my-5">ENTER INFORMATION </h3>
                <div class="row g-3">
                    <div class="py-2 my-2  col">
                        <label class="p-2" for="firstName"> First name</label>
                        <input name='firstName' type="text" class="form-control" placeholder="First name" aria-label="First name" required>
                    </div>
                    <div class="py-2 my-2  col">
                        <label class="p-2" for="lastName"> Last name</label>
                        <input name="lastName" type="text" class="form-control" placeholder="Last name" aria-label="Last name" required>
                    </div>
                </div>
                <div class="py-2 my-2  col-12">
                    <label class="p-2" for="inputAddress" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 MY,Adress location" required>
                </div>
                <div class="py-2 my-2  col-12">
                    <label class="p-2" for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="abcd123@email.com" required>
                </div>
                <div class="row g-3">
                    <div class="py-2 my-2  col">
                        <label class="p-2" for="psw"> Password</label>
                        <input name="password" type="password" class="form-control" placeholder="password" aria-label="password" required>
                    </div>
                    <div class="py-2 my-2  col">
                        <label class="p-2" for="pswconfirm"> Confirme password</label>
                        <input name="confirmPass" type="password" class="form-control" placeholder="Confirme your password" aria-label="password" required>
                    </div>
                </div>


                <div class="row g-3">
                    <div class="py-2 my-2  col">
                        <label for="birthdate">sexe</label>
                        <select class="form-select form-select-" name="sexe" required>
                            <option selected>Open this select and choose your sexe</option>
                            <option value="m">Male</option>
                            <option value="f">Female</option>
                            <option value="o">Other </option>
                        </select>
                    </div>

                    <div class="py-2 my-2  col">
                        <label for="birthdate">Birth Date</label>
                        <input type="date" id="birthdate" name="birth" class="form-control" required>
                    </div>

                    <div class="py-2 my-2  col">
                        <label for="file">Upload image:</label>
                        <input type="file" name="file" accept="jpg, png, jpge" class="form-control" >
                    </div>
                </div>

                <div class="col-12 my-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="validCheck" required>
                        <label class="form-check-label" for="">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>

                <input name="validation" type="submit" value="submit" class="w-25 p-2 mx-auto my-3">
            </div>



        </form>
    </main>


    <footer>

    </footer>

    <?php
     include 'test.php';
      // include 'uploadImg.php';
    ?>
    
    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
