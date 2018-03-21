<?php
/**
 * Created by PhpStorm.
 * User: LuNeR
 * Date: 10/29/2017
 * Time: 8:41 PM
 */


function getUserDetails($userEmail, $connection)
{
    $query = "SELECT * FROM user WHERE email = '{$userEmail}'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
    return $row;
}


function getUserID($connection, $userEmail)
{
    $query = "SELECT * FROM user WHERE email = '{$userEmail}'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

    return $row['id'];
}



function getUserName($connection, $userEmail)
{
    $query = "SELECT * FROM user WHERE email = '{$userEmail}'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

    return $row['name'];
}


function getUserFromId($connection, $userId)
{
    $query = "SELECT * FROM user WHERE email =".$userId;
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

    return $row['name'];
}


//Paper-plastic-cookingoil

function getUserPlastic($userEmail, $connection)
{
    $total = 0;

    $query = "SELECT collection.userid, collection.action ,user.email, user.id, collection.trash FROM collection INNER JOIN user ON user.id = collection.userid WHERE collection.action = 'Complete' AND user.email='" . $userEmail . "'";

    $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_array($result)) {
        $trash = explode("|",$row['trash']);
        $total = $total + (float)$trash[1];
    }

    return $total;
}


function getUserCookingOil($userEmail, $connection)
{
    $total = 0;

    $query = "SELECT collection.userid, collection.action ,user.email, user.id, collection.trash FROM collection INNER JOIN user ON user.id = collection.userid WHERE collection.action = 'Complete' AND user.email='" . $userEmail . "'";

    $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_array($result)) {
        $trash = explode("|",$row['trash']);
        $total = $total + (float)$trash[2];
    }

    return $total;
}

function getUserPaper($userEmail, $connection)
{
    $total = 0;

    $query = "SELECT collection.userid, collection.action ,user.email, user.id, collection.trash FROM collection INNER JOIN user ON user.id = collection.userid WHERE collection.action = 'Complete' AND user.email='" . $userEmail . "'";

    $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_array($result)) {
        $trash = explode("|",$row['trash']);
        $total = $total + (float)$trash[0];
    }

    return $total;
}


function getTotalPoint($connection, $useremail){
    $total = 0;

    $query = "SELECT collection.userid, collection.action ,user.email, user.id, collection.trash FROM collection INNER JOIN user ON user.id = collection.userid WHERE collection.action = 'Complete' AND user.email='" . $useremail . "'";

    $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_array($result)) {
        $trash = explode("|",$row['trash']);

        $paper = .3 + (float)$trash[0];
        $plastic = .4 + (float)$trash[1];
        $cooking = .5 + (float)$trash[2];

        $total = $total+$paper+$plastic+$cooking;




    }

    return $total;
}


function getCurrentUserTotalRedeemPoint($connection, $useremail){
    $total = 0;

    $querry = "SELECT redeem.id,redeem.userid,redeem.date,redeem.cash, redeem.action, redeem.PaidBy,user.email, user.id as UserID FROM redeem INNER JOIN user ON user.id = redeem.userid WHERE email = '".$useremail."' and action = 'Success'";

    $result = mysqli_query($connection, $querry);
    while ($row = mysqli_fetch_array($result)) {
        $total = $total + $row['cash'];
    }
    return $total;

}


function getCurrentUserCallStatus($connection, $useremail){
    $flag = false;

    $querry = "SELECT * FROM callcollection WHERE UserEmail='".$useremail."'";

    $result = mysqli_query($connection, $querry);
    while ($row = mysqli_fetch_array($result)) {
        $status = $row['status'];
        if($status=='Progress'){
            $flag= true;
        }
    }

return $flag;
}