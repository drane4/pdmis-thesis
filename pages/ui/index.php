
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>PDMIS</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="js/jquery.min.js"></script>
        <script src = "js/jquery.canvasjs.min.js"></script>
        <?php require 'js/charteasy/patient_population.php'?>
    </head>
    <body>
        
        <div class="panel-body">
            <div id="patient_population" style="width: 100%; height: 400px"></div>
        </div>
    
        <script>
            $(document).ready(function(){
                $("#pyear").on('change', function(){
                    var year=$(this).val();
                    window.location = 'index.php?year='+year;
                });
            });
        </script>
    </body>
</html>