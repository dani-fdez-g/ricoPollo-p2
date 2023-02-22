
<!DOCTYPE html PUBLIC>
<html>
<head>
    <title>MI PERFIL - RICOPOLLO</title>
</head> 

<body>

<div class="container">
<div class="row justify-content-center align-items-center ">
    <div class="card-profile box-form" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="<?=base_url."assets/img/pollo login.svg"?>" class="img-fluid rounded-start" style="max-width: 150px;" alt="logo avatar por defecto">
            </div>
            <div class="col-md-8">
            <div class="card-body descripcion">
                <h5 class="card-title mb-3 titulo">MI PERFIL</h5>
                <h1 class="subtitulo">EMAIL</h1> <p><?=$_SESSION['user']['email'];?></p>
                <h1 class="subtitulo">CONTRASEÑA</h1> <p><?=$_SESSION['user']['password'];?></p>
            </div>
            </div>
        </div>
    </div>
</div>
</div>

    
</body>


</html>

