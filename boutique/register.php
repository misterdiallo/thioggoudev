<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ThioGGou | Créer une boutique </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page" style="background-color:#a10202;" >
<div class="login-box">
  <div class="login-logo">
    <a href="index.php" style="color:#fff;"><b>ThioG</b>Gou</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Créer une nouvelle boutique sur ThioGGou</p>

    <form action="login.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" required placeholder="Nom de la Boutique">
        <span class="fa fa-codepen form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control"required placeholder="Identifiant(email du gerant)">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control"required placeholder="Mot de Passe">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" required placeholder="Confirmer le mot de passe">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group">
                <label>Type de boutique</label>
                <select class="form-control" required>
                  <option disabled selected> -- Selectionner --</option>
                  <option>Alimentation Générale </option>
                  <option>Service</option>
                  <option>Materiel</option>
                  <option>Autres...</option>
                  <option>Multi-Categorie</option>
                </select>
      </div>
      <div class="form-group">
                <label>Heure de Vente</label>
                <select class="form-control" required>
                  <option disabled selected> -- Selectionner --</option>
                  <option>08h - 17h </option>
                  <option>10h - 18h</option>
                  <option>Pendant la journée</option>
                  <option>Pendant la nuit</option>
                  <option>24h/24</option>
                  <option>Selon Mon temps</option>
                </select>
      </div>
      <div class="form-group" >
                <label>Jours de Vente </label>
                <select class="form-control" required>
                  <option disabled selected> -- Selectionner --</option>
                  <option>Jour Ouvrable </option>
                  <option>Week-End</option>
                  <option>Toute la semaine</option>
                  <option>Selon Ma disponibilité</option>
                </select>
      </div>
      <div class="form-group">
                <label>Adresse </label>
                <textarea required placeholder="A quelle adresse vos clients vont récupérer les produits" rows="3" cols="50"></textarea>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox">J'accepte les <a href="#" taget="_blank">termes</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-danger btn-block btn-flat">Créer </button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- Où -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> S'inscrire avec 
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> S'inscrire avec
        Google+</a>
    </div>

    <a href="login.php" class="text-center">J'ai déjà une boutique</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
