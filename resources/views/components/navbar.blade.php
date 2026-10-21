<div id="overlayNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href="#">Home</a>
        <a href="#">Course</a>
        <a href="#">Blog</a>
        <a href="#">Contact</a>
    </div>
</div>


<nav class="bg-primary px-5 py-2.5 flex justify-between items-center overflow-hidden">
    <div class="flex items-center">
        <img alt="" class="h-12 mr-2.5" src="{{ asset('images/logo.png')}}" width="50"/>
        <span class="text-white text-xl font-bold">Metland College</span>
    </div>
    <div class="hidden md:flex gap-5">
        <a href="/" class="text-white no-underline text-base">Home</a>
        <a href="#" class="text-white no-underline text-base">Course</a>
        <a href="/blog" class="text-white no-underline text-base">Blog</a>
        <a href="/contact" class="text-white no-underline text-base">Contact</a>
        <a href="javascript:void(0);" class="md:hidden" onclick="openNav()">
            <i class="fa fa-bars text-white"></i>
        </a>
    </div>
    <a href="javascript:void(0);" class="md:hidden text-white" onclick="openNav()">
        <i class="fa fa-bars"></i>
    </a>
</nav>



