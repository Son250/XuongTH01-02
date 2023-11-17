<?php

function loadall_dapan()
{
    $sql = "SELECT dapan.id AS idda,  dapan.content, dapan.image, dapan.right_answer, cauhoi.id_ch, cauhoi.content AS question_content
            FROM dapan
            JOIN cauhoi ON cauhoi.id_ch = dapan.id_question";
    
    $listdapan = pdo_query($sql);
    return $listdapan;
}

function loadone_dapan($id)
{
    $sql = "SELECT * FROM dapan WHERE id=" . $id;
    $result = pdo_query_one($sql);
    return $result;
}

function loadid_cauhoi()
{
    $sql = "SELECT id_ch, content FROM cauhoi";
    $result = pdo_query($sql);
    return $result;
}

function add_dapan($content, $photo, $right_answer, $id_question)
{
    $sql = "INSERT INTO dapan(`content`, `image`,`right_answer`, `id_question`) VALUES ('$content', '$photo','$right_answer', '$id_question')";
    pdo_execute($sql);
}


function edit_dapan($id, $content, $photo, $right_answer, $id_question)
{
    if ($photo == "") {
        $sql = "UPDATE `dapan` SET `content`='$content',`right_answer` = '$right_answer',`id_question`='$id_question' WHERE id = $id";
    } else {
        $sql = "UPDATE `dapan` SET `content`='$content',`image`='$photo',`right_answer` = '$right_answer',`id_question`='$id_question' WHERE id = $id";
    }
    pdo_execute($sql);
}

function delete_dapan($id)
{
    $data = loadone_dapan($id);
    unlink("../uploads/{$data['image']}");
    $sql = "DELETE FROM dapan WHERE id='" . $id . "'";
    pdo_execute($sql);
}
