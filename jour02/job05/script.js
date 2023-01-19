let footer = document.querySelector('footer');
let maxScroll = 3185;


window.addEventListener('scroll' , () =>{
    if(window.scrollY <= ((maxScroll / 100) * 20)){
        footer.style.background = "red";
    }else if(window.scrollY < ((maxScroll / 100) * 50)){
        footer.style.background = "orange";
    }else if(window.scrollY < ((maxScroll / 100) * 80)){
        footer.style.background = "green";
        return;
    }
})