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
                                    error_reporting(0);
                                    include 'conn.php';
                                    $class=$_POST['class'];
                                    $exam_year=$_POST['exam_year'];
                                    $term=$_POST['term'];
                                #Main query of extratiion
                                    $sql='SELECT result.RollNo, concat(student.fname," ", student.lname) as Name,
                                    MAX(CASE WHEN subject.sub_name = "Urdu" THEN result.obtained_marks END) "Urdu",
                                    MAX(CASE WHEN subject.sub_name = "EnglishA" THEN result.obtained_marks END) "EnglishA",
                                    MAX(CASE WHEN subject.sub_name = "Math" THEN result.obtained_marks END) "Math",
                                    MAX(CASE WHEN subject.sub_name = "Science" THEN result.obtained_marks END) "Science",
                                    MAX(CASE WHEN subject.sub_name = "General Knowledge" THEN result.obtained_marks END) "General Knowledge",
                                    SUM(result.obtained_marks) as Total_Obtained,
                                    SUM(result.total_marks)as Total_Marks,
                                    round((SUM(result.obtained_marks)/SUM(result.total_marks)*100),2)as Percentage,
                                    CASE WHEN round((SUM(result.obtained_marks)/SUM(result.total_marks)*100),2) >= 90 THEN "A+"
                                        WHEN round((SUM(result.obtained_marks)/SUM(result.total_marks)*100),2) >= 80 THEN "A"
                                        WHEN round((SUM(result.obtained_marks)/SUM(result.total_marks)*100),2) >= 70 THEN "B"
                                        WHEN round((SUM(result.obtained_marks)/SUM(result.total_marks)*100),2) >= 60 THEN "C"
                                        WHEN round((SUM(result.obtained_marks)/SUM(result.total_marks)*100),2) >= 50 THEN "D"
                                        WHEN round((SUM(result.obtained_marks)/SUM(result.total_marks)*100),2) >= 33 THEN "E"
                                        WHEN round((SUM(result.obtained_marks)/SUM(result.total_marks)*100),2) < 33  THEN  "F"
                                    END AS Grade,
                                    RANK() OVER (ORDER BY Total_Obtained DESC) AS Position
                                    FROM result
                                    LEFT join subject on result.sub_id = subject.sub_id
                                    LEFT join student on result.RollNo = student.Rollno
                                    LEFT join class on student.class_id = class.class_id
                                    LEFT join exam on result.exam_id = exam.exam_id
                                    WHERE class.class_id ='$class' AND class.Academic_year = '$exam_year' AND exam.term = '$term' GROUP BY result.RollNo ORDER BY Total_Obtained DESC';
                                    $result=$conn->query($sql);
                                    if($result->num_rows>0)
                                    {
                                    echo' 
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            
                                            <thead>
                                                <tr>
                                                    <th>Roll No</th>
                                                    <th>Name</th>
                                                    <th>Urdu</th>
                                                    <th>English A</th>
                                                    <th>Math</th>
                                                    <th>Science</th>
                                                    <th>General Knowledge</th>
													<th>Obtained Marks</th>
													<th>Total Marks</th>
                                                    <th>Percentage</th>
                                                    <th>Grade</th>
                                                    <th>Position</th>
                                                </tr>
                                            </thead>
                                            <tbody>';
                                        
                                            while($row=$result->fetch_assoc())
                                            {
                                               
                                            echo' <tr>
                                                <td>'.$row[RollNo].'</td>
                                                <td>'.$row[Name].'</td>
                                                <td>'.$row[Urdu].'</td>
                                                <td>'.$row[Math].'</td>
                                                <td>'.$row[Science].'</td>
                                                <td>'.$row[General Knowledge].'</td>
                                                <td>'.$row[Total_Obtained].'</td>
                                                <td>'.$row[Total_Marks].'</td>
                                                <td>'.$row[Total_Marks].'</td>
                                                <td>'.$row[Percentage].'</td>
                                                <td>'.$row[Grade].'</td>
                                                <td>'.$row[Position].'</td>
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