<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Build Portfolio</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,600&display=swap');
    body{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins',sans-serif;
    }
    .index_home{
      background-image: url('css/background3.jpg');
      background-size: cover;
      /*border: 2px solid black;*/
      height: 100vh;
      width: 100%;
      position: fixed;
    }
    .index_button{
      display: flex;
       flex-direction: column;
       margin: 20px;
       margin-left: 40px;
    }
     .index_button>h2{
    color: ghostwhite;
     }
    button a{
  text-decoration: none;
  font-size:.9rem;
  font-weight: 500;
    }
    button{
      margin: 4px;
      border-radius: 10px;
      height: 40px;
      width: 6rem;
      border: none;
      font-family: 'Poppins',sans-serif;
      background-color: ghostwhite;
      color: hsl(250,69%,61%);
      box-shadow: 0 2px 4px rgba(0,0,0,.45);

    }
  </style>
</head>
<body>

 <div class="index_home">

   <div class="index_button">
    <h2>CREATE YOUR PORTFOLIO IN JUST 5 MINS</h2>
    <div class="btn">
    <button><a href="register.php">REGISTER</a></button>
    <button><a href="login.php">LOGIN</a></button>
    </div>
    </div>
 </div>
</body>
</html>