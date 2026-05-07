<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Awareness - Rapid Urbanisation</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <h2>Spread Awareness</h2>
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
            <h3>How You Can Help:</h3>
            <ul>
                <li>🚲 Use public transport or cycle</li>
                <li>♻️ Reduce, reuse, recycle waste</li>
                <li>💧 Save water and electricity</li>
                <li>🌳 Plant trees in urban spaces</li>
                <li>📢 Share information on social media</li>
                <li>🏘️ Support affordable housing initiatives</li>
            </ul>
            
            <h3>Sustainable Solutions:</h3>
            <ul>
                <li>Smart city planning</li>
                <li>Green buildings and renewable energy</li>
                <li>Vertical gardens and green roofs</li>
                <li>Improved public transport systems</li>
                <li>Waste-to-energy plants</li>
            </ul>
            
            <?php if(isset($_SESSION['user_id'])): ?>
                <div class="tip-box">
                    <h4>🌍 Daily Eco-Tip</h4>
                    <p>Turn off lights and electronics when not in use. One small change saves 100kg of CO2 yearly!</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>