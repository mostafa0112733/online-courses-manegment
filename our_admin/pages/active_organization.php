<?php require __DIR__ . '/../../cdb.php'; ?>
<div class="card my-5">
                        <div class="card-body ">
                            <h3>Active Org Content</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Full Name</th>
                                            <th scope="col">Phone Number</th>
                                            <th scope="col">Company Name</th>
                                            <th scope="col">Company Email</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">Active Date</th>
                                            <th scope="col">Due Date</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $current_date = date("Y-m-d");
                                            $qry = "SELECT o.*, r.full_name, r.phone_number, r.Company_Name, r.Company_Email, r.Country FROM Organizations_admins o INNER JOIN Organizations r ON o.Organizations_id = r.id WHERE  due_date >= '$current_date'";
                                            $res = mysqli_query($cdb, $qry);
                                            $n = 1;
                                            foreach ($res as $r) {
                                        ?>
                                            <tr>
                                                <td><?= $n++ ?></td>            
                                                <td><?= $r['full_name'] ?></td>
                                                <td><?= $r['phone_number'] ?></td>
                                                <td><?= $r['Company_Name'] ?></td>
                                                <td><?= $r['Company_Email'] ?></td>
                                                <td><?= $r['Country'] ?></td>
                                                <td><?= $r['active_date'] ?></td>
                                                <td><?= $r['due_date'] ?></td>
                                                <td>
                                                    <a href="pages/edit_organization.php?id=<?= $r['id'] ?>"style="background-color:#146C94;color:#F9F7F7;" class="btn btn-sm rounded-pill">
                                                         Edit
                                                    </a>
                                                    <a href="pages/del_organization.php?id=<?= $r['id'] ?>"style="background-color:#146C94;color:#F9F7F7;" class="btn btn-sm rounded-pill">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    </div>