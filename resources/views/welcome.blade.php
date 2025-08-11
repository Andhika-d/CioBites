<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <title>Selamat Datang di CioBites</title>
    <style>
        html {
            scroll-behavior: smooth;
        }

        /* Custom gradient animations */
        .animated-gradient {
            background: linear-gradient(-45deg, #A8E6CF, #7BC7A4, #5BB394, #8ED1B2);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        /* Floating orbs animation */
        .floating-orb {
            animation: float 6s ease-in-out infinite;
        }
        
        .floating-orb:nth-child(2) {
            animation-delay: -2s;
        }
        
        .floating-orb:nth-child(3) {
            animation-delay: -4s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            25% { transform: translateY(-20px) rotate(90deg); }
            50% { transform: translateY(-10px) rotate(180deg); }
            75% { transform: translateY(-30px) rotate(270deg); }
        }
        
        /* Glassmorphism effect */
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        /* Mesh gradient background */
        .mesh-gradient {
            background: 
                radial-gradient(circle at 20% 80%, rgba(168, 230, 207, 0.8) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(123, 199, 164, 0.8) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(142, 209, 178, 0.6) 0%, transparent 50%);
        }
    </style>
</head>
<body class="bg-white">
    <header class="sticky top-0 z-50 bg-gradient-to-r from-[#A8E6CF] to-[#8ED1B2] border-b border-gray-200">
        <nav aria-label="Global" class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between p-6 lg:px-8 h-16 bg-white border-b border-gray-200">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">CioBites</span>
                <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=emerald&shade=400" alt="Logo CioBites" class="h-8 w-auto" />
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Buka menu utama</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" class="size-6">
                    <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
            <a href="#produk" class="flex items-center gap-2 text-sm font-semibold text-gray-900">
                <!-- Ikon Paket -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8.25L12 3l9 5.25v7.5L12 21l-9-5.25v-7.5z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8.25l9 5.25 9-5.25" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21V13.5" />
                </svg>
                Produk
            </a>
            <a href="#" class="flex items-center gap-2 text-sm font-semibold text-gray-900">
                <!-- Ikon Info Circle -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <circle cx="12" cy="12" r="9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 16v-4m0-4h.01" />
                </svg>
                Tentang Kami
            </a>
            <a href="#" class="flex items-center gap-2 text-sm font-semibold text-gray-900">
                <!-- Ikon Star -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 17.75L6.16 21l1.12-6.52L2 9.75l6.58-.96L12 3l3.42 5.79L22 9.75l-5.28 4.73L17.84 21 12 17.75z" />
                </svg>
                Promo
            </a>
            <a href="#" class="flex items-center gap-2 text-sm font-semibold text-gray-900">
                <!-- Ikon Mail -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21.75 8.25v7.5a2.25 2.25 0 01-2.25 2.25h-15A2.25 2.25 0 012.25 15.75v-7.5A2.25 2.25 0 014.5 6h15a2.25 2.25 0 012.25 2.25zm-18 0l9 6 9-6" />
                </svg>
                Kontak
            </a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="#" class="text-sm font-semibold text-gray-900">Masuk <span aria-hidden="true">&rarr;</span></a>
        </div>
        </nav>
        <el-dialog>
            <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
                <div tabindex="0" class="fixed inset-0 focus:outline-none"></div>
                <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex justify-end border-b border-gray-200">
                    <button type="button" command="close" commandfor="mobile-menu" class="rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Tutup menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" class="size-6">
                        <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    </button>
                </div>
                <nav class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="#produk" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Produk</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Tentang Kami</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Promo</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Kontak</a>
                    </div>
                    <div class="py-6">
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold text-gray-900 hover:bg-gray-50">Masuk</a>
                    </div>
                    </div>
                </nav>
                </el-dialog-panel>
            </dialog>
            </el-dialog>

    </header>
    
    <!-- Menu Utama -->
    <div class="relative isolate px-6 lg:px-8">
        <!-- Background gradient mint -->
        <div aria-hidden="true" class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
        <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36rem] -translate-x-1/2 rotate-30 bg-gradient-to-tr from-[#A8E6CF] to-[#8ED1B2] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72rem]"></div>
        </div>

        <div class="mx-auto max-w-2xl pt-45 pb-28 sm:pt-48 sm:pb-48 lg:pt-40 lg:pb-40">
        <div class="hidden sm:mb-8 sm:flex sm:justify-center">
            <div class="relative rounded-full px-4 py-2 text-sm text-gray-800 glass-effect hover:bg-white/20 transition-all duration-300 transform hover:scale-105">
                Gratis ongkir untuk pembelian di atas Rp100.000! 
                <a href="#" class="font-semibold text-emerald-700 hover:text-emerald-800 transition-colors duration-300">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Lihat promo <span aria-hidden="true">&rarr;</span>
                </a>
            </div>
        </div>
        <div class="text-center">
            <h1 class="text-5xl font-bold tracking-tight text-gray-900 sm:text-7xl">Makanan Kucing Premium di CioBites</h1>
            <p class="mt-8 text-lg font-medium text-gray-600 sm:text-xl">Dari kibble kering hingga makanan basah lezat, kami sediakan yang terbaik untuk si meong kesayangan Anda.</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="#" 
                    class="group relative rounded-md bg-gradient-to-r from-emerald-400 to-teal-400 px-6 py-3 text-sm font-semibold text-white shadow-lg transition-all duration-300 ease-in-out hover:from-emerald-500 hover:to-teal-500 hover:shadow-xl hover:scale-105 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-500">
                    <span class="relative z-10">Belanja Sekarang</span>
                    <div class="absolute inset-0 rounded-md bg-gradient-to-r from-emerald-600 to-teal-600 opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
                </a>
                <a href="#" class="text-sm font-semibold text-gray-900 hover:text-emerald-700 transition-colors duration-300 backdrop-blur-sm">
                    Pelajari Lebih Lanjut <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
        </div>

        <!-- Bottom gradient mint -->
        <div aria-hidden="true" class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
        <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36rem] -translate-x-1/2 bg-gradient-to-tr from-[#A8E6CF] to-[#8ED1B2] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72rem]"></div>
        </div>
    </div>

    <!-- Section Produk -->
    <section id="produk" class="py-20 bg-gray-50 border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-12 text-center border-b-4 border-emerald-400 inline-block pb-2">
        Produk Kami
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
        <!-- Produk 1 -->
        <div class="bg-white rounded-lg shadow-md p-6 cursor-pointer transition-transform transition-shadow duration-300 ease-in-out hover:-translate-y-2 hover:shadow-xl">
            <img src="/img/Produk1.png" alt="Cat Choize Adult Tuna & Salmon" class="w-full h-48 object-contain rounded-md mb-4 bg-white" />
            <h3 class="text-xl font-semibold mb-2">Cat Choize Adult Tuna & Salmon</h3>
            <p class="text-gray-600">Makanan kucing dewasa dengan cita rasa tuna dan salmon yang lezat.</p>
        </div>
        <!-- Produk 2 -->
        <div class="bg-white rounded-lg shadow-md p-6 cursor-pointer transition-transform transition-shadow duration-300 ease-in-out hover:-translate-y-2 hover:shadow-xl">
            <img src="/img/Produk2.png" alt="Catchoize Wet Food Tuna" class="w-full h-48 object-contain rounded-md mb-4 bg-white" />
            <h3 class="text-xl font-semibold mb-2">Catchoize Wet Food Tuna</h3>
            <p class="text-gray-600">Makanan basah dengan rasa tuna yang menggoda selera kucing kesayanganmu.</p>
        </div>
        <!-- Produk 3 -->
        <div class="bg-white rounded-lg shadow-md p-6 cursor-pointer transition-transform transition-shadow duration-300 ease-in-out hover:-translate-y-2 hover:shadow-xl">
            <img src="/img/Produk3.png" alt="Whiskas Ocean Fish" class="w-full h-48 object-contain rounded-md mb-4 bg-white" />
            <h3 class="text-xl font-semibold mb-2">Whiskas Ocean Fish</h3>
            <p class="text-gray-600">Snack sehat dengan rasa ikan laut segar yang disukai kucing aktif.</p>
        </div>
        </div>
        <div class="mt-12 flex justify-center">
        <a href="#" 
            class="group relative rounded-md bg-gradient-to-r from-emerald-400 to-teal-400 px-6 py-3 text-sm font-semibold text-white shadow-lg transition-all duration-300 ease-in-out hover:from-emerald-500 hover:to-teal-500 hover:shadow-xl hover:scale-105 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-500">
            <span class="relative z-10">Lihat Semua Produk</span>
            <div class="absolute inset-0 rounded-md bg-gradient-to-r from-emerald-600 to-teal-600 opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
        </a>
        </div>
    </div>
    </section>
    

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mobileMenu = document.getElementById('mobile-menu');
            const links = mobileMenu.querySelectorAll('a');

            links.forEach(link => {
            link.addEventListener('click', () => {
                if (mobileMenu.open) {
                mobileMenu.close();
                }
            });
            });
        });
    </script>

</body>
</html>