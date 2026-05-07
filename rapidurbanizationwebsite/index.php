<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Rapid Urbanisation - Home</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <h1>🌆 Rapid Urbanisation</h1>
        <p>Understanding the rapid growth of cities and its impact on society.</p>
        
        <nav>
            <a href="index.php">Home</a>
            <a href="urban.php">Urbanisation</a>
            <a href="causes.php">Causes</a>
            <a href="awareness.php">Awareness</a>
            <?php if(isset($_SESSION['user_id'])): ?>
                <a href="dashboard.php">Dashboard</a>
                <a href="logout.php">Logout (<?php echo $_SESSION['username']; ?>)</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            <?php endif; ?>
        </nav>
        
        <div class="content">
            <h2>Welcome to Rapid Urbanisation Awareness</h2>
            <p>More than half of the world's population now lives in cities, and this is increasing rapidly. 
            Our platform provides information about causes, effects, and solutions to challenges of rapid urbanisation.</p>
            
            <h3>Key Topics:</h3>
            <ul>
                <li>Housing and slums</li>
                <li>Traffic congestion</li>
                <li>Pollution and health issues</li>
                <li>Sustainable urban planning</li>
            </ul>
        </div>
    </div>
</body>
</html>