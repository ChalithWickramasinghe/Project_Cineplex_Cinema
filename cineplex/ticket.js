const arrows = document.querySelectorAll(".arrow");
const movieLists = document.querySelectorAll(".movie-list");

arrows.forEach((arrow, i) => {
    let clickCounter = 0;
    arrow.addEventListener("click", () => {
        const itemNumber = movieLists[i].querySelectorAll("img").length;
        clickCounter++;
        if (itemNumber - (3 + clickCounter) >= 0) {
            movieLists[i].style.transform = `translateX(${
                movieLists[i].computedStyleMap().get("transform")[0].x.value - 300}px)`;
        } else {
            movieLists[i].style.transform = "translateX(0)";
            clickCounter = 0;
        }
    });
    console.log(movieLists[i].querySelectorAll("img").length);

    
});


