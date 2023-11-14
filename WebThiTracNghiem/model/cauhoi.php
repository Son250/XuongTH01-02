<?php 
function insert_cauhoi($content,$image, $idcd){
    $sql="insert into cauhoi(content, image, id_cd) values('$content', '$image', '$idcd')";
    pdo_execute($sql);
}
function loadall_cauhoi(){
    $sql="select * from cauhoi order by id_ch desc";
    $listcauhoi=pdo_query($sql);
    return $listcauhoi;
}
function update_cauhoi($idcd,$content,$image,$id){
    if($image != ""){ 
    $sql = "UPDATE cauhoi SET id_cd = '".$idcd."',content= '".$content."',image = '".$image."' WHERE id_ch=".$id;  
    }else{
        $sql = "UPDATE cauhoi SET id_cd = '".$idcd."',content= '".$content."' WHERE id_ch=".$id;  
    }
    pdo_execute($sql) ;
}
function loadone_cauhoi($id){
    $sql = "SELECT * FROM cauhoi WHERE id_ch=".$id ;
    $sp = pdo_query_one($sql);
    return $sp;
}
function delete_cauhoi($id){
    $sql = "DELETE FROM cauhoi WHERE id_ch='".$id."'" ;
    pdo_execute($sql);
}
 ?>
