<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>vaidyah/signup</title>
        <link rel="icon" type="image/x-icon" href="images/logo v.png">
        <link rel="stylesheet" href="css/form.css">
    </head>
    <body>
        <div class="form">
            <h2>signup form</h2>
            <p>It's free and always will be.</p>
            <form action="" enctype="multipart/form-data">  
                <div class="error-text">Error</div>
                <div class="grid-details">
                    <div class="input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required pattern="[a-zA-Z'-'\s]*">
                    </div>
                    
                    <div class="input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required pattern="[a-zA-Z'-'\s]*">
                    </div>

                </div>
                <div class="input">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter Your Email" required>
                </div>
                <div class="input">
                    <label>Phone</label>
                    <input type="tel" name="phone" placeholder="Phone Number" required pattern="[0-9]{10}" oninvalid="this.setcustomvalidity('Enter 11 Digit Number')" oninput="this.setcustomvalidity('')">
                </div>  
                <div class="grid-details">
                    <div class="input">
                        <label>password</label>
                        <input type="password" name="pass" placeholder="Password" required>
                    </div>
                    
                    <div class="input">
                        <label>confirm password</label>
                        <input type="password" name="cpass" placeholder="Confirm Password" required>
                    </div>

                </div>
                <div class="submit">
                    <input type="submit" value="Signup Now" class="button">
                </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login Now</a></div>
        </div>
        <script src="js\register.js"></script>
    </body>
</html>
