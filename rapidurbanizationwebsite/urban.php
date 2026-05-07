<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Urbanisation - Rapid Urbanisation</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <h2>What is Urbanisation?</h2>
        <nav>
            <a href="index.php">Home</a>
            <a href="urban.php">Urbanisation</a>
            <a href="causes.php">Causes</a>
            <a href="awareness.php">Awareness</a>
            <?php if(isset($_SESSION['user_id'])): ?>
                <a href="dashboard.php">Dashboard</a>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            <?php endif; ?>
        </nav>
        
        <div class="content">
            <p>Urbanisation is the population shift from rural to urban areas, resulting in growth of cities.</p>
            
            <h3>Key Statistics:</h3>
            <ul>
                <li>1950: 30% urban</li>
                <li>2020: 56% urban</li>
                <li>2050: 68% urban (projected)</li>
            </ul>
            
            <h3>Effects of Rapid Urbanisation:</h3>
            <ul>
                <li>🏠 Housing shortages</li>
                <li>🚗 Traffic congestion</li>
                <li>🌫️ Air pollution</li>
                <li>🗑️ Waste management issues</li>
                <li>🏥 Strain on healthcare</li>
            </ul>
        </div>
    </div>
</body>
</html>