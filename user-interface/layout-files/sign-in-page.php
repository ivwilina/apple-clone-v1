<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Store</title>
    <link rel="stylesheet" href="/baitaplon-final/user-interface/css-files/sign-in-page.css">
    <link rel="shortcut icon" href="/baitaplon-final/img-files/icons/apple-favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600&display=swap"
        rel="stylesheet">
</head>

<body>
    <form action="">

        <div class="navbar">
            <?php 
            include_once './default-header.php';
            ?>
        </div>
    
        <section>

            <div class="sign-in-wrapper">
                <div class="sign-in-container">
                    <div class="sign-in-content">
                        <div class="sign-in-header">
                            <span class="header-title">Sign in to Apple Store</span>
                        </div>
                        <div class="sign-in-info">
                            <input type="text" name="" required>
                            <label class="info-title" id="title-username" title="Username">Username</label>
                        </div>
                        <div class="sign-in-info">
                            <input type="password" name="" required>
                            <label class="info-title" id="title-password" title="Password">Password</label>
                        </div>
                        <div class="forget">
                            <a href="#">Forget password?</a>
                        </div>
                        <div class="sign-in-button">
                            <button>Sign in</button>
                        </div>
                        <div class="register">
                            <label for="">Don't have an accout?</label>
                            <a href="#">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>

</html>