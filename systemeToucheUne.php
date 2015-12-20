<?php $title = "Système Touche \"Une\""; ?>
<?php require 'includes/headerSystems.php'; ?>
<button id="option3">OPTION 3</button>
<script type="text/javascript">

  $('#offense1').transition({x: '-100px', y: '-460px'});
  $('#balloon').transition({x: '-100px', y: '-440px'});
  $('#offense3').transition({x: '-420px', y: '-150px'});
  $('#offense4').transition({x: '-130px', y: '180px'});

  $('#press').on('click', function () {
    $('#offense5').transition({x: '-200px', y: '0px'}, 1000);
    $('#offense3').transition({x: '-300px', y: '-10px'}, 1000);
    $('#offense4').
            transition({x: '-120px', y: '160px', delay: 1000}).
            transition({x: '-120px', y: '0px'});
    $('#offense3').transition({rotate: '180deg', delay: 500});
    $('#option1').css({'display': 'block'}, 1000);
    $('#option2').css({'display': 'block'}, 1000);
    $('#option3').css({'display': 'block'}, 1000);
  });

  $('#option1').on('click', function () {
    $('#balloon').transition({x: '10px', y: '-320px'}, function () {
      alert('LAY-UP EASY');
    });
  });

  $('#option2').on('click', function () {
    $('#balloon').transition({x: '-310px', y: '-320px'}, function () {
      alert('SHOOT 3PTS');
    });
  });

  $('#option3').on('click', function () {
    $('#balloon').transition({x: '-10px', y: '-160px'}, function () {
      alert('SHOOT AU POSTE');
    });
  });

  $('#reset').on('click', function () {
    $('div').transition({x: '0px', y: '0px'}, 100);
    $('#option1').css({'display': 'none'});
    $('#option2').css({'display': 'none'});
    $('#option3').css({'display': 'none'});
    $('#offense1').transition({x: '-100px', y: '-460px'});
    $('#balloon').transition({x: '-100px', y: '-440px'});
    $('#offense3').transition({x: '-420px', y: '-150px'});
    $('#offense4').transition({x: '-130px', y: '180px'});
  });

</script>
</body>
</html>