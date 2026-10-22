<x-base>
    <x-navbar />

    <header class="relative min-h-screen w-full flex items-center justify-center text-center text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-900/60 to-gray-900/40 z-0">
            <img alt="Metland College Hero" class="w-full h-full object-cover opacity-40 scale-105 transition-transform duration-700 ease-out" src="{{ asset('images/metlen.webp') }}" />
        </div>

        <div class="relative z-10 max-w-4xl px-4 sm:px-6 md:px-8 py-20 flex flex-col items-center justify-center">
            <span class="text-sm sm:text-base font-semibold tracking-widest uppercase text-accent/90 mb-3 bg-white/10 backdrop-blur-md px-4 py-1.5 rounded-full border border-white/20">
                Selamat Datang di LKP Metland
            </span>
            <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold tracking-tight leading-tight m-0 drop-shadow-md">
                Ingin Mengembangkan Potensi Diri?
            </h1>
            <p class="text-lg sm:text-2xl md:text-3xl mt-4 sm:mt-6 font-light max-w-2xl text-gray-200 drop-shadow">
                LPK Metland adalah tempat yang tepat untuk meraih masa depan profesional Anda.
            </p>

            <div class="mt-8 sm:mt-10 flex flex-col sm:flex-row gap-4 justify-center items-center w-full sm:w-auto">
                <button onclick="location.href=''" class="w-full sm:w-auto bg-light text-black font-semibold border-2 border-light px-8 py-3.5 text-base rounded-lg cursor-pointer hover:bg-transparent hover:text-white transition-all duration-300 shadow-lg">
                    Daftar Sekarang
                </button>
                <a href="#about" class="w-full sm:w-auto bg-white/10 backdrop-blur-md text-white font-medium border border-white/30 px-8 py-3.5 text-base rounded-lg hover:bg-white/20 transition-all duration-300 text-center">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>

        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-10 hidden sm:flex flex-col items-center gap-2 opacity-75 animate-bounce">
            <span class="text-xs uppercase tracking-wider font-light">Scroll ke bawah</span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </header>

    <section id="about" class="flex flex-wrap justify-between items-start px-4 sm:px-6 md:px-10 py-12 md:py-20 bg-gray-50">
        <div class="flex-1 min-w-full md:min-w-[60%] mb-6 md:mb-0 md:pr-8">
            <h1 class="text-secondary text-2xl sm:text-3xl font-bold tracking-tight">LKP METLAND COLLEGE</h1>
            <p class="text-gray-700 text-base sm:text-lg leading-relaxed mt-4">
                Kami memberikan pelayanan kepada peserta didik yang berminat untuk mengembangkan pengetahuan, keterampilan, dan karakter pada tingkat basic, intermediate, dan advanced. Tujuan kami adalah mempersiapkan para calon profesional muda lulusan Lembaga Kursus Pelatihan Metland College untuk mampu berkompetisi menempati posisi-posisi strategis pada dunia kerja dan dunia industri dengan bekal yang kami siapkan selama peserta didik mengikuti pendidikan yang di selenggarakan oleh pihak Metland College. Kami senantiasa menciptakan lingkungan dan budaya belajar yang dinamis, inovatif, dan kolaboratif sesuai dengan tuntutan dunia industri masa kini baik di dalam dan di luar negeri.
            </p>
            <div class="mt-6">
                <button class="bg-light border border-black px-6 py-3 text-base font-medium rounded-md cursor-pointer hover:bg-[#c0b09e] transition-colors shadow-sm" onclick="location.href=''">
                    Daftar Disini
                </button>
            </div>
        </div>
        <div class="flex-1 min-w-full md:min-w-[35%] order-first md:order-none mb-6 md:mb-0">
            <img src="{{ asset('images/about.webp') }}" alt="A group of people attending a seminar or workshop at Metland College" class="w-full h-auto rounded-xl shadow-md object-cover" />
        </div>
    </section>

    <section class="text-center py-12 md:py-20 px-4 sm:px-6">
        <h1 class="text-secondary text-2xl sm:text-3xl font-bold">LAYANAN LKP METLAND</h1>
        <p class="text-gray-600 text-base sm:text-lg mt-2">Kami menawarkan layanan untuk Anda :</p>
        <div class="flex flex-wrap justify-center gap-6 mt-8">
            <div class="bg-white rounded-xl shadow-md border border-gray-100 w-full max-w-xs p-6 text-center transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl">
                <img alt="Layanan" class="w-full rounded-lg object-cover h-48" src="{{asset('images/layanan.png')}}" />
                <p class="text-xl font-bold mt-5 text-gray-900">Layanan</p>
                <p class="text-gray-600 text-sm sm:text-base mt-2.5 leading-relaxed">
                    Kami memberikan pelayanan kepada peserta didik yang berminat untuk mengembangkan pengetahuan, keterampilan, dan karakter pada tingkat basic, intermediate, dan advanced.
                </p>
            </div>
            <div class="bg-white rounded-xl shadow-md border border-gray-100 w-full max-w-xs p-6 text-center transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl">
                <img alt="Kelas Bahasa" class="w-full rounded-lg object-cover h-48" src="{{asset('images/bahasa.png')}}" />
                <p class="text-xl font-bold mt-5 text-gray-900">Kelas Bahasa</p>
                <p class="text-gray-600 text-sm sm:text-base mt-2.5 leading-relaxed">
                    Kami memberikan pelayanan kepada peserta didik yang ingin mengembangkan kemampuan serta keterampilan berkomunikasi internasional.
                </p>
            </div>
        </div>
    </section>

    <section class="flex flex-col md:flex-row items-center bg-gray-50 border-y border-gray-200/80 px-4 sm:px-6 md:px-12 py-12 md:py-20">
        <div class="text-center flex-1 mb-6 md:mb-0 flex justify-center">
            <img alt="Indra Radjagukguk" class="w-48 h-48 sm:w-60 sm:h-60 md:w-72 md:h-72 rounded-full object-cover shadow-lg ring-4 ring-white" src="https://storage.googleapis.com/a1aa/image/48We6VZnaMQfqkdJOpbV12WN0bpiG5rCZgJS7bvGEqREgzwTA.jpg" />
        </div>
        <div class="flex-[2] md:pl-8 text-center md:text-left">
            <h1 class="m-0 text-2xl sm:text-3xl font-normal tracking-wide text-gray-900">MEET THE <span class="text-accent font-bold">DIRECTOR</span></h1>
            <p class="text-sm sm:text-base leading-relaxed text-gray-700 mt-4 italic">
                "Di TEFA Metland School, fokus kami adalah memberikan pendidikan perhotelan, kuliner dan teknologi informasi yang unggul kepada calon profesional di Indonesia. Tujuan kami adalah melengkapi mereka dengan keterampilan yang penting untuk meraih kesuksesan karir, khususnya dalam industri pariwisata, terutama di sektor perhotelan dan kapal pesiar. Kami berkomitmen untuk menciptakan lingkungan belajar yang dinamis, yang mendorong keberanian berinovasi, kreativitas, serta kepemimpinan, sambil tetap menghargai nilai-nilai seperti idealisme, kerja sama tim, dan kecakapan budaya."
            </p>
            <p class="font-bold text-base sm:text-lg mt-4 text-secondary">Indra Radjagukguk, Amd.Par., S.E., M.M.</p>
        </div>
    </section>

    <section class="px-4 sm:px-6 text-center py-12 md:py-20">
        <h1 class="text-secondary text-2xl sm:text-3xl font-bold mb-2">Program</h1>
        <div class="flex flex-wrap justify-center gap-6 mt-6">
            <div class="w-full max-w-lg p-2 sm:p-4 text-left">
                <img alt="Program 1" src="{{asset('images/program1.png')}}" class="w-full rounded-xl shadow-md transition-transform hover:scale-[1.02]" />
            </div>
            <div class="w-full max-w-lg p-2 sm:p-4 text-left">
                <img alt="Program 2" src="{{asset('images/program2.png')}}" class="w-full rounded-xl shadow-md transition-transform hover:scale-[1.02]" />
            </div>
        </div>
    </section>

    <section class="px-4 sm:px-6 text-center py-12 md:py-20 bg-gray-50 border-t border-gray-200/80">
        <h1 class="text-secondary text-2xl sm:text-3xl font-bold mb-2">Advisor</h1>
        <div class="flex flex-wrap justify-center gap-6 mt-6">
            <div class="w-full max-w-lg p-2 sm:p-4 text-left">
                <img alt="Advisor 1" src="{{asset('images/advisor1.png')}}" class="w-full rounded-xl shadow-md transition-transform hover:scale-[1.02]" />
            </div>
            <div class="w-full max-w-lg p-2 sm:p-4 text-left">
                <img alt="Advisor 2" src="{{asset('images/advisor2.png')}}" class="w-full rounded-xl shadow-md transition-transform hover:scale-[1.02]" />
            </div>
        </div>
    </section>

    <x-footer />
</x-base>
