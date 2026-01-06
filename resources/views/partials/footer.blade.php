<footer class="bg-[#011B39] text-white pt-16 pb-8">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
            
            <div class="flex flex-col items-start">
                <a href="{{ route('home') }}" class="block w-48 mb-6 transition-opacity hover:opacity-80">
                    {{-- Usando a mesma classe de brilho/inversão do header para garantir que fique branco --}}
                    <img src="{{ asset('img/Ativo 1.png') }}" 
                         alt="Diogo Maia" 
                         class="w-full h-auto brightness-0 invert">
                </a>
                <p class="text-gray-400 text-sm leading-relaxed max-w-xs">
                    Consultoria imobiliária de excelência, focada em encontrar as melhores oportunidades de investimento e moradia.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-bold uppercase tracking-widest mb-6 text-brand-gold">Links Úteis</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition-colors text-sm uppercase tracking-wider flex items-center gap-2 group">
                            <span class="w-1.5 h-1.5 bg-brand-gold rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('portfolio') }}" class="text-gray-300 hover:text-white transition-colors text-sm uppercase tracking-wider flex items-center gap-2 group">
                            <span class="w-1.5 h-1.5 bg-brand-gold rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                            Imóveis
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="text-gray-300 hover:text-white transition-colors text-sm uppercase tracking-wider flex items-center gap-2 group">
                            <span class="w-1.5 h-1.5 bg-brand-gold rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                            Sobre
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}" class="text-gray-300 hover:text-white transition-colors text-sm uppercase tracking-wider flex items-center gap-2 group">
                            <span class="w-1.5 h-1.5 bg-brand-gold rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="text-gray-300 hover:text-white transition-colors text-sm uppercase tracking-wider flex items-center gap-2 group">
                            <span class="w-1.5 h-1.5 bg-brand-gold rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                            Contacto
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-bold uppercase tracking-widest mb-6 text-brand-gold">Redes Sociais</h3>
                <div class="flex gap-4 mb-8">
                    <a href="#" target="_blank" class="w-10 h-10 border border-white/20 rounded-full flex items-center justify-center hover:bg-white hover:text-[#011B39] transition-all duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="#" target="_blank" class="w-10 h-10 border border-white/20 rounded-full flex items-center justify-center hover:bg-white hover:text-[#011B39] transition-all duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-gray-500">
            <p>&copy; {{ date('Y') }} Diogo Maia. Todos os direitos reservados.</p>
            <p class="mt-2 md:mt-0">Desenvolvido com <span class="text-red-500">❤</span> por MaxSell</p>
        </div>
    </div>
</footer>