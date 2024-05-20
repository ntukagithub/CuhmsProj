

<x-app-layout>


    <link rel="stylesheet" href="{{asset('fontawesome-free-6.3.0-web/css/all.min.css')}}">
    <div class="grid grid-cols-12 gap-6 h-screen">
        <!-- Sidebar -->
        <div class="fixed top-0 left-0 h-full overflow-y-auto w-64 bg-gray-900 border border-gray-600">
            <div class="p-2 mt-2 rounded mx-auto">
                <div class="max-w-[200px] mx-auto">
                    <img src="photos/CUHMS.png" alt="" width="100px" class="ml-[60px]">
                    <div class="text-center font-extrabold text-2xl text-yellow-500  w-[220px] mx-auto rounded"> Cuhms Admin</div>
                </div>
             <div class="w-full absolute left-0 bg-gray-700 h-[1px] mt-2"></div>
            </div>
            <!-- the admin links controls -->
            <div class="max-w-[230px] mx-auto p-2 ml-5 mt-6">
                <a href="#dashboard" class="sidebar-link"><div class="text-lg py-2 mt px-5 mt-2  bg-gray-600 rounded max-w-[250px]"><i class="fa-solid fa-chart-line px-3 text-lg text-yellow-400"></i>Dashboard</div></a>
                <a href="#users" class="sidebar-link"><div class="text-lg py-2 px-5 mt-2"><i class="fa-solid fa-users text-lg px-3 text-yellow-400"></i>cuhms User</div></a>
                <a href="#post" class="sidebar-link"><div class="text-lg py-2 px-5 mt-2"><i class="fa-solid fa-bullhorn px-3 text-lg text-yellow-400"></i>Announce users</div></a>
                <a href="#discussion" class="sidebar-link"><div class="text-lg py-2 px-5 mt-2"><i class="fa-regular fa-message px-3 text-lg text-yellow-400"></i>Discussions</div></a>
                <a href="#create" class="sidebar-link"><div class="text-lg py-2 px-5 mt-2"><i class="fa-regular fa-square-plus text-lg px-3 text-yellow-400"></i>Create User</div></a>
                <div class="text-sm opacity-25  absolute bottom-3 bg-inherit text-white py-2">@Created by cuhms team.2024</div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="col-start-3 col-end-13 border border-gray-600  m-1  ml-8 overflow-hidden overflow-y-hidden">

            <div id="dashboard" class=" text-white h-[100vh] w-full ">
                <div class="flex  gap-5 p-5">
                        <div class="w-[95%] bg-gray-800 p-4 border-2 border-gray-800 rounded-lg mx-auto mt-3 poppins h-[35vh] pl-10 pt-[60px]  justify-center items-center hover:cursor-pointer hover:border-2 duration-300 hover:border-yellow-500">
                            <div class="text-yellow-500 font-extrabold text-3xl ">WELCOME ADMIN</div>
                            <div class="opacity-75">TO OUR CAREER UNIT HUB MANAGEMENT SYSTEM</div>
                            
                        </div>

                        <div class="w-[95%] bg-gray-800 p-5 border-2 border-gray-800 duration-300 rounded-lg mx-auto mt-3 poppins h-[35vh] hover:cursor-pointer hover:border-2 hover:border-yellow-500 ">
                            <div class=" text-yellow-500 text-2xl font-extrabold">SUMMARY ABOUT CUHMS</div>
                            <div class="opacity-75 pt-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste ex expedita, ad consectetur beatae sit error iusto? Quibusdam expedita dicta placeat quas pariatur assumenda ipsam neque facilis? Nemo, expedita voluptas. Lorem ipsum dolor tio atque debitis. Esse molestias adipisci reiciendis quas.</div>
                        </div>
                </div>
          
                <div class="text-2xl font-extrabold text-white text-center poppins pt-6 ">
                    CUHMS FEATURES
                </div>

                <div class=" flex gap-4 w-[95%] mx-auto mt-5">
                    <div>
                        <div class="bg-gray-800 w-[230px] h-[35vh]  rounded-lg pt-6 border-2 border-gray-800 hover:border-2 hover:border-yellow-500  duration-300 hover:cursor-pointer">
                            <div class="text-center text-xl bg-gray-900 w-[140px] py-2 mx-auto rounded-lg border border-yellow-500">Messaging</div>
                            <div class="text-sm pl-4 p-2 text-center mt-5 opacity-75 ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. amet consectetur adipisicing elit.  nesciunt maxime deserunt</div>
                        </div>
                        
                    </div>

                    <div>
                        <div class="bg-gray-800 w-[250px] h-[35vh]  rounded-lg pt-6 border-2 border-gray-800 hover:border-2 hover:border-yellow-500  duration-300 hover:cursor-pointer">
                            <div class="text-center text-xl bg-gray-900 w-[140px] py-2 mx-auto rounded-lg border border-yellow-500">Posts</div>
                            <div class="text-sm pl-4 p-2 text-center mt-5 opacity-75">Lorem, ipsum dolor  elit. amet consectetur  consequatur atque nesciunt maxime deserunt</div>
                        </div>
                        
                    </div>

                    <div>
                        <div class="bg-gray-800 w-[250px] h-[35vh]  rounded-lg pt-6 border-2 border-gray-800 hover:border-2 hover:border-yellow-500  duration-300 hover:cursor-pointer">
                            <div class="text-center text-xl bg-gray-900 w-[140px] py-2 mx-auto rounded-lg border border-yellow-500">Discussions</div>
                            <div class="text-sm pl-4 p-2 text-center mt-5 opacity-75">Lorem, ipsum dolor sit amet consectetur adipisicing elit. amet consectetur   maxime deserunt</div>
                        </div>
                        
                    </div>

                    <div>
                        <div class="bg-gray-800 w-[250px] h-[35vh]  rounded-lg pt-6 border-2 border-gray-800 hover:border-2 hover:border-yellow-500  duration-300 hover:cursor-pointer">
                            <div class="text-center text-xl bg-gray-900 w-[140px] py-2 mx-auto rounded-lg border border-yellow-500">Collaboration</div>
                            <div class="text-sm pl-4 p-2 text-center mt-5 opacity-75">Lorem, ipsum dolor sit amet consectetur adipisicing elit. amet consectetur adipisicing elit. Eligendi con </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            

            

            <div id="users" class=" text-white h-[100vh] ">
               <div class="text-2xl font-extrabold text-center pt-[10px] p-2">CUHMS Users</div>
               <div class="bg-gray-600 w-full h-[1px] "></div>

               <table class="w-full mx-auto mt-5 ">
                      <tr class="w-[100%] mx-auto text-xl justify-between mt-5  border border-gray-600 bg-white font-bold text-gray-900   rounded">
                        <th class="py-2">ID</th>
                        <th>USERNAME</th>
                        <th>EMAIL</th>
                        <th>ROLE</th>
                        <th>CREATED_DATE</th>
                        <th>ACTION</th>
                      </tr>
                      
                    <?php
                     $count =1;
                    ?>
          
                    @foreach ($data as $data )   
                    <tr class="w-[100%] mx-auto bg-gray-800 justify-between mt-5  border border-gray-600   text-white text-center ">
                        <td class="py-2">{{$count++}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->role}}</td>
                            <td>{{$data->created_at}}</td>
                            <td class="">
                            <a href="{{url('/adminedit/'. $data->id )}}"><i class="fa-solid fa-edit text-yellow-500 pl-3 hover:shadow-lg text-xl"></i></a> 
                            <a href="{{ url('/delete/'. $data->id) }}" onclick="return confirm('Are you sure you want to delete this user?');">
                            <i class="fa-solid fa-trash text-red-600 pl-2 text-xl"></i>
                            </a>
                        </td>
                    </tr>
                                                
                    @endforeach
               

               </table>
            
            </div>
            
             

            <div id="post" class=" text-white h-[100vh] w-full text-center  pt-[20px]">
                                    
                               
                    <div class="text-white bg-gray-600 max-w-[500px] mx-auto font-black  text-1xl text-center pt-1 border border-gray-600 mt-1 rounded-t-lg  ">Inform Cuhms Users</div>
                    <div class=" max-w-[500px] h-[78vh] mx-auto border border-gray-600 overflow-scroll overflow-x-hidden overflow-y-auto  mt-0  ">
                    
                    @foreach ($inform as $inform )

                        <div class="flex ml-10">
                            <div class="bg-white w-[40px] h-[40px] mt-4 mr-4 rounded-full overflow-hidden"> <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" /></div>
                            <div class="border border-red-500 w-[350px]  text-left p-4 mt-4 ml-1 rounded-xl text-gray-400">{{$inform->content}}</div>
                            <div class=""><a href="{{'/deletemessage/'.$inform->id}}" onclick="return confirm('are you sure you want to delete this massage!!');"><li class="fa-solid fa-trash text-red-600 text-2xl pt-7 pl-2"></li></a></div>
                        </div>

                    @endforeach
                        
                    
                    </div>
                    <div class="max-w-[500px] mx-auto h-[0.5vh] bg-gray-900 "></div>
                    <div >
                                <form  method="post" action="/submit-data" class="max-w-[500px] h-[7vh] bg-white mx-auto mt-[-3px] rounded-b flex shadow-lg " >
                                @csrf
                                <textarea name="content" rows="number_of_rows" cols="number_of_columns" placeholder="Create Your Post Here..." class="rounded-s-lg overflow-y-hidden w-[90%] h-[6vh] mt-1 ml-1  focus:border-none border-2 border-gray-900 text-gray-900  autocomplete="off" required"></textarea>
                                <input type="hidden" name="image"  value="joel.jpg">
                                <!-- <input  type="text" name="content" placeholder="Create Your Post Here..." class=" rounded-s-lg overflow-y-hidden w-[90%] h-[6vh] mt-1 ml-1  focus:border-none border-2 border-gray-900 text-gray-900 " autocomplete="off" required   > -->
                                <button type="submit" wire:click="$refresh" class="border h-[6vh] border-gray-900 bg-gray-900 w-[44px] mt-1 hover:bg-gray-600 duration-300 hover:border-gray-600 rounded-r" wire:click="$refresh" > <i class="fa-solid fa-paper-plane text-1xl  text-white  "></i> </button>
                                </form>
                    </div>
                    


            
            </div>

            <div id="discussion" class=" text-white h-[100vh] w-full text-center  ">
            
               <div class="text-2xl font-extrabold text-center pt-[10px] p-2">Graduates Collaboration Conversation</div>
               <div class="bg-gray-600 w-full h-[1px] "></div>
                <div class="max-w-[500px] mx-auto border text-left border-gray-600 rounded h-[85vh] mt-3 overflow-scroll overflow-x-hidden overflow-y-auto">

                @foreach ($collaboration as $collaboration )
                   <div class="flex mt-2 ml-5 ">
                        <div class="bg-white w-[40px] h-[40px] mt-2 ml-2 rounded-full overflow-hidden"> <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" /></div>
                        <div class="border border-gray-600 w-[350px]  p-4 mt-1.5 ml-3 rounded-xl text-white">{{$collaboration->content}}</div>
                        <div class=""><a href="{{'/delete/'.$collaboration->id}}" onclick="return confirm('are you sure you want to delete this massage!!');"><li class="fa-solid fa-trash text-red-600 text-2xl pt-5 pl-3"></li></a></div>
                    </div>
                @endforeach
                    
                </div>
            </div>

            <div id="create" class=" text-white h-[100vh] w-full  pt-[10px]">
            <div class="text-center text-2xl font-extrabold text-gray-500">REGISTER NEW USER IN OUR SYSTEM MANUALY</div>
                <div class="bg-gray-600 h-[1px] w-full mt-2"></div>

            <form action="/admin-create" method="POST"  class="w-[410px] mx-auto border border-gray-600 rounded-lg p-5  mt-7   ">
                        @csrf
                        <div>
                            
                            <h1 class="text-center text-3xl font-bold text-yellow-500">Create New User</h1>
                        </div>
                        <div class="mt-4">
                            <label for="name" class="text-xl pl-1">user name</label><br>
                            <input type="text" name="name" id="name" required class="py-2 px-2 bg-gray-600 rounded w-full focus:border-none  mt-1"><br>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <label for="email" class="text-xl pl-1">Email</label><br>
                            <input type="text" name="email" required id="email"  class="py-2 px-2 bg-gray-600 rounded w-full focus:border-none mt-1"><br>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                            

                        <div class="mt-4">
                        <label for="role" class="text-xl pl-1">Role</label><br>
                        <select wire:model="role" id="role" name="role" class="py-2 px-2 bg-gray-600 rounded w-full focus:border-none  mt-1"  >
                            <option value="" class="text-center">-------choose a user professional-------</option>
                            <option value="IT" class="">IT</option>
                            <option value="Procurement">Procurement</option>
                            <!-- <option value="Computer_science">Computer_science</option> -->
                            <option value="marketing">marketing</option>
                            <option value="admin">admin</option>
                            <option value="B_administration">B_Administration</option>
                            <option value="Accountancy">Accountancy</option>
                            <option value="BA_HR">BA_HR</option>
                            <option value="Civil_engineering">Civil_engineering</option>`
                            <option value="Clinical_medicine">Clinical_medicine</option>
                            <option value="Laboratory_engineering">Laboratory_engineering</option>
                            <option value="Tourism">Tourism</option>
                            <option value="Law">Law</option>
                            <option value="Electrical_engineering">Electrical_engineering</option>

                        </select>
                        </div>

                        <div class="mt-4">
                            <label for="password" class="text-xl pl-1">Password</label><br>
                            <input type="text" name="password" required id="password" class="py-2 px-2 bg-gray-600 rounded w-full focus:border-none  mt-1"><br>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>                   
                            <!-- <input type="hidden"name="password" id="password" value="{{$data->password}}" class="py-2 px-2 bg-gray-600 rounded w-full focus:border-none mt-1"><br>
                            <input type="hidden"name="dp" id="dp" value="{{$data->dp}}" class="py-2 px-2 bg-gray-600 rounded w-full focus:border-none mt-1"><br>
                                -->

                        <div class="mt-6 mb-4">
                            <input type="submit" name="submit" required id="submit" value="Create" class="p-1 bg-yellow-500 rounded py-2 w-full focus:border-none hover:cursor-pointer hover:bg-white duration-300 font-extrabold text-gray-900 hover:text-grey">
                        
                        </div>



                    </form>
                </div>


                
            </div>
            </div>
            
            <!-- Add your main content here -->
        </div>
    </div>

    <script>
        // JavaScript for toggling active state of sidebar links
        const sidebarLinks = document.querySelectorAll('.sidebar-link');

        sidebarLinks.forEach(link => {
            link.addEventListener('click', function() {
                // Remove 'active' class and bg-gray-600 from all links
                sidebarLinks.forEach(link => {
                    link.classList.remove('active');
                    link.querySelector('div').classList.remove('bg-gray-600','rounded');
                });             

                // Add 'active' class and bg-gray-600 to the clicked link
                this.classList.add('active');
                this.querySelector('div').classList.add('bg-gray-600','rounded');
            });
        });
    </script>



</x-app-layout>
