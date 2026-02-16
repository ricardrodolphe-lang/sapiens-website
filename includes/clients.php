<?php
// ==========================================
// CONFIGURATION DES CLIENTS
// ==========================================
$clients = [
    [ "nom" => "Commencal",       "logo" => "assets/img/clients/commencal.png" ],
    [ "nom" => "Homère",          "logo" => "assets/img/clients/homere.png" ],
    [ "nom" => "Enamoura",        "logo" => "assets/img/clients/enamoura.png" ],
    [ "nom" => "Bascule Digital", "logo" => "assets/img/clients/bascule-digital.png" ],
    [ "nom" => "BHV",             "logo" => "assets/img/clients/bhv.png" ],
];

// On augmente les répétitions pour être sûr d'avoir une longueur infinie (surtout sur mobile)
$repetitions = 4; 
?>

<section class="py-16 border-y border-white/5 bg-slate-900/50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-sm text-slate-500 mb-12 uppercase tracking-wider">Ils nous font confiance</p>
        
        <div class="marquee-mask relative w-full overflow-hidden">
            <div class="flex w-max animate-marquee-mobile md:animate-marquee-desktop transform-gpu hover:paused">
                
                <?php for ($i = 0; $i < $repetitions; $i++): ?>
                    <div class="flex items-center gap-12 md:gap-24 pr-12 md:pr-24 shrink-0">
                        <?php foreach ($clients as $client): ?>
                            <img src="<?php echo $client['logo']; ?>" 
                                 alt="<?php echo $client['nom']; ?>" 
                                 class="logo-client hover:opacity-100 transition-opacity duration-300 block">
                        <?php endforeach; ?>
                    </div>
                <?php endfor; ?>

            </div>
        </div>
    </div>
</section>