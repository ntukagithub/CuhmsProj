
<x-app-layout>
<link rel="stylesheet" href="{{asset('fontawesome-free-6.3.0-web/css/all.min.css')}}">

<h1 class="text-white text-center py-2 text-xl font-bold">WELCOME TO OUR IT DASHBOARD</h1>
<div class="max-w-[600px] mx-auto flex  items-center gap-5 mt-4 text-white">
<a href="{{ url('chatify') }}" class="border border-yellow-500 py-2 px-5 w-[220px] rounded-lg text-center hover:bg-yellow-500 hover:text-white  hover:font-bold hover:cursor-pointer duration-300 "><div > <i class="fa-regular fa-message pr-2 text-white hover:text-gray-900 "></i>Chat Now</div></a>
  <a href="{{route('posts')}}"> <div class="border border-yellow-500 py-2 px-5 w-[170px] rounded-lg text-center hover:bg-yellow-500 hover:text-white hover:font-bold hover:cursor-pointer duration-300">  <i class="fa-solid fa-bullhorn pr-2 text-white hover:text-gray-900 "></i>Posts</div></a>
  <a href="{{route('itqn')}}"><div class="border border-yellow-500 py-2 px-5 w-[170px] rounded-lg text-center hover:bg-yellow-500 hover:text-white hover:font-bold hover:cursor-pointer duration-300"> <i class="fa-solid fa-circle-question pr-2 text-white hover:text-gray-900 "></i>Ask Me</div></a>
</div>  



<!-- <div class=" text-white mt-6 max-w-[700] mx-auto  gap-5">
    <livewire:button />
</div> -->



<div class=" max-w-[680px] grid grid-cols-3 mx-auto mt-5 gap-5 overflow-hidden ">
<div class="card w-[210px] h-[210px] bg-white text-primary-content hover:scale-105 duration-300 hover:cursor-pointer ">
  <div class="card-body">
  <div class="card-actions justify-end  mt-[-20px]">
      <button class="btn w-[80px] h-[80px] mx-auto rounded-full">Enroll</button>
    </div>
    <h2 class="card-title">Card title!</h2>
    <p>If a dog chews shoes whose shoes does he choose?</p>
    
  </div>
</div>

<div class="card w-[210px] h-[210px] bg-white text-primary-content hover:scale-105 duration-300 hover:cursor-pointer ">
  <div class="card-body">
  <div class="card-actions justify-end mt-[-20px]">
      <button class="btn w-[80px] h-[80px] mx-auto rounded-full">Buy Now</button>
    </div>
    <h2 class="card-title">Card title!</h2>
    <p>If a dog chews shoes whose shoes does he choose?</p>
    
  </div>
</div>

<div class="card w-[210px] h-[210px] bg-white text-primary-content hover:scale-105 duration-300 hover:cursor-pointer">
  <div class="card-body">
  <div class="card-actions justify-end mt-[-20px]">
      <button class="btn w-[80px] h-[80px] mx-auto rounded-full">Buy Now</button> 
    </div>
    <h2 class="card-title">Card title!</h2>
    <p>If a dog chews shoes whose shoes does he choose?</p>
    
  </div>
</div>

<div class="card w-[210px] h-[210px] bg-white text-primary-content hover:scale-105 duration-300 hover:cursor-pointer">
  <div class="card-body">
  <div class="card-actions justify-end mt-[-20px]">
      <button class="btn w-[80px] h-[80px] mx-auto rounded-full">Buy Now</button>
    </div>
    <h2 class="card-title">Card title!</h2>
    <p>If a dog chews shoes whose shoes does he choose?</p>
    
  </div>
</div>

<div class="card w-[210px] h-[210px] bg-white text-primary-content hover:scale-105 duration-300 hover:cursor-pointer">
  <div class="card-body">
  <div class="card-actions justify-end mt-[-20px]">
      <button class="btn w-[80px] h-[80px] mx-auto rounded-full">Buy Now</button>
    </div>
    <h2 class="card-title">Card title!</h2>
    <p>If a dog chews shoes whose shoes does he choose?</p>
    
  </div>
</div>

<div class="card w-[210px] h-[210px]  text-primary-content bg-white hover:scale-105 duration-300 hover:cursor-pointer">
  <div class="card-body">
  <div class="card-actions justify-end mt-[-20px]">
      <button class="btn w-[80px] h-[80px] mx-auto rounded-full">Buy Now</button>
    </div>
    <h2 class="card-title">Card title!</h2>
    <p>If a dog chews shoes whose shoes does he choose?</p>
   
  </div>
</div>

</div>

</x-app-layout>






