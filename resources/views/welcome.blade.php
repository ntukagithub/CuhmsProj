<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap">
    @livewireStyles

</head>

<body class=" text-gray-300 bg-gray-900 " >
  <video autoplay loop muted playinline class="absolute w-full opacity-15 h-[100vh] object-cover z-[-1]  ">
    <source src="photos/bgvideo.mp4" type="video/mp4" >
  </video>
  
<nav class=" bg-yellow-500 w-full h-[8.5vh]">
    <div class="flex gap-3 ml-7 pt-2">
        <img src="photos/careerlogo.png" alt="cuhms logo" class="w-[50px] ">
        <div class=" text-gray-900 font-extrabold text-3xl ">CUHMS</div>
    </div>

    @if (Route::has('login'))
                <div class="absolute top-2 right-7 flex gap-3">
                    @auth
                       
                    @else
                        <a href="{{ route('login') }}" class="bg-gray-900 py-1.5 px-2 rounded w-[100px]  text-center hover:bg-gray-700 hover:ease-in-out duration-500" >Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-gray-900 py-1.5 px-2 rounded w-[100px] text-center hover:bg-gray-700 hover:ease-in-out duration-500" >Register</a>
                        @endif
                    @endauth
                </div>
            @endif
</nav>



<div class="max-w-[1000px] mx-auto mt-[170px] ">
    <div class="width-full  text-3xl">
        <b class="text-yellow-500">CUHMS:</b><b id="auto" class="pl-3 text-gray-300 font-bold pt-1"></b>
    </div>

    <div class="w-full mt-[10px] text-center ">
       <!-- <div class="tex-xl font-bold"></div> -->
       
      <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
       <script>
        var typed = new Typed('#auto', {
        strings: ['CAREER UNIT HUB MANAGEMENT SYSTEM👊','WE KNOW THAT YOU ARE A JOB SEEKER😯','AND THE WAY OF GETTING JOB IS VERY COMPLICATED😩','SO WE AIM TO SIMPLIFY YOUR JOB SEARCHING PROCESS','LETUS MAKE "CUHMS" AS EMPLOYEMNT FOUNDATION👊','YOU ARE WELCOME🤷‍♂️'],
        typeSpeed: 70,
        backSpeed: 30,
        loop: true,
    });
  </script>
  <div class="">
      <span class="text-1xl leading-7">A career unit management system is designed to streamline the process of career development and management for the graduates. It allows for efficient tracking of employee progress, skill development, and performance evaluations. This system provides tools for setting career goals, planning career paths, and aligning graduates objectives after finishing their univesities or colleges.   </span>
    </div>

    
    </div>


</div>

<div class="max-w-[900px] flex flex-col mx-auto">
  <a href="{{route('register')}}" class="border border-yellow-500  hover:animate-none text-gray-300 text-center  px-2 rounded py-2 w-[200px] mx-auto font-bold mt-7 hover:bg-yellow-500 hover:cursor-pointer  hover:ease-in duration-300 hover:text-gray-900">
<button>Get Started</button>
</a>
</div>


<div class="absolute bottom-2  text-gray-600 ml-[43%] opacity-70">Created by cuhms Team@2024</div>


<!-- <script>
    window.onpopstate = function() {
        Livewire.emit('welc', 'refreshWelcome');
    };
</script> -->
 <!-- <livewire:welcomee/> -->
<!-- <script>
let refreshed = false; // Flag to track if refresh has happened

function refreshPage() {
  if (!refreshed) { // Check if refreshed flag is false
    setTimeout(function() {
      location.reload();
      refreshed = true; // Set flag to true after reload
    }, 5000); // Refresh after 5 seconds (adjust as needed)
  }
} 

refreshPage(); // Call the refresh function on page load
</script> --> 

<script>
  function refreshOnce() {
    location.reload(); // Reload the page
    window.removeEventListener('click', refreshOnce); // Remove the event listener after the first click
  }

  window.addEventListener('click', refreshOnce);
</script>
@livewireScripts
</body>
</html>