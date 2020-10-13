<?php
    require "header.php";
    if(isset($_POST['signup-submit-btn'])||isset($_GET['error'])){
        if(isset($_GET['error'])){
            if($_GET['error']=="emptyfields"){
                echo'<style>h2{color:red;background:white;display:inline-block;} </style>
                <div class=" container err"><h2 >Fill in all the fields !</h2></div>';
    
            }else  if($_GET['error']=="invaliduid"){
                echo'<style>h2{color:red;background:white;display:inline-block;} </style>
                <div class=" container err"><h2 >Enter Proper Username(use alpa and numbers) !</h2></div>';
    
            }else  if($_GET['error']=="passwordnotmatched"){
                echo'<style>h2{color:red;background:white;display:inline-block;} </style>
                <div class=" container err"><h2 >Rewrite the correct password !</h2></div>';
    
            }else  if($_GET['error']=="sameuserexistserror"){
                echo'<style>h2{color:red;background:white;display:inline-block;} </style>
                <div class=" container err"><h2 >A user already exists with this username!</h2></div>';
    
            }else  if($_GET['error']=="sqlerror"){
                echo'<style>h2{color:red;background:white;display:inline-block;} </style>
                <div class=" container err"><h2 >sqlerror!</h2></div>';
    
            }
    
        }
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

  
    }else if($_GET['signup']=="success"){
        echo'
        <div class="container"></div>
        <main>
        <style>h1{color:green; background:white;}a{font-weight:1000;text-align:center}</style>
            <div class="container">
                <form>
                <h1>Signup Successful, now login by clicking the below link!</h1>
                <a class="button" href="index.php">Click here to login</a>
                </form>
            </div>
        </main>  
        ';

    }else{
        echo'
        <div class="container"></div>
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