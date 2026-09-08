<!-- Header bar ala Netflix dengan sentuhan playful & modern -->
<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-gradient-to-b from-black/95 via-black/80 to-transparent backdrop-blur-md border-b border-white/5 px-4 lg:px-12 py-3">
    <div class="max-w-7xl mx-auto flex items-center justify-between gap-4">
        <!-- Brand Logo & Main Nav Links -->
        <div class="flex items-center gap-8">
            <a class="flex items-center gap-1.5 group" href="#hero">
                <span class="font-brand text-3xl md:text-4xl font-extrabold tracking-wider text-netflixRed transition-transform group-hover:scale-105 inline-block">CURVLUX</span>
                <span class="text-[10px] bg-netflixRed/20 text-netflixRed px-1.5 py-0.5 rounded uppercase font-bold tracking-widest border border-netflixRed/40">ORIGINAL</span>
            </a>

            <!-- Desktop Navigation Menu -->
            <nav class="hidden lg:flex items-center gap-6 text-xs md:text-sm font-medium tracking-wide">
                <a class="nav-link text-white font-semibold flex items-center gap-1" href="#hero" data-target="hero">
                    <i class="fa-solid fa-house text-xs text-netflixRed"></i> HOME
                </a>
                <a class="nav-link text-gray-300 hover:text-white transition-colors" href="#episodes" data-target="episodes">MOMEN</a>
                <a class="nav-link text-gray-300 hover:text-white transition-colors" href="#cast" data-target="cast">STRUKTUR</a>
                <a class="nav-link text-gray-300 hover:text-white transition-colors" href="#schedule" data-target="schedule">JADWAL</a>
                <a class="nav-link text-gray-300 hover:text-white transition-colors" href="#community" data-target="community">KOMUNITAS</a>
            </nav>
        </div>

        <!-- Right Header Actions (Search Bar & Cute Profile Avatar) -->
        <div class="flex items-center gap-3 md:gap-5">
            <!-- Fun Search Box ala Netflix Search -->
            <div class="relative hidden sm:flex items-center">
                <i class="fa-solid fa-magnifying-glass absolute left-3 text-gray-400 text-xs pointer-events-none"></i>
                <input class="bg-black/60 border border-white/20 text-xs rounded-full pl-8 pr-4 py-1.5 text-white placeholder-gray-400 focus:outline-none focus:border-netflixRed focus:ring-1 focus:ring-netflixRed w-56 md:w-64 transition-all hover:border-gray-400" placeholder="Kalo cari yang rajin ya di Curvlux..." type="text"/>
            </div>

            <!-- Notification Bell with Funny Badge -->
            <div class="relative cursor-pointer p-2 rounded-full hover:bg-white/10 transition-colors">
                <i class="fa-regular fa-bell text-lg text-gray-200"></i>
                <span class="absolute top-1 right-1 w-2.5 h-2.5 bg-netflixRed rounded-full ring-2 ring-netflixBlack animate-pulse"></span>
            </div>

            <!-- Bagian Button Masuk -->
            <a href="login" class="relative group inline-flex items-center justify-center p-0.5 overflow-hidden text-xs md:text-sm font-semibold rounded-lg group hover:from-red-600 hover:to-orange-500 bg-gradient-to-br from-netflixRed to-red-800 text-white shadow-lg shadow-red-900/30 hover:shadow-red-600/50 transition-all duration-300">
                <span class="relative px-4 py-1.5 transition-all ease-in duration-75 bg-black/30 rounded-md group-hover:bg-opacity-0 flex items-center gap-2">
                    Masuk
                </span>
            </a>
        </div>
    </div>
</header>

<script>
    function updateActiveNav() {
        let current = '';
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');

        // Cari section yang batas atasnya paling mendekati layar (offset 200px dari atas)
        sections.forEach(section => {
            const rect = section.getBoundingClientRect();
            if (rect.top <= 200) {
                current = section.getAttribute('id');
            }
        });

        // Update class pada navigasi
        navLinks.forEach(link => {
            // Reset ke tampilan biasa (abu-abu)
            link.classList.remove('text-white', 'font-semibold', 'flex', 'items-center', 'gap-1');
            link.classList.add('text-gray-300');

            // Aktifkan jika target sesuai dengan section di layar
            if (link.getAttribute('data-target') === current) {
                link.classList.remove('text-gray-300');
                
                if (current === 'hero') {
                    link.classList.add('text-white', 'font-semibold', 'flex', 'items-center', 'gap-1');
                } else {
                    link.classList.add('text-white', 'font-semibold');
                }
            }
        });
    }

    // Jalankan saat di-scroll dan saat halaman pertama kali selesai dimuat
    window.addEventListener('scroll', updateActiveNav);
    window.addEventListener('DOMContentLoaded', updateActiveNav);
</script>