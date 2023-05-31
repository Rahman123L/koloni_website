<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer=""></script>
    <title><?php echo $model['title']; ?></title>
</head>
<body>
<!-- Navbar -->
<nav x-data="{ isOpen: false }" class="relative bg-white shadow dark:bg-gray-800">
    <div class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">
            <a href="/">
                <img class="w-auto h-6 sm:h-7" src="images/logo.png">
            </a>

            <!-- Mobile Menu -->
            <div class="flex lg:hidden">
                <button x-cloak @click="isOpen = !isOpen" type="button"
                        class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                        aria-label="toggle menu">
                    <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16"/>
                    </svg>

                    <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile Menu Open -->
        <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
             class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-gray-800 md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center">
            <div class="flex flex-col md:flex-row md:mx-6">
                <a class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0"
                   href="/">Home</a>
                   <div x-data="{ isOpen: true }" class="relative inline-block ">

                <!-- Dropdown toggle button -->
                <a>
                <button @click="isOpen = !isOpen" class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0">
                    <span class="mx-1">Product</span>
                </button>

                <!-- Dropdown menu -->
                <div x-show="!isOpen" 
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90"
                    class="absolute right-0 z-20 w-56 py-2 mt-2 overflow-hidden origin-top-right bg-white rounded-md shadow-xl dark:bg-gray-800">

                    <a href="/products" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="mx-1">
                            Baju
                        </span>
                    </a>

                    <a href="#" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="mx-1">
                            Elektronik
                        </span>
                    </a>

                    <a href="#" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="mx-1">
                            Olahraga
                        </span>
                    </a>

                    <a href="#" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="mx-1">
                            Percetakan
                        </span>
                    </a>
                </div>
                </div>
                </a>
                <a class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0"
                   href="#">Information</a>
                <a class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0"
                   href="#">Contact</a>
                <a class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0"
                   href="#">Gallery</a>
                <div class="flex justify-center md:block">
                    <a class="relative text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-300"
                    href="#">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 3H5L5.4 5M7 13H17L21 5H5.4M7 13L5.4 5M7 13L4.70711 15.2929C4.07714 15.9229 4.52331 17 5.41421 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM9 19C9 20.1046 8.10457 21 7 21C5.89543 21 5 20.1046 5 19C5 17.8954 5.89543 17 7 17C8.10457 17 9 17.8954 9 19Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="absolute top-0 left-0 p-1 text-xs text-white bg-blue-500 rounded-full"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Hero -->

<!-- Feature -->
<div class="dark:bg-gray-800">
<br>
<p class="title-font sm:text-2xl text-2xl mb-4 font-medium text-white text-center">Baju</p>
<br>
<div class="flex md:flex-row flex-col items-center max-w-6xl m-auto">
    <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-600 m-auto">
        <div class="px-4 py-2">
            <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">-</h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
        </div>

        <div class="px-2 bg-gray-700 py-2 m-2 rounded-md">
        <img class="object-cover w-full h-48 mt-2" src="images/category-3.png">
        </div>

        <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
            <h1 class="text-lg font-bold text-white">Rp. 25.000</h1>
            <a href="#">
            <button class="px-2 py-2 text-xs font-semibold text-white uppercase transition-colors duration-300 transform bg-blue-500 rounded hover:bg-blue-600 focus:bg-gray-400 focus:outline-none">Detail</button>
            </a>
        </div>
    </div>
    <br><br>
    <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-600 m-auto">
        <div class="px-4 py-2">
            <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">-</h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
        </div>

        <div class="px-2 bg-gray-700 py-2 m-2 rounded-md">
        <img class="object-cover w-full h-48 mt-2" src="images/category-4.png">
        </div>

        <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
            <h1 class="text-lg font-bold text-white">Rp. 25.000</h1>
            <a href="#">
            <button class="px-2 py-2 text-xs font-semibold text-white uppercase transition-colors duration-300 transform bg-blue-500 rounded hover:bg-blue-600 focus:bg-gray-400 focus:outline-none">Detail</button>
            </a>
        </div>
    </div>
    <br><br>
    <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-600 m-auto">
        <div class="px-4 py-2">
            <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">-</h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
        </div>

        <div class="px-2 bg-gray-700 py-2 m-2 rounded-md">
        <img class="object-cover w-full h-48 mt-2" src="images/category-5.png">
        </div>

        <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
            <h1 class="text-lg font-bold text-white">Rp. 25.000</h1>
            <a href="#">
            <button class="px-2 py-2 text-xs font-semibold text-white uppercase transition-colors duration-300 transform bg-blue-500 rounded hover:bg-blue-600 focus:bg-gray-400 focus:outline-none">Detail</button>
            </a>
        </div>
    </div>
</div>
<br><br>  
</div>

<div class="dark:bg-gray-800">
<div class="flex md:flex-row flex-col items-center max-w-6xl m-auto">
    <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-600 m-auto">
        <div class="px-4 py-2">
            <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">-</h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
        </div>

        <div class="px-2 bg-gray-700 py-2 m-2 rounded-md">
        <img class="object-cover w-full h-48 mt-2" src="images/category-3.png">
        </div>

        <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
            <h1 class="text-lg font-bold text-white">Rp. 25.000</h1>
            <a href="#">
            <button class="px-2 py-2 text-xs font-semibold text-white uppercase transition-colors duration-300 transform bg-blue-500 rounded hover:bg-blue-600 focus:bg-gray-400 focus:outline-none">Detail</button>
            </a>
        </div>
    </div>
    <br><br>
    <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-600 m-auto">
        <div class="px-4 py-2">
            <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">-</h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
        </div>

        <div class="px-2 bg-gray-700 py-2 m-2 rounded-md">
        <img class="object-cover w-full h-48 mt-2" src="images/category-4.png">
        </div>

        <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
            <h1 class="text-lg font-bold text-white">Rp. 25.000</h1>
            <a href="#">
            <button class="px-2 py-2 text-xs font-semibold text-white uppercase transition-colors duration-300 transform bg-blue-500 rounded hover:bg-blue-600 focus:bg-gray-400 focus:outline-none">Detail</button>
            </a>
        </div>
    </div>
    <br><br>
    <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-600 m-auto">
        <div class="px-4 py-2">
            <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">-</h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
        </div>

        <div class="px-2 bg-gray-700 py-2 m-2 rounded-md">
        <img class="object-cover w-full h-48 mt-2" src="images/category-5.png">
        </div>

        <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
            <h1 class="text-lg font-bold text-white">Rp. 25.000</h1>
            <a href="#">
            <button class="px-2 py-2 text-xs font-semibold text-white uppercase transition-colors duration-300 transform bg-blue-500 rounded hover:bg-blue-600 focus:bg-gray-400 focus:outline-none">Detail</button>
            </a>
        </div>
    </div>
</div>
<br><br>  
</div>

<!-- Footer -->
<footer class="text-gray-400 bg-gray-900 body-font">
  <div class="container px-1 py-20 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
    <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3 text-xl">#SuksesJamaah</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-400 hover:text-white">NIB : 0504220013194</a>
          </li>
          <li>
            <a class="text-gray-400 hover:text-white">sekawanabadilestari@gmail.com</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 m-auto flex md:block lg:block justify-center md:w-1/2 w-full px-4">
        <nav class="list-none mb-10">
            <a><img src="images/image3.png" width="140px"></a>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3 text-lg">NPWP : 63.796.154.1-116.00</h2>
      </div>
      <div class="lg:w-1/4 m-auto flex md:block lg:block justify-center md:w-1/2 w-full px-4">
        <nav class="list-none mb-10 text-center">
            <a><img class="" src="images/logo-bpjs.png" width="200px"></a>
            <li>
                <a class="text-gray-400 hover:text-white mx-1">220000001291860</a>
            </li>
        </nav>
      </div>
    </div>
  </div>
  <div class="bg-gray-800 bg-opacity-75">
    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
        <p class="text-gray-400 text-sm text-center sm:text-left">Copyright 2023 - sekawanabadilestari
            <a href="#" rel="noopener noreferrer" class="text-gray-500 ml-1" target="_blank"></a>
        </p>
        </div>
    </div>
</footer>
</body>
</html>