<header x-data="{ navOpen: false, scrolledFromTop: false }" x-init="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
    @scroll.window="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
    :class="{
        'overflow-hidden': navOpen,
        'overflow-scroll': !navOpen
    }">
    <div
        class="
            fixed
            w-full
            bg-emerald-300
            flex
            justify-between
            items-center
            px-4
            md:px-12
            transition-all
            duration-200
            h-24
         "
        :class="{ 'h-24': !scrolledFromTop, 'h-14': scrolledFromTop }">
        <a href="#">
            <img src="https://scontent.fbud4-1.fna.fbcdn.net/v/t1.6435-9/86696355_813525415794560_990817468781953024_n.png?_nc_cat=110&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=ICagvRbbbboAX_YXmrR&tn=MvzziKNw5jDwUsUW&_nc_ht=scontent.fbud4-1.fna&oh=00_AT9DXoD49JtS1H6RtY5RqCR77SOfgb_Ckb0nILMMwQI-Rg&oe=62A35BAD"
                alt="CoderGirl Logo" class="h-12 transform origin-left transition duration-200"
                :class="{ 'scale-100': !scrolledFromTop, 'scale-75': scrolledFromTop }" />
        </a>
        <nav>
            <button class="md:hidden" @click="navOpen = !navOpen">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <ul class="
                  fixed
                  left-0
                  right-0
                  min-h-screen
                  px-4
                  pt-8
                  space-y-4
                  bg-emerald-300
                  text-white
                  transform
                  transition
                  duration-300
                  translate-x-full
                  md:relative md:flex md:space-x-10 md:min-h-0 md:px-0 md:py-0 md:space-y-0 md:translate-x-0
               "
                :class="{ 'translate-x-full': !navOpen }" :class="{ 'translate-x-0': navOpen }">
                <li class="">
                    <a href="#" @click="navOpen = false">Home</a>
                </li>
                <li class="">
                    <a href="#features" @click="navOpen = false">Features</a>
                </li>
                <li>
                    <a href="#about" @click="navOpen = false">About</a>
                </li>
                <li>
                    <a href="#contact" @click="navOpen = false">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
   
</header>
