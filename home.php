<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<style>
    /* style.css*/

body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
  }

nav {
    background-color: rgb(58, 192, 170);
    height: 40px;
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
}

ul li a:hover {
    border: 2px solid blue;
    background-color: whitesmoke;
    border-radius: 5px;
    color: red;
}

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
    height: 100vh;
    background-image: url("3.jpg");
    background-position: bottom;
    background-size: cover;
    background-repeat: no-repeat;
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
    color:red;
}

.line {
    width: 400px;
    height: 4px;
    background:rgb(58, 192, 17);
    margin: 10px auto;
    border-radius: 5px;
}

.header-content h1 {
    font-size: 8vmin;
    margin-top: 50px;
    margin-bottom: 30px;
    color: whitesmoke;
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

.container {
    width: auto;
    height: auto;
    background-color: whitesmoke;
}

.container h2 {
    color: rgb(202, 21, 21);
    text-align: center;
}

.container h3 {
    padding: 30px 40px;
    font-size: 30px;
    color: rgb(58, 192, 17);
}

.container h4 {
    padding: 20px 70px;
    font-size: 20px;
}

.resume {
    width: auto;
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

.letter {
    width: auto;
    height: auto;
    background-color: azure;
}

.letter h1 {
    text-align: center;
}

.letter h3 {
    padding: 30px 60px;
    font-size: 30px;
    color: rgb(58, 192, 17);
}

.letter h4 {
    text-align: center;
}

.letter img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 20px auto; /* Center align images */
}

edit {
    width: auto;
    height: 700px;
    
    background-position: bottom;
    background-image: url("resumemaker-main.jpg");
    background-size: cover;
    display: flex;
    align-items: flex-end;
    justify-content: center;
}

.edit-content {
    margin-bottom: 150px;
    color: whitesmoke;
    text-align: center;
}

.edit-content h2 {
    font-size: 7vmin;
    color: red;
}

.line {
    width: 300px;
    height: 4px;
    background: red;
    margin: 10px auto;
    border-radius: 5px;
}

.edit-content h1 {
    font-size: 8vmin;
    margin-top: 50px;
    margin-bottom: 30px;
    color:rgb(207, 10, 10);
}
.Btn {
    padding: 8px 15px;
    background: rgb(207, 10, 10);
    font-size: 15px;
    border-radius: 30px;
    color: aliceblue;
    text-decoration: none;
}

.Btn:edit {
    background-color: whitesmoke;
    border-radius: 5px;
    color: red;
}

.contact {
    width: auto;
    height: 300px;
    background-color: azure;
}

.contact h1 {
    text-align: center;
}

.contact h2 {
    padding: 30px 60px;
    font-size: 30px;
    color: rgb(58, 192, 17);
}

.contact .us {
    width: auto;
    height: auto;
    background-color: beige;
}

.contact .us h3 {
    text-align: center;
    padding: 10px 20px;
}

.contact .us h5 {
    text-align: center;
    padding: 10px;
}

</style>

    <meta charset="utf-8">
    <meta name="viewport" 
          content="width=device-width,
                   initial-scale=1.0">
                   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
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
            <li><a class="active" href="#">HOME</a></li>
            <li><a href="#ABOUT US">ABOUT US</a></li>
            <li><a href="#RESUME">SAMPLE RESUME</a></li>
            <li><a href="#edit">EDIT RESUME</a></li>
            <li><a href="#CONTACT">CONTACT</a></li>
            
        </ul>
    </nav>
    <header>
      <div class="header-content">
       <h2>Create Resume using our AutoGenerate Templates</h2>
       <div class="line"></div>
       <h1>
         RESUME CREATOR
       </h1>
       <a href="singup.php" class="Btn">CREATE RESUME NOW</a>
      </div> 

 </header>
 <section class="ABOUT US" id="ABOUT US">
 <DIV class="container">
  <h2>About us</h2>
  <div class="line"></div>
  <h4>Here, we believe that building a job-worthy resume should be a fast and simple process. In fact, we’ve always been about building systems that are quick and easy-to-use, yet consistently get good results.</h4>
  <h4>In an effort to deliver more value to our users, we decided to specialize in just resume-building. Knowing that hiring managers nowadays are stricter than ever; we devoted countless hours to studying job-winning resumes, getting resume templates critiqued by experts and testing our resume content through the grueling process of trial & error.</h4>
  <h4>The result? We figured out that building a job-winning resume is a science,Add an not art. We learned there’s an exact structure and set of ‘resume rules’ that hiring managers respond to when it comes to calling back applicants.</h4>

 </DIV>
 </section>
 <section class="RESUME" id="RESUME">
 <div class="resume">
  <h1> Sample Resume</h1>
  <div class="line"></div>
  <h3>Our Creative Resume</h3>
  <h4>Great Sample Resume helps you create a professional, and successful resume in minutes. </h4>
  <img src="premgan_page-0001.jpg" alt="">
  <img src="2a.jpg" alt="">
  <img src="Resume Maker_page-0001.jpg" alt="">
  <img src="Resume Maker1_page-0001.jpg" alt="">
  <img src="Resume Maker2_page-0001.jpg" alt="">


  
 </div>
 </section>
 <edit class="edit" id="edit">
    <div class="edit-content">
    <h2>
    How To Edit Resume Online For Free
     </h2>
   
  <div class="line"></div>
 
     <h1>
     Edit PDF Files.
     </h1>
     
    </div> 

</edit>
 
 <section class="CONTACT" id="CONTACT">
 <div class="contact">
  <h1>Contact Us</h1>
  <div class="line"></div>
  
<div class="contact us">
  <h3>sales@keenable.in</h3>
  <h3>B149, Ground Floor, Sector 63, Noida, India - 201301</h3>
  <h3>©2024 by Keen and Able Computers Pvt. Ltd.</h3>

</div>

 </div>
 </section>
</body>

</html>
