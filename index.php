<?php require_once 'include/header.php'; ?>
<?php require_once ('controller/home_controller.php'); ?>


<style>
    html {height:100%;}
    body {height:80%; width: 100%; margin:0;padding:0}
    #map {height:100%}
    .banner{margin-bottom: -90px;}
    .booking{margin-left: 290px; margin-right: 380px;}
    #access{margin: 50px 500px; 30px; 40px;
        padding: 30px; 30px; 30px; 0px;
        font-family: Dubai;
        border:solid;

    }
    .zod{background-color: #1a425f;
        color: white;
        padding: 0.5em 1.1em;
        text-decoration: none;
        text-transform: uppercase;

    }
    .zod:hover{
        background-color: darkgray;

        color: #1a425f;

    }
    .zom:hover{
        background-color: darkgray;

        color: #1a425f;
    }


    .zom{
        background-color: #1a425f;
        color: white;
        padding: 0.5em 1.5em;

        text-decoration: none;
        text-transform: uppercase;
    }
</style>



<div class="banner">
    <img class="banner-image" src="image/fly-mo.jpg">

</div>

<div class="booking">
    <form action="table.php" method="post">
        <div class="row">
            <div class="col-25">
                <label for="depLabel">Departure</label>
            </div>
            <div class="col-75">
                <select id="flight-from" name="Flight from">
                    <option id="stanstedOpt" value="Stansted">Stansted</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label class="DestLabel">Destination</label>
            </div>
            <div class="col-75">
                <select id="destSelect" name="dest">
                    <option value="all">All Destination</option>
                    <option value=<?=$glasgow?>><?=$glasgow?></option>
                    <option value=<?=$dublin?>><?=$dublin?></option>
                    <option value=<?=$paris?>><?=$paris?></option>
                    <option value=<?=$madrid?>><?=$madrid?></option>
                    <option value=<?=$brussels?>><?=$brussels?></option>
                    <option value=<?=$manchester?>><?=$manchester?></option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label class="DepDateLab">Departing Date</label>
            </div>
            <div class="col-75">
                <input id="dateInp" name="date" value=<?=$date1?> type="date" >


            </div>
        </div>

        <div class="row">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>
<br>
<div id="map"></div>

            <div id="access">
                <br><a class="zom" href="javascript:$('body').css({'zoom':parseFloat($('body').css('zoom'))+0.1})">Zoom in</a><br><br>
                <br><a class="zod" href="javascript:$('body').css({'zoom':parseFloat($('body').css('zoom'))-0.1})">Zoom out</a></div>


            </div>




<?php require_once 'include\_footer.php'; ?>

