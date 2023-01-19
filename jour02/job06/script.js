const konami = ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'b', 'a'];
const body = document.querySelector('body');
let code = [];
let cpt = 0;

document.addEventListener('keydown', (e) => {
    let key = e.key;
    code.push(key);
    for(let i = 0; i < code.length; i++){
        if(code[i] == konami[i]){
            cpt++;
        }else{
            code = [];
        }
    }
    if(code.length == konami.length){
        body.style.background = 'blue';
    };
    cpt =0;
    console.log(cpt);
})