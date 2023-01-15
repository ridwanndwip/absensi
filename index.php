<?php
// include("koneksi.php");
// include("Users.php");

// $user = new Users();
// $user->set_login_data($employee_id, $password);

// $sql = "SELECT * FROM users";
// $result = $db->query($sql);

// while ($test = mysqli_fetch_assoc($result)) {
//     echo $test ['id'];
//     echo $test ['employee_id'];
//     echo $test ['fullname'];
//     echo $test ['role'];
//     echo $test ['password'];
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stule.css"/>
</head>

<body>
    <h3>Login System</h3>
    <div class="container">
        <form action="login.php" method="POST">
        <input type="number" placeholder="Masukkan employee id" name="nip"/>
        <br>
        <br>
        <input type="password" placeholder="Masukkan password" name="password"/>
        <br>
        <br>
        <button name="login" type="submit"> Submit </button>
        </form>
    </div>
</body>
</html>

