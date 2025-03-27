<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-description" content="WARNING: Excessive elegance may cause spontaneous weeping">

        <title>School App</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preload" href="boccherini-minuet.mp3" as="audio">
        <source src="{{ asset('audio/boccherini-minuet.mp3') }}" type="audio/mpeg">


        <!-- Tailwind CSS with Custom Animations -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        animation: {
                            'sky-pulse': 'sky-pulse 15s ease-in-out infinite',
                            'cloud-drift': 'cloud-drift 60s linear infinite',
                            'unicorn-gallop': 'unicorn-gallop 3s cubic-bezier(0.5,-0.5,0.5,1.5) infinite',
                            'stardust-spiral': 'stardust-spiral 100s linear infinite',
                            'text-glow': 'text-glow 2s ease-in-out infinite alternate',
                            'border-rainbow': 'border-rainbow 4s linear infinite',
                        },
                        keyframes: {
                            'sky-pulse': {
                                '0%, 100%': { 'background-color': '#8b5cf6' },
                                '50%': { 'background-color': '#4c1d95' }
                            },
                            'cloud-drift': {
                                'from': { 'background-position': '0% 0%' },
                                'to': { 'background-position': '100% 50%' }
                            },
                            'unicorn-gallop': {
                                '0%, 100%': { transform: 'translateY(0) rotate(0deg)' },
                                '30%': { transform: 'translateY(-100px) rotate(-10deg)' },
                                '70%': { transform: 'translateY(-50px) rotate(5deg)' }
                            },
                            'stardust-spiral': {
                                '0%': { transform: 'scale(1) rotate(0deg)', opacity: '0.4' },
                                '50%': { transform: 'scale(1.2) rotate(180deg)', opacity: '0.6' },
                                '100%': { transform: 'scale(1) rotate(360deg)', opacity: '0.4' }
                            },
                            'text-glow': {
                                'from': { 'text-shadow': '0 0 5px rgba(236, 72, 153, 0.5)' },
                                'to': { 'text-shadow': '0 0 20px rgba(236, 72, 153, 0.9)' }
                            },
                            'border-rainbow': {
                                '0%': { 'border-color': '#ec4899' },
                                '25%': { 'border-color': '#f97316' },
                                '50%': { 'border-color': '#eab308' },
                                '75%': { 'border-color': '#22c55e' },
                                '100%': { 'border-color': '#3b82f6' }
                            }
                        }
                    }
                }
            }
        </script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap');
            
            .font-elegance {
                font-family: 'Playfair Display', serif;
            }
            
            /* For browsers that don't support backdrop-filter */
            @supports not (backdrop-filter: blur(10px)) {
                .frosted-glass {
                    background-color: rgba(255, 255, 255, 0.8);
                }
            }
        </style>
    </head>
    
    <body class="
        antialiased 
        min-h-screen
        bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] 
        from-purple-500 via-indigo-900/80 to-pink-700
        animate-[sky-pulse_15s_ease-in-out_infinite]
        overflow-x-hidden
        relative
        font-elegance
    ">
        <!-- Celestial Elements -->
        <div class="
            absolute inset-0 
            opacity-30
            [background:url('https://assets.codepen.io/13471/sparkles.png')_center/cover] 
            mix-blend-overlay
            animate-[cloud-drift_120s_linear_infinite]
        "></div>
        
        <div class="
            absolute inset-0 
            [background:url('https://assets.codepen.io/13471/stars.png')_center/cover] 
            opacity-40
            animate-[stardust-spiral_300s_linear_infinite]
            pointer-events-none
        "></div>
        
        <div class="
            fixed bottom-8 right-8
            w-32 h-32
            [background:url('https://assets.codepen.io/13471/unicorn.svg')_no-repeat_center/contain]
            opacity-90
            hover:opacity-100
            hover:animate-[unicorn-gallop_4s_ease-in-out_infinite]
            transition-all
            cursor-pointer
            z-50
            drop-shadow-[0_0_30px_rgba(255,215,0,0.7)]
            hover:drop-shadow-[0_0_50px_rgba(255,105,180,0.9)]
        "></div>

        <!-- Navigation -->
        <nav class="
            bg-white/80 backdrop-blur-md
            shadow-lg
            sticky top-0 z-40
            border-b border-pink-200/50
            animate-border-rainbow
        ">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-20 items-center">
                    <div class="flex items-center space-x-4">
                        <span class="
                            relative
                            text-3xl md:text-4xl 
                            font-bold 
                            bg-clip-text text-transparent 
                            bg-gradient-to-r from-pink-600 via-purple-600 to-pink-800
                            tracking-tight
                            animate-text-glow
                            transition-all duration-500
                            group
                        ">
                            School App
                            <span class="
                                absolute -bottom-2 left-0 
                                h-1 w-full 
                                bg-gradient-to-r from-pink-400/80 via-purple-500/80 to-pink-600/0
                                scale-x-0 
                                group-hover:scale-x-100
                                transition-transform duration-700 ease-[cubic-bezier(0.65,0,0.35,1)]
                            "></span>
                            <span class="
                                absolute -top-3 -right-4
                                w-3 h-3
                                rotate-45
                                bg-pink-300
                                opacity-0
                                group-hover:opacity-100
                                group-hover:animate-[pulse_1.5s_ease-in-out_infinite]
                            "></span>
                        </span>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <a 
                            href="{{ route('teachers.index') }}"
                            class="
                                relative
                                px-5 py-3
                                text-sm font-semibold 
                                rounded-xl
                                transition-all duration-500 ease-[cubic-bezier(0.34,1.56,0.64,1)]
                                bg-gradient-to-r from-pink-50 to-purple-50
                                text-pink-700 hover:text-pink-900
                                border border-pink-200 hover:border-pink-400
                                shadow-lg hover:shadow-xl
                                overflow-hidden
                                group
                                hover:scale-[1.03]
                                hover:z-10
                            "
                        >
                            <span class="
                                absolute inset-0 
                                bg-[radial-gradient(circle_at_center,#ec4899_0%,transparent_70%)]
                                opacity-0 
                                group-hover:opacity-30
                                transition-opacity duration-700
                                -z-10
                            "></span>
                            <span class="relative z-10 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                </svg>
                                Teachers
                                <span class="
                                    absolute left-1/2 -bottom-1
                                    h-0.5 w-0
                                    bg-pink-500
                                    transition-all duration-700
                                    group-hover:w-4/5
                                    group-hover:left-[10%]
                                "></span>
                            </span>
                            <span class="
                                absolute -top-1 -right-1
                                w-3 h-3
                                rounded-full
                                bg-pink-400
                                opacity-0
                                group-hover:opacity-100
                                group-hover:animate-[ping_1s_ease-in-out_infinite]
                            "></span>
                        </a>
                        
                        <a 
                            href="{{ route('courses.index') }}"
                            class="
                                relative
                                px-5 py-3
                                text-sm font-semibold 
                                rounded-xl
                                transition-all duration-500 ease-[cubic-bezier(0.34,1.56,0.64,1)]
                                bg-gradient-to-r from-purple-50 to-blue-50
                                text-purple-700 hover:text-purple-900
                                border border-purple-200 hover:border-purple-400
                                shadow-lg hover:shadow-xl
                                overflow-hidden
                                group
                                hover:scale-[1.03]
                                hover:z-10
                            "
                        >
                            <span class="
                                absolute inset-0 
                                bg-[radial-gradient(circle_at_center,#a855f7_0%,transparent_70%)]
                                opacity-0 
                                group-hover:opacity-30
                                transition-opacity duration-700
                                -z-10
                            "></span>
                            <span class="relative z-10 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                </svg>
                                Courses
                                <span class="
                                    absolute left-1/2 -bottom-1
                                    h-0.5 w-0
                                    bg-purple-500
                                    transition-all duration-700
                                    group-hover:w-4/5
                                    group-hover:left-[10%]
                                "></span>
                            </span>
                            <span class="
                                absolute -top-1 -right-1
                                w-3 h-3
                                rounded-full
                                bg-purple-400
                                opacity-0
                                group-hover:opacity-100
                                group-hover:animate-[ping_1s_ease-in-out_infinite]
                            "></span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="py-12 relative z-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="
                    bg-white/90 backdrop-blur-sm
                    rounded-2xl
                    overflow-hidden
                    shadow-2xl
                    border border-white/20
                ">
                    @yield('content')
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="
            bg-white/80 backdrop-blur-md
            shadow-lg
            border-t border-pink-200/50
            mt-20
            animate-border-rainbow
        ">
            <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
                <p class="
                    text-center 
                    text-lg md:text-xl 
                    font-serif italic 
                    tracking-wider 
                    bg-clip-text text-transparent 
                    bg-gradient-to-r from-pink-600 via-purple-600 to-pink-800
                    drop-shadow-[0_2px_4px_rgba(219,39,119,0.25)]
                    hover:drop-shadow-[0_4px_8px_rgba(219,39,119,0.4)]
                    transition-all duration-500 ease-in-out
                    group
                    relative
                    py-2
                    px-6
                    inline-block
                ">
                    <span class="relative z-10">
                        &copy; {{ date('Y') }} <span class="font-bold">School App</span>. All rights reserved.
                        <span class="
                            absolute left-0 -bottom-1 
                            h-0.5 w-full 
                            bg-gradient-to-r from-pink-400/0 via-pink-400/80 to-pink-400/0
                            scale-x-0 
                            group-hover:scale-x-100
                            transition-transform duration-700 ease-[cubic-bezier(0.68,-0.6,0.32,1.6)]
                        "></span>
                    </span>
                    
                    <span class="
                        absolute -top-2 -left-2
                        w-2 h-2
                        rotate-45
                        bg-pink-300/80
                        opacity-0
                        group-hover:opacity-100
                        group-hover:animate-[sparkle_2s_linear_infinite]
                    "></span>
                    <span class="
                        absolute -bottom-2 -right-2
                        w-3 h-3
                        rotate-45
                        bg-purple-300/80
                        opacity-0
                        group-hover:opacity-100
                        group-hover:animate-[sparkle_3s_linear_infinite_1s)]
                    "></span>
                </p>
            </div>
        </footer>

        <!-- Harp Audio (For Emotional Impact) -->
        <audio id="harp" preload="auto">
            <source src="https://assets.codepen.io/13471/harp-glissando.mp3" type="audio/mpeg">
        </audio>

        <!-- Unicorn Interaction Script -->
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const unicorn = document.querySelector('.unicorn');
                const harp = document.getElementById('harp');
                
                unicorn.addEventListener('click', () => {
                    harp.currentTime = 0;
                    harp.play();
                    
                    // Create rainbow trail
                    for (let i = 0; i < 5; i++) {
                        setTimeout(() => {
                            const spark = document.createElement('div');
                            spark.className = 'absolute w-4 h-4 rounded-full bg-gradient-to-r from-pink-400 to-purple-400 opacity-80';
                            spark.style.left = `${Math.random() * 100}%`;
                            spark.style.top = `${Math.random() * 100}%`;
                            spark.style.transform = 'scale(0)';
                            document.body.appendChild(spark);
                            
                            setTimeout(() => {
                                spark.style.transform = 'scale(1.5)';
                                spark.style.opacity = '0';
                                setTimeout(() => spark.remove(), 1000);
                            }, 50);
                        }, i * 100);
                    }
                });
            });
        </script>
        <audio id="boccherini" loop>
    <source src="https://www.example.com/boccherini-minuet.mp3" type="audio/mpeg">
    <!-- Fallback for ancient browsers -->
    <embed src="boccherini-minuet.mp3" width="0" height="0" autostart="true" loop="true">
</audio>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const audio = document.getElementById('boccherini');
        audio.volume = 0.3; // Gentle volume for sophistication
        
        // Only play after user interaction (respecting autoplay policies)
        const playAudio = () => {
            audio.play().catch(e => console.log("Autoplay prevented - awaiting interaction"));
            document.removeEventListener('click', playAudio);
        };
        
        document.addEventListener('click', playAudio);
        
        // For mobile - show elegant play button
        
        `;
        document.body.appendChild(audioConsent);
    });
</script>
<source src="{{ asset('audio/boccherini-minuet.mp3') }}" type="audio/mpeg">
<div class="fixed bottom-4 left-4 z-50">
    <button id="music-toggle" class="
        bg-white/90 hover:bg-white 
        rounded-full p-3 shadow-lg
        border border-pink-200
        transition-all hover:scale-110
        group
    ">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-700" 
             viewBox="0 0 20 20" fill="currentColor">
            <path d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" />
        </svg>
        <span class="
            absolute left-full ml-2 
            bg-pink-700 text-white 
            px-2 py-1 rounded 
            text-xs
            opacity-0 group-hover:opacity-100
            transition-opacity
        ">Play Boccherini</span>
    </button>
</div>

<script>
    const audio = new Audio("{{ asset('audio/boccherini-minuet.mp3') }}");
    audio.loop = true;
    audio.volume = 0.3;
    
    document.getElementById('music-toggle').addEventListener('click', function() {
        if (audio.paused) {
            audio.play();
            this.innerHTML = `<!-- Pause icon -->`;
        } else {
            audio.pause();
            this.innerHTML = `<!-- Play icon -->`;
        }
    });
</script>
@env('MUSIC_MAESTRO')
    <!-- Music player code -->
@endenv
    </body>
</html>