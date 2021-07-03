<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add employee</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<div class="modal-content">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="modal-header">
            <h4 class="modal-title">Add Employee</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label>Name</label>
                <input name="name" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input name="email" type="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea name="address" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input name="phone" type="text" class="form-control" required>
            </div>
        </div>
        <div class="modal-footer">
            <a href="./dashboard.php"><input href="./dashboard.php" type="button" class="btn btn-default"
                    data-dismiss="modal" value="Cancel"></a>
            <input type="submit" class="btn btn-success" value="Add">
        </div>
        <?php
            require_once './config.php';
            if (!empty($name) && !empty($email) && !empty($address) && !empty($phone)) {
            $addemp = "INSERT INTO `employee` (`name`, `email`, `address`, `phone`) VALUES ('" . $name . "','" . $email . "','" . $address . "', '" . $phone . "')";
            $link->query($addemp);
            }
        ?>
    </form>
</div>

<body>

</body>

</html>