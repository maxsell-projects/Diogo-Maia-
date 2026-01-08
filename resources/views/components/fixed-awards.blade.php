<div class="fixed z-50 transition-all duration-300
            left-0 top-1/2 -translate-y-1/2 w-20 xl:flex hidden flex-col gap-3 p-3 bg-brand-black/95 backdrop-blur-md shadow-[5px_0_20px_rgba(0,0,0,0.3)] rounded-r-2xl border-y border-r border-white/10 group"
     id="awards-sidebar">
    
    <div class="text-center mb-1">
        <span class="text-[10px] font-bold uppercase tracking-widest text-brand-gold block">Awards</span>
        <div class="h-px w-8 bg-brand-gold/50 mx-auto mt-1 rounded-full"></div>
    </div>

    <div class="flex flex-col gap-5 items-center max-h-[80vh] overflow-y-auto scrollbar-hide py-2">
        @php
            $awards = ['1-1.png', '2-1.png', '3-1.png', '4-1.png', '5-1.png', '6.png', '7.png', '8.png'];
        @endphp

        @foreach($awards as $image)
            <div class="flex justify-center w-full">
                <img src="{{ asset('img/awards/' . $image) }}" 
                     alt="Award Recognition" 
                     class="w-14 h-auto object-contain opacity-90 hover:opacity-100 hover:scale-110 transition-all duration-500 cursor-pointer filter brightness-110"
                     onerror="this.parentElement.style.display='none'">
            </div>
        @endforeach
    </div>
</div>

<div class="fixed bottom-0 left-0 w-full z-40 xl:hidden bg-brand-black/98 border-t border-white/10 px-4 py-3 backdrop-blur-lg">
    <div class="flex items-center gap-6 overflow-x-auto scrollbar-hide">
        <div class="flex-none">
            <span class="text-[8px] font-bold uppercase tracking-tighter text-brand-gold border-r border-white/20 pr-3">Awards</span>
        </div>
        <div class="flex gap-8 items-center">
            @foreach($awards as $image)
                <img src="{{ asset('img/awards/' . $image) }}" 
                     alt="Award" 
                     class="h-8 w-auto object-contain flex-none"
                     onerror="this.style.display='none'">
            @endforeach
        </div>
    </div>
</div>

<style>
    /* Esconde barra de scroll mas permite navegar */
    .scrollbar-hide::-webkit-scrollbar { display: none; }
    .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
    
    /* Ajuste de brilho para garantir que o branco brilhe no fundo preto */
    .filter.brightness-110 { filter: brightness(1.1); }
</style>