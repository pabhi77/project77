<?php      
    $host = "db";  
    $user = "MYSQL_USER";  
    $password = 'password';  
    $db_name = "database";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    
        $username = $_POST['user'];  
        $password = $_POST['pass'];  
      
      
        $sql="select * from login where username='".$username."' ";
        $result = mysqli_query($con, $sql);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            
        
        }  
        else{  
            $reg="insert into login(username,password) values('$username','$password')";
             mysqli_query($con,$reg);
            echo"<script>alert('Registration successful')</script>";
        }       
?>  
<html>  
<head>  
    <title>PHP login system</title>  
    
       
</head>  
<body>  
    
        <h1>Login</h1>  
        <form name="f1" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    
    
</body>     
</html>  