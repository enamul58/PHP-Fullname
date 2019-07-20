

    <?php
        $result = ' ';
        if( isset($_POST['btn'])){
            require_once 'FullName.php';
            $fullName = new FullName();
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $result = $fullName->makeFullName( $firstName, $lastName);
        }

    ?>



    <form action="" method="post">
        <table>
            <tr>
                <th>First Name:</th>
                <td><input type="text" name="first_name"></td>
            </tr>
            <tr>
                <th>Last Name:</th>
                <td><input type="text" name="last_name"></td>
            </tr>
            <tr>
                <th>Full Name:</th>
                <td><input type="text" name="full_name" value="<?php echo $result;?>"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" name="btn" value="submit" </td>
            </tr>
        </table>
    </form>