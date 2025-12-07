<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="estilos/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

</head>


<body>

    <main>
        <header>
            <h2 class="logo">Logo</h2>
            <nav class="navigation">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Contact</a>
                <button class="btnlogin-popup">Login</button>
            </nav>
        </header>


        <form class="contForm" action=""> 
                <div class="login">
                  <h2>Register</h2> 
                  
                 <span class="input-box-2" id="basic-addon1">Username</span>
                 <div class="input-box">
                    <input type="text" placeholder="Username">
                 </div>

                 <span class="input-box-2" id="basic-addon1">Email</span>
                 <div class="input-box">
                    <input type="email" placeholder="Email">
                 </div>

                 <span class="input-box-2" id="basic-addon1">Age</span>
                 <div class="input-box">

                <input type="number" min="16" max="80" class="no-scroll" required placeholder="Age">
                </div>

                <span class="input-box-2" id="basic-addon1">Gender</span>
                <div class="input-box">
                    <input type="text" required placeholder="Gender">
                </div>

                <span class="input-box-2" id="basic-addon1">Country</span>
                <div class="input-box">
                    <input type="text" placeholder="Country">
                 </div>

                 <span class="input-box-2" id="basic-addon1">State</span>
                 <div class="input-box">
                    <input type="text" placeholder="State">
                 </div>

                 <span class="input-box-2" id="basic-addon1">City</span>
                 <div class="input-box">
                    <input type="text" placeholder="City">
                 </div>

                 <span class="input-box-2" id="basic-addon1">School</span>
                 <div class="input-box">
                    <input type="text" placeholder="School">
                 </div>

                 <span class="input-box-2" id="basic-addon1">Password</span>
                <div class="input-box">
                    <input type="password" required placeholder="Password">
                </div>

                <div class="input-box">
                    <input type="password" required placeholder="Confirm Password">
                </div>
                  <div class="remember-forgot">
                    <label> <input type="checkbox"> Remember me </label> <br>
                  </div> <br>

                  <div class="form-box-login">
                    <button type="submit" class="btn"> <b>Register</b></button>
                  </div> <br>

                  <div class="login-register">
                    <p>Already have an account?
                    <a href="#" class="register-link">Login</a></p>
                  </div>  
               </div>
        </form>
    </main>
    <footer>
        <div class="Help">
            <a href="#" class="Help"> <b>Help</b> </a>
          </div>
    </footer>

</body>
</html>