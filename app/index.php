<?php

require_once "config.php";
require_once "functions.php";

$notesResult = getAllNotes($conn);

if ($notesResult->num_rows > 0) {
    while ($row = $notesResult->fetch_assoc()) {
        echo $row["student_name"] . "<br>";
        echo $row["note_text"] . "<br>";
        echo $row["status"] . "<br><br>";
    }
} else {
    echo "No notes found";
}
