  <!-- Footer -->
  <footer>
    <p>&copy; 2025 The Bright Future Computer Academy. || <?php   
          if (isset($_SESSION['is_admin_login'])){
            echo '<a href="admin/adminDashboard.php"> Admin Dashboard</a> <a href="logout.php">Logout</a>';
          }else {
            echo '<a href="#login" data-toggle="modal" data-target="#adminLoginModalCenter"> Admin Login</a>';
          }
    ?> ||
    </p>
  </footer>
  <!-- End Footer -->

   <!-- Start Login & Signup Modals -->
    <?php
    include('studentRegistration.php');
    ?>
   <!-- End Login & Signup Modals -->

     <!-- Start Admin Login Modal -->
  <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="adminLoginModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="adminLoginModalCenterTitle">Admin Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="clearAdminLoginWithStatus()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form role="form" id="adminLoginForm">
              <div class="form-group">
                <i class="fas fa-envelope"></i><label for="adminLogEmail" class="pl-2 font-weight-bold">Email</label><input type="email"
                    class="form-control" placeholder="Email" name="adminLogEmail" id="adminLogEmail">
                </div>
                <div class="form-group">
                  <i class="fas fa-key"></i><label for="adminLogPass" class="pl-2 font-weight-bold">Password</label><input type="password" class="form-control" placeholder="Password" name="adminLogPass" id="adminLogPass">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <small id="statusAdminLogMsg"></small>
            <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="clearAdminLoginWithStatus()">Cancel</button>
          </div>
        </div>
      </div>
    </div> <!-- End Admin Login Modal -->

</body>

<!-- Jquery File Links -->
<script type="text/javascript" src="js/Jquery/jquery.min.js"></script>

<!-- Boostrap JavaScript -->
<script type="text/javascript" src="js/Bootstrap/bootstrap.min.js"></script>

<!-- Popper File Links -->
<script type="text/javascript" src="js/Bootstrap/popper.min.js"></script>

<!-- Font Awesome JS -->
<script type="text/javascript" src="js/Font-Awesome/all.min.js"></script>

<!-- Custom JavaScript -->
<script type="text/javascript" src="Script.js"></script>

<!-- Course JavaScript File-->
<!-- <script type="text/javascript" src="/Courses/Course.js"></script> -->
 
<!-- Student Ajax Call -->
 <script type="text/javascript" src="js/ajaxrequest.js"></script>

 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 <!-- Admin Ajax Call -->
 <script type="text/javascript" src="js/adminajaxrequest.js"></script>
</html>