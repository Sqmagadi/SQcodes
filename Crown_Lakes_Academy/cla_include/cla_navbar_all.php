<?php
// THIS IS A NAVIGATION BAR THAT WILL BE USED (INCLUDED) IN ALL OTHER PAGES 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Crown_Lakes_Academy/cla_main/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<body>
    <!-- NAVIGATION BAR SECTION -->
    <!-- INCLUDES LINKS TO HOME, ADMINISTRATION, ACADEMICS, ADMISSION, STUDENTS, PORTAL and GALLERY,-->
    <!-- THE PAGES HAVE DROPDOWN LINKS TO VARIOUS OTHER PAGES-->
    <nav>
        <div id="topnav" class="topnav">
            <!-- HOME PAGE NAVIGAION -->
            <div class="dropdown">
            <a class="dropbtn" class="<?php echo (basename($_SERVER['PHP_SELF']) == '\Crown_Lakes_Academy\cla_main\index.php') ? 'active' : ''; ?>" href="\Crown_Lakes_Academy\cla_main\index.php">Home </a> 
           
            </div>
            <!-- ADMINISTRATION DROP DOWN NAVIGATION PAGES -->
            <div class="dropdown">
                <a class="dropbtn"   href="javascript:void(0)" class=<?php echo (basename($_SERVER['PHP_SELF']) == '\Crown_Lakes_Academy\cla_pages\cla_administration\cla_teaching_staff.php' || basename($_SERVER['PHP_SELF']) == '\Crown_Lakes_Academy\cla_pages\cla_administration\cla_board.php' || basename($_SERVER['PHP_SELF']) == '\Crown_Lakes_Academy\cla_pages\cla_administration\cla_pta.php' || basename($_SERVER['PHP_SELF']) == '\Crown_Lakes_Academy\cla_pages\cla_administration\cla_support_staff.php') ? 'active' : ''; ?> >Administration <i class="fa fa-caret-down"></i> </a>
                <div class="dropcontent">
                    <a href="\Crown_Lakes_Academy\cla_pages\cla_administration\cla_teaching_staff.php">Teaching Staff</a>
                    <a href="\Crown_Lakes_Academy\cla_pages\cla_administration\cla_board.php" >Board</a>
                    <a href="\Crown_Lakes_Academy\cla_pages\cla_administration\cla_pta.php" >PTA</a>
                    <a href="\Crown_Lakes_Academy\cla_pages\cla_administration\cla_support_staff.php">Support Staff</a>
                </div>
            </div>
            <!-- ACADEMICS DROP DOWN NAVIGATION PAGES -->
            <div class="dropdown">
                <a class="dropbtn" href="javascript:void(0)">Academics <i class="fa fa-caret-down"></i> </a>
                <div class="dropcontent">
                    <a href="\Crown_Lakes_Academy\cla_pages\cla_academics\cla_departments.php">Departments</a>
                    <a href="\Crown_Lakes_Academy\cla_pages\cla_academics\cla_classes.php">Classes</a>
                    <a href="\Crown_Lakes_Academy\cla_pages\cla_academics\cla_subjects.php">Subjects</a>
                    <a href="\Crown_Lakes_Academy\cla_pages\cla_academics\cla_exams.php">Exams/Results</a>
                    <a href="\Crown_Lakes_Academy\cla_pages\cla_academics\cla_pastpapers.php">Past Papers</a>
                    <a href="\Crown_Lakes_Academy\cla_pages\cla_academics\cla_library.php">Library</a>
                </div>
            </div>
            <div class="dropdown">
            <a class="dropbtn" href="\Crown_Lakes_Academy\cla_pages\cla_admission\cla_admission.php">Admision</a>
            </div>
            <!-- STUDENTS DROP DOWN NAVIGATION PAGES -->
            <div class="dropdown">
                <a class="dropbtn" href="javascript:void(0)">Students <i class="fa fa-caret-down"></i> </a>
                <div class="dropcontent">
                    <a href="\Crown_Lakes_Academy\cla_pages\cla_students\cla_students_body.php">Students</a>
                    <a href="\Crown_Lakes_Academy\cla_pages\cla_students\cla_students_council.php">Student Council</a>
                    <a href="\Crown_Lakes_Academy\cla_pages\cla_students\cla_new_students.php">New Students</a>
                    <a href="\Crown_Lakes_Academy\cla_pages\cla_students\cla_alumni.php">Alumni</a>
                </div>
            </div>
            <!-- PORTAL DROP DOWN NAVIGATION PAGES --><!--CONTAINS PHP LINKED LOG IN AND LOG UP FORMS-->
            <div class="dropdown">
                <a class="dropbtn" href="#">Portal <i class="fa fa-caret-down"></i> </a>
                <div class="dropcontent">
                    <a id="studentLogin">Students </a> 
                    <a id="staffLogin" >Staff Portal </a>
                </div>
            </div>
            <div class="dropdown">
            <a class="dropbtn" href="\Crown_Lakes_Academy\cla_pages\cla_gallery\cla_gallery.php">Gallery</a>
            </div>
        </div>
    </nav>


    <!-- STUDENT LOGIN FORM -->
    <div id="studentloginForm" class="studentloginForm">
    <div class="formInner">
        <div class="formHeader">
            <span class="close" id="close"> <b>&times;</b> </span>
        <h2>STUDENTS PORTAL</h2>
        <hr>
        </div>
        <div class="formContent">
            <form id="loginForm" class="loginForm" action="cla_login.php" autocomplete="off" method="$_POST">
                <label for="userName">Registration No:</label>
                <input type = "text" id="userName" name="userName" placeholder="CLA001-0001/2023" autocomplete="off" required>
                
                <label for="password">Password:</label>
                <input type = "password" id="password" name="password" placeholder="Enter Password" autocomplete="off" required>
                <br>
                <div class="formFooter">
                    <input type="submit" id="submit" value="Log In">
                </div>
            </form>
        </div>
    </div>
</div>


<!-- STAFF LOGIN FORM -->
<div id="staffloginForm" class="staffloginForm">
    <div class="formInner">
        <div class="formHeader">
            <span class="close2" id="close2"> <b>&times;</b> </span>
        <h2>STAFF PORTAL</h2>
        <hr>
        </div>
        <div class="formContent">
            <form id="loginForm" class="loginForm" action="cla_login.php" autocomplete="off" method="$_POST">
                <label for="userName">Staff No:</label>
                <input type = "text" id="userName" name="userName" placeholder="CLA001-S001/2023" autocomplete="off" required>
                
                <label for="password">Password:</label>
                <input type = "password" id="password" name="password" placeholder="Enter Password" autocomplete="off" required>
                
                <div class="formFooter">
                    <input type="submit" id="submit" value="Log In">
                </div>
            </form>
        </div>
    </div>
</div>

<script src="/Crown_Lakes_Academy/cla_main/main.js"></script>
</body>
</html>