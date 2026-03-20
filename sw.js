const CACHE_NAME = "kapsvision-v1";

/* Files to cache for offline use */
const FILES_TO_CACHE = [
  "index.html",
  "logo.png",
  "india-locations.js",
  "manifest.json"
];

/* Install - cache files */
self.addEventListener("install", event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => cache.addAll(FILES_TO_CACHE))
  );
});

/* Activate - clean old caches */
self.addEventListener("activate", event => {
  event.waitUntil(
    caches.keys().then(keys => {
      return Promise.all(
        keys.filter(key => key !== CACHE_NAME)
            .map(key => caches.delete(key))
      );
    })
  );
});

/* Fetch - serve cached first */
self.addEventListener("fetch", event => {
  event.respondWith(
    caches.match(event.request)
      .then(response => {
        return response || fetch(event.request);
      })
      .catch(() => {
        // Optional fallback (if offline & file missing)
        return new Response("Offline mode");
      })
  );
});