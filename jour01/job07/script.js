function jourtravaille(day, month, year){

    let date = new Date(year, month-1, day);

    const jourFeries = [
                            NouvelAn = new Date(2020, 00, 01),
                            Paques = new Date(2020, 03, 13),
                            FeteTravail = new Date(2020, 04, 01),
                            VictoireAllies = new Date(2020, 04, 08),
                            Ascension = new Date(2020, 04, 21),
                            Pentecote = new Date(2020, 05, 01),
                            Bastille = new Date(2020, 06, 14),
                            Assomption = new Date(2020, 07, 15),
                            Toussaint = new Date(2020, 10, 01),
                            Armistice = new Date(2020, 10, 11),
                            Noel = new Date(2020, 11, 25)
                        ];

    for(i=0; i < jourFeries.length; i++){
        if(date.getDate() == jourFeries[i].getDate() && date.getMonth() == jourFeries[i].getMonth()){
            return console.log('le '+ jourFeries[i].toLocaleDateString('fr',{weekday:'long'})+' '+ jourFeries[i].getDate() + " "+ jourFeries[i].toLocaleDateString('fr',{month: 'long'}) + " "+ jourFeries[i].getFullYear()+ " était un jour ferié !");
        }
    } 

    if(date.getDay() == 0 || date.getDay() == 6){
        console.log('le '+ date.toLocaleDateString('fr',{weekday:'long'})+' '+ date.getDate() + " "+ date.toLocaleDateString('fr',{month: 'long'}) + " "+ date.getFullYear()+ " était un weekend !");
    }else{
        console.log('le '+ date.toLocaleDateString('fr',{weekday:'long'})+' '+ date.getDate() + " "+ date.toLocaleDateString('fr',{month: 'long'}) + " "+ date.getFullYear()+ " était un jour travaillé !");
    } 
    
}

jourtravaille(08, 01, 2020);
