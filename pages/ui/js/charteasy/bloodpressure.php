<!-- 164/91 7:25 am
165/88 8:45 am
172/86 9:45 am
165/95 10:20 am
170/83 11:15 am -->

<?php 
	$default_date = '03-02-2013';
    $data = array(
        array('bp' => '164/91', 'time' => '7:25 am'),
        array('bp' => '165/88', 'time' => '8:45 am'),
        array('bp' => '172/86', 'time' => '9:45 am'),
        array('bp' => '165/95', 'time' => '10:20 am'),
        array('bp' => '170/83', 'time' => '11:15 am'),
        array('bp' => '164/91', 'time' => '1:25 pm'),
        array('bp' => '165/88', 'time' => '2:45 pm'),
        array('bp' => '172/86', 'time' => '4:45 pm'),
        array('bp' => '165/95', 'time' => '5:20 pm'),
        array('bp' => '170/83', 'time' => '6:15 pm')
    );

    
    //$t = date('H:i', strtotime($default_date.' 7:25 pm'));
?>



<script type="text/javascript">
  window.onload = function () {
  	
  	function toTimestamp(strDate){
	   	var dateString = strDate,
	    dateTimeParts = dateString.split(' '),
	    timeParts = dateTimeParts[1].split(':'),
	    dateParts = dateTimeParts[0].split('-'),
	    date;

		date = new Date(dateParts[2], parseInt(dateParts[1], 10) - 1, dateParts[0], timeParts[0], timeParts[1]);

		return date.getTime(); //1379426880000
		console.log(date); //Tue Sep 17 2013 10:08:00 GMT-0400
	}

    var chart = new CanvasJS.Chart("bp",
    {
      	axisX:{
        	labelAngle: -20
     	},
     	axisY:{
     		interval: 10,
     		minimum: 60,
     		maximum: 180
     	},
      data: [
      {
        type: "line",
      	xValueType: "dateTime",
        dataPoints: [
        	<?php foreach ($data as $k): ?>
        	<?php 
        		$x = explode("/", $k['bp']);
        		$time = date('H:i', strtotime( $default_date.' '.$k['time']) );
        	?>
        		{ x: toTimestamp("<?php echo $default_date.' '.$time; ?>"), y: <?php echo $x[0]; ?> },		
        	<?php endforeach ?>
        ]
      },
      {
        type: "line",
      	xValueType: "dateTime",
        dataPoints: [
        	<?php foreach ($data as $k): ?>
        	<?php 
        		$x = explode("/", $k['bp']);
        		$time = date('H:i', strtotime( $default_date.' '.$k['time']) );
        	?>
        		{ x: toTimestamp("<?php echo $default_date.' '.$time; ?>"), y: <?php echo $x[1]; ?> },		
        	<?php endforeach ?>
        ]
      }
      ]
    });

    chart.render();

    

	//alert( toTimestamp('17-09-2013 10:08') );
  }
  </script>