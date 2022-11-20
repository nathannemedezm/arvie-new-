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




<div class="  flex mt-6   left-10 right-5    flex flex-col  px-14 sm:px-14  pt-2 pb-14 z-50 ">

<div class="container py-0"> 

    <h1 class="flex-nowrap  mt-16 mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Customers</span> Feedback</h1>
<!-- <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">What our customer  are saying.</p> -->
    </div>


<div class="container py-0">

<img class="mr-4 mb-8 max-w-lg h-auto rounded-lg transition-all duration-300 blur-sm hover:blur-none" src="resources/img/feedback/feed1.jpg" >
<img class="mr-4 mb-8 max-w-lg h-auto rounded-lg transition-all duration-300 blur-sm hover:blur-none" src="resources/img/feedback/feed2.jpg" >

<img class="mr-4 mb-8 max-w-lg h-auto rounded-lg transition-all duration-300 blur-sm hover:blur-none" src="resources/img/feedback/feed3.jpg" >
<img class="mr-4 mb-8 max-w-lg h-auto rounded-lg transition-all duration-300 blur-sm hover:blur-none" src="resources/img/feedback/feed4.jpg" >
<img class="mr-4 mb-8 max-w-lg h-auto rounded-lg transition-all duration-300 blur-sm hover:blur-none" src="resources/img/feedback/feed5.jpg" >
<img class="mr-4 mb-8 max-w-lg h-auto rounded-lg transition-all duration-300 blur-sm hover:blur-none" src="resources/img/feedback/feed6.jpg" >
<img class="mr-4 mb-8 max-w-lg h-auto rounded-lg transition-all duration-300 blur-sm hover:blur-none" src="resources/img/feedback/feed7.jpg" >
<img class="mr-4 mb-8 max-w-lg h-auto rounded-lg transition-all duration-300 blur-sm hover:blur-none" src="resources/img/feedback/feed8.jpg" >
<img class="mr-4 mb-8 max-w-lg h-auto rounded-lg transition-all duration-300 blur-sm hover:blur-none" src="resources/img/feedback/feed9.jpg" >
<img class="mr-4 mb-8 max-w-lg h-auto rounded-lg transition-all duration-300 blur-sm hover:blur-none" src="resources/img/feedback/feed10.jpg" >
<img class="mr-4 mb-8 max-w-lg h-auto rounded-lg transition-all duration-300 blur-sm hover:blur-none" src="resources/img/feedback/feed11.jpg" >
<img class="mr-4 mb-8 max-w-lg h-auto rounded-lg transition-all duration-300 blur-sm hover:blur-none" src="resources/img/feedback/feed12.jpg" >
<img class="mr-4 mb-8 max-w-lg h-auto rounded-lg transition-all duration-300 blur-sm hover:blur-none" src="resources/img/feedback/feed13.jpg" >
<img class="mr-4 mb-8 max-w-lg h-auto rounded-lg transition-all duration-300 blur-sm hover:blur-none" src="resources/img/feedback/feed14.jpg" >
<img class="mr-4 mb-8 max-w-lg h-auto rounded-lg transition-all duration-300 blur-sm hover:blur-none" src="resources/img/feedback/feed15.jpg" >
<img class="mr-4 mb-8 max-w-lg h-auto rounded-lg transition-all duration-300 blur-sm hover:blur-none" src="resources/img/feedback/feed16.jpg" >
<img class="mr-4 mb-8 max-w-lg h-auto rounded-lg transition-all duration-300 blur-sm hover:blur-none" src="resources/img/feedback/feed17.jpg" >
<img class="mr-4 mb-8 max-w-lg h-auto rounded-lg transition-all duration-300 blur-sm hover:blur-none" src="resources/img/feedback/feed18.jpg" >
<img class="mr-4 mb-8 max-w-lg h-auto rounded-lg transition-all duration-300 blur-sm hover:blur-none" src="resources/img/feedback/feed19.jpg" >
<img class="mr-4 mb-8 max-w-lg h-auto rounded-lg transition-all duration-300 blur-sm hover:blur-none" src="resources/img/feedback/feed20.jpg" >










   
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

var activepage = document.getElementById("4testimonial");
activepage.classList.remove("text-gray-700");
activepage.classList.add("text-white");
activepage.classList.remove("dark:text-gray-400");
activepage.classList.add("dark:text-white");

</script>

</body>
</html>