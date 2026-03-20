<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Caregiver Dashboard</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand">
                <img src="logo_darkbg.png" alt="..." height="36"> 
                <span class="fw-bold fs-4 text-uppercase text-white"> Care Circle | </span>
                <span class="ms-2 fw-light fs-6 text-white">Elder Care Home Management</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fa-regular fa-home me-1"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fa-regular fa-calendar-days me-1"></i> My Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fa-regular fa-user me-1"></i> Edit Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fa-regular fa-envelope me-1"></i> Messages</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container mt-4"><div class="p-4 bg-white border rounded shadow-sm text-center mb-4">
     <!--profile picture of caregiver can be added here --><img src="caregiver_profile.png" alt="Profile Picture" class="rounded-circle mb-3" height="80">
    
    <h1>Welcome to the Caregiver Dashboard</h1>
   
</div> <div class="container my-5"> </div>

    <main class="container py-4">
       
        <div class="card mb-4 border-0 shadow-sm">
            <div class="card-body bg-white border rounded d-flex justify-content-between align-items-center">
                <div>
                    <span class="text-muted small fw-bold text-uppercase">Currently Assisting</span>
                    <h5 class="fw-bold mb-0" style="color: #008080;" id="resident-name-display">No Resident Selected</h5>
                </div>
                <form class="d-flex gap-2" method="GET">
                    <input type="text" name="search" class="form-control form-control-sm" placeholder="Search PHN or Name...">
                    <button type="submit" class="btn btn-sm btn-dark px-3">Search</button>
                </form>
            </div>
        </div>

        <!-- Tab Interface -->
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white p-0 border-bottom">
                <ul class="nav nav-tabs border-0" id="caregiverTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active fw-bold text-dark px-4 py-3 border-0" id="vitals-tab" data-bs-toggle="tab" data-bs-target="#vitals-pane" type="button" role="tab">
                            <i class="bi bi-heart-pulse me-2"></i>Health Vitals
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fw-bold text-dark px-4 py-3 border-0" id="meds-tab" data-bs-toggle="tab" data-bs-target="#meds-pane" type="button" role="tab">
                            <i class="bi bi-capsule me-2"></i>Medications
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fw-bold text-dark px-4 py-3 border-0" id="logs-tab" data-bs-toggle="tab" data-bs-target="#logs-pane" type="button" role="tab">
                            <i class="bi bi-journal-text me-2"></i>Daily Logs
                        </button>
                    </li>
                </ul>
            </div>

            <div class="card-body p-4 bg-white border-top-0 border rounded-bottom">
                <div class="tab-content" id="caregiverTabContent">
                    
                    <!-- Vitals Pane -->
                    <div class="tab-pane fade show active" id="vitals-pane" role="tabpanel" aria-labelledby="vitals-tab">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h6 class="fw-bold m-0" style="color: #008080;">Vital Signs Log</h6>
                            <button type="button" class="btn btn-sm text-white px-3" style="background-color: #008080;" data-bs-toggle="modal" data-bs-target="#vitalsModal">
                                <i class="bi bi-plus-lg me-1"></i> New Entry
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-sm small align-middle">
                                <thead class="table-light text-muted">
                                    <tr>
                                        <th>Timestamp</th>
                                        <th>BP (mmHg)</th>
                                        <th>Blood Sugar (mg/dL)</th>
                                        <th>Temp (°C)</th>
                                        <th>Heart Rate</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- PHP Loop here -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="meds-pane" role="tabpanel" aria-labelledby="meds-tab">
                        <h6 class="fw-bold mb-4" style="color: #008080;">Medication Administration (MAR)</h6>
                        <table class="table table-sm align-middle border">
                            <thead class="table-light small">
                                <tr><th>Medication</th><th>Dosage</th><th>Schedule</th><th>Time Taken</th><th class="text-center">Action</th></tr>
                            </thead>
                            <tbody>
                                <!-- PHP Loop here -->
                            </tbody>
                        </table>
                    </div>

                    <!-- Logs Pane -->
                    <div class="tab-pane fade" id="logs-pane" role="tabpanel" aria-labelledby="logs-tab">
                        <h6 class="fw-bold mb-4">Observation Logs</h6>
                        <form id="caregiverLogForm" method="POST" action="save_log.php">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="small fw-bold text-muted">Log Type</label>
                                    <select name="log_type" class="form-select form-select-sm">
                                        <option value="routine">Routine Check</option>
                                        <option value="behavioral">Behavioral Issue</option>
                                        <option value="physical">Physical Concern</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea name="log_content" class="form-control form-control-sm" rows="4" placeholder="Describe observation..."></textarea>
                                </div>
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn btn-sm btn-dark px-4">Save Entry</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    

                </div>
            </div></div>


            <div class="col-12">
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-header text-white fw-bold" style="background-color: #343a40;">
                <i class="bi bi-lightning-charge-fill text-warning me-2"></i>Health Trend Alerts
            </div>
            <div class="list-group list-group-flush" id="trend_alerts">
              
                <div class="list-group-item small text-muted text-center py-4">
                    No critical health alerts at this time.
                </div>
            </div>
        </div></div>

       
        <div class="card shadow-sm border-0 bg-light p-3 border-start border-4 border-danger">
            <h6 class="fw-bold text-danger mb-1 small"><i class="bi bi-exclamation-triangle-fill me-2"></i>Emergency Notice</h6>
            <p class="mb-0 x-small text-muted">Updates are logged every 4-6 hours. For immediate concerns, call the office directly.</p>
        </div>
    </div>
</div>

      </div>  
    </main>

   

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
            <a href="dashboard_caregiver.html" class="text-white text-decoration-none small">Caregiver Portal</a>
        </li>
        <li>
            <a href="dashboard_resident.html" class="text-white text-decoration-none small">Resident View</a>
        </li>
        <li>
            <a href="dashboard_family.html" class="text-white text-decoration-none small">Family Access</a>
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

    <!-- Modal -->
    <div class="modal fade" id="vitalsModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header text-white" style="background-color: #008080;">
                    <h6 class="modal-title fw-bold">Add Health Record</h6>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <form action="insert_vitals.php" method="POST">
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-6"><label class="small fw-bold">BP</label><input type="text" name="bp" class="form-control form-control-sm"></div>
                            <div class="col-6"><label class="small fw-bold">Sugar</label><input type="number" name="sugar" class="form-control form-control-sm"></div>
                            <div class="col-6"><label class="small fw-bold">Temp</label><input type="number" name="temp" step="0.1" class="form-control form-control-sm"></div>
                            <div class="col-6"><label class="small fw-bold">HR</label><input type="number" name="hr" class="form-control form-control-sm"></div>
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="submit" class="btn btn-sm text-white" style="background-color: #008080;">Save Record</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>