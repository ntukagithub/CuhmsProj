

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
                <a href="#dashboard" class="sidebar-link"><div class="text-lg py-2 px-5 bg-gray-600 rounded max-w-[250px]"><i class="fa-solid fa-chart-line px-3 text-lg text-yellow-400"></i>Dashboard</div></a>
                <a href="#users" class="sidebar-link"><div class="text-lg py-2 px-5"><i class="fa-solid fa-users text-lg px-3 text-yellow-400"></i>cuhms User</div></a>
                <a href="#post" class="sidebar-link"><div class="text-lg py-2 px-5"><i class="fa-solid fa-bullhorn px-3 text-lg text-yellow-400"></i>Posts</div></a>
                <a href="#discussion" class="sidebar-link"><div class="text-lg py-2 px-5"><i class="fa-regular fa-message px-3 text-lg text-yellow-400"></i>Discussions</div></a>
                <a href="#create" class="sidebar-link"><div class="text-lg py-2 px-5"><i class="fa-regular fa-square-plus text-lg px-3 text-yellow-400"></i>Create User</div></a>
                <div class="text-sm opacity-25  absolute bottom-3 bg-inherit text-white py-2">@Created by cuhms team.2024</div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="col-start-3 col-end-13 border border-gray-600  m-1  ml-8 overflow-hidden overflow-y-hidden">

            <div id="dashboard" class=" text-white h-[100vh] w-full ">
               

                <div class=" flex gap-4 w-[95%] mx-auto mt-5">
                    <form action=""  class="max-w-[300px] mx-auto">
                        <div>
                          <div></div>
                        <h1>Update user</h1>
                        </div>
                        <label for="username">user name</label><br>
                        <input type="text name="username" id="username"><br>

                        <label for="email">Email</label><br>
                        <input type="text name="email" id="email"><br>

                        <label for="password">password</label><br>
                        <input type="" name="password" id="password"><br>

                        <input type="submit" name="submit" id="submit" value="Update">
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
