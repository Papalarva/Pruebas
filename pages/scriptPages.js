/*==============================
=           NOSOTROS           =
==============================*/
var splide__historia = new Splide("#splide__historia", {
    classes: {
        arrows: 'splide__arrows splide__historia-arrows',
        arrow : 'splide__arrow splide__historia-arrow',
        prev  : 'splide__arrow--prev splide__historia-prev',
        next  : 'splide__arrow--next splide__historia-next',
    },
    direction: "ttb",
    height: '32vw',
    wheel: true,
    breakpoints: {
        980: {
            height: '50vw',
        },
    },
    pagination: false,
});
splide__historia.mount();
/*=====  End of NOSOTROS  ======*/