<?php

//Hàm xử lý đăng ký tài khoản ở dao khachhang.php

function check_user($username, $password)
{
    $sql = "SELECT * FROM taikhoan WHERE username = '".$username."' AND password = '".$password."' ";
    $result = pdo_query_one($sql);
    return $result;

}

function edit_tk($id, $user, $pass, $email, $address, $tel)
{
    $sql = "UPDATE `taikhoan` SET `user`='$user',`pass` = '$pass' ,`email`='$email',`address`='$address',`tel`='$tel' WHERE id = $id";
    pdo_execute($sql);
    
}

function check_email($email) {
    $sql = "SELECT * FROM taikhoan WHERE email = '".$email."' ";
    $result = pdo_query_one($sql);
    return $result;
}
function insert_taikhoan($user,$password, $email, $address){
    $sql="INSERT INTO `taikhoan`(`username`, `password`, `email`, `address`) VALUES ('$user','$password','$email','$address')";
    pdo_execute($sql);
}
function loadall_taikhoan(){
    $sql="select * from taikhoan ";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}