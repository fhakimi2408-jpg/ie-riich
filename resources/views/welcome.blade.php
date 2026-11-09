<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IERIICH 13 | International Exhibition of Research, Invention, Innovation, Creativity & Humanities</title>
    
    <!-- Meta tags for Academic & Final Year Project Exhibition -->
    <meta name="description" content="IERIICH 13 - International Exhibition of Research, Invention, Innovation, Creativity & Humanities. 4th - 6th January 2026 at SITC Hall, Universiti Pendidikan Sultan Idris (UPSI). Organized by Fakulti Komputeran & Meta-Teknologi.">
    <meta name="keywords" content="IERIICH 13, FYP Exhibition, UPSI, Meta-Teknologi, SITC Hall, Research, Invention, Innovation, Creativity, Humanities, Final Year Project">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Vite Assets (Tailwind CSS v4 & Alpine.js) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .heading-font {
            font-family: 'Space Grotesk', sans-serif;
        }
        /* Custom geometric low-poly background pattern resembling the poster */
        .poster-mesh-bg {
            background-color: #f8fafc;
            background-image: 
                radial-gradient(at 15% 15%, rgba(212, 169, 60, 0.12) 0px, transparent 45%),
                radial-gradient(at 85% 10%, rgba(148, 163, 184, 0.18) 0px, transparent 45%),
                radial-gradient(at 80% 80%, rgba(212, 169, 60, 0.10) 0px, transparent 40%),
                radial-gradient(at 10% 85%, rgba(100, 116, 139, 0.10) 0px, transparent 45%),
                linear-gradient(135deg, #ffffff 0%, #f8fafc 40%, #edf2f7 100%);
        }
        .geometric-polygons {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='600' height='600' viewBox='0 0 600 600'%3E%3Cg fill='none' stroke='%23cbd5e1' stroke-width='0.75' stroke-opacity='0.4'%3E%3Cpolygon points='0,0 200,0 100,180'/%3E%3Cpolygon points='200,0 400,0 300,160'/%3E%3Cpolygon points='400,0 600,0 520,190'/%3E%3Cpolygon points='100,180 300,160 210,360'/%3E%3Cpolygon points='300,160 520,190 410,340'/%3E%3Cpolygon points='210,360 410,340 310,540'/%3E%3Cpolygon points='0,0 100,180 0,320'/%3E%3Cpolygon points='0,320 210,360 110,560'/%3E%3Cpolygon points='520,190 600,0 600,340'/%3E%3Cpolygon points='410,340 600,340 500,560'/%3E%3Cpolygon points='110,560 310,540 220,600'/%3E%3Cpolygon points='310,540 500,560 420,600'/%3E%3C/g%3E%3C/svg%3E");
            background-repeat: repeat;
        }
    </style>
</head>
<body class="poster-mesh-bg text-slate-800 antialiased selection:bg-amber-400 selection:text-slate-900 min-h-screen" 
      x-data="{
          mobileMenuOpen: false,
          posterModalOpen: false,
          registerModalOpen: false,
          activeProject: null,
          searchQuery: '',
          selectedTrack: 'all',
          activeScheduleDay: 0,
          // Live countdown timer calculation for 4th Jan 2026 09:00:00
          days: '00',
          hours: '00',
          minutes: '00',
          seconds: '00',
          initCountdown() {
              const target = new Date('2026-01-04T09:00:00').getTime();
              const update = () => {
                  const now = new Date().getTime();
                  const diff = target - now;
                  if (diff > 0) {
                      this.days = String(Math.floor(diff / (1000 * 60 * 60 * 24))).padStart(2, '0');
                      this.hours = String(Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))).padStart(2, '0');
                      this.minutes = String(Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60))).padStart(2, '0');
                      this.seconds = String(Math.floor((diff % (1000 * 60)) / 1000)).padStart(2, '0');
                  } else {
                      this.days = '00'; this.hours = '00'; this.minutes = '00'; this.seconds = '00';
                  }
              };
              update();
              setInterval(update, 1000);
          }
      }"
      x-init="initCountdown()">

    <!-- TOP ACCENT BAR -->
    <div class="h-1.5 w-full bg-gradient-to-r from-slate-700 via-amber-500 to-yellow-600"></div>

    <!-- INSTITUTIONAL TOP BAR -->
    <div class="border-b border-slate-200/80 bg-white/70 backdrop-blur text-xs text-slate-600 py-2 hidden sm:block">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <div class="flex items-center space-x-6">
                <span class="flex items-center font-medium text-slate-700">
                    <svg class="w-3.5 h-3.5 text-amber-600 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a10.97 10.97 0 014.75 3.949V17a1 1 0 002 0v-4.999a10.97 10.97 0 014.75-3.951l2.644-1.132a1 1 0 000-1.84l-7-3zM5.5 12.35V15a1 1 0 002 0v-1.65a9.006 9.006 0 01-2-.999zM12.5 15a1 1 0 002 0v-2.65a9.006 9.006 0 01-2 1z"/>
                    </svg>
                    Universiti Pendidikan Sultan Idris (UPSI)
                </span>
                <span class="text-slate-300">|</span>
                <span>Fakulti Komputeran &amp; Meta-Teknologi (META)</span>
                <span class="text-slate-300">|</span>
                <span class="text-amber-700 font-semibold">100 Tahun SITC Legacy (1922 – 2022)</span>
            </div>
            <div class="flex items-center space-x-4">
                <span class="inline-flex items-center text-slate-500">
                    <svg class="w-3.5 h-3.5 text-slate-400 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    Dewan SITC, Tanjung Malim
                </span>
                <a href="#schedule" class="text-amber-600 hover:text-amber-700 font-medium">Event Schedule &rarr;</a>
            </div>
        </div>
    </div>

    <!-- NAVIGATION BAR -->
    <header class="sticky top-0 z-40 glass-nav transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Brand / Logo -->
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                    <div class="relative flex items-center justify-center w-12 h-12 rounded-xl bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white shadow-md border border-slate-700 group-hover:scale-105 transition-transform duration-300">
                        <span class="heading-font font-black tracking-tighter text-xl text-transparent bg-clip-text bg-gradient-to-r from-amber-200 via-yellow-400 to-amber-500">13</span>
                        <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-amber-500 rounded-full border-2 border-white flex items-center justify-center">
                            <span class="block w-1.5 h-1.5 bg-slate-950 rounded-full"></span>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center space-x-1.5">
                            <span class="heading-font text-2xl font-black tracking-tight text-slate-900">IERIICH</span>
                            <span class="text-xs px-2 py-0.5 rounded-full font-bold bg-amber-100 text-amber-800 border border-amber-300">13TH</span>
                        </div>
                        <span class="text-[10px] uppercase tracking-wider font-semibold text-slate-500">Exhibition of Research &amp; Inventions</span>
                    </div>
                </a>

                <!-- Desktop Nav Links -->
                <nav class="hidden md:flex items-center space-x-8 text-sm font-medium text-slate-700">
                    <a href="#about" class="hover:text-amber-600 transition-colors">About</a>
                    <a href="#tracks" class="hover:text-amber-600 transition-colors">Tracks</a>
                    <a href="#showcase" class="hover:text-amber-600 transition-colors">FYP Showcase</a>
                    <a href="#schedule" class="hover:text-amber-600 transition-colors">Schedule</a>
                    <a href="#awards" class="hover:text-amber-600 transition-colors">Awards</a>
                    <a href="#venue" class="hover:text-amber-600 transition-colors">Venue &amp; Info</a>
                    <a href="#faq" class="hover:text-amber-600 transition-colors">FAQ</a>
                </nav>

                <!-- Action CTA Buttons -->
                <div class="hidden sm:flex items-center space-x-3">
                    <button @click="posterModalOpen = true" 
                            type="button"
                            class="inline-flex items-center px-4 py-2 text-xs font-semibold rounded-lg border border-slate-300 bg-white/80 text-slate-700 hover:bg-slate-50 hover:text-slate-900 hover:border-slate-400 shadow-sm transition-all duration-200">
                        <svg class="w-4 h-4 mr-1.5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Official Poster
                    </button>

                    <button @click="registerModalOpen = true"
                            type="button"
                            class="inline-flex items-center px-4 py-2 text-xs font-bold rounded-lg bg-gradient-to-r from-amber-600 via-amber-500 to-yellow-600 text-white shadow-md hover:from-amber-700 hover:to-yellow-700 hover:shadow-lg transition-all duration-200 transform hover:-translate-y-0.5">
                        <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                        Register / Inquire
                    </button>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex items-center sm:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" 
                            type="button" 
                            class="p-2 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-100 focus:outline-none"
                            aria-label="Toggle navigation menu">
                        <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Drawer -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="sm:hidden border-b border-slate-200 bg-white/95 backdrop-blur px-4 pt-3 pb-6 space-y-3"
             style="display: none;">
            <div class="flex flex-col space-y-2 font-medium text-slate-800">
                <a @click="mobileMenuOpen = false" href="#about" class="px-3 py-2 rounded-md hover:bg-slate-100">About Exhibition</a>
                <a @click="mobileMenuOpen = false" href="#tracks" class="px-3 py-2 rounded-md hover:bg-slate-100">Tracks</a>
                <a @click="mobileMenuOpen = false" href="#showcase" class="px-3 py-2 rounded-md hover:bg-slate-100">FYP Showcase</a>
                <a @click="mobileMenuOpen = false" href="#schedule" class="px-3 py-2 rounded-md hover:bg-slate-100">Program Schedule</a>
                <a @click="mobileMenuOpen = false" href="#awards" class="px-3 py-2 rounded-md hover:bg-slate-100">Awards &amp; Judging</a>
                <a @click="mobileMenuOpen = false" href="#venue" class="px-3 py-2 rounded-md hover:bg-slate-100">Venue &amp; Logistics</a>
                <a @click="mobileMenuOpen = false" href="#faq" class="px-3 py-2 rounded-md hover:bg-slate-100">FAQ</a>
            </div>
            <div class="pt-2 border-t border-slate-100 flex flex-col gap-2">
                <button @click="posterModalOpen = true; mobileMenuOpen = false" class="w-full py-2.5 px-4 text-center text-sm font-semibold rounded-lg border border-slate-300 bg-slate-50 text-slate-800">
                    View Event Poster
                </button>
                <button @click="registerModalOpen = true; mobileMenuOpen = false" class="w-full py-2.5 px-4 text-center text-sm font-bold rounded-lg bg-amber-600 text-white">
                    Register / Inquire
                </button>
            </div>
        </div>
    </header>

    <!-- HERO SECTION (MATCHING THE ORIGINAL POSTER VISUALS) -->
    <section class="relative pt-8 pb-20 md:pt-16 md:pb-28 overflow-hidden geometric-polygons">
        <!-- Ambient lighting decorative orbs -->
        <div class="absolute top-12 left-1/4 w-96 h-96 bg-amber-200/25 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute top-24 right-1/4 w-96 h-96 bg-slate-300/30 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Column: Poster Title & Event Typography -->
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                    
                    <!-- Top Category Label -->
                    <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-white/80 border border-slate-300/80 shadow-xs backdrop-blur">
                        <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-700">Official Final Year Project Exhibition</span>
                        <span class="text-slate-300">•</span>
                        <span class="text-xs font-semibold text-amber-700">2026 Edition</span>
                    </div>

                    <!-- HERO HEADLINE REPRODUCING POSTER -->
                    <div class="space-y-1">
                        <!-- Big Metallic IERIICH 13 Visual Title -->
                        <div class="flex items-center justify-center lg:justify-start space-x-3">
                            <h1 class="heading-font text-5xl sm:text-7xl xl:text-8xl font-black tracking-tight text-slate-900 drop-shadow-sm flex items-center">
                                <span class="bg-gradient-to-b from-slate-900 via-slate-700 to-slate-950 bg-clip-text text-transparent">IERII</span>
                                <span class="relative inline-block text-amber-500 mx-0.5">
                                    <span class="bg-gradient-to-b from-amber-400 via-yellow-500 to-amber-700 bg-clip-text text-transparent">C</span>
                                    <!-- The '13' inside the emblem badge -->
                                    <span class="absolute inset-0 flex items-center justify-center text-[0.42em] font-black tracking-tighter text-amber-700 drop-shadow-xs">13</span>
                                </span>
                                <span class="bg-gradient-to-b from-slate-900 via-slate-700 to-slate-950 bg-clip-text text-transparent">H</span>
                            </h1>
                        </div>

                        <!-- Poster Sub-headings -->
                        <div class="pt-1">
                            <div class="text-xs sm:text-sm tracking-[0.28em] uppercase font-bold text-slate-500">
                                International Exhibition of
                            </div>
                            <div class="heading-font text-3xl sm:text-5xl font-black uppercase tracking-tight text-slate-900 pt-1">
                                RESEARCH
                            </div>
                            <div class="heading-font text-xl sm:text-3xl font-black uppercase tracking-wide text-transparent bg-clip-text bg-gradient-to-r from-amber-600 via-yellow-600 to-amber-700 pt-1">
                                INVENTION • INNOVATION
                            </div>
                            <div class="text-xs sm:text-base tracking-[0.22em] uppercase font-bold text-slate-700 pt-1">
                                CREATIVITY &amp; HUMANITIES
                            </div>
                        </div>
                    </div>

                    <!-- Date & Venue Highlight Box (Accurate to Poster) -->
                    <div class="p-4 sm:p-5 rounded-2xl bg-white/90 border border-slate-200/90 shadow-lg backdrop-blur-md max-w-xl mx-auto lg:mx-0">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-center divide-y sm:divide-y-0 sm:divide-x divide-slate-200">
                            
                            <!-- Date Block -->
                            <div class="flex items-center space-x-3.5 pr-2">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-400 to-yellow-500 flex items-center justify-center shadow-md text-white shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="heading-font text-2xl font-black text-slate-900 leading-tight">
                                        4<span class="text-sm font-semibold uppercase align-super text-amber-600">th</span> – 6<span class="text-sm font-semibold uppercase align-super text-amber-600">th</span>
                                    </div>
                                    <div class="text-xs font-bold uppercase tracking-wider text-slate-600">JANUARY 2026</div>
                                </div>
                            </div>

                            <!-- Venue Block -->
                            <div class="flex items-center space-x-3.5 pt-3 sm:pt-0 sm:pl-4">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-500 to-amber-700 flex items-center justify-center shadow-md text-white shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="heading-font text-2xl font-black text-slate-900 leading-tight">SITC HALL</div>
                                    <div class="text-xs font-bold uppercase tracking-wider text-slate-600">UPSI TANJUNG MALIM</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Live Event Countdown -->
                    <div class="space-y-2 max-w-xl mx-auto lg:mx-0">
                        <div class="text-xs font-bold uppercase tracking-wider text-slate-500 flex items-center justify-center lg:justify-start">
                            <span class="inline-block w-2 h-2 rounded-full bg-emerald-500 mr-2 animate-ping"></span>
                            Exhibition Opening Countdown
                        </div>
                        <div class="grid grid-cols-4 gap-2 sm:gap-3 text-center">
                            <div class="p-2 sm:p-3 rounded-xl bg-white/80 border border-slate-200/80 shadow-xs">
                                <div class="heading-font text-2xl sm:text-3xl font-extrabold text-slate-900" x-text="days">00</div>
                                <div class="text-[10px] uppercase font-bold text-slate-500">Days</div>
                            </div>
                            <div class="p-2 sm:p-3 rounded-xl bg-white/80 border border-slate-200/80 shadow-xs">
                                <div class="heading-font text-2xl sm:text-3xl font-extrabold text-slate-900" x-text="hours">00</div>
                                <div class="text-[10px] uppercase font-bold text-slate-500">Hours</div>
                            </div>
                            <div class="p-2 sm:p-3 rounded-xl bg-white/80 border border-slate-200/80 shadow-xs">
                                <div class="heading-font text-2xl sm:text-3xl font-extrabold text-slate-900" x-text="minutes">00</div>
                                <div class="text-[10px] uppercase font-bold text-slate-500">Mins</div>
                            </div>
                            <div class="p-2 sm:p-3 rounded-xl bg-white/80 border border-slate-200/80 shadow-xs">
                                <div class="heading-font text-2xl sm:text-3xl font-extrabold text-amber-600" x-text="seconds">00</div>
                                <div class="text-[10px] uppercase font-bold text-slate-500">Secs</div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 pt-2">
                        <a href="#showcase" 
                           class="px-6 py-3.5 rounded-xl text-sm font-bold bg-slate-900 text-white hover:bg-slate-800 shadow-md hover:shadow-lg transition-all duration-200 flex items-center group">
                            <span>Browse Final Year Projects</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>

                        <button @click="posterModalOpen = true" 
                                type="button"
                                class="px-6 py-3.5 rounded-xl text-sm font-bold bg-white text-slate-800 border border-slate-300 hover:border-amber-400 hover:bg-amber-50/40 shadow-xs hover:shadow-sm transition-all duration-200 flex items-center">
                            <svg class="w-4 h-4 mr-2 text-amber-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                            </svg>
                            View Event Poster
                        </button>
                    </div>

                </div>

                <!-- Right Column: Interactive Poster Showcase Card -->
                <div class="lg:col-span-5 flex justify-center">
                    <div class="relative group max-w-sm sm:max-w-md w-full">
                        
                        <!-- Decorative Frame Gradient Glow -->
                        <div class="absolute -inset-2 bg-gradient-to-r from-amber-400/40 via-yellow-500/30 to-slate-400/40 rounded-3xl blur-xl opacity-75 group-hover:opacity-100 transition duration-500"></div>

                        <!-- Card Container -->
                        <div class="relative rounded-2xl bg-white p-3 shadow-2xl border border-slate-200/90 overflow-hidden transform group-hover:-translate-y-1 transition duration-300">
                            
                            <!-- Poster Image Container -->
                            <div class="relative aspect-[3/4] overflow-hidden rounded-xl bg-slate-100 cursor-pointer"
                                 @click="posterModalOpen = true">
                                <img src="{{ asset('images/ieriich-poster.jpg') }}" 
                                     alt="IERIICH 13 Official Poster" 
                                     class="w-full h-full object-cover group-hover:scale-102 transition-transform duration-500">

                                <!-- Hover Overlay & Expand Icon -->
                                <div class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center text-white p-4">
                                    <div class="w-12 h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center mb-2">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm font-semibold tracking-wide">Click to Enlarge Poster</span>
                                    <span class="text-xs text-slate-200 mt-1">Dewan SITC • Universiti Pendidikan Sultan Idris</span>
                                </div>

                                <!-- Floating Tag -->
                                <div class="absolute top-3 right-3 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur text-white text-[11px] font-bold border border-white/20 flex items-center shadow-lg">
                                    <span class="w-1.5 h-1.5 rounded-full bg-amber-400 mr-1.5"></span>
                                    13th Edition
                                </div>
                            </div>

                            <!-- Bottom Card Caption -->
                            <div class="p-3 pt-4 flex items-center justify-between text-xs text-slate-600">
                                <div>
                                    <p class="font-bold text-slate-800">Dewan SITC, UPSI</p>
                                    <p class="text-[11px] text-slate-500">Fakulti Komputeran &amp; Meta-Teknologi</p>
                                </div>
                                <button @click="posterModalOpen = true" 
                                        type="button"
                                        class="px-2.5 py-1 rounded bg-amber-50 text-amber-700 font-semibold hover:bg-amber-100 transition">
                                    Inspect Poster
                                </button>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- INSTITUTIONAL CO-ORGANIZERS / PARTNERS LOGOS BAR (REPRODUCING POSTER FOOTER) -->
    <section class="py-10 border-y border-slate-200/90 bg-white/80 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-6">
                <p class="text-xs font-bold uppercase tracking-widest text-slate-500">
                    Jointly Organized &amp; Endorsed By
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 items-center justify-items-center">
                <!-- UPSI Crest & Title -->
                <div class="flex items-center space-x-3 p-3 rounded-xl hover:bg-slate-50 transition w-full justify-center">
                    <div class="w-10 h-10 rounded-full bg-amber-600 flex items-center justify-center text-white font-black text-xs shadow-sm">
                        UPSI
                    </div>
                    <div class="text-left">
                        <div class="text-xs font-extrabold text-slate-900 leading-tight">UNIVERSITI PENDIDIKAN</div>
                        <div class="text-[10px] font-semibold text-slate-600">SULTAN IDRIS</div>
                        <div class="text-[9px] text-amber-700 font-medium">Sultan Idris Education University</div>
                    </div>
                </div>

                <!-- 100 Tahun SITC Legacy -->
                <div class="flex items-center space-x-3 p-3 rounded-xl hover:bg-slate-50 transition w-full justify-center">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-yellow-500 to-amber-700 flex items-center justify-center text-white font-black text-[11px] shadow-sm">
                        100th
                    </div>
                    <div class="text-left">
                        <div class="text-xs font-extrabold text-slate-900 leading-tight">100 TAHUN SITC</div>
                        <div class="text-[10px] font-medium text-slate-600">SITC • MPSI • IPSI • UPSI</div>
                        <div class="text-[9px] text-slate-400">Peneraju Kebitaraan Pendidikan</div>
                    </div>
                </div>

                <!-- Fakulti Komputeran & Meta-Teknologi -->
                <div class="flex items-center space-x-3 p-3 rounded-xl hover:bg-slate-50 transition w-full justify-center">
                    <div class="w-10 h-10 rounded-xl bg-slate-900 flex items-center justify-center text-white font-black text-xs shadow-sm">
                        META
                    </div>
                    <div class="text-left">
                        <div class="text-xs font-extrabold text-slate-900 leading-tight">FAKULTI KOMPUTERAN</div>
                        <div class="text-[10px] font-bold text-amber-600 tracking-wider">&amp; META-TEKNOLOGI</div>
                        <div class="text-[9px] text-slate-500">Computing &amp; Meta-Technology</div>
                    </div>
                </div>

                <!-- IERIICH Secretariat -->
                <div class="flex items-center space-x-3 p-3 rounded-xl hover:bg-slate-50 transition w-full justify-center">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-slate-800 to-amber-600 flex items-center justify-center text-white font-black text-xs shadow-sm">
                        13th
                    </div>
                    <div class="text-left">
                        <div class="text-xs font-extrabold text-slate-900 leading-tight">IERIICH 13 SECRETARIAT</div>
                        <div class="text-[10px] font-medium text-slate-600">Final Year Project Division</div>
                        <div class="text-[9px] text-amber-700 font-semibold">Dewan SITC Exhibition</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KEY STATS COUNTER BAR -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                @foreach($stats as $stat)
                    <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200/80 hover:border-amber-400 hover:shadow-md transition duration-300">
                        <div class="heading-font text-3xl sm:text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-slate-900 via-amber-700 to-yellow-600">
                            {{ $stat['value'] }}
                        </div>
                        <div class="text-sm font-bold text-slate-800 mt-1">{{ $stat['label'] }}</div>
                        <div class="text-xs text-slate-500 mt-0.5">{{ $stat['desc'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="py-20 bg-slate-50 border-t border-slate-200/80 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-6 space-y-5">
                    <div class="inline-flex items-center space-x-2 text-xs font-bold uppercase tracking-wider text-amber-700 bg-amber-50 px-3 py-1 rounded-full border border-amber-200">
                        <span>Pioneering Innovation at UPSI</span>
                    </div>
                    <h2 class="heading-font text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight">
                        About the 13th International Exhibition (IERIICH 13)
                    </h2>
                    <p class="text-slate-600 leading-relaxed text-sm sm:text-base">
                        The <strong>International Exhibition of Research, Invention, Innovation, Creativity &amp; Humanities (IERIICH 13)</strong> is the signature annual final year project and research convention organized by the <strong>Fakulti Komputeran &amp; Meta-Teknologi (META)</strong> at <strong>Universiti Pendidikan Sultan Idris (UPSI)</strong>.
                    </p>
                    <p class="text-slate-600 leading-relaxed text-sm sm:text-base">
                        Hosted in the historic <strong>Dewan SITC</strong>, IERIICH 13 bridges brilliant undergraduate software engineers, computational scientists, and creative technologists directly with venture founders, university examiners, and corporate industry evaluators.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                        <div class="p-4 rounded-xl bg-white border border-slate-200 shadow-xs">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 text-amber-700 flex items-center justify-center font-bold mb-2">
                                01
                            </div>
                            <h4 class="text-sm font-bold text-slate-900">Industry Validation</h4>
                            <p class="text-xs text-slate-500 mt-1">Direct feedback from leading tech giants, government agencies, and start-up incubators.</p>
                        </div>
                        <div class="p-4 rounded-xl bg-white border border-slate-200 shadow-xs">
                            <div class="w-8 h-8 rounded-lg bg-slate-100 text-slate-800 flex items-center justify-center font-bold mb-2">
                                02
                            </div>
                            <h4 class="text-sm font-bold text-slate-900">Commercialization</h4>
                            <p class="text-xs text-slate-500 mt-1">Fast-track patent consultation and seed funding pathways for high-potential inventions.</p>
                        </div>
                    </div>

                    <div class="pt-4 flex flex-wrap gap-3">
                        <button @click="registerModalOpen = true" 
                                class="px-5 py-2.5 rounded-lg text-xs font-bold bg-amber-600 text-white hover:bg-amber-700 transition">
                            Download Event Handbook (PDF)
                        </button>
                        <a href="#showcase" class="px-5 py-2.5 rounded-lg text-xs font-bold bg-white text-slate-700 border border-slate-300 hover:bg-slate-50 transition">
                            Explore Projects &rarr;
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-6">
                    <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-xl space-y-6">
                        <div class="flex items-center justify-between pb-4 border-b border-slate-100">
                            <div>
                                <span class="text-xs font-bold text-amber-600 uppercase tracking-wider">Key Details</span>
                                <h3 class="heading-font text-xl font-bold text-slate-900">IERIICH 13 Event Facts</h3>
                            </div>
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                Open to Public
                            </span>
                        </div>

                        <div class="space-y-4 text-sm">
                            <div class="flex items-start space-x-3">
                                <div class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center shrink-0 mt-0.5">
                                    📅
                                </div>
                                <div>
                                    <div class="font-bold text-slate-900">Event Dates &amp; Time</div>
                                    <div class="text-slate-600">4th – 6th January 2026 (08:30 AM – 05:30 PM Daily)</div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center shrink-0 mt-0.5">
                                    🏛️
                                </div>
                                <div>
                                    <div class="font-bold text-slate-900">Venue &amp; Location</div>
                                    <div class="text-slate-600">Dewan SITC (SITC Hall), Kampus Sultan Abdul Jalil Shah, Universiti Pendidikan Sultan Idris (UPSI), Tanjung Malim, Perak</div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center shrink-0 mt-0.5">
                                    👥
                                </div>
                                <div>
                                    <div class="font-bold text-slate-900">Organized By</div>
                                    <div class="text-slate-600">Fakulti Komputeran &amp; Meta-Teknologi (META), UPSI</div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center shrink-0 mt-0.5">
                                    🏆
                                </div>
                                <div>
                                    <div class="font-bold text-slate-900">Awards &amp; Medals</div>
                                    <div class="text-slate-600">IERIICH Grand Champion Trophy, Gold, Silver &amp; Bronze Medals, Dean’s Meta-Tech Choice Award</div>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 rounded-xl bg-gradient-to-r from-slate-900 to-slate-800 text-white flex items-center justify-between">
                            <div>
                                <p class="text-xs text-amber-300 font-semibold">Exhibition Secretariat</p>
                                <p class="text-sm font-bold">fskik.ieriich@upsi.edu.my</p>
                            </div>
                            <button @click="registerModalOpen = true" class="px-3 py-1.5 rounded-lg bg-amber-500 text-slate-950 font-bold text-xs hover:bg-amber-400 transition">
                                Contact Team
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- THE 4 EXHIBITION TRACKS -->
    <section id="tracks" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-amber-600 bg-amber-50 px-3 py-1 rounded-full border border-amber-200">
                    Four Exhibition Pillars
                </span>
                <h2 class="heading-font text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                    Disciplines &amp; Categories of IERIICH 13
                </h2>
                <p class="text-slate-600 text-sm sm:text-base">
                    Every final year project is evaluated within its dedicated specialization track by expert panels from academia and industry.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($tracks as $track)
                    <div class="group relative rounded-2xl p-6 bg-slate-50 border border-slate-200/90 hover:border-amber-400 hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-xs font-bold px-2.5 py-1 rounded-full bg-white border border-slate-200 text-slate-700 shadow-xs">
                                    {{ $track['badge'] }}
                                </span>
                                <span class="w-8 h-8 rounded-lg bg-amber-500/10 text-amber-600 flex items-center justify-center font-bold text-xs">
                                    ★
                                </span>
                            </div>
                            <h3 class="heading-font text-xl font-bold text-slate-900 group-hover:text-amber-600 transition-colors">
                                {{ $track['name'] }}
                            </h3>
                            <p class="text-xs font-semibold text-amber-700 mt-0.5 mb-3">{{ $track['subtitle'] }}</p>
                            <p class="text-xs text-slate-600 leading-relaxed">{{ $track['description'] }}</p>
                        </div>
                        <div class="pt-6 mt-6 border-t border-slate-200/70 flex items-center justify-between text-xs">
                            <span class="text-slate-500 font-medium">Browse Track Projects</span>
                            <button @click="selectedTrack = '{{ $track['id'] }}'; document.getElementById('showcase').scrollIntoView({behavior: 'smooth'})" 
                                    class="text-amber-600 font-bold group-hover:translate-x-1 transition-transform inline-flex items-center">
                                View &rarr;
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- INTERACTIVE FYP PROJECT SHOWCASE GALLERY -->
    <section id="showcase" class="py-20 bg-slate-50 border-t border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-6">
                <div class="space-y-2">
                    <span class="text-xs font-bold uppercase tracking-widest text-amber-600 bg-amber-50 px-3 py-1 rounded-full border border-amber-200">
                        Final Year Project Gallery
                    </span>
                    <h2 class="heading-font text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                        Exhibiting Projects Showcase
                    </h2>
                    <p class="text-slate-600 text-sm">
                        Discover novel inventions and research engineered by Fakulti Komputeran &amp; Meta-Teknologi graduating cohorts.
                    </p>
                </div>

                <!-- Search Input Bar -->
                <div class="w-full md:w-80">
                    <div class="relative">
                        <input type="text" 
                               x-model="searchQuery"
                               placeholder="Search title, student, booth..." 
                               class="w-full pl-10 pr-4 py-2.5 text-xs bg-white border border-slate-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-amber-500 shadow-xs">
                        <svg class="w-4 h-4 text-slate-400 absolute left-3.5 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Track Filter Buttons -->
            <div class="flex flex-wrap gap-2 mb-8">
                <button @click="selectedTrack = 'all'" 
                        :class="selectedTrack === 'all' ? 'bg-slate-900 text-white border-slate-900' : 'bg-white text-slate-700 border-slate-200 hover:bg-slate-100'"
                        class="px-4 py-2 text-xs font-bold rounded-lg border transition-all duration-200 shadow-xs">
                    All Categories
                </button>
                <button @click="selectedTrack = 'research'" 
                        :class="selectedTrack === 'research' ? 'bg-amber-600 text-white border-amber-600' : 'bg-white text-slate-700 border-slate-200 hover:bg-slate-100'"
                        class="px-4 py-2 text-xs font-bold rounded-lg border transition-all duration-200 shadow-xs">
                    🔬 Research
                </button>
                <button @click="selectedTrack = 'invention'" 
                        :class="selectedTrack === 'invention' ? 'bg-amber-600 text-white border-amber-600' : 'bg-white text-slate-700 border-slate-200 hover:bg-slate-100'"
                        class="px-4 py-2 text-xs font-bold rounded-lg border transition-all duration-200 shadow-xs">
                    ⚙️ Invention
                </button>
                <button @click="selectedTrack = 'innovation'" 
                        :class="selectedTrack === 'innovation' ? 'bg-amber-600 text-white border-amber-600' : 'bg-white text-slate-700 border-slate-200 hover:bg-slate-100'"
                        class="px-4 py-2 text-xs font-bold rounded-lg border transition-all duration-200 shadow-xs">
                    🚀 Innovation
                </button>
                <button @click="selectedTrack = 'creativity'" 
                        :class="selectedTrack === 'creativity' ? 'bg-amber-600 text-white border-amber-600' : 'bg-white text-slate-700 border-slate-200 hover:bg-slate-100'"
                        class="px-4 py-2 text-xs font-bold rounded-lg border transition-all duration-200 shadow-xs">
                    🎨 Creativity &amp; Humanities
                </button>
            </div>

            <!-- Project Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($projects as $proj)
                    <div x-show="(selectedTrack === 'all' || selectedTrack === '{{ $proj['track'] }}') &amp;&amp; 
                                ('{{ strtolower($proj['title']) }} {{ strtolower($proj['team']) }} {{ strtolower($proj['booth']) }} {{ strtolower($proj['code']) }}'.includes(searchQuery.toLowerCase()))"
                         class="rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:border-amber-400 transition-all duration-300 p-6 flex flex-col justify-between group">
                        
                        <div>
                            <!-- Header: Booth & Track Badge -->
                            <div class="flex items-center justify-between mb-3">
                                <span class="px-2.5 py-1 rounded-md text-[11px] font-extrabold bg-slate-900 text-amber-400 tracking-wider">
                                    BOOTH {{ $proj['booth'] }}
                                </span>
                                <span class="text-[11px] font-bold text-slate-500 uppercase">
                                    {{ $proj['code'] }}
                                </span>
                            </div>

                            <!-- Title -->
                            <h3 class="heading-font text-lg font-bold text-slate-900 group-hover:text-amber-600 transition-colors leading-snug mb-2">
                                {{ $proj['title'] }}
                            </h3>

                            <!-- Abstract Preview -->
                            <p class="text-xs text-slate-600 leading-relaxed mb-4 line-clamp-3">
                                {{ $proj['summary'] }}
                            </p>

                            <!-- Student & Supervisor Info -->
                            <div class="space-y-1.5 p-3 rounded-xl bg-slate-50 border border-slate-100 text-xs text-slate-600 mb-4">
                                <div class="flex items-center text-slate-800">
                                    <svg class="w-3.5 h-3.5 text-amber-600 mr-1.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                    <span class="font-medium truncate">{{ $proj['team'] }}</span>
                                </div>
                                <div class="flex items-center text-slate-500 text-[11px]">
                                    <svg class="w-3.5 h-3.5 text-slate-400 mr-1.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                    </svg>
                                    <span class="truncate">SV: {{ $proj['supervisor'] }}</span>
                                </div>
                            </div>

                            <!-- Tags -->
                            <div class="flex flex-wrap gap-1.5 mb-4">
                                @foreach($proj['tags'] as $tag)
                                    <span class="text-[10px] font-medium px-2 py-0.5 rounded bg-amber-50 text-amber-800 border border-amber-200/60">
                                        #{{ $tag }}
                                    </span>
                                @endforeach
                            </div>
                        </div>

                        <!-- Card Action Button -->
                        <div class="pt-3 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-[11px] font-semibold text-amber-700">
                                {{ $proj['medal_target'] }}
                            </span>
                            <button @click="activeProject = {{ json_encode($proj) }}" 
                                    class="text-xs font-bold text-slate-900 hover:text-amber-600 transition flex items-center">
                                View Abstract &rarr;
                            </button>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- EVENT SCHEDULE & ITINERARY -->
    <section id="schedule" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-amber-600 bg-amber-50 px-3 py-1 rounded-full border border-amber-200">
                    Program Schedule
                </span>
                <h2 class="heading-font text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                    3-Day Exhibition Itinerary
                </h2>
                <p class="text-slate-600 text-sm">
                    All activities take place at SITC Hall (Dewan SITC), Universiti Pendidikan Sultan Idris.
                </p>
            </div>

            <!-- Day Selector Tabs -->
            <div class="flex justify-center mb-10">
                <div class="inline-flex p-1.5 rounded-2xl bg-slate-100 border border-slate-200 space-x-2">
                    @foreach($schedule as $idx => $s)
                        <button @click="activeScheduleDay = {{ $idx }}"
                                :class="activeScheduleDay === {{ $idx }} ? 'bg-white text-slate-900 shadow-sm font-bold' : 'text-slate-600 hover:text-slate-900 font-medium'"
                                class="px-5 py-2.5 rounded-xl text-xs sm:text-sm transition-all duration-200 flex items-center space-x-2">
                            <span>{{ $s['day'] }}</span>
                            <span class="hidden sm:inline text-xs text-slate-400">• {{ $s['badge'] }}</span>
                        </button>
                    @endforeach
                </div>
            </div>

            <!-- Schedule Items Container -->
            <div class="max-w-4xl mx-auto">
                @foreach($schedule as $idx => $s)
                    <div x-show="activeScheduleDay === {{ $idx }}" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 translate-y-3"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         class="space-y-4">
                        
                        <div class="p-4 rounded-xl bg-amber-50/70 border border-amber-200 flex items-center justify-between">
                            <div>
                                <h4 class="font-bold text-slate-900">{{ $s['date'] }}</h4>
                                <p class="text-xs text-amber-800">Focus: {{ $s['badge'] }}</p>
                            </div>
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-amber-500 text-slate-950">
                                Dewan SITC
                            </span>
                        </div>

                        <div class="divide-y divide-slate-100 bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                            @foreach($s['items'] as $item)
                                <div class="p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-3 hover:bg-slate-50 transition {{ !empty($item['highlight']) ? 'bg-amber-50/30' : '' }}">
                                    <div class="flex items-start space-x-4">
                                        <div class="px-3 py-1.5 rounded-lg bg-slate-100 text-slate-800 font-bold text-xs shrink-0 whitespace-nowrap">
                                            {{ $item['time'] }}
                                        </div>
                                        <div>
                                            <h5 class="text-sm font-bold text-slate-900 flex items-center">
                                                {{ $item['title'] }}
                                                @if(!empty($item['highlight']))
                                                    <span class="ml-2 px-2 py-0.5 rounded text-[10px] font-extrabold bg-amber-100 text-amber-800 border border-amber-300">
                                                        Major Event
                                                    </span>
                                                @endif
                                            </h5>
                                            <p class="text-xs text-slate-500 mt-0.5">{{ $item['venue'] }}</p>
                                        </div>
                                    </div>
                                    <span class="text-[11px] font-medium text-slate-400 self-start sm:self-center">
                                        Open Session
                                    </span>
                                </div>
                            @endforeach
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- AWARDS & PRIZES SECTION -->
    <section id="awards" class="py-20 bg-slate-50 border-t border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-amber-600 bg-amber-50 px-3 py-1 rounded-full border border-amber-200">
                    Excellence &amp; Recognition
                </span>
                <h2 class="heading-font text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                    Awards, Medals &amp; Industry Accolades
                </h2>
                <p class="text-slate-600 text-sm">
                    Outstanding student researchers and innovators will be crowned during the Grand Closing Ceremony on 6th January 2026.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($awards as $award)
                    <div class="rounded-2xl bg-white border border-slate-200 p-6 flex flex-col justify-between shadow-sm hover:shadow-lg hover:border-amber-400 transition-all duration-300">
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <span class="px-2.5 py-1 rounded-md text-[10px] font-extrabold uppercase tracking-wider 
                                    {{ $award['tier'] === 'grand' ? 'bg-amber-500 text-slate-950' : ($award['tier'] === 'gold' ? 'bg-yellow-100 text-yellow-800 border border-yellow-300' : 'bg-slate-100 text-slate-700') }}">
                                    {{ $award['badge'] }}
                                </span>
                                <span class="text-xl">🏆</span>
                            </div>
                            <h3 class="heading-font text-lg font-bold text-slate-900 mb-2">
                                {{ $award['title'] }}
                            </h3>
                            <p class="text-xs text-slate-600 leading-relaxed mb-4">
                                {{ $award['desc'] }}
                            </p>
                        </div>
                        <div class="pt-4 border-t border-slate-100">
                            <div class="text-[11px] font-bold text-amber-700">
                                Prize &amp; Grant:
                            </div>
                            <div class="text-xs font-extrabold text-slate-900 mt-0.5">
                                {{ $award['prize'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Judging Rubric Banner -->
            <div class="mt-12 p-6 rounded-2xl bg-white border border-slate-200 shadow-sm max-w-4xl mx-auto">
                <h4 class="text-sm font-bold text-slate-900 mb-3 text-center sm:text-left">Standardized Evaluation Rubric</h4>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-center">
                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                        <div class="heading-font text-2xl font-black text-amber-600">25%</div>
                        <div class="text-xs font-bold text-slate-800 mt-1">Novelty &amp; Inventiveness</div>
                    </div>
                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                        <div class="heading-font text-2xl font-black text-amber-600">30%</div>
                        <div class="text-xs font-bold text-slate-800 mt-1">Technical Execution</div>
                    </div>
                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                        <div class="heading-font text-2xl font-black text-amber-600">25%</div>
                        <div class="text-xs font-bold text-slate-800 mt-1">Market &amp; Society Impact</div>
                    </div>
                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                        <div class="heading-font text-2xl font-black text-amber-600">20%</div>
                        <div class="text-xs font-bold text-slate-800 mt-1">Pitch &amp; Demonstration</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VENUE & VISITOR GUIDE -->
    <section id="venue" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-5 space-y-6">
                    <span class="text-xs font-bold uppercase tracking-widest text-amber-600 bg-amber-50 px-3 py-1 rounded-full border border-amber-200">
                        Location &amp; Logistics
                    </span>
                    <h2 class="heading-font text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight">
                        Exhibition Venue: Dewan SITC
                    </h2>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        The <strong>SITC Hall (Dewan SITC)</strong> stands as the historic centerpiece of <strong>Kampus Sultan Abdul Jalil Shah</strong> at Universiti Pendidikan Sultan Idris (UPSI). With state-of-the-art acoustic setups, high-speed WiFi networks, and grand exhibition spaces, it provides an inspiring backdrop for 130+ cutting-edge final year project booths.
                    </p>

                    <div class="space-y-3 text-xs text-slate-700">
                        <div class="flex items-center space-x-3 p-3 rounded-xl bg-slate-50 border border-slate-200">
                            <span class="text-lg">📍</span>
                            <div>
                                <span class="font-bold">Address:</span> Kampus Sultan Abdul Jalil Shah, 35900 Tanjung Malim, Perak, Malaysia
                            </div>
                        </div>
                        <div class="flex items-center space-x-3 p-3 rounded-xl bg-slate-50 border border-slate-200">
                            <span class="text-lg">🚆</span>
                            <div>
                                <span class="font-bold">By Train (KTM):</span> 5 minutes via taxi/e-hailing from Tanjung Malim ETS / KTM Komuter Station
                            </div>
                        </div>
                        <div class="flex items-center space-x-3 p-3 rounded-xl bg-slate-50 border border-slate-200">
                            <span class="text-lg">🅿️</span>
                            <div>
                                <span class="font-bold">Parking:</span> Designated visitor parking is available at Padang SITC and Kompleks Sukan
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="https://maps.google.com/?q=Dewan+SITC+UPSI+Tanjung+Malim" target="_blank" rel="noopener noreferrer" 
                           class="inline-flex items-center px-5 py-3 rounded-xl text-xs font-bold bg-slate-900 text-white hover:bg-slate-800 transition">
                            <span>Open in Google Maps</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Interactive Venue Card & Campus Highlights -->
                <div class="lg:col-span-7">
                    <div class="rounded-3xl bg-gradient-to-br from-slate-900 via-slate-800 to-slate-950 text-white p-8 sm:p-10 shadow-2xl relative overflow-hidden">
                        
                        <div class="absolute -right-10 -bottom-10 w-64 h-64 bg-amber-500/20 rounded-full blur-3xl pointer-events-none"></div>

                        <div class="relative z-10 space-y-6">
                            <div class="flex items-center justify-between border-b border-slate-700 pb-4">
                                <div>
                                    <span class="text-xs font-bold text-amber-400 uppercase tracking-widest">UPSI Campus Map</span>
                                    <h3 class="heading-font text-2xl font-black">Dewan SITC Exhibition Zones</h3>
                                </div>
                                <span class="text-xs px-3 py-1 rounded-full bg-slate-800 border border-slate-600 text-slate-300">
                                    Capacity: 1,500+
                                </span>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
                                <div class="p-4 rounded-xl bg-slate-800/80 border border-slate-700">
                                    <span class="font-black text-amber-400 text-sm">Zone A &amp; B</span>
                                    <h5 class="font-bold text-white mt-1">Research &amp; Invention Arena</h5>
                                    <p class="text-slate-400 mt-1">Booths A01 – A40, B01 – B30. Hardware setups, IoT boards, and AI demos.</p>
                                </div>
                                <div class="p-4 rounded-xl bg-slate-800/80 border border-slate-700">
                                    <span class="font-black text-amber-400 text-sm">Zone C &amp; D</span>
                                    <h5 class="font-bold text-white mt-1">Innovation &amp; Meta-Technology</h5>
                                    <p class="text-slate-400 mt-1">Booths C01 – C35, D01 – D35. VR/AR rigs, software terminals, web apps.</p>
                                </div>
                                <div class="p-4 rounded-xl bg-slate-800/80 border border-slate-700">
                                    <span class="font-black text-amber-400 text-sm">Main Auditorium</span>
                                    <h5 class="font-bold text-white mt-1">Keynote Stage &amp; Pitching</h5>
                                    <p class="text-slate-400 mt-1">Live streaming, top-6 grand pitches, opening &amp; award ceremonies.</p>
                                </div>
                                <div class="p-4 rounded-xl bg-slate-800/80 border border-slate-700">
                                    <span class="font-black text-amber-400 text-sm">SITC Historical Foyer</span>
                                    <h5 class="font-bold text-white mt-1">Secretariat &amp; VIP Reception</h5>
                                    <p class="text-slate-400 mt-1">Visitor registration, certificate dispatch, evaluator lounge.</p>
                                </div>
                            </div>

                            <div class="pt-2 flex items-center justify-between text-xs text-slate-400">
                                <span>Event Dates: 4 – 6 January 2026</span>
                                <span class="text-amber-400 font-bold">Free Admission For All</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section id="faq" class="py-20 bg-slate-50 border-t border-slate-200/80">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-amber-600 bg-amber-50 px-3 py-1 rounded-full border border-amber-200">
                    Questions &amp; Answers
                </span>
                <h2 class="heading-font text-3xl font-extrabold text-slate-900 tracking-tight">
                    Frequently Asked Questions
                </h2>
                <p class="text-slate-600 text-sm">
                    Everything you need to know about exhibiting, visiting, and participating in IERIICH 13.
                </p>
            </div>

            <div class="space-y-4" x-data="{ activeFaq: 0 }">
                @foreach($faqs as $fidx => $faq)
                    <div class="rounded-2xl bg-white border border-slate-200 overflow-hidden shadow-xs transition duration-200">
                        <button @click="activeFaq = (activeFaq === {{ $fidx }} ? null : {{ $fidx }})"
                                class="w-full p-5 text-left font-bold text-sm sm:text-base text-slate-900 flex justify-between items-center hover:bg-slate-50 transition">
                            <span>{{ $faq['q'] }}</span>
                            <span class="ml-4 shrink-0 text-amber-600 transition-transform duration-200"
                                  :class="activeFaq === {{ $fidx }} ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </span>
                        </button>
                        <div x-show="activeFaq === {{ $fidx }}" 
                             x-collapse
                             class="px-5 pb-5 pt-1 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 bg-slate-50/50">
                            {{ $faq['a'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-slate-950 text-white border-t border-slate-800 pt-16 pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 pb-12 border-b border-slate-800">
                
                <!-- Col 1: Brand Info -->
                <div class="lg:col-span-5 space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-amber-400 to-yellow-600 text-slate-950 flex items-center justify-center font-black text-lg">
                            13
                        </div>
                        <div>
                            <span class="heading-font text-2xl font-black tracking-tight text-white">IERIICH 13</span>
                            <span class="block text-[10px] text-amber-400 uppercase tracking-widest font-semibold">Exhibition 2026</span>
                        </div>
                    </div>
                    <p class="text-xs text-slate-400 leading-relaxed max-w-sm">
                        International Exhibition of Research, Invention, Innovation, Creativity &amp; Humanities. Organized by Fakulti Komputeran &amp; Meta-Teknologi, Universiti Pendidikan Sultan Idris (UPSI).
                    </p>
                    <div class="text-xs text-slate-500">
                        📍 Dewan SITC, Kampus Sultan Abdul Jalil Shah, Tanjung Malim, Perak.
                    </div>
                </div>

                <!-- Col 2: Quick Links -->
                <div class="lg:col-span-3 space-y-3">
                    <h5 class="text-xs font-bold uppercase tracking-wider text-amber-400">Navigation</h5>
                    <ul class="space-y-2 text-xs text-slate-400">
                        <li><a href="#about" class="hover:text-white transition">About Exhibition</a></li>
                        <li><a href="#tracks" class="hover:text-white transition">Four Pillars &amp; Tracks</a></li>
                        <li><a href="#showcase" class="hover:text-white transition">FYP Projects Directory</a></li>
                        <li><a href="#schedule" class="hover:text-white transition">Itinerary &amp; Timeline</a></li>
                        <li><a href="#awards" class="hover:text-white transition">Awards &amp; Rubrics</a></li>
                        <li><a href="#venue" class="hover:text-white transition">Venue &amp; Maps</a></li>
                    </ul>
                </div>

                <!-- Col 3: Secretarial Contacts & Institutional Credentials -->
                <div class="lg:col-span-4 space-y-3">
                    <h5 class="text-xs font-bold uppercase tracking-wider text-amber-400">Secretariat &amp; Inquiries</h5>
                    <p class="text-xs text-slate-400">
                        For student registration queries, booth requests, or industry sponsorship packages:
                    </p>
                    <div class="text-xs space-y-1.5 text-slate-300">
                        <p class="flex items-center">
                            <span class="text-amber-400 mr-2">✉️</span> fskik.ieriich@upsi.edu.my
                        </p>
                        <p class="flex items-center">
                            <span class="text-amber-400 mr-2">📞</span> +605-450 6000 (Ext. Meta-Tech)
                        </p>
                        <p class="flex items-center">
                            <span class="text-amber-400 mr-2">🏛️</span> Fakulti Komputeran &amp; Meta-Teknologi, UPSI
                        </p>
                    </div>
                    <div class="pt-2">
                        <button @click="posterModalOpen = true" class="text-xs font-bold text-amber-400 hover:text-amber-300 underline">
                            View Official Poster &rarr;
                        </button>
                    </div>
                </div>

            </div>

            <!-- Bottom Copyright & Centenary Attribution -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
                <p>&copy; 2026 IERIICH 13 • Universiti Pendidikan Sultan Idris (UPSI). All rights reserved.</p>
                <p class="text-slate-400">
                    Honoring 100 Tahun SITC • MPSI • IPSI • UPSI (1922 – 2022)
                </p>
            </div>
        </div>
    </footer>

    <!-- LIGHTBOX MODAL: FULL OFFICIAL POSTER INSPECTION -->
    <div x-show="posterModalOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 overflow-y-auto bg-slate-950/85 backdrop-blur-md flex items-center justify-center p-4 sm:p-6"
         style="display: none;"
         @keydown.escape.window="posterModalOpen = false">
        
        <div class="relative max-w-2xl w-full bg-slate-900 rounded-3xl shadow-2xl border border-slate-700 overflow-hidden"
             @click.away="posterModalOpen = false">
            
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-4 px-6 border-b border-slate-800 bg-slate-950/60 text-white">
                <div>
                    <h3 class="heading-font font-bold text-base text-amber-400">IERIICH 13 Official Poster</h3>
                    <p class="text-[11px] text-slate-400">Dewan SITC • 4th - 6th January 2026</p>
                </div>
                <button @click="posterModalOpen = false" 
                        class="p-2 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 transition"
                        aria-label="Close modal">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Modal Poster Image Body -->
            <div class="p-4 bg-slate-950 flex justify-center max-h-[75vh] overflow-y-auto">
                <img src="{{ asset('images/ieriich-poster.jpg') }}" 
                     alt="Official IERIICH 13 Poster" 
                     class="rounded-xl max-h-[70vh] object-contain shadow-2xl border border-slate-800">
            </div>

            <!-- Modal Footer -->
            <div class="p-4 px-6 border-t border-slate-800 bg-slate-950/60 flex items-center justify-between text-xs text-slate-300">
                <span>Universiti Pendidikan Sultan Idris (UPSI)</span>
                <a href="{{ asset('images/ieriich-poster.jpg') }}" download="IERIICH_13_Poster.jpg" 
                   class="px-4 py-2 rounded-lg bg-amber-500 hover:bg-amber-400 text-slate-950 font-bold transition">
                    Download Poster Image
                </a>
            </div>

        </div>
    </div>

    <!-- MODAL: PROJECT ABSTRACT & DETAILS VIEWER -->
    <div x-show="activeProject !== null" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 overflow-y-auto bg-slate-950/80 backdrop-blur-sm flex items-center justify-center p-4 sm:p-6"
         style="display: none;"
         @keydown.escape.window="activeProject = null">
        
        <div class="relative max-w-xl w-full bg-white rounded-3xl shadow-2xl border border-slate-200 overflow-hidden"
             @click.away="activeProject = null"
             x-show="activeProject !== null">
            
            <div class="p-6 border-b border-slate-100 flex items-start justify-between bg-slate-50">
                <div>
                    <div class="flex items-center space-x-2">
                        <span class="px-2.5 py-0.5 rounded text-[11px] font-black bg-slate-900 text-amber-400" x-text="'BOOTH ' + (activeProject ? activeProject.booth : '')"></span>
                        <span class="text-xs font-bold text-amber-700 uppercase" x-text="activeProject ? activeProject.track_name : ''"></span>
                    </div>
                    <h3 class="heading-font font-bold text-lg text-slate-900 mt-2" x-text="activeProject ? activeProject.title : ''"></h3>
                </div>
                <button @click="activeProject = null" class="p-1 rounded-lg text-slate-400 hover:text-slate-800">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <div class="p-6 space-y-4 text-xs sm:text-sm">
                <div>
                    <h5 class="text-xs font-bold uppercase tracking-wider text-slate-400">Project Abstract</h5>
                    <p class="text-slate-700 leading-relaxed mt-1" x-text="activeProject ? activeProject.summary : ''"></p>
                </div>

                <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 space-y-2 text-xs">
                    <div>
                        <span class="font-bold text-slate-900">Student Team:</span>
                        <span class="text-slate-700 ml-1" x-text="activeProject ? activeProject.team : ''"></span>
                    </div>
                    <div>
                        <span class="font-bold text-slate-900">Faculty Supervisor:</span>
                        <span class="text-slate-700 ml-1" x-text="activeProject ? activeProject.supervisor : ''"></span>
                    </div>
                    <div>
                        <span class="font-bold text-slate-900">Department:</span>
                        <span class="text-slate-700 ml-1" x-text="activeProject ? activeProject.department : ''"></span>
                    </div>
                </div>

                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Exhibition Accolade Target:</span>
                    <span class="ml-2 inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-800" x-text="activeProject ? activeProject.medal_target : ''"></span>
                </div>
            </div>

            <div class="p-4 px-6 border-t border-slate-100 bg-slate-50 flex justify-end">
                <button @click="activeProject = null" class="px-5 py-2 rounded-xl bg-slate-900 text-white text-xs font-bold hover:bg-slate-800 transition">
                    Close
                </button>
            </div>

        </div>
    </div>

    <!-- MODAL: REGISTRATION / INQUIRY -->
    <div x-show="registerModalOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 overflow-y-auto bg-slate-950/80 backdrop-blur-sm flex items-center justify-center p-4 sm:p-6"
         style="display: none;"
         @keydown.escape.window="registerModalOpen = false">
        
        <div class="relative max-w-lg w-full bg-white rounded-3xl shadow-2xl border border-slate-200 overflow-hidden"
             @click.away="registerModalOpen = false">
            
            <div class="p-6 border-b border-slate-100 flex items-center justify-between bg-slate-50">
                <div>
                    <span class="text-xs font-bold text-amber-600 uppercase tracking-wider">Participant &amp; Visitor Portal</span>
                    <h3 class="heading-font font-bold text-lg text-slate-900">IERIICH 13 Registration</h3>
                </div>
                <button @click="registerModalOpen = false" class="p-1 rounded-lg text-slate-400 hover:text-slate-800">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <div class="p-6 space-y-4" x-data="{ registeredSuccess: false }">
                <div x-show="!registeredSuccess">
                    <p class="text-xs text-slate-600 mb-4">
                        Register your interest as a student exhibitor, academic evaluator, or general public visitor at SITC Hall.
                    </p>

                    <form @submit.prevent="registeredSuccess = true" class="space-y-3">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Full Name</label>
                            <input type="text" required placeholder="e.g. Ahmad bin Zulkifli" class="w-full px-3 py-2 text-xs border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Email Address</label>
                            <input type="email" required placeholder="e.g. ahmad@siswa.upsi.edu.my" class="w-full px-3 py-2 text-xs border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Participation Role</label>
                            <select class="w-full px-3 py-2 text-xs border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:outline-none">
                                <option>UPSI Final Year Project Exhibitor</option>
                                <option>External University Exhibitor</option>
                                <option>Industry Delegate / Evaluator</option>
                                <option>Public Visitor / School Delegation</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Project Code / Special Notes (Optional)</label>
                            <input type="text" placeholder="e.g. FYP-META-001 or Special booth power requirements" class="w-full px-3 py-2 text-xs border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:outline-none">
                        </div>

                        <div class="pt-2">
                            <button type="submit" class="w-full py-2.5 rounded-xl bg-amber-600 hover:bg-amber-700 text-white font-bold text-xs shadow-md transition">
                                Submit Registration
                            </button>
                        </div>
                    </form>
                </div>

                <div x-show="registeredSuccess" class="text-center py-6 space-y-3" style="display: none;">
                    <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto text-xl font-bold">
                        ✓
                    </div>
                    <h4 class="font-bold text-slate-900 text-base">Registration Received!</h4>
                    <p class="text-xs text-slate-600 max-w-xs mx-auto">
                        Thank you for registering for IERIICH 13. A confirmation email and event kit guide has been sent to your inbox.
                    </p>
                    <button @click="registerModalOpen = false; registeredSuccess = false" class="px-5 py-2 rounded-xl bg-slate-900 text-white text-xs font-bold">
                        Done
                    </button>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
