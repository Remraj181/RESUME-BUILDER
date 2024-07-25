<!DOCTYPE html>
<html lang="en">
<head>
<div class = "alert">
            <?php
                if(isset($_SESSION['status'])){
                    echo "<h3>" .$_SESSION['status']."</h3>";
                    unset($_SESSION['status']);
                }
            ?>
        </div>
<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
  }

nav {
    background-color: rgb(58, 192, 170);
    height: 50px;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    position: sticky;
    top: 0px;
}

ul {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
}

ul li {
    margin-right: 40px;
    font-size: 1.1rem;
}

ul li a {
    color: white;
    text-decoration: none;
    transition: color 0.5s;
    border: 1px solid red;
    background-color: red;
    border-radius: 10px;
}

/* ul li a:hover {
    border: 2px solid blue;
    background-color: whitesmoke;
    border-radius: 5px;
    color: red;
} */

.checkbtn {
    font-size: 30px;
    color: white;
    cursor: pointer;
    display: none;
}

#check {
    display: none;
}

@media (max-width: 768px) {
    .checkbtn {
        display: block;
        order: 1;
        margin-right: 20px;
    }

    ul {
        position: fixed;
        top: 80px;
        right: -100%;
        background-color: green;
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        transition: all 0.3s;
    }

    ul li {
        margin: 20px 0;
    }

    ul li a {
        font-size: 20px;
    }

    #check:checked ~ ul {
        right: 0;
    }
}

header {
    width: auto;
    height: 700px;
    background-image: url("resumemaker-main.jpg");
    background-position: bottom;
    background-size: cover;
    display: flex;
    align-items: flex-end;
    justify-content: center;
}

.header-content {
    margin-bottom: 150px;
    color: whitesmoke;
    text-align: center;
}

.header-content h2 {
    font-size: 7vmin;
    color: red;
}

.line {
    width: 300px;
    height: 4px;
    background:red;
    margin: 10px auto;
    border-radius: 5px;
   
}

.header-content h3 {
    font-size: 5vmin;
    margin-top: 150px;
    margin-bottom: 30px;
    color:rgb(207, 10, 10);
   padding: 50px;
}
.Btn {
    padding: 8px 15px;
    background: rgb(207, 10, 10);
    font-size: 15px;
    border-radius: 30px;
    color: aliceblue;
    text-decoration: none;
    
}

.Btn:hover {
    background-color: whitesmoke;
    border-radius: 5px;
    color: red;
}

.resume {
    width: 100%;
    height: auto;
    background-color: azure;
    text-align: center; /* Center align all content */
   
}

.resume h1 {
    text-align: center;
}

.resume h3 {
    padding: 30px 60px;
    font-size: 40px;
    color: rgb(58, 192, 17);
}

.resume h4 {
    text-align: center;
    font-size: 20px;
}

.resume img {
    max-width: 400px;
    height: 500px;
    margin: 20px; /* Center align images */
}





</style>





    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    
    <title>Document</title>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
       <div class="logo">
        
       </div>
        <ul>
            <li><a class="active" href="#">Resume Template</a></li>
            <li><a href="#edit">Resume Editor </a></li>
            
        </ul>
    </nav>
<section class="RESUME" id="RESUME">
<div class="resume">
 
 <h3>Our Creative Resume</h3>
 <h4>Great Sample Resume helps you create a professional, and successful resume in minutes. </h4>
 <a href="resume.php"><img src="premgan_page-0001.jpg" alt=""></a>
 <a href="resume1.php"><img src="2a.jpg" alt=""></a>
 <a href="resume2.php"><img src="Resume Maker_page-0001.jpg" alt=""></a>
 <a href="resume3.php"><img src="Resume Maker1_page-0001.jpg" alt=""></a>
 <a href="resume4.php"><img src="Resume Maker2_page-0001.jpg" alt=""></a>
</div>
<header class="edit" id="edit">
    <div class="header-content">
    
    
     <h3>
       RESUME EDITOR
     </h3>
     
     <a href="https://www.sejda.com/pdf-editor" class="Btn">EDIT RESUME NOW</a>
    </div> 

</header>
</body>
</html>