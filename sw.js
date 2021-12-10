//asignar un nombre y versión al cache
const CACHE_NAME = 'v1_cache_magenta_style',
  urlsToCache = [
    './',
    'Public/asset/v2/styles/bootstrap4/bootstrap.min.css',
    'Public/asset/v2/plugins/font-awesome-4.7.0/css/font-awesome.min.css',
    'Public/asset/v2/plugins/OwlCarousel2-2.2.1/owl.carousel.css',
    'Public/asset/v2/plugins/OwlCarousel2-2.2.1/owl.theme.default.css',
    'Public/asset/v2/plugins/OwlCarousel2-2.2.1/animate.css',
    'Public/asset/v2/plugins/colorbox/colorbox.css',
    'Public/asset/v2/styles/main_styles.css',
    'Public/asset/v2/styles/responsive.css',
    'Public/asset/v2/styles/categories.css',
    'Public/asset/v2/styles/categories_responsive.css',
    'https://use.fontawesome.com/releases/v5.0.6/webfonts/fa-brands-400.woff2',
    'magenta.js',
    'Public/asset/img/ico.jpg',
    'Public/asset/img/ico.ico'
  ] 

self.addEventListener('install', e => {
  e.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        return cache.addAll(urlsToCache)
          .then(() => self.skipWaiting())
      })
      .catch(err => console.log('Falló registro de cache', err))
  )
})

self.addEventListener('activate', e => {
  const cacheWhitelist = [CACHE_NAME]

  e.waitUntil(
    caches.keys()
      .then(cacheNames => {
        return Promise.all(
          cacheNames.map(cacheName => {
            //Eliminamos lo que ya no se necesita en cache
            if (cacheWhitelist.indexOf(cacheName) === -1) {
              return caches.delete(cacheName)
            }
          })
        )
      })
     
      .then(() => self.clients.claim())
  )
})

self.addEventListener('fetch', e => {
  
  e.respondWith(
    caches.match(e.request)
      .then(res => {
        if (res) {
          
          return res
        }
       
        return fetch(e.request)
      })
  )
})