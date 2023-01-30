let tab = []
let button = document.getElementById('filter');

button.addEventListener('click', function search(){
    let id = document.getElementById('id').value;
    if(id != ""){
       fetch('pokemon.json')
        .then((response) => response.json())
        .then((response) => { 
            let getPoke = response[id-1];
            console.log(getPoke)
        })
        .catch((error) => console.log(error)) 
    }else{
        console.log("pas d'entré");
    }
});



