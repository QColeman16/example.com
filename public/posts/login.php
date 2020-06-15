<?php

// 1. Require your session file, this contains session_start()
require '../core/sessions.php';
require '../core/db_connect.php';

// 2. Listen for a POST request. On Post set a session. 
// In the next iteration we replace this with authentication logic.
$_POST['id']=12345;//Force a valid POST
if(!empty($_POST)){
    $_SESSION['user'] = [];
    $_SESSION['user']['id']=$_POST['id'];
    header('LOCATION: /example.com/public' . $_GET['goto']);
}

// 3. Provide just enough of a form to initiate a POST
$content=<<<EOT

form method="post">

    <div class="form-group">
        <label for="email">Email</label>
        <input 
            class="form-control" 
            id="email" 
            name="email" 
            type="email"
        >
    </div>

    <div class="form-group">
        <label for="first_name">First Name</label>
        <input 
            class="form-control" 
            id="first_name" 
            name="first_name" 
        >
    </div>


    <div class="form-group">
        <label for="last_name">Last Name</label>
        <input 
            class="form-control" 
            id="last_name" 
            name="last_name" 
        >
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input 
            class="form-control" 
            id="password" 
            name="password" 
            type="password"
        >
    </div>

    <div class="form-group">
        <label for="confirm_password">Password</label>
        <input 
            class="form-control" 
            id="password" 
            name="confirm_password" 
            type="confirm_password"
        >
    </div>

    <input type="submit" class="btn btn-primary">

</form>
EOT;
require '../core/layout.php';