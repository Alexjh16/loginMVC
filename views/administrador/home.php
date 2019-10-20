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
                        <form action="?class=Usuarios&method=setProfile" method="post" enctype="multipart/form-data">
                            <label id="choose_picture" for="picture" class="btn-file">profile</label>
                            <input type="submit"class="btn-file" value="Change" id="change_picture" style="display:none"/>
                            <input type="file" name="picture_profile" style="display: none" id="picture"/>
                        </form>
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