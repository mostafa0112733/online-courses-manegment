<?php require __DIR__ . '/../cdb.php';
            if (isset($_SESSION['user_id'])) {
              $user_id = $_SESSION['user_id'];
          }
?>
<div class="card w-100 mt-3">
          <div class="card-body"style="background-color: #F9F7F7;">
            
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="fw-normal">#</th>
                  <th scope="col" class="fw-normal">Full Name</th>
                  <th scope="col" class="fw-normal">Email</th>
                  <th scope="col" class="fw-normal">Phone Number</th>
                  <th scope="col" class="fw-normal">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $qry = "SELECT *
                FROM Persons 
                where  Organizations_admins_id = '$user_id' AND Persons.user_type = 'student'";
                $res = mysqli_query($cdb, $qry);
                $n = 1;
                while ($r = mysqli_fetch_array($res)) {
                ?>
                  <tr>
                    <td class="fw-bold"><?= $n++ ?></td>
                    <td class="fw-bold"><?= $r['full_name'] ?></td>
                    <td class="fw-bold"><?= $r['email'] ?></td>
                    <td class="fw-bold"><?= $r['phone_number'] ?></td>
                    <td class="fw-bold">
                      <a href="show_student.php?id=<?= $r['id'] ?>" style="background-color:#146C94;color:#F9F7F7;" class="btn btn-sm  rounded-pill ">
                        <i class="fa-solid fas fa-eye">view</i>
                      </a>
                      <a href="edit_student.php?id=<?= $r['id'] ?>"style="background-color:#146C94;color:#F9F7F7;" class="btn btn-sm  rounded-pill ">
                        <i class="fa-solid fas fa-pen-fancy">edit</i>
                      </a>
                      <a href="delete/del_ins.php?id=<?= $r['id'] ?>"style="background-color:#146C94;color:#F9F7F7;" class="btn btn-sm  rounded-pill ">
                        <i class="fa-solid fas fa-trash">delete</i>
                      </a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>

            </table>
          </div>
</div>

