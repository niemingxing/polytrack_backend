<div class="ezy__nav2 light py-3 bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white relative">
    <nav>
        <div class="container px-4">
            <div class="flex justify-between items-center">
            <h1 class="flex items-center">
                <img src="https://src.polytrack.info/polytrack_logo.png" alt="Polytrack Logo" class="mr-2 h-12"> 
                <a class="font-black text-3xl" href="/">Polytrack</a>
            </h1>
                <button class="block lg:hidden cursor-pointer h-10 z-20" type="button" id="hamburger">
                    <div class="h-0.5 w-7 bg-black dark:bg-white -translate-y-2"></div>
                    <div class="h-0.5 w-7 bg-black dark:bg-white"></div>
                    <div class="h-0.5 w-7 bg-black dark:bg-white translate-y-2"></div>
                </button>
                <ul class="flex flex-col lg:flex-row justify-center items-center text-3xl gap-6 lg:text-base lg:gap-2 absolute h-screen w-screen top-0 left-full lg:left-0 lg:relative lg:h-auto lg:w-auto bg-white dark:bg-[#0b1727] lg:bg-transparent" id="navbar">
                    <li class="">
                        <a class="px-4 opacity-100" href="{{ localized_url('') }}">{{__('messages.home')}}</a>
                    </li>
                    <li class="">
                        <a class="px-4 opacity-50 hover:opacity-100 " href="{{ localized_url('') }}#how-it-works">{{__('messages.how_it_works')}}</a>
                    </li>
                    <li class="">
                        <a class="px-4 opacity-50 hover:opacity-100" href="{{ localized_url('') }}#faq">{{__('messages.faq')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>