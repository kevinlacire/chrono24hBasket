<?php $title="Système \"Main Droite\""; ?>
<?php require 'includes/headerSystems.php'; ?>
		<script type="text/javascript">

			$('#press').on('click', function(){
				$('#offense1').
					transition({ x: '50px', y: '0px'}, 1000).
					transition({ x: '-50px', y: '0px'}, 1000);
				$('#offense3').
					transition({ x: '-140px', y: '-190px'}, 1000).
					transition({ x: '-420px', y: '-190px'}, 1000).
					transition({ x: '-570px', y: '0px'}, 1000);
				$('#offense5').transition({ x: '150px', y: '300px'}, 1000);
				$('#offense2').transition({ x: '170px', y: '-170px'}, 1000);
				$('#balloon').
					transition({ x: '50px', y: '0px'}, 1000).
					transition({ x: '-50px', y: '0px'}, 1000).
					transition({ x: '-270px', y: '-140px'}, 1000);
				$('#offense1').transition({ x: '250px', y: '-100px'}, 1000);
				$('#offense2').transition({ x: '300px', y: '110px', delay:2000}, 1000);
				$('#offense5').transition({ x: '130px', y: '300px', delay:1000}, 1000);
				$('#offense2').transition({ x: '300px', y: '150px', delay:1500}, 1000, function(){
						alert('SHOOT 3PTS OU 1vs1');
					});
				$('#option1').css({'display' : 'block'}, 1000);
			});

			$('#option1').on('click', function(){
				$('#offense5').transition({ x: '0px', y: '150px'}, 1000, function(){
					alert('PASSE A 5 DANS LA COURSE');
					});
				$('#offense5').transition({ x: '0px', y: '0px'}, 1000);
				$('#offense4').transition({ x: '-110px', y: '160px', delay:1000}, 1000);
				$('#option2').css({'display' : 'block'}, 1000);
			});
			$('#option2').on('click', function(){
				$('#balloon').transition({ x: '0px', y: '-150px'}, 1000, function(){
					alert('SHOOT AU POSTE');
				});
				$('#offense1').transition({ x: '60px', y: '-280px', delay:500}, 1000);
				$('#balloon').transition({ x: '60px', y: '-280px'}, function(){
					alert('EXTRA PASSE A 1');
				});
			});
			$('#reset').on('click', function(){
				$('div').transition({ x: '0px', y: '0px'}, 100);
				$('#option1').css({'display' : 'none'});
				$('#option2').css({'display' : 'none'});
			});

		</script>
	</body>
</html>