<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARVIEDIRECTSALES: Product</title>


    
    <!-- font awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" /> -->
    <link rel="stylesheet" href="./fontawesome-free-6.2.0-web/css/all.min.css">
  
     <!-- tailwind play cdn -->
    <script src="https://cdn.tailwindcss.com"></script>

     <!-- from flowbite cdn -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />


    <!-- browser logo -->
    <link rel="shortcut icon" href="resources/img/logo.JPG">
    <link rel="stylesheet" href="css/style.css" />



    
    <link rel="stylesheet" href="style.css">

    <!-- darkmode -->
    <script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>



</head>
<body  onload=navFuntion() class="static  bg-white dark:bg-gray-900"  >

    <!-- nav -->
    <?php require_once 'nav.php';?>


<!-- main -->


<div class="container py-0">

    <h1 class="flex-nowrap  mt-28 mb-16 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Product </span> Gallery</h1>

    </div>



    
<!-- Container for demo purpose -->
<div class="container my-18px-6 mx-auto">

<!-- Section: Design Block -->
<section class="mb-32 text-gray-800 ">
  <h2 class="text-3xl font-bold text-center mb-12 dark:-white">Membership Package</h2>

  <div class="grid lg:grid-cols-3 gap-6 lg:gap-x-12">
    <div class="mb-6 lg:mb-0">
      <div class="block rounded-lg shadow-lg bg-white h-full">
        <div class="p-6 border-b border-gray-300 text-center">
          <p class="uppercase mb-4 text-sm">
            <strong>Basic </strong>
          </p>
          <h3 class="text-2xl mb-6">
            <strong>Php 2,000.00</strong>
            <!-- <small class="text-gray-500 text-sm">/year</small> -->
          </h3>

          <a type="text"
            class="inline-block px-6 py-2.5 bg-emerald-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full"
            data-mdb-ripple="true" data-ripple-color="light">
            Business Package
          </a>
        </div>
        <div class="p-6">
          <ol class="list-inside">
         
    <img class="max-w-s h-auto rounded-lg transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0" src="resources/img/package/business.jpg">

          </ol>
        </div>
      </div>
    </div>



    <div class="mb-6 lg:mb-0">
      <div class="block rounded-lg shadow-lg bg-white h-full">
        <div class="p-6 border-b border-gray-300 text-center">
          <p class="uppercase mb-4 text-sm">
            <strong>Advanced</strong>
          </p>
          <h3 class="text-2xl mb-6">
            <strong>Php 25,000.00</strong>
           
          </h3>
          <a type="text"
            class="inline-block px-6 py-2.5 bg-emerald-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-cyan-400 hover:shadow-lg focus:bg-cyan-400 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-cyan-400 active:shadow-lg transition duration-150 ease-in-out w-full"
            data-mdb-ripple="true" data-ripple-color="light">
            Barangay Stockies
          </a>
        </div>
        <div class="p-6">
          <ol class="list-inside">
           
          <img class="max-w-s h-auto rounded-lg transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0" src="resources/img/package/brgy.jpg">
          </ol>
        </div>
      </div>
    </div>

    <div class="mb-6 lg:mb-0">
      <div class="block rounded-lg shadow-lg bg-white h-full">
        <div class="p-6 border-b border-gray-300 text-center">
          <p class="uppercase mb-4 text-sm">
            <strong>Enterprise</strong>
          </p>
          <h3 class="text-2xl mb-6">
            <strong>Php 50,000.00</strong>
           
          </h3>
          <a type="text"
            class="inline-block px-6 py-2.5 bg-emerald-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-yellow-600 hover:shadow-lg focus:bg-yellow-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-600 active:shadow-lg transition duration-150 ease-in-out w-full"
            data-mdb-ripple="true" data-ripple-color="light">
            City Stockies
          </a>
        </div>
        <div class="p-6">
          <ol class="list-inside">
          <img class="max-w-s h-auto rounded-lg transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0" src="resources/img/package/city.jpg">
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

</div>
<!-- Container for demo purpose -->




<div class="container py-2 mb-2">

<div class="bg-white mb-16">
  <div class="mx-auto max-w-2xl py-2 px-4 sm:py-0 sm:px-6 lg:max-w-7xl lg:px-8">
    <!-- <h2 class="sr-only">Products</h2> -->

    <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      <!-- <a href="#" class="group"> -->
        
      <a  class="group">

        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
          <img src="resources/img/product/kapenato.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <!-- <h3 class="mt-4 text-sm text-gray-700">Earthen Bottle</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$48</p> -->
      </a>

      <a class="group">
        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
          <img src="resources/img/product/glutamansi.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <!-- <h3 class="mt-4 text-sm text-gray-700">Nomad Tumbler</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$35</p> -->
      </a>

      <a  class="group">
        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
          <img src="resources/img/product/oisa.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <!-- <h3 class="mt-4 text-sm text-gray-700">Focus Paper Refill</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$89</p> -->
      </a>

      <a  class="group">
        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
          <img src="resources/img/product/tomato.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <!-- <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$35</p> -->
      </a>

      <a  class="group">
        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
          <img src="resources/img/product/botanical.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <!-- <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$35</p> -->
      </a>

      <a  class="group">
        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
          <img src="resources/img/product/moringa.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <!-- <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$35</p> -->
      </a>


      <a  class="group">
        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
          <img src="resources/img/product/shuya.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <!-- <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$35</p> -->
      </a>

      <a  class="group">
        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
          <img src="resources/img/product/beautyset.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <!-- <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$35</p> -->
      </a>


      <a class="group">
        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
          <img src="resources/img/product/tea.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>

        <a class="group">
        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
          <img src="resources/img/product/kapenato1.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <!-- <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$35</p> -->
      </a>

      <!-- More products... -->
    </div>
  </div>
</div>




</div>





















</div> 



<!-- end of main -->
    

<!-- flowbite javascript -->
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>


<!-- darkmode script -->
<script>  
var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

    // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }
    
});





// Script for active page in nav

var activepage = document.getElementById("3product");
activepage.classList.remove("text-gray-700");
activepage.classList.add("text-white");
activepage.classList.remove("dark:text-gray-400");
activepage.classList.add("dark:text-white");

</script>

</body>
</html>