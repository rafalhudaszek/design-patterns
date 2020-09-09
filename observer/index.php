<?php
session_start();

require_once 'Subject.php';
require_once 'Observer.php';

$item1 = new Auto('Auto', 10);
$item2 = new Flats('Flats', 15);
$item3 = new Motor('Motor', 20);



$subject = new Subject();
$subject->add($item1);
$subject->add($item2);
$subject->add($item3);

$_SESSION['subject'] = serialize($subject);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="jQuery.js"></script>
    <script>
        function nextStep()
        {
            $.ajax({
                
                type: "POST",
                url: "create.php",
                data:{
                    action: 'start',
                },
                success: function (output) {
                    var values = output.split(' ');
                    document.getElementById("carValue").innerHTML = values[0] + 'zł';
                    document.getElementById("flatsValue").innerHTML = values[1] + 'zł';
                    document.getElementById("motorValue").innerHTML = values[2] + 'zł';

                }
            });
        }
    </script>
</head>
<body>
    <div id="container">
        <h1>Giełda</h1>
        <div class="box">
            <h3>Samochody</h3>
            <div id="carValue">

            </div>
        </div>

        <div class="box">
            <h3>Mieszkania</h3>
            <div id="flatsValue">

            </div>
        </div>

        <div class="box">
            <h3>Motocykle</h3>
            <div id="motorValue">

            </div>
        </div>
        <div style="clear:both"></div>
        
        <button type="button" onclick="nextStep()">Update</button>

    </div>
</body>
</html>