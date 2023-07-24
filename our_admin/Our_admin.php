<?php require __DIR__ . '/../cdb.php'; ?>
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
    .list-group-item.active{  background-color: #19A7CE; }
    .list-group-item.active:focus,
.list-group-item.active:hover {
  background-color: #19A7CE; 
}
</style>
</head>
<body style="background-color:#DBE2EF;">
<div class="container-fluid">
    <div class="row"style="background-color:#F9F7F7">
        <div class="col-3 " >
            <div class="text-dark fw-bold p-5 fs-2"> EFER</div>
            <p class="px-5 pb-3">MAIN MENU</p>
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action mx-5 w-75 border-0 active" id="list-Dashboard-list" data-bs-toggle="list" href="#list-Dashboard" role="tab" aria-controls="list-home"><img width="25" height="25" src="https://img.icons8.com/ios-filled/50/performance-macbook.png" alt="performance-macbook"/>
                <span class="px-3">Dashboard</span></a>
                <a class="list-group-item list-group-item-action mx-5 w-75 border-0" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile"><img width="25" height="25" src="https://img.icons8.com/windows/32/add-user-group-woman-woman.png" alt="add-user-group-woman-woman"/><span class="px-3">View Request</span></a>
                <a class="list-group-item list-group-item-action mx-5 w-75 border-0" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages"><img width="25" height="25" src="https://img.icons8.com/ios/50/add-administrator.png" alt="add-administrator"/>
                <span class="px-3">Add Admin</span></a>
                <a class="list-group-item list-group-item-action mx-5 w-75 border-0" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings"><img width="25" height="25" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/48/external-system-accounting-tanah-basah-glyph-tanah-basah.png" alt="external-system-accounting-tanah-basah-glyph-tanah-basah"/>
                <span class="px-3">Active Org</span></a>
                <a class="list-group-item list-group-item-action mx-5 w-75 border-0" id="list-due-org-list" data-bs-toggle="list" href="#list-due-org" role="tab" aria-controls="list-due-org"><img width="25" height="25" src="https://img.icons8.com/external-glyph-geotatah/64/external-deadline-workaholic-glyph-glyph-geotatah.png" alt="external-deadline-workaholic-glyph-glyph-geotatah"/>
                <span class="px-3">Due Org</span></a>
                <a href="../index.php" class="btn btn-danger" style="background-color: #146C94;bottom:0%; ">Logout</a>

            </div>
        </div>
        <div class="col-9"style="background-color:#DBE2EF;">
            <div class="tab-content" id="nav-tabContent">
            
            <div class="tab-pane fade show active" id="list-Dashboard" role="tabpanel" aria-labelledby="list-Dashboard-list">
            <?php include 'pages/dashbord.php'?>
            </div>
            
        
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
            <?php include 'pages/View_Requests.php'?>
            </div>

            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
            <?php include 'pages/add_admin.php'?>
            </div>
            
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
            <?php include 'pages/active_organization.php'?>
            </div>

            <div class="tab-pane fade" id="list-due-org" role="tabpanel" aria-labelledby="list-due-org-list">
            <?php include 'pages/due_organization.php'?>
            </div>

            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="../assets/js/jquery-3.6.0.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>
