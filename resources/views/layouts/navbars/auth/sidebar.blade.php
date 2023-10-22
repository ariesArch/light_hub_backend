<!-- sidenav  -->
@if (Request::is('virtual-reality'))
<aside
  class="fixed inset-y-0 xl:animate-fade-up z-990 xl:scale-60 xl:left-[18%] flex-wrap items-center justify-between block w-full p-0 my-4 xl:ml-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-none max-w-62.5 ease-nav-brand rounded-2xl xl:translate-x-0">
  @else
  <aside class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 block w-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 

    {{ (Request::is('rtl') ? 'xl:right-0 mr-4 translate-x-full' : 'xl:left-0 ml-4 -translate-x-full ') }} xl:translate-x-0 xl:bg-transparent
    ">

    @endif
    <div class="h-19.5">
      <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden"
        sidenav-close></i>
      <a class="block px-8 py-6 m-0 text-size-sm whitespace-nowrap text-slate-700" href="{{ url('') }}" target="_blank">
        <img src="{{asset('/assets/img/logo-ct.png')}}"
          class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
        <span
          class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} font-semibold transition-all duration-200 ease-nav-brand">
          ArtScape Gallary 
        </span>
      </a>
    </div>

    <hr
      class="h-px mt-0 bg-transparent {{ (Request::is('virtual-reality') ? 'bg-gradient-horizontal-dark' : 'via-black/40 bg-gradient-to-r from-transparent to-transparent') }} " />

    <div class="items-center block w-auto max-h-screen h-sidenav grow basis-full">
      <ul class="flex flex-col pl-0 mb-0">
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
                {{ (Request::is('dashboard') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('dashboard') }}">

            <div
              class="{{ (Request::is('dashboard') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>shop</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(0.000000, 148.000000)">
                        <path class="{{ (Request::is('dashboard') ? '' : 'fill-slate-800') }} "
                          d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
                        </path>
                        <path class="{{ (Request::is('dashboard') ? '' : 'fill-slate-800') }}"
                          d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
          </a>
        </li>

        {{-- Admin Roles and Permissions --}}
        <li class="w-full mt-4">
          <h6
            class="{{ (Request::is('rtl') ? 'pr-6 mr-2' : 'pl-6 ml-2') }} font-bold leading-tight uppercase text-size-xs opacity-60">
            Admin Roles and Permissions</h6>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('roles') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('roles') }}">
            <div
              class="{{ (Request::is('roles') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

              <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>Role</title>
                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Rounded-Icons" transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF"
                    fill-rule="nonzero">
                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                      <g id="customer-support" transform="translate(1.000000, 0.000000)">
                        <path class="{{ (Request::is('roles') ? '' : 'fill-slate-800') }}"
                          d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"
                          id="Path" opacity="0.59858631"></path>
                        <path class="{{ (Request::is('roles') ? '' : 'fill-slate-800') }}"
                          d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"
                          id="Path"></path>
                        <path class="{{ (Request::is('roles') ? '' : 'fill-slate-800') }}"
                          d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"
                          id="Path"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>


            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">Role
            </span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('permissions') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('permissions') }}">
            <div
              class="{{ (Request::is('permissions') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

              <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>Permissions</title>
                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Rounded-Icons" transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF"
                    fill-rule="nonzero">
                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                      <g id="customer-support" transform="translate(1.000000, 0.000000)">
                        <path class="{{ (Request::is('permissions') ? '' : 'fill-slate-800') }}"
                          d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"
                          id="Path" opacity="0.59858631"></path>
                        <path class="{{ (Request::is('permissions') ? '' : 'fill-slate-800') }}"
                          d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"
                          id="Path"></path>
                        <path class="{{ (Request::is('permissions') ? '' : 'fill-slate-800') }}"
                          d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"
                          id="Path"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>


            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">Permissions
            </span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('admins') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('admins') }}">
            <div
              class="{{ (Request::is('admins') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

              <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>User Profile</title>
                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Rounded-Icons" transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF"
                    fill-rule="nonzero">
                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                      <g id="customer-support" transform="translate(1.000000, 0.000000)">
                        <path class="{{ (Request::is('admins') ? '' : 'fill-slate-800') }}"
                          d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"
                          id="Path" opacity="0.59858631"></path>
                        <path class="{{ (Request::is('admins') ? '' : 'fill-slate-800') }}"
                          d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"
                          id="Path"></path>
                        <path class="{{ (Request::is('admins') ? '' : 'fill-slate-800') }}"
                          d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"
                          id="Path"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>


            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">Admins
            </span>
          </a>
        </li>

        {{-- User Management --}}
        <li class="w-full mt-4">
          <h6
            class="{{ (Request::is('rtl') ? 'pr-6 mr-2' : 'pl-6 ml-2') }} font-bold leading-tight uppercase text-size-xs opacity-60">
            User Management</h6>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('users') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('users') }}">

            <div
              class="{{ (Request::is('users') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

              {{-- <i style="font-size: 1rem;"
                class="fa-solid fa-user ps-2 pe-2 text-center text-dark {{ (Request::is('users') ? 'text-white' : 'text-dark') }} "
                aria-hidden="true"></i> --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"  viewBox="0 0 24 24"><path class="fa-solid fa-user ps-2 pe-2 text-center text-dark {{ (Request::is('users') ? 'text-white' : 'text-dark') }} "
                 fill="currentColor" d="M17 16q-1.25 0-2.125-.875T14 13q0-1.25.875-2.125T17 10q1.25 0 2.125.875T20 13q0 1.25-.875 2.125T17 16Zm0-2q.425 0 .713-.288T18 13q0-.425-.288-.713T17 12q-.425 0-.713.288T16 13q0 .425.288.713T17 14Zm-5 9q-.425 0-.713-.288T11 22v-1.9q0-.525.25-.988t.7-.737q.8-.475 1.35-.663t1.475-.337q.3-.05.6.013t.5.287L17 19l1.1-1.325q.2-.25.5-.3t.6 0q.925.15 1.475.338t1.35.662q.45.275.713.738T23 20.1V22q0 .425-.288.713T22 23H12Zm.975-2h3.075l-1.35-1.65q-.45.125-.875.325t-.85.425v.9Zm4.975 0H21v-.9q-.4-.25-.825-.438t-.875-.312L17.95 21Zm-1.9 0Zm1.9 0ZM17 13ZM5 19V5v3.425V8v11Zm0 2q-.825 0-1.413-.588T3 19V5q0-.825.588-1.413T5 3h14q.825 0 1.413.588T21 5v5q-.4-.5-.875-.95T19 8.45V5H5v14h4.15q-.075.275-.113.55T9 20.1v.9H5ZM8 9h6q.65-.5 1.425-.75T17 8q0-.425-.288-.713T16 7H8q-.425 0-.713.288T7 8q0 .425.288.713T8 9Zm0 4h4q0-.525.113-1.025t.312-.975H8q-.425 0-.713.288T7 12q0 .425.288.713T8 13Zm0 4h2.45q.275-.225.588-.4t.637-.325V16q0-.4-.213-.7t-.787-.3H8q-.425 0-.713.288T7 16q0 .425.288.713T8 17Z"/></svg>
            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">User
              </span>
          </a>
        </li>


        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('user_communities') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('user_communities') }}">

            <div
              class="{{ (Request::is('user_communities') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

              {{-- <i style="font-size: 1rem;"
                class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark {{ (Request::is('user_communities') ? 'text-white' : 'text-dark') }} "
                aria-hidden="true"></i> --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark {{ (Request::is('user_communities') ? 'text-white' : 'text-dark') }} " fill="currentColor" d="M17 15q-1.05 0-1.775-.725T14.5 12.5q0-1.05.725-1.775T17 10q1.05 0 1.775.725T19.5 12.5q0 1.05-.725 1.775T17 15Zm-4 5q-.425 0-.713-.288T12 19v-.4q0-.6.313-1.113t.887-.737q.9-.375 1.863-.563T17 16q.975 0 1.938.188t1.862.562q.575.225.888.738T22 18.6v.4q0 .425-.288.713T21 20h-8Zm-3-8q-1.65 0-2.825-1.175T6 8q0-1.65 1.175-2.825T10 4q1.65 0 2.825 1.175T14 8q0 1.65-1.175 2.825T10 12Zm-7 8q-.425 0-.713-.288T2 19v-1.8q0-.85.425-1.563T3.6 14.55q1.5-.75 3.112-1.15T10 13q.875 0 1.75.15t1.75.35l-1.7 1.7q-.625.625-1.213 1.275T10 18v.975q0 .3.113.563t.362.462H3Z"/></svg>

            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">User Community
              </span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('cities') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('cities') }}">

            <div
              class="{{ (Request::is('cities') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

              {{-- <i style="font-size: 1rem;"
                class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark {{ (Request::is('cities') ? 'text-white' : 'text-dark') }} "
                aria-hidden="true"></i> --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path class="text-center text-dark {{ (Request::is('cities') ? 'text-white' : 'text-dark') }} " fill="currentColor" d="M3 21V7h6V5l3-3l3 3v6h6v10H3Zm2-2h2v-2H5v2Zm0-4h2v-2H5v2Zm0-4h2V9H5v2Zm6 8h2v-2h-2v2Zm0-4h2v-2h-2v2Zm0-4h2V9h-2v2Zm0-4h2V5h-2v2Zm6 12h2v-2h-2v2Zm0-4h2v-2h-2v2Z"/></svg>

            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">City
              </span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('townships') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('townships') }}">

            <div
              class="{{ (Request::is('townships') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

              {{-- <i style="font-size: 1rem;"
                class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark {{ (Request::is('townships') ? 'text-white' : 'text-dark') }} "
                aria-hidden="true"></i> --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" viewBox="0 0 640 512"><path class="text-center text-dark {{ (Request::is('townships') ? 'text-white' : 'text-dark') }} " fill="currentColor" d="M480 48c0-26.5-21.5-48-48-48h-96c-26.5 0-48 21.5-48 48v48h-64V24c0-13.3-10.7-24-24-24s-24 10.7-24 24v72h-64V24c0-13.3-10.7-24-24-24S64 10.7 64 24v72H48c-26.5 0-48 21.5-48 48v320c0 26.5 21.5 48 48 48h544c26.5 0 48-21.5 48-48V240c0-26.5-21.5-48-48-48H480V48zm96 320v32c0 8.8-7.2 16-16 16h-32c-8.8 0-16-7.2-16-16v-32c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16zm-336 48h-32c-8.8 0-16-7.2-16-16v-32c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16zm-112-16c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-32c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32zm432-144c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16h-32c-8.8 0-16-7.2-16-16v-32c0-8.8 7.2-16 16-16h32zm-304-80v32c0 8.8-7.2 16-16 16h-32c-8.8 0-16-7.2-16-16v-32c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16zm-144-16c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-32c0-8.8 7.2-16 16-16h32zm144 144c0 8.8-7.2 16-16 16h-32c-8.8 0-16-7.2-16-16v-32c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32zm-144 16H80c-8.8 0-16-7.2-16-16v-32c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16zm304-48v32c0 8.8-7.2 16-16 16h-32c-8.8 0-16-7.2-16-16v-32c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16zM400 64c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16h-32c-8.8 0-16-7.2-16-16V80c0-8.8 7.2-16 16-16h32zm16 112v32c0 8.8-7.2 16-16 16h-32c-8.8 0-16-7.2-16-16v-32c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16z"/></svg>

            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">Township
              </span>
          </a>
        </li>

        <li class="w-full mt-4">
          <h6
            class="{{ (Request::is('rtl') ? 'pr-6 mr-2' : 'pl-6 ml-2') }} font-bold leading-tight uppercase text-size-xs opacity-60">
            Class Management</h6>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('teaching_classes') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('teaching_classes') }}">

            <div
              class="{{ (Request::is('teaching_classes') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

              {{-- <i style="font-size: 1rem;"
                class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark {{ (Request::is('teaching_classes') ? 'text-white' : 'text-dark') }} "
                aria-hidden="true"></i> --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path class="text-center text-dark {{ (Request::is('teaching_classes') ? 'text-white' : 'text-dark') }} " fill="currentColor" d="M120.998 40.998v37.943C136.22 89.471 146 109.278 146 131.001c0 13.71-3.901 26.65-10.598 36.985c3.465 1.35 7.106 2.85 10.15 4.172l122.352-22.783l5.918 54.842l-111.748 23.219c-.862 16.261-2.45 32.262-5.289 51.566h336.217V40.998zM96 88.998c-16.595 0-32.002 17.747-32.002 42.004c0 24.257 15.407 42.002 32.002 42.002c16.595 0 32.002-17.745 32.002-42.002S112.595 88.998 96 88.998zm156.096 81.629l-108.592 20.22c-14.24-5.602-4.956-3.035-21.469-8.517c-7.476 5.469-16.33 8.672-26.035 8.672c-8.6 0-16.53-2.523-23.428-6.9c-8.59 3.564-17.655 8.09-25.736 12.654c-12.992 7.338-23.722 13.211-27.838 16.033v130.213h20.004V232h17.996v263.002h30.004V326h17.996v169.002h26.004v-171.84l.154-.824c9.514-50.64 12.588-77.384 13.461-109.656l109.56-22.766zm-98.153 126.375c-.952 5.682-1.991 11.64-3.146 17.996H478v-17.996zM208 344.998c-16.595 0-32.002 17.747-32.002 42.004c0 18.198 8.67 32.73 20.01 38.855c3.599-1.662 7.482-2.706 11.68-2.851c4.633-.16 8.98.767 13.052 2.42c10.968-6.352 19.262-20.63 19.262-38.424c0-24.257-15.407-42.004-32.002-42.004zm112 0c-16.595 0-32.002 17.747-32.002 42.004c0 18.198 8.67 32.73 20.01 38.855c3.599-1.662 7.482-2.706 11.68-2.851c4.633-.16 8.98.767 13.052 2.42c10.968-6.352 19.262-20.63 19.262-38.424c0-24.257-15.407-42.004-32.002-42.004zm112 0c-16.595 0-32.002 17.747-32.002 42.004c0 18.198 8.67 32.73 20.01 38.855c3.599-1.662 7.482-2.706 11.68-2.851c4.633-.16 8.98.767 13.052 2.42c10.968-6.352 19.262-20.63 19.262-38.424c0-24.257-15.407-42.004-32.002-42.004zm-223.688 95.996c-3.844.133-8.907 2.93-14.3 8.785c-5.394 5.855-10.696 14.25-15.125 22.76c-4.226 8.12-7.609 16.16-10.06 22.463h85.339c-3.04-6.436-7.138-14.549-12.133-22.711c-5.298-8.658-11.511-17.138-17.668-22.957c-6.157-5.819-11.8-8.487-16.053-8.34zm112 0c-3.844.133-8.907 2.93-14.3 8.785c-5.394 5.855-10.696 14.25-15.125 22.76c-4.226 8.12-7.609 16.16-10.06 22.463h85.339c-3.04-6.436-7.138-14.549-12.133-22.711c-5.298-8.658-11.511-17.138-17.668-22.957c-6.157-5.819-11.8-8.487-16.052-8.34zm112 0c-3.844.133-8.907 2.93-14.3 8.785c-5.394 5.855-10.696 14.25-15.125 22.76c-4.226 8.12-7.609 16.16-10.06 22.463h85.339c-3.04-6.436-7.138-14.549-12.133-22.711c-5.298-8.658-11.511-17.138-17.668-22.957c-6.157-5.819-11.8-8.487-16.052-8.34z"/></svg>

            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">Teaching Class
              </span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('class_categories') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('class_categories') }}">

            <div
              class="{{ (Request::is('class_categories') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

              <i style="font-size: 1rem;"
                class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark {{ (Request::is('class_categories') ? 'text-white' : 'text-dark') }} "
                aria-hidden="true"></i>

            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">Class Category
              </span>
          </a>
        </li>



        {{-- Merchandise Management --}}
        <li class="w-full mt-4">
          <h6
            class="{{ (Request::is('rtl') ? 'pr-6 mr-2' : 'pl-6 ml-2') }} font-bold leading-tight uppercase text-size-xs opacity-60">
            Merchandise Management</h6>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('products') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('products') }}">

            <div
              class="{{ (Request::is('products') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

              {{-- <i style="font-size: 1rem;"
                class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark {{ (Request::is('products') ? 'text-white' : 'text-dark') }} "
                aria-hidden="true"></i> --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path class="text-lg text-center text-dark {{ (Request::is('products') ? 'text-white' : 'text-dark') }} " fill="currentColor" d="M7 22q-.825 0-1.413-.588T5 20q0-.825.588-1.413T7 18q.825 0 1.413.588T9 20q0 .825-.588 1.413T7 22Zm10 0q-.825 0-1.413-.588T15 20q0-.825.588-1.413T17 18q.825 0 1.413.588T19 20q0 .825-.588 1.413T17 22ZM12 9.5q-.425 0-.713-.288T11 8.5q0-.425.288-.713T12 7.5q.425 0 .713.288T13 8.5q0 .425-.288.713T12 9.5ZM11 6V1h2v5h-2ZM7 17q-1.125 0-1.725-.988T5.25 14.05L6.6 11.6L3 4H1V2h3.275l4.25 9h7.025l3.875-7l1.75.95l-3.875 7q-.275.5-.725.775T15.55 13H8.1L7 15h12v2H7Z"/></svg>

            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">Product
              </span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('product_groups') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('product_groups') }}">

            <div
              class="{{ (Request::is('product_groups') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

              {{-- <i style="font-size: 1rem;"
                class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark {{ (Request::is('product_groups') ? 'text-white' : 'text-dark') }} "
                aria-hidden="true"></i> --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 36 36"><path class="text-center {{ (Request::is('product_groups') ? 'text-white' : 'text-dark') }} " fill="#888888" d="m33.53 21.58l-4.94-2.83v-5.66a1 1 0 0 0-.51-.87L22.64 9.1a1 1 0 0 0-1 0l-5.44 3.12a1 1 0 0 0-.51.87v5.66l-4.94 2.83a1 1 0 0 0-.5.87v6.24a1 1 0 0 0 .5.86l5.45 3.12a1 1 0 0 0 1 0l4.95-2.83l4.95 2.83a1 1 0 0 0 .5.14a1 1 0 0 0 .49-.14l5.45-3.12a1 1 0 0 0 .5-.86v-6.24a1 1 0 0 0-.51-.87ZM22.14 11.12l4.45 2.55V19l-4.46 2.56l-4.44-2.6v-5.29Zm-5.45 19.53l-4.44-2.54V23l4.68-2.68l4.4 2.57V28ZM32 28.11l-4.44 2.54L22.93 28v-5.07l4.46-2.57L32 23Z" class="clr-i-outline clr-i-outline-path-1"/><path fill="#888888" d="M7 27.43a1 1 0 0 1-1-1V19.9a1 1 0 0 1 .5-.9l4.95-2.83v-5.63a1 1 0 0 1 .5-.87l5.21-3a1 1 0 0 1 1.37.37a1 1 0 0 1-.38 1.37l-4.7 2.68v5.66a1 1 0 0 1-.51.87L8 20.48v5.95a1 1 0 0 1-1 1Z" class="clr-i-outline clr-i-outline-path-2"/><path fill="#888888" d="M3 25.05a1 1 0 0 1-1-1v-6.52a1 1 0 0 1 .5-.86l5-2.84V8.17a1 1 0 0 1 .5-.86l5.25-3a1 1 0 0 1 1 1.74l-4.8 2.7v5.66a1 1 0 0 1-.51.87L4 18.11v5.94a1 1 0 0 1-1 1Z" class="clr-i-outline clr-i-outline-path-3"/><path fill="none" d="M0 0h36v36H0z"/></svg>

            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">Product Group
              </span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('product_categories') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('product_categories') }}">

            <div
              class="{{ (Request::is('product_categories') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

              <i style="font-size: 1rem;"
                class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark {{ (Request::is('product_categories') ? 'text-white' : 'text-dark') }} "
                aria-hidden="true"></i>

            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">Product Category
              </span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('category_products') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('category_products') }}">

            <div
              class="{{ (Request::is('category_products') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

              <i style="font-size: 1rem;"
                class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark {{ (Request::is('category_products') ? 'text-white' : 'text-dark') }} "
                aria-hidden="true"></i>

            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">Category Product
              </span>
          </a>
        </li>


        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('communities') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('communities') }}">

            <div
              class="{{ (Request::is('communities') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

              <i style="font-size: 1rem;"
                class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark {{ (Request::is('communities') ? 'text-white' : 'text-dark') }} "
                aria-hidden="true"></i>

            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">Communities
              </span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('community_categories') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('community_categories') }}">

            <div
              class="{{ (Request::is('community_categories') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

              <i style="font-size: 1rem;"
                class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark {{ (Request::is('community_categories') ? 'text-white' : 'text-dark') }} "
                aria-hidden="true"></i>

            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">Community Categories
              </span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('pages') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('pages') }}">

            <div
              class="{{ (Request::is('pages') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

              <i style="font-size: 1rem;"
                class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark {{ (Request::is('pages') ? 'text-white' : 'text-dark') }} "
                aria-hidden="true"></i>

            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">Page
              </span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('attributes') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('attributes') }}">

            <div
              class="{{ (Request::is('attributes') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

              <i style="font-size: 1rem;"
                class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark {{ (Request::is('attributes') ? 'text-white' : 'text-dark') }} "
                aria-hidden="true"></i>

            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">Attributes
              </span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('attribute_values') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('attribute_values') }}">

            <div
              class="{{ (Request::is('attribute_values') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

              <i style="font-size: 1rem;"
                class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark {{ (Request::is('attribute_values') ? 'text-white' : 'text-dark') }} "
                aria-hidden="true"></i>

            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">Attribute Value
              </span>
          </a>
        </li>
        

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('variations') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('variations') }}">

            <div
              class="{{ (Request::is('variations') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

              <i style="font-size: 1rem;"
                class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark {{ (Request::is('variations') ? 'text-white' : 'text-dark') }} "
                aria-hidden="true"></i>

            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">Varitaion
              </span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('blogs') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('blogs') }}">

            <div
              class="{{ (Request::is('blogs') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

              <i style="font-size: 1rem;"
                class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark {{ (Request::is('blogs') ? 'text-white' : 'text-dark') }} "
                aria-hidden="true"></i>

            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">Blog
              </span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('blog_categories') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
            href="{{ url('blog_categories') }}">

            <div
              class="{{ (Request::is('blog_categories') ? ' bg-gradient-fuchsia' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

              <i style="font-size: 1rem;"
                class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark {{ (Request::is('blog_categories') ? 'text-white' : 'text-dark') }} "
                aria-hidden="true"></i>

            </div>
            <span
              class="{{ (Request::is('rtl') ? 'mr-1' : 'ml-1') }} duration-300 opacity-100 pointer-events-none ease-soft">Blog Categories
              </span>
          </a>
        </li>
      </ul>
    </div>

    
  </aside>

  <!-- end sidenav -->