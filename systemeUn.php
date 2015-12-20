<?php $title = "Système \"Un\""; ?>
<?php require 'includes/headerSystems.php'; ?>
<script type="text/javascript">

  $('#press').on('click', function () {
    $('#offense1').transition({x: '200px', y: '-50px'}, 1000);
    $('#offense3').transition({x: '50px', y: '-200px'}, 1000);
    $('#balloon').transition({x: '200px', y: '-50px'}, 1000);
    $('#offense5').transition({x: '50px', y: '160px'}, 1000);
    $('#offense4').transition({x: '-45px', y: '160px'}, 1000);
    $('#offense2').
            transition({x: '150px', y: '-60px', delay: 500}, 1000).
            transition({x: '230px', y: '-20px'}, 1000);
    $('#offense5').
            transition({x: '70px', y: '170px', delay: 1000}, 1000).
            transition({x: '230px', y: '-20px'}, 1000);
    $('#offense2').
            transition({x: '350px', y: '-20px', delay: 1000}, 1000);
    $('#offense4').
            transition({x: '-65px', y: '170px', delay: 3000}, 1000).
            transition({x: '-160px', y: '0px'}, 1000);

    $('#option1').css({'display': 'block'}, 1000);
    $('#option2').css({'display': 'block'}, 1000);
  });

  $('#option1').on('click', function () {
    $('#balloon').transition({x: '-30px', y: '-320px'}, 1000, function () {
      alert('PASSE LOBBÉE');
    });
  });

  $('#option2').on('click', function () {
    $('#balloon').transition({x: '330px', y: '-330px'}, function () {
      alert('SHOOT ou PASSE à "5"');
    });
    $('#balloon').transition({x: '130px', y: '-330px'}, function () {
      alert('JEU POSTE BAS');
    });
  });

  $('#reset').on('click', function () {
    $('div').transition({x: '0px', y: '0px'}, 100);
    $('#option1').css({'display': 'none'});
    $('#option2').css({'display': 'none'});
    $('#option3').css({'display': 'none'});
  });

</script>
</body>
</html>