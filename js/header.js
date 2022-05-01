console.log('hi')
// const menu = document.querySelector('.menu');
const mainmenu = document.querySelector(".menu-main");

// mainmenu.addEventListener("click",(e)){
//     console.log(e.target.closest(".menu-item-has-children"));
//     // console.log('hhh');
// }

mainmenu.addEventListener("click",e =>{
    console.log(e.target.closest(".menu-item-has-children"));
})