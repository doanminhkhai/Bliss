<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="../Css/donhang.css">
    <title>Responsive Dashboard Design #1 | AsmrProg</title>
</head>
<script>
    // Lấy URL hiện tại
    const currentPage = window.location.pathname.split('/').pop();

    // Lấy tất cả các mục trong sidebar
    const sidebarItems = document.querySelectorAll('aside .sidebar a');

    // Lặp qua tất cả các mục và thêm class 'active' vào mục có href khớp với URL
    sidebarItems.forEach(item => {
        if (item.getAttribute('href').includes(currentPage)) {
            item.classList.add('active');
        } else {
            item.classList.remove('active');
        }
    });
</script>



<body>

    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="images/logo.png">
                    <h2>B<span class="danger">LISS</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
            <a href="../admin/dashboard.php">
                    <span class="material-icons-sharp">
                        insights
                    </span>
                    <h3>Tổng Quan</h3>
                </a>
                <a href="../admin/donhang.php" class="active"> 
                    <span class="material-icons-sharp"> 
                        dashboard
                    </span>
                    <h3>Đơn Hàng</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp" class="active">
                        person_outline
                    </span>
                    <h3>Users</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp" class="active">
                        receipt_long
                    </span>
                    <h3>History</h3>
                </a>
                
                <a href="#">
                    <span class="material-icons-sharp" class="active">
                        mail_outline
                    </span>
                    <h3>Tickets</h3>
                    <span class="message-count">27</span>
                </a>
                <a href="#">
                    <span class="material-icons-sharp" class="active">
                        inventory
                    </span>
                    <h3>Sale List</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp" class="active">
                        report_gmailerrorred
                    </span>
                    <h3>Reports</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp" class="active">
                        settings
                    </span>
                    <h3>Settings</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp" class="active">
                        add
                    </span>
                    <h3>New Login</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        logout
                    </span>
<h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <h1>Analytics</h1>
            <!-- Analyses -->
 
        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Reza</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="images/profile-1.jpg">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->

        

    <script src="../Js/order.js"></script>
    <script src="../Js/dashboard.js"></script>
</body>

</html>