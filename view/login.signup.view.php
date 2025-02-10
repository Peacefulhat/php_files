<?php require "partials/header.php"?>
<?php require "partials/nav.php"?>

<div id="whole-form">
<h1>This is login page.</h1>

<form action="/process" method="POST" >
<input type="text" name="name" placeholder="Name" required>
<br>
<input type="email" name="email" placeholder="Email" required>
<br>
<input name="password" type="password" placeholder="Password" required>
<br>
<div id="container">
    <button type="submit"class="item">SignUp</button>
</div>

</form>
</div>
        
<?php require "partials/footer.php"?>
