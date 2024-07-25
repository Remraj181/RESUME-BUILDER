<!DOCTYPE html>
<html lang="en">
<head>


        <style>

#cv-template {
    display: none;
}
.myimg {
    border-radius: 10%;
    width: 150px;
    height: 100px;
   padding-top: 50px;
}

.background {
    background-color: antiquewhite;
}

.container p {
    margin: 10px;
}

.container1{
    max-width: 90%;
    margin: 0 auto ;
    padding: 5px;
    margin-top: -100px;

    @media print {
    .btn {
        display: none;
    }
}


    }



    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title class="btn background"></title>
</head>
<body>


    <!-- frist page -->


    <div class="container" id="cv-form">
        <h1 class="text-center my-2">RESUME</h1>
        <div class="row">
        
            <div class="col-md-6">
                <h3>Personal Information</h3>
                <div class="form-group mt-3">
                    <label for="imgField">Select your Photo(Only .jpg)</label>
                    <input id="imgField" type="file" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nameField">Your Name</label>
                    <input type="text" id="nameField" placeholder="Enter here" class="form-control" required>
                </div>
                <div class="form-group mt-2">
                    <label for="contactField">Your Contact</label>
                    <input type="text" id="contactField" placeholder="Enter here" class="form-control" required>
                </div>
                <div class="form-group mt-2">
                    <label for="emailField">Email</label>
                    <input type="text" id="emailField" placeholder="Enter here" class="form-control" required>
                </div>
                <div class="form-group mt-2">
                    <label for="addressField">Your Address</label>
                    <textarea id="addressField" placeholder="Enter here" class="form-control" rows="2" required></textarea>
                </div>
               
               
            </div>
            <div class="col-md-6">
                <h3>Professional Information</h3>
                <div class="form-group mt-2">
                    <label for="objectiveField">CAREER OBJECTIVE:-</label>
                    <textarea id="objectiveField" placeholder="Enter here" class="form-control" required></textarea>
                </div>
                <div class="form-group mt-2" id="we">
                    <label for=""> SKILLS:-</label>
                    <textarea placeholder="Enter here" class="form-control weField" rows="1" required></textarea>
                    <div class="container text-center mt-2" id="weAddButton">
                        <button onclick="addNewWEField()" class="btn btn-primary btn-sm">Add</button>
                    </div>
                    
                    
                </div>
                <div class="form-group mt-2" id="aq">
                    <label for="">EDUCATION-YEARS:-</label>
                    <textarea placeholder="Enter here" class="form-control eqField" rows="2" required></textarea>
                    <div class="container text-center mt-2" id="aqAddButton">
                        <button onclick="addNewAQField()" class="btn btn-primary btn-sm">Add</button>
                    </div>
                </div>
            </div>
            <div class="container text-center mt-1">
                <button onclick="validateAndGenerateCV()" class="btn btn-primary btn-lg">GENERATE RESUME</button>
            </div>
        </div>
    </div>

                          <!-- GenerateCV -->



    <div class="container1" id="cv-template">
        <div class="row">
            <div class="col-md-7 text-center py-5 background">
                <img src="https://t4.ftcdn.net/jpg/00/64/67/63/360_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg" alt="" class="img-fluid myimg" id="imgTemplate">
                <div class="container">
                    <p id="nameT1">Prem Kumar</p>
                    <p id="contactT">+910000000000</p>
                    <p id="emailT">prem9852@gmail.com</p>
                    <p id="addressT">Sector 62 Noida, INDIA</p>
                    <hr />
                
                </div>
            </div>
            <div class="col-md-7 py-0">
                <h1 id="nameT2" class="text-center" style="font-weight: 900;"></h1>
                <div class="card mt-4">
                    <div class="card-header background">
                        <h5>CAREER OBJECTIVE :-</h5>
                    </div>
                    <div class="card-body">
                        <p id="objectiveT"></p>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header background">
                        <h5>SKILLS:-</h5>
                    </div>
                    <div class="card-body">
                        <ul id="weT">
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header background">
                        <h5>EDUCATION-YEARS:-</h5>
                        
                    </div>
                    <div class="card-body">
                        <ul id="aqT">
                            <li></li>
                        </ul>
                    </div>
                </div>
                
                
            </div>
            <div class="container text-center  mt-1">
                <button onclick="printCV()" class="btn background">Save</button>
                
        </div>
        
    
     
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
   
                            <!-- js -->



   
   <script >
function addNewWEField() {
    let newNode = document.createElement('textarea');
    newNode.classList.add('form-control', 'weField', 'mt-2');
    newNode.setAttribute('rows', 3);
    newNode.setAttribute('placeholder', 'Enter here');
    let weob = document.getElementById('we');
    let weAddButtonob = document.getElementById('weAddButton');
    weob.insertBefore(newNode, weAddButtonob);
}

function addNewAQField() {
    let newNode = document.createElement('textarea');
    newNode.classList.add('form-control', 'eqField', 'mt-2');
    newNode.setAttribute('rows', 4.5);
    newNode.setAttribute('placeholder', 'Enter here');
    let aqob = document.getElementById('aq');
    let aqAddButtonob = document.getElementById('aqAddButton');
    aqob.insertBefore(newNode, aqAddButtonob);
}

function validateAndGenerateCV() {
    // Get the values of all required fields
    let nameField = document.getElementById('nameField').value;
    let contactField = document.getElementById('contactField').value;
    let emailField = document.getElementById('emailField').value;
    let addressField = document.getElementById('addressField').value;
    let objectiveField = document.getElementById('objectiveField').value;
    let weFields = document.getElementsByClassName('weField');
    let eqFields = document.getElementsByClassName('eqField');
    
    // Check if any of the required fields are empty
    if (!nameField || !contactField || !emailField || !addressField || !objectiveField) {
        alert("Please fill in all required fields.");
        return;
    }

    // Check if all SKILLS fields are filled
    for (let e of weFields) {
        if (!e.value) {
            alert("Please fill in all SKILLS fields.");
            return;
        }
    }

    // Check if all EDUCATION fields are filled
    for (let e of eqFields) {
        if (!e.value) {
            alert("Please fill in all EDUCATION fields.");
            return;
        }
    }

    // If all required fields are filled, generate the CV
    GenerateCV();
}

function GenerateCV() {
    let nameField = document.getElementById('nameField').value;
    document.getElementById('nameT1').innerHTML = nameField;

    document.getElementById('contactT').innerHTML = document.getElementById('contactField').value;
    document.getElementById('emailT').innerHTML = document.getElementById('emailField').value;
    document.getElementById('addressT').innerHTML = document.getElementById('addressField').value;
   
    document.getElementById('objectiveT').innerHTML = document.getElementById('objectiveField').value;

    let wes = document.getElementsByClassName('weField');
    let weStr = '';
    for (let e of wes) {
        weStr += `<li>${e.value}</li>`;
    }
    document.getElementById('weT').innerHTML = weStr;

    let aqs = document.getElementsByClassName('eqField');
    let aqStr = '';
    for (let e of aqs) {
        aqStr += `<li>${e.value}</li>`;
    }
    document.getElementById('aqT').innerHTML = aqStr;

    let file = document.getElementById('imgField').files[0];
    if (file) {
        let reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onloadend = function() {
            document.getElementById('imgTemplate').src = reader.result;
        }
    }
   // Check if all required fields are filled
if (!nameField || !contactField || !emailField || !addressField || !objectiveField || !imgField) {
    alert("Please fill in all required fields.");
    return;
}

// Validate email format
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
if (!emailRegex.test(emailField.value)) {
    alert("Please enter a valid email address.");
    return;
}

// Validate contact number format (assuming it should be a 10-digit number)
const contactRegex = /^\d{10}$/;
if (!contactRegex.test(contactField.value)) {
    alert("Please enter 10-digit contact number.");
    return;
}

// Get the file name and extension
const imgFileName = imgField.value;
const imgFileExtension = imgFileName.substring(imgFileName.lastIndexOf('.') + 1).toLowerCase();

// Check if the image file is a .jpg or .jpeg file
if (imgFileExtension !== "jpg" && imgFileExtension !== "jpeg") {
    alert("Please upload .jpg image file.");
    return;
}



    document.getElementById('cv-form').style.display = 'none';
    document.getElementById('cv-template').style.display = 'block';
}

function printCV() {
    window.print();
}


    </script>
</body>
</html>