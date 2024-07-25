
<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
    <html lang="en">
    <head>
        <STyle>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
.container{
    height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #016dcb;
    column-gap: 30px;
}
.form{
    position: absolute;
    max-width: 430px;
    width: 100%;
    padding: 30px;
    border-radius: 6px;
    background: white;
}
.form.signup{
    opacity: 0;
    pointer-events: none;
}
.forms.show-signup .form.signup{
    opacity: 1;
    pointer-events: auto;
}
.forms.show-signup .form.login{
    opacity: 0;
    pointer-events: none;
}
header{
    font-size: 28px;
    font-weight: 600;
    color: #232836;
    text-align: center;
}
form{
    margin-top: 30px;
}
.form .field{
    position: relative;
    height: 50px;
    width: 100%;
    margin-top: 20px;
    border-radius: 6px;
}
.field input,
.field button{
    height: 100%;
    width: 100%;
    border: none;
    font-size: 16px;
    font-weight: 400;
    border-radius: 6px;
}
.field input{
    outline: none;
    padding: 0 15px;
    border: 1px solid#CACACA;
}
.field input:focus{
    border-bottom-width: 2px;
}
.eye-icon{
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    font-size: 18px;
    color: #8b8b8b;
    cursor: pointer;
    padding: 5px;
}
.field button{
    color: #fff;
    background-color: #0171d3;
    transition: all 0.3s ease;
    cursor: pointer;
}
.field button:hover{
    background-color: #016dcb;
}
.form-link{
    text-align: center;
    margin-top: 10px;
}
.form-link span,
.form-link a{
    font-size: 14px;
    font-weight: 400;
    color: #232836;
}
.form a{
    color: #0171d3;
    text-decoration: none;
}
.form-content a:hover{
    text-decoration: underline;
}
.line{
    position: relative;
    height: 1px;
    width: 100%;
    margin: 36px 0;
    background-color: #d4d4d4;
}
.line::before{
    content: 'Or';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #FFF;
    color: #8b8b8b;
    padding: 0 15px;
}
.media-options a{
    display: flex;
    align-items: center;
    justify-content: center;
}
a.facebook{
    color: #fff;
    background-color: #4267b2;
}
a.facebook .facebook-icon{
    height: 28px;
    width: 28px;
    color: #0171d3;
    font-size: 20px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #fff;
}
.facebook-icon,
img.google-img{
    position: absolute;
    top: 50%;
    left: 15px;
    transform: translateY(-50%);
}
img.google-img{
    height: 30px;
    width: 30px;
    object-fit: cover;
}
a.google{
    border: 1px solid #CACACA;
}
a.google span{
    font-weight: 500;
    opacity: 0.6;
    color: #232836;
}
@media screen and (max-width: 400px) {
    .form{
        padding: 20px 10px;
    }
    
}


        </STyle>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Login and Signup Form </title>
        <!-- CSS -->
        
        <?php
    session_start();    
    ?> 
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                       
    </head>
    <body>

        <div class = "alert">
            <?php
                if(isset($_SESSION['status'])){
                    echo "<h3>" .$_SESSION['status']."</h3>";
                    unset($_SESSION['status']);
                }
            ?>
        </div>
                   <!-- login -->


       <section class="container forms"id="login">
        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <form action="logincode.php" method="POST">
                    <div class="field input-field">
                        <input type="email" name = "email" placeholder="Email" class="input" required>
                    </div>
                    <div class="field input-field">
                        <input type="password" name = "password" placeholder="Password" class="password"  required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <div class="form-link">
                        <a href="password-reset.php" class="forgot-pass"></a>
                    </div>
                    <div class="field button-field">
                        <button type = "submit" name = "login_now_btn">Login</button>
                        
                    </div>
                </form>
                <div class="form-link">
                    <span>Don't have an account? <a href="singup.html" class="link signup-link">Signup</a></span>
                </div>
            </div>
               
               
            </div>



            <!-- Signup Form -->



            <div class="form signup">
                <div class="form-content">
      
                    <header>Signup Form</header>
                    <form action="connect.php" method="POST">
                        <div class="field input-field">
                            <input type="Name" name="name" placeholder="Name" class="input"  required>
                        </div>
                        <div class="field input-field">
                            <input type="email" name="email"  placeholder="Email" class="input"  required>
                        </div>
                        <div class="field input-field">
                            <input type="password" name="pass" placeholder="Create password" class="password"  required>
                        </div>
                        <div class="field input-field">
                            <input type="password" name="conpassword" placeholder="Confirm password" class="password"  required> 
                            <i class='bx bx-hide eye-icon'></i>
                        </div>
                        <div class="field button-field">
                            <button type="submit" name ="signup_btn">Signup</button>
                        </div>
                    </form>
                    <div class="form-link">
                        <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                    </div>
                </div>
              
               
            </div>
        </section>
        <!-- JavaScript -->
        <script>


const forms = document.querySelector(".forms"),
      pwShowHide = document.querySelectorAll(".eye-icon"),
      links = document.querySelectorAll(".link");
pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
        
        pwFields.forEach(password => {
            if(password.type === "password"){
                password.type = "text";
                eyeIcon.classList.replace("bx-hide", "bx-show");
                return;
            }
            password.type = "password";
            eyeIcon.classList.replace("bx-show", "bx-hide");
        })
        
    })
})      
links.forEach(link => {
    link.addEventListener("click", e => {
       e.preventDefault(); //preventing form submit
       forms.classList.toggle("show-signup");
    })
})
        </script>
    </body>
</html>