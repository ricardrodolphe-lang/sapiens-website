<footer class="py-12 px-4 sm:px-6 lg:px-8 border-t border-white/5 relative z-10 bg-slate-950">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-4 gap-8 mb-12">
            <div class="md:col-span-2">
                <a href="/index.php" class="flex items-center gap-2 mb-4">
                    <img src="/assets/img/logoSapiens.svg" alt="Sapiens Logo" class="h-10">
                </a>
                <p class="text-slate-400 text-sm max-w-sm leading-relaxed">
                    Solutions d'IA et d'automatisation sur mesure pour les entreprises ambitieuses qui veulent gagner en
                    efficacité.
                </p>
            </div>

            <div>
                <h4 class="font-semibold mb-4">Navigation</h4>
                <ul class="space-y-2 text-sm text-slate-400">
                    <li><a href="/index.php#solutions" class="hover:text-white transition-colors">Solutions</a></li>
                    <li><a href="/index.php#methode" class="hover:text-white transition-colors">Notre méthode</a></li>
                    <li><a href="/index.php#temoignages" class="hover:text-white transition-colors">Témoignages</a></li>
                    <li><a href="/index.php#faq" class="hover:text-white transition-colors">FAQ</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold mb-4">Légal</h4>
                <ul class="space-y-2 text-sm text-slate-400">
                    <li><a href="mentions-legales.php" class="hover:text-white transition-colors">Mentions légales</a>
                    </li>
                    <li><a href="confidentialite.php" class="hover:text-white transition-colors">Politique de
                            confidentialité</a></li>
                    <li><a href="cgv.php" class="hover:text-white transition-colors">CGV</a></li>
                </ul>
            </div>
        </div>

        <div class="flex flex-col md:flex-row items-center justify-between pt-8 border-t border-white/5">
            <p class="text-sm text-slate-500 mb-4 md:mb-0">
                © <?php echo date("Y"); ?> BeSapiens. Tous droits réservés.
            </p>
            <div class="flex items-center gap-4">
                <a href="https://www.linkedin.com/company/besapiensai" target="_blank" rel="noopener noreferrer"
                    class="w-10 h-10 rounded-full glass-light flex items-center justify-center text-slate-400 hover:text-white hover:bg-white/10 transition-all">
                    <i data-lucide="linkedin" class="w-5 h-5"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
<div id="auditModal" class="fixed inset-0 z-[100] hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-slate-950/80 backdrop-blur-sm transition-opacity opacity-0" id="modalBackdrop"></div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-start justify-center p-4 text-center sm:items-center sm:p-0">

            <div class="relative transform rounded-2xl glass text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-6xl max-h-[90vh] overflow-y-auto md:overflow-y-hidden opacity-0 scale-95"
                id="modalPanel">
                <button type="button"
                    class="absolute right-4 top-4 z-10 p-2 rounded-full bg-white/10 hover:bg-white/20 text-slate-400 hover:text-white transition-colors"
                    id="closeModalBtn">
                    <i data-lucide="x" class="w-6 h-6"></i>
                </button>

                <div class="p-1 bg-white/5 w-full">
                    <script type="text/javascript" async src="https://static.zcal.co/embed/v1/embed.js"></script>
                    <div class="zcal-inline-widget" style="width: 100%; min-height: 580px;">
                        <a href="https://zcal.co/i/NYkWI4os">Appel découverte - Schedule a meeting</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/main.js"></script>
</body>

</html>