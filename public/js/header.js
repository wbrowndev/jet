const toggleNavbar = 
() => {
    const burger = document.querySelector(".burger");
    const burger1 = document.querySelector(".burger__stroke:nth-child(1)");
    const burger2 = document.querySelector(".burger__stroke:nth-child(2)");
    const burger3 = document.querySelector(".burger__stroke:nth-child(3)");
    const navbar = document.querySelector(".header__nav__links");
    burger.onclick = () => {
      burger1.classList.toggle("b1");
      burger2.classList.toggle("b2");
      burger3.classList.toggle("b3");
      navbar.classList.toggle("navbar-toggle");
    
    }

}

export default toggleNavbar;