<?php $title = "24H"; ?>
<?php require 'includes/header.php' ?>
<script type="text/javascript">
    $(function () {
        var totalSeconds;
        var hours   = $('#heures');
        var minutes = $('#minutes');
        var seconds = $('#secondes');

        function timeUpdate() {
            var sec = totalSeconds;
            if (sec > 0) {
                totalSeconds--;
                var h = Math.floor(sec / 3600);
                sec %= 3600;
                var min = Math.floor(sec / 60);
                sec %= 60;
                hours.text(((h < 10) ? "0" : "") + h);
                minutes.text(((min < 10) ? "0" : "") + min);
                seconds.text(((sec < 10) ? "0" : "") + sec);
            }
            else {
                document.getElementById("heures").innerHTML = '';
                document.getElementById("heures").innerHTML = 'The world has ended! Or has it?';
            }
        }

        function initiate(sec) {
            totalSeconds = parseInt(sec);
            setInterval(function() {
                timeUpdate();
            }, 1000);
        }

        $('#startPauseCountDown').click(function(){
            initiate(24 * 60 * 60);
        });

        var scoreBlue = $("#scoreBlue");
        var scoreRed = $("#scoreRed");

        $('#incBlue').click(function () {
            var value = scoreBlue.text();
            value++;
            scoreBlue.text(value);
        });
        $('#incRed').click(function () {
            var value = scoreRed.text();
            value++;
            scoreRed.text(value);
        });
        $('#decBlue').click(function () {
            var value = scoreBlue.text();
            value--;
            scoreBlue.text(value);
        });
        $('#decRed').click(function () {
            var value = scoreRed.text();
            value--;
            scoreRed.text(value);
        });
    });
</script>
<div class="row">
    <h3 id="startPauseCountDown" class="btn btn-info btn-block">Start</h3>
    <div class="middle time"><span id="heures">24</span><strong>:</strong><span id="minutes">00</span><strong>:</strong><span id="secondes">00</span></div>
</div>
<div class="row">
    <div class="span6 bk-blue">
        <h1 id="scoreBlue" class="score pagination-centered">0</h1>
        <hr>
        <p class="">
            <a id="incBlue" class="blue" title="Ajouter un point aux bleus" href="#" style="margin-left: 50px">+</a>
            <a id="decBlue" class="blue offset6" title="Enlver un point aux bleus" href="#" style="margin-left: 275px">-</a>
        </p>
    </div>
    <div class="span6 bk-red">
        <h1 id="scoreRed" class="score pagination-centered">0</h1>
        <hr>
        <p class="">
            <a id="incRed" class="red" title="Ajouter un point aux rouges" href="#" style="margin-left: 50px">+</a>
            <a id="decRed" class="red " title="Enlever un point aux rouges" href="#" style="margin-left: 275px">-</a>
        </p>
    </div>
</div>
<img id="vs" src="img/vs.png"/>