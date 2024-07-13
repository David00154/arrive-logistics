import "./bootstrap";
if ("serviceWorker" in navigator) {
    // window.addEventListener("load", () => {
    navigator.serviceWorker
        .register("/service-worker.js")
        .then((req) => {
            if (!req.active) {
                console.log("Service Worker: Registering...");
            }
        })
        .catch((err) => console.error(`Service Worker ${err}`));
    // });
}
let country = document.querySelector("#pop-up-country");
// let balance = document.querySelector("#pop-up-balance");
let popUp = document.querySelector(".pop-up");

window.addEventListener("DOMContentLoaded", function () {
    country.textContent = faker.address.country();
    // balance.textContent =
    //     "$" + faker.finance.amount().split(".").join(",") + 0;
    // const popUpLoad = function () {
    //     setTimeout(() => {
    //         country!.textContent = faker.address.country();
    //         balance!.textContent =
    //             "$" + faker.finance.amount().split(".").join(",") + 0;
    //         popUp?.classList.toggle("slide-in");
    //     }, 4000);
    //     setTimeout(() => {
    //         popUp?.classList.toggle("slide-out");
    //     }, 5000);
    // };
    // // popUpLoad();
    // setInterval(popUpLoad, 4000);
    setInterval(() => {
        country.textContent = faker.address.country();
        // balance.textContent =
        //     "$" + faker.finance.amount().split(".").join(",") + 0;
        popUp?.classList.toggle("slide-in");
        setTimeout(() => {
            popUp?.classList.toggle("slide-out");
        }, 4000);
    }, 5000);
});
