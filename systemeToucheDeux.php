<?php $title = "Système Touche \"Deux\""; ?>
<?php require 'includes/headerSystems.php'; ?>
<script type="text/javascript">

  $('#offense1').transition({x: '-100px', y: '-460px'});
  $('#balloon').transition({x: '-100px', y: '-440px'});

  $('#press').on('click', function () {
    $('#offense5').transition({x: '230px', y: '0px'}, 1000);
    $('#offense4').transition({x: '-30px', y: '20px', delay: 1000}, 1000);
    $('#offense5').transition({rotate: '180deg', delay: 800});
    $('#offense4').transition({x: '-220px', y: '0px'}, 1000);
    $('#option1').css({'display': 'block'}, 1000);
    $('#option2').css({'display': 'block'}, 1000);
  });

  $('#option1').on('click', function () {
    $('#balloon').transition({x: '90px', y: '-320px'}, function () {
      alert('LAY-UP EASY');
    });
  });

  $('#option2').on('click', function () {
    $('#balloon').transition({x: '-90px', y: '-320px'}, function () {
      alert('SHOOT EASY');
    });
  })

  $('#reset').on('click', function () {
    $('div').transition({x: '0px', y: '0px'}, 100);
    $('#option1').css({'display': 'none'});
    $('#option2').css({'display': 'none'});
    $('#offense1').transition({x: '-100px', y: '-460px'});
    $('#balloon').transition({x: '-100px', y: '-440px'});
  });

</script>
</body>
</html>