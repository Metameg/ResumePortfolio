document.addEventListener("DOMContentLoaded", () => {
    const shapes = document.querySelectorAll(".shape");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            } else {
                entry.target.classList.remove("visible");
            }
        });
    });

    shapes.forEach((shape) => {
        observer.observe(shape);
    });
});
