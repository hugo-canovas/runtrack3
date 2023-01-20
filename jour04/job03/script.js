let tab = []


function search(id){
    fetch('pokemon.json')
    .then((response) => response.json())
    .then((response) => {  
        for(const x in response){
            console.log(x)
            // tab.push(x)
        }
        // console.log(tab[id])
        // console.log(tab[id].name["english"])
    })
    .catch((error) => console.log(error))
}

search(3)