<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GEMS | Child Development Center</title>
    @vite('resources/css/app.css')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        h1, h2, h3, h4, .brand-font {
            font-family: 'Fredoka', sans-serif;
        }
    </style>
</head>
<body class="antialiased selection:bg-teal-200 selection:text-teal-900 overflow-x-hidden">

    <!-- Background with Animated Gradient -->
    <div class="fixed inset-0 -z-10 animate-gradient-xy bg-gradient-to-br from-teal-100 via-sky-100 to-green-100">
        <!-- Floating Shapes -->
        <div class="absolute top-20 left-20 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-float"></div>
        <div class="absolute top-40 right-20 w-72 h-72 bg-yellow-300 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-float-delayed"></div>
        <div class="absolute -bottom-8 left-40 w-72 h-72 bg-pink-300 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-float"></div>
    </div>

    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        <nav class="w-full py-6 px-4 sm:px-8 flex justify-between items-center z-50">
            <div class="glass-button px-6 py-2 rounded-full flex items-center gap-2 cursor-pointer">
                <div class="w-8 h-8 rounded-full bg-gradient-to-tr from-teal-400 to-blue-400 flex items-center justify-center text-white font-bold text-lg shadow-inner">
                    G
                </div>
                <span class="font-bold text-gray-700 text-lg tracking-wide brand-font">GEMS</span>
            </div>
            
            <div class="hidden md:flex gap-4">
                <a href="#" class="glass-button px-5 py-2 rounded-full text-gray-700 font-semibold hover:text-teal-600">Services</a>
                <a href="#" class="glass-button px-5 py-2 rounded-full text-gray-700 font-semibold hover:text-teal-600">About Us</a>
                <a href="#" class="glass-button px-5 py-2 rounded-full text-gray-700 font-semibold hover:text-teal-600">Contact</a>
            </div>

            <button class="glass-button px-6 py-2 rounded-full text-teal-700 font-bold hover:bg-white/80 transition-all">
                Book Visit
            </button>
        </nav>

        <!-- Hero Section -->
        <main class="flex-grow flex items-center justify-center px-4 sm:px-8 py-12 relative">
            <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                <!-- Left Content -->
                <div class="space-y-8 z-10">
                    <div class="inline-block animate-bounce-delayed">
                        <span class="glass-button px-4 py-1.5 rounded-full text-sm font-bold text-teal-700 tracking-wide uppercase">
                            ✨ Caring for every step
                        </span>
                    </div>
                    
                    <h1 class="text-5xl md:text-7xl font-bold text-gray-800 leading-tight">
                        Growing <span class="text-teal-500 relative inline-block">
                            Happy
                            <svg class="absolute w-full h-3 -bottom-1 left-0 text-yellow-300 opacity-60" viewBox="0 0 100 10" preserveAspectRatio="none">
                                <path d="M0 5 Q 50 10 100 5" stroke="currentColor" stroke-width="8" fill="none" />
                            </svg>
                        </span> <br/>
                        <span class="text-sky-500">Minds</span> & Hearts
                    </h1>
                    
                    <p class="text-xl text-gray-600 leading-relaxed max-w-lg glass-card p-6 rounded-2xl border-none bg-white/40">
                        A safe, joyful space where children discover their potential through play, therapy, and loving guidance.
                    </p>
                    
                    <div class="flex flex-wrap gap-4 pt-4">
                        <button class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-4 px-8 rounded-full shadow-lg shadow-teal-500/30 transition-all hover:scale-105 active:scale-95 flex items-center gap-2 group">
                            Start the Journey
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </button>
                        <button class="glass-button px-8 py-4 rounded-full text-gray-700 font-bold flex items-center gap-2 hover:bg-white/60">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Watch Video
                        </button>
                    </div>
                </div>

                <!-- Right Visuals -->
                <div class="relative z-10 lg:h-[600px] flex items-center justify-center">
                    
                    <!-- Main Image container -->
                    <div class="relative w-full max-w-md aspect-[4/5] glass-card rounded-[3rem] p-4 transform rotate-3 hover:rotate-0 transition-all duration-700">
                        <div class="absolute -top-6 -right-6 w-24 h-24 bg-yellow-200 rounded-full animate-bounce-delayed flex items-center justify-center shadow-lg mix-blend-hard-light z-20">
                           <span class="text-4xl">🌟</span>
                        </div>
                        
                        <div class="w-full h-full rounded-[2.5rem] overflow-hidden bg-sky-100 relative">
                             <!-- Placeholder for a happy child image -->
                             <img src="https://images.unsplash.com/photo-1596765708726-24ba047a06f4?auto=format&fit=crop&q=80&w=800" alt="Happy Child" class="w-full h-full object-cover opacity-90 hover:opacity-100 transition-opacity duration-300">
                             
                             <div class="absolute bottom-0 left-0 w-full h-1/3 bg-gradient-to-t from-teal-900/40 to-transparent"></div>
                        </div>

                        <!-- Floating Card 1 -->
                        <div class="absolute -left-12 bottom-20 glass-card p-4 rounded-2xl animate-float flex items-center gap-3 w-48 z-30">
                            <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-200 font-semibold">Mood Support</p>
                                <p class="text-sm font-bold text-white">Always Happy</p>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Card 2 -->
                    <div class="absolute -right-4 top-10 glass-card p-3 rounded-2xl animate-float-delayed flex flex-col items-center gap-1 w-32 z-0 transform rotate-6">
                        <div class="text-3xl">🎨</div>
                        <p class="text-sm font-bold text-gray-700">Creative</p>
                    </div>

                </div>
            </div>
        </main>
        
        <!-- Decorative Elements -->
        <div class="fixed top-1/4 left-10 text-teal-200 text-6xl opacity-20 animate-spin-slow pointer-events-none">✻</div>
        <div class="fixed bottom-10 right-10 text-sky-200 text-8xl opacity-20 animate-pulse pointer-events-none">●</div>

    </div>
</body>
</html>
