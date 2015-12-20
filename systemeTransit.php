<?php $title = "Système \"Transit\""; ?>
<?php require 'includes/headerSystems.php'; ?>
<script type="text/javascript">

  $('#press').on('click', function () {
    $('#offense1').transition({x: '-50px', y: '0px'}, 1000);
    $('#offense5').transition({x: '-200px', y: '0px'}, 1000);
    $('#balloon').
            transition({x: '-50px', y: '0px'}, 1000).
            transition({x: '-270px', y: '-140px'}, 1000).
            transition({x: '-310px', y: '-300px'}, 1000);

    $('#option1').css({'display': 'block'}, 1000, function () {
      alert("passe et va à 2")
    });
  });

  $('#option1').on('click', function () {
    $('#balloon').
            transition({x: '-270px', y: '-140px'}, 1000, function () {
              alert('SHOOT au POSTE HAUT');
            });
    $('#offense1').transition({x: '-50px', y: '0px'}, 1000);
    $('#offense2').transition({x: '300px', y: '-250px'}, 1000);
    $('#option2').css({'display': 'block'}, 1000);
    $('#option3').css({'display': 'block'}, 1000);
  });

  $('#option2').on('click', function () {
    $('#balloon').transition({x: '280px', y: '-150px'}, function () {
      alert('passe à l\'aile (shoot ouvert)');
    });
  });

  $('#option3').on('click', function () {
    $('#offense5').transition({x: '100px', y: '0px'}, 1000);
    $('#balloon').transition({x: '-10px', y: '-300px', delay: 1000}, function () {
      alert('passe à l\'intérieur (devant son défenseur)');
    });
  });

  $('#reset').on('click', function () {
    $('div').transition({x: '0px', y: '0px'}, 100);
    $('#option1').css({'display': 'none'});
    $('#option2').css({'display': 'none'});
  });

</script>
</body>
</html>