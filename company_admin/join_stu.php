        <div class="row justify-content-center align-items-center mt-3" style="height: 95vh;">
            <div class="col-6">
                <div class="card" style="background-color: #F9F7F7; border-radius: 25px">
                    <h1 class="text-center my-3" style="color: #DBE2EF">Join Course</h1>
                    <div class="card-body">
                        <form method="post" action="org_admin.php">
                            <div class="mb-3">
                                <label for="student_id">Student:</label>
                                <select name="student_id" class="form-control" style="height: 50px; background-color:#DBE2EF">
                                    <?php
                                    // Retrieve all students with full names
                                    $res = mysqli_query($cdb, "SELECT * FROM Persons  
                                        WHERE `Organizations_admins_id` = '$user_id'
                                        AND `user_type` = 'student'
                                        ORDER BY full_name");
                                    foreach ($res as $r):
                                    ?>
                                    <option value="<?= $r['id'] ?>"><?= $r['full_name'] ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="course_instructor_id">Course:</label>
                                <select name="course_instructor_id" class="form-control" style="height: 50px; background-color:#DBE2EF">
                                    <?php
                                    // Retrieve all courses and their instructors
                                    $res = mysqli_query($cdb, "SELECT ci.id, c.course_name, p.full_name 
                                        FROM Courses_Instructors ci 
                                        JOIN Courses c ON ci.course_id = c.id 
                                        JOIN Persons p ON ci.person_id = p.id
                                        JOIN Organizations_admins o ON ci.Organizations_admins_id = o.id
                                        WHERE o.id = '$user_id'
                                        ORDER BY c.course_name, p.full_name ASC");

                                    foreach ($res as $r):
                                    ?>
                                    <option value="<?= $r['id'] ?>"><?= $r['course_name'] ?> - <?= $r['full_name'] ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>

                            <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn text-white w-50 mt-5" style="background-color: #146C94;">Add</button>
                                </div>                        </form>
                    </div>
                </div>
            </div>
        </div>
        