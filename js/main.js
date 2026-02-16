/* ============================================
   SAPIENS.AI - Main JavaScript
   ============================================ */

document.addEventListener('DOMContentLoaded', function() {
    
    // Initialize Lucide Icons (SEULE INITIALISATION REQUISE)
    lucide.createIcons();
    
    // ============================================
    // MOBILE MENU
    // ============================================
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');
    const mobileMenuLinks = document.querySelectorAll('.mobile-menu-link');
    
    function toggleMobileMenu() {
        const isOpen = !mobileMenu.classList.contains('hidden');
        if (isOpen) {
            closeMobileMenu();
        } else {
            openMobileMenu();
        }
    }
    
    function openMobileMenu() {
        mobileMenu.classList.remove('hidden');
        menuIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
        // lucide.createIcons() - Rétiré
    }
    
    function closeMobileMenu() {
        mobileMenu.classList.add('hidden');
        menuIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
        // lucide.createIcons() - Rétiré
    }
    
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', toggleMobileMenu);
    }
    
    mobileMenuLinks.forEach(link => {
        link.addEventListener('click', closeMobileMenu);
    });
    
    // Close mobile menu on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
            closeMobileMenu();
        }
    });
    
    // ============================================
    // TABS
    // ============================================
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    function switchTab(tabId) {
        // Update buttons
        tabBtns.forEach(btn => {
            const isActive = btn.getAttribute('data-tab') === tabId;
            if (isActive) {
                btn.classList.add('bg-gradient-to-r', 'from-blue-500', 'to-violet-500', 'text-white');
                btn.classList.remove('text-slate-400', 'hover:text-white');
            } else {
                btn.classList.remove('bg-gradient-to-r', 'from-blue-500', 'to-violet-500', 'text-white');
                btn.classList.add('text-slate-400', 'hover:text-white');
            }
        });
        
        // Update content
        tabContents.forEach(content => {
            if (content.id === 'tab-' + tabId) {
                content.classList.remove('hidden');
            } else {
                content.classList.add('hidden');
            }
        });
        
        // Re-initialize icons for new content (GARDÉ - car le contenu change dynamiquement)
        lucide.createIcons();
    }
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const tabId = btn.getAttribute('data-tab');
            switchTab(tabId);
        });
    });
    
    // ============================================
    // FAQ ACCORDION
    // ============================================
    const faqBtns = document.querySelectorAll('.faq-btn');
    let currentOpenFaq = null;
    
    function toggleFaq(faqId) {
        const content = document.getElementById('faq-content-' + faqId);
        const btn = document.querySelector(`[data-faq="${faqId}"]`);
        const icon = btn.querySelector('.faq-icon');
        
        // If clicking the same FAQ, close it
        if (currentOpenFaq === faqId) {
            content.classList.remove('open');
            icon.classList.remove('rotate-180');
            currentOpenFaq = null;
        } else {
            // Close all FAQs first
            document.querySelectorAll('.accordion-content').forEach(c => c.classList.remove('open'));
            document.querySelectorAll('.faq-icon').forEach(i => i.classList.remove('rotate-180'));
            
            // Open clicked FAQ
            content.classList.add('open');
            icon.classList.add('rotate-180');
            currentOpenFaq = faqId;
        }
    }
    
    faqBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const faqId = btn.getAttribute('data-faq');
            toggleFaq(faqId);
        });
    });
    
    // ============================================
    // SMOOTH SCROLL (for anchor links)
    // ============================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            
            // NOUVELLE LOGIQUE : Si l'élément a la classe js-audit-trigger, on ignore le scroll
            if (this.classList.contains('js-audit-trigger')) {
                return; // Sort de la fonction, l'ouverture de la modale gère le preventDefault()
            }
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                e.preventDefault();
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // ============================================
    // NAVBAR SCROLL EFFECT (optional enhancement)
    // ============================================
    const navbar = document.getElementById('navbar');
    let lastScrollY = window.scrollY;
    
    window.addEventListener('scroll', () => {
        const currentScrollY = window.scrollY;
        
        // Add/remove shadow based on scroll position
        if (currentScrollY > 50) {
            navbar.classList.add('shadow-lg');
        } else {
            navbar.classList.remove('shadow-lg');
        }
        
        lastScrollY = currentScrollY;
    });
    
    // ============================================
    // MODAL AUDIT (Popin Calendrier)
    // ============================================
    const modal = document.getElementById('auditModal');
    const modalBackdrop = document.getElementById('modalBackdrop');
    const modalPanel = document.getElementById('modalPanel');
    const closeBtn = document.getElementById('closeModalBtn');
    
    // Sélectionne tous les boutons avec la classe 'js-audit-trigger'
    const auditButtons = document.querySelectorAll('.js-audit-trigger');

    function openModal(e) {
        if(e) e.preventDefault(); // Empêche le scroll par défaut pour les liens
        
        modal.classList.remove('hidden');
        
        // Petite animation d'entrée
        setTimeout(() => {
            modalBackdrop.classList.remove('opacity-0');
            modalPanel.classList.remove('opacity-0', 'scale-95');
            modalPanel.classList.add('opacity-100', 'scale-100');
        }, 10);
    }

    function closeModal() {
        // Animation de sortie
        modalBackdrop.classList.add('opacity-0');
        modalPanel.classList.remove('opacity-100', 'scale-100');
        modalPanel.classList.add('opacity-0', 'scale-95');
        
        // Cacher complètement après l'animation (300ms)
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }

    // Attacher l'événement clic à tous les boutons "Audit"
    auditButtons.forEach(btn => {
        btn.addEventListener('click', openModal);
    });

    // Fermer avec le bouton croix
    if (closeBtn) {
        closeBtn.addEventListener('click', closeModal);
    }

    // Fermer en cliquant en dehors de la modale (sur le fond sombre)
    if (modal) {
        modal.addEventListener('click', (e) => {
            if (e.target === modalBackdrop || e.target.closest('#modalBackdrop')) {
                closeModal();
            }
        });
    }

    // Fermer avec la touche Echap
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
            closeModal();
        }
    }); 
});