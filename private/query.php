<?php

function services_create()
{

    global $db;

    $title = "Digital Marketing";
    $icon = "fa fa-user";
    $description = "Maborisum ipsum dosea ilelite consec Maborisum iesumdolor anim id est laborum";

    $sql = "INSERT INTO `services`(`icon`, `title`, `description`) VALUES ('$icon','$title','$description')";

    $result = mysqli_query($db, $sql);
    confirm_result_set($db, $result);

    return 'created';
}

function services_update()
{

    global $db;

    $title = "Digital Marketing";
    $icon = "fa fa-people";
    $description = "Maborisum ipsum dosea ilelite consec Maborisum iesumdolor anim id est laborum";

    $sql = "UPDATE `services` SET `icon`='$icon',`title`='$title',`description`='$description' WHERE `id`='3'";


    $result = mysqli_query($db, $sql);
    confirm_result_set($db, $result);

    return 'updated';
}

function services_delete()
{

    global $db;

    $sql = "DELETE FROM `services` WHERE `id`='4'";


    $result = mysqli_query($db, $sql);
    confirm_result_set($db, $result);

    return 'deleted';
}
