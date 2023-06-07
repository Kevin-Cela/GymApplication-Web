<?php
class Navigation
{
  protected $_user;
  protected $_role;

  function __construct()
  {
    ##
    ## GET USER SESSION AND ROLE !
    ##
    if(isset($_SESSION['user'])){
      $this->_user = $_SESSION['user'];
      $this->_role = $_SESSION['role'];
    }
    else{
      $this->_user = null;
      $this->_role = null;
    }
  }

  function getUser()
  {
    return $this->_user;
  }

  function getRole()
  {
    return $this->_role;
  }

  function renderNavigation()
  {
    if ($this->getUser()!= null && $this->getRole()!= null) {
      switch ($this->getRole()) {
        case 'MANAGER':
          return $this->renderManagerNavigation();
        case 'COACH':
          return $this->renderCoachNavigation();
        default:
          return $this->renderMemberNavigation();
      }
    } else return $this->renderBasicNavigation();
  }


  function renderManagerNavigation()
  {
    return '
        <nav class="w-full h-auto py-2 md:py-3 lg:py-4 px-1 bg-logo-orange flex relative z-50">
          <button class="px-4" id="toggle-navigation" data-toggled="false">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-slate-100" id="Outline" viewBox="0 0 24 24" width="32" height="32">
              <rect y="11" width="24" height="2" rx="1" />
              <rect y="4" width="24" height="2" rx="1" />
              <rect y="18" width="24" height="2" rx="1" />
            </svg>
          </button>
        </nav>
        <ul id="navigation-slide-in" class="-translate-x-full pb-2 z-50 bg-logo-orange absolute shadow-xl shadow-slate-500 transition-all duration-300 ease-linear w-1/2 md:max-w-sm flex flex-col items-start content-center">
          <li class="px-2 py-4 lg:p-4">
            <a href="/" class="transition-all duration-300 ease-in-out md:text-xl text-slate-200 tracking-wide text-base p-1 border-b-2 border-transparent hover:border-b-white">Home</a>
          </li>
          <li class="px-2 py-4 lg:p-4">
            <a href="/about_us.php" class="transition-all duration-300 md:text-xl text-slate-200 tracking-wide text-base p-1 border-b-2 border-transparent hover:border-b-white">About Us</a>
          </li>
          <li class="px-2 py-4 lg:p-4">
            <a href="/manager/profile.php" class="transition-all duration-300 md:text-xl text-slate-200 tracking-wide text-base p-1 border-b-2 border-transparent hover:border-b-white">Profile</a>
          </li>
          <li class="px-2 py-4 lg:p-4">
            <a href="/manager/dashboard.php" class="transition-all duration-300 md:text-xl text-slate-200 tracking-wide text-base p-1 border-b-2 border-transparent hover:border-b-white">Dashboard</a>
          </li>
        </ul>
      ';
  }


  function renderCoachNavigation()
  {
    return '
        <nav class="w-full h-auto py-2 md:py-3 lg:py-4 px-1 bg-logo-orange flex relative z-50">
          <button class="px-4" id="toggle-navigation" data-toggled="false">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-slate-100" id="Outline" viewBox="0 0 24 24" width="32" height="32">
              <rect y="11" width="24" height="2" rx="1" />
              <rect y="4" width="24" height="2" rx="1" />
              <rect y="18" width="24" height="2" rx="1" />
            </svg>
          </button>
        </nav>
        <ul id="navigation-slide-in" class="-translate-x-full pb-2 z-50 bg-logo-orange absolute shadow-xl shadow-slate-500 transition-all duration-300 ease-linear w-1/2 md:max-w-sm flex flex-col items-start content-center">
          <li class="px-2 py-4 lg:p-4">
            <a href="/" class="transition-all duration-300 ease-in-out md:text-xl text-slate-200 tracking-wide text-base p-1 border-b-2 border-transparent hover:border-b-white">Home</a>
          </li>
          <li class="px-2 py-4 lg:p-4">
            <a href="/about_us.php" class="transition-all duration-300 md:text-xl text-slate-200 tracking-wide text-base p-1 border-b-2 border-transparent hover:border-b-white">About Us</a>
          </li>
          <li class="px-2 py-4 lg:p-4">
            <a href="/coach/profile.php" class="transition-all duration-300 md:text-xl text-slate-200 tracking-wide text-base p-1 border-b-2 border-transparent hover:border-b-white">Profile</a>
          </li>
          <li class="px-2 py-4 lg:p-4">
            <a href="/coach/dashboard.php" class="transition-all duration-300 md:text-xl text-slate-200 tracking-wide text-base p-1 border-b-2 border-transparent hover:border-b-white">Dashboard</a>
          </li>
          <li class="px-2 py-4 lg:p-4">
            <a href="/create/course.php" class="transition-all duration-300 md:text-xl text-slate-200 tracking-wide text-base p-1 border-b-2 border-transparent hover:border-b-white">Create Course</a>
          </li>
        </ul>
      ';
  }


  function renderMemberNavigation()
  {
    return '
        <nav class="w-full h-auto py-2 md:py-3 lg:py-4 px-1 bg-logo-orange flex relative z-50">
          <button class="px-4" id="toggle-navigation" data-toggled="false">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-slate-100" id="Outline" viewBox="0 0 24 24" width="32" height="32">
              <rect y="11" width="24" height="2" rx="1" />
              <rect y="4" width="24" height="2" rx="1" />
              <rect y="18" width="24" height="2" rx="1" />
            </svg>
          </button>
        </nav>
        <ul id="navigation-slide-in" class="-translate-x-full pb-2 z-50 bg-logo-orange absolute shadow-xl shadow-slate-500 transition-all duration-300 ease-linear w-1/2 md:max-w-sm flex flex-col items-start content-center">
          <li class="px-2 py-4 lg:p-4">
            <a href="/" class="transition-all duration-300 ease-in-out md:text-xl text-slate-200 tracking-wide text-base p-1 border-b-2 border-transparent hover:border-b-white">Home</a>
          </li>
          <li class="px-2 py-4 lg:p-4">
            <a href="/about_us.php" class="transition-all duration-300 md:text-xl text-slate-200 tracking-wide text-base p-1 border-b-2 border-transparent hover:border-b-white">About Us</a>
          </li>
          <li class="px-2 py-4 lg:p-4">
            <a href="/member/profile.php" class="transition-all duration-300 md:text-xl text-slate-200 tracking-wide text-base p-1 border-b-2 border-transparent hover:border-b-white">Profile</a>
          </li>
          <li class="px-2 py-4 lg:p-4">
            <a href="/view/courses.php" class="transition-all duration-300 md:text-xl text-slate-200 tracking-wide text-base p-1 border-b-2 border-transparent hover:border-b-white">My Courses</a>
          </li>
        </ul>
      ';
  }

  function renderBasicNavigation()
  {
    return '
        <nav class="w-full h-auto py-2 md:py-3 lg:py-4 px-1 bg-logo-orange flex relative z-50">
          <button class="px-4" id="toggle-navigation" data-toggled="false">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-slate-100" id="Outline" viewBox="0 0 24 24" width="32" height="32">
              <rect y="11" width="24" height="2" rx="1" />
              <rect y="4" width="24" height="2" rx="1" />
              <rect y="18" width="24" height="2" rx="1" />
            </svg>
          </button>
        </nav>
        <ul id="navigation-slide-in" class="-translate-x-full pb-2 z-50 bg-logo-orange absolute shadow-xl shadow-slate-500 transition-all duration-300 ease-linear w-1/2 md:max-w-sm flex flex-col items-start content-center">
          <li class="px-2 py-4 lg:p-4">
            <a href="/" class="transition-all duration-300 ease-in-out md:text-xl text-slate-200 tracking-wide text-base p-1 border-b-2 border-transparent hover:border-b-white">Home</a>
          </li>
          <li class="px-2 py-4 lg:p-4">
            <a href="/about_us.php" class="transition-all duration-300 md:text-xl text-slate-200 tracking-wide text-base p-1 border-b-2 border-transparent hover:border-b-white">About Us</a>
          </li>
          <li class="px-2 py-4 lg:p-4">
            <a href="/login.php" class="transition-all duration-300 md:text-xl text-slate-200 tracking-wide text-base p-1 border-b-2 border-transparent hover:border-b-white">Log In</a>
          </li>
          <li class="px-2 py-4 lg:p-4">
            <a href="/register.php" class="transition-all duration-300 md:text-xl text-slate-200 tracking-wide text-base p-1 border-b-2 border-transparent hover:border-b-white">Register</a>
          </li>
        </ul>
      ';
  }
}
