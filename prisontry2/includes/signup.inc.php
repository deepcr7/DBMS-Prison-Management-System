
<?php
    if(isset($_POST['signup-submit'])){
        require 'dbh.inc.php';
        $username=$_POST['uid'];
        $password=$_POST['pwd'];
        $passwordRepeat=$_POST['pwd-repeat'];
        if(empty($username)||empty($password)||empty($passwordRepeat)){

            header("Location: ../signup.php?error=emptyfields&uid=".$username);
            exit();
            

        }
        else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
            header("Location: ../signup.php?error=invaliduid&uid=".$username);
             exit();
         }
         else if($password !== $passwordRepeat){
            header("Location: ../signup.php?error=passwordnotmatched&uid=".$username);
            exit();
        }
        else{
            $sql="SELECT uidUsers FROM users WHERE uidUsers=?";
            $stmt=mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                 header("Location: ../signup.php?error=sqlerror");
                 exit();
            }else{
                mysqli_stmt_bind_param($stmt,"s",$username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck= mysqli_stmt_num_rows($stmt);
                if($resultCheck>0){
                    header("Location: ../signup.php?error=sameuserexistserror");
                    exit();
                }
                else{
                    $sql="INSERT INTO users (uidUsers,pwdUsers)VALUES(?,?)";
                    $stmt=mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$sql)){
                        header("Location: ../signup.php?error=sqlerror");
                        exit();
                    }else{
                        //hashing the password:
                        $hashedPassword=password_hash($password,PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt,"ss",$username,$hashedPassword);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../signup.php?signup=success");
                        exit();
    
                    }
                }
            }
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);


    }else{
        header("Location: ../signup.php?error=clickonsignupbtnerror");
        exit();

    }