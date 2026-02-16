<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Sapiens.ai | IA & Automatisation'; ?></title>
    <meta name="description" content="<?php echo isset($pageDesc) ? $pageDesc : 'Solutions d\'IA et d\'automatisation sur mesure pour entreprises.'; ?>">
    
    <link rel="icon" type="image/svg+xml" href="/assets/img/favIcon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon.png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@700&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                        'display': ['Space Grotesk', 'sans-serif'],
                    },
                    colors: {
                        'electric': {
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563eb',
                        }
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'float-slow': 'float 8s ease-in-out infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                        'marquee-desktop': 'marquee 60s linear infinite',
                        'marquee-mobile': 'marquee 50s linear infinite',
                        'marquee-reverse': 'marquee-reverse 30s linear infinite',
                        'fade-in': 'fadeIn 0.6s ease-out forwards',
                        'fade-in-up': 'fadeInUp 0.6s ease-out forwards',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 20px rgba(59, 130, 246, 0.5)' },
                            '100%': { boxShadow: '0 0 40px rgba(139, 92, 246, 0.8)' },
                        },
                        marquee: {
                            '0%': { transform: 'translateX(0%)' },
                            '100%': { transform: 'translateX(-50%)' },
                        },
                        'marquee-reverse': {
                            '0%': { transform: 'translateX(-50%)' },
                            '100%': { transform: 'translateX(0%)' },
                        },
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                    },
                }
            }
        }
    </script>
    
    <link rel="stylesheet" href="/css/style.css">
    
    <script src="https://unpkg.com/lucide@latest"></script>
    <script type="text/javascript" async src="https://static.zcal.co/embed/v1/embed.js"></script>
</head>
<body class="bg-slate-950 text-slate-100 antialiased overflow-x-hidden">
    
    <div class="fixed inset-0 pointer-events-none z-0">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>
        <div class="absolute top-1/3 right-1/4 w-80 h-80 bg-violet-500/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 left-1/3 w-72 h-72 bg-pink-500/10 rounded-full blur-3xl"></div>
        <div class="absolute inset-0 grid-pattern"></div>
    </div>
    
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 glass border-b border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 md:h-20">
                <a href="/" class="flex items-center gap-2 group">
                    <img src="/assets/img/logoSapiens.svg" alt="Sapiens Logo" class="h-10 md:h-12 group-hover:scale-105 transition-transform">
                </a>
                
                <div class="hidden md:flex items-center gap-8">
                    <a href="/#solutions" class="text-sm text-slate-300 hover:text-white transition-colors">Solutions</a>
                    <a href="/#methode" class="text-sm text-slate-300 hover:text-white transition-colors">Méthode</a>
                    <a href="/#temoignages" class="text-sm text-slate-300 hover:text-white transition-colors">Témoignages</a>
                    <a href="/#faq" class="text-sm text-slate-300 hover:text-white transition-colors">FAQ</a>
                </div>
                
                <div class="hidden md:flex items-center">
                    <a href="#audit" class="js-audit-trigger px-5 py-2 bg-gradient-to-r from-blue-500 to-violet-500 rounded-full font-semibold text-sm hover:shadow-lg hover:shadow-blue-500/25 transition-all hover:scale-105">
                        Audit Gratuit
                    </a>
                </div>
                
                <button id="mobileMenuBtn" class="md:hidden p-2 rounded-lg hover:bg-white/10 transition-colors">
                    <i data-lucide="menu" class="w-6 h-6" id="menuIcon"></i>
                    <i data-lucide="x" class="w-6 h-6 hidden" id="closeIcon"></i>
                </button>
            </div>
        </div>
        
        <div id="mobileMenu" class="md:hidden glass border-t border-white/5 hidden transition-all duration-200">
            <div class="px-4 py-6 space-y-4">
                <a href="/index.php#solutions" class="mobile-menu-link block py-2 text-slate-300 hover:text-white transition-colors">Solutions</a>
                <a href="/index.php#methode" class="mobile-menu-link block py-2 text-slate-300 hover:text-white transition-colors">Méthode</a>
                <a href="/index.php#temoignages" class="mobile-menu-link block py-2 text-slate-300 hover:text-white transition-colors">Témoignages</a>
                <a href="/index.php#faq" class="mobile-menu-link block py-2 text-slate-300 hover:text-white transition-colors">FAQ</a>
                <a href="/index.php#audit" class="mobile-menu-link block w-full text-center px-6 py-3 bg-gradient-to-r from-blue-500 to-violet-500 rounded-full font-semibold text-sm mt-4">
                    Audit Gratuit
                </a>
            </div>
        </div>
    </nav>