<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-image: url('images/background.jpg');
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        h1, h2 {
            color: #333;
        }

        h1 {
            font-family: 'Times New Roman', Times, serif; 
        }

        #profile-image {
            display: block;
            margin: 0 auto;
            border: 5px solid #333;
            padding: 10px;
            border-radius: 10px; 
        }

        .section {
            border: 2px solid #333;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 20px;
            background-color: peachpuff; 
            width: 70%;
        }

        #personal-info-box {
            border: 2px solid #333;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 20px;
            background-color: peachpuff; 
            width: 70%;
        }
    </style>
</head>
<body>

    <?php
    echo "<p>Welcome to my Personal Profile Page!</p>";
    ?>
    
    <h1>Jan Christopher Reyes Francisco</h1>
    <img id="profile-image" src="images/image.jpg" alt="Profile Image" width="350" height="450">


    <div id="personal-info-box">
        <h2>Personal Information</h2>
        <p><strong>Full Name:</strong> Jan Christopher Reyes Francisco</p>
        <p><strong>Nickname:</strong> JC</p>
        <p><strong>Age:</strong> 20</p>
    </div>


    <div class="section">
        <h2>Education</h2>
        <p><strong>Senior High School Graduated from:</strong> Asia Pacific College</p>
        <p><strong>Course:</strong> Information Technology</p>
        <p><strong>Scholarship:</strong> Yes, APC Loyalty Discount 20%</p>
        <p><strong>Did you choose this course?:</strong> Yes, I chose this course since I’m more like a PC person who’s more active on using PCs and I was inspired by my uncle who is now a CEO from a company in Canada.</p>
    </div>


    <div class="section">
        <h2>IT Experience</h2>
        <p><strong>IT Experience:</strong> So far, none yet.</p>
    </div>


    <div class="section">
        <h2>Hobbies</h2>
        <p><strong>Hobbies:</strong> Just to do basic stuff like playing games, watching movies, spend some money.</p>
    </div>


    <div class="section">
        <h2>Expectations</h2>
        <p><strong>Expectations:</strong> I expect in this subject that we are more on creating a website. I don’t think it’ll be hard or easy because I was also expecting that we are going to do some HTML, CSS, and JavaScript.</p>
    </div>


    <div class="section">
        <h2>Learning Goals</h2>
        <p><strong>Learn in chosen major:</strong> I’d like to learn more about HTML, CSS, and JavaScript.</p>
    </div>


    <div class="section">
        <h2>Life Goals</h2>
        <p><strong>Goals in life:</strong> As a Second-Year student, I’d like to achieve everything that I really deserve.</p>
        <p><strong>Dream to fulfill:</strong> Yes, I want to be a professional I.T. and want to get a job that suits well for me.</p>
    </div>

</body>
</html>