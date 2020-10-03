<?php 
require "header.php";
?>
    <main>
    <?php
        if(isset($_SESSION['userId'])){
           echo ' <h1 style="margin-top:100px;">You are logged in</h1>';
        }
        else{
            echo '  <h1 style="margin-top:100px;">Your have to signup First</h1>';
        }
    ?>
    
      
    </main>
<?php
require "footer.php"
?>