function nbPremier(nb1, nb2){

    let cpt1 = 0;
    let cpt2 = 0;

    for(let i=1; i <= nb1; i++){
        if(nb1 % i == 0){
            cpt1++;
        }
    }

    for(let i=1; i <= nb2; i++){
        if(nb2 % i == 0){
            cpt2++;
        }
    }

    if(cpt1 == 2 && cpt2 == 2){
        let result = nb1 + nb2;
        console.log(result);
    }else{
        console.log(false);
    }
    
}

nbPremier(5, 5)
