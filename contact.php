<!DOCTYPE html>
<html>
    <body>
        
        
        <?php 
        $First_Name = $_POST["First_Name"];
        $Last_Name = $_POST["Last_Name"];
        $email = $_POST["email"];
        $comment = $_POST["comment"];
        echo "Hello1";

        //database connection
        $conn = new mysqli("localhost", "username", "username", "test");
        echo "Hello2";
        if($conn->connect_error){
            die("Connection Failed : ".$conn->connect_error);
        }
        else{
            $stmt = $conn->prepare("insert into myWebText(firstName, lastName, email, message)
            values(?,?,?,?)");
            $stmt->bind_param("ssss", $First_Name, $Last_Name, $email, $comment);
            $stmt->execute();
            echo "Thank you for your information!";
            $stmt->close();
            $conn->close();
        }

        ?>

    </body>
</html>
