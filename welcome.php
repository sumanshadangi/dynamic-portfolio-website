<?php 
include 'config.php';
// include 'register.php';
session_start();
error_reporting(0);
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}


if (isset($_POST['submit']))
 {
    // home section variable
    $firstname = $_POST['firstname'];
    $secondname=$_POST['secondname'];
    $position = $_POST['position'];
    $aboutyou = $_POST['aboutyou'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];

    // contact section variable
    $call_num = $_POST['call_num'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $instagram = $_POST['instagram'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    
    // education section variable
    $school_m = $_POST['school_m'];
    $percentage_m = $_POST['percentage_m'];
    $year_m = $_POST['year_m'];
    $school_i = $_POST['school_i'];
    $percentage_i = $_POST['percentage_i'];
    $year_i = $_POST['year_i'];
    $school_g = $_POST['school_g'];
    $course = $_POST['course'];
    $branch = $_POST['branch'];
    $percentage_g = $_POST['percentage_g'];
    $year_g = $_POST['year_g'];

    // skills section variable
    $skill1 = $_POST['skill1'];
    $skill1_range = $_POST['skill1_range'];
     $skill2 = $_POST['skill2'];
    $skill2_range = $_POST['skill2_range'];
     $skill3 = $_POST['skill3'];
    $skill3_range = $_POST['skill3_range'];
     $skill4 = $_POST['skill4'];
    $skill4_range = $_POST['skill4_range'];
     $skill5 = $_POST['skill5'];
    $skill5_range = $_POST['skill5_range'];
    
    // project section variable
    $project_title_1 = $_POST['project_title_1'];
    $project_description_1 = $_POST['project_description_1'];
    $project_title_2 = $_POST['project_title_2'];
    $project_description_2 = $_POST['project_description_2'];
    $project_title_3 = $_POST['project_title_3'];
    $project_description_3 = $_POST['project_description_3'];
    $project_title_4 = $_POST['project_title_4'];
    $project_description_4 = $_POST['project_description_4'];
    $project_title_5 = $_POST['project_title_5'];
    $project_description_5 = $_POST['project_description_5'];


   $_SESSION['firstname'] = $firstname;
   $_SESSION['secondname'] = $secondname;
   $_SESSION['email'] = $email;
   

            $sql = "INSERT INTO detail (firstname,secondname, position, aboutyou, linkedin, github, call_num, email, address, instagram, facebook, twitter, school_m, percentage_m, year_m, school_i, percentage_i, year_i, school_g, course, branch, percentage_g, year_g, skill1, skill1_range, skill2, skill2_range, skill3, skill3_range, skill4, skill4_range, skill5, skill5_range, project_title_1, project_description_1, project_title_2, project_description_2, project_title_3, project_description_3, project_title_4, project_description_4) VALUES ('$firstname', '$secondname', '$position','$aboutyou', '$linkedin', '$github', '$call_num', '$email', '$address', '$instagram', '$facebook', '$twitter', '$school_m', '$percentage_m', '$year_m', '$school_i', '$percentage_i', '$year_i', ' $school_g', '$course', '$branch', '$percentage_g', '$year_g', '$skill1', '$skill1_range', '$skill2', '$skill2_range', '$skill3', '$skill3_range', '$skill4', '$skill4_range', '$skill5', '$skill5_range', '$project_title_1', '$project_description_1', '$project_title_2', '$project_description_2', '$project_title_3', '$project_description_3', '$project_title_4', '$project_description_4')";

     


            $result = mysqli_query($conn, $sql) or die("but not executed" . mysqli_error($conn));
            if ($result) {
                echo "<script>alert('Form Submited')</script>";
                $firstname = "";
                $secondname = "";
                $position="";
                header("Location: portfolio.php");
            } else {
                echo "<script>alert('Woops! Something Wrong Went.')</script>";
            }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="css/adminpanel_css.css">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   
    <title>admin panel</title>
  </head>
  <body>

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"> Welcome <?php echo $_SESSION['username'] ?></label>
            <ul>
                <li><a class="active" href="index.php">home</a></li>
              
                <li><a href="logout.php">logout</a></li>
               
               </ul>
    </nav> 
    <div class="container">
        
        

        <form action="" method="POST" class="row g-3">
            <div>
            <h2>HOME</h2> 
            
        </div>
             <div class="col-md-6">
    <label for="firstname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $firstname; ?>" required>
  </div>
  <div class="col-md-6">
    <label for="secondname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="secondname" name="secondname" value="<?php echo $secondname; ?>" required>
  </div>
  
  <div class="col-12">
    <label for="position" class="form-label">Position</label>
    <input type="text" class="form-control" id="position" name="position" value="<?php echo $position; ?>" placeholder="e.g. web Developer" required>
  </div>
   

  <div class="col-12">
    <label for="about" class="form-label">About You</label>
    <input type="text" class="form-control" id="about" name="aboutyou" value="<?php echo $aboutyou; ?>" placeholder="maximum 120 characters" required>
  </div>
  <div class="col-md-6">
    <label for="linkedin" class="form-label">Linkedin Link</label>
    <input type="text" class="form-control" id="linkedin" name="linkedin" value="<?php echo $linkedin; ?>" required>
  </div>
  <div class="col-md-6">
    <label for="github" class="form-label">Github Link</label>
    <input type="text" class="form-control" id="github" name="github" value="<?php echo $github; ?>" required>
  </div>




  <div>
        <h2>Contact Info</h2> 
            
    </div>
  <div class="col-md-6">
    <label for="call" class="form-label">Mobile number</label>
    <input type="text" class="form-control" id="call" name="call_num" value="<?php echo $call_num; ?>" required>
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
  </div>
  <div class="col-12">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" name="address" value="<?php echo $address; ?>" required>
  </div>
  <div class="col-md-4">
    <label for="instagram" class="form-label">instagram</label>
    <input type="text" class="form-control" id="instagram" name="instagram" value="<?php echo $instagram; ?>" required>
  </div>
  <div class="col-md-4">
    <label for="facebook" class="form-label">facebook</label>
    <input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo $facebook; ?>" required>
  </div>
  <div class="col-md-4">
    <label for="twitter" class="form-label">twitter</label>
    <input type="text" class="form-control" id="twitter" name="twitter" value="<?php echo $twitter; ?>" >
  </div>

<div>
            
    <h2>Education</h2> 
            
</div>

<div>
            
    <h5>Matriculation:</h5> 
            
</div>

 <div class="col-12">
    <label for="school-m" class="form-label">School</label>
    <input type="text" class="form-control" id="school-m" name="school_m" value="<?php echo $school_m; ?>" required>
  </div>

<div class="col-md-6">
    <label for="percentage-m" class="form-label">Percentage</label>
    <input type="text" class="form-control" id="percentage-m" name="percentage_m" placeholder="e.g. 95%" value="<?php echo $percentage_m; ?>" required>
</div>
<div class="col-md-6">
    <label for="year-m" class="form-label">year</label>
    <!-- <select id="year-m" class="form-select" name="year_m" value="<?php echo $year_m; ?>" >
      <option selected>select</option>
      <option>2001</option>
      <option>2002</option>
      <option>2003</option>
      <option>2004</option>
      <option>2005</option>
      <option>2006</option>
      <option>2007</option>
      <option>2008</option>
      <option>2009</option>
      <option>2010</option>
      <option>2011</option>
      <option>2012</option>
      <option>2014</option>
      <option>2015</option>
      <option>2016</option>
      <option>2017</option>
      <option>2018</option>
    </select> -->
    <input type="text" class="form-control" id="year-m" name="year_m" placeholder="e.g. 2021" value="<?php echo $year_m; ?>">
  </div>

  <div>
            <h5>Intermediate:</h5> 
            
        </div>

 <div class="col-12">
    <label for="school-i" class="form-label">School</label>
    <input type="text" class="form-control" id="school-i" name="school_i" value="<?php echo $school_i; ?>" required>
  </div>

<div class="col-md-6">
    <label for="percentage-i" class="form-label">Percentage</label>
    <input type="text" class="form-control" id="percentage-i" name="percentage_i" placeholder="e.g. 95%" value="<?php echo $percentage_i; ?>" required>
</div>
<div class="col-md-6">
    <label for="year-i" class="form-label">year</label>
    <!-- <select id="year-i" class="form-select" name="year_i" value="<?php echo $year_i; ?>" >
      <option selected>select</option>
      <option>2001</option>
      <option>2002</option>
      <option>2003</option>
      <option>2004</option>
      <option>2005</option>
      <option>2006</option>
      <option>2007</option>
      <option>2008</option>
      <option>2009</option>
      <option>2010</option>
      <option>2011</option>
      <option>2012</option>
      <option>2014</option>
      <option>2015</option>
      <option>2016</option>
      <option>2017</option>
      <option>2019</option>
      <option>2020</option>
      <option>2021</option>
      <option>2022</option>
      <option>2023</option>
     
    </select> -->
    <input type="text" class="form-control" id="year-i" name="year_i" placeholder="e.g.2021" value="<?php echo $year_i; ?>">
  </div>
  <div>
            <h5>Graduation:</h5> 
            
        </div>

 <div class="col-12">
    <label for="school-g" class="form-label">Collge</label>
    <input type="text" class="form-control" id="school-g" name="school_g" value="<?php echo $school_g; ?>" required>
  </div>
<div class="col-md-6">
    <label for="course" class="form-label">Course</label>
    <input type="text" class="form-control" id="course" name="course" placeholder="e.g. B.tech" value="<?php echo $course; ?>" required>
</div>
<div class="col-md-6">
    <label for="branch" class="form-label">Branch</label>
    <input type="text" class="form-control" id="branch" name="branch" placeholder="e.g.Computer Science and Engineering" value="<?php echo $branch; ?>" required>
</div>
<div class="col-md-6">
    <label for="percentage-g" class="form-label">Current CGPA</label>
    <input type="text" class="form-control" id="percentage-g" name="percentage_g" placeholder="e.g. 7.5 CGPA" value="<?php echo $percentage_g; ?>" required>
</div>
<div class="col-md-6">
    <label for="year-g" class="form-label">year</label>
    <!-- <select id="year-g" class="form-select" name="year_g" value="<?php echo $year_g; ?>" >
      <option selected>select</option>
      <option>2001</option>
      <option>2002</option>
      <option>2003</option>
      <option>2004</option>
      <option>2005</option>
      <option>2006</option>
      <option>2007</option>
      <option>2008</option>
      <option>2009</option>
      <option>2010</option>
      <option>2011</option>
      <option>2012</option>
      <option>2014</option>
      <option>2015</option>
      <option>2016</option>
      <option>2017</option>
      <option>2019</option>
      <option>2020</option>
      <option>2021</option>
      <option>2022</option>
      <option>2023</option>
     
    </select> -->
    <input type="text" class="form-control" id="year-g" name="year_g" placeholder="e.g.2021" value="<?php echo $year_g; ?>">
  </div>

<div>
            <h2>Skills</h2> 
            
        </div>

<div class="col-md-5">
    <label for="skill1" class="form-label"></label>
    <input type="text" class="form-control" id="skill1" name="skill1" placeholder="e.g. HTML" value="<?php echo $skill1; ?>">
</div>
<div class="col-md-7">
    <label for="skill1_range" class="form-label"></label>
<input type="range" class="form-range" min="0" max="100" id="skill1_range" name="skill1_range" value="<?php echo $skill1_range; ?>">
</div>

<div class="col-md-5">
    <label for="skill2" class="form-label"></label>
    <input type="text" class="form-control" id="skill2" name="skill2" placeholder="e.g. HTML" value="<?php echo $skill2; ?>">
</div>
<div class="col-md-7">
    <label for="skill2_range" class="form-label"></label>
<input type="range" class="form-range" min="0" max="100" id="skill2_range" name="skill2_range" value="<?php echo $skill2_range; ?>">
</div>

<div class="col-md-5">
    <label for="skill3" class="form-label"></label>
    <input type="text" class="form-control" id="skill3" name="skill3" placeholder="e.g. HTML" value="<?php echo $skill3; ?>">
</div>
<div class="col-md-7">
    <label for="skill3_range" class="form-label"></label>
<input type="range" class="form-range" min="0" max="100" id="skill3_range" name="skill3_range" value="<?php echo $skill3_range; ?>">
</div>

<div class="col-md-5">
    <label for="skill4" class="form-label"></label>
    <input type="text" class="form-control" id="skill4" name="skill4" placeholder="e.g. HTML" value="<?php echo $skill4; ?>">
</div>
<div class="col-md-7">
    <label for="skill4_range" class="form-label"></label>
<input type="range" class="form-range" min="0" max="100" id="skill4_range" name="skill4_range" value="<?php echo $skill4_range; ?>">
</div>

<div class="col-md-5">
    <label for="skill5" class="form-label"></label>
    <input type="text" class="form-control" id="skill5" name="skill5" placeholder="e.g. HTML" value="<?php echo $skill5; ?>">
</div>
<div class="col-md-7">
    <label for="skill5_range" class="form-label"></label>
<input type="range" class="form-range" min="0" max="100" id="skill5_range" name="skill5_range" value="<?php echo $skill5_range; ?>">
</div>

<div>
            <h2>Projects</h2> 
            
        </div>

<div class="col-12">
    <label for="project_title_1" class="form-label">Project Title</label>
    <input type="text" class="form-control" id="project_title_1" name="project_title_1" value="<?php echo $project_title_1; ?>">
  </div>
  <div class="col-12">
    <label for="project_description_1" class="form-label">Project Description</label>
    <input type="text" class="form-control" id="project_description_1" name="project_description_1" value="<?php echo $project_description_1; ?>">
  </div>


  <div class="col-12">
    <label for="project_title_2" class="form-label">Project Title</label>
    <input type="text" class="form-control" id="project_title_2" name="project_title_2" value="<?php echo $project_title_2; ?>">
  </div>
  <div class="col-12">
    <label for="project_description_2" class="form-label">Project Description</label>
    <input type="text" class="form-control" id="project_description_2" name="project_description_2" value="<?php echo $project_description_2; ?>">
  </div>

  <div class="col-12">
    <label for="project_title_3" class="form-label">Project Title</label>
    <input type="text" class="form-control" id="project_title_3" name="project_title_3" value="<?php echo $project_title_3; ?>">
  </div>
  <div class="col-12">
    <label for="project_description_3" class="form-label">Project Description</label>
    <input type="text" class="form-control" id="project_description_3" name="project_description_3" value="<?php echo $project_description_3; ?>">
  </div>

  <div class="col-12">
    <label for="project_title_4" class="form-label">Project Title</label>
    <input type="text" class="form-control" id="project_title_4" name="project_title_4" value="<?php echo $project_title_4; ?>">
  </div>
  <div class="col-12">
    <label for="project_description_4" class="form-label">Project Description</label>
    <input type="text" class="form-control" id="project_description_4" name="project_description_4" value="<?php echo $project_description_4; ?>">
  </div>

  
 <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </div>
        </form>
    </div>
        
  <script src="js/app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
  </body>
</html>





<!-- <div class="form_container">
        <form action="" method="POST" class="login-email">
            
        </form>
        
    </div> 
 -->

<!-- <h2 class="form_heading">Portfolio Details</h2>
            <div class="input-group">
                <input type="text" placeholder="name" name="name" value="<?php echo $name; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="position" name="position" value="<?php echo $position; ?>" required>
            </div>
           

            
            <div class="input-group">
                <button name="submit" class="btn">submit</button>
            </div> -->
