<?php
session_start();

// Redirect to login if not logged in
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

// Get the logged-in admin name
$admin_name = $_SESSION['admin_username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CANTEEN - Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script defer>
        document.addEventListener("DOMContentLoaded", function () {
            const profile = document.querySelector(".user-profile");
            const dropdown = document.querySelector(".profile-dropdown");

            profile.addEventListener("click", function (event) {
                event.stopPropagation();
                dropdown.classList.toggle("active");
            });

            document.addEventListener("click", function () {
                dropdown.classList.remove("active");
            });
        });
    </script>
    <style>
        .user-profile {
            position: relative;
            cursor: pointer;
        }
        .profile-dropdown {
            display: none;
            position: absolute;
            right: 0;
            top: 100%;
            background: white;
            border: 1px solid #ddd;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            width: 150px;
        }
        .profile-dropdown.active {
            display: block;
        }
        .profile-dropdown a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: black;
            font-size: 14px;
        }
        .profile-dropdown a:hover {
            background: #f5f5f5;
        }
    </style>
</head>
<body>
    <!-- Mobile Toggle Button -->
    <div class="mobile-toggle" id="mobileToggle">
        <i class="fas fa-bars"></i>
    </div>

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <!-- Header -->
        <div class="header">
            <div class="page-title">Dashboard</div>
            <div class="header-icons">
                <div class="header-icon">
                    <i class="fas fa-bell"></i>
                    <span class="notification-badge">3</span>
                </div>
                <div class="user-profile">
                    <div class="user-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="user-name"><?php echo htmlspecialchars($admin_name); ?></div>
                    <div class="profile-dropdown">
                        <a href="profile.php">Profile</a>
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dashboard Content Here -->
        <h1>Welcome to the Admin Dashboard</h1>
    </div>

    <script src="script.js"></script>
</body>
</html>
