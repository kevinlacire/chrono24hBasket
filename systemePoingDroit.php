<?php $title="Système \"Poing Droit\""; ?>
<?php require 'includes/headerSystems.php'; ?>
		<script type="text/javascript">

			$('#press').on('click', function(){
				$('#offense1').transition({ x: '50px', y: '0px'}, 1000);
				$('#balloon').
					transition({ x: '50px', y: '0px'}, 1000).
					transition({ x: '290px', y: '-150px'}, 1000).
					transition({ x: '330px', y: '-350px'}, 1000);
				$('#offense5').transition({ x: '255px', y: '-25px'}, 1000);
				$('#offense2').
					transition({ x: '415px', y: '-220px', delay: 500}, 1000).
					transition({ x: '620px', y: '-200px'}, 1000, function(){
						alert('SHOOT 3PTS');
					});
				$('#option1').css({'display' : 'block'}, 1000);
				$('#option2').css({'display' : 'block'}, 1000);
			});

			$('#option1').on('click', function(){
				$('#offense4').transition({ x: '-100px', y: '160px'}, 1000);
				$('#balloon').transition({ x: '150px', y: '-340px', delay: 1500}, function(){
					alert('JEU AU POSTE');
				});
			});

			$('#option2').on('click', function(){
				$('#offense4').transition({ x: '-100px', y: '160px'}, 1000);
				$('#balloon').transition({ x: '50px', y: '-150px', delay: 1500}, function(){
					alert('SHOOT POSTE HAUT');
				});
			})			
			
			$('#reset').on('click', function(){
				$('div').transition({ x: '0px', y: '0px'}, 100);
				$('#option1').css({'display' : 'none'});
				$('#option2').css({'display' : 'none'});
			});

		</script>
	</body>
</html>