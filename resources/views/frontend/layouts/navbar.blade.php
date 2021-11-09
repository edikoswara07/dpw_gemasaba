<div class="w-full shadow-lg py-3 z-50 fixed bg-[#ffffff]">
    <div class="container mx-auto px-4 md:px-10 lg:px-24 xl:px-32 2xl:px-56">
        <div class="flex flex-row justify-between items-center">
            <div class="w-6/12 md:w-3/12 flex justify-start">
                <div class="flex items-center space-x-2">
                    <div class="flex">
                        <img src="logo.png" alt="logo" class="h-10 md:h-12 w-full object-cover object-center">
                    </div>
                    <div class="flex justify-start flex-col">
                        <span class="font-bold text-emerald-900 text-xs  md:text-sm">DPW Gemasaba</span>
                        <span class="font-bold text-red-900 text-xs  md:mt-0 md:text-sm">Jawa Barat</span>
                    </div>
                </div>
            </div>
            <div class="w-6/12 md:hidden flex justify-end">
                <ul class="flex space-x-4">
                    <li class="">
                        <button
                            class="mobile-menu-button block transition duration-500 ease-in-out motion-reduce:transition-none motion-reduce:transform-none ">
                            <i data-feather="menu" class="text-coolGray-900 h-6 w-6" id="menuTogglePlus"></i>
                        </button>
                        <button
                            class="mobile-menu-button-close hidden transition duration-500 ease-in-out motion-reduce:transition-none motion-reduce:transform-none ">
                            <i data-feather="x-circle" class="text-coolGray-900 h-6 w-6" id="menuToggleClose"></i>
                        </button>
                    </li>
                </ul>
            </div>
            <div class=" w-full md:w-6/12 justify-center hidden md:flex">
                <ul class="flex space-x-4">
                    <li class="text-sm text-coolGray-900">Home</li>
                    <li class="text-sm text-coolGray-900">About us</li>
                    <li class="text-sm text-coolGray-900">Programs</li>
                    <li class="text-sm text-coolGray-900">News</li>
                    <li class="text-sm text-coolGray-900">E-Paper</li>
                </ul>
            </div>
            <div class="w-3/12 justify-end  hidden md:flex">
                <ul class="flex space-x-4">
                    <li class=""><i data-feather="instagram" class="text-coolGray-900 h-4 w-4"></i></li>
                    <li class=""><i data-feather="facebook" class="text-coolGray-900 h-4 w-4"></i></li>
                    <li class=""><i data-feather="twitter" class="text-coolGray-900 h-4 w-4"></i></li>
                    <li class=""><i data-feather="youtube" class="text-coolGray-900 h-4 w-4"></i></li>
                    <li class=""><i data-feather="phone-call" class="text-coolGray-900 h-4 w-4"></i></li>
                </ul>
            </div>
        </div>
        <div class="mt-4 hidden md:hidden transition duration-150 ease-in-out mobile-menu" id="toogleMenu">
            <ul
                class="space-y-2 transition duration-500 ease-in-out motion-reduce:transition-none motion-reduce:transform-none ">
                <li class="w-full hover:bg-sky-500 p-2 rounded-md transition duration-150 ease-in-out">
                    Home</li>
                <li class="w-full hover:bg-sky-500 p-2 rounded-md transition duration-150 ease-in-out">
                    About Us</li>
                <li class="w-full hover:bg-sky-500 p-2 rounded-md transition duration-150 ease-in-out">
                    Programs</li>
                <li class="w-full hover:bg-sky-500 p-2 rounded-md transition duration-150 ease-in-out">
                    News</li>
                <li class="w-full hover:bg-sky-500 p-2 rounded-md transition duration-150 ease-in-out">
                    E-Paper</li>
            </ul>
        </div>
    </div>
</div>

<script>
    // Grab HTML Elements
	const btn = document.querySelector("button.mobile-menu-button");
    const btnClose = document.querySelector("button.mobile-menu-button-close");
	const menu = document.querySelector(".mobile-menu");

	// Add Event Listeners
	btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");    	
        btnClose.classList.toggle("hidden");
        btn.classList.toggle("hidden");

    });
    btnClose.addEventListener("click", () => {
        menu.classList.toggle("hidden");    	
        btnClose.classList.toggle("hidden");
        btn.classList.toggle("hidden");
    });
</script>