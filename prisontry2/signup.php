<?php
    require "header.php";
    if(isset($_POST['signup-submit-btn'])||isset($_GET['error'])){

        echo'
    <main>
    <div class="container">
            <h1>Add an admin</h1>
            <form autocomplete="off" action="includes/signup.inc.php" method="post">
                <input type="text" autocomplete="off" name="uid" placeholder="Username">
                <input type="password" autocomplete="off" name="pwd" placeholder="Password">
                <input type="password" autocomplete="off" name="pwd-repeat" placeholder="Confirm Password">
                
                <button class="button" type="submit" name="signup-submit">signup</button>

            </form>
    </div>

    </main>';
    }else{
        echo'
        <main>
            <div class="container">
                <form>
                <h1>User not logged in!</h1>
                <a class="button" href="index.php">Click here to login</a>
                </form>
            </div>
        </main>  
        
        
        
        ';
    }?>
<?php
    require "footer.php"
?>