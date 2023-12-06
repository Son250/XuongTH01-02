<?php
function loadall_lichthi()
{
    $sql = "select * from lichthi";
    $result = pdo_query($sql);
    return $result;
}

function add_lichthi($name, $image_lt, $time_start, $time_end, $time, $so_de_thi)
{
    $sql = "INSERT INTO lichthi (`name`,`image_lt`, `time_start`, `time_end`,`time`, `so_de_thi`) VALUES ('$name','$image_lt','$time_start', '$time_end','$time','$so_de_thi')";
    pdo_execute($sql);
}


function delete_lichthi($id)
{
    $sql = "DELETE FROM lichthi where id =" . $id;
    pdo_execute($sql);
}
function getold_lichthi($id)
{
    $sql = "select * from lichthi where id = $id";
    $result = pdo_query_one($sql);
    return $result;
}

function update_lichthi($id, $name,$image_lt, $time_start, $time_end, $time, $so_de_thi)
{

    $sql = "UPDATE `lichthi` SET `name`='$name',`image_lt`='$image_lt',`time_start`='$time_start',`time_end`='$time_end',`time`='$time' ,`so_de_thi`='$so_de_thi' WHERE id= $id";
    pdo_execute($sql);
}
// function load_choncauhoi($idlt){
//     $sql = "SELECT 
//     chuyende.
//     ";
//     $result = pdo_query($sql);
//     return $result;
// }