window.addEventListener("scroll", function () {
    const header = document.getElementById("header");
    const headerSecondary = document.getElementById("headerSecondary");
    const navItems = document.querySelectorAll(".js-nav-item");
    const hamburger = document.querySelectorAll("#openMenu span")
    const logoLight = document.querySelector('.logo--light')
    const logoDark = document.querySelector('.logo--dark')
    const languageSwitcher = document.querySelector(".js-language-switcher-mobile");

    if (window.innerWidth >= 1280) {
        if (window.scrollY >= 100) {
            header.classList.add("-translate-y-[100%]");
            headerSecondary.classList.remove("-translate-y-[100%]");
            navItems.forEach((item) => item.classList.add("nav__item--scroll"));
        } else {
            header.classList.remove("-translate-y-[100%]");
            headerSecondary.classList.add("-translate-y-[100%]");
            navItems.forEach((item) => item.classList.remove("nav__item--scroll"));
        }
    }else{
        if (window.scrollY >= 100) {
            header.classList.add("bg-white");
            hamburger.forEach((item) => item.classList.add("bg-fontDark"));
            logoDark.classList.add('block')
            logoDark.classList.remove('hidden')
            logoLight.classList.add('hidden')
            logoLight.classList.remove('block')
            header.classList.add("justify-end");
            header.classList.remove("justify-between");
            languageSwitcher.classList.add('hidden')
           
        } else {
            header.classList.remove("bg-white");
            hamburger.forEach((item) => item.classList.remove("bg-fontDark"));
            logoDark.classList.remove('block')
            logoDark.classList.add('hidden')
            logoLight.classList.remove('hidden')
            logoLight.classList.add('block')
            header.classList.remove("justify-end");
            header.classList.add("justify-between");
            languageSwitcher.classList.remove('hidden')
        }
    }
});
