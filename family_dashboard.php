<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  
    <title>Family Dashboard</title>
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
          <a class="nav-link active" aria-current="page" href="#"><i class="fa-regular fa-calendar-days"></i>Our Services </a>
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
     <!--profile picture of family member can be added here --><img src="family_profile.png" alt="Profile Picture" class="rounded-circle mb-3" height="80">
    
    <h1>Welcome to the Family Dashboard</h1>
    
</div>

<!-- FAMILY DASHBOARD CONTENT START -->
<!-- 1. RESIDENT HEADER -->
<div class="row mb-4">
    <div class="col-12">
        <div class="p-4 bg-white border rounded shadow-sm d-md-flex justify-content-between align-items-center">
            <div>
                <h2 class="fw-bold mb-0" style="color: #008080;">Resident: <span id="res_name" class="text-dark">--</span></h2>
                <p class="text-muted mb-0 small"><i class="bi bi-link-45deg"></i> Connected as: <span id="relationship">--</span></p>
            </div>
            <div class="mt-3 mt-md-0 d-flex gap-2">
                <button class="btn btn-sm btn-outline-dark"><i class="fa-regular fa-envelope me-1"></i> Message Caregiver</button>
                <button class="btn btn-sm btn-dark"><i class="fa-solid fa-file-pdf me-1"></i> Monthly Report</button>
            </div>
        </div>
    </div>
</div>

<!-- 2. QUICK VITALS SUMMARY-->
<div class="row g-3 mb-4">
    <div class="col-md-3">
        <div class="card border-0 shadow-sm p-3 border-start border-4 border-primary">
            <label class="text-muted small fw-bold text-uppercase">Blood Pressure</label>
            <h4 class="mb-0" id="current_bp">--</h4>
            <small class="text-muted" id="bp_time">Last updated: --</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm p-3 border-start border-4 border-success">
            <label class="text-muted small fw-bold text-uppercase">Blood Sugar</label>
            <h4 class="mb-0" id="current_bs">--</h4>
            <small class="text-muted" id="bs_time">Last updated: --</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm p-3 border-start border-4 border-warning">
            <label class="text-muted small fw-bold text-uppercase">Resident Mood</label>
            <h4 class="mb-0" id="current_mood">--</h4>
            <small class="text-muted">Self-reported</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm p-3 border-start border-4 border-danger">
            <label class="text-muted small fw-bold text-uppercase">Pain Level</label>
            <h4 class="mb-0" id="current_pain">-- <small class="fs-6">/10</small></h4>
            <small class="text-muted">Self-reported</small>
        </div>
    </div>
</div>

<!-- 3. MEDICATION HISTORY -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                <h5 class="mb-0 fw-bold" style="color: #008080;">
                    <i class="fa-solid fa-pills me-2"></i>Medication Administration History
                </h5>
                <div class="d-flex gap-2">
                    <input type="date" class="form-control form-control-sm" id="med_date">
                    <button class="btn btn-sm btn-secondary">Filter</button>
                </div>
            </div>
            <div class="table-responsive" style="max-height: 300px;">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light small text-uppercase sticky-top">
                        <tr>
                            <th>Scheduled Time</th>
                            <th>Medication</th>
                            <th>Dosage</th>
                            <th>Status</th>
                            <th>Administered By</th>
                        </tr>
                    </thead>
                    <tbody id="med_history_table">
                        <!-- Data rows will go here -->
                        <tr>
                            <td colspan="5" class="text-center py-4 text-muted small">No medication logs found.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- 4. SYSTEM ALERTS & ACTIVITY -->
<div class="row g-4">
    <div class="col-lg-8">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-header bg-white py-3">
                <h5 class="mb-0 fw-bold" style="color: #008080;">General Health Logs</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-sm align-middle mb-0">
                    <thead class="table-light small">
                        <tr>
                            <th>Date/Time</th>
                            <th>Blood Pressure</th>
                            <th>Blood Sugar</th>
                            <th>Temp</th>
                            <th>Heart Rate</th>
                           
                        </tr>
                    </thead>
                    <tbody id="general_logs">
                         <tr>
                            <td colspan="4" class="text-center py-4 text-muted small">No recent logs.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>

    <div class="col-lg-4">
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-header text-white fw-bold" style="background-color: #343a40;">
                <i class="bi bi-lightning-charge-fill text-warning me-2"></i>Health Trend Alerts
            </div>
            <div class="list-group list-group-flush" id="trend_alerts">
                <!-- System-generated alerts go here -->
                <div class="list-group-item small text-muted text-center py-4">
                    No critical health alerts at this time.
                </div>
            </div>
        </div>

        <!-- Emergency Contact Card -->
        <div class="card shadow-sm border-0 bg-light p-3 border-start border-4 border-danger">
            <h6 class="fw-bold text-danger mb-1 small"><i class="bi bi-exclamation-triangle-fill me-2"></i>Emergency Notice</h6>
            <p class="mb-0 x-small text-muted">Updates are logged every 4-6 hours. For immediate concerns, call the head office directly.</p>
        </div>
    </div>
</div>
</div>
</div>
</div>


    

    
<!-- FAMILY DASHBOARD CONTENT END -->

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

      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3">Are you a family member? Register here to monitor resident wellbeing</span>
          <button type="button" class="btn btn-outline-light btn-rounded" onclick="window.location.href='register_form_family.html'">
            Family Sign up!
          </button>
        </p>
      </section>
      <!-- Section: CTA -->

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

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
       © 2026 Care Circle. All rights reserved. | Designed for educational purposes. | Developed by INFO 2413 Team 6 
         <br>
      
      
    </div>
    <!-- Copyright -->

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>