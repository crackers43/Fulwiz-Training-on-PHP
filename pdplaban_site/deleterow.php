<?php
    include_once ('config.php');

    if (isset($_GET['id']))
    {
        $eid = $_GET['id'];

        $sql = "DELETE FROM  pdplabanmafia.tbl_employee WHERE E_ID = :id";
        $query = $dbConn->prepare($sql);
        $query -> bindparam(':id', $eid);
        $query -> execute();

        echo "Record delete successfully" . "<br/>";
        echo "<a href=\"index.php\">Return to Index </a>" . "<br/>";
    }

    else
    {
        echo "Error : Restricted Access" . "<br/>";
    }
?>