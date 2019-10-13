<?php include("views/layouts/header.php"); ?>
<body id="content-login">

<div class="container-login">
    <div class="blurred-div">
    </div>
    <div class="form-content">
        <div class="form-login">
            <h3>Welcome to login</h3>

            <form action="?class=Login&method=auth" method="post">
                <label for="email">Email</label>
                    <input type="email" name="email" required="true">
                <label for="password">Password</label>
                    <input type="password" name="password" required="true">
                    <div class="buttons-options">
                        <button type="submit" id="user_login">Login</button>
                        <button type="submit">Register</button>
                    </div>
                
            </form>
        </div>        
    </div>
</div>

<?php include("views/layouts/footer.php"); ?>
</body>
</html>