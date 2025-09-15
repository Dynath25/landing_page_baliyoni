document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("listSpeed");
    const list = document.getElementById("pricing");
    const listItems = list.querySelectorAll("li");
    let isListVisible = false;

    menuToggle.addEventListener("click", function () {
        if (isListVisible) {
            hideList();
            menuToggle.textContent = "Show List";
        } else {
            showList();
            menuToggle.textContent = "Hide List";
        }
        isListVisible = !isListVisible;
    });

    function showList() {
        list.style.display = "block";
        listItems.forEach((item, index) => {
            item.style.opacity = 0; // Hide all list items initially
            item.style.transform = "translateY(20px)"; // Move them slightly downward
            setTimeout(() => {
                // Delay each list item animation
                item.style.transition = "opacity 0.5s, transform 0.5s"; // Animate opacity and position
                item.style.opacity = 1; // Fade in
                item.style.transform = "translateY(0)"; // Move to original position
            }, index * 100); // Delay each item by 100ms
        });
    }

    function hideList() {
        listItems.forEach((item, index) => {
            setTimeout(() => {
                item.style.transition = "opacity 0.5s, transform 0.5s";
                item.style.opacity = 0; // Fade out
                item.style.transform = "translateY(20px)"; // Move them downward
            }, index * 100);
        });

        setTimeout(() => {
            list.style.display = "none"; // Hide the list after the animation finishes
        }, listItems.length * 100 + 500); // Ensure that the list hides after all animations complete
    }
});
