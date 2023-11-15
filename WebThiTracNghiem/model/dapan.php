<?php
function loadall_dapan(){
    $sql = "SELECT * FROM dapan order by id asc"; 
    $listdapan = pdo_query($sql);
    return $listdapan;

}
function loadone_dapan($id){
    $sql = "SELECT * FROM dapan WHERE id=".$id ;
    $da = pdo_query_one($sql);
    return $da;
}
function update_dapan($content,$image,$id_question,$id){
    if($image != ""){
    $sql = "UPDATE dapan SET content= '".$content."',image = '".$image."', id_question = '".$id_question."' WHERE id=".$id;  
    }else{
        $sql = "UPDATE dapan SET content= '".$content."' , id_question = '".$id_question."' WHERE id=".$id;  

    }
    pdo_execute($sql) ;
}
function delete_dapan($id){
    $sql = "DELETE FROM dapan WHERE id='".$id."'" ;
    pdo_execute($sql);
}
?>