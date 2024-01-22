<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Ficus</title>

    <link href="/dist/css/style.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</head>

<body class="antialiased txt-color-white bg-color-start collapsed">
    <nav class="sidebar shadow-lg">
        <div class="sidebar-top-wrapper">
            <div class="sidebar-top">
                <a href="#" class="logo__wrapper">
                    <img src="/assets/ficus_brand.png" alt="Logo" class="logo-small">
                    <span class="hide company-name">
                        Laravel Ficus
                    </span>
                </a>
            </div>
            <button class="expand-btn" type="button">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.00979 2.72L10.3565 7.06667C10.8698 7.58 10.8698 8.42 10.3565 8.93333L6.00979 13.28"
                        stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <div class="sidebar-links">
            <ul>
                <li>
                    <a href="/dashboard" title="Dashboard">

                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-dashboard"
                            width="24" height="24" viewBox="0 -960 960 960" fill="currentColor"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M520-600v-240h320v240H520ZM120-440v-400h320v400H120Zm400 320v-400h320v400H520Zm-400 0v-240h320v240H120Zm80-400h160v-240H200v240Zm400 320h160v-240H600v240Zm0-480h160v-80H600v80ZM200-200h160v-80H200v80Zm160-320Zm240-160Zm0 240ZM360-280Z" />
                        </svg>
                        <span class="link hide">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/items" title="Items">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-dashboard"
                            width="24" height="24" viewBox="0 -960 960 960" fill="currentColor"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M200-80q-33 0-56.5-23.5T120-160v-451q-18-11-29-28.5T80-680v-120q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v120q0 23-11 40.5T840-611v451q0 33-23.5 56.5T760-80H200Zm0-520v440h560v-440H200Zm-40-80h640v-120H160v120Zm200 280h240v-80H360v80Zm120 20Z" />
                        </svg>
                        <span class="link hide">Items</span>
                    </a>
                </li>

                <li>
                    <a href="/users" title="Users">

                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-dashboard"
                            width="24" height="24" viewBox="0 -960 960 960" fill="currentColor"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                        </svg>
                        <span class="link hide">Users</span>
                    </a>
                </li>
                <li>
                    <a href="/roles" title="Roles">

                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-dashboard"
                            width="24" height="24" viewBox="0 -960 960 960" fill="currentColor"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M0-240v-63q0-43 44-70t116-27q13 0 25 .5t23 2.5q-14 21-21 44t-7 48v65H0Zm240 0v-65q0-32 17.5-58.5T307-410q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v65H240Zm540 0v-65q0-26-6.5-49T754-397q11-2 22.5-2.5t23.5-.5q72 0 116 26.5t44 70.5v63H780Zm-455-80h311q-10-20-55.5-35T480-370q-55 0-100.5 15T325-320ZM160-440q-33 0-56.5-23.5T80-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T160-440Zm640 0q-33 0-56.5-23.5T720-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T800-440Zm-320-40q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-600q0 50-34.5 85T480-480Zm0-80q17 0 28.5-11.5T520-600q0-17-11.5-28.5T480-640q-17 0-28.5 11.5T440-600q0 17 11.5 28.5T480-560Zm1 240Zm-1-280Z" />
                        </svg>
                        <span class="link hide">Roles</span>
                    </a>
                </li>
                <li>
                    <a href="/permissions" title="Permissions">

                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-dashboard"
                            width="24" height="24" viewBox="0 -960 960 960" fill="currentColor"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M240-120q-66 0-113-47T80-280q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm480 0q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm-480-80q33 0 56.5-23.5T320-280q0-33-23.5-56.5T240-360q-33 0-56.5 23.5T160-280q0 33 23.5 56.5T240-200Zm480 0q33 0 56.5-23.5T800-280q0-33-23.5-56.5T720-360q-33 0-56.5 23.5T640-280q0 33 23.5 56.5T720-200ZM480-520q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm0-80q33 0 56.5-23.5T560-680q0-33-23.5-56.5T480-760q-33 0-56.5 23.5T400-680q0 33 23.5 56.5T480-600Zm0-80Zm240 400Zm-480 0Z" />
                        </svg>

                        <span class="link hide">Permissions</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="/settings" title="Settings">

                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-dashboard"
                            width="24" height="24" viewBox="0 -960 960 960" fill="currentColor">
                            <path
                                d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm70-80h79l14-106q31-8 57.5-23.5T639-327l99 41 39-68-86-65q5-14 7-29.5t2-31.5q0-16-2-31.5t-7-29.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q22 23 48.5 38.5T427-266l13 106Zm42-180q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Zm-2-140Z" />
                        </svg>

                        <span class="link hide">Settings</span>
                    </a>
                </li> --}}
            </ul>
        </div>
        <div class="sidebar__profile">
            <div class="avatar__wrapper">
                <div class="avatar d-flex justify-content-center align-items-center"
                    style="background-color: #{{ str_pad(dechex(mt_rand(0, 0xffffff)), 6, '0', STR_PAD_LEFT) }};">
                    <span>{{ strtolower(substr(Auth::user()->username, 0, 1)) . strtoupper(substr(Auth::user()->username, 3, 1)) }}</span>
                </div>
                <div class="online__status"></div>
            </div>
            <div class="avatar__name hide">
                <div class="user-name">{{ Auth::user()->name }}</div>
                <div class="email">{{ Auth::user()->username }}</div>
            </div>
            <a href="{{ url('/logout') }}" class="logout hide">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                    <path d="M9 12h12l-3 -3"></path>
                    <path d="M18 15l3 -3"></path>
                </svg>
            </a>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <script src="/dist/js/sidebar.js"></script>
    <script src="/dist/js/modal.js"></script>

</body>


</html>
