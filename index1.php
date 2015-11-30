<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Elastic Login Form</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <!--Google Font - Work Sans-->
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>

<div class="container">
  <div class="profile">
    <button class="profile__avatar" id="toggleProfile">
     <img src="https://pbs.twimg.com/profile_images/554631714970955776/uzPxPPtr.jpeg" alt="Avatar" /> 
    </button>
	<form method="post" class="x" action="facultylogin.php" enctype="multipart/form-data">
    <div class="profile__form">
      <div class="profile__fields">
        <div class="field">
          <input type="text" id="fieldUser" class="input" name="username" />
          <label for="fieldUser" class="label">Username</label>
        </div>
        <div class="field">
          <input type="password" id="fieldPassword" class="input" name="password" />
          <label for="fieldPassword" class="label">Password</label>
        </div>
		
        <div class="profile__footer">
          <input type="submit" name="submit" value="login" />
        </div>
      </div>
     </div>
	 </form>
  </div>
</div>
    
        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
