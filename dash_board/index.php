<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- font awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
</head>

<body>





    <div class="app-container">
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="app-icon">
                    <a href="index.php">
                        <img src="images/logo.png" alt="" style="width: 62%;">
                    </a>
                </div>
            </div>
            <ul class="sidebar-list">
                <li class="sidebar-list-item active">
                    <a href="index.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                            <polyline points="9 22 9 12 15 12 15 22" />
                        </svg>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-list-item ">
                    <a href="userdb/users.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                            <line x1="3" y1="6" x2="21" y2="6" />
                            <path d="M16 10a4 4 0 0 1-8 0" />
                        </svg>
                        <span>User's_.DB</span>
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="formdb/form.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart">
                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
                            <path d="M22 12A10 10 0 0 0 12 2v10z" />
                        </svg>
                        <span>Forms_DB</span>
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox">
                            <polyline points="22 12 16 12 14 15 10 15 8 12 2 12" />
                            <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z" />
                        </svg>
                        <span>CreateUser</span>
                    </a>
                </li>
            </ul>
            <div class="account-info">
                <div class="account-info-picture">
                <i class="fa-solid fa-circle-user fa-2x" style="color: var(--app-content-main-color);"></i>>
                </div>
                <div class="account-info-name">Monica G.</div>
                <button class="account-info-more">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                        <circle cx="12" cy="12" r="1" />
                        <circle cx="19" cy="12" r="1" />
                        <circle cx="5" cy="12" r="1" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="app-content">
            <div class="app-content-header">
                <h1 class="app-content-headerText"> <a href="index.php" style="text-decoration:none; color: var(--app-content-main-color);">Lad Brothers</a> </h1>
                <button class="mode-switch" title="Switch Theme" style="outline: none">
                    <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
                        <defs></defs>
                        <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                    </svg>
                </button>
                <button class="app-content-headerButton" style="outline: none">Add New</button>
            </div>
            <div class="app-content-actions">
                <div class="app-content-actions-wrapper">
                    <div class="filter-button-wrapper">
                        <button class="action-button filter jsFilter" style="border: 1px solid var(--app-content-main-color);"><span><i class="fa-solid fa-power-off" style="padding-left: 4px; "></i></span></button>

                    </div>
                    <button class="action-button list active" title="List View" style="padding: 0px 9px; border: 1px solid var(--app-content-main-color)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list" style="color: var(--app-content-main-color);">
                            <line x1="8" y1="6" x2="21" y2="6" />
                            <line x1="8" y1="12" x2="21" y2="12" />
                            <line x1="8" y1="18" x2="21" y2="18" />
                            <line x1="3" y1="6" x2="3.01" y2="6" />
                            <line x1="3" y1="12" x2="3.01" y2="12" />
                            <line x1="3" y1="18" x2="3.01" y2="18" />
                        </svg>
                    </button>
                    <button class="action-button grid" title="Grid View" style="border: 1px solid var(--app-content-main-color); padding: 0px 9px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid" style="color: var(--app-content-main-color);">
                            <rect x="3" y="3" width="7" height="7" />
                            <rect x="14" y="3" width="7" height="7" />
                            <rect x="14" y="14" width="7" height="7" />
                            <rect x="3" y="14" width="7" height="7" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="products-area-wrapper tableView">
                <div class="home-page">

                    <h3>Welcome</h3>
                </div>

                <div class="products-row">
                    <a href="index.php" style="text-decoration:none">
                        <div align="center">
                            <i class="fa-solid fa-house fa-5x" style="padding-top: 20px;"></i>

                            <p style="padding-top: 20px; color: var(--app-content-main-color);">Dashboard</p>
                        </div>
                    </a>
                </div>

                <div class="products-row">
                    <a href="userdb/users.php" style="text-decoration:none">
                        <div align="center">
                            <i class="fa-solid fa-sheet-plastic fa-5x" style="padding-top: 20px;"></i>

                            <p style="padding-top: 20px; color: var(--app-content-main-color);">User's_.DB</p>
                        </div>
                    </a>
                </div>

                <div class="products-row">
                    <a href="formdb/form.php" style="text-decoration:none">
                        <div align="center">
                            <i class="fa-solid fa-sheet-plastic fa-5x" style="padding-top: 20px;"></i>

                            <p style="padding-top: 20px; color: var(--app-content-main-color);">Forms_DB</p>
                        </div>
                    </a>
                </div>

                <div class="products-row">
                    <a href="" style="text-decoration:none">
                        <div align="center">
                            <i class="fa-solid fa-user fa-5x" style="padding-top: 20px;"></i>

                            <p style="padding-top: 20px; color: var(--app-content-main-color);">CreateUser</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="index.js"></script>
</body>

</html>