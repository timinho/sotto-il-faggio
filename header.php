<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Campeggio Sotto Il Faggio - San Giacomo d'Entracque, Italia</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="all,follow">

<!-- Bootstrap CSS-->
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

<!-- Google fonts-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/sotto.css?<?php echo time()?>">
<link rel="stylesheet" href="css/icons.css">

<!-- Favicon-->
<link rel="shortcut icon" href="img/favicon-32x32.png">
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script>
  function openFaq() {

    if( $('#PhotoModal').is(':visible') ) {

      $('#PhotoModal').modal('hide');
      setTimeout(function() {
        $('#FaqModal').modal('show');
      }, 500);

    } else {
      $('#FaqModal').modal('show');
    }

  }
  $(document).on('click', '.card-img', function(e) {
    $('#PhotoModal').find('.modal-body').html('<img src="'+$(this).attr('src')+'" />');
    $('#PhotoModal').find('.modal-title').text($(this).attr('alt'));
    $('#PhotoModal').modal('show');
  });

</script>
