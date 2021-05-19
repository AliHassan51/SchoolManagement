<!DOCTYPE html>
<html lang="en">


<head>
    <title>Add Fee Records for Class</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EEducation master is one of the best eEducational html template, it's suitable for all eEducation websites like university,college,school,online eEducation,tution center,distance eEducation,computer eEducation">
    <meta name="keyword" content="eEducation html template, university template, college template, school template, online eEducation template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="css/materialize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="css/style-mob.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="index.php" class="logo"><img src="images/logo1.png" alt="" />
                </a>
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-6 col-sm-6 mob-hide">
                <form class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href="#"><i class="fa fa-search"></i></a>
                </form>
            </div>
            <!--== NOTIFICATION ==-->
            <div class="col-md-2 tab-hide">
                <div class="top-not-cen">
                    <a class='waves-effect btn-noti' href="admin-all-enquiry.html" title="all enquiry messages"><i class="fa fa-commenting-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href="admin-course-enquiry.html" title="course booking messages"><i class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href="admin-admission-enquiry.html" title="admission enquiry"><i class="fa fa-tag" aria-hidden="true"></i><span>5</span></a>
                </div>
            </div>
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="images/user/6.png" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="#" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li><img src="images/placeholder.jpg" alt="">
                        </li>
                        <li>
                            <h5>Victoria Baker <span> Santa Ana, CA</span></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                      <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="index.php" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i> Subjects</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-all-courses.php">All Subjects</a>
                                    </li>
                                    <li><a href="admin-add-courses.php">Add Subject</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
             
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i> Students</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-user-all.php">All Students</a>
                                    </li>
                                    <li><a href="admin-user-add.php">Add New Students</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
						<!---Add teachers---->
						<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i> Teachers</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="teachers-all.php">All Teachers</a>
                                    </li>
                                    <li><a href="teacher-add.php">Add New Teacher</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
						<!--Add Class-->
						<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i> Class</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="class-all.php">All Classes</a>
                                    </li>
                                    <li><a href="add-class.php">Add New class</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
					
						<!--Exam Entry-->
						<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i> Exams</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="exam-all.php">All Exams</a>
                                    </li>
                                    <li><a href="add-exam.php">Add New Exam</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
						<!--Result Management-->
						<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i> Result</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="get-result.php">Get Result</a>
                                    </li>
                                    <li><a href="add-result.php">Add Result</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-cloud-download" aria-hidden="true"></i> Import & Export</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-export-data.php">Export all datas</a>
                                    </li>
                                    <li><a href="admin-import-data.php">Import all datas</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Add new class</a>
                        </li>
                        <li class="page-back"><a href="index.php"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
						<div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Add Fees for Classes</h4>
                                </div>
                                <div class="tab-inn">
                                    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
                                    <div class="row">
                                            <div class="input-field col s12">
                                             <span>Fee Id</span>
                                             <?php
                                                include 'conn.php';
                                                $result1=$conn->query("SELECT fees_id FROM fees");
                                             ?>
                                             <select name="fees" required >
                                             <?php
                                                while($rows1=$result1->fetch_assoc())
                                                {
                                                    $fee_id=$rows1['fees_id'];
                                                    echo "<option value='$fee_id'>$fee_id</option>";
                                                }
                                             ?>
                                             </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="input-field col s12">
                                             <span>Roll NO</span>
                                             <?php
                                                include 'conn.php';
                                                $class_name=$_POST['class'];
                                                $result1=$conn->query("SELECT Rollno FROM student where class_id='$class_name'");
                                             ?>
                                             <select name="Rollno" required>
                                             <?php
                                                while($rows=$result1->fetch_assoc())
                                                {
                                                    $Rollno=$rows['Rollno'];
                                                    echo "<option value='$Rollno'>$Rollno</option>";
                                                }
                                             ?>
                                             </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="number" value="" name="paid_amount" class="validate" required>
                                                <label>Paid Amount</label>
                                            </div>
                                        </div>  
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="date" value="" name="date" class="validate" required>
                                                <span>Date</span>
                                            </div>
                                        </div>                                       
                                            <div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" name="submit1"></i>
                                            </div>
                                        </div>
                                    </form>
                                    <?php
                                        error_reporting(0);
                                        include 'conn.php';
                                        if(isset($_POST['submit1']))
                                        {
                                            $id=$_POST['fees'];
                                            $Amount=$_POST['paid_amount'];
                                            $date=$_POST['date'];
                                            $class_id=$class_name;
                                            $rollno=$_POST['Rollno'];
                                        
                                                $sql1="INSERT INTO pays VALUES('$id','$class_id','$Amount','$date','$rollno')";
                                                if($conn->query($sql1))
                                                {
                                                    echo "<h4 style='background: #002147; width:100%;color:white; text-align:center;'>Student Fee Record Added Successfully!!</h4>";
                                                }
                                                else
                                                {
                                                echo "<h4 style='background: #002147; width:100%;color:white; text-align:center;'>Student Fee Record already Exist</h4>";
                                                    
                                                }
                                            
                                        }
                                       
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>