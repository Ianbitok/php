<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha256-2TnSHycBDAm2wpZmgdi0z81kykGPJAkiUY+Wf97RbvY=" crossorigin="anonymous">
    <title>Signup</title>
</head>
<body>
    <!-- Signup Form -->
    <form action="process_signup.php" method="post" class="p-5 w-50 mx-auto">
        <legend>Sign Up</legend>
        <div class="form-group mt-5">
            <label>Username:</label></br>
            <input type="text" name="username" class="form-control" placeholder="Enter your username" required/></br></br>
        </div>
        <div class="form-group">
            <label>Email:</label></br>
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required/></br></br>
        </div>
        <div class="form-group">
            <label>Password:</label></br>
            <input type="password" name="confirmPassword" class="form-control" placeholder="Enter a password" required/></br></br>
        </div>
        <div class="form-group">
            <label>Confirm Password:</label></br>
            <input type="password" name="password" class="form-control" placeholder="Confirm your password" required/></br></br>
        </div>
        <button type="submit" name="submit" class="btn btn-primary" value="Sign Up">Sign Up</button>
    </form>
</body>
</html>