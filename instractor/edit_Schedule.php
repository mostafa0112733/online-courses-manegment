<?php
require '../cdb.php';
$id = $_GET['id'];
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/js/bootstrap.js" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:ital,wght@0,100;0,300;1,400&family=Teko:wght@600&display=swap" rel="stylesheet">
    <style>
        .list-group-item.active {
            background-color: #19A7CE;
        }

        .list-group-item.active:focus,
        .list-group-item.active:hover {
            background-color: #19A7CE;
        }
    </style>
</head>
<body style="background-color:#DBE2EF;">
    <div class="container-fluid">
        <div class="row justify-content-center mt-5 pt-5">
            <div class="col-4">
                <div class="card" style="background-color: #F9F7F7; border-radius: 25px">
                    <h1 class="text-center my-3">Edit Schedule</h1>
                    <div class="card-body">
                        <form method="post" action="#">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="meeting_name">Meeting Name:</label>
                                    <input type="text" class="form-control" id="meeting_name" name="meeting_name" style="height: 50px; background-color:#DBE2EF" required>
                                </div>
                                <div class="form-group">
                                    <label for="schedule">Schedule:</label>
                                    <input type="datetime-local" class="form-control" id="schedule" name="schedule" style="height: 50px; background-color:#DBE2EF" required>
                                </div>
                                <button type="submit" class="btn text-white w-100 mt-5" style="background-color: #146C94;">edit</button>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['meeting_name']) && isset($_POST['schedule'])) {
                            $meeting_name = $_POST['meeting_name'];
                            $schedule = $_POST['schedule'];

                            $qry = "UPDATE `Meetings` SET `meeting_name`='$meeting_name', `Schedule`='$schedule' WHERE `id`=$id";
                            $result = $cdb->query($qry);

                            if ($result) {
                                echo "<div class='alert alert-success'>Schedule updated successfully!</div>";
                            } else {
                                echo "<div class='alert alert-danger'>Error updating schedule.</div>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <a href="../index.php"class="position-fixed bottom-0 mb-5  btn position-fixed" style="background-color:#146C94;color:#F9F7F7;">Logout</a>
        <a href="instractor_header.php"class=" mb-5  btn position-fixed" style="background-color:#146C94;color:#F9F7F7;">go back</a>

    </div>

</body>
</html>
