<?php
    require "header.php";

?>


    <main>
        
    <div class="container test">
    <!--  
    <p>You are logged out!</p>
    <p>You are logged in!</p>
    -->
    
        <h1>Officer Login</h1>
    

    </div>

         
    <div class="container">
            <form autocomplete="off" action="includes/login.inc.php" method="post">
                <input type="text" autocomplete="off" name="mailuid" placeholder="Username">
                <input type="password" autocomplete="off" name="pwd" placeholder="Password">
                <button class="button" type="submit" name="login-submit">login</button>

            </form>
            <!--
            <form action="includes/logout.inc.php" method="post">

               <button class="button logoutbtn" type="submit" name="logout-submit">logout</button>

            </form>
            <form action="signup.php" method="post">

                 <button class="button signupbtn" type="submit" name="signup-submit">signup</button>
    
            </form>
            -->
        </div>

    </main>
<?php
    require "footer.php"
?>