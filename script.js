

document.querySelector('.btn-quemassinou').addEventListener('click', function() {
    fetch('/nomes')
    .then(response => response.json())
    .then(nomes => {
        const listaNomes = document.getElementById('listaNomes');
        listaNomes.innerHTML = nomes.map(nome => `<p>${nome}</p>`).join('');
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

// MENU RESPONSIVO

class MobileNavbar {
    constructor(mobileMenu, navList, navLinks) {
        this.mobileMenu = document.querySelector(mobileMenu);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelectorAll(navLinks);
        this.activeclass = "active";

        this.handleClick = this.handleClick.bind(this);
    }

    animateLinks() {
        this.navLinks.forEach((link) => {
            link.style.animation
                ? (link.style.animation = "")
                : (link.style.animation = 'navLinkFade 0.5s ease forwards 0.3s');
        });
    }

    handleClick() {
        this.navList.classList.toggle(this.activeclass);
        this.mobileMenu.classList.toggle(this.activeclass);
        this.animateLinks();
    }

    addClickEvent() {
        this.mobileMenu.addEventListener("click", this.handleClick);
    }

    init() {
        if (this.mobileMenu) {
            this.addClickEvent();
        }
        return this;
    }
}

const mobileNavbar = new MobileNavbar(
    ".mobile-menu",
    "#nav-list",
    "#nav-list li"
);
mobileNavbar.init();
