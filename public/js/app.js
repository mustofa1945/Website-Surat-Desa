//Interactive Header
class handleHeader {
    constructor(header) {
        this.header = document.getElementsByTagName(header);
        this.header[0].style.transition = "all 0.4s ease";

        this.init();
    }

    runHeader(
        lowOpacity = "bg-opacity-50",
        highOpacity = "bg-opacity-100",
        lowHeight = "md:h-[3.5rem]",
        highHeight = "md:h-[3.7rem]"
    ) {
        this.currentScroll =
            window.pageYOffset || document.documentElement.scrollTop;

        if (this.currentScroll > 0) {
            this.header[0].classList.replace(lowOpacity, highOpacity);

            this.header[0].classList.replace(lowHeight, highHeight);
        } else {
            this.header[0].classList.replace(highOpacity, lowOpacity);

            this.header[0].classList.replace(highHeight, lowHeight);
        }
    }

    init() {
        window.addEventListener("scroll", () => this.runHeader());
    }
}

const Header = new handleHeader("header");

//navbar Menu
class ToogleMenu {
    constructor(trigger, target) {
        this.trigger = document.querySelector(trigger);
        this.target = document.querySelector(target);

        console.log(this.trigger);
        if (!this.trigger || !this.target) {
            throw new Error("Tidak ada Property Menu");
        }

        this.init();
    }

    toggleClass(hiddenClass = "hidden", blockClass = "block") {
        if (this.target.classList.contains(hiddenClass)) {
            this.target.classList.replace(hiddenClass, blockClass);
        } else {
            this.target.classList.replace(blockClass, hiddenClass);
        }
    }

    init() {
        this.trigger.addEventListener("click", () => this.toggleClass());
    }
}

const menuToggle = new ToogleMenu(".icon-menu", ".menu");

const listToggle = new ToogleMenu(".list", ".list-fitur");

const SettingToggle = new ToogleMenu('.list-setting' , '.target-list-setting')

//Slider

class Slider {
    constructor(id,perpage ,breakPerPage , gap) {
        this.Slider = id;
        this.perpage = perpage
        this.breakPerPage = breakPerPage
        this.gap = gap
        this.init();
    }

    slider1() {
        new Splide(this.Slider, {
            type: "loop",
            autoplay: true,
            interval: 2000,
            arrows: true,
            perPage: this.perpage,
            perMove: 1,
            gap: this.gap,
            drag: "free",
            pauseOnHover: true,
            breakpoints: {
                768: {
                    perPage: this.breakPerPage,
                    gap: "1rem",
                },
            },
        }).mount();
    }


    init() {
        document.addEventListener("DOMContentLoaded", ()=>  this.slider1());
    }
}

const slider = new Slider("#image-slider" , 5 , 2 , '2rem');

const slider2 = new Slider("#image-slider2" , 3 , 1 , '2rem')

const sliderFitur = new Slider("#image-slider-fitur" , 3 , 1 , '2rem')


