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

    <h1 class="flex-nowrap  mt-28 mb-16 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Who  </span> We Are</h1>

    </div>


    <!-- Container for demo purpose -->
<div class="container my-6 px-6 mx-auto">

<!-- Section: Design Block -->
<section class="mb-18 text-gray-800 text-center lg:text-left">
  <style>
    @media (min-width: 992px) {
      .rotate-lg-6 {
        transform: rotate(6deg);
      }
    }

    /* These are the KEY styles - you can add them directly to any object you want in your project */
    .fancy-border-radius {
      border-radius: 53% 47% 52% 48% / 36% 41% 59% 64%;
    }
  </style>

  <!-- Jumbotron -->
  <div class="container mx-auto xl:px-20 text-center lg:text-left">
    <div class="grid lg:grid-cols-2 flex items-center">
      <div class="mb-6 lg:mb-0">
        <div
          class="relative block rounded-lg shadow-lg px-6 py-12 md:px-12 lg:-mr-14"
          style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px); z-index: 1"
        >
          <h1 class="text-4xl font-bold mb-3 display-5">MR. ARMIL LUMOGDANG</h1>
          <h3 class="mb-4 text-2xl font-bold tracking-tight leading-none text-gray-900 md:text-4xl lg:text-4xl dark:text-white">CEO : <span class="text-blue-600 dark:text-blue-500 italic">Arvie Cosmetics & Skincare Products Traiding</span> </h3>
          
          <p class="text-2xl text-gray-500 mb-12">
          Lets make your dreams come true!
          <!-- We know each day is important try our essential product that surely good for your health from coffee to beauty product
         with affordable price that fit your life and your budget.  -->
          </p>

          
<a href="contactus.php" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Contact Us</a>

          
        </div>
      </div>

      <div>
        <img
          src="resources/img/ceo1.png"
          class="w-full shadow-lg fancy-border-radius rotate-lg-6"
          alt=""
        />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->





</div>
<!-- Container for demo purpose -->



<!-- </div>  -->
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

var activepage = document.getElementById("2about");
activepage.classList.remove("text-gray-700");
activepage.classList.add("text-white");
activepage.classList.remove("dark:text-gray-400");
activepage.classList.add("dark:text-white");

</script>




</body>
</html>