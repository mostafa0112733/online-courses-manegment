
<div class="card my-5">
    <div class="card-body" style="background-color:#DBE2EF;">
        <div class="row justify-content-center align-items-center mt-3" style="height: 78vh;">
            <div class="col-6">
                <div class="card" style="background-color: #F9F7F7; border-radius: 25px">
                    <h1 class="text-center my-3" style="color: #DBE2EF">Join Course</h1>
                    <div class="card-body">
                        <form method="post" action="org_admin.php">
                            <div class="mb-3">
                                <label for="Person_id">Instructor:</label>
                                <select name="Person_id" class="form-control" style="height: 50px; background-color:#DBE2EF">
                                    <?php
                                    // Retrieve all instructors with full names
                                    $res = mysqli_query($cdb, "SELECT * FROM Persons  
                                        WHERE `Organizations_admins_id` = '$user_id'
                                        AND `user_type` = 'instructor'
                                        ORDER BY full_name");
                                    foreach ($res as $r):
                                    ?>
                                    <option value="<?= $r['id'] ?>"><?= $r['full_name'] ?>  </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="course_id">Course:</label>
                                <select name="course_id" class="form-control" style="height: 50px; background-color:#DBE2EF">
                                    <?php
                                    // Retrieve all courses
                                    $res = mysqli_query($cdb, "SELECT * FROM Courses
                                        WHERE `Courses`.`Organizations_admins_id` = '$user_id'
                                        ORDER BY course_name");
                                    foreach ($res as $r):
                                    ?>
                                    <option value="<?= $r['id'] ?>"><?= $r['course_name'] ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn text-white w-50 mt-5" style="background-color: #146C94;">Add</button>
                                </div>                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
