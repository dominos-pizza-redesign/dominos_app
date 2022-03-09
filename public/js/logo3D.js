import { Application } from "./runtime.js";
const app = new Application();
app.load("../scene.json");

document.onreadystatechange = function () {
    if (document.readyState !== "complete") {
        document.body.style.visibility = "hidden";
        document.querySelector("#loader").style.visibility = "visible";
    } else {
        document.body.style.visibility = "hidden";
        document.querySelector("#loader").style.visibility = "visible";
        setTimeout(() => {
            document.querySelector("#loader").style.display = "none";
            document.body.style.visibility = "visible";
        }, 4000);
    }
};
