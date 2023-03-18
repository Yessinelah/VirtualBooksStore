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
    <!-- cart -->
    <div class="flex flex-col md:flex-row justify-between">
      <!-- cart items -->
      <div class="flex-1 md:mr-6">
        <div class="px-4 py-6 bg-gray-50 sm:p-6 lg:p-8">
          <h2 class="text-lg leading-6 font-medium text-gray-900">Shopping cart</h2>
          <p class="mt-1 text-sm text-gray-500">2 items</p>
        </div>
        <div class="border-t border-gray-200 px-4 py-6 bg-white sm:p-6 lg:p-8">
            <ul role="list" class="divide-y divide-gray-200">
                <li class="py-6 flex">
                    <div class="flex-shrink-0 w-24 h-24 border border-gray-200 rounded-md overflow-hidden">
                        <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg" alt="Faded blue denim shirt" class="w-full h-full object-center object-cover">
                    </div>
                    <div class="ml-4 flex-1 flex flex-col">
                        <div>
                        <div class="flex justify-between text-base font-medium text-gray-900">
                            <h3>
                            <a href="#">The Lost Symbol</a>
                            </h3>
                            <p class="ml-4">$34.00</p>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">Author: Dan Brown</p>
                        </div>
                        <div class="flex-1 flex items-end justify-between text-sm">
                            <p class="text-gray-500">Qty 1</p>
                            <div class="flex">
                                <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">
                                Remove
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="py-6 flex">
                <div class="flex-shrink-0 w-24 h-24 border border-gray-200 rounded-md overflow-hidden">
                    <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg" alt="Faded blue denim shirt" class="w-full h-full object-center object-cover">
                </div>
                <div class="ml-4 flex-1 flex flex-col">
                    <div>
                    <div class="flex justify-between text-base font-medium text-gray-900">
                        <h3>
                        <a href="#">The Lost Symbol</a>
                        </h3>
                        <p class="ml-4">$34.00</p>
                    </div>
                    <p class="mt-1 text-sm text-gray-500">Author: Dan Brown</p>
                    </div>
                    <div class="flex-1 flex items-end justify-between text-sm">
                    <p class="text-gray-500">Qty 1</p>
                    <div class="flex">
                        <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">
                        Remove
                        </button>
                    </div>
                    </div>
                </div>
                </li>
            </ul>
            <!-- proceed to checkout -->
            <div class="mt-6">
                <a href="http://127.0.0.1/library/client/payment.php" target="content" class="flex justify-center items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                <!-- Heroicon name: solid/credit-card -->
                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V4a1 1 0 00-1-1H3zm0 2h14v12H3V5z" clip-rule="evenodd" />
                    <path fill-rule="evenodd" d="M5 7a1 1 0 011-1h6a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
                Proceed to checkout
                </a>
            </div>
        </div>
    </div>
    


</body>
</html>