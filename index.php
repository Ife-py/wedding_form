<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding invite</title>
    <link rel="stylesheet" href="./style/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary"><b>Welcome to Tayo and Temi Invitation Form</b></div>
                    <div class="card-body">
                        <form action="form.php" method="post">
                            <div class="form-element my-4">
                                <input type="text" class="form-control" name="name" placeholder="Full name:">
                            </div>
                            <div class="form-element my-4">
                                <input type="email" class="form-control" name="email" placeholder="Email:">
                            </div>
                            <div class="form-element my-4">
                                <input type="number" class="form-control" name="phone_number" placeholder="Phone number:">
                            </div>
                            <div class="form-element my-4">
                                <input type="text" class="form-control" name="address" placeholder="Home address:">
                            </div>
                            <div class="form-element my-4">
                                <select name="rsvp" class="form-control">
                                    <option value="">Will you be present for the Wedding:</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-element">
                                <input type="submit" class="btn btn-success" name="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>