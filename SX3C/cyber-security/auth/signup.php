<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Signup Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form class="form" action='adduser.php' method="POST">
    <h2>Sign Up</h2>
    <div class="form-group">
      <label for="full-name">Full Name:</label>
      <input type="text" id="fullName" name="fullName" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <div class="form-group">
      <label for="confirm-password">Confirm Password:</label>
      <input type="password" id="confirmPassword" name="confirmPassword" required>
      <p style="color:red;" id="warning"></p>
    </div>
    <div class="form-group">
      <input type="submit" value="Sign Up">
    </div>
  </form>
</body>
</html>
<script type="text/javascript">
  const a= document.getElementById('password');
  const b= document.getElementById('confirmPassword');
  const c= document.getElementById('warning')

  b.addEventListener('input', function(){
    if(a.value!=b.value){
      c.innerHTML='Passwords do not match!';
    }else{c.innerHTML='';}
  })
</script>