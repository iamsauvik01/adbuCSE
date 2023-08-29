document.addEventListener("DOMContentLoaded", function () {
    const yearButtons = document.querySelectorAll(".year-button");
    const tables = document.querySelectorAll(".data-table");
    const years = document.querySelectorAll(".year");

    yearButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const year = button.getAttribute("data-year");

            tables.forEach((table) => {
                table.style.display = "none";
            });

            yearButtons.forEach((btn) => {
                btn.classList.remove("active");
            });
            
            button.classList.add("active");

            years.forEach((year) => {
                year.style.display = "none";
            });

            const yearToShow = document.getElementById(`year-${year}`);
            yearToShow.style.display = "block";
            
            const tableToShow = document.getElementById(`table-${year}`);
            tableToShow.style.display = "block";
        });
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const slider = document.getElementById("slider");
    const prevBtn = document.getElementById("year-prev");
    const nextBtn = document.getElementById("year-next");

    let currentIndex = 0;
    const slideWidth = document.querySelector(".year-button").offsetWidth;

    function goToSlide(index) {
        if (index < 0) {
            index = 0;
        } else if (index > slider.children.length) {
            index = slider.children.length;
        } 
        const translateX = index * slideWidth;
        slider.style.transform = `translateX(${translateX}px)`;
        currentIndex = index;
    }

    prevBtn.addEventListener("click", () => {
        goToSlide(currentIndex + 1);
    });

    nextBtn.addEventListener("click", () => {
        goToSlide(currentIndex - 1);
    });
});