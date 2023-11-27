<?php
require("../Model/connection.php");
session_start();
function auth($username, $password) {
    $ezl = getConnection();
    $sql = "SELECT * FROM users";
    $row = $ezl->query($sql);

    if ($row->num_rows > 0) {
        while ($registrations = $row->fetch_assoc()) {
            if ($registrations['username'] == $username and $registrations['password'] == $password) {
                $_SESSION['username']=$registrations['username'];
                return true;
            }
            else
                return false;
        }
    }
    return false;
}
function memberView() {
    $conn = getConnection();
$sql = "SELECT * FROM member";
$result = $conn->query($sql);
return $result;
    
}
function memberAdd($name, $phone, $address) {
    $conn = getConnection();
    $sql = "INSERT INTO member (name, phone, address) VALUES ('$name', '$phone', '$address')";
    $conn->query($sql);
}

function editMember($mid, $name, $phone, $add) {
    $conn = getConnection();
    $sql="UPDATE member set name='$name', phone='$phone', address='$add' WHERE m_id='$mid'";
    $conn->query($sql);
}
function getEditMember($id){
    $conn = getConnection();
    $sql = "SELECT * FROM member WHERE m_id = $id";
    $result = $conn->query($sql)->fetch_assoc();
    return $result;
}


function deleteMember($id) {
    $conn = getConnection();
    $sql = "DELETE FROM member WHERE m_id = $id";
    $conn->query($sql);
}
function orderlist() {
    $conn = getConnection();
    $sql = "SELECT * FROM food_order";
    $result = $conn->query($sql);
    return $result;
}
function roomview() {
    $conn = getConnection();
    $sql = "SELECT * FROM rooms";
    $result = $conn->query($sql);
    return $result;
}
function confirmDeleteMember($id) {
    $conn = getConnection();
    $sql = "SELECT * FROM member WHERE m_id = $id";
    $result = $conn->query($sql)->fetch_assoc();
    return $result;
}
function inorderlist($food_name, $quantity, $price) {
    $conn = getConnection();
    $sql="INSERT INTO food_order (food_name,quantity,price) VALUES('$food_name','$quantity','$price')";
    $conn->query($sql);
}
function roomdetails($room_quality, $room_status,) {
    $conn = getConnection();
    $sql="INSERT INTO rooms (room_quality,room_status) VALUES('$room_quality','$room_status')";
    $conn->query($sql);
}
?>