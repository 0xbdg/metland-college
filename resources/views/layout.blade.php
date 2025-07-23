<!DOCTYPE html>
<html lang="id">
    <head>
        <title>Metland Collage</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="image/logo.png">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans m-0 p-0">
        <!-- Overlay Navigation -->
        <div id="overlayNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
              <a href="#">Home</a>
              <a href="#">Course</a>
              <a href="#">Blog</a>
              <a href="#">Contact</a>
            </div>
        </div>

        <!-- Navbar -->
        <nav class="bg-primary px-5 py-2.5 flex justify-between items-center overflow-hidden">
            <div class="flex items-center">
                <img alt="" class="h-12 mr-2.5" src="{{ asset('images/logo.png')}}" width="50"/>
                <span class="text-white text-xl font-bold">Metland Collage</span>
            </div>
            <div class="hidden md:flex gap-5">
                <a href="#" class="text-white no-underline text-base">Home</a>
                <a href="#" class="text-white no-underline text-base">Course</a>
                <a href="#" class="text-white no-underline text-base">Blog</a>
                <a href="#" class="text-white no-underline text-base">Contact</a>
                <a href="javascript:void(0);" class="md:hidden" onclick="openNav()">
                    <i class="fa fa-bars text-white"></i>
                </a>
            </div>
            <a href="javascript:void(0);" class="md:hidden text-white" onclick="openNav()">
                <i class="fa fa-bars"></i>
            </a>
        </nav>

        <!-- Hero Section -->
        <header class="relative text-center text-white">
            <div class="bg-gray-900 inset-0 z-0">
                <img alt="" class="w-full h-full object-cover opacity-30" src="image/metlen.webp"/>
            </div>
            <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center">
                <h1 class="text-4xl m-0">Ingin mengembangkan potensi diri?</h1>
                <p class="text-2xl mt-2.5 mx-0">LPK Metland adalah tempat yang tepat</p>
            </div>
        </header>

        <!-- Section 1 -->
        <section class="flex flex-wrap justify-between items-start px-5 py-5">
            <div class="flex-1 min-w-full md:min-w-[60%] mb-5">
                <h1 class="text-secondary text-2xl md:text-center">LKP METLAND COLLAGE</h1>
                <p class="text-black text-xl leading-relaxed">
                    Kami memberikan pelayanan kepada peserta didik yang berminat untuk mengembangkan pengetahuan, keterampilan, dan karakter pada tingkat basic, intermediate, dan advanced. Tujuan kami adalah mempersiapkan para calon profesional muda lulusan Lembaga Kursus Pelatihan Metland College untuk mampu berkompetisi menempati posisi-posisi strategis pada dunia kerja dan dunia industri dengan bekal yang kami siapkan selama peserta didik mengikuti pendidikan yang di selenggarakan oleh pihak Metland College. Kami senantiasa menciptakan lingkungan dan budaya belajar yang dinamis, inovatif, dan kolaboratif sesuai dengan tuntutan dunia industri masa kini baik di dalam dan di luar negeri.
                </p>
                <div class="mt-5">
                    <button class="bg-light border border-black px-5 py-2.5 text-base cursor-pointer hover:bg-[#c0b09e]" onclick="location.href=''">Daftar Disini</button>
                </div>
            </div>
            <div class="flex-1 min-w-full md:min-w-[35%] order-first md:order-none mb-5 md:mb-0">
                <img src="image/about.webp" alt="A group of people attending a seminar or workshop at Metland College" class="w-full h-auto" />
            </div>
        </section>

        <!-- Section 2 -->
        <section class="text-center mt-12 px-5">
            <h1 class="text-secondary text-2xl font-bold">LAYANAN LKP METLAND</h1>
            <p class="text-gray-800 text-lg mt-2.5">kami menawarkan layanan untuk Anda :</p>
            <div class="flex flex-wrap justify-center mt-7">
                <div class="bg-white rounded-lg shadow-md m-4 w-full max-w-xs p-5 text-center">
                    <img alt="" class="w-full rounded-lg" src="image/layanan.png"/>
                    <p class="text-xl font-bold mt-4">Layanan</p>
                    <p class="text-gray-600 mt-2.5">
                        Kami memberikan pelayanan kepada peserta didik yang berminat untuk mengembangkan pengetahuan, keterampilan, dan karakter pada tingkat basic, intermediate, dan advanced.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-md m-4 w-full max-w-xs p-5 text-center">
                    <img alt="" class="w-full rounded-lg" src="image/bahasa.png"/>
                    <p class="text-xl font-bold mt-4">Kelas Bahasa</p>
                    <p class="text-gray-600 mt-2.5">
                        Kami memberikan pelayanan kepada peserta didik yang ingin mengembangkan kemampuan serta keterampilan berkomunikasi internasional.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 3 -->
        <section class="flex flex-col md:flex-row items-center bg-white mt-24 px-5">
            <div class="text-center flex-1">
                <img alt="" class="w-72 h-72 rounded-full object-cover" src="https://storage.googleapis.com/a1aa/image/48We6VZnaMQfqkdJOpbV12WN0bpiG5rCZgJS7bvGEqREgzwTA.jpg"/>
            </div>
            <div class="flex-[2] md:pl-5 pt-5 md:pt-0 text-center md:text-left">
                <h1 class="m-0 text-2xl font-normal">MEET THE <span class="text-accent">DIRECTOR</span></h1>
                <p class="text-base leading-relaxed text-gray-800">
                    "DI TEFA Metland School, fokus kami adalah memberikan pendidikan perhotelan, kuliner dan teknologi informasi yang unggul kepada calon profesional di Indonesia. Tujuan kami adalah melengkapi mereka dengan keterampilan yang penting untuk meraih kesuksesan karir, khususnya dalam industri pariwisata, terutama di sektor perhotelan dan kapal pesiar. Kami berkomitmen untuk menciptakan lingkungan belajar yang dinamis, yang mendorong keberanian berinovasi, kreativitas, serta kepemimpinan, sambil tetap menghargai nilai-nilai seperti idealisme, kerja sama tim, dan kecakapan budaya."
                </p>
                <p class="font-bold mt-2.5">Indra Radjagukguk, Amd.Par., S.E., M.M.</p>
            </div>
        </section>

        <!-- Section 4 -->
        <section class="px-5 text-center mt-24">
            <h1 class="text-secondary text-2xl mb-1.5">Program</h1>
            <div class="flex flex-wrap justify-center gap-5 mt-5">
                <div class="w-full max-w-lg p-5 text-left">
                    <img alt="" src="image/program1.png" class="w-full"/>
                </div>
                <div class="w-full max-w-lg p-5 text-left">
                    <img alt="" src="image/program2.png" class="w-full"/>
                </div>
            </div>
        </section>

        <!-- Section 5 -->
        <section class="px-5 text-center mt-24">
            <h1 class="text-secondary text-2xl mb-1.5">Advisor</h1>
            <div class="flex flex-wrap justify-center gap-5 mt-5">
                <div class="w-full max-w-lg p-5 text-left">
                    <img alt="" src="image/advisor1.png" class="w-full"/>
                </div>
                <div class="w-full max-w-lg p-5 text-left">
                    <img alt="" src="image/advisor2.png" class="w-full"/>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-dark pt-11 pb-5 text-sm leading-6 text-[#737373]">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 pr-4">
                        <h6 class="text-white text-base uppercase tracking-wider mt-1.25 mb-2.5">About</h6>
                        <p class="text-justify">
                            Metland College didirikan pada tahun 2016 di Metland Transyogi Cileungsi Bogor.
                            Sebagai bagian dari inisiatif untuk meningkatkan keterampilan siswa lulusan dari berbagai jenjang pendidikan seperti SMK, SMA, Mts, dan Paket-C, tujuannya adalah agar mereka memiliki
                            karakter dan budaya kerja serta kompetensi teknis yang sesuai dengan standar industri saat ini.
                            sebuah lembaga Metland College menyediakan penyelenggaraan pendidikan vokasional non-formal yang mengutamakan pada pengembangan teknis, sosial,
                            dan kecapakan hidup peserta didik pada saat bekerja di Industri yang sesuai minatnya atau berwirausaha.
                        </p>
                    </div>
                    <div class="w-full md:w-1/4 mt-5 md:mt-0">
                        <h6 class="text-white text-base uppercase tracking-wider mt-1.25 mb-2.5">Quick Links</h6>
                        <ul class="list-none pl-0">
                            <li class="block"><a href="#" class="text-[#737373] hover:text-[#3366cc]">Home</a></li>
                            <li class="block"><a href="#" class="text-[#737373] hover:text-[#3366cc]">Course</a></li>
                            <li class="block"><a href="#" class="text-[#737373] hover:text-[#3366cc]">Contact</a></li>
                            <li class="block"><a href="#" class="text-[#737373] hover:text-[#3366cc]">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <hr class="border-t border-gray-600 opacity-50 my-5">
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-2/3">
                        <p class="m-0">Copyright &copy; 2024 All Rights Reserved by <a href="#" class="text-[#737373] hover:text-[#3366cc]">Metland College</a>.</p>
                    </div>
                    <div class="w-full md:w-1/3 mt-4 md:mt-0">
                        <ul class="list-none flex justify-end pl-0 m-0">
                            <li class="mr-2"><a href="#" class="w-10 h-10 leading-10 bg-[#33353d] rounded-full text-center block hover:bg-[#3b5998]"><i class="fa fa-facebook"></i></a></li>
                            <li class="mr-2"><a href="#" class="w-10 h-10 leading-10 bg-[#33353d] rounded-full text-center block hover:bg-[#00aced]"><i class="fa fa-twitter"></i></a></li>
                            <li class="mr-2"><a href="#" class="w-10 h-10 leading-10 bg-[#33353d] rounded-full text-center block hover:bg-[#ea4c89]"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="w-10 h-10 leading-10 bg-[#33353d] rounded-full text-center block hover:bg-[#007bb6]"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
