

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
                <a href="{{url('/admin#dashboard')}}" class="sidebar-link"><div class="text-lg py-2 px-5 bg-gray-600 rounded max-w-[250px]"><i class="fa-solid fa-chart-line px-3 text-lg text-yellow-400"></i>Dashboard</div></a>
                <a href="{{url('/admin#user')}}" class="sidebar-link"><div class="text-lg py-2 px-5"><i class="fa-solid fa-users text-lg px-3 text-yellow-400"></i>cuhms User</div></a>
                <a href="{{url('/admin#post')}}" class="sidebar-link"><div class="text-lg py-2 px-5"><i class="fa-solid fa-bullhorn px-3 text-lg text-yellow-400"></i>Posts</div></a>
                <a href="{{url('/admin#discussion')}}" class="sidebar-link"><div class="text-lg py-2 px-5"><i class="fa-regular fa-message px-3 text-lg text-yellow-400"></i>Discussions</div></a>
                <a href="{{url('/admin#create')}}" class="sidebar-link"><div class="text-lg py-2 px-5"><i class="fa-regular fa-square-plus text-lg px-3 text-yellow-400"></i>Create User</div></a>
                <div class="text-sm opacity-25  absolute bottom-3 bg-inherit text-white py-2">@Created by cuhms team.2024</div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="col-start-3 col-end-13 border border-gray-600  m-1  ml-8 overflow-hidden overflow-y-hidden">

            <div id="dashboard" class=" text-white h-[100vh] w-full ">
               

                <div class=" flex gap-4 w-[95%] mx-auto mt-5">
                    <form action="{{url('update/'.$data->id)}}" method="POST"  class="w-[400px] mx-auto border border-gray-600 rounded-lg p-5  mt-5  ">
                        @csrf
                        @method('PUT')
                        <div>
                            <div class="w-[100px] h-[100px] rounded-full mx-auto  bg-gray-600"><img src="photos/CUHMS.png" alt=""></div>
                            <h1 class="text-center text-3xl font-bold text-yellow-500">Update user</h1>
                        </div>
                        <div class="mt-4">
                            <label for="name" class="text-xl pl-1">user name</label><br>
                            <input type="text" name="name" id="name" value="{{$data->name}}" class="py-2 px-2 bg-gray-600 rounded w-full focus:border-none  mt-1"><br>
                        </div>

                        <div class="mt-4">
                        <label for="role" class="text-xl pl-1" name="role">Role</label><br>
                        <select wire:model="role" id="role" name="role" class="py-2 px-2 bg-gray-600 rounded w-full focus:border-none  mt-1"  >
                            <option  value="{{$data->role}}" >{{$data->role}}</option>
                            <option value="IT" class="">IT</option>
                            <option value="Procurement">Procurement</option>
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
                            <label for="email" class="text-xl pl-1">Email</label><br>
                            <input type="text" name="email" id="email" value="{{$data->email}}" class="py-2 px-2 bg-gray-600 rounded w-full focus:border-none mt-1"><br>
                        </div>
                            
                            <!-- <input type="hidden"name="password" id="password" value="{{$data->password}}" class="py-2 px-2 bg-gray-600 rounded w-full focus:border-none mt-1"><br>
                            <input type="hidden"name="dp" id="dp" value="{{$data->dp}}" class="py-2 px-2 bg-gray-600 rounded w-full focus:border-none mt-1"><br>
                                -->

                        <div class="mt-6 mb-4">
                            <input type="submit" name="submit" id="submit" value="Update" class="p-1 bg-yellow-500 rounded py-2 w-full focus:border-none hover:cursor-pointer hover:bg-gray-600 duration-300 font-bold text-gray-900 hover:text-white">
                        </div>



                    </form>
                </div>
                
            </div>
            

            

            <div id="users" class=" text-white h-[100vh] ">
               <div class="text-2xl font-extrabold text-center pt-[10px] p-2">CUHMS Users</div>
               <div class="bg-gray-600 w-full h-[1px] "></div>

               <
            </div>
            
             

            <div id="post" class=" text-white h-[100vh] w-full text-center  pt-[300px]">
                Posts management
            </div>

            <div id="discussion" class=" text-white h-[100vh] w-full text-center  pt-[300px]">
                Discusion management
            </div>
            <div id="create" class=" text-white h-[100vh] w-full text-center  pt-[300px]">
                Create User Managemnt
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
