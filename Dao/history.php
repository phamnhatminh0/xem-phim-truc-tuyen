<?php
function lichsu($id_phim,$id_user,$id_tap){
    $sql= "INSERT INTO lichsu (id_phim, id_user,id_tap) VALUES (?,?,?)";
    pdo_execute($sql,$id_phim,$id_user,$id_tap);
}
?>