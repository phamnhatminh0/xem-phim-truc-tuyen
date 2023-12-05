<?php

function yeuthich($id_phim,$id_user){
    $sql= "INSERT INTO yeuthich (id_phim,id_user) VALUES (?,?)";
    pdo_execute($sql,$id_phim,$id_user);
}
function getyt($user){
    $sql="SELECT *
    FROM yeuthich
    JOIN phim ON yeuthich.id_phim = phim.id_phim
    JOIN user ON yeuthich.id_user = user.id_user
    
    WHERE user.id_user=? ";
    return pdo_query($sql,$user);
}
function checkyeuthich($id_phim){
    $sql= "SELECT * FROM yeuthich WHERE id_phim=? ";
   return pdo_query($sql,$id_phim);
}

?>
