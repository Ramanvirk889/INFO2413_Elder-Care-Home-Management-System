<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  
    <title>Admin Dashboard</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" >
      <img src="logo_darkbg.png" alt="..." height="36" > <span class="fw-bold fs-4 text-uppercase " style="color:white"> Care Circle | </span><span class="ms-2 fw-light fs-6 text-white">Elder Care Home Management</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item" >
          <a class="nav-link active" aria-current="page" href="#"><i class="fa-regular fa-home"></i>Home </a>
        </li>
        <li class="nav-item" >
          <a class="nav-link active" aria-current="page" href="#"><i class="fa-regular fa-calendar-days"></i> My Schedule </a>
        </li>
        
        <li class="nav-item" >
          <a class="nav-link active" aria-current="page" href="#"><i class="fa-regular fa-envelope"></i> Messages</a>
        </li>
       
       
        
           
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-4"><div class="p-4 bg-white border rounded shadow-sm text-center mb-4">
     <!--profile picture of admin can be added here --><img src="admin_profile.png" alt="Profile Picture" class="rounded-circle mb-3" height="80">
    
    <h1>Welcome to the Admin Dashboard</h1>
    
</div>

<!---  Main content-->
<div class="container my-5"></div>

    <div id="admin-alerts" class="mb-4">
        <div class="alert d-flex align-items-center shadow-sm border-start border-4" 
             style="background-color: #fff9e6; border-color: #ffc107;" role="alert">
            <i class="bi bi-robot fs-4 me-3" style="color: #008080;"></i>
            <div>
                <strong style="color: #333;">AI Trend Monitor:</strong> 
                <span class="text-muted small">The backend AI engine will display health decline trends or missed medication alerts here.</span>
            </div>
        </div>
    </div>

    <style>
        .custom-nav-tabs .nav-link { color: #555; border: none; }
        .custom-nav-tabs .nav-link.active { 
            color: #008080 !important; 
            border-bottom: 3px solid #008080 !important; 
            font-weight: 600;
            background: none;
        }
        .btn-custom-teal { background-color: #008080; color: white; border: none; }
        .btn-custom-teal:hover { background-color: #006666; color: white; }
        .card-header-teal { background-color: #008080; color: white; font-weight: 500; }
    </style>

    <ul class="nav nav-tabs mb-4 custom-nav-tabs" id="adminFunctions" role="tablist">
        <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-accounts">Create Accounts</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-approvals">Approvals & Assignments</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-management">User Management</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-reports">System Reports</button>
        </li>
    </ul>

    <div class="tab-content pt-2" id="adminFunctionsContent">

        <div class="tab-pane fade show active" id="tab-accounts">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-header card-header-teal">Register Resident</div>
                        <div class="card-body border">
                            <form>
                                <div class="row g-2">
                                    <div class="col-md-6 mb-2"><input type="text" class="form-control form-control-sm" placeholder="Health Care Number"></div>
                                    <div class="col-md-6 mb-2"><input type="text" class="form-control form-control-sm" placeholder="Full Name"></div>
                                    <div class="col-md-6 mb-2"><label class="small text-muted">Date of Birth</label><input type="date" class="form-control form-control-sm"></div>
                                    <div class="col-md-6 mb-2"><label class="small text-muted">Email</label><input type="email" class="form-control form-control-sm" placeholder="Optional"></div>
                                    <div class="col-12 mb-2"><textarea class="form-control form-control-sm" rows="2" placeholder="Emergency Contact Info"></textarea></div>
                                    <div class="col-12 mb-3"><label class="small text-muted">Profile Image</label><input type="file" class="form-control form-control-sm"></div>
                                </div>
                                <button type="submit" class="btn btn-custom-teal btn-sm w-100">Create Resident Account</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-header border-bottom fw-bold" style="background-color: #444; color: white;">Register Caregiver</div>
                        <div class="card-body border">
                            <form>
                                <div class="mb-3"><input type="text" class="form-control" placeholder="Working ID"></div>
                                <div class="mb-3"><input type="text" class="form-control" placeholder="Full Name"></div>
                                <div class="mb-3"><input type="email" class="form-control" placeholder="Email Address"></div>
                                <div class="mb-3"><label class="small text-muted">Profile Image</label><input type="file" class="form-control"></div>
                                <button type="submit" class="btn w-100 mt-2" style="background-color: #444; color: white;">Create Caregiver Account</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="tab-approvals">
            <div class="row g-4">
                <div class="col-md-7">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white fw-bold border-bottom" style="color: #008080;">Pending Family Requests</div>
                        <div class="table-responsive border">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr><th>Family Member</th><th>Resident</th><th>Action</th></tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center"><td colspan="3" class="py-4 text-muted small">No pending requests.</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card shadow-sm border-0">
                        <div class="card-header text-white text-center fw-bold" style="background-color: #008080;">Assign Staff</div>
                        <div class="card-body border">
                            <select class="form-select mb-3"><option selected disabled>Choose Resident...</option></select>
                            <select class="form-select mb-4"><option selected disabled>Choose Caregiver...</option></select>
                            <button class="btn btn-custom-teal w-100">Confirm Assignment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="tab-management">
            <div class="card shadow-sm border-0">
                <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #cc0000; color: white;">
                    <span class="fw-bold">Master User Access</span>
                    <input type="text" class="form-control form-control-sm w-25" placeholder="Search...">
                </div>
                <div class="table-responsive border">
                    <table class="table table-hover mb-0">
                        <thead class="table-light"><tr><th>Name</th><th>Role</th><th>Actions</th></tr></thead>
                        <tbody>
                            <tr>
                                <td>Example User</td>
                                <td><span class="badge" style="background-color: #008080;">Resident</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-secondary me-1"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="tab-reports">
            <div class="card shadow-sm border-0">
                <div class="card-header text-white fw-bold" style="background-color: #333;">System Reports Generator</div>
                <div class="card-body border">
                    <div class="row mb-4 g-2">
                        <div class="col-md-4"><select class="form-select"><option>2026</option></select></div>
                        <div class="col-md-4"><select class="form-select"><option>Monthly/Annual</option></select></div>
                        <div class="col-md-4"><button class="btn btn-custom-teal w-100">Generate</button></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 border-end">
                            <h6 class="fw-bold" style="color: #008080;">User & Medication Summary</h6>
                            <table class="table table-sm table-striped border">
                                <thead><tr><th>Resident</th><th>Missed Meds</th></tr></thead>
                                <tbody><tr class="text-center"><td colspan="2" class="text-muted small py-3">Select parameters above.</td></tr></tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h6 class="fw-bold" style="color: #008080;">Health Irregularities</h6>
                            <table class="table table-sm table-striped border">
                                <thead><tr><th>Resident</th><th>Irregularities</th></tr></thead>
                                <tbody><tr class="text-center"><td colspan="2" class="text-muted small py-3">Select parameters above.</td></tr></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Footer -->
<footer class="text-center text-lg-start text-white mt-5" style="background-color:darkslategrey">
        <div class="container p-4 pb-0">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="d-flex align-items-center mb-2">
                        <img src="logo_darkbg.png" alt="Logo" height="30" class="me-2">
                        <span class="fs-4 fw-normal text-uppercase">Care Circle</span>
                    </div>
                    <p class="small">Community | Support | Guidance</p>
    
  <ul class="list-unstyled mb-0" style="line-height: 1.2;">
          <li class="mb-1"><i class="bi bi-geo-alt-fill me-2 small"></i> <strong>Address:</strong> <span class="small">12666 72nd Ave, Surrey, BC</span></li>
          <li class="mb-1"><i class="bi bi-telephone-fill me-2 small"></i><span class="small">+1 (123) 456-7890</span></li>
          <li class="mb-1"><i class="bi bi-envelope-fill me-2 small"></i><span class="small">support@carecircle.ca</span></li>
          <li><i class="bi bi-clock-fill me-2 small"></i><span class="small">Admin Office: 9:00 AM - 5:00 PM</span></li>
        </ul>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
  <h5>Company Info</h5>

  <ul class="list-unstyled mb-0">
    <li>
      <a href="about.php" class="text-white text-decoration-none small">About us</a>
    </li>
    <li>
      <a href="mission.php" class="text-white text-decoration-none small">Our Mission</a>
    </li>
    <li>
      <a href="vision.php" class="text-white text-decoration-none small">Our Vision</a>
    </li>
    <li>
      <a href="careers.php" class="text-white text-decoration-none small">Careers</a>
    </li>
  </ul>
</div>
          <!--Grid column--> 

         <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
    <h5 >Quick Navigation</h5>
    <ul class="list-unstyled mb-0">
       <li>
            <a href="admin_dashboard.php" class="text-white text-decoration-none small">Admin Dashboard</a>
        </li>
        <li>
            <a href="caregiver_dashboard.php" class="text-white text-decoration-none small">Caregiver Portal</a>
        </li>
        <li>
            <a href="resident_dashboard.php" class="text-white text-decoration-none small">Resident View</a>
        </li>
        <li>
            <a href="family_dashboard.php" class="text-white text-decoration-none small">Family Access</a>
        </li>
    </ul>
</div>

          

          <!--Grid column-->
          <div class="col-lg-2 col-md-6 mb-4 mb-md-0 ">
  <h5>Help & Resources</h5>
  <ul class="list-unstyled mb-0">
    <li>
      <a href="help_center.php" class="text-white text-decoration-none small">Help Center</a>
    </li>
    <li>
      <a href="emergency_contacts.php" class="text-white text-decoration-none small">Emergency Protocol</a>
    </li>
    <li>
      <a href="privacy_policy.php" class="text-white text-decoration-none small">Privacy & Data Security</a>
    </li>
    <li>
      <a href="support_ticket.php" class="text-white text-decoration-none small">Report an Issue</a>
    </li>
  </ul>
</div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
  <h5>Legal</h5>

  <ul class="list-unstyled mb-0">
    <li>
      <a href="terms.php" class="text-white text-decoration-none small">Terms of Service</a>
    </li>
    <li>
      <a href="privacy.php" class="text-white text-decoration-none small">Privacy Policy</a>
    </li>
    <li>
      <a href="support.php" class="text-white text-decoration-none small">Contact Support</a>
    </li>
    <li>
      <a href="compliance.php" class="text-white text-decoration-none small">Health Compliance</a>
    </li>
  </ul>
</div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="mb-4" />

    
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3">Are you a family member? Register here to monitor resident wellbeing</span>
          <button type="button" class="btn btn-outline-light btn-rounded" onclick="window.location.href='register_form_family.html'">
            Family Sign up!
          </button>
        </p>
      </section>

      <hr class="mb-4" />

      <!-- Section: Social media -->
      <section class="mb-4 text-center">
        <!-- Facebook -->
        <a
           class="btn btn-outline-light  btn-floating m-1"
            href="#!"
           role="button"
           ><i class="fa-brands fa-facebook"></i></a>

        

        <!-- Google -->
        <a
           class="btn btn-outline-light btn-floating m-1"
           href="#!"
           role="button"
           ><i class="fa-brands fa-google"></i>
          </a>

        <!-- Instagram -->
        <a
           class="btn btn-outline-light btn-floating m-1"
           href="#!"
           role="button"
           ><i class="fa-brands fa-instagram"></i
          ></a>

        <!-- Linkedin -->
        <a
           class="btn btn-outline-light  btn-floating m-1"
           href="#!"
           role="button"
           ><i class="fa-brands fa-linkedin"></i
          ></a>

      
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
       © 2026 Care Circle. All rights reserved. | Designed for educational purposes. | Developed by INFO 2413 Team 6 
         <br>
      
      
    </div>


    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body> 
</html>