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
        <h1 class="text-4xl uppercase font-bold text-center my-10" >Change Password</h1>
        <form class="m-auto px-8 pt-6 pb-8 mb-4 bg-white rounded w-4/5">
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                    Old Password
                </label>
                <input
                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    id="password" type="password" placeholder="******************" />
                <p class="text-xs italic text-red-500">Please enter a password.</p>
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                    New Password
                </label>
                <input
                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    id="password" type="password" placeholder="******************" />
                <p class="text-xs italic text-red-500">Please enter a password.</p>
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                    Confirm New Password
                </label>
                <input
                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    id="password" type="password" placeholder="******************" />
                <p class="text-xs italic text-red-500">Please rewrite the password.</p>
            </div>
            <div class="flex items-center justify-center">
                <button class="shadow bg-indigo-600 hover:bg-indigo-500 text-white focus:shadow-outline focus:outline-none text-white font-bold py-2 px-8 rounded" type="button">
                    Save
                </button>
            </div>
        </form>
    </div>
        

        
</body>
</html>