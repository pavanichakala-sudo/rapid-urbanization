<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Causes of Rapid Urbanisation</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <h2>Causes of Rapid Urbanisation</h2>
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
            <h3>Main Drivers:</h3>
            <ul>
                <li><strong>📈 Industrialization:</strong> More jobs in cities</li>
                <li><strong>💼 Employment opportunities:</strong> Better salaries and career growth</li>
                <li><strong>🎓 Education:</strong> Better schools and universities</li>
                <li><strong>⚕️ Healthcare:</strong> Advanced medical facilities</li>
                <li><strong>🌾 Agricultural changes:</strong> Less need for farm workers</li>
                <li><strong>🏗️ Infrastructure development:</strong> Better roads, electricity, internet</li>
            </ul>
            
            <h3>Push vs Pull Factors:</h3>
            <p><strong>Push (from rural):</strong> Poverty, lack of jobs, low wages, climate change</p>
            <p><strong>Pull (to urban):</strong> Better jobs, education, healthcare, entertainment</p>
        </div>
    </div>
</body>
</html>