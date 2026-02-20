<?php
// Configuration SEO pour cette page
$pageTitle = "BeSapiens | IA & Automatisation pour Entreprises Ambitieuses";
$pageDesc = "Rendez vos équipes 10x plus efficaces avec nos solutions d'IA et d'automatisation sur mesure.";

// Inclusion de l'en-tête (Head + Navbar)
include 'includes/header.php';
?>

<!-- Schema.org WebPage -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "BeSapiens — IA & Automatisation pour entreprises",
    "description": "Automatisez vos processus métier avec l'IA. BeSapiens conçoit des solutions sur mesure : agents IA, chatbots, workflows automatisés.",
    "url": "https://besapiens.fr/",
    "inLanguage": "fr-FR",
    "isPartOf": {
        "@type": "WebSite",
        "name": "BeSapiens",
        "url": "https://besapiens.fr"
    },
    "speakable": {
        "@type": "SpeakableSpecification",
        "cssSelector": ["#faq", ".hero-content"]
    }
}
</script>

<section class="relative min-h-screen xl:min-h-[70vh] pt-28 md:pt-36 pb-20 px-4 sm:px-6 lg:px-8 overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-8 items-center">
            <div class="text-center lg:text-left space-y-6 opacity-0 animate-fade-in-up">
                <div
                    class="inline-flex items-center gap-3 px-5 py-2.5 rounded-full glass-light border border-white/10 hover:border-blue-500/30 transition-all duration-300 group/badge cursor-default">
                    <div class="flex -space-x-2.5">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=40&h=40&fit=crop&crop=face"
                            alt="Client"
                            class="w-8 h-8 rounded-full border-2 border-slate-800 group-hover/badge:border-blue-500/50 transition-colors">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=40&h=40&fit=crop&crop=face"
                            alt="Client"
                            class="w-8 h-8 rounded-full border-2 border-slate-800 group-hover/badge:border-violet-500/50 transition-colors">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=40&h=40&fit=crop&crop=face"
                            alt="Client"
                            class="w-8 h-8 rounded-full border-2 border-slate-800 group-hover/badge:border-blue-500/50 transition-colors">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=40&h=40&fit=crop&crop=face"
                            alt="Client"
                            class="w-8 h-8 rounded-full border-2 border-slate-800 group-hover/badge:border-violet-500/50 transition-colors">
                        <div
                            class="w-8 h-8 rounded-full border-2 border-slate-800 bg-gradient-to-br from-blue-500 to-violet-500 flex items-center justify-center text-[10px] font-bold shadow-lg shadow-blue-500/20">
                            +50</div>
                    </div>
                    <div class="flex flex-col items-start gap-0.5">
                        <div class="flex items-center gap-0.5 text-yellow-400">
                            <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                            <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                            <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                            <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                            <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                        </div>
                        <span class="text-xs text-slate-300"><strong class="text-white">+50 projets</strong> ·
                            Satisfaction <strong class="gradient-text">4,8/5</strong></span>
                    </div>
                </div>

                <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold leading-tight">
                    Rendez vos équipes <span class="gradient-text">10x plus efficaces</span>
                </h1>

                <p class="text-lg sm:text-xl text-slate-400 max-w-xl mx-auto lg:mx-0 leading-relaxed">
                    On développe des solutions d'IA et d'automatisation sur mesure pour vous faire gagner en <strong
                        class="text-white">fiabilité</strong>, en <strong class="text-white">temps</strong> et en
                    <strong class="text-white">productivité</strong>.
                </p>

                <div class="flex flex-col sm:flex-row gap-3 justify-center lg:justify-start pt-2">
                    <a href="#audit"
                        class="js-audit-trigger group px-6 py-3 bg-gradient-to-r from-blue-500 to-violet-500 rounded-full font-semibold text-base hover:shadow-lg hover:shadow-blue-500/25 transition-all hover:scale-105 flex items-center justify-center gap-2">
                        <span>Évaluer mon potentiel IA</span>
                        <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a href="#solutions"
                        class="px-6 py-3 rounded-full font-semibold text-base border border-white/20 hover:bg-white/5 transition-all flex items-center justify-center gap-2">
                        <i data-lucide="play-circle" class="w-4 h-4"></i>
                        <span>Voir nos solutions</span>
                    </a>
                </div>

                <div class="grid grid-cols-3 gap-6 pt-8 border-t border-white/10">
                    <div>
                        <div class="font-display text-2xl sm:text-3xl font-bold gradient-text">85%</div>
                        <div class="text-sm text-slate-400">Gain de temps moyen</div>
                    </div>
                    <div>
                        <div class="font-display text-2xl sm:text-3xl font-bold gradient-text">6x</div>
                        <div class="text-sm text-slate-400">ROI moyen constaté</div>
                    </div>
                    <div>
                        <div class="font-display text-2xl sm:text-3xl font-bold gradient-text">+150</div>
                        <div class="text-sm text-slate-400">Workflows déployés</div>
                    </div>
                </div>
            </div>

            <div class="relative opacity-0 animate-fade-in delay-300">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-blue-500/30 to-violet-500/30 blur-3xl rounded-full scale-75">
                </div>

                <div class="relative animate-float">
                    <div class="glass rounded-2xl p-4 glow-border transition-all duration-500 shadow-2xl">
                        <div class="flex items-center justify-between mb-4 px-2">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                                <div class="w-3 h-3 rounded-full bg-green-500"></div>
                            </div>
                            <div class="flex items-center gap-2 text-xs text-slate-400">
                                <i data-lucide="layout-dashboard" class="w-3 h-3"></i>
                                <span>Vue d'ensemble</span>
                            </div>
                            <div class="w-16"></div>
                        </div>

                        <div class="hidden md:block">
                            <div class="grid grid-cols-3 gap-3">
                                <div class="col-span-2 glass-light rounded-xl p-4">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="text-xs font-medium text-slate-300">Automatisations
                                            exécutées</span>
                                        <span class="text-xs text-green-400 flex items-center gap-1">
                                            <i data-lucide="trending-up" class="w-3 h-3"></i>+24%
                                        </span>
                                    </div>
                                    <div class="flex items-end gap-1.5 h-24">
                                        <div class="flex-1 bg-gradient-to-t from-blue-600 to-blue-400 rounded-t opacity-60"
                                            style="height: 45%"></div>
                                        <div class="flex-1 bg-gradient-to-t from-blue-600 to-blue-400 rounded-t opacity-70"
                                            style="height: 60%"></div>
                                        <div class="flex-1 bg-gradient-to-t from-blue-600 to-blue-400 rounded-t opacity-75"
                                            style="height: 50%"></div>
                                        <div class="flex-1 bg-gradient-to-t from-blue-600 to-blue-400 rounded-t opacity-80"
                                            style="height: 75%"></div>
                                        <div class="flex-1 bg-gradient-to-t from-blue-600 to-blue-400 rounded-t opacity-85"
                                            style="height: 65%"></div>
                                        <div class="flex-1 bg-gradient-to-t from-blue-600 to-blue-400 rounded-t opacity-90"
                                            style="height: 85%"></div>
                                        <div class="flex-1 bg-gradient-to-t from-violet-600 to-violet-400 rounded-t"
                                            style="height: 100%"></div>
                                        <div class="flex-1 bg-gradient-to-t from-blue-600 to-blue-400 rounded-t opacity-75"
                                            style="height: 70%"></div>
                                        <div class="flex-1 bg-gradient-to-t from-blue-600 to-blue-400 rounded-t opacity-60"
                                            style="height: 55%"></div>
                                    </div>
                                    <div class="flex justify-between mt-2 text-[10px] text-slate-500">
                                        <span>Mar</span><span>Avr</span><span>Mai</span><span>Jun</span><span>Jul</span><span>Aoû</span><span>Sep</span><span>Oct</span><span>Nov</span>
                                    </div>

                                    <div class="mt-4 pt-3 border-t border-white/5">
                                        <div class="flex items-center justify-between mb-2">
                                            <span class="text-[10px] font-medium text-slate-400">Activité récente</span>
                                            <span class="text-[10px] text-blue-400">Voir tout</span>
                                        </div>
                                        <div class="space-y-2">
                                            <div class="flex items-center gap-2 text-[10px]">
                                                <div class="w-1.5 h-1.5 rounded-full bg-green-400"></div>
                                                <span class="text-slate-400">Lead qualifié envoyé au CRM</span>
                                                <span class="text-slate-600 ml-auto">2min</span>
                                            </div>
                                            <div class="flex items-center gap-2 text-[10px]">
                                                <div class="w-1.5 h-1.5 rounded-full bg-blue-400"></div>
                                                <span class="text-slate-400">Rapport hebdo généré</span>
                                                <span class="text-slate-600 ml-auto">15min</span>
                                            </div>
                                            <div class="flex items-center gap-2 text-[10px]">
                                                <div class="w-1.5 h-1.5 rounded-full bg-violet-400"></div>
                                                <span class="text-slate-400">Email client répondu par IA</span>
                                                <span class="text-slate-600 ml-auto">32min</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-y-3">
                                    <div class="glass-light rounded-xl p-3">
                                        <div class="flex items-center gap-2 mb-1">
                                            <div
                                                class="w-6 h-6 rounded-lg bg-blue-500/20 flex items-center justify-center">
                                                <i data-lucide="mail" class="w-3 h-3 text-blue-400"></i>
                                            </div>
                                            <span class="text-[10px] text-slate-400">Emails traités</span>
                                        </div>
                                        <div class="flex items-end justify-between">
                                            <span class="text-xl font-bold">1 847</span>
                                            <span class="text-[10px] text-green-400">+18%</span>
                                        </div>
                                    </div>

                                    <div class="glass-light rounded-xl p-3">
                                        <div class="flex items-center gap-2 mb-1">
                                            <div
                                                class="w-6 h-6 rounded-lg bg-violet-500/20 flex items-center justify-center">
                                                <i data-lucide="clock" class="w-3 h-3 text-violet-400"></i>
                                            </div>
                                            <span class="text-[10px] text-slate-400">Temps économisé</span>
                                        </div>
                                        <div class="flex items-end justify-between">
                                            <span class="text-xl font-bold">47h</span>
                                            <span class="text-[10px] text-green-400">+32%</span>
                                        </div>
                                    </div>

                                    <div class="glass-light rounded-xl p-3">
                                        <div class="flex items-center gap-2 mb-1">
                                            <div
                                                class="w-6 h-6 rounded-lg bg-green-500/20 flex items-center justify-center">
                                                <i data-lucide="file-text" class="w-3 h-3 text-green-400"></i>
                                            </div>
                                            <span class="text-[10px] text-slate-400">Contenus générés</span>
                                        </div>
                                        <div class="flex items-end justify-between">
                                            <span class="text-xl font-bold">234</span>
                                            <span class="text-[10px] text-green-400">+45%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-3 gap-3 mt-3">
                                <div class="glass-light rounded-lg p-2 flex items-center gap-2">
                                    <div class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></div>
                                    <span class="text-[10px] text-slate-300">12 workflows actifs</span>
                                </div>
                                <div class="glass-light rounded-lg p-2 flex items-center gap-2">
                                    <div class="w-2 h-2 rounded-full bg-blue-400"></div>
                                    <span class="text-[10px] text-slate-300">99.8% uptime</span>
                                </div>
                                <div class="glass-light rounded-lg p-2 flex items-center gap-2">
                                    <div class="w-2 h-2 rounded-full bg-violet-400"></div>
                                    <span class="text-[10px] text-slate-300">3 agents IA</span>
                                </div>
                            </div>
                        </div>

                        <div class="md:hidden">
                            <div class="grid grid-cols-2 gap-2 mb-3">
                                <div class="glass-light rounded-lg p-3">
                                    <div class="flex items-center gap-2 mb-1">
                                        <div class="w-5 h-5 rounded bg-blue-500/20 flex items-center justify-center">
                                            <i data-lucide="zap" class="w-2.5 h-2.5 text-blue-400"></i>
                                        </div>
                                        <span class="text-[9px] text-slate-400">Workflows</span>
                                    </div>
                                    <div class="text-lg font-bold">2 847</div>
                                </div>
                                <div class="glass-light rounded-lg p-3">
                                    <div class="flex items-center gap-2 mb-1">
                                        <div class="w-5 h-5 rounded bg-green-500/20 flex items-center justify-center">
                                            <i data-lucide="clock" class="w-2.5 h-2.5 text-green-400"></i>
                                        </div>
                                        <span class="text-[9px] text-slate-400">Économisé</span>
                                    </div>
                                    <div class="text-lg font-bold">47h</div>
                                </div>
                            </div>

                            <div class="glass-light rounded-lg p-3 mb-3">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-[10px] text-slate-300">Performance</span>
                                    <span class="text-[10px] text-green-400">+24%</span>
                                </div>
                                <div class="flex items-end gap-1 h-12">
                                    <div class="flex-1 bg-gradient-to-t from-blue-600 to-blue-400 rounded-sm opacity-50"
                                        style="height: 40%"></div>
                                    <div class="flex-1 bg-gradient-to-t from-blue-600 to-blue-400 rounded-sm opacity-60"
                                        style="height: 55%"></div>
                                    <div class="flex-1 bg-gradient-to-t from-blue-600 to-blue-400 rounded-sm opacity-70"
                                        style="height: 65%"></div>
                                    <div class="flex-1 bg-gradient-to-t from-blue-600 to-blue-400 rounded-sm opacity-80"
                                        style="height: 75%"></div>
                                    <div class="flex-1 bg-gradient-to-t from-violet-600 to-violet-400 rounded-sm"
                                        style="height: 100%"></div>
                                </div>
                            </div>

                            <div class="glass-light rounded-lg p-3">
                                <div class="flex items-center gap-2 text-[9px] text-slate-400">
                                    <div class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></div>
                                    <span>3 agents IA actifs</span>
                                    <span class="ml-auto text-slate-500">En ligne</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <i data-lucide="chevron-down" class="w-6 h-6 text-slate-500"></i>
    </div>
</section>

<?php include 'includes/clients.php'; ?>

<section id="solutions" class="py-24 px-4 sm:px-6 lg:px-8 relative">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span
                class="inline-block px-4 py-1.5 rounded-full text-sm font-medium bg-blue-500/10 text-blue-400 border border-blue-500/20 mb-4">
                Nos Solutions
            </span>
            <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
                L'IA et l'automatisation au service de <span class="gradient-text">votre croissance</span>
            </h2>
            <p class="text-lg text-slate-400">
                Deux approches complémentaires pour transformer vos opérations et libérer le potentiel de vos équipes.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div
                class="group glass rounded-2xl p-8 lg:p-10 hover:border-blue-500/30 transition-all duration-500 glow-border">
                <div
                    class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-500/20 to-blue-500/5 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="bot" class="w-8 h-8 text-blue-400"></i>
                </div>
                <h3 class="font-display text-2xl font-bold mb-4">Agents IA Intelligents</h3>
                <p class="text-slate-400 mb-6 leading-relaxed">
                    Déployez des assistants virtuels capables de comprendre, analyser et agir sur vos données en temps
                    réel. Nos agents IA s'intègrent parfaitement à vos outils existants.
                </p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-3 text-slate-300">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-blue-400 flex-shrink-0"></i>
                        <span>Réponses automatiques intelligentes</span>
                    </li>
                    <li class="flex items-center gap-3 text-slate-300">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-blue-400 flex-shrink-0"></i>
                        <span>Analyse prédictive des données</span>
                    </li>
                    <li class="flex items-center gap-3 text-slate-300">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-blue-400 flex-shrink-0"></i>
                        <span>Personnalisation contextuelle</span>
                    </li>
                </ul>
                <a href="#audit"
                    class="inline-flex items-center gap-2 text-blue-400 hover:text-blue-300 font-medium group/link">
                    <span>En savoir plus</span>
                    <i data-lucide="arrow-right"
                        class="w-4 h-4 group-hover/link:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div
                class="group glass rounded-2xl p-8 lg:p-10 hover:border-violet-500/30 transition-all duration-500 glow-border">
                <div
                    class="w-16 h-16 rounded-2xl bg-gradient-to-br from-violet-500/20 to-violet-500/5 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="workflow" class="w-8 h-8 text-violet-400"></i>
                </div>
                <h3 class="font-display text-2xl font-bold mb-4">Automatisation des Processus</h3>
                <p class="text-slate-400 mb-6 leading-relaxed">
                    Éliminez les tâches répétitives et créez des workflows automatisés qui fonctionnent 24/7. Connectez
                    tous vos outils dans un écosystème fluide et efficace.
                </p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-3 text-slate-300">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-violet-400 flex-shrink-0"></i>
                        <span>Workflows no-code personnalisés</span>
                    </li>
                    <li class="flex items-center gap-3 text-slate-300">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-violet-400 flex-shrink-0"></i>
                        <span>Intégration multi-outils</span>
                    </li>
                    <li class="flex items-center gap-3 text-slate-300">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-violet-400 flex-shrink-0"></i>
                        <span>Reporting automatisé</span>
                    </li>
                </ul>
                <a href="#audit"
                    class="inline-flex items-center gap-2 text-violet-400 hover:text-violet-300 font-medium group/link">
                    <span>En savoir plus</span>
                    <i data-lucide="arrow-right"
                        class="w-4 h-4 group-hover/link:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-24 px-4 sm:px-6 lg:px-8 bg-slate-900/50 border-y border-white/5" id="tabsSection">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span
                class="inline-block px-4 py-1.5 rounded-full text-sm font-medium bg-violet-500/10 text-violet-400 border border-violet-500/20 mb-4">
                Par Métier
            </span>
            <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
                Des solutions pour <span class="gradient-text">chaque métier</span>
            </h2>
            <p class="text-lg text-slate-400">
                Chaque département a ses défis uniques. Découvrez comment nos solutions s'adaptent à vos besoins
                spécifiques.
            </p>
        </div>

        <div class="flex justify-start md:justify-center overflow-x-auto pb-4 mb-12 scrollbar-hide -mx-4 px-4">
            <div class="inline-flex gap-2 p-1.5 rounded-full glass-light border border-white/10">
                <button data-tab="commercial"
                    class="tab-btn px-6 py-2.5 rounded-full font-medium text-sm transition-all whitespace-nowrap bg-gradient-to-r from-blue-500 to-violet-500 text-white">
                    <i data-lucide="briefcase" class="w-4 h-4 inline mr-2"></i>Commercial
                </button>
                <button data-tab="rh"
                    class="tab-btn px-6 py-2.5 rounded-full font-medium text-sm transition-all whitespace-nowrap text-slate-400 hover:text-white">
                    <i data-lucide="users" class="w-4 h-4 inline mr-2"></i>RH
                </button>
                <button data-tab="marketing"
                    class="tab-btn px-6 py-2.5 rounded-full font-medium text-sm transition-all whitespace-nowrap text-slate-400 hover:text-white">
                    <i data-lucide="megaphone" class="w-4 h-4 inline mr-2"></i>Marketing
                </button>
                <button data-tab="support"
                    class="tab-btn px-6 py-2.5 rounded-full font-medium text-sm transition-all whitespace-nowrap text-slate-400 hover:text-white">
                    <i data-lucide="headphones" class="w-4 h-4 inline mr-2"></i>Support
                </button>
                <button data-tab="ops"
                    class="tab-btn px-6 py-2.5 rounded-full font-medium text-sm transition-all whitespace-nowrap text-slate-400 hover:text-white">
                    <i data-lucide="settings" class="w-4 h-4 inline mr-2"></i>Ops
                </button>
            </div>
        </div>

        <div class="glass rounded-2xl p-8 lg:p-12">
            <div id="tab-commercial" class="tab-content grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="font-display text-2xl lg:text-3xl font-bold mb-4">Boostez vos ventes avec l'IA</h3>
                    <p class="text-slate-400 mb-6 leading-relaxed">
                        Automatisez la prospection, le suivi des leads et la qualification commerciale. Vos commerciaux
                        se concentrent sur ce qui compte : conclure des deals.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-blue-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i data-lucide="check" class="w-4 h-4 text-blue-400"></i>
                            </div>
                            <span class="text-slate-300">Scoring automatique des leads par IA</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-blue-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i data-lucide="check" class="w-4 h-4 text-blue-400"></i>
                            </div>
                            <span class="text-slate-300">Relances automatisées personnalisées</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-blue-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i data-lucide="check" class="w-4 h-4 text-blue-400"></i>
                            </div>
                            <span class="text-slate-300">Synchronisation CRM temps réel</span>
                        </li>
                    </ul>
                    <div class="flex items-center gap-4 text-sm">
                        <div class="px-4 py-2 rounded-lg bg-green-500/10 border border-green-500/20">
                            <span class="text-green-400 font-semibold">+45%</span>
                            <span class="text-slate-400 ml-1">Taux de conversion</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="glass-light rounded-xl p-4 shadow-2xl border border-white/10">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-lg bg-blue-500/20 flex items-center justify-center">
                                    <i data-lucide="target" class="w-4 h-4 text-blue-400"></i>
                                </div>
                                <span class="text-sm font-medium">Pipeline Commercial</span>
                            </div>
                            <span class="text-xs text-green-400 flex items-center gap-1">
                                <span class="w-1.5 h-1.5 bg-green-400 rounded-full animate-pulse"></span>
                                Live
                            </span>
                        </div>
                        <div class="grid grid-cols-3 gap-3 mb-4">
                            <div class="bg-slate-800/50 rounded-lg p-3 text-center">
                                <div class="text-lg font-bold text-blue-400">847</div>
                                <div class="text-[10px] text-slate-400">Leads qualifiés</div>
                            </div>
                            <div class="bg-slate-800/50 rounded-lg p-3 text-center">
                                <div class="text-lg font-bold text-green-400">23%</div>
                                <div class="text-[10px] text-slate-400">Conversion</div>
                            </div>
                            <div class="bg-slate-800/50 rounded-lg p-3 text-center">
                                <div class="text-lg font-bold text-violet-400">€124k</div>
                                <div class="text-[10px] text-slate-400">Pipeline</div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center justify-between bg-slate-800/30 rounded-lg p-2.5">
                                <div class="flex items-center gap-2">
                                    <div
                                        class="w-7 h-7 rounded-full bg-gradient-to-br from-blue-500 to-violet-500 flex items-center justify-center text-[10px] font-bold">
                                        AC</div>
                                    <div>
                                        <div class="text-xs font-medium">Acme Corp</div>
                                        <div class="text-[10px] text-slate-500">Lead chaud • Score 92</div>
                                    </div>
                                </div>
                                <span
                                    class="text-[10px] px-2 py-1 bg-green-500/20 text-green-400 rounded-full">Qualifié</span>
                            </div>
                            <div class="flex items-center justify-between bg-slate-800/30 rounded-lg p-2.5">
                                <div class="flex items-center gap-2">
                                    <div
                                        class="w-7 h-7 rounded-full bg-gradient-to-br from-pink-500 to-orange-500 flex items-center justify-center text-[10px] font-bold">
                                        TI</div>
                                    <div>
                                        <div class="text-xs font-medium">TechInno</div>
                                        <div class="text-[10px] text-slate-500">Relance auto • Score 78</div>
                                    </div>
                                </div>
                                <span class="text-[10px] px-2 py-1 bg-blue-500/20 text-blue-400 rounded-full">En
                                    cours</span>
                            </div>
                            <div class="flex items-center justify-between bg-slate-800/30 rounded-lg p-2.5">
                                <div class="flex items-center gap-2">
                                    <div
                                        class="w-7 h-7 rounded-full bg-gradient-to-br from-cyan-500 to-blue-500 flex items-center justify-center text-[10px] font-bold">
                                        SB</div>
                                    <div>
                                        <div class="text-xs font-medium">StartupBoost</div>
                                        <div class="text-[10px] text-slate-500">Nouveau • Score 85</div>
                                    </div>
                                </div>
                                <span class="text-[10px] px-2 py-1 bg-yellow-500/20 text-yellow-400 rounded-full">À
                                    traiter</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tab-rh" class="tab-content grid lg:grid-cols-2 gap-12 items-center hidden">
                <div>
                    <h3 class="font-display text-2xl lg:text-3xl font-bold mb-4">Simplifiez la gestion RH</h3>
                    <p class="text-slate-400 mb-6 leading-relaxed">
                        De l'onboarding au suivi des congés, automatisez toutes les tâches administratives pour vous
                        concentrer sur l'humain.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-violet-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i data-lucide="check" class="w-4 h-4 text-violet-400"></i>
                            </div>
                            <span class="text-slate-300">Onboarding automatisé et personnalisé</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-violet-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i data-lucide="check" class="w-4 h-4 text-violet-400"></i>
                            </div>
                            <span class="text-slate-300">Gestion des congés et absences</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-violet-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i data-lucide="check" class="w-4 h-4 text-violet-400"></i>
                            </div>
                            <span class="text-slate-300">Tri intelligent des candidatures</span>
                        </li>
                    </ul>
                    <div class="flex items-center gap-4 text-sm">
                        <div class="px-4 py-2 rounded-lg bg-violet-500/10 border border-violet-500/20">
                            <span class="text-violet-400 font-semibold">-60%</span>
                            <span class="text-slate-400 ml-1">Temps administratif</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="glass-light rounded-xl p-4 shadow-2xl border border-white/10">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-lg bg-violet-500/20 flex items-center justify-center">
                                    <i data-lucide="users" class="w-4 h-4 text-violet-400"></i>
                                </div>
                                <span class="text-sm font-medium">Gestion RH</span>
                            </div>
                            <span class="text-xs text-slate-400">Cette semaine</span>
                        </div>
                        <div class="grid grid-cols-2 gap-3 mb-4">
                            <div class="bg-slate-800/50 rounded-lg p-3">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-[10px] text-slate-400">Onboardings</span>
                                    <span class="text-[10px] text-green-400">+3</span>
                                </div>
                                <div class="text-xl font-bold text-violet-400">12</div>
                                <div class="w-full bg-slate-700 rounded-full h-1 mt-2">
                                    <div class="bg-violet-500 h-1 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                            <div class="bg-slate-800/50 rounded-lg p-3">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-[10px] text-slate-400">Candidatures</span>
                                    <span class="text-[10px] text-green-400">Auto-triées</span>
                                </div>
                                <div class="text-xl font-bold text-blue-400">48</div>
                                <div class="w-full bg-slate-700 rounded-full h-1 mt-2">
                                    <div class="bg-blue-500 h-1 rounded-full" style="width: 60%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-slate-800/30 rounded-lg p-3 mb-3">
                            <div class="text-[10px] text-slate-400 mb-2">Onboarding en cours</div>
                            <div class="flex items-center gap-3">
                                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=40&h=40&fit=crop&crop=face"
                                    class="w-8 h-8 rounded-full">
                                <div class="flex-1">
                                    <div class="text-xs font-medium">Marie Dupont</div>
                                    <div class="flex items-center gap-2 mt-1">
                                        <div class="flex-1 bg-slate-700 rounded-full h-1.5">
                                            <div class="bg-gradient-to-r from-violet-500 to-pink-500 h-1.5 rounded-full"
                                                style="width: 65%"></div>
                                        </div>
                                        <span class="text-[10px] text-slate-400">65%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between bg-slate-800/30 rounded-lg p-2.5">
                            <div class="flex items-center gap-2">
                                <i data-lucide="calendar-check" class="w-4 h-4 text-green-400"></i>
                                <span class="text-xs">3 demandes de congés</span>
                            </div>
                            <span
                                class="text-[10px] px-2 py-1 bg-green-500/20 text-green-400 rounded-full">Auto-validées</span>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tab-marketing" class="tab-content grid lg:grid-cols-2 gap-12 items-center hidden">
                <div>
                    <h3 class="font-display text-2xl lg:text-3xl font-bold mb-4">Amplifiez votre impact marketing</h3>
                    <p class="text-slate-400 mb-6 leading-relaxed">
                        Automatisez vos campagnes, personnalisez vos messages à grande échelle et analysez vos
                        performances en temps réel.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-pink-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i data-lucide="check" class="w-4 h-4 text-pink-400"></i>
                            </div>
                            <span class="text-slate-300">Génération de contenu assistée par IA</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-pink-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i data-lucide="check" class="w-4 h-4 text-pink-400"></i>
                            </div>
                            <span class="text-slate-300">Campagnes email automatisées</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-pink-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i data-lucide="check" class="w-4 h-4 text-pink-400"></i>
                            </div>
                            <span class="text-slate-300">Analyse de sentiment social media</span>
                        </li>
                    </ul>
                    <div class="flex items-center gap-4 text-sm">
                        <div class="px-4 py-2 rounded-lg bg-pink-500/10 border border-pink-500/20">
                            <span class="text-pink-400 font-semibold">x3</span>
                            <span class="text-slate-400 ml-1">Contenu produit</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="glass-light rounded-xl p-4 shadow-2xl border border-white/10">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-lg bg-pink-500/20 flex items-center justify-center">
                                    <i data-lucide="sparkles" class="w-4 h-4 text-pink-400"></i>
                                </div>
                                <span class="text-sm font-medium">Contenu IA</span>
                            </div>
                            <span class="text-xs text-green-400">12 contenus générés</span>
                        </div>
                        <div class="bg-slate-800/50 rounded-lg p-3 mb-3">
                            <div class="flex items-center gap-2 mb-3">
                                <div class="w-6 h-6 rounded bg-pink-500/20 flex items-center justify-center">
                                    <i data-lucide="pen-tool" class="w-3 h-3 text-pink-400"></i>
                                </div>
                                <span class="text-xs font-medium">Génération en cours...</span>
                                <span
                                    class="ml-auto text-[10px] px-2 py-0.5 bg-pink-500/20 text-pink-400 rounded-full animate-pulse">IA</span>
                            </div>
                            <div class="text-[11px] text-slate-400 leading-relaxed">
                                "Découvrez comment l'automatisation peut transformer votre productivité..."
                            </div>
                            <div class="flex gap-2 mt-3">
                                <span class="text-[9px] px-2 py-1 bg-slate-700 rounded text-slate-300">LinkedIn</span>
                                <span class="text-[9px] px-2 py-1 bg-slate-700 rounded text-slate-300">Newsletter</span>
                                <span class="text-[9px] px-2 py-1 bg-slate-700 rounded text-slate-300">Blog</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-3">
                            <div class="bg-slate-800/30 rounded-lg p-2.5 text-center">
                                <div class="text-lg font-bold text-pink-400">2.4k</div>
                                <div class="text-[9px] text-slate-400">Emails envoyés</div>
                            </div>
                            <div class="bg-slate-800/30 rounded-lg p-2.5 text-center">
                                <div class="text-lg font-bold text-green-400">34%</div>
                                <div class="text-[9px] text-slate-400">Taux d'ouverture</div>
                            </div>
                        </div>
                        <div class="bg-slate-800/30 rounded-lg p-2.5">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <i data-lucide="message-circle" class="w-4 h-4 text-blue-400"></i>
                                    <span class="text-xs">Sentiment social</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <span class="text-[10px] text-green-400">89% positif</span>
                                    <i data-lucide="trending-up" class="w-3 h-3 text-green-400"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tab-support" class="tab-content grid lg:grid-cols-2 gap-12 items-center hidden">
                <div>
                    <h3 class="font-display text-2xl lg:text-3xl font-bold mb-4">Support client augmenté</h3>
                    <p class="text-slate-400 mb-6 leading-relaxed">
                        Offrez un support 24/7 avec des chatbots intelligents et des systèmes de ticketing automatisés
                        qui anticipent les besoins.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-cyan-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i data-lucide="check" class="w-4 h-4 text-cyan-400"></i>
                            </div>
                            <span class="text-slate-300">Chatbot IA multilingue 24/7</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-cyan-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i data-lucide="check" class="w-4 h-4 text-cyan-400"></i>
                            </div>
                            <span class="text-slate-300">Routage intelligent des tickets</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-cyan-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i data-lucide="check" class="w-4 h-4 text-cyan-400"></i>
                            </div>
                            <span class="text-slate-300">Base de connaissances auto-enrichie</span>
                        </li>
                    </ul>
                    <div class="flex items-center gap-4 text-sm">
                        <div class="px-4 py-2 rounded-lg bg-cyan-500/10 border border-cyan-500/20">
                            <span class="text-cyan-400 font-semibold">-70%</span>
                            <span class="text-slate-400 ml-1">Temps de réponse</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="glass-light rounded-xl p-4 shadow-2xl border border-white/10">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-lg bg-cyan-500/20 flex items-center justify-center">
                                    <i data-lucide="headphones" class="w-4 h-4 text-cyan-400"></i>
                                </div>
                                <span class="text-sm font-medium">Support Client</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                                <span class="text-xs text-green-400">Agent IA actif</span>
                            </div>
                        </div>
                        <div class="bg-slate-800/50 rounded-lg p-3 mb-3">
                            <div class="space-y-2">
                                <div class="flex gap-2">
                                    <div
                                        class="w-6 h-6 rounded-full bg-slate-600 flex items-center justify-center text-[9px]">
                                        JD</div>
                                    <div
                                        class="bg-slate-700/50 rounded-lg rounded-tl-none p-2 text-[11px] text-slate-300 max-w-[80%]">
                                        Comment puis-je réinitialiser mon mot de passe ?
                                    </div>
                                </div>
                                <div class="flex gap-2 justify-end">
                                    <div
                                        class="bg-cyan-500/20 rounded-lg rounded-tr-none p-2 text-[11px] text-slate-200 max-w-[80%]">
                                        Je peux vous aider ! Cliquez sur "Mot de passe oublié" sur la page de connexion.
                                        🔐
                                    </div>
                                    <div
                                        class="w-6 h-6 rounded-full bg-gradient-to-br from-cyan-500 to-blue-500 flex items-center justify-center">
                                        <i data-lucide="bot" class="w-3 h-3 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-1 mt-2 text-[9px] text-slate-500">
                                <i data-lucide="zap" class="w-3 h-3"></i>
                                Répondu en 0.8s
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-2 mb-3">
                            <div class="bg-slate-800/30 rounded-lg p-2 text-center">
                                <div class="text-sm font-bold text-cyan-400">156</div>
                                <div class="text-[9px] text-slate-400">Tickets/jour</div>
                            </div>
                            <div class="bg-slate-800/30 rounded-lg p-2 text-center">
                                <div class="text-sm font-bold text-green-400">94%</div>
                                <div class="text-[9px] text-slate-400">Auto-résolus</div>
                            </div>
                            <div class="bg-slate-800/30 rounded-lg p-2 text-center">
                                <div class="text-sm font-bold text-yellow-400">4.8</div>
                                <div class="text-[9px] text-slate-400">Satisfaction</div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between bg-slate-800/30 rounded-lg p-2">
                            <span class="text-[10px] text-slate-400">File d'attente</span>
                            <span class="text-xs font-medium text-green-400">0 en attente</span>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tab-ops" class="tab-content grid lg:grid-cols-2 gap-12 items-center hidden">
                <div>
                    <h3 class="font-display text-2xl lg:text-3xl font-bold mb-4">Opérations sans friction</h3>
                    <p class="text-slate-400 mb-6 leading-relaxed">
                        Connectez tous vos outils, automatisez les flux de données et créez des tableaux de bord en
                        temps réel pour piloter votre activité.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-amber-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i data-lucide="check" class="w-4 h-4 text-amber-400"></i>
                            </div>
                            <span class="text-slate-300">Intégration de +500 applications</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-amber-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i data-lucide="check" class="w-4 h-4 text-amber-400"></i>
                            </div>
                            <span class="text-slate-300">Alertes et notifications intelligentes</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-amber-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i data-lucide="check" class="w-4 h-4 text-amber-400"></i>
                            </div>
                            <span class="text-slate-300">Dashboards temps réel automatisés</span>
                        </li>
                    </ul>
                    <div class="flex items-center gap-4 text-sm">
                        <div class="px-4 py-2 rounded-lg bg-amber-500/10 border border-amber-500/20">
                            <span class="text-amber-400 font-semibold">99.9%</span>
                            <span class="text-slate-400 ml-1">Disponibilité</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="glass-light rounded-xl p-4 shadow-2xl border border-white/10">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-lg bg-amber-500/20 flex items-center justify-center">
                                    <i data-lucide="activity" class="w-4 h-4 text-amber-400"></i>
                                </div>
                                <span class="text-sm font-medium">Ops Center</span>
                            </div>
                            <span class="text-[10px] px-2 py-1 bg-green-500/20 text-green-400 rounded-full">Tous
                                systèmes OK</span>
                        </div>
                        <div class="flex items-center gap-2 mb-4 overflow-hidden">
                            <div class="flex -space-x-2">
                                <div
                                    class="w-8 h-8 rounded-lg bg-[#00A4EF] flex items-center justify-center text-[10px] font-bold border-2 border-slate-800">
                                    SF</div>
                                <div
                                    class="w-8 h-8 rounded-lg bg-[#4A154B] flex items-center justify-center text-[10px] font-bold border-2 border-slate-800">
                                    Sl</div>
                                <div
                                    class="w-8 h-8 rounded-lg bg-[#0052CC] flex items-center justify-center text-[10px] font-bold border-2 border-slate-800">
                                    Jr</div>
                                <div
                                    class="w-8 h-8 rounded-lg bg-[#34A853] flex items-center justify-center text-[10px] font-bold border-2 border-slate-800">
                                    GS</div>
                                <div
                                    class="w-8 h-8 rounded-lg bg-slate-600 flex items-center justify-center text-[10px] border-2 border-slate-800">
                                    +8</div>
                            </div>
                            <span class="text-[10px] text-slate-400">12 apps connectées</span>
                        </div>
                        <div class="space-y-2 mb-4">
                            <div class="flex items-center justify-between bg-slate-800/30 rounded-lg p-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                                    <span class="text-[11px]">Sync CRM → Sheets</span>
                                </div>
                                <span class="text-[9px] text-slate-500">il y a 2min</span>
                            </div>
                            <div class="flex items-center justify-between bg-slate-800/30 rounded-lg p-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                                    <span class="text-[11px]">Rapport quotidien</span>
                                </div>
                                <span class="text-[9px] text-slate-500">il y a 1h</span>
                            </div>
                            <div class="flex items-center justify-between bg-slate-800/30 rounded-lg p-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 bg-amber-400 rounded-full animate-pulse"></span>
                                    <span class="text-[11px]">Backup données</span>
                                </div>
                                <span class="text-[9px] text-amber-400">En cours...</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-2">
                            <div class="bg-slate-800/50 rounded p-2 text-center">
                                <div class="text-sm font-bold text-amber-400">847</div>
                                <div class="text-[8px] text-slate-500">Exécutions/j</div>
                            </div>
                            <div class="bg-slate-800/50 rounded p-2 text-center">
                                <div class="text-sm font-bold text-green-400">99.9%</div>
                                <div class="text-[8px] text-slate-500">Uptime</div>
                            </div>
                            <div class="bg-slate-800/50 rounded p-2 text-center">
                                <div class="text-sm font-bold text-blue-400">0</div>
                                <div class="text-[8px] text-slate-500">Erreurs</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="methode" class="py-24 px-4 sm:px-6 lg:px-8 relative">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span
                class="inline-block px-4 py-1.5 rounded-full text-sm font-medium bg-blue-500/10 text-blue-400 border border-blue-500/20 mb-4">
                Notre Méthode
            </span>
            <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
                Un processus <span class="gradient-text">éprouvé</span>
            </h2>
            <p class="text-lg text-slate-400">
                En 4 étapes, nous transformons vos défis opérationnels en avantages compétitifs durables.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="relative group">
                <div class="glass rounded-2xl p-6 h-full hover:border-blue-500/30 transition-all duration-300">
                    <div
                        class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center mb-4 font-display text-xl font-bold">
                        01
                    </div>
                    <h3 class="font-display text-xl font-bold mb-3">Audit</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Analyse approfondie de vos processus actuels et identification des opportunités d'automatisation
                        à fort impact.
                    </p>
                </div>
                <div
                    class="hidden lg:block absolute top-1/2 -right-4 w-8 h-0.5 bg-gradient-to-r from-blue-500/50 to-transparent">
                </div>
            </div>

            <div class="relative group">
                <div class="glass rounded-2xl p-6 h-full hover:border-violet-500/30 transition-all duration-300">
                    <div
                        class="w-12 h-12 rounded-xl bg-gradient-to-br from-violet-500 to-violet-600 flex items-center justify-center mb-4 font-display text-xl font-bold">
                        02
                    </div>
                    <h3 class="font-display text-xl font-bold mb-3">Stratégie</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Conception d'une roadmap personnalisée avec des objectifs mesurables et un ROI projeté clair.
                    </p>
                </div>
                <div
                    class="hidden lg:block absolute top-1/2 -right-4 w-8 h-0.5 bg-gradient-to-r from-violet-500/50 to-transparent">
                </div>
            </div>

            <div class="relative group">
                <div class="glass rounded-2xl p-6 h-full hover:border-pink-500/30 transition-all duration-300">
                    <div
                        class="w-12 h-12 rounded-xl bg-gradient-to-br from-pink-500 to-pink-600 flex items-center justify-center mb-4 font-display text-xl font-bold">
                        03
                    </div>
                    <h3 class="font-display text-xl font-bold mb-3">Intégration</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Déploiement rapide et itératif des solutions avec formation de vos équipes en conditions
                        réelles.
                    </p>
                </div>
                <div
                    class="hidden lg:block absolute top-1/2 -right-4 w-8 h-0.5 bg-gradient-to-r from-pink-500/50 to-transparent">
                </div>
            </div>

            <div class="relative group">
                <div class="glass rounded-2xl p-6 h-full hover:border-cyan-500/30 transition-all duration-300">
                    <div
                        class="w-12 h-12 rounded-xl bg-gradient-to-br from-cyan-500 to-cyan-600 flex items-center justify-center mb-4 font-display text-xl font-bold">
                        04
                    </div>
                    <h3 class="font-display text-xl font-bold mb-3">Support</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Accompagnement continu, optimisation des performances et évolution de vos automatisations.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="temoignages" class="py-24 px-4 sm:px-6 lg:px-8 bg-slate-900/50 border-y border-white/5">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span
                class="inline-block px-4 py-1.5 rounded-full text-sm font-medium bg-violet-500/10 text-violet-400 border border-violet-500/20 mb-4">
                Témoignages
            </span>
            <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
                Ce que disent <span class="gradient-text">nos clients</span>
            </h2>
            <p class="text-lg text-slate-400">
                Des résultats concrets pour des entreprises comme la vôtre.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="glass rounded-2xl p-8 hover:border-blue-500/20 transition-all duration-300">
                <div class="flex gap-1 mb-4">
                    <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-current"></i>
                </div>
                <blockquote class="text-slate-300 mb-6 leading-relaxed">
                    "Les équipes Sapiens ont transformé notre processus commercial. Nos équipes gagnent 3 heures par
                    jour grâce aux automatisations mises en place. Le ROI est incroyable."
                </blockquote>
                <div class="flex items-center gap-4">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=60&h=60&fit=crop&crop=face"
                        alt="Marc Dubois" class="w-12 h-12 rounded-full">
                    <div>
                        <div class="font-semibold">Marc D.</div>
                    </div>
                </div>
            </div>

            <div class="glass rounded-2xl p-8 hover:border-violet-500/20 transition-all duration-300">
                <div class="flex gap-1 mb-4">
                    <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-current"></i>
                </div>
                <blockquote class="text-slate-300 mb-6 leading-relaxed">
                    "L'agent IA déployé pour notre support client a réduit nos tickets de 60%. Nos clients sont plus
                    satisfaits et notre équipe peut se concentrer sur les cas complexes."
                </blockquote>
                <div class="flex items-center gap-4">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=60&h=60&fit=crop&crop=face"
                        alt="Sophie Martin" class="w-12 h-12 rounded-full">
                    <div>
                        <div class="font-semibold">Sophie Martin</div>
                    </div>
                </div>
            </div>

            <div class="glass rounded-2xl p-8 hover:border-pink-500/20 transition-all duration-300">
                <div class="flex gap-1 mb-4">
                    <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-current"></i>
                    <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-current"></i>
                </div>
                <blockquote class="text-slate-300 mb-6 leading-relaxed">
                    "De l'audit à la mise en production, tout a été fluide. L'équipe Sapiens comprend nos enjeux métier
                    et propose des solutions pragmatiques qui fonctionnent vraiment."
                </blockquote>
                <div class="flex items-center gap-4">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=60&h=60&fit=crop&crop=face"
                        alt="Thomas Bernard" class="w-12 h-12 rounded-full">
                    <div>
                        <div class="font-semibold">Thomas Bernard</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="faq" class="py-24 px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">
        <div class="text-center mb-16">
            <span
                class="inline-block px-4 py-1.5 rounded-full text-sm font-medium bg-blue-500/10 text-blue-400 border border-blue-500/20 mb-4">
                FAQ
            </span>
            <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
                Questions <span class="gradient-text">fréquentes</span>
            </h2>
        </div>

        <div class="space-y-4" id="faqContainer">
            <div class="glass rounded-xl overflow-hidden">
                <button
                    class="faq-btn w-full px-6 py-5 flex items-center justify-between text-left hover:bg-white/5 transition-colors"
                    data-faq="1">
                    <span class="font-semibold pr-4">Combien de temps faut-il pour déployer une solution ?</span>
                    <i data-lucide="chevron-down"
                        class="faq-icon w-5 h-5 text-slate-400 flex-shrink-0 transition-transform duration-300"></i>
                </button>
                <div class="accordion-content" id="faq-content-1">
                    <div class="px-6 py-5 text-slate-400 leading-relaxed">
                        La plupart de nos automatisations sont déployées en 48h à 2 semaines selon leur complexité. Nous
                        commençons toujours par une évaluation de votre potentiel IA qui nous permet d'établir un
                        planning précis avec des
                        jalons clairs.
                    </div>
                </div>
            </div>

            <div class="glass rounded-xl overflow-hidden">
                <button
                    class="faq-btn w-full px-6 py-5 flex items-center justify-between text-left hover:bg-white/5 transition-colors"
                    data-faq="2">
                    <span class="font-semibold pr-4">Faut-il des compétences techniques pour utiliser vos solutions
                        ?</span>
                    <i data-lucide="chevron-down"
                        class="faq-icon w-5 h-5 text-slate-400 flex-shrink-0 transition-transform duration-300"></i>
                </button>
                <div class="accordion-content" id="faq-content-2">
                    <div class="px-6 py-5 text-slate-400 leading-relaxed">
                        Pas du tout ! Nos solutions sont conçues pour être utilisées par des équipes métier sans
                        compétences techniques. Nous assurons également une formation complète de vos équipes lors du
                        déploiement.
                    </div>
                </div>
            </div>

            <div class="glass rounded-xl overflow-hidden">
                <button
                    class="faq-btn w-full px-6 py-5 flex items-center justify-between text-left hover:bg-white/5 transition-colors"
                    data-faq="3">
                    <span class="font-semibold pr-4">Comment calculez-vous le ROI de vos solutions ?</span>
                    <i data-lucide="chevron-down"
                        class="faq-icon w-5 h-5 text-slate-400 flex-shrink-0 transition-transform duration-300"></i>
                </button>
                <div class="accordion-content" id="faq-content-3">
                    <div class="px-6 py-5 text-slate-400 leading-relaxed">
                        Lors de l'audit initial, nous mesurons le temps passé sur les tâches à automatiser et calculons
                        les économies potentielles. En moyenne, nos clients constatent un ROI de 300% dans les 6
                        premiers mois.
                    </div>
                </div>
            </div>

            <div class="glass rounded-xl overflow-hidden">
                <button
                    class="faq-btn w-full px-6 py-5 flex items-center justify-between text-left hover:bg-white/5 transition-colors"
                    data-faq="4">
                    <span class="font-semibold pr-4">Quels outils pouvez-vous intégrer ?</span>
                    <i data-lucide="chevron-down"
                        class="faq-icon w-5 h-5 text-slate-400 flex-shrink-0 transition-transform duration-300"></i>
                </button>
                <div class="accordion-content" id="faq-content-4">
                    <div class="px-6 py-5 text-slate-400 leading-relaxed">
                        Nous intégrons plus de 500 applications : CRM (Salesforce, HubSpot), outils de productivité
                        (Slack, Teams, Notion), ERP, logiciels métier... Si votre outil dispose d'une API, nous pouvons
                        l'intégrer.
                    </div>
                </div>
            </div>

            <div class="glass rounded-xl overflow-hidden">
                <button
                    class="faq-btn w-full px-6 py-5 flex items-center justify-between text-left hover:bg-white/5 transition-colors"
                    data-faq="5">
                    <span class="font-semibold pr-4">Que comprend l'évaluation de potentiel IA ?</span>
                    <i data-lucide="chevron-down"
                        class="faq-icon w-5 h-5 text-slate-400 flex-shrink-0 transition-transform duration-300"></i>
                </button>
                <div class="accordion-content" id="faq-content-5">
                    <div class="px-6 py-5 text-slate-400 leading-relaxed">
                        Cette évaluation comprend : un entretien de découverte (30 min), une analyse de vos processus
                        actuels, l'identification de 3 opportunités d'automatisation prioritaires, et une estimation du
                        ROI potentiel. Sans engagement.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Schema.org FAQPage -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "Combien de temps faut-il pour déployer une solution ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "La plupart de nos automatisations sont déployées en 48h à 2 semaines selon leur complexité. Nous commençons toujours par une évaluation de votre potentiel IA qui nous permet d'établir un planning précis avec des jalons clairs."
                }
            },
            {
                "@type": "Question",
                "name": "Faut-il des compétences techniques pour utiliser vos solutions ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Pas du tout ! Nos solutions sont conçues pour être utilisées par des équipes métier sans compétences techniques. Nous assurons également une formation complète de vos équipes lors du déploiement."
                }
            },
            {
                "@type": "Question",
                "name": "Comment calculez-vous le ROI de vos solutions ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Lors de l'audit initial, nous mesurons le temps passé sur les tâches à automatiser et calculons les économies potentielles. En moyenne, nos clients constatent un ROI de 300% dans les 6 premiers mois."
                }
            },
            {
                "@type": "Question",
                "name": "Quels outils pouvez-vous intégrer ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Nous intégrons plus de 500 applications : CRM (Salesforce, HubSpot), outils de productivité (Slack, Teams, Notion), ERP, logiciels métier... Si votre outil dispose d'une API, nous pouvons l'intégrer."
                }
            },
            {
                "@type": "Question",
                "name": "Que comprend l'évaluation de potentiel IA ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Cette évaluation comprend : un entretien de découverte (30 min), une analyse de vos processus actuels, l'identification de 3 opportunités d'automatisation prioritaires, et une estimation du ROI potentiel. Sans engagement."
                }
            }
        ]
    }
    </script>
</section>

<section id="audit" class="py-24 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <div class="relative glass rounded-3xl p-8 md:p-12 lg:p-16 text-center overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-violet-500/10 to-pink-500/10"></div>

            <div class="relative z-10">
                <span
                    class="inline-block px-4 py-1.5 rounded-full text-sm font-medium bg-white/10 text-white border border-white/20 mb-6">
                    100% Gratuit • Sans engagement
                </span>
                <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
                    Prêt à transformer <span class="gradient-text">votre entreprise</span> ?
                </h2>
                <p class="text-lg text-slate-300 mb-8 max-w-2xl mx-auto">
                    Évaluez votre potentiel IA en 30 minutes et découvrez comment l'automatisation peut
                    révolutionner vos opérations.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#audit"
                        class="js-audit-trigger group px-8 py-4 bg-gradient-to-r from-blue-500 to-violet-500 rounded-full font-semibold text-lg hover:shadow-lg hover:shadow-blue-500/25 transition-all hover:scale-105 flex items-center justify-center gap-2">
                        <i data-lucide="calendar" class="w-5 h-5"></i>
                        <span>Évaluer mon potentiel IA</span>
                        <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
                <p class="text-sm text-slate-500 mt-6">
                    <i data-lucide="shield-check" class="w-4 h-4 inline mr-1"></i>
                    Vos données sont sécurisées et ne seront jamais partagées.
                </p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>