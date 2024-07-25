<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Maker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 60%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            right: 100px;
            width: 100px;
            margin-top: 20px;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .generateResume {
            width: 100%;
            background-color: rgb(204, 152, 56);
            font-size: 25px;
        }

        button:hover {
            background-color: #f00a0a;
        }

        .resume {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .resume .info {
            flex-grow: 1;
            margin-right: 20px;
        }

        .resume h2, .resume h3 {
            color: #333;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }

        .resume p {
            color: #555;
        }

        @media print {
            body {
                background-color: #fff;
            }

            .container {
                box-shadow: none;
                width: 100%;
                padding: 0;
                margin: 0;
            }

            #resume-form, #print-btn {
                display: none;
            }

            .resume {
                border: none;
                padding: 0;
                margin: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Resume</h1>
        <form id="resume-form">
            <label for="name">Name:</label>
            <input type="text" placeholder="Enter here" id="name" required><br>

            <label for="contact">Contact:</label>
            <input type="text" placeholder="Enter here" id="contact" required><br>

            <label for="email">Email:</label>
            <input type="email" placeholder="Enter here" id="email" required><br>

            <label for="address">Address:</label>
            <textarea id="address" placeholder="Enter here" required></textarea><br>

            <label for="objective">Career Objective:</label>
            <textarea id="objective" placeholder="Enter here" required></textarea><br>

            <div id="internships">
                <label>Internship:</label>
                <textarea class="internship" placeholder="Enter here" required></textarea>
            </div>
            <button type="button" onclick="addInternship()">Add</button><br>

            <div id="skills">
                <label>Skills:</label>
                <textarea class="skill" placeholder="Enter here" required></textarea>
            </div>
            <button type="button" onclick="addSkill()">Add</button><br>

            <div id="experiences">
                <label>Work Experience:</label>
                <textarea class="experience" placeholder="Enter here" required></textarea>
            </div>
            <button type="button" onclick="addExperience()">Add</button><br>

            <div id="educations">
                <label>EDUCATION-YEARS:</label>
                <textarea class="education" placeholder="Enter here" required></textarea>
            </div>
            <button type="button" onclick="addEducation()">Add</button><br>

            <button type="button" class="generateResume" onclick="generateResume()">Generate Resume</button>
        </form>
        <div id="resume" class="resume"></div>
        <button id="print-btn" style="display: none;" onclick="printResume()">Print Resume</button>
    </div>
    <script>
        function addInternship() {
            const div = document.createElement('div');
            div.innerHTML = '<textarea class="internship" required></textarea>';
            document.getElementById('internships').appendChild(div);
        }

        function addSkill() {
            const div = document.createElement('div');
            div.innerHTML = '<textarea class="skill" required></textarea>';
            document.getElementById('skills').appendChild(div);
        }

        function addExperience() {
            const div = document.createElement('div');
            div.innerHTML = '<textarea class="experience" required></textarea>';
            document.getElementById('experiences').appendChild(div);
        }

        function addEducation() {
            const div = document.createElement('div');
            div.innerHTML = '<textarea class="education" required></textarea>';
            document.getElementById('educations').appendChild(div);
        }

        function generateResume() {
            if (!document.getElementById('name').value || !document.getElementById('contact').value || 
                !document.getElementById('email').value || !document.getElementById('address').value || 
                !document.getElementById('objective').value || 
                !document.querySelector('.internship').value || 
                !document.querySelector('.skill').value || 
                !document.querySelector('.experience').value || 
                !document.querySelector('.education').value) {
                
                alert('Please fill in all required fields.');
                return;
            }

            const name = document.getElementById('name').value;
            const contact = document.getElementById('contact').value;
            const email = document.getElementById('email').value;
            const address = document.getElementById('address').value;
            const objective = document.getElementById('objective').value;

            const internships = Array.from(document.querySelectorAll('.internship')).map(internship => internship.value);
            const skills = Array.from(document.querySelectorAll('.skill')).map(skill => skill.value);
            const experiences = Array.from(document.querySelectorAll('.experience')).map(experience => experience.value);
            const educations = Array.from(document.querySelectorAll('.education')).map(education => education.value);

            const resume = document.getElementById('resume');
            resume.innerHTML = `
                <div class="info">
                    <h2>${name}</h2>
                    <p><strong>Contact:</strong> ${contact}</p>
                    <p><strong>Email:</strong> ${email}</p>
                    <p><strong>Address:</strong> ${address}</p>
                    <h3>Career Objective</h3>
                    <p>${objective}</p>
                    <h3>Internships</h3>
                    <p>${internships.join('</p><p>')}</p>
                    <h3>Skills</h3>
                    <p>${skills.join('</p><p>')}</p>
                    <h3>Work Experience</h3>
                    <p>${experiences.join('</p><p>')}</p>
                    <h3>Education</h3>
                    <p>${educations.join('</p><p>')}</p>
                </div>
            `;

            document.getElementById('resume-form').style.display = 'none';
            document.getElementById('print-btn').style.display = 'block';
        }

        function printResume() {
            document.getElementById('print-btn').style.display = 'none';
            window.print();
            document.getElementById('print-btn').style.display = 'block';
        }
    </script>
</body>
</html>
