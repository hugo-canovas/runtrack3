let arcCiel = [$('#1'), $('#2'), $('#3'), $('#4'), $('#5'), $('#6')];
let NewTab = [];
let checkTab = []
let cpt = 0;

arcCiel.forEach(function(item){          // BOUCLE ET PUSH DANS LE NOUVEAU TABLEAU
    NewTab.push(item);
});

function start(){
    NewTab.sort(() => Math.random() - 0.5);
    for(i=0; i< NewTab.length; i++){
        $('#game').append($(NewTab[i]))
    }
    $('#start').hide();
}

$('#start').click(() => start());

function handleClick(id) {
    checkTab.push($(`#${id}`));
    $(`#${id}`).remove();
    $("#gameCheck").append(`<img id="${id}" src="./img/arc${id}.png" alt=""></img>`);
    cpt++;
    if (cpt === arcCiel.length) {
        if (isEqual(arcCiel, checkTab)) {
            console.log("Les tableaux sont identiques.");
            $("#game").after("<h2>Vous avez gagné</h2>");
            $("h2").css("color", "green");

        } else {
            console.log("Les tableaux sont différents.");
            $("#game").after("<h2>Vous avez perdu</h2>");
            $("h2").css("color", "red");
        }
        $("#restart").show();
    } 
}

$('#1').click(() => handleClick(1));
$('#2').click(() => handleClick(2));
$('#3').click(() => handleClick(3));
$('#4').click(() => handleClick(4));
$('#5').click(() => handleClick(5));
$('#6').click(() => handleClick(6));

function isEqual(arcCiel, checkTab){
    let isEqual = true;
    for(let i = 0; i < arcCiel.length; i++) {
        if (arcCiel[i].attr("id") !== checkTab[i].attr("id")) {
            isEqual = false;
            break;
        }
    }
    return isEqual;
}

function replay() {
    cpt = 0;
    checkTab = [];
    NewTab =[];
    $('#start').show();
    window.location.reload();
}

$("#restart").click(() => replay());
