<div x-data="{ open: true }" class="relative">
    {{-- SIDEBAR DESKTOP (PC) --}}
    <div 
        class="fixed z-50 transition-all duration-500 left-0 top-1/2 -translate-y-1/2 flex-col gap-3 p-3 bg-brand-black shadow-[5px_0_30px_rgba(0,0,0,0.5)] rounded-r-2xl border-y border-r border-white/10 hidden xl:flex"
        :class="open ? 'w-20 translate-x-0' : 'w-20 -translate-x-[75%]'"
        id="awards-sidebar"
    >
        {{-- Botão para Recolher/Expandir --}}
        <button 
            @click="open = !open" 
            class="absolute -right-3 top-1/2 -translate-y-1/2 w-7 h-12 bg-brand-black border border-white/10 border-l-0 rounded-r-lg flex items-center justify-center text-brand-gold hover:text-white transition-colors cursor-pointer shadow-lg"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-transform duration-500" :class="!open || 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <div class="text-center mb-1 transition-opacity duration-300" :class="open ? 'opacity-100' : 'opacity-0 pointer-events-none'">
            <span class="text-[10px] font-bold uppercase tracking-widest text-brand-gold block italic">Awards</span>
            <div class="h-px w-8 bg-brand-gold/50 mx-auto mt-1 rounded-full"></div>
        </div>

        <div class="flex flex-col gap-5 items-center max-h-[70vh] overflow-y-auto scrollbar-hide py-2 transition-opacity duration-300" :class="open ? 'opacity-100' : 'opacity-0 pointer-events-none'">
            @php
                // [Alterado] Adicionados 'diamond.png' e 'titan.png' no topo para destaque
                $awards = [
                    'titan.png',
                    'diamond.png',
                    '1-1.png', 
                    '2-1.png', 
                    '3-1.png', 
                    '4-1.png', 
                    '5-1.png', 
                    '6.png', 
                    '7.png', 
                    '8.png'
                ];
            @endphp

            @foreach($awards as $image)
                <div class="flex justify-center w-full">
                    <img src="{{ asset('img/awards/' . $image) }}" 
                         alt="Award Recognition" 
                         class="w-12 h-auto object-contain brightness-110 hover:scale-125 transition-all duration-500 cursor-pointer">
                </div>
            @endforeach
        </div>
    </div>

    {{-- BARRA MOBILE --}}
    <div class="fixed bottom-0 left-0 w-full z-40 xl:hidden bg-brand-black border-t border-brand-gold/20">
        <div class="relative flex items-center h-16">
            {{-- Label Fixa --}}
            <div class="flex-none bg-brand-black px-4 h-full flex items-center z-20 border-r border-white/10 shadow-[10px_0_15px_rgba(0,0,0,0.5)]">
                <span class="text-[10px] font-black uppercase tracking-wider text-brand-gold italic">Awards</span>
            </div>

            {{-- Slider de Logos --}}
            <div class="flex-grow overflow-x-auto scrollbar-hide snap-x flex items-center gap-8 px-6">
                @foreach($awards as $image)
                    <div class="flex-none snap-center">
                        <img src="{{ asset('img/awards/' . $image) }}" 
                             alt="Award" 
                             class="h-9 w-auto object-contain brightness-125 grayscale hover:grayscale-0 transition-all duration-300">
                    </div>
                @endforeach
                {{-- Espaçador final para o scroll não cortar --}}
                <div class="flex-none w-10"></div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Ocultar scrollbar mantendo funcionalidade */
    .scrollbar-hide::-webkit-scrollbar { display: none; }
    .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
    
    .snap-x {
        scroll-snap-type: x mandatory;
        scroll-behavior: smooth;
        -webkit-overflow-scrolling: touch;
    }
</style>