<?php
function lichsu($id_phim,$id_user,$id_tap){
    $sql= "INSERT INTO lichsu (id_phim, id_user,id_tap) VALUES (?,?,?)";
    pdo_execute($sql,$id_phim,$id_user,$id_tap);
}
function getls($user){
    $sql="SELECT *
    FROM lichsu
    JOIN phim ON lichsu.id_phim = phim.id_phim
    JOIN tap ON lichsu.id_tap = tap.id_tap
    JOIN user ON lichsu.id_user = user.id_user
    
    WHERE user.id_user=? ";
    return pdo_query($sql,$user);
}
function check($id_tap,$email){
    $sql="SELECT * FROM lichsu
     JOIN user ON lichsu.id_user = user.id_user
    WHERE lichsu.id_tap=? AND user.id_user=? " ;
    return pdo_query($sql,$id_tap,$email);
}


?>