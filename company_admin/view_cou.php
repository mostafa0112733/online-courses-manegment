<?php require __DIR__ . '/../cdb.php';
                  if (isset($_SESSION['user_id'])) {
                    $user_id = $_SESSION['user_id'];
                }
?>
<div class="card w-100 mt-3">
            <div class="card-body" style="background-color: #F9F7F7;">
                <div class="row">     
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="fw-normal">#</th>
                            <th scope="col"class="fw-normal">Name</th>
                            <th scope="col" class="fw-normal">Action</th>
                        </tr>
                    </thead>
                    <?php 
                    $qry = "SELECT * FROM `Courses`
                            WHERE `Organizations_admins_id` = '$user_id' 
                            ORDER BY course_name ASC ";
                    $res = mysqli_query($cdb, $qry);
                    $n = 1;
                    foreach ($res as $r):
                    ?>
                    <tbody>
                        <tr>
                            <td class="fw-bold"><?= $n++ ?></td>
                            <td class="fw-bold"><?= $r['course_name'] ?></td>
                            <td class="fw-bold">  
                                <a href="show_course.php?id=<?= $r['id'] ?>" style="background-color:#146C94;color:#F9F7F7;" class="btn btn-sm  rounded-pill ">
                                    <i class="fa-solid fas fa-eye"> view</i>
                                </a>
                                <a href="edit_cou.php?id=<?= $r['id'] ?>" style="background-color:#146C94;color:#F9F7F7;" class="btn btn-sm rounded-pill">
                                <i class="fa-solid fas fa-pen"> edit</i>
                            </a>

                                <a href="del_cou.php?id=<?= $r['id'] ?>" style="background-color:#146C94;color:#F9F7F7;" class="btn btn-sm  rounded-pill ">
                                    <i class="fa-solid fas fa-trash"> delete</i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
       