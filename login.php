<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>signin</title>
        <link rel="icon" type="image/x-icon" href="images\logo v.png">
        <link rel="stylesheet" href="css\form.css">
    </head>
    <body>
        <div class="form">
            <h2>sign in form</h2>
            <form action="">
                <div class="error-text">Error</div>
                <div class="input">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter Your Email" required>
                </div> 
                    <div class="input">
                        <label>password</label>
                        <input type="password" name="pass" placeholder="Password" required>
                    </div>
                <div class="submit">
                    <input type="submit" value="Signup Now" class="button">
                </div>
            </form>
            <div class="link">Not Signed up? <a href="register.php">signup Now</a></div>
        </div>
    </body>
</html>
