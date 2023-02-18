<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/main.css" />
    <link rel="stylesheet" href="../style/sidebar.css" />
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/bootstrap.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <title>Dashboard</title>
</head>

<body>
    <main class="container-fluid">
        <ul class="topbar m-0 list-unstyled">
            <div class="topbarChild d-flex justify-content-between align-items-center">
                <li class="topBarLogo text-dark">
                    <div class="logo-details d-flex align-items-center">
                        <i class="bx bx-menu rounded-circle" id="btn"></i>
                        <img class="ms-2 ms-sm-3 my-auto" src="../assets/images/bcp-logo.png" width="35" height="35" alt="bcp-logo" />
                        <div class="logo_name text-dark ms-1 ms-sm-3">BESTLINK</div>
                        <div class="my-auto search-boxContainer d-none d-lg-block">
                            <input type="text" class="form-control search-box" type="search" placeholder="Search..." aria-label="Example text with button addon" aria-describedby="button-addon1" />
                        </div>
                    </div>
                </li>
                <div class="d-flex align-items-center justify-content-end">
                    <li>
                        <a href=""><i class="bx bxs-message-dots fs-4 me-3 mt-1 m-0"></i></a>
                        <a href=""><i class="bx bxs-bell fs-4 mt-1 m-0"></i></a>
                    </li>
                    <li>
                        <div class="nav-item dropdown my-auto ms-4">
                            <a id="dropdownmenu" class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <h5 class="m-0 d-none d-sm-block">User Name</h5>
                                <img class="ms-0 ms-sm-3" src="../assets/images/man.png" width="32" height="32" alt="profile-picture" />
                            </a>
                            <ul class="dropdown-menu border shadow dropdownContainer">
                                <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Logout</a>
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
                    <li>
                        <a href="#">
                            <i class="bx bx-grid-alt"></i>
                            <span class="links_name">Dashboard</span>
                        </a>
                        <span class="tooltip">Dashboard</span>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bx bx-package"></i>
                            <span class="links_name">Item Requests</span>
                        </a>
                        <span class="tooltip">Item Requests</span>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bx bx-error-circle"></i>
                            <span class="links_name">Item Reports</span>
                        </a>
                        <span class="tooltip">Item Requests</span>
                    </li>
                </ul>
            </div>
            <section class="home-section mx-3 bg-light rounded shadow">
                <div class="container-fluid mt-3">
                    <h2>Welcome to BCP Property Custodian!</h2>
                </div>
                <div class="container-fluid">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>
    <footer class="home-section text-center text-lg-start container-fluid" style="min-height: 1vh; background-color: inherit;">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg">
                    <h5 class="text-uppercase">Mission</h5>
                    <p>
                        To establish and improve accuracy and accountability of all tangible assets by physical inventories, propert issurance and monitoring.
                    </p>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg">
                    <h5 class="text-uppercase">Vision</h5>
                    <p>
                        To meet a variety of daily custodial needs of the campus in a timely manner and to provide an array of functions that are vital to the daily school operation.
                    </p>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <p class="text-dark">Bestlink College of the Philippines</p>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="../script/bootstrap.bundle.js"></script>
    <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");
    let arrow = document.querySelectorAll(".arrow");

    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });

    searchBtn.addEventListener("click", () => {
        // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
        if (sidebar.classList.contains("open")) {
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
        } else {
            closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
        }
    }

    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.currentTarget.parentNode;
            console.log(arrowParent);
            arrowParent.classList.toggle("showMenu");
        });
    }

    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });
    </script>
</body>

</html>