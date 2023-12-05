<?php 
function load_trangthi($id){
$sql = "SELECT dethi_cauhoi.id, dethi_cauhoi.id_dethi, dethi_cauhoi.id_cauhoi, dethi.id, dethi.ten_de as tende,
cauhoi.id_ch, cauhoi.content , cauhoi.image as img_ch , dapan.id, dapan.content_dapan, dapan.image as img_da ,dapan.id_question
FROM dethi_cauhoi LEFT JOIN cauhoi on dethi_cauhoi.id_cauhoi=cauhoi.id_ch
LEFT JOIN dethi on dethi_cauhoi.id_dethi=dethi.id
LEFT JOIN dapan on cauhoi.id_ch=dapan.id_question WHERE dethi_cauhoi.id_dethi=".$id;
// $sql = "SELECT * from dethi_cauhoi Where id_dethi = ".$id;
 return pdo_query($sql);
}

?>