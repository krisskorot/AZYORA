document.addEventListener("DOMContentLoaded", function () {

    const menuButton = document.querySelector(".azyora-menu-toggle");
    const mobileMenu = document.querySelector(".azyora-mobile-menu");
    const closeButton = document.querySelector(".azyora-mobile-menu-close");

    if (!menuButton || !mobileMenu || !closeButton) {
        return;
    }


    function openMenu() {

        mobileMenu.classList.add("open");

        menuButton.classList.add("active");

        menuButton.setAttribute("aria-expanded", "true");

        document.body.classList.add("azyora-menu-open");

    }


    function closeMenu() {

        mobileMenu.classList.remove("open");

        menuButton.classList.remove("active");

        menuButton.setAttribute("aria-expanded", "false");

        document.body.classList.remove("azyora-menu-open");

    }


    menuButton.addEventListener("click", function () {

        if (mobileMenu.classList.contains("open")) {

            closeMenu();

        } else {

            openMenu();

        }

    });


    closeButton.addEventListener("click", function () {

        closeMenu();

    });


    const mobileLinks = mobileMenu.querySelectorAll("a");

    mobileLinks.forEach(function (link) {

        link.addEventListener("click", function () {

            closeMenu();

        });

    });


    document.addEventListener("keydown", function (event) {

        if (event.key === "Escape") {

            closeMenu();

        }

    });

});