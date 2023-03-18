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
    <!-- author  -->
    <div class="flex flex-col md:flex-row md:space-x-8 mt-6">
        <!-- image -->
        <div class="flex-shrink-0">
            <img class="h-48 w-48 rounded-full" src="data:image/jpeg;base64,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" alt="">
        </div>
        <!-- content -->
        <div class="mt-4 md:mt-0 md:ml-8">
            <h1 class="text-2xl font-bold text-gray-900">John Doe</h1>
            <p class="text-gray-500 mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, fugit.</p>
            <div class="flex items-center space-x-4 mt-4">
                <div class="flex flex-col">
                    <h2 class="text-gray-400">Followers</h2>
                    <span class="text-2xl font-bold text-gray-900">1.7k</span>
                </div>
                <div class="flex flex-col">
                    <h2 class="text-gray-400">Following</h2>
                    <span class="text-2xl font-bold text-gray-900">1.7k</span>
                </div>
                <div class="flex flex-col">
                    <h2 class="text-gray-400">Likes</h2>
                    <span class="text-2xl font-bold text-gray-900">1.7k</span>
                </div>
            </div>
            <!-- follow button -->
            <div class="mt-4">
                <button class="bg-green-500 text-white px-4 py-2 rounded-md">Follow</button>
            </div>
        </div>
    </div>
    <!-- Books -->
    <div class="mx-auto max-w-2xl  px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <h1 class="text-4xl uppercase font-bold text-center my-10" >Books</h1>

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
</body>
</html>