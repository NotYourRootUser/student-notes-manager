<?php

require_once "StudentNote.php";

function getAllNotes($conn) {
    $sql = "SELECT * FROM student_notes";
    $sqlResult = $conn->query($sql);
    return $sqlResult;
}
