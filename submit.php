<?php
      $llocalhost = "localhost";
      $username = "root";
      $password = "";
      $dbname = "php_project";

        $conn = mysqli_connect($llocalhost, $username, $password, $dbname);
        if (!$conn) {
            die("connection failed: " . mysqli_connect_error());
        }
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name  = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $gender  = $_POST['ugender'];

            $sql = "INSERT INTO students (name, email, phone, address, gender)
            values ('$name', '$email', '$phone', '$address', '$gender')";

            if (mysqli_query($conn, $sql)) {
                echo "data inserted sucessfully" . "<br>"; 
            } else {
                echo "error: " . mysqli_error($conn);
            }
        }
      
        // Fetching data from the database
        $sql = "SELECT * FROM students";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            ?>
            <h2>Data show from Database</h2>
            <table border="1px">
                <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>gender</th>
            </tr>
            </thead>
            <?php 
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                    </tr>
                </tbody>
                <?php
            }
            ?>
            </table>
            <?php
        } else {
            echo "no data";
        }
        mysqli_close($conn);
        ?>