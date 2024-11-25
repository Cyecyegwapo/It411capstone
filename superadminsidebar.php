<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
.sidebar {
    width: 250px;
    height: 100vh;
    background-color: #f8f9fa; /* Light gray background */
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 20px;
    position: fixed;
    right: auto;
    left: 0;
    z-index: 2; /* Ensure sidebar is above other elements */
    font-family: 'Montserrat', sans-serif;
}

.sidebar-header {
    text-align: center;
    margin-bottom: 30px;
}

.sidebar-logo {
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

.sidebar-header h3 {
    margin-top: 10px;
    font-size: 18px;
    color: #333;
}

.sidebar-menu {
    list-style: none;
    padding: 0;
    width: 100%;
}

.menu-item {
    width: 100%;
    text-align: left;
}

.menu-item a {
    display: flex;
    align-items: center;
    padding: 15px;
    color: #333;
    text-decoration: none;
    font-size: 16px;
}

.menu-item a i {
    margin-right: 10px;
    font-size: 20px;
}

.menu-item a:hover, .menu-item.active a {
    background-color: #d3e3e8;
    color: #004085;
}

.sidebar-footer {
    margin-top: auto;
    padding-bottom: 20px;
}

.sidebar-footer a {
    display: flex;
    align-items: center;
    color: #333;
    text-decoration: none;
}

.sidebar-footer a i {
    margin-right: 10px;
    font-size: 18px;
}

    </style>
    <title>Admin Panel</title>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <img src="logo.png" alt="Logo" class="sidebar-logo">
            <h3>SUPER ADMIN</h3>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-item">
                <a href="admin.php">
                    <i class="fas fa-th-large"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="event-planning.php">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Event Planning</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="report.php">
                    <i class="fas fa-file-alt"></i>
                    <span>Report</span>
                </a>
            </li>
        </ul>

        <div class="sidebar-footer">
            <a href="logout.php">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </div>
    </div>
</body>
</html>
