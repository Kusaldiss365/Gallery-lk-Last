<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

header("Location: ../home/homepage.php");
die();
?>
user log out
</body>
</html>


<script>
    function logout(){
        if(confirm("Do you want to logout?")){
            location.href = './userlogout.php';
        }
    }
</script>