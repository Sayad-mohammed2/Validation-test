<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <main>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center">
                            <h1>Login</h1>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST"> <!-- Use empty action to submit to the same script -->
                                <div class="mb-3 p-3">
                                    <label for="email" class="form-label my-3">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="abc123@emial.com" aria-describedby="emailHelp" required />
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with you</div> -->
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label my-3">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required />
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe" />
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                </div>
                                <div class="d-flex w-100">
                                    <button type="submit" name="log" class="btn btn-primary mx-auto w-50 my-3">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>

<?php
include 'conexion.php';

if (isset($_POST['log'])) {
    $logEmail = $_POST['email'];
    $logPassword = $_POST['password'];

    $sql = "SELECT * FROM validation_tab WHERE email = :email AND password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $logEmail);
    $stmt->bindParam(':password', $logPassword);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $row['file_chosen'] = $img;

    if ($row) {
        $_SESSION['user'] = $logEmail;
        header('Location: testRig.php?image='.$img);
        exit();
    } else {
        echo "Invalid email or password.";
    }
}
?>
