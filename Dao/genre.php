<?php
function theloai_getAll(){
    $sql= "SELECT * FROM theloai ";
    return pdo_query($sql);
}

?>