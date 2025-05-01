
    document.querySelector('.about-image').addEventListener('mousemove', function (e) {
        const image = this.querySelector('.tilt-image');
        const rect = this.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        const deltaX = (x - centerX) / centerX;
        const deltaY = (y - centerY) / centerY;
        const rotateX = deltaY * 10; // Adjust the multiplier for more/less tilt
        const rotateY = -deltaX * 10; // Adjust the multiplier for more/less tilt
        image.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
    });

    document.querySelector('.about-image').addEventListener('mouseleave', function () {
        const image = this.querySelector('.tilt-image');
        image.style.transform = 'rotateX(0) rotateY(0)';
    });

