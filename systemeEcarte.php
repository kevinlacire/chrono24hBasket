<?php $title="Système \"Ecarté\""; ?>
<?php require 'includes/headerSystems.php'; ?>
		<script type="text/javascript">

			$('#press').on('click', function(){
				$('#offense5').transition({ x: '-200px', y: '0px'}, 1000);
				$('#offense4').transition({ x: '200px', y: '0px'}, 1000);
				$('#offense1').transition({ x: '-50px', y: '0px'}, 1000);
				$('#balloon').
					transition({ x: '-50px', y: '0px'}, 1000).
					transition({ x: '-270px', y: '-140px'}, 1000).
					transition({ x: '-310px', y: '-300px'}, 1000);
				$('#offense4').transition({ x: '-130px', y: '180px'}, 1000);

				$('#option1').css({'display' : 'block'}, 1000);
			});

			$('#option1').on('click', function(){
				$('#balloon').transition({ x: '0px', y: '-150px'}, function(){
					alert('SHOOT au POSTE HAUT');
				});
				$('#option2').css({'display' : 'block'}, 1000);
			});

			$('#option2').on('click', function(){
				$('#offense3').transition({ x: '-250px', y: '-150px'}, 1000);
				$('#balloon').transition({ x: '20px', y: '-280px', delay:1000}, function(){
					alert('EXTRA PASSE');
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