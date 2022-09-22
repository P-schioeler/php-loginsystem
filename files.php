<?php
include_once "header.php";
include_once "includes/dbh.inc.php"
?>


<section class="files-page">

    <form action="includes/employees.inc.php" method="POST">
        <input type="text" name="fullname" placeholder="Full name">
        <br>
        <input type="text" name="rank" placeholder="Rank">
        <br>
        <input type="text" name="salary" placeholder="Salary">
        <br>
        <input type="text" name="birthday" placeholder="Birthday: YYYY-MM-DD">
        <br>
        <input type="text" name="sex" placeholder="Sex: M/F">
        <br>
        <button type="submit" name="submit">Add Employee</button>
        <br>
    </form>

    <div class="showemployees">
        <?php

        echo "<br>";
        $data = "Intern";
        //Created a template
        $sql = "SELECT * FROM employees WHERE rank=?;";
        //Create a prepared statement
        $stmt = mysqli_stmt_init($conn);
        //Prepare the prepared statement
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failed";
        } else {
            //Bind parameters to the placeholder
            mysqli_stmt_bind_param($stmt, "s", $data);
            //Run parameters inside database
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['name'] . "<br>";
            }
        }
        
        echo "<br>";
        $data2 = array("first", "secound");
        array_push($data2, "philip", 15, 23);
        print_r($data2);

        echo "<br>";
        echo "<br>";
        $sql = "SELECT * FROM employees";
        $result = mysqli_query($conn, $sql);
        $datas = array();
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                $datas[] = $row;
            }
        }

        //print_r($datas);
        foreach ($datas[0] as $data) {
            echo $data . " ";
        }
        echo "<br>";

        echo "<br>";
        foreach ($datas as $data) {
            echo $data['name'] . " ";
        }


        ?>
    </div>
</section>

<?php
include_once "footer.php";
?>