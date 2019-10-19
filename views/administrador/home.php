<?php if(!isset($_SESSION['user'])): ?>
    <?php  header("location:?class=Login&view=login"); ?>            
<?php  else:?>
    <?php include("views/layouts/header.php"); ?>
    <body id="HomeUser">
    <div id="HomeUser"> 
        <div class="profile-container">
            <div class="items-container">            
                <div class="profile-picture">
                    <img src="assets/app/img/default.png" alt="">
                </div>
                <div class="profile-name">
                        <h2><?php print($_SESSION['nombres']); ?></h2>
                        <h4><?php print($_SESSION['descripcion']); ?></h4>
                        <button class="btn-file">picture</button>
                </div>
                <div class="contenedor-redes">
                    <div class="red-face">
                    
                    </div> 
                    <div class="red-twitter">
                    
                    </div> 
                </div>                
                <a href="?class=Administrador&method=logout">Salir</a>
            </div>            
        </div>        
    </div>        
    <?php include("views/layouts/footer.php"); ?>
    </body>
    <html>
<?php  endif; ?>