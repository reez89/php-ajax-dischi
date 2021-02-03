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
        <div id="navbar">
            <div class="container">
                <img src="./assets/img/logo.png" alt="">
            </div>
            <select name="generi" id="generi" @change="changeCategory()" v-model="key">
                <option value="All">All</option>
                <option v-for="genre in genere" :value="genre">{{genre}}</option>
            </select>
        </div>
        <div id="main">
            <div class="cards container">
                <div class="cards-item" v-for="item in dischiArray">
                    <img :src="item.poster">
                    <h3> {{item.title}} </h3>
                    <p> {{item.author}} </p>
                    <p> {{item.genre}} </p>
                    <p> {{item.year}} </p>
                </div>
            </div>
        </div>
    </div>


    <script src="./assets/js/app.js"></script>
</body>

</html>