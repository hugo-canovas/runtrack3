let paragraphe = document.createElement('p');
let body = document.querySelector('body');

$('#button').click(function(){
    console.log('ok')
    fetch('expression.txt')
        .then((response) => response.text())
        .then((response) => {
            paragraphe.textContent = response;
            body.append(paragraphe);
        })
        .catch((error) => console.log(error));
})