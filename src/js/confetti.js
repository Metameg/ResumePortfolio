function Particle(ctx, width, height, maxParticles, particleType) {
    const COLORS = [
        [238, 96, 169],
        [68, 213, 217],
        [245, 187, 152],
        [144, 148, 188],
        [235, 234, 77]
    ];
    
    var ctx = ctx;
    var width = width;
    var height = height;
    var maxParticles = maxParticles;
    var particleType = particleType;
    var color = COLORS[Math.floor(Math.random() * 5)];

    var x = Math.random() * width;
    var y = Math.random() * height;
    var r = Math.random() * 0.5 + 0.5;
    var d = Math.random() * maxParticles;

    this.update = function() {
        y += Math.cos(d) + 1 + (r / 2);
        x += Math.sin(0) * 2;
        if (x > width + 5 || x < -5 || y > height) {
            x = Math.random() * width;
            y = -10;
        }
    };

    this.draw = function() {
        ctx.save();
        ctx.strokeStyle = "rgba(" + color + ", 0.8)";
        ctx.fillStyle = ctx.strokeStyle;
        ctx.beginPath();
        for (var i = 0; i < maxParticles; i++) {
            ctx.moveTo(x, y);
            switch (particleType) {
            case 1:
                ctx.arc(x, y, r, 0, Math.PI * 2, false);
                ctx.fill();
                break;
            case 2:
                ctx.lineTo(x + 8, y);
                ctx.lineTo(x + 8, y + 8);
                ctx.fill();
                break;
            case 3:
                ctx.lineWidth = 1;
                ctx.lineTo(x, y + 10);
                ctx.stroke();
                break;
            default:
                console.log('Unable to draw: undefined particle type [' + particleType + ']');
                break;
            }
        }
        ctx.restore();
    };
}

class CanvasAnimation {
    constructor(canvas) {
        this.canvas = canvas;
        this.ctx = canvas.getContext("2d");
        this.particles = [];
        this.animationId = null;
        this.isActive = false;
        
        // Set canvas dimensions to match the trigger element
        const rect = canvas.getBoundingClientRect();
        this.canvas.width = rect.width || 200;
        this.canvas.height = rect.height || 50;
        
        this.initParticles();
    }
    
    initParticles() {
        this.particles = [];
        const mp = 5; // Reduced particle count for smaller canvases
        for (let i = 0; i < mp; i++) {
            const type = Math.floor(i * 3 / mp) + 1;
            this.particles.push(new Particle(
                this.ctx, 
                this.canvas.width, 
                this.canvas.height, 
                this.particles.length, 
                type
            ));
        }
    }
    
    start() {
        if (this.isActive) return;
        this.isActive = true;
        this.initParticles(); // Reset particles for fresh animation
        this.animate();
        
        // Stop animation after 1 second
        setTimeout(() => {
            this.stop();
        }, 2500);
    }
    
    stop() {
        this.isActive = false;
        if (this.animationId) {
            cancelAnimationFrame(this.animationId);
            this.animationId = null;
        }
        // Clear the canvas
        this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }
    
    animate() {
        if (!this.isActive) return;
        
        this.update();
        this.draw();
        this.animationId = requestAnimationFrame(() => this.animate());
    }
    
    update() {
        for (let particle of this.particles) {
            particle.update();
        }
    }
    
    draw() {
        this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
        for (let particle of this.particles) {
            particle.draw();
        }
    }
}

document.addEventListener("DOMContentLoaded", () => {
    const triggers = document.querySelectorAll(".confetti-trigger");
    const canvasAnimations = new Map();

    triggers.forEach(trigger => {
        const canvas = trigger.querySelector(".confetti-canvas");
        if (!canvas) return;

        // Create animation instance for this canvas
        const animation = new CanvasAnimation(canvas);
        canvasAnimations.set(trigger, animation);
        
        // Track if animation has played for this view
        let hasPlayedInCurrentView = false;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Only play if we haven't played in this current view
                    if (!hasPlayedInCurrentView) {
                        animation.start();
                        hasPlayedInCurrentView = true;
                    }
                } else {
                    // Element is out of view, reset the flag
                    hasPlayedInCurrentView = false;
                }
            });
        }, { threshold: 0.5 });

        observer.observe(trigger);
    });

    // Handle window resize
    window.addEventListener('resize', () => {
        canvasAnimations.forEach((animation, trigger) => {
            const rect = trigger.getBoundingClientRect();
            animation.canvas.width = rect.width || 200;
            animation.canvas.height = rect.height || 50;
            animation.initParticles();
        });
    });
});