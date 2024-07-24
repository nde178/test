<?php

echo '<h1>Форма регистрации</h1>';
echo '<form action="../action/action_register.php" method="post">';
echo '<input type="text" name="username" placeholder="Username" required>';
echo '<input type="password" name="password" placeholder="Password" required>';
echo '<input type="password" name="password2" placeholder="Repeat Password" required>';
echo '<input type="email" name="email" placeholder="Email" required>';
echo '<input type="text" name="telephone" placeholder="Telephone" required>';
echo '<input type="submit" value="Register">';
echo '</form>';
?>

<a href="../index.php">
    <h3>Home</h3>
</a>