document.addEventListener('DOMContentLoaded', () => {
    // Custom Cursor
    const cursor = document.createElement('div');
    cursor.id = 'custom-cursor';
    cursor.style.cssText = `
        width: 20px;
        height: 20px;
        background: rgba(37, 99, 235, 0.3);
        border-radius: 50%;
        position: fixed;
        pointer-events: none;
        z-index: 9999;
        transition: transform 0.1s ease;
        backdrop-filter: blur(2px);
    `;
    document.body.appendChild(cursor);

    document.addEventListener('mousemove', (e) => {
        gsap.to(cursor, {
            x: e.clientX,
            y: e.clientY,
            duration: 0.1,
            ease: "power2.out"
        });
    });

    const interactiveElements = document.querySelectorAll('a, button, .glass-card, .social-link');
    interactiveElements.forEach(el => {
        el.addEventListener('mouseenter', () => {
            gsap.to(cursor, {
                scale: 3,
                backgroundColor: 'rgba(37, 99, 235, 0.1)',
                duration: 0.3
            });
        });
        el.addEventListener('mouseleave', () => {
            gsap.to(cursor, {
                scale: 1,
                backgroundColor: 'rgba(37, 99, 235, 0.3)',
                duration: 0.3
            });
        });
    });

    // Parallax background movement
    document.addEventListener('mousemove', (e) => {
        const xPos = (e.clientX / window.innerWidth - 0.5) * 40;
        const yPos = (e.clientY / window.innerHeight - 0.5) * 40;

        gsap.to('.floating-shape', {
            x: xPos,
            y: yPos,
            duration: 2,
            ease: "power2.out",
            stagger: 0.1
        });
    });

    // Smooth Scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Ghost elements creation (Background particles)
    const createParticle = () => {
        const particle = document.createElement('div');
        particle.className = 'absolute rounded-full pointer-events-none opacity-20';
        const size = Math.random() * 5 + 2;
        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;
        particle.style.background = '#2563EB';
        particle.style.left = `${Math.random() * 100}%`;
        particle.style.top = `${Math.random() * 100}%`;
        
        document.querySelector('.mesh-background').appendChild(particle);

        gsap.to(particle, {
            y: -100,
            opacity: 0,
            duration: Math.random() * 10 + 5,
            ease: 'none',
            onComplete: () => {
                particle.remove();
                createParticle();
            }
        });
    };

    for(let i = 0; i < 20; i++) {
        setTimeout(createParticle, i * 300);
    }
});
