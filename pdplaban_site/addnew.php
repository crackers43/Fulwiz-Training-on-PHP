<?php
    include_once ('config.php');

    if (isset($_POST['add']))
    {
        //$id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $birthdate = $_POST['birthdate'];
        $department = $_POST['department'];
        $rank = $_POST['rank'];
    
        if (empty($firstname) || empty($lastname) || empty($gender) || empty($birthdate) || empty($department) || empty($rank))
        {
            if(empty($firstname))
            {
                echo " Error - First Name is empty." . "<br/>";
            }
            if(empty($lastname))
            {
                echo " Error - Last Name is empty." . "<br/>";
            }
            if(empty($gender))
            {
                echo " Error - Gender is empty." . "<br/>";
            }
            if(empty($birthdate))
            {
                echo " Error - Birth date is empty." . "<br/>";
            }                        
            if(empty($department))
            {
                echo " Error - Department is empty." . "<br/>";
            }
            if(empty($rank))
            {
                echo " Error - Rank is empty." . "<br/>";
            }
            
            echo "<hr/>";
            
            echo "<a href=\"add.php\">Return to Add </a>" . "<br/>";
            echo "<a href=\"index.php\">Return to Index </a>" . "<br/>";
        }

        else
        {
            $sql = "INSERT INTO pdplabanmafia.tbl_employee ";
            $sql .= "(E_FNAME, E_LNAME, E_GENDER, E_BDATE, E_DEPT, E_RANK) ";
            $sql .= "VALUES (:fname, :lname, :gender, :bdate, :dept, :rank)";
            $query = $dbConn->prepare($sql);
            $query -> bindparam(':fname', $firstname); 
            $query -> bindparam(':lname', $lastname);
            $query -> bindparam(':gender', $gender);
            $query -> bindparam(':bdate', $birthdate);
            $query -> bindparam(':dept', $department);
            $query -> bindparam(':rank', $rank);
            $query -> execute();

            echo "Record successfully added" . "<br/>";
            echo "<a href=\"index.php\">Return to Index </a>";
        }
    }
    else
    {
        echo "Error : Restricted Access" . "<br/>";
    }
?>