
<?php
require("../Model/db.php");

if(isset($_GET["id"])) {
    $id = $_GET["id"];
    deleteMember($id);
  
    
    header("location: ../View/memberView.php");
}
?>