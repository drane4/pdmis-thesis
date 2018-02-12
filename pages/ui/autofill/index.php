<?php
	$sql = ('SELECT field1 FROM tablename GROUP BY field1');
	
	$list = array("blue", "green", "pink", "red", "yellow", "gold", "silver");
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Auto Fill Example</title>

	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

	<script src="jquery.easy-autocomplete.min.js"></script> 
	<link rel="stylesheet" href="easy-autocomplete.min.css"> 
	<link rel="stylesheet" href="easy-autocomplete.themes.min.css"> 
	
	<script type="text/javascript">
		$(document).on('ready', function(){
			var options = {
				data: <?php echo json_encode($list) ?>,
				list: {
					match: {
						enabled: true	
					}
				}
			};

			$("#basics").easyAutocomplete(options);
		});
	</script>

</head>
<body>

	<input id="basics" type="text" />

</body>
</html>