<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign_up</title>
    <link rel="stylesheet" href="style/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="form.php" method="post">
                            <div>
                                <label for="name"class="form-label mt-4">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name:"required>
                                <label for="email" class="form-label mt-4">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email:">
                            </div>
                            <div>
                                <label for="password" class="form-label mt-4">Password</label>
                                <input type="password" class="form-control" name="password" id="password"placeholder="Password">
                            </div>
                            <div class="form-element">
                                <input type="submit" class="btn btn-success" name="sign_up" value="submit" >
                            </div>
                                
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>