<?php $title = "Système \"Deux\""; ?>
<?php require 'includes/headerSystems.php'; ?>
<button id="option3">OPTION 3</button>
<script type="text/javascript">

  $('#press').on('click', function () {
    $('#offense5').transition({x: '50px', y: '160px'}, 1000);
    $('#offense4').transition({x: '-45px', y: '160px'}, 1000);
    $('#offense2').
            transition({x: '290px', y: '-160px', delay: 1000}, 1000).
            transition({x: '575px', y: '0px'}, 1000);
    $('#offense3').
            transition({x: '-285px', y: '-180px', delay: 1000}, 1000).
            transition({x: '-575px', y: '0px'}, 1000);
    $('#option1').css({'display': 'block'}, 1000);
    $('#option2').css({'display': 'block'}, 1000);
  });

  $('#option1').on('click', function () {
    $('#balloon').transition({x: '280px', y: '-150px'}, function () {
      alert('SHOOT ou 1vs1');
    });
  });

  $('#option2').on('click', function () {
    $('#balloon').transition({x: '80px', y: '-130px'}, function () {
      alert('SHOOT ou 1vs1');
    });
    $('#option3').css({'display': 'block'}, 1000);
  });

  $('#option3').on('click', function () {
    $('#offense5').transition({x: '120px', y: '100px'}, 500);
    $('#balloon').transition({x: '0px', y: '-220px', delay: 500}, function () {
      alert('SHOOT ou 1vs1');
    });
    $('#option3').css({'display': 'block'}, 1000);
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