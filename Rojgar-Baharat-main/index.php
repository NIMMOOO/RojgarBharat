<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="./dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>Dashboard  Admin</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>

<body>

    <!--Container -->
    <div class="mx-auto bg-grey-400">
        <!--Screen-->
        <div class="min-h-screen flex flex-col">
            <!--Header Section Starts Here-->
            <header class="bg-nav">
                <div class="flex justify-between">
                    <div class="p-1 mx-3 inline-flex items-center">
                        <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                        <h1 class="text-white p-2">Rojgar Bharat</h1>
                    </div>
                    <div class="p-1 flex flex-row items-center">
                        <div id="ProfileDropDown"
                            class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                            <ul class="list-reset">
                                <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My
                                        account</a></li>
                                <li><a href="#"
                                        class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Notifications</a>
                                </li>
                                <li>
                                    <hr class="border-t mx-2 border-grey-ligght">
                                </li>
                                <li><a href="#"
                                        class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!--/Header-->

            <div class="flex flex-1">
                <!--Sidebar-->
                <aside id="sidebar"
                    class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

                    <ul class="list-reset flex flex-col">
                        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
                            <a href="index.php"
                                class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-tachometer-alt float-left mx-2"></i>
                                Dashboard
                                <span><i class="fas fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                        
                        <!--<li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="forms.html"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-wpforms float-left mx-2"></i>
                            Forms
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>-
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="buttons.html"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-grip-horizontal float-left mx-2"></i>
                            Buttons
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="tables.html"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-table float-left mx-2"></i>
                            Tables
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="ui.html"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-uikit float-left mx-2"></i>
                            Jobs Posted By You
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>-->
                        <li class="w-full h-full py-3 px-2 border-b border-300-border">
                            <a href="crud/modals.php"
                                class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-square-full float-left mx-2"></i>
                                Jobs Posted By You
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                      
                        <li class="w-full h-full py-3 px-2 border-b border-300-border">
                            <a href="search.php"
                                class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-square-full float-left mx-2"></i>
                                Search Employee
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                        <li class="w-full h-full py-3 px-2 border-b border-300-border">
                            <a href="logout.php"
                                class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-square-full float-left mx-2"></i>
                                Logout
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                        <!--<li class="w-full h-full py-3 px-2">
                        <a href="#"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="far fa-file float-left mx-2"></i>
                            Pages
                            <span><i class="fa fa-angle-down float-right"></i></span>
                        </a>
                        <ul class="list-reset -mx-2 bg-white-medium-dark">
                            <li class="border-t mt-2 border-light-border w-full h-full px-2 py-3">
                                <a href="login.html"
                                   class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                    Login Page
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                            <li class="border-t border-light-border w-full h-full px-2 py-3">
                                <a href="register.html"
                                   class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                    Register Page
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                            <li class="border-t border-light-border w-full h-full px-2 py-3">
                                <a href="404.html"
                                   class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                    404 Page
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>-->
                    </ul>
                    </li>
                    </ul>

                </aside>
                <!--/Sidebar-->
                <!--Main-->
                <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                    <div class="flex flex-col">
                        <!-- Stats Row Starts Here -->
                        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                            <div
                                class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                                <div class="p-4 flex flex-col">
                                    <a href="#" class="no-underline text-white text-2xl" id="emp_hired">
                                        17
                                    </a>
                                    <a href="#" class="no-underline text-white text-lg">
                                        Hired By You
                                    </a>
                                </div>
                            </div>

                            <div
                                class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/4 mx-2">
                                <div class="p-4 flex flex-col">
                                    <a href="#" class="no-underline text-white text-2xl" id="Ratings">
                                        9.36/10
                                    </a>
                                    <a href="#" class="no-underline text-white text-lg">
                                        Your Rating
                                    </a>
                                </div>
                            </div>

                            <div
                                class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
                                <div class="p-4 flex flex-col">
                                    <a href="#" class="no-underline text-white text-2xl" id="job_posted">
                                        23
                                    </a>
                                    <a href="#" class="no-underline text-white text-lg">
                                        Jobs Posted
                                    </a>
                                </div>
                            </div>

                            <div
                                class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                                <div class="p-4 flex flex-col">
                                    <a href="#" class="no-underline text-white text-2xl" id="occupation">
                                        Contractor
                                    </a>
                                    <a href="#" class="no-underline text-white text-lg">
                                        Occupation
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- /Stats Row Ends Here -->

                        <!-- Card Sextion Starts Here -->
                        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

                            <!-- card -->

                            <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                                <div class="px-6 py-2 border-b border-light-grey">
                                    <div class="font-bold text-xl">Your Employees</div>
                                </div>
                                <div class="table-responsive" id="employee-table">
                                    <table class="table text-grey-darkest">
                                        <thead class="bg-grey-dark text-white text-normal">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Work</th>
                                                <th scope="col">Salary</th>
                                                <th scope="col">Age</th>
                                            </tr>
                                        </thead>
                                        <tbody id="data">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /Cards Section Ends Here -->

                        <!-- Progress Bar -->
                        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 mt-2">
                            <div class="rounded overflow-hidden shadow bg-white mx-2 w-full pt-2">
                                <div class="px-6 py-2 border-b border-light-grey">
                                    <div class="font-bold text-xl">Contract Progress</div>
                                </div>
                                <div class="">
                                    <div class="w-full" id="progress">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Profile Tabs-->
                        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 mt-2">
                            <div class="rounded overflow-hidden shadow bg-white mx-2 w-full pt-2">
                                <div class="px-6 py-2 border-b border-light-grey">
                                    <div class="font-bold text-xl">Recommended User</div>
                                </div>
                                <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 p-1 mt-2 mx-auto lg:mx-2 md:mx-2 justify-between"
                                    id="recommended_user" style="flex-wrap: wrap;">

                                </div>
                            </div>
                        </div>
                        <!--/Profile Tabs-->
                    </div>
                </main>
                <!--/Main-->
            </div>
            <!--Footer-->
            <footer class="bg-grey-darkest text-white p-2">
                <div class="flex flex-1 mx-auto">&copy; My Design</div>
            </footer>
            <!--/footer-->

        </div>

    </div>
    <script src="./main.js"></script>
    <!-- <script type="text/javascript" src="jquery-1.3.2.js"> </script>
   
   <script type="text/javascript">
  
   $(document).ready(function() {
  
      $("#display").click(function() {                
  
        $.ajax({    //create an ajax request to display.php
          type: "GET",
          url: "display.php",             
          dataType: "html",   //expect html to be returned                
          success: function(response){                    
              $("#responsecontainer").html(response); 
              //alert(response);
          }
  
      });
  });
  }); -->

    </script>
    <script src="mf/fetch_data.js"></script>

    <div>
        <div>

        </div>
    </div>
</body>

</html>