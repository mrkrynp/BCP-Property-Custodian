    <main class="container-lg container-xl container-xxl">
        <ul class="topbar m-0 list-unstyled">
            <div class="topbarChild d-flex justify-content-between align-items-center">
                <li class="topBarLogo text-dark">
                    <div class="logo-details d-flex align-items-center">
                        <i class="bx bx-menu rounded-circle" id="btn"></i>
                        <img class="ms-2 ms-sm-3 my-auto" src="../assets/images/bcp-logo.png" width="35" height="35" alt="bcp-logo" />
                        <div class="logo_name text-dark ms-1 ms-sm-3">Property Custodian | Head Department</div>
                        <div class="my-auto search-boxContainer d-none d-lg-block">
                            <input type="text" class="form-control search-box" type="search" placeholder="Search..." aria-label="Example text with button addon" aria-describedby="button-addon1" />
                        </div>
                    </div>
                </li>

                <div class="d-flex align-items-center justify-content-end">
                  <li>
                    <div class="nav-item dropdown my-auto ms-4">
                        <a id="dropdownmenu" class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                            <i class="bi bi-person-circle ms-0 ms-sm-3" style="width: 32; height: 32;"></i>
                        </a>
                        <ul class="dropdown-menu border shadow dropdownContainer">
                                <!-- <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li> -->
                                <li>
                                    <a class="dropdown-item" href="../logout.php">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </div>
            </div>
        </ul>
        <div class="px-0 d-xl-flex position-relative d-flex">
            <div class="sidebar close rounded shadow">
                <ul class="nav-list p-0 m-0">
                    <li class="d-block d-lg-none">
                        <i class="bx bx-search"></i>
                        <input type="text" placeholder="Search..." />
                        <span class="tooltip">Search</span>
                    </li>
                    <!-- DASHBOARD BUTTON -->
                    <li>
                        <a>
                            <i class="bx bx-grid-alt"></i>
                            <span class="links_name">Dashboard</span>
                        </a>
                        <span class="tooltip">Dashboard</span>
                    </li>
                    <span class="lineBreak"></span>
                    <li>
                        <a href="#">
                            <i class="bi bi-send"></i>
                            <span class="links_name">Request an Item</span>
                        </a>
                        <span class="tooltip">Request an Item</span>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bi bi-exclamation-diamond"></i>
                            <span class="links_name">Report an Item</span>
                        </a>
                        <span class="tooltip">Report an Item</span>
                    </li>
                    <span class="lineBreak"></span>
                    <li>
                        <a href="#">
                            <i class="bi bi-journal-text"></i>
                            <span class="links_name">My Requests</span>
                        </a>
                        <span class="tooltip">My Requests</span>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bi bi-journal-x"></i>
                            <span class="links_name">My Reports</span>
                        </a>
                        <span class="tooltip">My Reports</span>
                    </li>
               </ul>
           </div>
           <section class="home-section mx-3 bg-light rounded shadow">
            <div class="container-fluid mt-3">

