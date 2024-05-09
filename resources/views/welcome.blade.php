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
<body class="bg-gray-800 text-white  bg-[url('photos/people.jpg')] bg-cover bg-blend-multiply " >
<nav class=" bg-white w-full h-[8.5vh]">
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

<div class="max-w-[800px] mx-auto mt-[170px]">
    <div class="width-full  text-3xl">
        <b class="text-yellow-500">CUHMS:</b><b id="auto" class="pl-3 text-white font-bold pt-1"></b>
    </div>

    <div class="w-full mt-[10px]">
       <!-- <div class="tex-xl font-bold"></div> -->
       <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
       <script>
        var typed = new Typed('#auto', {
        strings: ['CAREER UNIT HUB MANAGEMENT SYSTEM👊','WE KNOW THAT YOU ARE A JOB SEEKER😯','AND THE WAY OF GETTING JOB IS VERY COMPLICATED TO THE MOST GRADUATES😩','SO WE AIM TO SIMPLIFY YOUR JOB SEARCHING PROCESS','SO TOGETHER WE SAY THAT CAREER HUB IS EMPLOYEMNT FOUNDATION👊'],
        typeSpeed: 70,
        backSpeed: 30,
        loop: true,
    });
  </script>
      <span class="text-1xl leading-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam est 
        quos porro, aut magni, voluptatum dicta incidunt, minus ad tenetur impedit 
        quasi deserunt totam facere sit! Nemo quia quas aperiam!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Lorem ipsum dolor sit amet consectetur adipisicing elit.  
      </span>
    </div>


   
    <button class="bg-yellow-400 text-gray-900 text-center px-2 rounded py-2 w-[150px] font-bold mt-8 hover:bg-slate-500 hover:cursor-pointer hover:ease-in duration-300 hover:text-white">About US</button>
    
    
</div>




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