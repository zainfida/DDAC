<?php
/**
 * Created by PhpStorm.
 * User: LuNeR
 * Date: 10/25/2017
 * Time: 10:58 PM
 */

include "../db/db.php";
session_start();


if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['contact']) && isset($_POST['address']) && isset($_POST['RegisterUser'])) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $Contact = $_POST['contact'];
    $Address = $_POST['address'];

    $query = "SELECT * FROM user WHERE email = '{$Email}'";
    $select_user_query = mysqli_query($connection, $query);
    $count = mysqli_num_rows($select_user_query);

//    mysqli_close($connection);

    if ($count >= 1) {
        echo "SORRY !! User Already Exist..";
    } else {
        $Insert_query = "INSERT INTO user (name,email,password,role,address,contact,status) VALUES ('{$Name}', '{$Email}','{$Password}', 'CUSTOMER','{$Address}', '{$Contact}','ACTIVE')";
        $UpdateUser = mysqli_query($connection, $Insert_query);
        echo "success";
    }
}




if (isset($_POST['name']) && isset($_POST['email'])  && isset($_POST['contact']) && isset($_POST['address']) && isset($_POST['RegisterUserCustomerPage'])) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Contact = $_POST['contact'];
    $Address = $_POST['address'];

        $Insert_query = "INSERT INTO customer (name,email,address,contact) VALUES ('{$Name}', '{$Email}','{$Address}', '{$Contact}')";
//echo $Insert_query;
        $UpdateUser = mysqli_query($connection, $Insert_query);
        echo "success";

}

//"NumbeOfBays=" + NumbeOfBays + "&InputCompanyname=" + InputCompanyname + "&InputVasselId=" + InputVasselId + "&RegisterUserVassel=" + "TRUE",

if (isset($_POST['NumbeOfBays']) && isset($_POST['AvailableVassel']) && isset($_POST['InputCompanyname'])  && isset($_POST['InputVasselId'])  && isset($_POST['RegisterUserVassel'])) {
    $NumbeOfBays = $_POST['NumbeOfBays'];
    $InputCompanyname = $_POST['InputCompanyname'];
    $InputVasselId = $_POST['InputVasselId'];
    $AvailableVassel = $_POST['AvailableVassel'];

    $updateVassel = $AvailableVassel-$NumbeOfBays;
    

    $Insert_query = "INSERT INTO BookingVassel (totalBays,companyName,vasselId) VALUES ('{$NumbeOfBays}', '{$InputCompanyname}','{$InputVasselId}')";
//echo $Insert_query;



    $UpdateUser = mysqli_query($connection, $Insert_query);



    $sqlUpdate = 'UPDATE viewroute SET availableBay = "' . $updateVassel . '"  WHERE id=' . $InputVasselId;
    $Update_SQL = mysqli_query($connection, $sqlUpdate);


    echo "success";

}


if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['contact']) && isset($_POST['address']) && isset($_POST['userRole']) && isset($_POST['RegisterUserAdmin'])) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $Contact = $_POST['contact'];
    $Address = $_POST['address'];
    $UserRole = $_POST['userRole'];

    $query = "SELECT * FROM user WHERE email = '{$Email}'";
    $select_user_query = mysqli_query($connection, $query);
    $count = mysqli_num_rows($select_user_query);

//    mysqli_close($connection);

    if ($count >= 1) {
        echo "SORRY !! User Already Exist..";
    } else {
        $Insert_query = "INSERT INTO user (name,email,password,address,contact,status, role) VALUES ('{$Name}', '{$Email}','{$Password}','{$Address}', '{$Contact}','ACTIVE', '{$UserRole}')";
        $UpdateUser = mysqli_query($connection, $Insert_query);
//        echo $Insert_query;
        echo "success";
    }
}


if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['LoginUser'])) {
    $Password = $_POST['password'];
    $Email = $_POST['email'];

    $result = mysqli_query($connection, "SELECT * FROM user Where email='" . $Email . "' AND password='" . $Password . "'");
    $count = mysqli_num_rows($result);


    $login_status = "";

    if ($count == 1) {

        $_SESSION['login_user_email'] = $Email;
//        mysqli_close($connection);
        $login_status = "success";
    } else {
        $login_status = "Your Login Name or Password is invalid";
    }

    echo $login_status;


}


if (isset($_POST['UserID']) && isset($_POST['DeleteUser'])) {
    $UserID = $_POST['UserID'];
    $query_sql = "DELETE FROM user WHERE id =" . $UserID;
    $count = mysqli_query($connection, $query_sql);
    echo "success";
}


if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['contact']) && isset($_POST['address']) && isset($_POST['userRole']) && isset($_POST['userID']) && isset($_POST['userStatus']) && isset($_POST['UpdateUserAdmin'])) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $Contact = $_POST['contact'];
    $Address = $_POST['address'];
    $UserRole = $_POST['userRole'];
    $UserID = $_POST['userID'];
    $UserStatus = $_POST['userStatus'];

    $sqlUpdate = 'UPDATE user SET name = "' . $Name . '",email = "' . $Email . '",password = "' . $Password . '",contact = "' . $Contact . '",address = "' . $Address . '",role = "' . $UserRole . '",status = "' . $UserStatus . '"  WHERE id=' . $UserID;


    $Update_User = mysqli_query($connection, $sqlUpdate);
    echo "success";


}


if (isset($_POST['email']) && isset($_POST['QRCodeUser'])) {
    $UserEmail = $_POST['UserID'];
    header('Location: ' . $UserEmail);
}


if (isset($_POST['userID']) && isset($_POST['paper']) && isset($_POST['cookingoil']) && isset($_POST['plastic']) && isset($_POST['saveintoCollection'])) {
    $userID = $_POST['userID'];
    $paper = $_POST['paper'];
    $cookingoil = $_POST['cookingoil'];
    $plastic = $_POST['plastic'];
    $todayDate = date("Y-m-d");
    $status = "Pending";


    $trash = $paper . '|' . $plastic . '|' . $cookingoil;

    $sqlQuery = "INSERT INTO collection (userid,date,trash,action) VALUES ('" . $userID . "','" . $todayDate . "','" . $trash . "','" . $status . "')";
    $count = mysqli_query($connection, $sqlQuery);
    echo 'success';

}














if (isset($_POST['name'])  && isset($_POST['password']) && isset($_POST['contact']) && isset($_POST['address'])  && isset($_POST['userID']) &&  isset($_POST['UpdateUserCustomerPage'])) {
    $Name = $_POST['name'];

    $Password = $_POST['password'];
    $Contact = $_POST['contact'];
    $Address = $_POST['address'];

    $UserID = $_POST['userID'];


    $sqlUpdate = 'UPDATE user SET name = "' . $Name . '",password = "' . $Password . '",contact = "' . $Contact . '",address = "' . $Address . '" WHERE id=' . $UserID;


    $Update_User = mysqli_query($connection, $sqlUpdate);
    echo "success";

}






if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['feedback'])) {

    $UserName = $_POST['name'];
    $Useremail = $_POST['email'];
    $Usersubject = $_POST['subject'];
    $Userfeedback = $_POST['feedback'];



    $query_sql = "Insert into feedback (Name,	email,	subject,	feedback) VALUES ('" . $UserName . "','" . $Useremail . "','" . $Usersubject . "','" . $Userfeedback . "')";
    $count = mysqli_query($connection, $query_sql);
    echo "success";
}







if(isset($_POST['feedbackID']) && isset($_POST['UpdateFeedback'])){
    
    $id = $_POST['feedbackID'];

    $sqlQ = 'UPDATE feedback SET status = "read"  WHERE id=' . $id;


    $count = mysqli_query($connection, $sqlQ);
    echo "success";
}