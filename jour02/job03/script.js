
    let button = document.getElementById('button');
    let compteur = 0;

    function addone(){
        document.getElementById('compteur').innerHTML = compteur++;
    };

    button.onclick=addone;