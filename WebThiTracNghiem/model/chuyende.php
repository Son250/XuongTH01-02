<?php 
function insert_chuyende($name){
    $sql="insert into chuyende(name) values('$name')";
    pdo_execute($sql);
}

function loadall_chuyende(){
    $sql="select * from chuyende order by id_cd desc";
    $listchuyende=pdo_query($sql);
    return $listchuyende;
}
function delete_chuyende($id_cd){
    $sql="delete from chuyende where id_cd=".$id_cd;
    pdo_execute($sql);
}
function loadone_chuyende ($id_cd){
    $sql="select * from chuyende where id_cd=" .$id_cd;
  $a =pdo_query_one($sql);
    return $a;
}

function update_chuyende($id_cd,$name){
    $sql="update chuyende set name='".$name."'where id_cd=".$id_cd;
    pdo_execute($sql);
}
 ?>
