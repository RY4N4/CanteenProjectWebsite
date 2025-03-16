<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CANTEEN - Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .order-types {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    margin-top: 20px;
    padding: 20px;
}

.order-types div {
    flex: 1;
    padding: 80px;
    text-align: center;
    font-size: 20px;
    /* font-weight: bold; */
    color: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease-in-out;
}

.orders-placed {
    background: #007bff; /* Blue */
}

.orders-completed {
    background: #28a745; /* Green */
}

.orders-cancelled {
    background: #dc3545; /* Red */
}

.order-types div:hover {
    transform: translateY(-5px);
}

/* Responsive Design */
@media (max-width: 768px) {
    .order-types {
        flex-direction: column;
        gap: 15px;
    }
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
            <div class="page-title">Manage Orders</div>
            <div class="header-icons">
                <div class="header-icon">
                    <i class="fas fa-bell"></i>
                    <span class="notification-badge">3</span>
                </div>
            </div>
        </div>

        <!-- Orders Content Here -->
        <div class="order-types">
        <div class="orders-placed">Orders Placed</div>
        <div class="orders-completed">Orders Completed</div>
        <div class="orders-cancelled">Orders Cancelled</div>
        </div>

    </div>
    <script src="script.js"></script>
</body>
</html>
