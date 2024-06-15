<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>it</title>
  <link rel="stylesheet" href="{{asset('fontawesome-free-6.3.0-web/css/all.min.css')}}">
  <script src="https://cdn.tailwindcss.com"></script>
  @livewireStyles
  
</head>
<body >
<x-app-layout>
<div class="border  border-gray-600 py-2 px-5 w-[120px] absolute ml-[240px] mt-[20px] rounded-lg text-center hover:bg-gray-600 hover:text-white  hover:font-bold hover:cursor-pointer duration-300 "> <a href="{{route('dashboard')}}"><i class="fa-solid fa-house pr-2 text-white hover:text-white "></i>Home</a></div>
  <div>
  <div class="text-white max-w-[500px] mx-auto font-black  text-1xl text-center pt-1 border border-gray-600 mt-1 rounded-t-lg">Graduates Network</div>
   <div class=" max-w-[500px] h-[78vh] mx-auto border border-gray-600 overflow-scroll overflow-x-hidden overflow-y-auto  mt-0  ">
     


   
   @foreach($data as $data)
    <div class="flex ml-14">
      <div class="bg-white w-[40px] h-[40px] mt-3 ml-2 rounded-full overflow-hidden"> <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" /></div>
   <div class="border border-gray-600 w-[350px]  p-4 mt-3 ml-3 rounded-xl text-gray-300"> {{$data->content}}</div>
   </div>
   @endforeach


   @foreach ($inf as $inf )
   <div class="flex ml-[105px] flex-col mt-3 ">
   <div class="p-1 w-[350px] ml-3 bg-red-600 text-center text-white rounded-t-lg">From Admin</div>
   <div class="border border-red-600 w-[350px]  p-4 ml-3 rounded-b-xl text-gray-300"> 
    
    {{$inf->content}}
  </div>
   </div>
   @endforeach




   
   <!-- <div class="flex ml-7"> 
   <div class="bg-white w-[40px] h-[40px] mt-2 ml-2 rounded-full overflow-hidden"> <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" /></div>
   <div class="bg-white w-[350px]  p-4 mt-1.5 ml-3 rounded-xl text-gray-900"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum odit joelntuka500@gmai Laborum odit joelntuka500@gmai.com sit amet consectetur adipisicing elit. Laborum odit joelntuka500@gmai.com</div>
   </div>
   <div class="flex ml-7">
   <div class="bg-white w-[40px] h-[40px] mt-2 ml-2 rounded-full overflow-hidden"> <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" /></div>
   <div class="bg-white w-[350px]  p-4 mt-1.5 ml-3 rounded-xl text-gray-900"> Lorem      Laborum odit repellat tenetur alias inventore dolores, laboriosam culpa debitis fuga repudiandae fugit</div>
   </div> -->

   
   </div>
   <div class="max-w-[600px] mx-auto h-[0.5vh] bg-gray-900 "></div>
   <div >
            <form  method="post" action="/send-data" class="max-w-[500px] h-[7vh] bg-gray-600 mx-auto mt-[-3px] rounded-b flex shadow-lg " >
            @csrf
            <textarea name="content" rows="number_of_rows"  cols="number_of_columns" placeholder="Create Your Post Here..." class="rounded-s-lg overflow-y-hidden w-[90%] h-[6vh] mt-1 ml-1  focus:border-none border-2 border-gray-900 text-gray-900 bg-white" autocomplete="off" required"></textarea>
            <input type="hidden" name="image"  value="joel.jpg">
            <!-- <input  type="text" name="content" placeholder="Create Your Post Here..." class=" rounded-s-lg overflow-y-hidden w-[90%] h-[6vh] mt-1 ml-1  focus:border-none border-2 border-gray-900 text-gray-900 " autocomplete="off" required   > -->
            <button type="submit" wire:click="$refresh" class="border h-[6vh] border-gray-900 bg-gray-900 w-[44px] mt-1 hover:bg-gray-600 duration-300 overflow-hidden hover:border-gray-600 rounded-r" wire:click="$refresh" > <i class="fa-solid fa-paper-plane text-1xl  text-white  "></i> </button>
            </form>
   </div>
   </div>
   
</x-app-layout>
@livewireScripts
</body>
</html>


