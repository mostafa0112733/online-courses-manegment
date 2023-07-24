<?php require __DIR__ . '/../../cdb.php'; ?>
<div class="card my-5">
                        <div class="card-body"style="background-color: #F9F7F7;">
                            <h1 class="table mt-3">Organizations</h1>
                            <div class="table-responsive">
                                <table class="table mt-4">
                                    <thead>
                                        <tr>
                                        <th scope="col" class="fw-normal">#</th>
                                        <th scope="col" class="fw-normal">Full Name</th>
                                        <th scope="col" class="fw-normal">Phone Number</th>
                                        <th scope="col" class="fw-normal">Company Name</th>
                                        <th scope="col" class="fw-normal">Company Email</th>
                                        <th scope="col" class="fw-normal">Country</th>
                                        <th scope="col" class="fw-normal">Additional Information</th>
                                        <th scope="col" class="fw-normal">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                           $qry = "SELECT * FROM `Organizations`";
                                           $res = mysqli_query($cdb, $qry);
                                           $n = 1;
                                           foreach ($res as $r) {
                                       ?>
                                           <tr>
                                               <td class="fw-bold"><?= $n++ ?></td>            
                                               <td class="fw-bold"><?= $r['full_name'] ?></td>
                                               <td class="fw-bold"><?= $r['phone_number'] ?></td>
                                               <td class="fw-bold"><?= $r['Company_Name'] ?></td>
                                               <td class="fw-bold"><?= $r['Company_Email'] ?></td>
                                               <td class="fw-bold"><?= $r['Country'] ?></td>
                                               <td class="fw-bold"><?= $r['Additional_information'] ?></td>
                                               <td class="fw-bold">
                                                   <a href="pages/add_organization.php?id=<?= $r['id'] ?>"style="background-color:#146C94;color:#F9F7F7;" class="btn btn-sm  rounded-pill ">
                                                        Add
                                                   </a>
                                                   <a href="pages/edit_req.php?id=<?= $r['id'] ?>"style="background-color:#146C94;color:#F9F7F7;" class="btn btn-sm  rounded-pill">
                                                        Edit
                                                   </a>
                                                   <a href="pages/del_res.php?id=<?= $r['id'] ?>"style="background-color:#146C94;color:#F9F7F7;" class="btn btn-sm  rounded-pill">
                                                        Delete
                                                   </a>
                                               </td>
                                           </tr>
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>