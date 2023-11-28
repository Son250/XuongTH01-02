<?php
function loadall_dethicauhoi()
{

    $sql = "SELECT dethi_cauhoi.*,
    lichthi.name AS ten_kythi,
    lichthi.id AS id_lichthi,
    dethi.ten_de,
    dethi.id AS id_dethi,
    cauhoi.content AS ten_cauhoi
    FROM dethi_cauhoi 
    JOIN dethi ON dethi.id = dethi_cauhoi.id_dethi
    JOIN lichthi ON lichthi.id = dethi.id_lichthi
    JOIN cauhoi ON cauhoi.id_ch = dethi_cauhoi.id_cauhoi
     ";
    $result = pdo_query($sql);
    return $result;
}
function add_cauhoidethi($id_dethi,$id_cauhoi){
    $sql = "INSERT INTO `dethi_cauhoi`(`id_dethi`, `id_cauhoi`) VALUES ('$id_dethi', '$id_cauhoi')";
    pdo_execute($sql);
}