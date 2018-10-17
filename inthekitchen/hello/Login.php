<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search page</title>
  <link rel="stylesheet" type="text/css" href="Style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta charset="UTF-8">
  
</head>
<body>
  <div class="container">
    
    <div class = "login-box">
    <div class="row">
      <div class = "col-md-6 Login-left" background:rgba(211, 211, 211, 0.5);
                                         padding:30px;>
        
        <h2>Login Here</h2>
        <form action="validation.php" method = "post">
          
          <div class = "form-group">
            
            <label>Username</label>
            <input type= "text" name="user" class="form-control" required>
          </div>
           <div class = "form-group">
            
            <label>Password</label>
            <input type= "password" name="password" class="form-control" required>
          </div>
          <button type="submit"class="btn btn-primary"> Login</button>
        </form>
      </div>
      <div class = "col-md-6 Login-right" background: #fff;
                                           padding: 30px;>
        
        <h2>Register Here</h2>
        <form action="registration.php" method = "post">
          
          <div class = "form-group">
            
            <label>Username</label>
            <input type= "text" name="user" class="form-control" required>
          </div>
           <div class = "form-group">
            
            <label>Password</label>
            <input type= "password" name="password" class="form-control" required>
          </div>
          <button type="submit"class="btn btn-primary"> Register</button>
        </form>
      </div>
      
    </div>
    </div>
  </div>

  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
 
</html>