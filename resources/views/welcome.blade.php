<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="text-yellow-400">
    <nav class="inset-0 w-screen flex-col items-center justify-center pt-2 pb-5 bg-black border-b-4 border-yellow-400 shadow-2xl shadow-yellow-400">
        <div class="flex flex-col justify-center items-center w-full">
          <img src="https://th.bing.com/th/id/R.9d78e1dca54a95cf569d8589565df082?rik=iagJ2%2fi%2fwGtKTQ&pid=ImgRaw&r=0" class="inverted-image w-52" alt="" />
          <small>Que la fuerza te acompañe</small>
        </div>
      
        <div class="mx-10 w-full pb-5 pt-5">
          <form>
            <div class="flex">
              <label for="search-dropdown" class="sr-only mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Email</label>
              <button id="dropdown-button" data-dropdown-toggle="dropdown" class="z-10 inline-flex flex-shrink-0 items-center rounded-l-lg border-4 border-yellow-400 px-4 py-2.5 text-center text-sm font-medium" type="button">
                All categories
                <svg class="ml-2.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
              </button>
              <div id="dropdown" class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                  <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
                  </li>
                  <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
                  </li>
                  <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
                  </li>
                  <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
                  </li>
                </ul>
              </div>
              <div class="relative w-full">
                <input type="search" id="search-dropdown" class="z-20 focus:border-yellow-400 ring-yellow-400 block w-full rounded-r-lg border-4 border-yellow-400 border-l-2 bg-inherit p-2.5 text-sm" placeholder="Search Mockups, Logos, Design Templates..." required />
                <button type="submit" class="absolute right-0 top-0 h-full ring-yellow-400 rounded-r-lg border border-yellow-400 bg-yellow-400 p-2.5 text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-blue-300">
                  <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                  </svg>
                  <span class="sr-only">Search</span>
                </button>
              </div>
            </div>
          </form>
        </div>
    </nav>
      <main class="bg-black/95 w-screen h-screen" >
      
        <canvas id="spaceCanvas"></canvas>
      
      </main>
      
      <script>
        const canvas = document.getElementById('spaceCanvas');
      const ctx = canvas.getContext('2d');
      
      // Establece el tamaño del canvas para que coincida con el tamaño de la ventana.
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
        function generateStars() {
        for (let i = 0; i < 3500; i++) {
          const x = Math.random() * canvas.width;
          const y = Math.random() * canvas.height;
          const radius = Math.random() * 2;
      
          ctx.beginPath();
          ctx.arc(x, y, radius, 0, Math.PI * 2);
          ctx.fillStyle = 'white';
          ctx.fill();
          ctx.closePath();
        }
      }
      
      generateStars();
      
      </script>
</body>
</html>


