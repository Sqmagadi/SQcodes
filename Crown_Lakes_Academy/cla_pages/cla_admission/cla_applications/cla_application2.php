<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLA ADMISSION</title>
    <link rel="stylesheet" href="Crown_Lakes_Academy/cla_main/main.css">
</head>
<body>
   
    <?php
    include 'C:\xampp\htdocs\Crown_Lakes_Academy\cla_include\cla_navbar_all.php';
    include 'C:\xampp\htdocs\Crown_Lakes_Academy\cla_include\cla_header_all.php';
    ?>
    
    <h1>CLA APPLICATION</h1>
    <div class="register">
        <h1>APPLY TO GET A CHANCE</h1>
        <form action="cla_application.php" method="post">
            <h2>Student Details</h2>
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" id="firstName" placeholder="Bella" required>
            <br>
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName" placeholder="Diamonds" required>
            <br>
            <label for="surnameName">Surname Name</label>
            <input type="text" name="surnameName" id="surnameName" placeholder="Bells">
            <br>
            <label for="dateOfBirth">Date of Birth</label>
            <input type="date" name="dateOfBirth" id="dateOfBirth" placeholder="mm/dd/yyyy" required>
            <br>
            <label for="gender">Gender</label>
            <input type="radio" name="gender" id="gender"  >Male
            <input type="radio" name="gender" id="gender"  >Female
            <br>
            <label for="county">County</label>
            <input type="text" name="county" id="county" placeholder="Nairobi" required>

            <br><br>
            <h2>Academic Details</h2> 
            <br>
            <label for="currentSchool">Current School</label>
            <input type="text" name="currentSchool" id="currentSchool" placeholder="Kagungu Junior School" required>
            <br>
            <label for="currentGrade">Current Grade</label>
            <input type="text" name="currentGrade" id="currentGrade" placeholder="Grade II" required>
            <br>
            <label for="lastMarksAttained">Last Marks Attained</label>
            <input type="text" name="lastMarksAttained" id="lastMarksAttained" placeholder="400" required>
            <br>

            <label for="subjectsTaking"><h3>Subjects Taking</h3></label>
            <input type="radio" name="subjectTaking" id="subjectTaking">Mathematics
            <input type="radio" name="subjectTaking" id="subjectTaking">English
            <input type="radio" name="subjectTaking" id="subjectTaking">Kiswahili
            <input type="radio" name="subjectTaking" id="subjectTaking">French
            <input type="radio" name="subjectTaking" id="subjectTaking">Spanish
            <input type="radio" name="subjectTaking" id="subjectTaking">German
            <input type="radio" name="subjectTaking" id="subjectTaking">Science
            <input type="radio" name="subjectTaking" id="subjectTaking">Home Science
            <input type="radio" name="subjectTaking" id="subjectTaking">Geography
            <input type="radio" name="subjectTaking" id="subjectTaking">Religious Education
            <input type="radio" name="subjectTaking" id="subjectTaking">Indegineous Languages
            <input type="radio" name="subjectTaking" id="subjectTaking">Computer Studies
            <input type="radio" name="subjectTaking" id="subjectTaking">Pre-technical studies
            <input type="radio" name="subjectTaking" id="subjectTaking">Integrated Science
            <input type="radio" name="subjectTaking" id="subjectTaking">Social Studies
            <input type="radio" name="subjectTaking" id="subjectTaking">Business Studies
            <input type="radio" name="subjectTaking" id="subjectTaking">Agriculture
            <input type="radio" name="subjectTaking" id="subjectTaking">Health Education
            <input type="radio" name="subjectTaking" id="subjectTaking">Sports and Physical Education
            <br>
            <button type="submit" id="refresh">Refresh</button>
        </form>

        <form>
            <h2>Last Marks Attained Per Subject</h2>
            <?php

            ?>
        </form>


        <form>
            <h2>Parent's Detailes</h2>
            <label for="parentName">Parent Name</label>
            <input type="text" name="parentName" id="parentName" placeholder="Sternly Diamonds" required>
            <br>
            <label for="parentType">Parent Type</label>
            <select name="parenType" required>
                <option value="" selected hidden>Parent Type</option>
                <option value="Mother">Mother</option>
                <option value="Father">Father</option>
                <option value="Guadian">Guadian</option>
                <option value="Sponsor">Sponsor</option>
            </select>
            <br>
            <label for="occupation">Occupation</label>
            <input type="text" name="occupation" id="occupation" placeholder="Teacher" >
            <br>
            <label for="County">County</label>
            <input type="text" name="county" id="county" placeholder="Nairobi" required>
            <br>
            <label for="physicalAddress">Physical Address</label>
            <input type="text" name="physicalAddress" id="physicalAddress" placeholder="Karen-Nairobi" required>
            <br>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Sternlydiamonds@gmail.com">
            <br>
            <label for="phoneNo">Phone No</label>
            <input type="text" name="phoneNo" id="phoneNo" placeholder="+254 700 000 000" required>
            <br>
            <label for="otherPhoneNo">Other Phone No</label>
            <input type="text" name="otherPhoneNo" id="otherPhoneNo" placeholder="+254 100 000 000" >

            
        </form>

    </div>

    
</body>
</html>