<nav class="box-border w-full z-30 bg-transparent fixed">
    <div class="container box-border mx-auto px-4 lg:px-40 bg-transparent text-white font-semibold text-lg">
        <div class="flex justify-between items-center lg:justify-center relative">
            <!-- Logo -->
            <div class="p-3 mt-3 ml-7 lg:absolute lg:left-1/2 lg:transform lg:-translate-x-1/2">
                <a class="nav-brand" href="">
                    <img src="img/logo-afm.png" alt="Anugrah Forklift Megantara" class="h-20 w-auto">
                </a>
            </div>

            <!-- Desktop menu -->
            <div class="hidden lg:flex justify-between items-center w-full">
                <ul class="feature flex">
                    <li class="p-5">
                        <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" data-target="beranda">Beranda</a>
                    </li>
                    <li class="p-5">
                        <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" data-target="tentang-kami">Tentang Kami</a>
                    </li>
                </ul>
                <ul class="flex items-center">
                    <p class="p-3.5 text-3xl font-light">|</p>
                    <li class="nav-link p-5">
                        <a href="https://www.instagram.com/anugerah_forklif_megantara_?utm_source=qr&igsh=MTc3Mm10andmNWVlcw==">
                            <svg class="w-8 h-8 fill-white hover:fill-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3"/></svg>
                        </a>
                    </li>
                    <li class="nav-link p-5">
                        <a href="https://www.facebook.com/profile.php?id=100080471186001">
                            <svg class="w-8 h-8 fill-white hover:fill-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4z"/></svg>
                        </a>
                    </li>
                    <li class="nav-link p-5">
                        <a href="https://wa.me/081515124120">
                            <svg class="w-8 h-8 fill-white hover:fill-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19.05 4.91A9.816 9.816 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.264 8.264 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.183 8.183 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07c0 1.22.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Hamburger button -->
            <button type="button" class="lg:hidden focus:outline-none z-50 p-5" id="menu-toggle" aria-label="Toggle menu" aria-expanded="false">
                <span class="sr-only">Toggle menu</span>
                <div class="hamburger-icon w-6 h-5 flex flex-col justify-between items-center">
                    <span class="w-full h-0.5 bg-white rounded-full"></span>
                    <span class="w-full h-0.5 bg-white rounded-full"></span>
                    <span class="w-full h-0.5 bg-white rounded-full"></span>
                </div>
            </button>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="fixed box-border top-0 right-0 bottom-0 w-64 bg-gray-900 text-white p-6 transform translate-x-full transition-transform duration-300 ease-in-out lg:hidden flex flex-col justify-between">
        <div>
            <div class="space-y-4">
                <a href="{{ route('dashboard') }}" class="block text-sm font-medium hover:text-gray-300 {{ request()->routeIs('dashboard') ? 'active' : '' }}">Beranda</a>
                <a href="{{ route('about') }}" class="block text-sm font-medium hover:text-gray-300 {{ request()->routeIs('about') ? 'active' : '' }}">Tentang Kami</a>
            </div>
        </div>
        <div class="mt-auto">
            <p class="text-sm text-gray-400 mb-2">Kontak Kami:</p>
            <div class="flex space-x-4">
                <a href="" class="text-white hover:text-gray-300">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3"/></svg>
                </a>
                <a href="" class="text-white hover:text-gray-300">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4z"/></svg>
                </a>
                <a href="" class="text-white hover:text-gray-300">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M19.05 4.91A9.816 9.816 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.264 8.264 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.183 8.183 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07c0 1.22.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
                </a>
            </div>
        </div>
    </div>
</nav>