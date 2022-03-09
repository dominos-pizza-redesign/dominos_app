require("./bootstrap");

import Alpine from "alpinejs";
// import { gsap } from "gsap";
// import barba from "@barba/core";
import Swiper, { Autoplay } from "swiper";
import "swiper/css/bundle";
import "swiper/css/autoplay";
import { Application } from "./runtime.js";

window.Alpine = Alpine;

Alpine.start();

const swiper = new Swiper(".swiper", {
    modules: [Autoplay],
    autoplay: {
        delay: 3000,
    },
    rewind: true,
    grabCursor: true,
    slidesPerView: "auto",
    centeredSlides: true,
    longSwipesRatio: 1.5,
});

const app = new Application();
app.load("../scene.json");

//#region Barba
// function delay(n) {
//     n = n || 2000;
//     return new Promise((done) => setTimeout(() => done(), n));
// }

// function loadingTransition() {
//     let tl = gsap.timeline();
//     tl.to("#loader", {
//         duration: 1,
//         opacity: 0,
//         display: "none",
//         ease: "Expo.easeInOut",
//     }).to("#loader", {
//         duration: 1,
//         opacity: 1,
//         display: "block",
//         ease: "Expo.easeInOut",
//     });

//     tl.set("#loader", {
//         opacity: 0,
//         display: "none",
//         delay: 4,
//     });
// }

// barba.init({
//     transitions: [
//         {
//             name: "opacity-transition",
//             cacheIgnore: true,
//             prefetchIgnore: true,
//             async leave(data) {
//                 const done = this.async();
//                 loadingTransition();

//                 gsap.to(data.current.container, {
//                     opacity: 0,
//                     display: "none",
//                 });
//                 await delay(6000);
//                 done();
//             },
//             async enter(data) {
//                 gsap.from(data.next.container, {
//                     opacity: 0,
//                     display: "block",
//                 });
//             },
//         },
//     ],
// });
//#endregion
