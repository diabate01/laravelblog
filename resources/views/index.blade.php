@extends('layouts.app')

@section('content')
  
  <div class="main-container">
      <div class="sidebar">
                <div class="brand">
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'HackerBlog') }}
                    </a>
                </div>
                <div class="nav-toggle">
                    <span></span>
                </div>
            <ul class="nav">
                <li ><a class="active" href=""> <img src="https://img.icons8.com/material-rounded/24/4a90e2/home-page.png"/>Home</a> </li>
                 <li ><a class="" href=""><img src="https://img.icons8.com/material-rounded/24/4a90e2/person-female.png"/> About</a> </li>
                 <li ><a class="" href=""><img src="https://img.icons8.com/material-rounded/24/4a90e2/student-registration.png"/> Cours</a> </li>
                <li ><a class="" href=""> <img src="https://img.icons8.com/material-rounded/24/4a90e2/phone-contact.png"/> Contact</a> </li>
                <li class=""></li>
            </ul>

         
      </div>
      <div class="main-content">
          <div class="home-section">
           
          </div>
      </div>
  </div>


@endsection