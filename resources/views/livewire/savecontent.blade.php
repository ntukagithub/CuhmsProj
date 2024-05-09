<div>
    <form wire:submit.prevent="store">
        <input type="hidden" name="image" wire:model="image" value="joel.jpg">
        <input type="text" name="content" placeholder="Create Your Post Here..." class="overflow-y-hidden w-[90%] h-[6vh] mt-1 ml-1  focus:border-none border-2 border-gray-900 text-gray-900 "  autocomplete="off" required >
        <button type="submit" class="border-2 h-[6vh] border-gray-900 bg-gray-900 w-[54px] mt-1 hover:bg-gray-600 duration-300 hover:border-gray-600" > <i class="fa-solid fa-paper-plane text-1xl  text-white  "></i> </button>
    </form>
</div>
