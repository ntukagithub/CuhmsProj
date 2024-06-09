<x-app-layout>
<link rel="stylesheet" href="{{asset('fontawesome-free-6.3.0-web/css/all.min.css')}}">

<div id="borderAnimation" class="w-[1000px] border border-gray-600 mx-auto mt-5 p-4 py-10 rounded relative">
  <h1 class="text-center pt-3 text-3xl font-extrabold text-yellow-500 animate-bounce">OUR CLINICAL MEDICINE HUB</h1>
  <div class="max-w-[900px] mx-auto flex items-center gap-5 mt-4 text-gray-400 pt-2 pb-5 text-1xl text-center">
  Welcome to the Career Unit Management System. This platform is designed to support your career growth and development. Utilize our tools to set career goals, track progress, and collaborate with peers. Stay updated with the latest career opportunities and resources. Together, we can achieve excellence and drive success in your professional journey.
  </div>
</div>


<div class=" w-[1000px] mx-auto text-center text-2xl mt-5 font-extrabold ">THE MAIN TOOLS FOR OUR HUB</div>
<div class="w-[1000px] mx-auto flex   items-center gap-5 mt-[20px] text-white ">
<a href="{{ url('chatify') }}" >
  <div class="border border-gray-600  w-[230px] rounded-lg  hover:bg-gray-600 hover:text-white  hover:font-bold hover:cursor-pointer duration-300  h-[230px] flex flex-col justify-center " > <i class="fa-regular fa-message  text-yellow-500 hover:text-yellow-500 text-center text-3xl "></i><div class="text-center text-2xl pt-3  text-yellow-500">Chat Now</div></div>
</a>

<a href="{{route('clinical_medicineposts')}}" >
  <div class="border border-gray-600  w-[230px] rounded-lg  hover:bg-gray-600 hover:text-white  hover:font-bold hover:cursor-pointer duration-300  h-[230px] flex flex-col justify-center " > <i class="fa-solid fa-bullhorn  text-yellow-500 hover:text-yellow-500 text-center text-3xl "></i><div class="text-center text-2xl pt-3 font-extralight text-yellow-500">Posts</div></div>
</a>

<a href="{{route('clinical_medicineqn')}}" >
  <div class="border border-gray-600  w-[230px] rounded-lg  hover:bg-gray-600 hover:text-white  hover:font-bold hover:cursor-pointer duration-300  h-[230px] flex flex-col justify-center " > <i class="fa-solid fa-circle-question  text-yellow-500 hover:text-yellow-500 text-center text-3xl "></i><div class="text-center text-2xl pt-3 text-yellow-500 font-extralight">Ask Me</div></div>
</a>

<a href="{{ route('collaboration') }}" >
  <div class="border border-gray-600  w-[230px] rounded-lg  hover:bg-gray-600 hover:text-white  hover:font-bold hover:cursor-pointer duration-300  h-[230px] flex flex-col justify-center " > <i class="fa-regular fa-message  text-yellow-500 hover:text-yellow-500 text-center text-3xl "></i><div class="text-center text-2xl pt-2 p-3 text-yellow-500 font-extralight">Careers Collaboration</div></div>
</a>

</div>


</x-app-layout>









