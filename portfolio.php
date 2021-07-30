

<?php
include 'config.php';

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
$firstname=$_SESSION['firstname']; 
$email=$_SESSION['email']; 
$sql = "SELECT * FROM detail WHERE email='$email';";
$result = mysqli_query($conn,$sql);
$res = mysqli_fetch_array($result);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
   
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Portfolio</title>
    <style>
        
    </style>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><?php echo $res['firstname']; ?> <?php echo $res['secondname']; ?></label>
            <ul>
                <li><a href="#">home</a></li>
                
                <li><a href="#experience">Education</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#project">Project</a></li>
                <li><a href="#contact">Contact</a></li>
                <li>
                    <a><i class="uil uil-moon change-theme" id="theme-button"></i></a>
                </li>
                
            </ul>
    </nav>   
    <main class="main">
        <section class="home section" id="home">
            <div class="home_container container grid" >
                <div class="home_content grid" >
                    <div class="home_img">
                       
                        <svg class="home_blob" viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                              <pattern id="img" patternUnits="userSpaceOnUse" width="100" height="100">
                                <image class="home_blob-img" xlink:href="css/image3.png" x="-25" width="350" height="100" />
                              </pattern>
                            </defs>
                            <polygon points="50 1 95 25 95 75 50 99 5 75 5 25" fill="url(#img)"/>
                          </svg>
                          <div class="home_social">
                              <a href="<?=$res['linkedin']?>" class="home_social-icon"><i class="uil uil-linkedin-alt"></i></a>
                              <a href="<?=$res['instagram']?>" class="home_social-icon"><i class="uil uil-instagram"></i></a>
                              <a href="<?=$res['github']?>" class="home_social-icon"><i class="uil uil-github-alt"></i></a>
                          </div>
                    </div>
                    <div class="home_data">
                        <h1 class="home_title">Hi,<br> I'm <?php echo $res['firstname']; ?></h1>
                        <h3 class="home_subtitle"><?php echo $res['position']; ?></h3>
                        <p class="home_description"><?php echo $res['aboutyou']; ?></p>
                        <a href="#contact" class="button button--flex">
                            Contact Me <i class="uil uil-message button_icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="experience section" id="experience">
            <h2 class="section_title">Education</h2>
            <span class="section_subtitle1" align="center"></span>
            <div class="qualification_container container">
                <div class="qualification_content">
                    <div class="qualification_data">
                     <div class="date"><i class="uil uil-schedule"></i><?php echo $res['year_m']; ?></div>
                     <div class="data">
                        <h4 class="degree">Matriculation</h4>
                        <p class="institute"><?php echo $res['school_m']; ?></p>
                        <p class="institute"><?php echo $res['percentage_m']; ?></p>
                    </div>
                     
                   </div>
                
                
                </div>
                <div class="qualification_content">
                    <div class="qualification_data">
                         <div class="date"><i class="uil uil-schedule"></i><?php echo $res['year_i']; ?></div>
                         <div class="data">
                            <h4 class="degree">Intermediate</h4>
                            <p class="institute"><?php echo $res['school_i']; ?></p>
                            <p class="institute"><?php echo $res['percentage_i']; ?></p>
                        </div>
                         
                     </div>
                    
                    
                </div>
                    <div class="qualification_content">
                        <div class="qualification_data">
                             <div class="date"><i class="uil uil-schedule"></i><?php echo $res['year_g']; ?></div>
                             <div class="data">
                                <h4 class="degree">Graduation</h4>
                                <p class="institute"><?php echo $res['course']; ?>-<?php echo $res['branch']; ?></p>
                                <p class="institute"><?php echo $res['school_g']; ?></p>
                                <p class="institute"><?php echo $res['percentage_g']; ?></p>
                            </div>
                             
                        </div>
                       
                        
                        </div>
                        
            </div>
        </section>
        <section class="skills section" id="skills">
            <h2 class="section_title">Skills</h2>
            <span class="section_subtitle1" align="center">My expertise Area</span>
            <div class="skills_container container">
               <div>
                   <div class="skills_content">
                      
                       <div class="skills_list grid">
                        <div class="skills_data">
                            <div class="skills_title">
                                <h3 class="skills_name"><?php echo $res['skill1']; ?></h3>
                                <span class="skills_number"><?php echo $res['skill1_range']; ?>%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_html" style=" width:<?=$res['skill1_range']?>%;"> </span>
                            </div>
                        </div> 
                        <div class="skills_data">
                            <div class="skills_title">
                                <h3 class="skills_name"><?php echo $res['skill2']; ?></h3>
                                <span class="skills_number"><?php echo $res['skill2_range']; ?>%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_css" style=" width:<?=$res['skill2_range']?>%;"> </span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_title">
                                <h3 class="skills_name"><?php echo $res['skill3']; ?></h3>
                                <span class="skills_number"><?php echo $res['skill3_range']; ?>%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_js" style=" width:<?=$res['skill3_range']?>%;"> </span>
                            </div>
                        </div> 
                        <div class="skills_data">
                            <div class="skills_title">
                                <h3 class="skills_name"><?php echo $res['skill4']; ?></h3>
                                <span class="skills_number"><?php echo $res['skill4_range']; ?>%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_react" style=" width:<?=$res['skill4_range']?>%;"> </span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_title">
                                <h3 class="skills_name"><?php echo $res['skill5']; ?></h3>
                                <span class="skills_number"><?php echo $res['skill5_range']; ?>%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_react" style=" width:<?=$res['skill5_range']?>%;"> </span>
                            </div>
                        </div>
                       </div>
                   </div>
                   
               </div> 
               
            </div>
        </section>
        <!-- <section class="qualification section" id="qualification">
            <h2 class="section_title">Qualification</h2>
            <span class="section_subtitle1" align="center">My journey</span>
            <div class="qualification_container container">
                <div class="qualification_content">
                <div class="qualification_data">
                     <div class="date"><i class="uil uil-schedule"></i> 2021-2023</div>
                     <div class="data">
                        <h4 class="degree">Matriculation</h4>
                        <p class="institute">Kendriya vidyalaya fortwilliam</p>
                    </div>
                     
                </div>
                <div class="icon">
                    <i class="uil uil-location-arrow-alt"></i>
                </div>
                
                </div>
                <div class="qualification_content">
                    <div class="qualification_data">
                         <div class="date"><i class="uil uil-schedule"></i> 2021-2023</div>
                         <div class="data">
                            <h4 class="degree">Matriculation</h4>
                            <p class="institute">Kendriya vidyalaya fortwilliam</p>
                        </div>
                         
                    </div>
                    <div class="icon">
                        <i class="uil uil-location-arrow-alt"></i>
                    </div>
                    
                    </div>
                    <div class="qualification_content">
                        <div class="qualification_data">
                             <div class="date"><i class="uil uil-schedule"></i> 2021-2023</div>
                             <div class="data">
                                <h4 class="degree">Matriculation</h4>
                                <p class="institute">Kendriya vidyalaya fortwilliam</p>
                            </div>
                             
                        </div>
                        <div class="icon">
                            <i class="uil uil-location-arrow-alt"></i>
                        </div>
                        
                        </div>
                        <div class="qualification_content">
                            <div class="qualification_data">
                                
                                 <div class="date"><i class="uil uil-schedule"></i> 2021-2023</div>
                                 <div class="data">
                                    <h4 class="degree">Matriculation</h4>
                                    <p class="institute">Kendriya vidyalaya fortwilliam</p>
                                </div>
                                 
                            </div>
                            <div class="icon">
                                <i class="uil uil-location-arrow-alt"></i>
                            </div>
                            
                            </div>
            </div>
        </section> -->
        <section class="project section" id="project">
            <h2 class="section_title">Projects</h2>
            <span class="section_subtitle1" align="center">My ideas</span>
            <div class="project_container container grid">
                <div class="project_content">
                    <div>
                        <i class="uil uil-grid project_icon"></i>
                        <h3 class="project_title"><?php echo $res['project_title_1']; ?></h3>
                    </div>
                    <span class="button button--flex button--small button--link project_button">
                        view more
                        <i class="uil uil-arrow-right"></i>
                    </span>
                    <div class="project_modal">
                        <div class="project_modal-content">
                            <h4 class="project_modal-title"><?php echo $res['project_title_1']; ?></h4>
                            <i class="uil uil-times project_modal-close"></i>
                            <p class="project_description"><?php echo $res['project_description_1']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="project_content">
                    <div>
                        <i class="uil uil-grid project_icon"></i>
                        <h3 class="project_title"><?php echo $res['project_title_2']; ?></h3>
                    </div>
                    <span class="button button--flex button--small button--link project_button">
                        view more
                        <i class="uil uil-arrow-right"></i>
                    </span>
                    <div class="project_modal">
                        <div class="project_modal-content">
                            <h4 class="project_modal-title"><?php echo $res['project_title_2']; ?></h4>
                            <i class="uil uil-times project_modal-close"></i>
                            <p class="project_description"><?php echo $res['project_description_2']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="project_content">
                    <div>
                        <i class="uil uil-grid project_icon"></i>
                        <h3 class="project_title"><?php echo $res['project_title_3']; ?></h3>
                    </div>
                    <span class="button button--flex button--small button--link project_button">
                        view more
                        <i class="uil uil-arrow-right"></i>
                    </span>
                    <div class="project_modal">
                        <div class="project_modal-content">
                            <h4 class="project_modal-title"><?php echo $res['project_title_3']; ?></h4>
                            <i class="uil uil-times project_modal-close"></i>
                            <p class="project_description"><?php echo $res['project_description_3']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="project_content">
                    <div>
                        <i class="uil uil-grid project_icon"></i>
                        <h3 class="project_title"><?php echo $res['project_title_4']; ?></h3>
                    </div>
                    <span class="button button--flex button--small button--link project_button">
                        view more
                        <i class="uil uil-arrow-right"></i>
                    </span>
                    <div class="project_modal">
                        <div class="project_modal-content">
                            <h4 class="project_modal-title"><?php echo $res['project_title_4']; ?></h4>
                            <i class="uil uil-times project_modal-close"></i>
                            <p class="project_description"><?php echo $res['project_description_4']; ?></p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

        <section class="contact section" id="contact">
            <h2 class="section_title">Contact Me</h2>
            <span class="section_subtitle1"></span>
            <div class="contact_container container grid">
                <div>
                    <div class="contact_information">
                    <i class="uil uil-phone-alt contact_icon"></i>
                    <div>
                        <h3 class="contact_title">Call Me</h3>
                        <span class="contact_subtitle"><?php echo $res['call_num']; ?></span>
                    </div>
                </div>
                <div class="contact_information">
                    <i class="uil uil-envelope contact_icon"></i>
                    <div>
                        <h3 class="contact_title">Email</h3>
                        <span class="contact_subtitle"><?php echo $res['email']; ?></span>
                    </div>
                </div>
                <div class="contact_information">
                    <i class="uil uil-map-marker contact_icon"></i>
                    <div>
                        <h3 class="contact_title">Location</h3>
                        <span class="contact_subtitle"><?php echo $res['address']; ?></span>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <footer class="footer">
            <div class="footer_bg">
                <div class="footer_container container grid">
                    <div class="footer_socials">
                     <a href="<?=$res['facebook']?>" class="footer_social">
                        <i class="uil uil-facebook-f"></i>
                     </a>
                     <a href="<?=$res['instagram']?>" class="footer_social">
                        <i class="uil uil-instagram"></i>
                     </a>
                     <a href="<?=$res['twitter']?>" class="footer_social">
                        <i class="uil uil-twitter-alt"></i>
                     </a>
                    </div>
                </div>
                <p class="footer_copy">All rights reserved</p>
            </div>
        </footer>
    </main>
    <script src="js/app.js"></script>
    
</body>
</html>
