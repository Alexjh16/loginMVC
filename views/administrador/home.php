<?php if(!isset($_SESSION['user'])): ?>
    <?php  header("location:?class=Login&view=login"); ?>            
<?php  else:?>
    <?php include("views/layouts/header.php"); ?>
    <body id="HomeUser">
    <div id="HomeUser"> 
        <div class="profile-container">
            <div class="items-container">            
                <div class="profile-picture">
                    <img src="assets/app/img/linux.png" alt="">
                </div>
                <div class="profile-name">
                        <h2>Jhon Alexander </h2>
                        <h4>DevOps, fronted, programming, linux skills</h4>
                        <button class="btn-file">Algo</button>
                </div>
                <div class="contenedor-redes">
                    <div class="red-face">
                    
                    </div> 
                    <div class="red-twitter">
                    
                    </div> 
                </div>
                
            </div>
        </div>        
    </div>
    
    
        <?php print("Bienvenido ".$_SESSION['user']->nombres_usuario); ?>
        <a href="?class=Administrador&method=logout">Salir</a>       
    <?php include("views/layouts/footer.php"); ?>
    </body>
    <html>
<?php  endif; ?>