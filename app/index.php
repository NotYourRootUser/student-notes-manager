<?php

require_once "config.php";
require_once "functions.php";

$notesResult = getAllNotes($conn);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Student Notes Manager</title>
    <meta name="viewport" content="width=device-width" />
</head>

<body>
    <p><a href="notes-by-status.php?status=open">Open notes</a></p>
    <p><a href="notes-by-status.php?status=closed">Closed notes</a></p>
    <p><a href="student-view.php">Student view</a></p>
    <p><a href="summary.php">Summary page</a></p>

    <h1>All Student Notes</h1>
    <?php
    if ($notesResult->num_rows > 0) {
        while ($row = $notesResult->fetch_assoc()) { ?>
            <div>
                <h1> <?php echo
                        $row["student_name"] ?> </h1>
                <p> <?php echo
                    $row["note_text"] ?> </p>
                <p> <?php echo
                    $row["status"]; ?> </p>
            </div> <?php
                }
            } else {
                    ?>
        <p> <?php echo "No notes found"; ?> </p>
    <?php } ?>


</body>

</html>