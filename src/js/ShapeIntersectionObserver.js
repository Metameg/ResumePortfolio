document.addEventListener("DOMContentLoaded", () => {

    const shapeContainer = document.querySelector('.shape-container');
    const numShapes = 24; // Number of shapes to generate
    const shapeImages = [
        'assets/shapes/blue-circle.svg',
        'assets/shapes/blue-hollow-circle.svg',
        'assets/shapes/red-circle.svg',
        'assets/shapes/red-square.svg'
    ];

    // Function to create and append shapes dynamically
    for (let i = 0; i < numShapes; i++) {
        const shape = document.createElement('div');
        shape.classList.add('shape');

        const randomImage = shapeImages[Math.floor(Math.random() * shapeImages.length)];
        shape.style.background = `url(${randomImage}) no-repeat`;
        shape.style.backgroundSize = 'contain';

        shapeContainer.appendChild(shape);
    }

    const shapes = document.querySelectorAll(".shape");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const randomTop = Math.random() * 100; 
                const randomLeft = Math.random() * 100;

                const randomWidth = Math.random() * 100 + 20; // Between 20px and 120px
                const randomHeight = Math.random() * 100 + 20; // Between 20px and 120px

                // Apply random top, left, width, and height to the shape
                entry.target.style.top = `${randomTop}%`;
                entry.target.style.left = `${randomLeft}%`;
                entry.target.style.width = `${randomWidth}px`;
                entry.target.style.height = `${randomHeight}px`;

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
