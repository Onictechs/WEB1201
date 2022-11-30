var togglebutton;
var wrapper;
var burgermenu;

function declare() {
    togglebutton = document.querySelector(".togglebutton");
    wrapper = document.querySelector(".wrapper");
    burgermenu = document.querySelector(".burgermenu");
}

const main = document.querySelector("main");

declare();

let dark = false //boolean

function toggleAnimation() {
    dark = !dark //reverses the boolean
    //console.log(test);
    let clone = wrapper.cloneNode(true);

    if(dark) {
        clone.classList.remove("light");
        clone.classList.add("dark");
    }
    else {
        clone.classList.add("light");
        clone.classList.remove("dark");
    }
    clone.classList.add("copy");
    main.appendChild(clone)

    document.body.classList.add("stopscrolling"); //removes the ability to scroll for a while to avoid errors during the light and dark theme switch

    clone.addEventListener("animationend", () => {
        //console.log("test")
        document.body.classList.remove("stopscrolling"); //re-adds the ability to scroll
        wrapper.remove();
        clone.classList.remove("copy");
        //resets variables
        declare();
        events();
    })
    clone.classList.add("copy");
    main.appendChild(clone);
    
}

function events() {
    togglebutton.addEventListener("click", toggleAnimation);
    burgermenu.addEventListener("click", () => {
        wrapper.classList.toggle("active")

    });
}

events();

