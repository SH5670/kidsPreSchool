    <aside class="main-sidebar sidebar-white bg-white elevation-4">
      <a href="adminDashboard.php" class="brand-link">

        <span class="brand-text mx-3 fw-bold" style="color:#567A6F;">Kids PreSchool | Admin </span>
      </a>
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
          <div class="image">
            <img src="../resources/admin/empty.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class=" d-block"><?php echo $_SESSION["a"]['name']; ?></a>
          </div>
        </div>



        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
              <a href="adminDashboard.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <?php if ($_SESSION["a"]['adminType'] == 1) : ?>

              <!--Subadmins--->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Sub-Admins
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="addSubadmins.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="manageSubadmins.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> Manage</p>
                    </a>
                  </li>

                </ul>
              </li>
            <?php endif; ?>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Teachers
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="addTeachers.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="manageTeachers.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p> Manage</p>
                  </a>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Students
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="addStudents.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="manageStudents.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p> Manage</p>
                  </a>
                </li>



              </ul>
            </li>          

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Enrollment
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="newEnrollments.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="acceptedEnrolment.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Accepted</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="rejectedEnrolments.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Rejected</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Visitors
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="newVisitors.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="visitedVisitors.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Visited</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="nonVisitors.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Not Visited</p>
                  </a>
                </li>

              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-cog"></i>
                <p>
                  Account Settings
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="profile.php" class="nav-link">
                    <i class="far fa-user nav-icon"></i>
                    <p>My Profile</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="changePassword.php" class="nav-link">
                    <i class="fas fa-cog nav-icon"></i>
                    <p>Change Password</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="logout.php" class="nav-link">
                    <i class="fas fa-sign-out-alt nav-icon"></i>
                    <p>Logout</p>
                  </a>
                </li>

              </ul>
            </li>

          </ul>
        </nav>
      </div>
    </aside>