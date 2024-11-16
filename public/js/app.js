let lastScrollTop = 0;
const header = document.getElementsByTagName("header");
const DropDown = document.getElementsByClassName("dropdown");

// Menambahkan transisi durasi pada header untuk perubahan opacity dan height
header[0].style.transition = "all 0.5s ease";

window.addEventListener("scroll", function () {
    const currentScroll =
        window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop) {
        // Scroll ke bawah, opacity turun
        header[0].classList.replace("bg-opacity-50", "bg-opacity-80");
        header[0].classList.replace("h-[3.5rem]", "h-[4rem]");
    } else {
        // Scroll ke atas, opacity kembali
        header[0].classList.replace("bg-opacity-80", "bg-opacity-50");
        header[0].classList.replace("h-[4rem]", "h-[3.5rem]");
    }
});

document.body.addEventListener("click", function (e) {
       
    if (!DropDown[0].contains(e.target)) {
      console.log(`Klik di luar myElement `);
    } else {
        console.log(`Klik di dalam myElement`);
    }

});
//accodion
let elements = document.querySelectorAll("[data-menu]");
console.log(elements)
for (let i = 0; i < elements.length; i++) {
    let main = elements[i];

    main.addEventListener("click", function() {
        let element = main.parentElement.parentElement;
        let indicators = main.querySelectorAll("img");
        let child = element.querySelector("#menu");
        let h = element.querySelector("#mainHeading>div>p");

        h.classList.toggle("font-semibold");
        child.classList.toggle("hidden");
        // console.log(indicators[0]);
        indicators[0].classList.toggle("rotate-180");
    });
}