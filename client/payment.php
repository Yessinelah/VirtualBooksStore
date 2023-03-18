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
    <!-- payment form -->
    <form action="payment.php" method="POST" class="mt-8">
        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
            <div class="mt-1">
              <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="border-0 border-b-2 outline-none  block w-full sm:text-sm border-gray-300 p-1">
            </div>
          </div>
          <div class="sm:col-span-3">
            <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
            <div class="mt-1">
              <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="border-0 border-b-2 outline-none  block w-full sm:text-sm border-gray-300 p-1">
            </div>
          </div>
          <div class="sm:col-span-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <div class="mt-1">
              <input id="email" name="email" type="email" autocomplete="email" class="border-0 border-b-2 outline-none  block w-full sm:text-sm border-gray-300 p-1">
            </div>
          </div>
          <div class="sm:col-span-3">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
            <div class="mt-1">
              <input type="text" name="phone" id="phone" autocomplete="tel" class="border-0 border-b-2 outline-none  block w-full sm:text-sm border-gray-300 p-1">
            </div>
          </div>
          <div class="sm:col-span-6">
            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
            <div class="mt-1">
              <input type="text" name="address" id="address" autocomplete="street-address" class="border-0 border-b-2 outline-none  block w-full sm:text-sm border-gray-300 p-1">
            </div>
            </div>
            <div class="sm:col-span-2">
            <label for="city" class="block text-sm font-medium text-gray-700">City</label>
            <div class="mt-1">
              <input type="text" name="city" id="city" autocomplete="address-level2" class="border-0 border-b-2 outline-none  block w-full sm:text-sm border-gray-300 p-1">
            </div>
            </div>
            <div class="sm:col-span-2">
            <label for="state" class="block text-sm font-medium text-gray-700">State</label>
            <div class="mt-1">
              <input type="text" name="state" id="state" autocomplete="address-level1" class="border-0 border-b-2 outline-none  block w-full sm:text-sm border-gray-300 p-1">
            </div>
            </div>
            <div class="sm:col-span-2">
            <label for="zip" class="block text-sm font-medium text-gray-700">ZIP</label>
            <div class="mt-1">
              <input type="text" name="zip" id="zip" autocomplete="postal-code" class="border-0 border-b-2 outline-none  block w-full sm:text-sm border-gray-300 p-1">
            </div>
            </div>
            <div class="sm:col-span-6">
            <label for="card" class="block text-sm font-medium text-gray-700">Card</label>
            <div class="mt-1">
              <input type="text" name="card" id="card" autocomplete="cc-number" class="border-0 border-b-2 outline-none  block w-full sm:text-sm border-gray-300 p-1">
            </div>
            </div>
            <div class="sm:col-span-3">
            <label for="exp" class="block text-sm font-medium text-gray-700">Expiration</label>
            <div class="mt-1">
              <input type="text" name="exp" id="exp" autocomplete="cc-exp" class="border-0 border-b-2 outline-none  block w-full sm:text-sm border-gray-300 p-1">
            </div>
            </div>
            <div class="sm:col-span-3">
            <label for="cvc" class="block text-sm font-medium text-gray-700">CVC</label>
            <div class="mt-1">
              <input type="text" name="cvc" id="cvc" autocomplete="cc-csc" class="border-0 border-b-2 outline-none  block w-full sm:text-sm border-gray-300 p-1">
            </div>
            </div>
        </div>
        <!-- Billing details -->
        <!-- this contains the total price of the order -->
        <div class="mt-10 sm:mt-0">
          <div class="border-t border-gray-200 py-6">
            <div class="flex justify-between text-base font-medium text-gray-900">
              <p>Subtotal</p>
              <p>$120.00</p>
            </div>
            <div class="mt-6 flex justify-between text-base font-medium text-gray-900">
              <p>Shipping</p>
              <p>$0.00</p>
            </div>
            <div class="mt-6 flex justify-between text-base font-medium text-gray-900">
              <p>Tax</p>
              <p>$0.00</p>
            </div>
            <div class="mt-6 flex justify-between text-base font-medium text-gray-900">
              <p>Total</p>
              <p>$120.00</p>
            </div>
            <div class="mt-6 flex justify-between text-base font-medium text-gray-900">
              <p>Discount</p>
              <p>$0.00</p>
            </div>
            <div class="mt-10 flex inline-center justify-center">
              <button type="submit" class="bg-indigo-600 hover:bg-indigo-500 text-white border border-transparent rounded-md shadow-sm py-3 px-4 inline-flex justify-center text-base font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Confirm order
              </button>
            </div>
          </div>
        </div>
      </div>
        </form>
        </div>
        </div>
        </div>

</body>
</html>