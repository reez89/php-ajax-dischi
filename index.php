<?php
@require __DIR__ . './assets/data-php.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <div id="app">

        <!-- NAVABR -->
        <div id="navbar">
            <div class="container">
                <img src="./assets/img/logo.png" alt="">
            </div>
            <!-- Select Bonus -->
            <select name="generi" id="generi" @change="changeCategory()" v-model="key">
                <option value="All">All</option>
                <option v-for="genre in genere" :value="genre">{{genre}}</option>
            </select>
            <!--xxx Select Bonus -->
        </div>
        <!--xxx NAVABR -->

        <!-- MAIN SECTION -->
        <div id="main">

            <!-- Php Milestone 1 -->
            <div class="cards container">
                <?php foreach ($dischi as $disco) { ?>
                    <div class="cards-item">
                        <img src="<?php echo $disco['poster'] ?>">
                        <h3><?php echo $disco['title'] ?></h3>
                        <p><?php echo $disco['author'] ?></p>
                        <p><?php echo $disco['genre'] ?></p>
                        <p><?php echo $disco['year'] ?></p>
                    </div>
                <?php  } ?>
            </div>
            <!--xxx Php Milestone 1 -->

            <!-- Vuejs Milestone 2-->
            <!-- <div class="cards container">
                <div class="cards-item" v-for="item in dischiArray">
                    <img :src="item.poster">
                    <h3> {{item.title}} </h3>
                    <p> {{item.author}} </p>
                    <p> {{item.genre}} </p>
                    <p> {{item.year}} </p>
                </div>
            </div> -->
            <!-- xxx Vuejs Milestone 2-->
        </div>
        <!--xxx MAIN SECTION -->
    </div>


    <script src="./assets/js/app.js"></script>
</body>

</html>