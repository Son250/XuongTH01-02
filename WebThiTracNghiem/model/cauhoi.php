<?php 
function insert_cauhoi($content,$image){
    $sql="insert into cauhoi(content, image) values('$content', '$image')";
    pdo_execute($sql);
}
function loadall_cauhoi(){
    $sql="select * from cauhoi order by id desc";
    $listcauhoi=pdo_query($sql);
    return $listcauhoi;
}
function update_cauhoi($content,$image,$id){
    if($image != ""){
    $sql = "UPDATE cauhoi SET content= '".$content."',image = '".$image."' WHERE id=".$id;  
    }else{
        $sql = "UPDATE cauhoi SET content= '".$content."' WHERE id=".$id;  

    }
    pdo_execute($sql) ;
}
function loadone_cauhoi($id){
    $sql = "SELECT * FROM cauhoi WHERE id=".$id ;
    $sp = pdo_query_one($sql);
    return $sp;
}
function delete_cauhoi($id){
    $sql = "DELETE FROM cauhoi WHERE id='".$id."'" ;
    pdo_execute($sql);
}
 ?>
