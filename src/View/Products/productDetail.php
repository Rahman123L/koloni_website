<section class="bg-white dark:bg-gray-800">
    <div class="container px-6 py-10 mx-auto">
        <div class="lg:-mx-6 lg:flex lg:items-center">
        
            <img class="lg:w-1/2 lg:mx-6 w-full h-96 rounded-lg lg:h-[25rem] dark:bg-gray-700" src="<?= $model['product']['image']; ?>" alt="">

            <div class="mt-8 lg:w-1/2 lg:px-6 lg:mt-0">

                <h1 class="text-2xl font-semibold text-gray-800 dark:text-white lg:text-3xl lg:w-96">
                    <?= $model['product']['title']; ?>
                </h1>

                <p class="max-w-lg mt-6 text-gray-500 dark:text-gray-400 ">
                <?= $model['product']['description']; ?>
                </p>
                
                <div class="flex">
                    <button class="mx-6 my-6 px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80 ">
                    <i class="bi bi-cart-check not-italic"> Tambah Keranjang</i>
                    </button>
                    <button class="mx-6 my-6 px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80 ">
                    <i class="bi bi-cash not-italic"> Beli</i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>