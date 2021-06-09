let navbarDropdownMenuLink = document.getElementById('navbarDropdownMenuLink');
let dropdown = document.getElementsByClassName('dropdown-menu')[0];
let mobileNav = document.getElementById('navbarNav');
let toggler = document.getElementsByClassName('navbar-toggler')[0];
let logo = document.getElementsByClassName('navbar-circle')[0];

toggler.onclick = async () => {
    if (!mobileNav.classList.contains('show')) {
        if (window.screen.width < 993) {
            document.body.style.overflow = 'hidden';
        }
    } else {
        document.body.style.overflow = null;
    }
}

logo.onclick = () => {
    window.location.href=`/${ document.documentElement.lang }`
}
