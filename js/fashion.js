// Menu validation stated


const menu = document.querySelector(".menu");
const mega_menu = document.querySelector(".mega_menu");
const back = menu.querySelector(".back");
const openMenu = document.querySelector(".bar_icone");
const menuClose = menu.querySelector(".menu-close");
let subMenu;
mega_menu.addEventListener("click", (e) => {
    if (!menu.classList.contains("active")) {
        return;
    }
    if (e.target.closest(".menu-item-children")) {
        const children = e.target.closest(".menu-item-children");
        showSubMenu(children);
    }
});

back.addEventListener("click", () => {
    hideSubMenu();
})
openMenu.addEventListener("click", () => {
    toggleMenu();
})
menuClose.addEventListener("click", () => {
    toggleMenu();
})
document.querySelector(".menu-overlay").addEventListener("click", () => {
    toggleMenu();
})

function toggleMenu() {
    menu.classList.toggle("active");
    document.querySelector(".menu-overlay").classList.toggle("active");
}

function showSubMenu(children) {
    subMenu = children.querySelector(".sub-menu");
    subMenu.classList.add("active");
    subMenu.style.animation = "slideLeft 0.5s ease forwards";
    const menuTitle = children.querySelector("i").parentNode.childNodes[0].textContent;
    // console.log(menuTitle);
    menu.querySelector(".current-menu-title").innerHTML = menuTitle;
    menu.querySelector(".close-icons").classList.add("active");
}

function hideSubMenu() {
    subMenu.style.animation = "slideRight 0.5s ease forwards";
    setTimeout(() => {
        subMenu.classList.remove("active");
    }, 400)
    menu.querySelector(".current-menu-title").innerHTML = "";
    menu.querySelector(".close-icons").classList.remove("active");
}

window.onresize = function() {
    if (this.innerWidth > 991) {
        if (menu.classList.contains("active")) {
            toggleMenu();
        }
    }
}

