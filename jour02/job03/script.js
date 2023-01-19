
    function addone(){
        let button = document.getElementById('button');
        let compteur = 0;
        
        document.getElementById('compteur').innerHTML = compteur++;
        button.onclick=addone;
    };
