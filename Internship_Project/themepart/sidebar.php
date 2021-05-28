<nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Navigation</p>
          <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="home.php">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
       
        
        <li class="nav-item">
            <a class="nav-link" href="table.php">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Tables</span>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Pages</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="mdi mdi-account menu-icon"></i>
            <span class="menu-title">User Pages</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="login.php"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="register.php"> Register </a></li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>