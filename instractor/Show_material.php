<?php
session_start();

?>
<div class="container mt-3">
    <h1>Courses Materials</h1>
    <?php
    if (isset($_SESSION['user_id']) && $_SESSION['user_type'] == 'instructor') {
        $user_id = $_SESSION['user_id'];
        $qry = "SELECT Courses.course_name, Materials.file_path,Materials.description,Materials.title
                FROM `courses_instructors`
                INNER JOIN `courses` ON `courses_instructors`.`course_id` = `courses`.`id`
                INNER JOIN `instructors` ON `courses_instructors`.`instructor_id` = `instructors`.`id`
                INNER JOIN `persons` ON `instructors`.`person_id` = `persons`.`id`
                INNER JOIN `Materials` ON `Materials`.`course_id` = `courses`.`id`
                WHERE `persons`.`id` = $user_id
                ";
        $result = $cdb->query($qry);
        if ($result->num_rows > 0) {
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">course</th>
                        <th scope="col">Title</th>
                        <th scope="col">File</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $row['course_name'] ?></td>
                            <td><?= $row['title'] ?></td>
                            <td><a href="<?= $row['file_path'] ?>" download="<?= basename($row['file_path']) ?>" target="_blank"><?= $row['file_path'] ?></a></td>
                            <td><?= $row['description'] ?></td>
                            
                        </tr>
                        <?php
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        <?php
        } else {
            echo "No materials found for this course.";
        }
    } else {
        echo "Please select a course to view its materials.";
    }
    ?>
    <a href="../index.php"class="position-fixed bottom-0 mb-5  btn position-fixed" style="background-color:#146C94;color:#F9F7F7;">Logout</a>
    <a href="instractor_header.php"class="position-fixed bottom-0 mb-5  btn position-fixed" style="background-color:#146C94;color:#F9F7F7;">Logout</a>

</div>
