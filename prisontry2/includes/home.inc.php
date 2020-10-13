<?php
    require "../header_on_login.php";
    //we can enter this page only if the user is logged in so first check the sessions variable here 
    if(isset($_SESSION['userId'])){
        echo'

<main>

    
<!---    <div class="containee"><h1>Officer Operations</h1></div>-->
<div class="btn-group">
    <div class="operation">
       <div class="content">
           <h1>Officer Operations</h1>
       </div> 
       <div class="content">
           <form action="../signup.php" method="post">
                <button class=" button" type="submit" name="signup-submit-btn">Add a New Officer</a></button>
        </form>

       </div> 
       <div class="content">
        <button>   <a class=" button" href="#">Add a New Jailor</a></button>

       </div> 
       <div class="content">
        <button>   <a class=" button" href="#">Add a New Visitor</a></button>

       </div> 
       <div class="content">
        <button>   <a class=" button" href="#">Add a New FIR </a></button>

       </div> 
       <div class="content">
        <button>   <a class=" button" href="#">View Officers</a></button>

       </div> 
       <div class="content">
        <button>   <a class=" button" href="#">View Jailors</a></button>

       </div> 
       <div class="content">
        <button>   <a class=" button" href="#">View Visitors</a></button>

       </div> 
       <div class="content">
        <button>   <a class=" button" href="#">View FIRs</a></button>

       </div> 
       <div class="content">
        <button>   <a class=" button" href="#">View Prisoners</a></button>

       </div> 
       <div class="content">
        <button>   <a class=" button" href="#">Modify Officer details</a></button>

       </div> 
       <div class="content">
        <button>   <a class=" button" href="#">Modify Jailor details</a></button>

       </div> 
       <div class="content">
        <button>   <a class=" button" href="#">Modify Prisoner\'s Status</a></button>

    </div> 
    </div>
</div>
 
</main>
        ';
    }else{
    echo' <main>
    <div class="container">
        <form>
        <h1>User not logged in!</h1>
        <a class="button" href=" ../index.php">Click here to login</a>
        </form>
    </div>
</main>  
';
}?>

<?php
    require "../footer.php"
?>

