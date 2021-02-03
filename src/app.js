// src/app.js

import Vue from 'vue';

var app = new Vue({
    el: '#app',
    data:{
    key: "All",
    dischiArray : [],
    genere: [],
   },

   mounted(){
    const axios = require('axios').default;
    axios
        .get('assets/data-json.php')
        .then(response =>{
            this.dischiArray = response.data;
            console.log(this.dischiArray);
        });
        this.changeCategory();
    
   },

   methods: {
    changeCategory(){
        const axios = require('axios').default;
            axios.get('assets/data-json.php')
            .then(response=>{
                let albums = response.data
                this.genere = [...new Set(albums.map(item => item.genre))] // utilizzo set perchè mi permette di eliminare i doppioni presi da map.
                if(this.key === 'All'){
                    this.dischiArray = albums // Se la chiave è impostata su all, il mio array myAlbums sarà equivalente a ciò che prendiamo dall'API.
                } else{  // Settando il valore dellla key, su un qualsiasi valore della option, filtro gli elementi corrispondenti.
                    this.dischiArray = albums.filter(element=> element.genre === this.key)                    
                }
            })
   },   
}
});