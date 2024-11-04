<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form class="" action="form.php" method="post">
                            <label class="form-label mt-4"><b>Input your details to Login:</b></label>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="input" name="email">
                                <label for="input">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="password"name="password">
                                <label for="password">Password:</label>
                            </div>
                            <button type="submit" name="login" value="login"class="btn btn-primary">Login</button>
                        </form>
                        <a href="sign_up.php" style="float:right">Sign_up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>