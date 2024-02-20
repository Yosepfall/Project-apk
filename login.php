<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/sb-admin-2.min.css">
    
</head>
<body>
    <div class="login-box mx-auto mt-5" style="width:350px;">
    <h1 class="h1-mb-5">Silahkan login</h1>
        <form action="index.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-control-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-control-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary"">Login</button>
                <button class="btn btn-success" type="reset" >Reset</button>
            </div>
        </form>
</div>
    
</body>
</html>