<?php

function yeuthich($id_phim,$id_user){
    $sql= "INSERT INTO yeuthich (id_phim,id_user) VALUES (?,?)";
    pdo_execute($sql,$id_phim,$id_user);
}
?>
