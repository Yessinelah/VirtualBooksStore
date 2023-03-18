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

      <!-- main content -->
      <div class="flex flex-col md:flex-row -mx-4">
        <!-- cover image -->
        <div class="md:flex-1 px-4">
          <div x-data="{ image: 1 }" x-cloak>
            <div class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4">
              <div x-show="image === 1" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center" >
                <span class="text-5xl">1</span>
              </div>
          </div>
        </div>
        <!-- book info --> 
        <div class="md:flex-1 px-4">
          <h2 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">Lorem ipsum dolor, sit amet consectetur, adipisicing elit.</h2>
          <!-- Price and author -->
          <div class="flex items-center space-x-4 my-4">
            <div>
              <div class="rounded-lg bg-gray-100 flex py-2 px-3">
                <span class="text-indigo-400 mr-1 mt-1">$</span>
                <span class="font-bold text-indigo-600 text-3xl">25</span>
              </div>
            </div>
            <!-- author -->
            <p class="text-gray-500 text-sm">By <a href="http://127.0.0.1/library/client/author.php" class="text-indigo-600 hover:underline">Dan Brown</a></p>
          </div>
  
          <p class="text-gray-500">Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Vitae exercitationem porro saepe ea harum corrupti vero id laudantium enim, libero blanditiis expedita cupiditate a est.</p>
          <!-- categories tags -->
          <div class="flex flex-wrap -mx-2 mt-4">
            <div class="px-2">
              <a href="#" class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#category</a>
            </div>
            <div class="px-2">
              <a href="#" class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#category</a>
            </div>
            <div class="px-2">
              <a href="#" class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#category</a>
            </div>
          </div>
          <!-- quantity and add to cart -->
          <div class="flex py-4 space-x-4">
            <div class="relative">
              <div class="text-center left-0 pt-2 right-0 absolute block text-xs uppercase text-gray-400 tracking-wide font-semibold">Qty</div>
              <select class="cursor-pointer appearance-none rounded-xl border border-gray-200 pl-4 pr-8 h-14 flex items-end pb-1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
  
              <svg class="w-5 h-5 text-gray-400 absolute right-0 bottom-0 mb-2 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
              </svg>
            </div>
  
            <button type="button" class="h-14 px-6 py-2 font-semibold rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white">
              Add to Cart
            </button>
          </div>
          <!-- comments -->
          <div class="mt-8">
            <h3 class="text-gray-700 font-semibold text-lg mb-2">Comments</h3>
            <!-- add comment -->
            <div class="flex space-x-4">
              <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full" src="data:image/jpeg;base64,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" alt="">
              </div>
              <div class="flex-1">
                <div class="relative">
                  <textarea class="w-full border border-gray-200 rounded-xl p-4 focus:outline-none focus:border-indigo-500" rows="4" placeholder="Write something..."></textarea>
                  <div class="absolute bottom-0 right-0 mb-2 mr-4">
                    <button type="button" class="h-10 px-6 py-2 font-semibold rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white">
                      Post
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- rest of the comments -->
            <div class="flex space-x-4">
              <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAH0AfQMBEQACEQEDEQH/xAAcAAABBAMBAAAAAAAAAAAAAAAAAQUGBwIDBAj/xAA9EAACAQMBBQUEBwYHAQAAAAABAgMABBEFBhIhMUETUWFxgSKRscEHFBUjMqHRM0JScqLwQ1NigrLC4ST/xAAaAQEAAwEBAQAAAAAAAAAAAAAAAgMEAQUG/8QANBEAAgIBAwEDCwQBBQAAAAAAAAECEQMEEiExE0FRBRQiMjNCcYGRsdE0YaHB8CNSU3Lh/9oADAMBAAIRAxEAPwCjaAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAXFAGKASgCgCgCgCgCgCgCgCgCgCgCgJDoOyd7q8YuGZbWzz+3l/e/lHWuOSirZ1JydJWSMaLslo4AvpTcSjj9/KV/oX2veKzedRl7NOXwXH1fBq8zmvaNR+L5+iNq6rssvCHR7eQd4si/5sBXHnzf7F82iS02H/kfyizeDsvejdm0aJAeqwSRH3qPnTznIvWh9Gn+DvmUX6uT6pr8nHfbEaTexl9HvXtZeiXDb8Z/3Divrmp49Tim6un4PgpyaTLjVtWvFckK1fSL7R7o22oQNFJzHVWHepHAitBnOCgCgCgFoBeVAY0AUAUAUBJdkdGgvZxdX5BtlY4izjtGHQ+FRlNRLI45SVomeoRXN8oR5nhjHDdgO7w7geg8sfKssob5XLnwRtxyWOG2HD733v/w47bQLKDiluCe9uJqx2+pBNLohxitI4/wxqPSiQcmb1CDqKHLZi6oTleDd451CcYyVNWWQlKLtMJ7a31izOmal+ybjDMB7ULdCPDoR/YYpuDUJPh9Px+CGfEppziuV1Kp1bT59K1G4sbtcTQvutjkeoI8CMH1rWYTjoBQKAU0AgGaASgCgCgCgJvqu5o8FlajKiGIKzDq5yW/PNUTqUqNWH0Ybn0sztNcIUAs2O8HH5VCmi9NM7V1qNucrj1FctnaRl9pwHm8jetcs6o+BsS83/wBlaSOf5Sa5uRNY5PogkvZ4RvSWkkad5Q4rlpnXjkuqOa811YLQ3CAMUZcjvXeG8PUZHrXXjWRbWRWTs3u/yu8w+ky1WfTtM1VcGQFrWRurgcUJ9M1owz341I8/Pj7PLKC7ivwKtKgzQCgZ50BkSBQGugCgCgN9hj69b73LtVz76Alm2LLJqUK5GO1ct4AKtUe/L4L+zZD2UV+7f8IdtC0KV2S7u4wihcRxke1x6nu8qzZMl8I9HBgcXukOw0WNmyI1x37tU7ma6j4DpY6FEPxBR5CnLONpdB+tNOt4gMRg1NJFUps7JrSGW3eJ0BR1KsMdDXWQtlV7U6NPp1nNbXCK6shEc6jhJgde48OXuq3HP0kZs2Oosx2imSf6O4iWBYSW7Dz7MZ+NXadVGv3f3Zi1b3ZN3il9iuSe6rzMKq9TQCsegoBAuaAQAmgAjFAGDQG22t5rm4jgto2eaRgqKvMmgJRc6XdxarDcXcZVX7ONwTndk3VB9/zqrJ6rNGm5yJFpNGmFCYIwK8513HvK3bZFtc0y7+stPc3sCwM+IxI2AvcKthNVSRnyY23blRItl7CezR1uJIzvY3Qg5eNRlLcycMbxp27G3UtCu7e7mubi/tFSaYlWmO7zPAeeOHpU1LuopnBXubolGgWl7aWzpe3CygnKBc+yPM1xuySW3izg2zUPorgjOHGB48R86jj9Y7m9myq9W2e1ex2ZiMkLNFFK0twyuCEyFCDHgM+W9XpWjwuWRUDHM104KW7qARcdaAyLCgBmxyoDEAk8aAyJAoCV/RjAJ9pS+U3oreR0DLnJ4Dh3HjWTWahafGpNWm0vqX6fF2sml4E214iaxlYqMlBJy6qc/Bvyq3rA7je3KmO1owIHjXmH0TRwbS6Te6l9VbT5IleKTLCUndI/v41ow5FBuzHq8Es0Uk+jH3TY+waOLOdxQuT14VVds0teic22OiXusQWZ0+SFZYJt5lmzusp58v7wTWnHNRdmDUYnljtTH6CPsLaOItvFEClu/A51Wy6KGXaP24baMcnuUB9AT8qji5mM724mzIIL3TJLcqn/ANEchO8uchs8COvDFW6vU+bxU6vovqeTgw9q9v8AnB59nikgnkhmUpJGxR1PMEcCK3Gc10AUAUBkFzxNAKTjlQGPOgH/AGGv003anT7iWQJEZDG5JwAGBXj4ZIPpWLyjhebSTilzX25NGlnszRbLI1MIFlh3gQsjR+hyPmtS003LEnJc0n/H5sZY7cnHibNMn37aFs80BrFJU2j6WD3RTHRLjAoccRBdyxXAZI98UuhtTVDrHekoCy4NT3FDxq+DNrjeXnRskoUxh164AkgXPHDsvnjdH/KrdPzKzJr3WKvE2pew2lnd3Lvux2kO+cHjgDPDzwB61DPB5dRjjXCbf0VL+TBikseKcu+q+vP2ooW4lae4lmk4vI5dvMnNemYjXQBQBQGbNjgKAxxQC8qAzggluJUigjaSRzhUUZJodSbdInsEWrtZJFqlxFDICDvD25CBjAIHDpzzWeUop2j08OiySj6XA66S4gt1hEpk7P8AebgTWLKvStHs4YbIKN3Q9HtZ7GcWhX6z2bdlnlvY4fnUI1as5lb2vb1I/b7UaxGMHSbdivsn25FOfEZq9ywJlWPQeUMkdyfHyHHS9b1rVNWitZdNt7W3jBkmkXfJxg4HE9TjpSTxODcepB6fVYMi7R2n8P6JFJOEGMjhWc0rkimtodRvVlhvTEYxuhdzKnBznmPD3Vsw+ijNqNK8vNjXtLLqa7OXse4sgnlQP9XywSJQCS2RnJbHgAvv049qXB42o0+SD5XH7FdnnVhkEoAoAoBQKAM0AlAWP9HUFlDpEtxKALiaRk7Q9FHTwqjK+aPY8nQSg50dupaZch2ktn7ZeeOv/tUtM9dcrgZ45pYZcEMjrzDDFccU1RzdQ62esNbkb5wuefSs84OJLiSHZdUsp2EkiRM/VuR99Q2koTyQVRk0je+u2sMe7Eyrnoo5n510rcXJ3J2Mep6zM5MagpnmTzqyGO+WS4iN1kt5eSYtkdx1PID1rRRzlkt0iwFiFlvJt+TH4F5D9a7RBxvgrHbi0trPaO5SzjEcThZAi8lJHED1rTF2j53WY448zUSP1IyhQBQCk0AlAFAWBsKVk0N0ZsETsB7hVGRcns+T5VjfxH0SS2r43sjzqFHqRaZvkNrepu3EanuOOI9a6SvxGq8042EUkyl57Utkgkb0fT1FQnj3coobeJN9V9jhVNPcgkyKO7H6VS8c+4LVYe8ckurC3VEgtXaRiAvADJp2UmR86jdR5HC20KKWV7q/O8zkHs8+yvDGPHlV8YUqLbqTbdjn2sUC7kCAAcsDlUqJcvqaclvac++hJsq/bp9/aW6x+6EH9I/Wr4eqfN653nkR+pGQKAKAKAKAzijeWRUjRnZjhVUZJPhQ6lZZmy+y8tjY41Nvadt/sVb8PDqR5dKom7fB7uhwSxR9LvHK40zh9xOy9yv7Q/Wqz0KQ2XAvLX8cO8v8SHeH61JMhNtJ0cst/dPpuoQumVELBmUEDBGPfxqxr0jDHPLJppTl1pjZp9q0gBDSAHpvnhU9qPH7SXiZSrLZ6rZyqXchyACxPQ1ySSRo0mR9tGx70zUL67vJTuO68lQIcgVD3T1I5pdvsfSrJFb2F3Jgy7sI8Tk1E2KSO37Ntym7K8jN/FvkY9BUQ5lZbe7OXtjfS6kD9YtJmH3ijjHwAAYenPlV8Gqo8DW4Jxm5voyH1MwhQBQBQCigLL2A0GKysV1e8TNzMPuA3+Gnf5n4edVzfcelo8PvvqSOW5DMcVUexFcGsy+NCdnPNICMVyiL6Da8Y+wbo4/Ei/mVq5+seZjdaF/P7jZBKsKjpUzyDXI5nurdv4ZV+Ncn6po0r/14/ElekFV1aTA5QqPjVfuHqS/WP/r/AGPpuByrjRpMd/J51wkmD9nLG8Uyq8bqVZWGQwPQ0OuKaplPbY6F9iaoUhybWYb8BJzgdV9Phir4uz5/VYOxnXd3DBXTMFAFAdGnQrc39tA5IWWVUOO4kChKKuSRb15OVCxoAqKMADoKpZ9DiikjjEjVE0CPKwFDjNJclc104+hqmc/YM3iE/wCtWe8eZD9C/n9yPhyxqR5THKFAqof9S/GuS6Mu03t4fEd7GVl1KUj/AC1+dQ7j1X+rfwHeNyTXDSdIcha6SRqeZq4TI3t5Etxs9JK49qCRWQ+Z3T8alHhmHyhFPFfgVjVh4YUB/9k=" alt="">
              </div>
              <div>
                <div class="text-sm">
                  <a href="#" class="font-medium text-gray-900">Jane Doe</a>
                </div>
                <div class="mt-1 text-sm text-gray-700">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                </div>
                <div class="mt-2 text-sm space-x-2">
                  <span class="text-gray-500 font-medium">1d</span>
                  <span class="text-gray-500 font-medium">Reply</span>
                </div>
              </div>
            </div>
            <div class="flex space-x-4">
              <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full" src="data:image/jpeg;base64,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" alt="">
              </div>
              <div>
                <div class="text-sm">
                  <a href="#" class="font-medium text-gray-900">Jane Doe</a>
                </div>
                <div class="mt-1 text-sm text-gray-700">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                </div>
                <div class="mt-2 text-sm space-x-2">
                  <span class="text-gray-500 font-medium">1d</span>
                  <span class="text-gray-500 font-medium">Reply</span>
                </div>
              </div>
            </div>
            <div class="flex space-x-4">
              <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAH0AfQMBEQACEQEDEQH/xAAcAAABBAMBAAAAAAAAAAAAAAAAAQUGBwIDBAj/xAA9EAACAQMBBQUEBwYHAQAAAAABAgMABBEFBhIhMUETUWFxgSKRscEHFBUjMqHRM0JScqLwQ1NigrLC4ST/xAAaAQEAAwEBAQAAAAAAAAAAAAAAAgMEAQUG/8QANBEAAgIBAwEDCwQBBQAAAAAAAAECEQMEEiExE0FRBRQiMjNCcYGRsdE0YaHB8CNSU3Lh/9oADAMBAAIRAxEAPwCjaAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAKAXFAGKASgCgCgCgCgCgCgCgCgCgCgCgJDoOyd7q8YuGZbWzz+3l/e/lHWuOSirZ1JydJWSMaLslo4AvpTcSjj9/KV/oX2veKzedRl7NOXwXH1fBq8zmvaNR+L5+iNq6rssvCHR7eQd4si/5sBXHnzf7F82iS02H/kfyizeDsvejdm0aJAeqwSRH3qPnTznIvWh9Gn+DvmUX6uT6pr8nHfbEaTexl9HvXtZeiXDb8Z/3Divrmp49Tim6un4PgpyaTLjVtWvFckK1fSL7R7o22oQNFJzHVWHepHAitBnOCgCgCgFoBeVAY0AUAUAUBJdkdGgvZxdX5BtlY4izjtGHQ+FRlNRLI45SVomeoRXN8oR5nhjHDdgO7w7geg8sfKssob5XLnwRtxyWOG2HD733v/w47bQLKDiluCe9uJqx2+pBNLohxitI4/wxqPSiQcmb1CDqKHLZi6oTleDd451CcYyVNWWQlKLtMJ7a31izOmal+ybjDMB7ULdCPDoR/YYpuDUJPh9Px+CGfEppziuV1Kp1bT59K1G4sbtcTQvutjkeoI8CMH1rWYTjoBQKAU0AgGaASgCgCgCgJvqu5o8FlajKiGIKzDq5yW/PNUTqUqNWH0Ybn0sztNcIUAs2O8HH5VCmi9NM7V1qNucrj1FctnaRl9pwHm8jetcs6o+BsS83/wBlaSOf5Sa5uRNY5PogkvZ4RvSWkkad5Q4rlpnXjkuqOa811YLQ3CAMUZcjvXeG8PUZHrXXjWRbWRWTs3u/yu8w+ky1WfTtM1VcGQFrWRurgcUJ9M1owz341I8/Pj7PLKC7ivwKtKgzQCgZ50BkSBQGugCgCgN9hj69b73LtVz76Alm2LLJqUK5GO1ct4AKtUe/L4L+zZD2UV+7f8IdtC0KV2S7u4wihcRxke1x6nu8qzZMl8I9HBgcXukOw0WNmyI1x37tU7ma6j4DpY6FEPxBR5CnLONpdB+tNOt4gMRg1NJFUps7JrSGW3eJ0BR1KsMdDXWQtlV7U6NPp1nNbXCK6shEc6jhJgde48OXuq3HP0kZs2Oosx2imSf6O4iWBYSW7Dz7MZ+NXadVGv3f3Zi1b3ZN3il9iuSe6rzMKq9TQCsegoBAuaAQAmgAjFAGDQG22t5rm4jgto2eaRgqKvMmgJRc6XdxarDcXcZVX7ONwTndk3VB9/zqrJ6rNGm5yJFpNGmFCYIwK8513HvK3bZFtc0y7+stPc3sCwM+IxI2AvcKthNVSRnyY23blRItl7CezR1uJIzvY3Qg5eNRlLcycMbxp27G3UtCu7e7mubi/tFSaYlWmO7zPAeeOHpU1LuopnBXubolGgWl7aWzpe3CygnKBc+yPM1xuySW3izg2zUPorgjOHGB48R86jj9Y7m9myq9W2e1ex2ZiMkLNFFK0twyuCEyFCDHgM+W9XpWjwuWRUDHM104KW7qARcdaAyLCgBmxyoDEAk8aAyJAoCV/RjAJ9pS+U3oreR0DLnJ4Dh3HjWTWahafGpNWm0vqX6fF2sml4E214iaxlYqMlBJy6qc/Bvyq3rA7je3KmO1owIHjXmH0TRwbS6Te6l9VbT5IleKTLCUndI/v41ow5FBuzHq8Es0Uk+jH3TY+waOLOdxQuT14VVds0teic22OiXusQWZ0+SFZYJt5lmzusp58v7wTWnHNRdmDUYnljtTH6CPsLaOItvFEClu/A51Wy6KGXaP24baMcnuUB9AT8qji5mM724mzIIL3TJLcqn/ANEchO8uchs8COvDFW6vU+bxU6vovqeTgw9q9v8AnB59nikgnkhmUpJGxR1PMEcCK3Gc10AUAUBkFzxNAKTjlQGPOgH/AGGv003anT7iWQJEZDG5JwAGBXj4ZIPpWLyjhebSTilzX25NGlnszRbLI1MIFlh3gQsjR+hyPmtS003LEnJc0n/H5sZY7cnHibNMn37aFs80BrFJU2j6WD3RTHRLjAoccRBdyxXAZI98UuhtTVDrHekoCy4NT3FDxq+DNrjeXnRskoUxh164AkgXPHDsvnjdH/KrdPzKzJr3WKvE2pew2lnd3Lvux2kO+cHjgDPDzwB61DPB5dRjjXCbf0VL+TBikseKcu+q+vP2ooW4lae4lmk4vI5dvMnNemYjXQBQBQGbNjgKAxxQC8qAzggluJUigjaSRzhUUZJodSbdInsEWrtZJFqlxFDICDvD25CBjAIHDpzzWeUop2j08OiySj6XA66S4gt1hEpk7P8AebgTWLKvStHs4YbIKN3Q9HtZ7GcWhX6z2bdlnlvY4fnUI1as5lb2vb1I/b7UaxGMHSbdivsn25FOfEZq9ywJlWPQeUMkdyfHyHHS9b1rVNWitZdNt7W3jBkmkXfJxg4HE9TjpSTxODcepB6fVYMi7R2n8P6JFJOEGMjhWc0rkimtodRvVlhvTEYxuhdzKnBznmPD3Vsw+ijNqNK8vNjXtLLqa7OXse4sgnlQP9XywSJQCS2RnJbHgAvv049qXB42o0+SD5XH7FdnnVhkEoAoAoBQKAM0AlAWP9HUFlDpEtxKALiaRk7Q9FHTwqjK+aPY8nQSg50dupaZch2ktn7ZeeOv/tUtM9dcrgZ45pYZcEMjrzDDFccU1RzdQ62esNbkb5wuefSs84OJLiSHZdUsp2EkiRM/VuR99Q2koTyQVRk0je+u2sMe7Eyrnoo5n510rcXJ3J2Mep6zM5MagpnmTzqyGO+WS4iN1kt5eSYtkdx1PID1rRRzlkt0iwFiFlvJt+TH4F5D9a7RBxvgrHbi0trPaO5SzjEcThZAi8lJHED1rTF2j53WY448zUSP1IyhQBQCk0AlAFAWBsKVk0N0ZsETsB7hVGRcns+T5VjfxH0SS2r43sjzqFHqRaZvkNrepu3EanuOOI9a6SvxGq8042EUkyl57Utkgkb0fT1FQnj3coobeJN9V9jhVNPcgkyKO7H6VS8c+4LVYe8ckurC3VEgtXaRiAvADJp2UmR86jdR5HC20KKWV7q/O8zkHs8+yvDGPHlV8YUqLbqTbdjn2sUC7kCAAcsDlUqJcvqaclvac++hJsq/bp9/aW6x+6EH9I/Wr4eqfN653nkR+pGQKAKAKAKAzijeWRUjRnZjhVUZJPhQ6lZZmy+y8tjY41Nvadt/sVb8PDqR5dKom7fB7uhwSxR9LvHK40zh9xOy9yv7Q/Wqz0KQ2XAvLX8cO8v8SHeH61JMhNtJ0cst/dPpuoQumVELBmUEDBGPfxqxr0jDHPLJppTl1pjZp9q0gBDSAHpvnhU9qPH7SXiZSrLZ6rZyqXchyACxPQ1ySSRo0mR9tGx70zUL67vJTuO68lQIcgVD3T1I5pdvsfSrJFb2F3Jgy7sI8Tk1E2KSO37Ntym7K8jN/FvkY9BUQ5lZbe7OXtjfS6kD9YtJmH3ijjHwAAYenPlV8Gqo8DW4Jxm5voyH1MwhQBQBQCigLL2A0GKysV1e8TNzMPuA3+Gnf5n4edVzfcelo8PvvqSOW5DMcVUexFcGsy+NCdnPNICMVyiL6Da8Y+wbo4/Ei/mVq5+seZjdaF/P7jZBKsKjpUzyDXI5nurdv4ZV+Ncn6po0r/14/ElekFV1aTA5QqPjVfuHqS/WP/r/AGPpuByrjRpMd/J51wkmD9nLG8Uyq8bqVZWGQwPQ0OuKaplPbY6F9iaoUhybWYb8BJzgdV9Phir4uz5/VYOxnXd3DBXTMFAFAdGnQrc39tA5IWWVUOO4kChKKuSRb15OVCxoAqKMADoKpZ9DiikjjEjVE0CPKwFDjNJclc104+hqmc/YM3iE/wCtWe8eZD9C/n9yPhyxqR5THKFAqof9S/GuS6Mu03t4fEd7GVl1KUj/AC1+dQ7j1X+rfwHeNyTXDSdIcha6SRqeZq4TI3t5Etxs9JK49qCRWQ+Z3T8alHhmHyhFPFfgVjVh4YUB/9k=" alt="">
              </div>
              <div>
                <div class="text-sm">
                  <a href="#" class="font-medium text-gray-900">Jane Doe</a>
                </div>
                <div class="mt-1 text-sm text-gray-700">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                </div>
                <div class="mt-2 text-sm space-x-2">
                  <span class="text-gray-500 font-medium">1d</span>
                  <span class="text-gray-500 font-medium">Reply</span>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
</body>
</html>