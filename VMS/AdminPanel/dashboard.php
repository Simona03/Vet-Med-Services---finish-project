<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./images/key.png" />
    <link rel="stylesheet" href="./style/style.css">
    <title>Administrator Panel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="./style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css" />

</head>
<header>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="./Pages/Client/Table.php">Client Data</a>
        <a href="./Pages/Profiles/createProfiles.php">Add Member</a>
        <a href="./Pages/Profiles/staffProfiles.php">Profiles</a>
       
        <a href="./logout.php">Logout</a>
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
</header>

<body class="dashboard ">

    <!-- right content -->
    <div id="content">

        <!-- dashboard inner -->
        <div class="midde_cont">
            <div class="container-fluid">
                <div class="row column_title">
                    <div class="col-md-12">
                        <div class="page_title">
                            <h2>Dashboard</h2>
                            <br>
                           
                        </div>
                    </div>
                </div>
                <div class="row column1">
                    <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30">
                            <div class="couter_icon">
                                <div>
                                    <i class="fa fa-user yellow_color"></i>
                                </div>
                            </div>
                            <div class="counter_no">
                                <div>
                                    <p class="total_no">2500</p>
                                    <p class="head_couter">Welcome</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30">
                            <div class="couter_icon">
                                <div>
                                    <i class="fa fa-clock-o blue1_color"></i>
                                </div>
                            </div>
                            <div class="counter_no">
                                <div>
                                    <p class="total_no">123.50</p>
                                    <p class="head_couter">Average Time</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30">
                            <div class="couter_icon">
                                <div>
                                    <i class="fa fa-cloud-download green_color"></i>
                                </div>
                            </div>
                            <div class="counter_no">
                                <div>
                                    <p class="total_no">1,805</p>
                                    <p class="head_couter">Collections</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30">
                            <div class="couter_icon">
                                <div>
                                    <i class="fa fa-comments-o red_color"></i>
                                </div>
                            </div>
                            <div class="counter_no">
                                <div>
                                    <p class="total_no">54</p>
                                    <p class="head_couter">Comments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            

                <div class="row column3">
                    <!-- testimonial -->
                    <div class="col-md-6">
                        <div class="dark_bg full margin_bottom_30">
                            <div class="full graph_head">
                                <div class="heading1 margin_0">
                                    <h2>Administrator</h2>
                                </div>
                            </div>
                            <div class="full graph_revenue">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content testimonial">
                                            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                                                <!-- Wrapper for carousel items -->
                                                <div class="carousel-inner">
                                                 
                                                        <div class="img-box"><img src="images/user_img.jpg" alt=""></div>
                                                        <p class="testimonial">  Head Administrator
                                                            </p>
                                                        <p class="overview"><b>Simona Ivanova</b>Front-end developer</p>
                                                        
                                             


                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end testimonial -->
                    <!-- progress bar -->
                    <div class="col-md-6">
                        <div class="white_shd full margin_bottom_30">
                            <div class="full graph_head">
                                <div class="heading1 margin_0">
                                    <h2>Progress Bar</h2>
                                </div>
                            </div>
                            <div class="full progress_bar_inner">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="progress_bar">
                                            <!-- Skill Bars -->
                                            <span class="skill" style="width:73%;">Facebook <span class="info_valume">73%</span></span>
                                            <div class="progress skill-bar ">
                                                <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%;">
                                                </div>
                                            </div>
                                            <span class="skill" style="width:62%;">Twitter <span class="info_valume">62%</span></span>
                                            <div class="progress skill-bar">
                                                <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;">
                                                </div>
                                            </div>
                                            <span class="skill" style="width:54%;">Instagram <span class="info_valume">54%</span></span>
                                            <div class="progress skill-bar">
                                                <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;">
                                                </div>
                                            </div>
                                            <span class="skill" style="width:82%;">Google plus <span class="info_valume">82%</span></span>
                                            <div class="progress skill-bar">
                                                <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="width: 82%;">
                                                </div>
                                            </div>
                                            <span class="skill" style="width:48%;">Other <span class="info_valume">48%</span></span>
                                            <div class="progress skill-bar">
                                                <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end progress bar -->
                </div>
                <div class="row column4 graph">
                    <div class="col-md-6">
                        <div class="dash_blog">
                            <div class="dash_blog_inner">
                                <div class="dash_head">
                                    <h3><span><i class="fa fa-calendar"></i> 6 May 2022</span></h3>
                                </div>
                                <div class="list_cont">
                                    <p>Today Tasks for Simona Ivanova</p>
                                </div>
                                <div class="task_list_main">
                                    <ul class="task_list">
                                        <li><a href="#">Meeting about plan for Admin Template 2018</a><br><strong>10:00 AM</strong></li>
                                        <li><a href="#">Create new task for Dashboard</a><br><strong>10:00 AM</strong></li>
                                        <li><a href="#">Meeting about plan for Admin Template 2018</a><br><strong>11:00 AM</strong></li>
                                        <li><a href="#">Create new task for Dashboard</a><br><strong>10:00 AM</strong></li>
                                        <li><a href="#">Meeting about plan for Admin Template 2018</a><br><strong>02:00 PM</strong></li>
                                    </ul>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="dash_blog">
                            <div class="dash_blog_inner">
                                <div class="dash_head">
                                    <h3><span><i class="fa fa-comments-o"></i> Updates</span></h3>
                                </div>
                                <div class="list_cont">
                                    <p>User confirmation</p>
                                </div>
                                <div class="msg_list_main">
                                    <ul class="msg_list">
                                        <li>
                                            <span><img src="images/user_img.jpg" class="img-responsive" alt="#" /></span>
                                            <span>
                                                <span class="name_user">Simona Ivanova</span>
                                                <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                                                <span class="time_ago">12 min ago</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span><img src="images/user_img.jpg" class="img-responsive" alt="#" /></span>
                                            <span>
                                                <span class="name_user">Simona Ivanova</span>
                                                <span class="msg_user">On the other hand, we denounce.</span>
                                                <span class="time_ago">12 min ago</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span><img src="images/user_img.jpg" class="img-responsive" alt="#" /></span>
                                            <span>
                                                <span class="name_user">Simona Ivanova</span>
                                                <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                                                <span class="time_ago">12 min ago</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span><img src="images/user_img.jpg" class="img-responsive" alt="#" /></span>
                                            <span>
                                                <span class="name_user">Simona Ivanova</span>
                                                <span class="msg_user">On the other hand, we denounce.</span>
                                                <span class="time_ago">12 min ago</span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end dashboard inner -->
        </div>
    </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- wow animation -->
    <script src="js/animate.js"></script>
    <!-- select country -->

</body>


</body>

<script src="./js/nav.js"></script>

</html>