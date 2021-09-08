// self.addEventListener('install',function(event) {
//     event.waitUntil(
//         caches.open('sw-cache').then(function(cache) {
//             return cache.add('index.php');
//         })
//     );
// });

// self.addEventListener('fetch', function(event) {
//     event.respondWith(
//         caches.match(event.request).then(function(response) {
//             return response || fetch(event.request);
//         })
//     );
// });

self.addEventListener('install', (e) => {
    console.log('[Service Worker] Install');
  });

const cacheName = 'Chopbar-v1';
const appShellFiles = [
  './',
  './index.php',
  './login.php',
  './signup.php',
  './assets/css/index.css',
  './includes/footer.php',
  './assets/css/footer.css',
  './assets/img/mainlogoo.png',
  './assets/img/M4E7X3z80PQ.png',
  './assets/img/M4E7X3z80PQ (2).png',
  './assets/img/M4E7X3z80PQ (3).png'
];
// 

self.addEventListener('install', (e) => {
    console.log('[Service Worker] Install');
    e.waitUntil((async () => {
      const cache = await caches.open(cacheName);
      console.log('[Service Worker] Caching all: app shell');
      await cache.addAll(appShellFiles);
    })());
  });

  // AUTO FETCH AND CACHE
  // self.addEventListener('fetch', (e) => {
  //   e.respondWith((async () => {
  //     const r = await caches.match(e.request);
  //     console.log(`[Service Worker] Fetching resource: ${e.request.url}`);
  //     if (r) { return r; }
  //     const response = await fetch(e.request);
  //     const cache = await caches.open(cacheName);
  //     console.log(`[Service Worker] Caching new resource: ${e.request.url}`);
  //     cache.put(e.request, response.clone());
  //     return response;
  //   })());
  // });