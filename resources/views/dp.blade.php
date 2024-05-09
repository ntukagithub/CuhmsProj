<x-app-layout>
  <form action="" method="post" class="max-w-[330px] mx-auto bg-gray-600 p-4 rounded-xl mt-[50px]">
    @csrf
    
      <div class="w-full border h-[250px] rounded"><img src="" alt="Profile Picture" width="100" height="100"></div>
      <br>
    <input type="file" name="dp" id="dp " class="border w-[95%] ml-2 rounded p-1" ><br>
    <button type="submit" class="bg-white text-gray-900 w-[95%] py-2 mt-3 ml-2 mb-4 rounded px-3 font-extrabold hover:bg-slate-400 duration-300">Change</button>
  </form>
</x-app-layout>
