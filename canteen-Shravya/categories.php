<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CANTEEN - Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .categories-container {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 20px;
}

.category-box {
    background:rgb(232, 10, 10); /* Light Red */
    color: white;
    padding: 15px 20px;
    border-radius: 8px;
    text-align: center;
    font-size: 18px;
    width: 120px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
    transition: 0.2s ease-in-out;
}

.category-box:hover {
    transform: scale(1.05);
}

/* Responsive Design */
@media (max-width: 600px) {
    .categories-container {
        flex-direction: column;
        align-items: center;
    }
}

/* General Styling */
body {
    font-family: Arial, sans-serif;
    text-align: center;
    background: #f8f9fa;
}

/* Category Boxes */
.categories-container {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 20px;
    flex-wrap: wrap;
}

.category-box {
    background: #ff6b6b;
    color: white;
    padding: 15px 20px;
    border-radius: 8px;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
    cursor: pointer;
    transition: 0.2s;
}

.category-box a {
    color: white;
    text-decoration: none;
}

.category-box:hover {
    transform: scale(1.05);
}

/* Food List - Hidden by Default */
.food-list {
    display: none;
    background: white;
    color: black;
    padding: 30px;
    margin-top: 20px;
    border-radius: 8px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
    width: 250px;
    margin: auto;
}

/* Show List When Targeted */
.menu-list > div:target {
    display: block;
}

/* Back Link */
.food-list a {
    display: block;
    margin-top: 10px;
    text-decoration: none;
    color: #ff6b6b;
    font-weight: bold;
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
            <div class="page-title">Manage Categories</div>
            <div class="header-icons">
                <div class="header-icon">
                    <i class="fas fa-bell"></i>
                    <span class="notification-badge">3</span>
                </div>
            </div>
        </div>

        <!-- Categories Content Here -->

        <div class="categories-container">
        <div class="category-box"><a href="#Frankie-list">Frankie</a></div>
        <div class="category-box"><a href="#Sandwich-list">Sandwich</a></div>
        <div class="category-box"><a href="#Chinese-list">Chinese</a></div>
        <div class="category-box"><a href="#Juices-list">Juices</a></div>
        <div class="category-box"><a href="#Chaat-list">Chaat</a></div>
    </div>

    <!-- Food Items List -->
    <div class="menu-list">
        <div id="Frankie-list" class="food-list">
            <h3>Frankie</h3>
            <div>Paneer Frankie</div>
            <div>Veg Frankie</div>
            <a href="#">Back</a>
        </div>

        <div id="Sandwich-list" class="food-list">
            <h3>Sandwich</h3>
            <div>Sada Sandwich</div>
            <div>Cheese Grilled Sandwich</div>
            <a href="#">Back</a>
        </div>

        <div id="Chinese-list" class="food-list">
            <h3>Chinese</h3>
            <div>Hakka Noodles</div>
            <div>Manchurian</div>
            <a href="#">Back</a>
        </div>

        <div id="Juices-list" class="food-list">
            <h3>Juices</h3>
            <div>Orange Juice</div>
            <div>Mango Shake</div>
            <a href="#">Back</a>
        </div>

        <div id="Chaat-list" class="food-list">
            <h3>Chaat</h3>
            <div>Pani Puri</div>
            <div>Bhel Puri</div>
            <a href="#">Back</a>
        </div>
    </div>


    

    </div>
    <script src="script.js"></script>
</body>
</html>
