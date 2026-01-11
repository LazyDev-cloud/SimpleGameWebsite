<?php
session_start();
$_SESSION['score'] = $_SESSION['score'] ?? 0;
if (isset($_POST['tap'])) $_SESSION['score']++;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NEBULA | Play</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="play-bg">

<div class="glass-card">
  <h2>Tap Core</h2>
  <div class="score">Score: <?php echo $_SESSION['score']; ?></div>
  <form method="POST">
    <button class="tap-btn" name="tap">⚡ TAP</button>
  </form>
  <a class="back" href="index.php">← Exit</a>
</div>

</body>
</html>
