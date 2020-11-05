<?php 
    if(isset($_POST['CustomName'])){

        echo "
         <script>
            alert('Thanks {$_POST['CustomName']} for submiiting or something.');
        </script>
    
    
        ";
        unset($_POST['CustomName']);
        unset($_POST['CustomEmail']);
        unset($_POST['CustomMessage']);
    }

?>