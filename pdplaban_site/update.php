<?php
    include_once ('config.php');

    if (isset($_POST['update']))
    {
        $id = $_POST['id'];
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
            //echo "<a href=\"edit.php\">Return to Update </a>" . "<br/>";
            echo "<td> <a href=\"edit.php?id=$id&fname=$firstname&lname=$lastname\">Return to Edit</a></td>" . "<br/>";
            echo "<a href=\"index.php\">Return to Index </a>" . "<br/>";
        }

        else
        {
            $sql = "UPDATE pdplabanmafia.tbl_employee ";
            $sql .= "set E_FNAME = :fname, E_LNAME = :lname, E_GENDER = :gender, E_BDATE = :bdate, E_DEPT = :dept, E_RANK = :rank ";
            $sql .= "where E_ID = :id";
            $query = $dbConn->prepare($sql);
            $query -> bindparam(':id', $id);
            $query -> bindparam(':fname', $firstname); 
            $query -> bindparam(':lname', $lastname);
            $query -> bindparam(':gender', $gender);
            $query -> bindparam(':bdate', $birthdate);
            $query -> bindparam(':dept', $department);
            $query -> bindparam(':rank', $rank);
            $query -> execute();

            echo "Record successfully updated" . "<br/>";
            echo "<a href=\"index.php\">Return to Index </a>" . "<br/>";
        }
    }
    else
    {
        echo "Error : Restricted Access" . "<br/>";
    }
?>