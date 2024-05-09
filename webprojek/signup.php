<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="signup.css" />
</head>
<body>
    <div class="container">
        <div class="card col-md-6 col-md-offset-3">
            <div class="card card-primary">
                <div class="card-heading text-center">
                    <h1>Registration</h1>
                </div>

                <div class="card-body">
                    <form action="connect.php" method="post">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input
                            type="text"
                            class="form-control"
                            id="firstName"
                            name="firstName"
                            />
                        </div>

                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input
                            type="text"
                            class="form-control"
                            id="lasttName"
                            name="lastName"
                            />
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input
                            type="text"
                            class="form-control"
                            id="email"
                            name="email"
                            />
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="input-with-icon">
                                <input type="password" class="form-control" id="password" name="password">
                                <button type="button" class="toggle-password-btn" data-target="password">Show Password</button>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="repeatpassword">Repeat Password</label>
                            <div class="input-with-icon">
                                <input type="password" class="form-control" id="repeatpassword" name="repeatpassword">
                                <button type="button" class="toggle-password-btn" data-target="repeatpassword">Show Password</button>
                            </div>
                        </div>
                        
                        <p>Already have an acoount? <a href="signin.php">Sign in now.</a></p>

                        <form id="myForm" method="post" action="connect.php">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                        </form>

                        
                    </form>
                </div>
                <div class="card-footer text-right">
                    <small>Marine Treasure</small>
                </div>
            </div>
        </div>
    </div>

        <script>
    document.addEventListener("DOMContentLoaded", function() {
        const togglePasswordBtns = document.querySelectorAll('.toggle-password-btn');

        togglePasswordBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                const targetInput = document.getElementById(targetId);

                if (targetInput.type === 'password') {
                    targetInput.type = 'text';
                    this.textContent = 'Hide Password';
                } else {
                    targetInput.type = 'password';
                    this.textContent = 'Show Password';
                }
            });
        });
    });
</script>

        
        
    
</body>
</html>