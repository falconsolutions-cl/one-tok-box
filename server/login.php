<?php include("header.php") ?>

  <link href="assets/css/login.css" rel="stylesheet">
  <script src="assets/js/login.js"></script>

 <body class="f-azul">  

    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="assets/img/default_avatar_male.jpg" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control" placeholder="Correo Electrónico" required autofocus>
                <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Recordarme
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin " type="submit">Entrar</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Olvidaste la contraseña?
            </a>
        </div><!-- /card-container -->

        <div class="center"><a href="http://www.one-tok-box.cl" class="text-blanco">www.one-tok-box.cl</a></div>
    </div><!-- /container -->

 </body>
<?php include("footer.php") ?>
