<!DOCTYPE html>
<html>
<head>
    <title> Nosotros </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/icono2.png" type="image/ico" />
    <link rel="apple-touch-icon" href="../../img/icono2.png">
    <link rel="stylesheet" href="../../css/custom.css">
    <script src="../../js/bootstrap.bundle.min.js"> </script>
    <link rel="stylesheet" href="../../css/style.css">
    <link href ="../../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-secondary">
    <?php include '../../modules/menu-footer.php'; ?>
    <?= menu("../.."); ?>

    <h1 id="Titulo1" class="mt-5 text-center"> Contacto </h1>
    
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        
        <form method="POST" action="#" class="mt-4">
          <div class="form-group">
            <label for="name" class="mb-2 mt-4 text-info">Nombre: </label>
            <input type="text" name="name" id="name" class="form-control bg-primary bg-opacity-50 text-white border border-primary" placeholder="John Doe" required>
          </div>
          <div class="form-group">
            <label for="email" class="mb-2 mt-4 text-info"> Email: </label>
            <input type="email" name="email" id="email" class="form-control bg-primary bg-opacity-50 text-white border border-primary" placeholder="johndoe@gmail.com" required>
          </div>
          <div class="form-group">
            <label for="asunto" class="mb-2 mt-4 text-info">Asunto: </label>
            <input type="text" name="asunto" id="asunto" class="form-control bg-primary bg-opacity-50 text-white border border-primary" placeholder="Advertising">
          </div>
          <div class="form-group">
            <label for="message" class="mb-2 mt-4 text-info"> Descripción: </label>
            <textarea name="message" id="message" class="form-control bg-primary bg-opacity-50 text-white border border-primary" placeholder="Lorem ipsum dolor sit amet..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary rounded mt-5 mb-4">Send Now</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?= footer(); ?>

</body>
</html>