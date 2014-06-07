<?php $title = "24H"; ?>
<?php require 'includes/header.php' ?>
<script type="text/javascript">
    countdown.ALL =
        countdown.HOURS |
        countdown.MINUTES |
        countdown.SECONDS;
    var time;
    setInterval(function() {
        time = countdown(new Date(2014, 4, 8, 20, 00, 00), null, countdown.ALL);
    }, 1000);

    setInterval(function() {
        if (time.hours <= 9) {
            time.hours = '0' + time.hours;
        }
        if (time.minutes <= 9) {
            time.minutes = '0' + time.minutes;
        }
        if (time.seconds <= 9) {
            time.seconds = '0' + time.seconds;
        }

        $('#heures').text(time.hours);
        $('#minutes').text(time.minutes);
        $('#secondes').text(time.seconds);
    }, 1000);
    
    function incBlue(){
        var value = $("#scoreBlue").text();
        value++;
        $("#scoreBlue").text(value);
    }
    function incRed(){
        var value = $("#scoreRed").text();
        value++;
        $("#scoreRed").text(value);
    }
    function decBlue(){
        var value = $("#scoreBlue").text();
        value--;
        $("#scoreBlue").text(value);
    }
    function decRed(){
        var value = $("#scoreRed").text();
        value--;
        $("#scoreRed").text(value);
    }
    
</script>
<div class="row">  
    <div class="middle time"><span id="heures"></span><strong>:</strong><span id="minutes"></span><strong>:</strong><span id="secondes"></span></div>
</div>
<div class="row">
    <div class="span6 bk-blue">
        <h1 id="scoreBlue" class="score pagination-centered">0</h1>
        <hr>
        <p class="">
            <a onclick="incBlue()" class="blue" title="Ajouter un point aux bleus" href="#" style="margin-left: 50px">+</a>
            <a onclick="decBlue()" class="blue offset6" title="Enlver un point aux bleus" href="#" style="margin-left: 275px">-</a>
        </p>
    </div>
    <div class="span6 bk-red">
        <h1 id="scoreRed" class="score pagination-centered">0</h1>
        <hr>
        <p class="">
            <a onclick="incRed()" class="red" title="Ajouter un point aux rouges" href="#" style="margin-left: 50px">+</a>
            <a onclick="decRed()" class="red " title="Enlever un point aux rouges" href="#" style="margin-left: 275px">-</a>
        </p>
    </div>
</div>
<img id="vs" src="img/vs.png" />