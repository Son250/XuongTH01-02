<?php 
function insert_chuyende($tencd){
    $sql="insert into chuyende(name) values('$tencd')";
    pdo_execute($sql);
}
function loadall_chuyende(){
    $sql="select * from chuyende order by id_cd desc";
    $listchuyende=pdo_query($sql);
    return $listchuyende;
}
 ?>
