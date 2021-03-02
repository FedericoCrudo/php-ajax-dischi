var app = new Vue({
    el: '#app',
    data: {
        query:"all",
        elementdb:[],
        categorie:[],
    },
    mounted(){
        axios
            .get('php/server.php',{})
            .then((result) => {
                
                this.elementdb=result.data;           
               console.log(this.elementdb);
                this.elementdb.forEach(element => {
                (!this.categorie.includes(element.type))? this.categorie.push(element.type) :'';
         });  
         console.log(this.categorie);
               
            })
        


    }

});