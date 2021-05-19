<!DOCTYPE html>
<html lang="en">


<head>
    <title>Student Result</title>
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
                    <li><a href="admin-panel-setting.html" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin Setting</a>
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
                        <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Dashboard</a>
                        </li>
                        <li class="page-back"><a href="index.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Student Result Details</h4>
                                </div>
                       <div class="tab-inn">
                                <?php
                                $total=0;
                                    error_reporting(0);
                                    include 'conn.php';
                                    $class=$_POST['class'];
                                    $exam_year=$_POST['exam_year'];
                                    $term=$_POST['term'];
                            
                                    $sql="SELECT DISTINCT student.Rollno, student.fname, student.lname ,( SELECT SUM(result.obtained_marks) FROM result WHERE student.Rollno = result.RollNo AND student.class_id = result.class_id ) AS TotalObtained FROM student INNER JOIN result on student.Rollno = result.RollNo LEFT join exam on result.exam_id = result.exam_id LEFT join class on result.class_id = class.class_id WHERE class.class_id = '$class' AND exam.year = '$exam_year' AND exam.term = '$term'ORDER BY `TotalObtained` DESC";
                                    $result=$conn->query($sql);
                                    $name=$result->fetch_assoc();
                                    $class_name="SELECT class.class_name from result INNER JOIN class on result.class_id=class.class_id where result.class_id='$class'";
                                    $class_name_find=$conn->query($class_name);
                                    $final_result=$class_name_find->fetch_assoc();
                                    echo '<div class="row" style="text-align:left;color:black;margin:30px;">
                                    <div class="col s6">
                                     <h5> Class Name: '.$final_result[class_name].'</h5>
                                      
                                    </div>
                                    <div class="input-field col s6">
                                    <h5> Exam Year: '.$exam_year.'</h5>
                                    </div>
                                </div>';
                                echo '<div class="row" style="text-align:left;color:black;margin:-10px 30px 20px 30px;">
                                    <div class="col s6">
                                    <h5> Term: '.$term.'</h5>
                                    </div>
                                    <div class="input-field col s6">
                                    <h5> Class Result </h5>
                                    </div>
                                </div>';
                                    if($result->num_rows>0)
                                    {
                                    echo' 
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            
                                            <thead>
                                                <tr>
                                                    <th>Roll No</th>
                                                    <th>Name</th>
													<th>Obtained Marks</th>
                                                </tr>
                                            </thead>
                                            <tbody>';
                                        
                                            while($row=$result->fetch_assoc())
                                            {
                                               
                                            echo' <tr>
                                                <td>'.$row[Rollno].'</td>
                                                <td>'.$row[fname].' '.$row[lname].'</td>
                                                <td>'.$row[TotalObtained].'</td>
                                                </tr>';
                                                
                                            }
                                            echo"</tbody>
                            
                                        </table>";
            
                                        
                                    }
                                    
                                    else
                                    {
                                        echo "Record Not found";
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
    </div>

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


</html>