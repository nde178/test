<?php
echo '<h1>Форма входа</h1>';
echo '<form action="../action/action_login.php" method="post">';
echo '<input type="text" name="username_or_telephone" placeholder="Username or Telephone" required>';
echo '<input type="password" name="password" placeholder="Password" required>';
echo '<input type="submit" value="Login">';
echo '</form>';
echo '<a href="../index.php">Home</a>';
?>