<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ID Card Generator</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      background-image: url("https://static.vecteezy.com/system/resources/previews/000/581/452/original/wave-pink-abstract-background-with-copy-space-vector-illustration-eps10.jpg");
      background-repeat: no-repeat;
      background-size: cover ;
    }
    h1{border:1px solid #C51624;
    font-family:Aharoni; 
    font-size:1.1em; 
    margin:2px 2px 30px 5px; 
    color:black;
    background-color:#d5314b; 
    padding:3px; 
    text-align:center;
    font-weight:normal;
    background:radial-gradient( #ffffff, #e47d8f);
    }

    h2{border:0px solid #C51624;
    font-family:Aharoni; 
    font-size:0.8em; 
    color:black;
    background-color:#d5314b; 
    text-align:center;
    font-weight:normal;
    background:radial-gradient( #ffffff, #e47d8f);
    }
    </style>
</head>

<body>
<?php
// Report all errors except E_NOTICE   
error_reporting(E_ALL ^ E_NOTICE);  
    require('db.php');
    session_start();

        if (isset($_REQUEST['register'])) {
        
           // removes backslashes
            $name = stripslashes($_REQUEST['name']);
            //escapes special characters in a string
            $name = mysqli_real_escape_string($con, $name);

            $email    = stripslashes($_REQUEST['email']);
            $email    = mysqli_real_escape_string($con, $email);
           
            $dob = stripslashes($_REQUEST['dob']);
            $dob = mysqli_real_escape_string($con, $dob);
            $create_datetime = date("Y-m-d H:i:s");
            $query    = "INSERT into `users` (name, email,dob, create_datetime)
                         VALUES ('$name', '$email', '$dob', '$create_datetime')";
            $result   = mysqli_query($con, $query);
      
        }
?>
<!-- partial:index.partial.html -->
<h1>Personal ID Card Generator</h1>
<form method="post" id="register">
<div id="id-card">
  <div class="id-card material-ui-shadow">

    <!-- \\ mugshot -->
    <div class="id-card__mugshot">
      <img src="http://www.travelcontinuously.com/wp-content/uploads/2018/04/empty-avatar.png" id="id-card-mugshot">
    </div>
   

    
    <div class="id-card__logo logo">
    <h2>ID Card🎫</h2>
    <span class="logo__small">www.personal-idcardgenerator.com</span>
    </div>


    <!-- experiment banner -->
    <div class="id-card__banner">
      <span class="id-card__banner-text">Serve happiness with pretty smiles😃:)</span>
    </div>
    <!-- // experiment banner -->

    <!-- \\ details -->
    <div class="id-card__details">
      <div class="id-card__detail">
        <span class="id-card__detail-label">Name</span>
        <span class="id-card__detail-value" id="id-card-name">User</span>
      </div>
      <div class="id-card__detail">
        <span class="id-card__detail-label">Date of Birth</span>
        <span class="id-card__detail-value" id="id-card-date-of-birth">11/20/2021</span>
      </div>
      
      <div class="id-card__detail">
        <span class="id-card__detail-label">Phone Number</span>
        <span class="id-card__detail-value" id="id-card-phone">8234567899</span>
      </div>

      <div class="id-card__detail">
        <span class="id-card__detail-label">College</span>
        <span class="id-card__detail-value" id="id-card-weight">Sri Ramakrishna Engineering College</span>
      </div>

      <div class="id-card__detail">
        <span class="id-card__detail-label">Email</span>
        <span class="id-card__detail-value" id="id-card-email"><a href="mailto:brindhamanickavasakan2@gmail.com">brindhamanickavasakan2@gmail.com</a></span>
      </div>
      
      <div class="id-card__detail">
        <span class="id-card__detail-label">Home Town</span>
        <span class="id-card__detail-value" id="id-card-home">Coimbatore🏡</span>
      </div>

      <br><br>
      <div>
        <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
        <a href="https://www.twitter.com/" class="fa fa-twitter"></a>
        <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
      </div>

  </div>
    <!-- // details -->

    <!-- \\ short details -->
    <div class="id-card__details id-card__details--short">
      <div class="id-card__detail">
        <span class="id-card__detail-label">Gender</span>
        <span class="id-card__detail-value" id="id-card-gender">Male</span>
      </div>

      <div class="id-card__detail">
        <span class="id-card__detail-label">Hobbies</span>
        <span class="id-card__detail-value" id="id-card-hobby">Sleeping💤</span>
      </div>

      <div class="id-card__detail">
        <span class="id-card__detail-label">Height</span>
        <span class="id-card__detail-value" id="id-card-height">5'03"</span>
      </div>

      <div class="id-card__detail">
        <span class="id-card__detail-label">Department</span>
        <span class="id-card__detail-value" id="id-card-dept">CSE</span>
      </div>
      
      <div class="id-card__detail">
        <span class="id-card__detail-label">Blood Group</span>
        <span class="id-card__detail-value" id="id-card-blood">🅾+ve</span>
      </div>
       

    </div>
  </div>
    <!-- // short details -->

  </div>
</div>

<div id="id-form">
  <div class="id-form">
    <div class="id-form__row id-form__row--inline">
      <div class="id-form__label">Name</div>
      <div class="id-form__input">
        <input type="text" id="name" placeholder="Name" name="name" required minlength="3" maxlength="25">
      </div>
    </div>
    <div class="id-form__row id-form__row--inline">
      <div class="id-form__label">Date of Birth</div>
      <div class="id-form__input">
        <input type="date" id="date-of-birth" placeholder="Date of Birth" name="dob" required> 
      </div>
    </div>
    <div></div>
    <div class="id-form__row id-form__row--inline">
      <div class="id-form__label">Gender</div>
      <div class="id-form__input">
        <select id="gender">
          <option value="Male👨🏻">Male</option>
          <option value="Female👩🏻">Female</option>
        </select>
      </div>
    </div>
    <div class="id-form__row id-form__row--inline">
      <div class="id-form__label">Height</div>
      <div class="id-form__input">
        <input type="text" id="height" placeholder="Height">
      </div>
    </div>

    <div class="id-form__row id-form__row--inline">
      <div class="id-form__label">Hobby</div>
      <div class="id-form__input">
        <select id="hobby">
          <option value="Music🎶">Music🎶</option>
          <option value="Sleeping💤">Sleeping💤</option>
          <option value="Coding💻">Coding💻</option>
          <option value="Dancing💃🏻">Dancing💃🏻</option>
          <option value="Reading📚">Reading Books📚</option>
        </select>
      </div>
    </div>
<br>
    <div class="id-form__row id-form__row--inline">
      <div class="id-form__label">Upload Photo</div>
      <div class="id-form__input">
        <input type="file" id="mugshot" accept="image/*" required>
      </div>

    </div>

<br>
      
      <div class="id-form__label">Phone Number</div>
      <div class="id-form__input">
        <input type="text" id="phone" placeholder="Contact Number" maxlength="10" >
      </div>

      <div class="id-form__label">College</div>
      <div class="id-form__input">
        <input type="text" id="weight" placeholder="College" >
      </div>

      <div class="id-form__label">Email</div>
      <div class="id-form__input">
        <input type="text" id="Email" placeholder="Email" name="email" >
      </div>
    
      <div class="id-form__row id-form__row--inline">
        <div class="id-form__label">Department</div>
        <div class="id-form__input">
          <select id="Department">
            <option value="AI">AI</option>
            <option value="CSE">CSE</option>
            <option value="ECE">ECE</option>
            <option value="EEE">EEE</option>
            <option value="MECH">MECH</option>
            <option value="AERO">AERO</option>
            <option value="CIVIL">CIVIL</option>
            <option value="EIE">EIE</option>
          </select>
        </div>
      </div>

      <div class="id-form__row id-form__row--inline">
        <div class="id-form__label">Blood Group</div>
        <div class="id-form__input">
          <select id="blood">
            <option value="🅾️+ve">🅾️+ve</option>
            <option value="🅰️+ve">🅰️+ve</option>
            <option value="🆎+ve">🆎+ve</option>
            <option value="🅱️+ve">🅱️+ve</option>
            <option value="🅾️-ve">🅾️-ve</option>
            <option value="🅰️-ve">🅰️-ve</option>
            <option value="🆎-ve">🆎-ve</option>
            <option value="🅱️-ve">🅱️-ve</option>
            
          </select>
        </div>
      </div>

      <div class="id-form__row id-form__row--inline">
      <div class="id-form__label">Home Town</div>
      <div class="id-form__input">
        <input type="text" id="hometown" placeholder="Enter State">
      </div>
    </div>

      
  </div>
</div>

<input type="checkbox" id="download-button" name="download-button" value="Download" unchecked>Download ID
<br><br>
<button id="register" name="register" class="button">SAVE</button>
</form>
     
<!-- partial -->
<script src='https://rawgit.com/blueimp/JavaScript-MD5/master/js/md5.min.js'></script>
<script src='https://html2canvas.hertzen.com/dist/html2canvas.min.js'></script>
<script  src="./script.js"></script>

</body>
</html>
