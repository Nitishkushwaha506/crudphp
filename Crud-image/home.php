<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="css/all.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <script href="js/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 mx-auto mt-4">
                <div class="card">
                    <div class="card-header">
                        <h2>PHP-CRUD
                            <a href="register.php" class="btn btn-primary">Register/add</a>
                        </h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-md-center">
                            <thead >
                                <tr>
                                    <th>Sr No</th>
                                    <th>Name</th>
                                    <th>email</th>
                                    <th>Phone</th>
                                    <th>College</th>
                                    <th>Password</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nitish</td>
                                    <td>nitish@gmail.com</td>
                                    <td>8115456506</td>
                                    <td>MMPIT </td>
                                    <td>lkjhgfds</td>
                                    <td>
                                        <a href="update.php" class="btn btn-success">Edit</a>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>