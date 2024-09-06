<?php 
require_once('./resources/views/components/header.php');

    $sql = 'SELECT * FROM `tovars`';
    $query = $connection -> query($sql);
    $products = $query -> fetchAll(PDO::FETCH_ASSOC);
?>

    <? HeaderComponent('banner'); ?>

<div class="infoss">

    <div class="infoblock1">
        <div class="info">
            <div class="textt">
            <h2 class="nubmer">01<span class="started">GET STARTED</span></h2>
            <h3 class="infozagalovok">What level of  hiker are you?</h3>
            <p class="infoopis">Determining what level of hiker you are can be an important tool when planning future hikes. This hiking level guide will help you plan hikes according to different hike ratings set by various websites like All Trails and Modern Hiker. What type of hiker are you – novice, moderate, advanced moderate, expert, or expert backpacker? </p>
            <p class="readmore">read more⭢</p>
        </div>
            <img class="infopic" src="media/01.png" height="720px">
        </div>
    </div>

    <div class="infoblock">
        <div class="info">
            <img class="infopic" src="media/02.png" height="720px">
        <div class="textt">
            <h2 class="nubmer">02<span class="started">HIKING ESSENTIALS</span></h2>
            <h3 class="infozagalovok">Picking the right Hiking Gear!</h3>
            <p class="infoopis">The nice thing about beginning hiking is that you don’t really need any special gear, you can probably get away with things you already have.
                Let’s start with clothing. A typical mistake hiking beginners make is wearing jeans and regular clothes, which will get heavy and chafe wif they get sweaty or wet.</p>
            <p class="readmore">read more⭢</p>
        </div>
        </div>
    </div>

    <div class="infoblock">
        <div class="info">
            <div class="textt">
            <h2 class="nubmer">03<span class="started">WHERE YOU GO IS THEY KEY</span></h2>
            <h3 class="infozagalovok">Understand Your Map & Timing</h3>
            <p class="infoopis">To start, print out the hiking guide and map. If it’s raining, throw them in a Zip-Lock bag. Read over the guide, study the map, and have a good idea of what to expect. I like to know what my next landmark is as I hike. For example, I’ll read the guide and know that say, in a mile, I make a right turn at the junction..</p>
            <p class="readmore">read more⭢</p>
            </div>
            <img class="infopic" src="media/03.png" height="720px">
        </div>
    </div>

    <div class="infoblock">
        <div class="info">
        <?php
    $sql = "SELECT * FROM tovars DESC LIMIT 6";

    if(count($products) > 0){
        foreach ($products as $product){
            ?>
        <div class="tov">
        <img class="infopic" src="<?php
                    if(!is_null($product['avatar'])) {
                        echo $product['avatar'];
                    } else {
                        echo '../image/tov5.png';
                    }
            ?>"> 
        <div class="textt">
            <h2 class="nubmer">03<span class="started">WHERE YOU GO IS THEY KEY</span></h2>
            <p class="infozagalovok"><?=$product['nametov']?></p>
            <p class="infoopis"><?=$product['description']?></p>
            <p class="readmore">read more⭢</p>
        </div>
        </div>
        <?php
        }
    }
    else{
        echo 'Нет товаров';
    }
    ?>
        </div>
    </div>

</div>