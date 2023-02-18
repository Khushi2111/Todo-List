{{-- <!-- <x-app-layout> -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    {{-- <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }} {{ Auth::user()->name}}
                    {{ __("You're logged in!") }} {{ Auth::user()->email}}
                </div>
            </div>
        <!-- </div>
    </div>  -->
<!-- </x-app-layout> --> --}}

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
  <div class="container-fluid">
    <!-- Navbar brand -->
    <a class="navbar-brand mt-2 mt-lg-0" href="#">
      <img
        src="https://thumbs.dreamstime.com/b/tick-icon-vector-symbol-green-checkmark-isolated-white-background-check-mark-checkbox-pictogram-checked-correct-choice-sign-143139304.jpg"
        height="40"
        alt="MDB Logo"
        loading="lazy"
      />
    </a>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div scope="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 1200px;">
      <ul class="navbar-nav">
        {{-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" href="/profile" style="color:white;">Profile</a>
        </li>
        <li class="nav-item">
          <form method="POST" action="/logout">
            @csrf            
            <button class="nav-link" href="#" style="border:0px; background:transparent;color:white; ">LogOut</button>
        </form>
        </li>
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> --}}
      </ul>
    </div>
  </div>
</nav>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title> 

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" rel="stylesheet">
        <!-- Styles -->
        <!-- <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style> -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                /* background: black!important; */
            }
            table{
                background: white!important;
                margin-top: 50px;
            }

            .background {
              /* background-image: cover; */
              background-image: url("https://img.freepik.com/free-photo/green-sharp-pencils-dual-background_23-2148245911.jpg");
              background-repeat: no-repeat;
              background-size: cover;

            }
            th, td {
                width:150px;
                /* text-align:center; */
                /* border:1px solid black; */
                padding:5px
             
            }

            
  /* background: radial-gradient(50% 123.47% at 50% 50%, #63a288 0%, #e0844f 100%),
    linear-gradient(121.28deg, #669600 0%, #eaea7d 100%),
    linear-gradient(360deg, #87dc81 0%, #8fff00 100%),
    radial-gradient(100% 164.72% at 100% 100%, #81ebab 0%, #00ff57 100%),
    radial-gradient(100% 148.07% at 0% 0%, #fff500 0%, #fdfd03 100%);
  background-blend-mode: screen, color-dodge, overlay, difference, normal; */

        </style>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="background">
        <div class="m-4">
        <div class="text-center">
        <h2 class="text-success">Listed Items</h2>
            {{-- <a href="create" class="btn btn-success">Create New List</a> --}}
            {{-- <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"> --}}
                
                <button type="button" class="btn btn-success btn-lg btn-floating" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border-radius: 50px"><i>+</i></button>
              {{-- </button> --}}
              {{-- @if(session('error'))
                <h1>{{session('error')}}</h1>
              @endif --}}
            
        </div>
      
            <table class="table table-borderless" style="width: 500px; border-radius: 60px;" align="center">
                
                <tr class="list-group-item d-flex align-items-center border-0 mb-2 rounded-pill" 
                style="background-color: #f4f6f7; width:500px; border-collapse: separate;" align="center">
                    <th scope="col">Action</th>
                    {{-- <th scope="col">Id </th> --}}
                    <th scope="col">Name </th>
                    {{-- <th>Created At</th> --}}
                    <th scope="col">Share All</th>
                </tr>
                {{-- <tr>
                  <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded"
                    style="background-color: #f4f6f7;">
                    <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
                    <s>Dapibus ac facilisis in</s>
                  </li>
                </tr> --}}
              

                    @foreach($todo_list as $td)
                    
                    <tr class="list-group-item d-flex align-items-center border-0 mb-2 rounded-pill"
                    style="background-color: #f4f6f7;width:500px; border-collapse: separate; padding:10px" align="center">
          
                      <td>
                        
                        <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{$td->id}}" href="edit/{{$td->id}}" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                          <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                        </svg></a>

                        <a class="btn btn-danger" href="delete/{{$td->id}}" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                          <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                        </svg>
                      </td>
                      {{-- <td> {{$td->id}} </td> --}}
                      <td> {{$td->name}} </td>
                    {{-- <td> {{$td->created_at}} </td> --}}
                    

                      <td>
                        <a class="btn btn-success" style='color: white' href="share/{{$td->id}}" role="button">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                            <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
                          </svg>
                        </a>
                      </td>
                      </tr>

                    <div class="modal fade" id="exampleModal{{$td->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="text-success" id="exampleModalLabel">Now You Can Edit Your Todo!</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="../update_list/{{$td->id}}">
                              <input type="text" name="name" value='{{$td->name}}' class="form-control" required> <br> <br>
                              <input type="submit" value="Save" class="btn btn-success">
                          </form>
                          </div>
                          {{-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div> --}}
                        </div>
                      </div>
                    </div>
                    @endforeach 




            {{-- shared Items --}}
              
                
                      <table class="table table-borderless" style="width: 500px; border-radius: 60px;" align="center">
                        <div class="text-center">
                          <h2 class="text-success">Shared Items</h2>
                      </div>
                          
                          <tr class="list-group-item d-flex align-items-center border-0 mb-2 rounded-pill" 
                          style="background-color: #f4f6f7; width:500px; border-collapse: separate;text-align: center" >
                              {{-- <th scope="col">Action</th> --}}
                              {{-- <th scope="col">Id </th> --}}
                              <th scope="col" style="margin:auto">Name </th>
                              <th>Added By</th>
                              {{-- <th scope="col">Share All</th> --}}
                          </tr>

          
                              @foreach($todo_share as $td)
                              
                              <tr class="list-group-item d-flex align-items-center border-0 mb-2 rounded-pill"
                              style="background-color: #f4f6f7;width:500px; border-collapse: separate; padding:10px" align="center">
                    
                                {{-- <td> --}}
                              
          
                                  {{-- <a class="btn btn-danger" href="delete/{{$td->id}}" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                  </svg> --}}
                                {{-- </td> --}}
                               
                                <td style="margin:auto"> {{$td->todo_name}} </td>
                                <td>{{$td->user_name}}</td>
                                </tr>




                    @endforeach 
                
            </table>
            </div>
          
    </body>
</html>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="text-success" id="exampleModalLabel">Add Your New Todo!</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="form-group" action="save_new_list">
                <input type="text" name="name" placeholder='Enter New List' class="form-control" required> <br><br>
                <input type="submit" value="Save" class="btn btn-success">
            </form>
        </div>
      </div>
    </div>
  </div>