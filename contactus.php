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

    <h1 class="flex-nowrap  mt-28 mb-16 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Get In</span> Touch</h1>

</div>

<!-- Container for demo purpose -->
<div class="container my-8 px-6 mx-auto">

  <!-- Section: Design Block -->
  <section class="mb-24 text-gray-800">
    <div class="flex flex-wrap">
      <div class="grow-0 shrink-0 basis-auto mb-6 md:mb-0 w-full md:w-6/12 px-3 lg:px-6">
        <h2 class="text-3xl font-bold mb-6 dark:text-white ">Contact us</h2>
        <p class="text-gray-500 mb-6 dark:text-white">
          For all inquires, please email us using the form beside.
        </p>
        <p class="text-gray-500 mb-2 dark:text-white">3Verde Sanja Mayor Tanza, Cavite, Philippines</p>
        <p class="text-gray-500 mb-2 dark:text-white">+ 63 46 238-3329</p>
        <p class="text-gray-500 mb-2 dark:text-white">healinggaling2020@yahoo.com   /  healinggaling2020@arviedirectsales.net</p>

        <div class="mt-4">
        <a href="https://www.facebook.com/arviedirectsales2021"><i class="fa-brands fa-facebook  text-4xl mr-4 dark:text-white"></i></a>
        <a href="mailto:healinggaling2020@yahoo.com"><i class="fa-regular fa-envelope text-4xl mr-4 dark:text-white"></i></a>
        <a href="tel:0462383329"><i class="fa-solid fa-phone text-4xl mr-4 dark:text-white"></i></a>

        </div>
      
    
      
      </div>
      <div class="grow-0 shrink-0 basis-auto mb-12 md:mb-0 w-full md:w-6/12 px-3 lg:px-6">
        <form  method="POST" action="send-email.php" enctype="multipart/form-data">
          <div class="form-group mb-6">
            <input type="text" name="name" class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="name"
              for="name" placeholder="Name" required>
          </div>
          <div class="form-group mb-6">
            <input type="email" name="email" class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="email"
              for="email" placeholder="Email address" required>
          </div>

          <div class="form-group mb-6">
            <input type="text" name="contact" class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="contact"
              for="contact" placeholder="Contact No."required>
          </div>
          <div class="form-group mb-6">
            <textarea name="message" class="
              form-control
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
            "for="message" id="message" rows="3" placeholder="Message" required></textarea>
          </div>
          
          <button type="submit" class="
            w-full
            px-6
            py-2.5
            bg-blue-600
            text-white
            font-medium
            text-xs
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-blue-800 active:shadow-lg
            transition
            duration-150
            ease-in-out">Send</button>
        </form>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->

</div>
<!-- Container for demo purpose -->

<!-- <div class="  flex mt-6   left-10 right-5    flex flex-col  px-14 sm:px-14  pt-2 pb-14 z-50 "> -->








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

var activepage = document.getElementById("5contact");
activepage.classList.remove("text-gray-700");
activepage.classList.add("text-white");
activepage.classList.remove("dark:text-gray-400");
activepage.classList.add("dark:text-white");

</script>

</body>
</html>