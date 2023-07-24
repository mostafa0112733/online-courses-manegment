    <div class="card">
        <div class="card-body" style="background-color:#DBE2EF;">
            <div class="row justify-content-center align-items-center" style="height: 95vh;">
                <div class="col-6">
                    <div class="card" style="background-color: #F9F7F7; border-radius: 25px">
                        <h1 class="text-center my-3 pb-3 pt-3" style="color: #DBE2EF;">Add User</h1>
                        <div class="card-body">
                            <form method="post" action="org_admin.php">
                                <div class="mb-3 px-5">
                                    <label for="full_name">Full Name</label>
                                    <input type="text" class="form-control my-1" id="full_name" name="full_name" placeholder="Full Name" style="height: 50px; background-color:#DBE2EF" required />
                                </div>
    
                                <div class="mb-3 px-5">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control my-1" id="email" name="email" placeholder="Email" style="height: 50px; background-color:#DBE2EF" required />
                                </div>
    
                                <div class="mb-3 px-5">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="number" class="form-control my-1" id="phone_number" name="phone_number" placeholder="Phone Number" style="height: 50px; background-color:#DBE2EF" required />
                                </div>
    
                                <div class="row mb-3 px-5">
                                    <div class="col">
                                        <label for="user_type" class="form-label">User Type</label>
                                        <select class="form-select" name="user_type" id="user_type" style="height: 50px; background-color:#DBE2EF" required>
                                            <option value="instructor">Instructor</option>
                                            <option value="student">Student</option>
                                        </select>
                                    </div>
                                </div>
    
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn text-white w-50 mt-5" style="background-color: #146C94;">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    