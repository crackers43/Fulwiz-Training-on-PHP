<?php 
    include_once ("config.php");

    if (isset($_POST['adduser']))
    {
        //$id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $userrole = $_POST['userrole'];
        $nickname = $_POST['nickname'];

        $sql = "INSERT INTO pdplabanmafia.tbl_users ";
        $sql .= "(U_USERNAME, U_PASSWORD, U_ROLE, U_NICKNAME) ";
        $sql .= "VALUES (:uname, :pword, :urole, :nname)";
        $query = $dbConn->prepare($sql);
        $query -> bindparam(':uname', $username); 
        $query -> bindparam(':pword', $password);
        $query -> bindparam(':urole', $userrole);
        $query -> bindparam(':nname', $nickname);
        $query -> execute();

        echo "User successfully added" . "<br/>";
        echo "<a href=\"index.php\">Return to Index </a>";        
    }

?>