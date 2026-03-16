<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shivam Kumar | Front-End Developer & BCA Student</title>
    <meta name="description" content="Portfolio of Shivam Kumar, a Creative Front-End Developer and BCA student specializing in modern web experiences.">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <!-- Vanilla Tilt -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563EB',
                        glass: 'rgba(255, 255, 255, 0.08)',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-white">
    <!-- Background Elements -->
    <div class="mesh-background">
        <div class="floating-shape w-96 h-96 bg-blue-100 top-0 left-0" style="animation-delay: 0s"></div>
        <div class="floating-shape w-80 h-80 bg-slate-100 bottom-0 right-0" style="animation-delay: -5s"></div>
        <div class="floating-shape w-64 h-64 bg-blue-50 top-1/2 left-1/2" style="animation-delay: -10s"></div>
    </div>

    <!-- Navigation -->
    <nav class="fixed top-8 left-1/2 -translate-x-1/2 z-50">
        <div class="glass-pill px-8 py-4 flex items-center gap-10">
            <a href="#hero" class="text-slate-600 hover:text-primary font-semibold transition-colors">Home</a>
            <a href="#about" class="text-slate-600 hover:text-primary font-semibold transition-colors">About</a>
            <a href="#skills" class="text-slate-600 hover:text-primary font-semibold transition-colors">Skills</a>
            <a href="#projects" class="text-slate-600 hover:text-primary font-semibold transition-colors">Projects</a>
            <a href="#contact" class="text-slate-600 hover:text-primary font-semibold transition-colors">Contact</a>
        </div>
    </nav>

    <main class="container mx-auto px-6 pt-32">
        <!-- Hero Section -->
        <section id="hero" class="min-h-[80vh] flex flex-col md:flex-row items-center justify-between gap-16 mb-40">
            <div class="md:w-1/2 space-y-8">
                <div class="space-y-4">
                    <p class="text-primary font-bold tracking-[0.2em] uppercase text-sm">Hello, my name is</p>
                    <h1 class="text-7xl md:text-8xl font-black text-slate-900 leading-[1.1]">
                        Shivam <span class="text-primary">Kumar</span>
                    </h1>
                    <div class="glass-pill inline-block px-4 py-2">
                        <p class="text-slate-600 font-bold flex items-center gap-2">
                            <i data-lucide="monitor" class="w-5 h-5 text-primary"></i>
                            Front-End Developer
                        </p>
                    </div>
                </div>
                <p class="text-xl text-slate-500 max-w-lg leading-relaxed font-medium">
                    I build modern websites and interactive user experiences. Specialized in crafting clean, futuristic interfaces that push the boundaries of the web.
                </p>
                <div class="flex flex-wrap gap-4 pt-4">
                    <button class="bg-primary text-white px-10 py-5 rounded-2xl font-bold text-lg shadow-2xl shadow-blue-200 hover:scale-105 transition-all">
                        View Projects
                    </button>
                    <button class="glass-card px-10 py-5 rounded-2xl font-bold text-lg hover:bg-white/30 transition-all border-white/40">
                        Contact Me
                    </button>
                </div>
            </div>

            <div class="md:w-1/2 flex justify-center lg:justify-end">
                <div class="relative w-full max-w-[450px] aspect-square tilt-card" data-tilt>
                    <div class="absolute -inset-6 bg-primary/10 rounded-[4rem] blur-3xl -z-10"></div>
                    <div class="glass-card p-6 h-full relative overflow-hidden group">
                        <img src="assets/img/shivam_portrait.png" alt="Shivam Kumar" class="w-full h-full object-cover rounded-[2rem] shadow-2xl grayscale hover:grayscale-0 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </div>
                    <!-- Floating Accents -->
                    <div class="absolute -top-10 -right-10 glass-card p-5 floating-delayed">
                        <i data-lucide="layers" class="w-10 h-10 text-primary"></i>
                    </div>
                    <div class="absolute -bottom-10 -left-10 glass-card p-5 floating">
                        <i data-lucide="zap" class="w-10 h-10 text-primary"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Me -->
        <section id="about" class="mb-40 scroll-mt-32">
            <h2 class="text-5xl font-black mb-16 text-center">About <span class="text-primary">Me</span></h2>
            <div class="grid md:grid-cols-2 gap-12">
                <div class="glass-card p-10 space-y-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                        <i data-lucide="user" class="w-8 h-8 text-primary"></i>
                    </div>
                    <h3 class="text-3xl font-bold">Who am I?</h3>
                    <p class="text-slate-500 leading-relaxed text-lg font-medium">
                        I am a dedicated **BCA Student** and **Front-End Developer** with a passion for building modern web applications. My journey started with a fascination for interactive design, which led me to master the art of creating high-performance, visually stunning websites.
                    </p>
                    <p class="text-slate-500 leading-relaxed text-lg font-medium">
                        I focus on bridging the gap between design and technology, ensuring every project I touch is not only beautiful but also lightning-fast and accessible.
                    </p>
                </div>
                <div class="glass-card p-10 flex flex-col justify-center">
                    <div class="space-y-8">
                        <div class="flex items-center gap-6">
                            <div class="w-14 h-14 glass-pill flex items-center justify-center shrink-0">
                                <i data-lucide="graduation-cap" class="w-6 h-6 text-primary"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-slate-800">Education</h4>
                                <p class="text-slate-500">Bachelor of Computer Applications</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-6">
                            <div class="w-14 h-14 glass-pill flex items-center justify-center shrink-0">
                                <i data-lucide="heart" class="w-6 h-6 text-primary"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-slate-800">Passion</h4>
                                <p class="text-slate-500">Modern UI/UX & Interactive Experiences</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-6">
                            <div class="w-14 h-14 glass-pill flex items-center justify-center shrink-0">
                                <i data-lucide="globe" class="w-6 h-6 text-primary"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-slate-800">Goal</h4>
                                <p class="text-slate-500">Building the future of the web</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="mb-40 text-center scroll-mt-32">
            <h2 class="text-5xl font-black mb-16">Technical <span class="text-primary">Arsenal</span></h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
                <?php
                $skills = [
                    ['name' => 'HTML', 'percent' => 95, 'icon' => 'code-2'],
                    ['name' => 'CSS', 'percent' => 90, 'icon' => 'layout'],
                    ['name' => 'JavaScript', 'percent' => 85, 'icon' => 'braces'],
                    ['name' => 'React', 'percent' => 80, 'icon' => 'atom'],
                    ['name' => 'PHP', 'percent' => 75, 'icon' => 'database'],
                    ['name' => 'MySQL', 'percent' => 70, 'icon' => 'server'],
                ];
                foreach ($skills as $skill) {
                    echo "
                    <div class='glass-card p-8 flex flex-col items-center group hover:scale-105 transition-transform'>
                        <div class='w-14 h-14 bg-slate-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary/10 transition-colors'>
                            <i data-lucide='{$skill['icon']}' class='w-7 h-7 text-primary'></i>
                        </div>
                        <h4 class='font-bold text-slate-800 mb-4'>{$skill['name']}</h4>
                        <div class='progress-container'>
                            <div class='progress-bar' style='width: {$skill['percent']}%'></div>
                        </div>
                        <span class='text-xs font-bold text-slate-400 mt-2'>{$skill['percent']}%</span>
                    </div>";
                }
                ?>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="mb-40 scroll-mt-32">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div>
                    <h2 class="text-5xl font-black">Featured <span class="text-primary">Works</span></h2>
                    <p class="text-slate-400 mt-2 text-lg">Pushing boundaries with every line of code.</p>
                </div>
                <div class="flex gap-4">
                    <button class="w-12 h-12 glass-pill flex items-center justify-center hover:bg-primary hover:text-white transition-all">
                        <i data-lucide="chevron-left" class="w-6 h-6"></i>
                    </button>
                    <button class="w-12 h-12 glass-pill flex items-center justify-center hover:bg-primary hover:text-white transition-all">
                        <i data-lucide="chevron-right" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                <?php
                $projects = [
                    [
                        'title' => 'Nexus Platform', 
                        'desc' => 'A decentralized dashboard for real-time data visualization.', 
                        'img' => 'assets/img/project1.png',
                        'tech' => ['React', 'GSAP']
                    ],
                    [
                        'title' => 'Aura Store', 
                        'desc' => 'Futuristic e-commerce experience with 3D product viewing.', 
                        'img' => 'assets/img/project2.png',
                        'tech' => ['PHP', 'MySQL']
                    ],
                    [
                        'title' => 'Pulse AI', 
                        'desc' => 'High-performance interactive interface for AI analysis.', 
                        'img' => 'assets/img/project3.png',
                        'tech' => ['JS', 'Canvas']
                    ],
                ];
                foreach ($projects as $project) {
                    echo "
                    <div class='glass-card p-5 group tilt-card' data-tilt>
                        <div class='inner-content'>
                            <div class='overflow-hidden rounded-2xl mb-6 aspect-video relative'>
                                <img src='{$project['img']}' class='w-full h-full object-cover transition-transform duration-700 group-hover:scale-110' alt='{$project['title']}'>
                                <div class='absolute top-4 right-4 flex gap-2'>
                                    " . implode('', array_map(fn($t) => "<span class='px-3 py-1 bg-white/20 backdrop-blur-md rounded-lg text-[10px] font-black text-white uppercase'>$t</span>", $project['tech'])) . "
                                </div>
                            </div>
                            <h3 class='text-2xl font-black mb-3'>{$project['title']}</h3>
                            <p class='text-slate-500 mb-8 font-medium line-clamp-2'>{$project['desc']}</p>
                            <div class='flex gap-3'>
                                <button class='flex-1 bg-primary text-white py-3 rounded-xl font-bold flex items-center justify-center gap-2 hover:bg-primary/90 transition-all'>
                                    <i data-lucide='external-link' class='w-4 h-4'></i> Live Demo
                                </button>
                                <button class='w-12 bg-slate-900 text-white rounded-xl flex items-center justify-center hover:bg-slate-800 transition-all'>
                                    <i data-lucide='github' class='w-5 h-5'></i>
                                </button>
                            </div>
                        </div>
                    </div>";
                }
                ?>
            </div>
        </section>

        <!-- Achievements Section -->
        <section id="achievements" class="mb-40 scroll-mt-32">
            <h2 class="text-5xl font-black mb-16 text-center">Milestones & <span class="text-primary">Achievements</span></h2>
            <div class="max-w-4xl mx-auto space-y-6">
                <div class="glass-card p-10 flex flex-col md:flex-row gap-10 items-center">
                    <div class="w-24 h-24 bg-blue-100 rounded-3xl flex items-center justify-center shrink-0">
                        <i data-lucide="award" class="w-12 h-12 text-primary"></i>
                    </div>
                    <div>
                        <div class="flex items-center gap-4 mb-2">
                            <span class="px-3 py-1 bg-primary/10 text-primary font-bold text-xs rounded-full uppercase">Certificate</span>
                            <span class="text-slate-400 font-bold text-sm">2024</span>
                        </div>
                        <h4 class="text-2xl font-black mb-2">React Mastery Workshop</h4>
                        <p class="text-slate-500 font-medium">Successfully completed advanced React.js workshop focusing on hooks, state management, and performance optimization.</p>
                    </div>
                </div>
                <div class="glass-card p-10 flex flex-col md:flex-row gap-10 items-center">
                    <div class="w-24 h-24 bg-slate-50 rounded-3xl flex items-center justify-center shrink-0">
                        <i data-lucide="users" class="w-12 h-12 text-slate-400"></i>
                    </div>
                    <div>
                        <div class="flex items-center gap-4 mb-2">
                            <span class="px-3 py-1 bg-slate-100 text-slate-500 font-bold text-xs rounded-full uppercase">Workshop</span>
                            <span class="text-slate-400 font-bold text-sm">2023</span>
                        </div>
                        <h4 class="text-2xl font-black mb-2">Web Design Hackathon Participant</h4>
                        <p class="text-slate-500 font-medium">Engaged in a 48-hour intensive hackathon building accessible and responsive web architectures.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="mb-40 scroll-mt-32">
            <div class="grid md:grid-cols-2 gap-16 items-center max-w-6xl mx-auto">
                <div class="space-y-10">
                    <div>
                        <h2 class="text-6xl font-black mb-4 leading-tight">Let's start <br><span class="text-primary">a project!</span></h2>
                        <p class="text-xl text-slate-500 font-medium">Got a vision? Let's turn it into reality with some high-end code and design.</p>
                    </div>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <a href="#" class="social-link"><i data-lucide="linkedin" class="w-5 h-5"></i></a>
                            <a href="#" class="social-link"><i data-lucide="github" class="w-5 h-5"></i></a>
                            <a href="#" class="social-link"><i data-lucide="instagram" class="w-5 h-5"></i></a>
                            <a href="#" class="social-link"><i data-lucide="twitter" class="w-5 h-5"></i></a>
                        </div>
                        <div class="space-y-2">
                            <p class="text-slate-400 font-bold uppercase text-xs tracking-widest">Email me</p>
                            <a href="mailto:shivam@example.com" class="text-2xl font-black text-slate-800 hover:text-primary transition-colors">shivam@example.com</a>
                        </div>
                    </div>
                </div>
                <div class="glass-card p-12">
                    <form class="space-y-8">
                        <div class="space-y-2">
                            <label class="text-sm font-black text-slate-700 ml-1">Full Name</label>
                            <input type="text" placeholder="Your Name" class="w-full bg-white/5 border-2 border-slate-100 rounded-2xl px-8 py-5 outline-none focus:border-primary transition-colors font-bold">
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-black text-slate-700 ml-1">Email Address</label>
                            <input type="email" placeholder="email@example.com" class="w-full bg-white/5 border-2 border-slate-100 rounded-2xl px-8 py-5 outline-none focus:border-primary transition-colors font-bold">
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-black text-slate-700 ml-1">Project Details</label>
                            <textarea rows="4" placeholder="Tell me about your vision..." class="w-full bg-white/5 border-2 border-slate-100 rounded-2xl px-8 py-5 outline-none focus:border-primary transition-colors font-bold resize-none"></textarea>
                        </div>
                        <button class="w-full bg-primary text-white py-6 rounded-2xl font-black text-xl hover:scale-[1.02] transition-all shadow-2xl shadow-blue-300 flex items-center justify-center gap-3">
                            Send Message <i data-lucide="send" class="w-6 h-6"></i>
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="py-20 border-t border-slate-100 text-center">
        <div class="container mx-auto px-6">
            <h3 class="text-2xl font-black mb-8">Shivam <span class="text-primary">Kumar</span></h3>
            <div class="flex justify-center gap-8 mb-12">
                <a href="#about" class="text-slate-400 hover:text-primary font-bold transition-colors">About</a>
                <a href="#skills" class="text-slate-400 hover:text-primary font-bold transition-colors">Skills</a>
                <a href="#projects" class="text-slate-400 hover:text-primary font-bold transition-colors">Projects</a>
                <a href="#contact" class="text-slate-400 hover:text-primary font-bold transition-colors">Contact</a>
            </div>
            <p class="text-slate-400 text-sm font-bold uppercase tracking-widest">© 2024 Design by Shivam Kumar. Building the future.</p>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>
    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Reveal animations
        gsap.registerPlugin(ScrollTrigger);

        // Progress bar animation
        gsap.utils.toArray('.progress-bar').forEach(bar => {
            gsap.to(bar, {
                width: bar.style.width,
                scrollTrigger: {
                    trigger: bar,
                    start: 'top 95%',
                }
            });
        });

        // 3D Tilt Initialization
        VanillaTilt.init(document.querySelectorAll(".tilt-card"), {
            max: 15,
            speed: 400,
            glare: true,
            "max-glare": 0.2,
        });
    </script>
</body>
</html>
