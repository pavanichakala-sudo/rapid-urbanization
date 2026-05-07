<?php
include 'db.php';
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Track page view
$stmt = $conn->prepare("INSERT INTO page_views (user_id, page_name) VALUES (?, 'dashboard')");
$stmt->bind_param("i", $_SESSION['user_id']);
$stmt->execute();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Rapid Urbanisation</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>! 👋</h2>
        
        <nav>
            <a href="index.php">Home</a>
            <a href="urban.php">Urbanisation</a>
            <a href="causes.php">Causes</a>
            <a href="awareness.php">Awareness</a>
            <a href="logout.php">Logout</a>
        </nav>
        
        <div class="dashboard-content">
            <h3>Your Activity</h3>
            <?php
            $stmt = $conn->prepare("SELECT page_name, viewed_at FROM page_views WHERE user_id = ? ORDER BY viewed_at DESC LIMIT 10");
            $stmt->bind_param("i", $_SESSION['user_id']);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if($result->num_rows > 0) {
                echo "<ul>";
                while($row = $result->fetch_assoc()) {
                    echo "<li>Viewed <strong>{$row['page_name']}</strong> at {$row['viewed_at']}</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>No activity yet. Explore our pages!</p>";
            }
            ?>
            
            <h3>Quick Facts</h3>
            <ul>
                <li>By 2050, 68% of world population will live in cities</li>
                <li>Tokyo is the largest city with 37+ million people</li>
                <li>Urban areas consume 80% of global energy</li>
            </ul>
        </div>
    </div>
</body>
</html>