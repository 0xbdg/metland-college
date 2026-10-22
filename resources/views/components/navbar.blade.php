<div id="overlayNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href="#">Home</a>
        <a href="#">Course</a>
        <a href="#">Blog</a>
        <a href="#">Contact</a>
    </div>
</div>


<nav class="fixed top-0 left-0 w-full z-50 bg-primary/75 backdrop-blur-md shadow-lg shadow-black/10 border-b border-white/10 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 sm:h-20">

            <!-- Brand Logo & Title -->
            <div class="flex items-center gap-3">
                <a href="/" class="flex items-center gap-3 group">
                    <img alt="Metland College Logo" class="h-10 sm:h-12 w-auto object-contain transition-transform duration-300 group-hover:scale-105" src="{{ asset('images/logo.png') }}" />
                    <span class="text-white text-lg sm:text-xl font-bold tracking-tight group-hover:text-amber-200 transition-colors">Metland College</span>
                </a>
            </div>

            <div class="hidden md:flex items-center gap-8">
                <a href="/" class="text-white/90 hover:text-white font-medium text-sm lg:text-base transition-colors relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-accent after:transition-all hover:after:w-full">Home</a>
                <a href="#" class="text-white/90 hover:text-white font-medium text-sm lg:text-base transition-colors relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-accent after:transition-all hover:after:w-full">Review</a>
                <a href="/blog" class="text-white/90 hover:text-white font-medium text-sm lg:text-base transition-colors relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-accent after:transition-all hover:after:w-full">Blog</a>
                <a href="/contact" class="text-white/90 hover:text-white font-medium text-sm lg:text-base transition-colors relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-accent after:transition-all hover:after:w-full">Contact</a>
            </div>

            <div class="flex md:hidden">
                <button type="button" onclick="openNav()" class="text-white/90 hover:text-white p-2 rounded-lg bg-white/10 hover:bg-white/20 transition-all focus:outline-none focus:ring-2 focus:ring-white/30" aria-label="Toggle Navigation">
                    <i class="fa-solid fa-bars text-lg"></i>
                </button>
            </div>

        </div>
    </div>
</nav>

