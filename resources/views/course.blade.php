<x-base>
<x-navbar />
 <div class="bg-gray-50 text-gray-700 font-sans min-h-screen py-6 px-4 md:px-8 lg:px-12">
        <div class="max-w-7xl mx-auto">

            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6 pb-2">
                <!-- Left Controls: View icons & results count -->
                <div class="flex items-center space-x-3 text-gray-600">
                    <div class="flex items-center space-x-1 border border-gray-200 rounded p-1 bg-white">
                        <button class="p-1.5 text-blue-600 hover:bg-gray-100 rounded transition" title="Grid View">
                            <i class="fa-solid fa-border-all text-lg"></i>
                        </button>
                        <button class="p-1.5 text-gray-400 hover:bg-gray-100 rounded transition" title="List View">
                            <i class="fa-solid fa-list text-lg"></i>
                        </button>
                    </div>
                    <span class="text-sm font-medium text-gray-600">Showing 1-10 of 10 results</span>
                </div>

                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                    <div class="relative">
                        <select class="w-full sm:w-auto appearance-none bg-white border border-gray-300 rounded px-4 py-2 pr-8 text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500 cursor-pointer">
                            <option>Newly published</option>
                            <option>Oldest</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
                            <i class="fa-solid fa-chevron-down text-xs"></i>
                        </div>
                    </div>

                    <div class="relative min-w-[240px]">
                        <input type="text" placeholder="Search courses..." class="w-full bg-white border border-gray-300 rounded px-3 py-2 pr-9 text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500 placeholder-gray-400">
                        <button class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                            <i class="fa-solid fa-magnifying-glass text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- MAIN CONTENT LAYOUT (Grid Cards + Sidebar) -->
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

                <!-- LEFT COLUMN: COURSE CARDS GRID (3 cols on lg, 2 on md, 1 on sm) -->
                <div class="lg:col-span-3 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    <!-- CARD 1 -->
                    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition duration-200 flex flex-col">
                        <!-- Thumbnail Header -->
                        <div class="relative h-48 bg-gradient-to-br from-indigo-950 via-purple-900 to-indigo-900 flex items-center justify-center p-4">
                            <button class="absolute top-3 right-3 text-amber-500 hover:text-amber-600 z-10">
                                <i class="fa-regular fa-heart text-lg"></i>
                            </button>
                            <!-- Banner Inner SVG/Styling Replicating Brush Banner -->
                            <div class="relative bg-purple-700 text-white rounded-full px-6 py-4 text-center max-w-[85%] shadow-lg border border-purple-500 z-0">
                                <span class="absolute -top-3 left-3 text-2xl opacity-70">“</span>
                                <p class="text-xs font-bold leading-tight uppercase tracking-wider">N.78SPS02.022.1</p>
                                <p class="text-xs font-semibold leading-snug mt-0.5">Merencanakan Evaluasi Hasil Pembelajaran</p>
                                <span class="absolute -bottom-3 right-3 text-2xl opacity-70">”</span>
                            </div>
                            <!-- Center Hover Overlay Icon -->
                            <div class="absolute inset-0 bg-black/20 flex items-center justify-center pointer-events-none">
                                <div class="bg-white/30 backdrop-blur-sm p-2 rounded border border-white/50 text-white">
                                    <i class="fa-solid fa-arrow-up-right-from-square text-sm"></i>
                                </div>
                            </div>
                            <!-- Circular Logo Avatar -->
                            <div class="absolute -bottom-5 left-1/2 -translate-x-1/2 w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center border-2 border-white shadow-md z-10">
                                <img src="{{asset('images/logo.png')}}" />
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="pt-7 pb-4 px-4 text-center flex-1 flex flex-col justify-between">
                            <div>
                                <span class="text-xs font-semibold text-gray-500 uppercase tracking-wide">LPK PPGK</span>
                                <h3 class="font-serif font-bold text-gray-800 text-base mt-1">Modul N.78SPS02.022.1</h3>
                                <div class="w-8 h-1 bg-blue-500 mx-auto my-3 rounded-full"></div>
                            </div>

                            <div>
                                <div class="flex items-center justify-center space-x-4 text-xs text-gray-500 my-2">
                                    <span class="flex items-center gap-1.5"><i class="fa-regular fa-file-lines"></i> 16</span>
                                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-user-graduate"></i> 0</span>
                                </div>

                                <div class="mt-3 flex items-center justify-end space-x-2 text-sm font-semibold">
                                    <span class="line-through text-gray-400 text-xs font-normal">Rp5.000.000</span>
                                    <span class="text-orange-500 font-bold">Rp3.500.000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CARD 2 -->
                    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition duration-200 flex flex-col">
                        <div class="relative h-48 bg-gradient-to-br from-indigo-950 via-purple-900 to-indigo-900 flex items-center justify-center p-4">
                            <button class="absolute top-3 right-3 text-amber-500 hover:text-amber-600 z-10">
                                <i class="fa-regular fa-heart text-lg"></i>
                            </button>
                            <div class="relative bg-purple-700 text-white rounded-full px-6 py-4 text-center max-w-[85%] shadow-lg border border-purple-500 z-0">
                                <span class="absolute -top-3 left-3 text-2xl opacity-70">“</span>
                                <p class="text-xs font-bold leading-tight uppercase tracking-wider">N.78SPS02.021.2</p>
                                <p class="text-xs font-semibold leading-snug mt-0.5">Merancang Media Pembelajaran</p>
                                <span class="absolute -bottom-3 right-3 text-2xl opacity-70">”</span>
                            </div>
                            <div class="absolute -bottom-5 left-1/2 -translate-x-1/2 w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center border-2 border-white shadow-md z-10">
                                <i class="fa-solid fa-graduation-cap text-base"></i>
                            </div>
                        </div>

                        <div class="pt-7 pb-4 px-4 text-center flex-1 flex flex-col justify-between">
                            <div>
                                <span class="text-xs font-semibold text-gray-500 uppercase tracking-wide">LPK PPGK</span>
                                <h3 class="font-serif font-bold text-gray-800 text-base mt-1">Modul N.78SPS02.021.2</h3>
                                <div class="w-8 h-1 bg-blue-500 mx-auto my-3 rounded-full"></div>
                            </div>

                            <div>
                                <div class="flex items-center justify-center space-x-4 text-xs text-gray-500 my-2">
                                    <span class="flex items-center gap-1.5"><i class="fa-regular fa-file-lines"></i> 23</span>
                                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-user-graduate"></i> 0</span>
                                </div>

                                <div class="mt-3 flex items-center justify-end space-x-2 text-sm font-semibold">
                                    <span class="line-through text-gray-400 text-xs font-normal">Rp5.000.000</span>
                                    <span class="text-orange-500 font-bold">Rp3.500.000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CARD 3 -->
                    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition duration-200 flex flex-col">
                        <div class="relative h-48 bg-gradient-to-br from-indigo-950 via-purple-900 to-indigo-900 flex items-center justify-center p-4">
                            <button class="absolute top-3 right-3 text-amber-500 hover:text-amber-600 z-10">
                                <i class="fa-regular fa-heart text-lg"></i>
                            </button>
                            <div class="relative bg-purple-700 text-white rounded-full px-6 py-4 text-center max-w-[85%] shadow-lg border border-purple-500 z-0">
                                <span class="absolute -top-3 left-3 text-2xl opacity-70">“</span>
                                <p class="text-xs font-bold leading-tight uppercase tracking-wider">N.78SPS02.020.2</p>
                                <p class="text-xs font-semibold leading-snug mt-0.5">Menyusun Modul Pelatihan Kerja</p>
                                <span class="absolute -bottom-3 right-3 text-2xl opacity-70">”</span>
                            </div>
                            <div class="absolute -bottom-5 left-1/2 -translate-x-1/2 w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center border-2 border-white shadow-md z-10">
                                <i class="fa-solid fa-graduation-cap text-base"></i>
                            </div>
                        </div>

                        <div class="pt-7 pb-4 px-4 text-center flex-1 flex flex-col justify-between">
                            <div>
                                <span class="text-xs font-semibold text-gray-500 uppercase tracking-wide">LPK PPGK</span>
                                <h3 class="font-serif font-bold text-gray-800 text-base mt-1">Modul N.78SPS02.020.2</h3>
                                <div class="w-8 h-1 bg-blue-500 mx-auto my-3 rounded-full"></div>
                            </div>

                            <div>
                                <div class="flex items-center justify-center space-x-4 text-xs text-gray-500 my-2">
                                    <span class="flex items-center gap-1.5"><i class="fa-regular fa-file-lines"></i> 16</span>
                                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-user-graduate"></i> 0</span>
                                </div>

                                <div class="mt-3 flex items-center justify-end space-x-2 text-sm font-semibold">
                                    <span class="line-through text-gray-400 text-xs font-normal">Rp5.000.000</span>
                                    <span class="text-orange-500 font-bold">Rp3.500.000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CARD 4 -->
                    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition duration-200 flex flex-col">
                        <div class="relative h-48 bg-gradient-to-br from-indigo-950 via-purple-900 to-indigo-900 flex items-center justify-center p-4">
                            <button class="absolute top-3 right-3 text-amber-500 hover:text-amber-600 z-10">
                                <i class="fa-regular fa-heart text-lg"></i>
                            </button>
                            <div class="relative bg-purple-700 text-white rounded-full px-6 py-4 text-center max-w-[85%] shadow-lg border border-purple-500 z-0">
                                <span class="absolute -top-3 left-3 text-2xl opacity-70">“</span>
                                <p class="text-xs font-bold leading-tight uppercase tracking-wider">N.78SPS02.019.2</p>
                                <p class="text-xs font-semibold leading-snug mt-0.5">Merencanakan Penyajian Materi Pelatihan Kerja</p>
                                <span class="absolute -bottom-3 right-3 text-2xl opacity-70">”</span>
                            </div>
                            <div class="absolute -bottom-5 left-1/2 -translate-x-1/2 w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center border-2 border-white shadow-md z-10">
                                <i class="fa-solid fa-graduation-cap text-base"></i>
                            </div>
                        </div>

                        <div class="pt-7 pb-4 px-4 text-center flex-1 flex flex-col justify-between">
                            <div>
                                <span class="text-xs font-semibold text-gray-500 uppercase tracking-wide">LPK PPGK</span>
                                <h3 class="font-serif font-bold text-gray-800 text-base mt-1">Modul N.78SPS02.019.2</h3>
                                <div class="w-8 h-1 bg-blue-500 mx-auto my-3 rounded-full"></div>
                            </div>

                            <div>
                                <div class="flex items-center justify-center space-x-4 text-xs text-gray-500 my-2">
                                    <span class="flex items-center gap-1.5"><i class="fa-regular fa-file-lines"></i> 17</span>
                                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-user-graduate"></i> 0</span>
                                </div>

                                <div class="mt-3 flex items-center justify-end space-x-2 text-sm font-semibold">
                                    <span class="line-through text-gray-400 text-xs font-normal">Rp5.000.000</span>
                                    <span class="text-orange-500 font-bold">Rp3.500.000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CARD 5 -->
                    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition duration-200 flex flex-col">
                        <div class="relative h-48 bg-gradient-to-br from-indigo-950 via-purple-900 to-indigo-900 flex items-center justify-center p-4">
                            <button class="absolute top-3 right-3 text-amber-500 hover:text-amber-600 z-10">
                                <i class="fa-regular fa-heart text-lg"></i>
                            </button>
                            <div class="relative bg-purple-700 text-white rounded-full px-6 py-4 text-center max-w-[85%] shadow-lg border border-purple-500 z-0">
                                <span class="absolute -top-3 left-3 text-2xl opacity-70">“</span>
                                <p class="text-xs font-bold leading-tight uppercase tracking-wider">N.78SPS02.018.1</p>
                                <p class="text-xs font-semibold leading-snug mt-0.5">Merancang Konten E-Learning</p>
                                <span class="absolute -bottom-3 right-3 text-2xl opacity-70">”</span>
                            </div>
                            <div class="absolute -bottom-5 left-1/2 -translate-x-1/2 w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center border-2 border-white shadow-md z-10">
                                <i class="fa-solid fa-graduation-cap text-base"></i>
                            </div>
                        </div>

                        <div class="pt-7 pb-4 px-4 text-center flex-1 flex flex-col justify-between">
                            <div>
                                <span class="text-xs font-semibold text-gray-500 uppercase tracking-wide">LPK PPGK</span>
                                <h3 class="font-serif font-bold text-gray-800 text-base mt-1">Modul N.78SPS02.018.1</h3>
                                <div class="w-8 h-1 bg-blue-500 mx-auto my-3 rounded-full"></div>
                            </div>

                            <div>
                                <div class="flex items-center justify-center space-x-4 text-xs text-gray-500 my-2">
                                    <span class="flex items-center gap-1.5"><i class="fa-regular fa-file-lines"></i> 16</span>
                                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-user-graduate"></i> 0</span>
                                </div>

                                <div class="mt-3 flex items-center justify-end space-x-2 text-sm font-semibold">
                                    <span class="line-through text-gray-400 text-xs font-normal">Rp5.000.000</span>
                                    <span class="text-orange-500 font-bold">Rp3.500.000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CARD 6 -->
                    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition duration-200 flex flex-col">
                        <div class="relative h-48 bg-gradient-to-br from-indigo-950 via-purple-900 to-indigo-900 flex items-center justify-center p-4">
                            <button class="absolute top-3 right-3 text-amber-500 hover:text-amber-600 z-10">
                                <i class="fa-regular fa-heart text-lg"></i>
                            </button>
                            <div class="relative bg-purple-700 text-white rounded-full px-6 py-4 text-center max-w-[85%] shadow-lg border border-purple-500 z-0">
                                <span class="absolute -top-3 left-3 text-2xl opacity-70">“</span>
                                <p class="text-xs font-bold leading-tight uppercase tracking-wider">N.78SPS02.017.2</p>
                                <p class="text-xs font-semibold leading-snug mt-0.5">Merancang Pembelajaran Inovatif Untuk Program Pelatihan Kerja</p>
                                <span class="absolute -bottom-3 right-3 text-2xl opacity-70">”</span>
                            </div>
                            <div class="absolute -bottom-5 left-1/2 -translate-x-1/2 w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center border-2 border-white shadow-md z-10">
                                <i class="fa-solid fa-graduation-cap text-base"></i>
                            </div>
                        </div>

                        <div class="pt-7 pb-4 px-4 text-center flex-1 flex flex-col justify-between">
                            <div>
                                <span class="text-xs font-semibold text-gray-500 uppercase tracking-wide">LPK PPGK</span>
                                <h3 class="font-serif font-bold text-gray-800 text-base mt-1">Modul N.78SPS02.017.2</h3>
                                <div class="w-8 h-1 bg-blue-500 mx-auto my-3 rounded-full"></div>
                            </div>

                            <div>
                                <div class="flex items-center justify-center space-x-4 text-xs text-gray-500 my-2">
                                    <span class="flex items-center gap-1.5"><i class="fa-regular fa-file-lines"></i> 16</span>
                                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-user-graduate"></i> 0</span>
                                </div>

                                <div class="mt-3 flex items-center justify-end space-x-2 text-sm font-semibold">
                                    <span class="line-through text-gray-400 text-xs font-normal">Rp5.000.000</span>
                                    <span class="text-orange-500 font-bold">Rp3.500.000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- RIGHT COLUMN: SIDEBAR FILTERS & WIDGETS -->
                <div class="lg:col-span-1 space-y-6">

                    <!-- FILTER BOX CARD -->
                    <div class="bg-white border border-gray-200 rounded-md p-5 text-sm space-y-5 shadow-sm">

                        <!-- Categories -->
                        <div>
                            <h4 class="font-serif font-bold text-gray-800 text-base mb-3">Categories</h4>
                            <div class="space-y-2 text-gray-600">
                                <label class="flex items-center justify-between cursor-pointer">
                                    <div class="flex items-center space-x-2">
                                        <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span>Profesi</span>
                                    </div>
                                    <span class="text-gray-400 text-xs">10</span>
                                </label>
                                <label class="flex items-center justify-between cursor-pointer pl-4">
                                    <div class="flex items-center space-x-2">
                                        <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span>Instruktur KKNI</span>
                                    </div>
                                    <span class="text-gray-400 text-xs">10</span>
                                </label>
                            </div>
                        </div>

                        <!-- Author -->
                        <div class="pt-2">
                            <h4 class="font-serif font-bold text-gray-800 text-base mb-3">Author</h4>
                            <div class="space-y-2 text-gray-600">
                                <label class="flex items-center justify-between cursor-pointer">
                                    <div class="flex items-center space-x-2">
                                        <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span>LPK PPGK</span>
                                    </div>
                                    <span class="text-gray-400 text-xs">10</span>
                                </label>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="pt-2">
                            <h4 class="font-serif font-bold text-gray-800 text-base mb-3">Price</h4>
                            <div class="space-y-2 text-gray-600">
                                <label class="flex items-center justify-between cursor-pointer">
                                    <div class="flex items-center space-x-2">
                                        <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                        <span>Paid</span>
                                    </div>
                                    <span class="text-gray-400 text-xs">10</span>
                                </label>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex items-center gap-2 pt-2">
                            <button class="flex-1 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded text-xs tracking-wider uppercase transition">
                                APPLY
                            </button>
                            <button class="flex-1 bg-white hover:bg-gray-50 border border-gray-300 text-gray-600 font-semibold py-2 px-4 rounded text-xs tracking-wider uppercase transition">
                                RESET
                            </button>
                        </div>

                    </div>

                    <!-- ALL COURSES SECTION -->
                    <div class="pt-2">
                        <h4 class="font-serif font-bold text-gray-800 text-sm tracking-wider uppercase mb-3">ALL COURSES</h4>
                        <ul class="space-y-1.5 text-sm text-gray-600">
                            <li><a href="#" class="hover:text-blue-600 transition">Profesi</a></li>
                            <li class="pl-3"><a href="#" class="hover:text-blue-600 transition">Instruktur KKNI</a></li>
                        </ul>
                    </div>

                    <!-- LATEST COURSES SECTION -->
                    <div class="pt-2">
                        <h4 class="font-serif font-bold text-gray-800 text-sm tracking-wider uppercase mb-4">LATEST COURSES</h4>

                        <div class="space-y-4">
                            <!-- Mini Course Item 1 -->
                            <div class="flex items-center space-x-3">
                                <div class="w-16 h-12 bg-purple-900 rounded flex-shrink-0 flex items-center justify-center text-white text-[8px] text-center p-1 font-bold leading-tight">
                                    N.78SPS02.022.1
                                </div>
                                <div class="text-xs">
                                    <a href="#" class="font-serif font-bold text-gray-800 hover:text-blue-600 line-clamp-1">Modul N.78SPS02.022.1</a>
                                    <div class="flex items-center space-x-1 mt-0.5">
                                        <span class="line-through text-gray-400 text-[10px]">Rp5.000.000</span>
                                        <span class="text-orange-500 font-bold">Rp3.500.000</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Mini Course Item 2 -->
                            <div class="flex items-center space-x-3">
                                <div class="w-16 h-12 bg-purple-900 rounded flex-shrink-0 flex items-center justify-center text-white text-[8px] text-center p-1 font-bold leading-tight">
                                    N.78SPS02.021.2
                                </div>
                                <div class="text-xs">
                                    <a href="#" class="font-serif font-bold text-gray-800 hover:text-blue-600 line-clamp-1">Modul N.78SPS02.021.2</a>
                                    <div class="flex items-center space-x-1 mt-0.5">
                                        <span class="line-through text-gray-400 text-[10px]">Rp5.000.000</span>
                                        <span class="text-orange-500 font-bold">Rp3.500.000</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Mini Course Item 3 -->
                            <div class="flex items-center space-x-3">
                                <div class="w-16 h-12 bg-purple-900 rounded flex-shrink-0 flex items-center justify-center text-white text-[8px] text-center p-1 font-bold leading-tight">
                                    N.78SPS02.020.2
                                </div>
                                <div class="text-xs">
                                    <a href="#" class="font-serif font-bold text-gray-800 hover:text-blue-600 line-clamp-1">Modul N.78SPS02.020.2</a>
                                    <div class="flex items-center space-x-1 mt-0.5">
                                        <span class="line-through text-gray-400 text-[10px]">Rp5.000.000</span>
                                        <span class="text-orange-500 font-bold">Rp3.500.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
<x-footer />
</x-base>
