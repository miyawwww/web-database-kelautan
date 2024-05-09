<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h2>Login</h2>
                </div>
                <div class="card-body">
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input type="fullName" id="fullName" class="form-control" name="fullName" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" name="email" required />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control" name="password" required />
                        </div>

                        <p>Don't have an account? <a href="signup.php">Sign up now.</a></p>

                        <form action="login.php" method="post">
                            <input type="submit" class="btn btn-primary" formaction="index.html" value="Submit"/>
                        </form>
                        
                    </form>
                </div>

                <div class="card-footer">
                    <small>Marine Treasure</small>
                </div>
            </div>
        </div>
    </div>
</body>
</html>