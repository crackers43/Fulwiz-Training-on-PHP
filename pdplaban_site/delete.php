<?php
    include_once ("config.php");
   
    $eid = $_GET['id'];
    $efname = $_GET['fname'];
    $elname = $_GET['lname'];
    echo "Delete Employee ID - " . $eid . "<br/>";
    echo "Name: " . $elname . ", " . $efname .  "<br/>";
    echo "<hr/>";
    echo "<td> <a href=\"deleterow.php?id=$eid\">Proceed with delete?</a></td>" . "<br/>";
    echo "<a href=\"index.php\">Return to Index </a>" . "<br/>";
?>