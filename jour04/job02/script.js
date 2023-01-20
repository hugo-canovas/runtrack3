myJson = {  "name":   "La Plateforme_",
            "address": "8 rue d'hozier",
            "city": "Marseille",
            "nb_staff": "11",
            "creation": "2019"
        }

function jsonValueKey(key){
    let myObj = JSON.parse(JSON.stringify(myJson));
    console.log(myObj[key])
}
jsonValueKey("city")

    


