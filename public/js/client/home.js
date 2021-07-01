// Change background scroll header
window.addEventListener("scroll", () => {
    const header = document.getElementById("header");
    if (this.scrollY >= 100) {
        header.classList.add("scroll-header");
    } else {
        header.classList.remove("scroll-header");
    }
});

// Init swipper js
const swiper = new Swiper(".discover__container", {
    effect: "coverflow",
    grapCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    spaceBetween: 32,
    coverflowEffect: {
        rotate: 0,
    },
});

// Video
const videoFile = document.getElementById("video-file");
const videoButton = document.getElementById("video-button");
const videoIcon = document.getElementById("video-icon");

if (videoButton) {
    const playPause = () => {
        if (videoFile.paused) {
            videoFile.play();

            videoIcon.classList.add("ri-pause-line");
            videoIcon.classList.remove("ri-play-line");
        } else {
            videoFile.pause();

            videoIcon.classList.add("ri-play-line");
            videoIcon.classList.remove("ri-pause-line");
        }
    };

    videoButton.addEventListener("click", playPause);

    const finalVideo = () => {
        videoIcon.classList.add("ri-play-line");
        videoIcon.classList.remove("ri-pause-line");
    };

    videoFile.addEventListener("ended", finalVideo);
}

// Scroll reveal
const sr = ScrollReveal({
    distance: "60px",
    duration: 2800,
});

sr.reveal(
    `.home__data, .home__social-link,
           .discover__container,
           .experience__data, .experience__overlay,
           .place__card,
           .sponsor__content,
           .footer__data, .footer__rights`,
    {
        origin: "top",
        interval: 100,
    }
);

sr.reveal(
    `.about__data, 
           .video__description,
           .subscribe__description`,
    {
        origin: "left",
    }
);

sr.reveal(
    `.about__img-overlay, 
           .video__content,
           .subscribe__form`,
    {
        origin: "right",
        interval: 100,
    }
);
