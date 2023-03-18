<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- import tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript">
        function resizeIframe(obj){
            obj.style.height = 0;
            obj.style.height = obj.contentWindow.document.body.scrollHeight + 80+ 'px';
        }
    </script>
</head>
<body>
<div class="bg-white max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
    <div class="flex items-center justify-between py-4">
        <div class="flex items-center space-x-4">
          <!-- logo -->
          <div class="flex-shrink-0">
            <a href="http://127.0.0.1/library/client/main.php">
              <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
            </a>
          </div>
          <!-- nav -->
          <nav class="hidden md:flex space-x-10">
            <a href="http://127.0.0.1/library/client/booksList.php" target="content" class="text-base font-medium text-gray-500 hover:text-gray-900">All Books</a>
            <a href="http://127.0.0.1/library/client/wantToRead.php" target="content" class="text-base font-medium text-gray-500 hover:text-gray-900">Want To Read</a>
            <a href="http://127.0.0.1/library/client/booksBought.php" target="content" class="text-base font-medium text-gray-500 hover:text-gray-900">Books Bought</a>
            <a href="http://127.0.0.1/library/client/about.php" target="content" class="text-base font-medium text-gray-500 hover:text-gray-900">About</a>
            <a href="http://127.0.0.1/library/client/contact.php" target="content" class="text-base font-medium text-gray-500 hover:text-gray-900">Contact</a>
          </nav>
        </div>
        <!-- actions -->
        <div class="hidden md:flex items-center space-x-4">
          <!-- search -->
          <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
              <!-- Heroicon name: solid/search -->
              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M6 2a8 8 0 100 16 8 8 0 000-16zm0 14a6 6 0 110-12 6 6 0 010 12z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M14.707 14.707a1 1 0 01-1.414 0l-3.828-3.828a1 1 0 111.414-1.414l3.828 3.828a1 1 0 010 1.414z" clip-rule="evenodd" />
              </svg>
            </span>
            <input class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray focus:ring-0 focus:border-gray-300 sm:text-sm" placeholder="Search" type="search">
          </div>
          <!-- cart -->
          <a href="http://127.0.0.1/library/client/cart.php" target="content" class="text-gray-500 hover:text-gray-900">
            <!-- Heroicon name: outline/shopping-cart -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </a>
          <!-- account -->
          <a href="http://127.0.0.1/library/client/profile.php" target="content" class="text-gray-500 hover:text-gray-900">
            <!-- Heroicon name: outline/user -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </a>
        </div>
        <!-- mobile menu -->
        <div class="md:hidden flex items-center">
          <button class="text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900" aria-label="toggle menu">
            <!-- Heroicon name: outline/menu -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
    </div>
    <iframe src="http://127.0.0.1/library/client/booksList.php" onload="resizeIframe(this)" frameborder="0" width="100%" scrolling="no"  name="content" class="p-5"></iframe>
</body>
</html>