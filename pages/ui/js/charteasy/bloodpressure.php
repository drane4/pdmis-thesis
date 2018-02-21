 <?php 
               $default_date = '26-06-2017'; //day-m-year  
                $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
               $q1 = $conn->query ("SELECT `m_bloodpressure`, `m_time` FROM `machineresult` WHERE `Hospital_Id` = '86-89-17'") or die(mysqli_error());
                                            
                                            $data = array();
                                           while($fetch = $q1 ->fetch_array()){
                                                                ?>
                                            <?php
                                               $temp = array('bp' => $fetch['m_bloodpressure'], 'time' => $fetch['m_time']);
                                               array_push( $sample, $temp ) ; 
                                            ?>
                                            
                                            
                                              <?php
                                                 }
                                         echo var_dump($genderlist);
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