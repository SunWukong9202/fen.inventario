<!-- Sidebar -->
<aside
  fen-scrollbar
  x-data="{
    open: false,
    toggled: false,  
  }"
  class="fixed top-0 left-0 z-50 w-72 h-screen pt-0 transition-transform -translate-x-full bg-white lg:bg-transparent lg:translate-x-0"
  x-bind:class="open ? 'translate-x-0' :'-translate-x-full'"
  @click.outside="toggled ? toggled = false: open = false;" 
  @toggle.window="open = !open; toggled = true; console.log('clicked')"
>
  <div class="sticky top-0 bg-white z-20 relative">
    <div 
    x-cloak
    x-show="open == true"
    x-on:click="open = false"
    class="absolute top-1 right-1 p-1 hover:bg-gray-100 rounded-md cursor-pointer">
      <x-heroicon-s-x-mark class="w-5 h-5"/>
    </div>
    <a class="flex items-start justify-between px-8 py-6 m-0 text-size-sm whitespace-nowrap text-slate-700" href="{{ url('') }}" target="_blank">
      <img src="/images/logo-fen.png"
        class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-20" alt="" />
      <span
        class="ml-2 text-wrap text-start font-normal transition-all duration-200">
        FACULTAD DE 
        <span class="block ml-4 font-bold">
          ENFERMERIA Y NUTRICION
        </span>
      </span>
    </a>
    <hr
    class="h-px mt-0 bg-transparent via-black/40 bg-gradient-to-r from-transparent to-transparent" />
  </div>

  <div class="h-full w-full py-4 mb-2">
    <ul class="flex flex-col ">
      <li class="mt-0.5 w-full">
        <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('users') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
          href="{{ url('users') }}">

          <div
            class="{{ (Request::is('users') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
          </div>
          <span
            class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
        </a>
      </li>

      <li class="w-full mt-4">
        <h6
          class="pl-6 ml-2 font-bold leading-tight uppercase text-size-xs opacity-60">
          Laravel examples</h6>
      </li>

      <li class="mt-0.5 w-full">
        <x-navigation.sidebar-link page="users" class="my-2"></x-navigation>
      </li>

      <li class="mt-0.5 w-full">
        <a class="py-2 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
            {{ (Request::is('user-profile') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
          href="{{ url('user-profile') }}">
          <div
            class="{{ (Request::is('user-profile') ? 'frost-gradient' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

            <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>User Profile</title>
              <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Rounded-Icons" transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF"
                  fill-rule="nonzero">
                  <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                    <g id="customer-support" transform="translate(1.000000, 0.000000)">
                      <path class="{{ (Request::is('user-profile') ? '' : 'fill-slate-800') }}"
                        d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"
                        id="Path" opacity="0.59858631"></path>
                      <path class="{{ (Request::is('user-profile') ? '' : 'fill-slate-800') }}"
                        d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"
                        id="Path"></path>
                      <path class="{{ (Request::is('user-profile') ? '' : 'fill-slate-800') }}"
                        d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"
                        id="Path"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>


          </div>
          <span
            class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">User
            Profile</span>
        </a>
      </li>

      <x-navigation.sidebar-link page="users" class="my-2"></x-navigation>

      <x-navigation.sidebar-link page="users" class="my-2"></x-navigation>
      <x-navigation.sidebar-link page="users" class="my-2"></x-navigation>
      <x-navigation.sidebar-link page="users" class="my-2"></x-navigation>
      <x-navigation.sidebar-link page="users" class="my-2"></x-navigation>
      <x-navigation.sidebar-link page="users" class="my-2"></x-navigation>
      <x-navigation.sidebar-link page="users" class="my-2"></x-navigation>

    </ul>
  </div>

</aside>


  {{-- <aside class="max-w-64 z-40 fixed inset-y-0 my-4 block w-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 ml-4 -translate-x-full lg:translate-x-0 lg:bg-transparent
  ">

    <div class="h-19.5">
      <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden"
        sidenav-close></i>
      <a class="block px-8 py-6 m-0 text-size-sm whitespace-nowrap text-slate-700" href="{{ url('') }}" target="_blank">
        <img src="../assets/img/logo-ct.png"
          class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
        <span
          class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} font-semibold transition-all duration-200 ease-nav-brand">Soft
          UI Dashboard</span>
      </a>
    </div>

    <hr
      class="h-px mt-0 bg-transparent {{ (Request::is('virtual-reality') ? 'bg-gradient-horizontal-dark' : 'via-black/40 bg-gradient-to-r from-transparent to-transparent') }} " />

    <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
      <ul class="flex flex-col pl-0 mb-0">
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
                {{ (Request::is('dashboard') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('dashboard') }}">

            <div
              class="{{ (Request::is('dashboard') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
            </div>
            <span
              class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
          </a>
        </li>

        <li class="w-full mt-4">
          <h6
            class="{{ (Request::is('rtl') ? 'pr-6 mr-2' : 'pl-6 ml-2') }} font-bold leading-tight uppercase text-size-xs opacity-60">
            Laravel examples</h6>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('user-profile') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('user-profile') }}">
            <div
              class="{{ (Request::is('user-profile') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

              <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>User Profile</title>
                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Rounded-Icons" transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF"
                    fill-rule="nonzero">
                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                      <g id="customer-support" transform="translate(1.000000, 0.000000)">
                        <path class="{{ (Request::is('user-profile') ? '' : 'fill-slate-800') }}"
                          d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"
                          id="Path" opacity="0.59858631"></path>
                        <path class="{{ (Request::is('user-profile') ? '' : 'fill-slate-800') }}"
                          d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"
                          id="Path"></path>
                        <path class="{{ (Request::is('user-profile') ? '' : 'fill-slate-800') }}"
                          d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"
                          id="Path"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>


            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">User
              Profile</span>
          </a>
        </li>
      </ul>
    </div>
  </aside> --}}

  <!-- end sidenav -->
