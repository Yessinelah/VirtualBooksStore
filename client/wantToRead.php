<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- import tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="bg-white max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
  <div class="mx-auto max-w-2xl  px-4 sm:px-6 lg:max-w-7xl lg:px-8">
    <h1 class="text-4xl uppercase font-bold text-center my-10" >Books I want To Read</h1>
    <!-- category select -->
    <div class="flex justify-center">
        <select class="w-1/2 mb-5 border border-gray-300 rounded-md shadow-sm py-2 px-3 bg-white text-sm leading-4 font-medium text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="all">All</option>
            <option value="fiction">Fiction</option>
            <option value="non-fiction">Non-Fiction</option>
            <option value="biography">Biography</option>
            <option value="poetry">Poetry</option>
            <option value="drama">Drama</option>
            <option value="history">History</option>
            <option value="science">Science</option>
            <option value="mathematics">Mathematics</option>
            <option value="technology">Technology</option>
            <option value="philosophy">Philosophy</option>
            <option value="religion">Religion</option>
            <option value="others">Others</option>
        </select>
    </div>
    <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      <a href="http://127.0.0.1/library/client/book.php" class="group">
        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
          <img src="https://marketplace.canva.com/EAFBN69UM-A/1/0/1003w/canva-black-red-vintage-time-book-cover-N4kq526KmFo.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Earthen Bottle</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$48</p>
        <div class="flex items-center justify-between">
            <p class="mt-1 text-sm font-medium text-gray-900">Quantity: 1</p>
            <p class="mt-1 text-sm font-medium text-green-700">In Stock</p>
        </div>
        <p class="mt-1 text-sm font-medium text-gray-900">Rating: 5</p>
        <!-- categories tags -->
        <div class="flex flex-wrap gap-2 mt-2">
            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">
                Fiction
            </span>
            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">
                Fiction
            </span>
            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">
                Fiction
            </span>
        </div>
      </a>
      <a href="http://127.0.0.1/library/client/book.php" class="group">
        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
          <img src="https://marketplace.canva.com/EAFBN69UM-A/1/0/1003w/canva-black-red-vintage-time-book-cover-N4kq526KmFo.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Earthen Bottle</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$48</p>
        <div class="flex items-center justify-between">
            <p class="mt-1 text-sm font-medium text-gray-900">Quantity: 1</p>
            <p class="mt-1 text-sm font-medium text-green-700">In Stock</p>
        </div>
        <p class="mt-1 text-sm font-medium text-gray-900">Rating: 5</p>
        <!-- categories tags -->
        <div class="flex flex-wrap gap-2 mt-2">
            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">
                Fiction
            </span>
            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">
                Fiction
            </span>
            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">
                Fiction
            </span>
        </div>
      </a>
    </div>
  </div>
</div>
</body>
</html>