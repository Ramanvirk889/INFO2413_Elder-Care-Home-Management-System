<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  
    <title>Resident Dashboard</title>
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
          <a class="nav-link active" aria-current="page" href="#"><i class="fa-regular fa-user"></i> Edit Profile</a>
        </li>
        
        <li class="nav-item" >
          <a class="nav-link active" aria-current="page" href="#"><i class="fa-regular fa-envelope"></i>Messages</a>
        </li>
       
       
        
           
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-4"><div class="p-4 bg-white border rounded shadow-sm text-center mb-4">
     <!--profile picture of resident can be added here --><img src="resident_profile.png" alt="Profile Picture" class="rounded-circle mb-3" height="80">
    
    <h1>Welcome to the Resident Dashboard</h1>
    
</div>
<!---  Main content-->

    <div class="row mb-4">
        <div class="col-12">
            <h2 class="fw-bold" style="color: #008080;">Resident Self-Management</h2>
            <p class="text-muted small">Input daily vitals, search your history, or modify past entries.</p>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-5">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white fw-bold border-bottom" style="color: #008080;">
                    <i class="fa-solid fa-plus-circle me-2"></i>New Daily Log
                </div>
                <div class="card-body">
                    <form id="logForm">
                        <input type="hidden" id="editIndex" value="-1">
                        
                        <div class="mb-3">
                            <label class="form-label small fw-bold text-muted">DAILY MOOD</label>
                            <select class="form-select" id="mood" required>
                                <option value="" selected disabled>How are you feeling?</option>
                                <option value="Happy">Happy</option>
                                <option value="Neutral">Neutral</option>
                                <option value="Sad">Sad</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-muted">PAIN LEVEL (1-10)</label>
                            <input type="range" class="form-range" min="1" max="10" id="pain">
                            <div class="d-flex justify-content-between small text-muted">
                                <span>1 (None)</span>
                                <span>5 (Moderate)</span>
                                <span>10 (Severe)</span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-muted">SLEEP QUALITY</label>
                            <select class="form-select" id="sleep" required>
                                <option value="" selected disabled>Select sleep quality</option>
                                <option value="Excellent">Excellent</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                                <option value="Poor">Poor</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-muted">HOURS SLEPT</label>
                            <input type="number" class="form-control" id="hoursSlept" placeholder="Hours Slept" min="0" max="24" required>
                        </div>

                        <button type="submit" id="submitBtn" class="btn bg-success text-white">Submit</button>
                        <button type="button" id="editBtn" class="btn bg-secondary text-white">Edit</button>
                        <button type="reset" id="cancelBtn" class="btn bg-danger text-white">Cancel</button>

                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body bg-light border p-3">
            <form id="historySearchForm">
                <div class="row g-2 align-items-end">
                    <div class="col-md-4">
                        <label class="small fw-bold text-muted mb-1 text-uppercase">Filter by Date</label>
                        <input type="date" id="searchDate" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-4">
                        <label class="small fw-bold text-muted mb-1 text-uppercase">Search Medicine</label>
                        <input type="text" id="searchMed" class="form-control form-control-sm" placeholder="Enter name...">
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-dark btn-sm w-100" onclick="executeSearch()">
                            <i class="fa-solid fa-magnifying-glass me-1"></i> Search Records
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="resident-logs-tab">
            <div class="card shadow-sm border-0">
                <div class="table-responsive border rounded">
                    <table class="table table-hover align-middle mb-0" id="residentTable">
                        <thead class="table-light small text-uppercase">
                            <tr>
                                <th>Date & Time</th>
                                <th>Blood Pressure</th>
                                <th>Blood Sugar</th>
                                <th>Temperature</th>
                                <th>Heart Rate</th>
                            </tr>
                        </thead>
                        <tbody id="residentDataBody">
                            <tr>
                                <td colspan="5" class="text-center py-5 text-muted">
                                    <i class="fa-solid fa-folder-open d-block fs-2 mb-2"></i>
                                    No health logs found for the selected criteria.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


            <div class="card shadow-sm border-0">
                <div class="card-header text-white" style="background-color: #444;">
                    Your Self-Reports
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light small text-uppercase">
                            <tr>
                                <th>Date</th>
                                <th>Mood</th>
                                <th>Pain</th>
                                <th>Sleep Quality</th>
                                <th>Hours Slept</th>
                                <th class="text-end">Actions(Edit/Delete)</th>
                            </tr>
                        </thead>
                        <tbody id="dataTable">
                            </tbody>
                    </table>
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