// JavaScript Document

// Scripts written by YOURNAME @ YOURCOMPANY

// no service worker for previews
self.addEventListener("fetch", (event) => {
    if (event.request.url.match(/preview=true/)) {
        return;
    }
});

// set up caching
toolbox.precache(["/", "../media/logo.svg", "../media/spritesheet.js", "../styles/modern.css", "modern.js"]);
toolbox.router.get("./assets/media/*", toolbox.cacheFirst);
toolbox.router.get("/wp-content/uploads/*", toolbox.cacheFirst);
toolbox.router.get("/*", toolbox.networkFirst, {NetworkTimeoutSeconds: 5});
