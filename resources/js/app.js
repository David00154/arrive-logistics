import './bootstrap';
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