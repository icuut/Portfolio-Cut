@extends('layouts.app')

@section('content')

    <!-- HERO SECTION -->
    <section class="bg-[#7A0016] text-white py-20 px-6 md:px-12 border-b-8 border-zinc-950 min-h-[70vh] flex items-center">
        <div class="container mx-auto flex flex-col-reverse md:flex-row items-center gap-12">
            
            <div class="md:w-3/5 flex flex-col items-start text-left">
                <span class="bg-white text-[#7A0016] font-black text-xs uppercase px-3 py-1 mb-4 tracking-widest rounded-none">Informatics Student • Researcher • Writer</span>
                
                <h1 class="text-4xl md:text-6xl font-black tracking-tight leading-none uppercase mb-4">
                    Cut Tarina <span class="text-zinc-950 underline decoration-white"></span>
                </h1>
                
                <p class="text-xl md:text-2xl font-bold text-gray-200 max-w-2xl mb-8 leading-tight">
                    {{ $profile['role'] }}. <br> Aktif dalam pengembangan teknologi, penelitian, penulisan ilmiah, dan kompetisi inovasi.
                </p>
                
                <a href="#projects" class="bg-white text-[#7A0016] hover:bg-zinc-950 hover:text-white font-black uppercase px-8 py-4 border-2 border-white tracking-wider transition duration-300 transform hover:scale-105">
                    Lihat Portofolio ↓
                </a>
            </div>

            <div class="md:w-2/5 flex justify-center md:justify-end">
                <div class="relative">
                    <div class="border-[12px] border-white shadow-[10px_10px_0px_0px_rgba(0,0,0,0.5)] overflow-hidden bg-zinc-800 aspect-square w-64 h-64 md:w-80 md:h-80">
                        <img 
                            src="{{ asset($profile['photo']) }}" 
                            alt="Foto {{ $profile['name'] }}" 
                            class="w-full h-full object-cover object-center"
                            style="object-position: center 80%;"
                        >
                    </div>
                    <div class="absolute -bottom-4 -left-4 w-12 h-12 bg-white border-4 border-zinc-950 z-[-1]"></div>
                </div>
            </div>

        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="py-20 px-6 md:px-12 bg-white grid md:grid-cols-3 gap-12 border-b border-gray-200">
        <div class="md:col-span-1">
            <h2 class="text-3xl font-black text-[#7A0016] uppercase tracking-tight border-l-8 border-[#7A0016] pl-4">Tentang Saya</h2>
        </div>
        <div class="md:col-span-2 space-y-4">
            <p class="text-lg text-gray-700 font-medium leading-relaxed">
                {{ $profile['about'] }}
            </p>
            <div class="pt-4 flex flex-wrap gap-2">
                <span class="bg-[#7A0016] text-white text-xs font-bold px-3 py-1.5 uppercase">Scientific Writing</span>
                <span class="bg-[#7A0016] text-white text-xs font-bold px-3 py-1.5 uppercase">Research</span>
                <span class="bg-[#7A0016] text-white text-xs font-bold px-3 py-1.5 uppercase">PHP</span>
                <span class="bg-[#7A0016] text-white text-xs font-bold px-3 py-1.5 uppercase">MySQL</span>
                <span class="bg-[#7A0016] text-white text-xs font-bold px-3 py-1.5 uppercase">Laravel</span>
                <span class="bg-zinc-900 text-white text-xs font-bold px-3 py-1.5 uppercase">Python Data Science</span>
            </div>
        </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section id="projects" class="py-20 px-6 md:px-12 bg-gray-50 border-b border-gray-200" 
         x-data='{ modalOpen: false, activeProject: null, projects: @json($projects) }'>
             
        <div class="mb-12">
            <h2 class="text-3xl font-black text-zinc-950 uppercase tracking-tight">Project & Research Portfolio</h2>
            <p class="text-gray-600 font-medium">Kumpulan proyek teknologi, penelitian, dan inovasi yang saya kembangkan selama perjalanan akademik.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach($projects as $index => $project)
                <div @click="activeProject = projects[{{ $index }}]; modalOpen = true" 
                     class="cursor-pointer bg-white border-2 border-zinc-950 p-6 shadow-[4px_4px_0px_0px_rgba(122,0,22,1)] flex flex-col justify-between hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition-all group">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-[#7A0016] block mb-2">{{ $project['category'] }}</span>
                        <h3 class="text-xl font-black text-zinc-950 mb-3 uppercase leading-tight group-hover:underline decoration-[#7A0016] decoration-4 underline-offset-4">{{ $project['title'] }}</h3>
                        <p class="text-sm text-gray-600 font-medium">{{ $project['desc'] }}</p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-gray-100 flex items-center justify-between text-xs font-bold text-[#7A0016] uppercase">
                        <span>Status: Selesai</span>
                        <span class="bg-zinc-950 text-white px-3 py-1 group-hover:bg-[#7A0016] transition">Lihat Detail ↗</span>
                    </div>
                </div>
            @endforeach
        </div>

        <div x-show="modalOpen" 
             style="display: none;" 
             class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-zinc-950/80 backdrop-blur-sm"
             x-transition.opacity>
             
            <div @click.outside="modalOpen = false" 
                 class="bg-white border-4 border-zinc-950 p-6 md:p-10 max-w-2xl w-full shadow-[8px_8px_0px_0px_rgba(122,0,22,1)] relative flex flex-col max-h-[90vh]">
                
                <button @click="modalOpen = false" class="absolute top-4 right-4 text-zinc-400 hover:text-[#7A0016] font-black text-2xl transition">
                    ✕
                </button>

                <div class="overflow-y-auto pr-2">
                    <span x-text="activeProject?.category" class="text-xs font-bold uppercase tracking-wider text-gray-500 block mb-2"></span>
                    <h3 x-text="activeProject?.title" class="text-3xl font-black text-zinc-950 mb-6 uppercase leading-tight"></h3>
                    
                    <div class="border-l-4 border-[#7A0016] pl-4 mb-8">
                        <p x-text="activeProject?.full_desc" class="text-gray-700 font-medium leading-relaxed"></p>
                    </div>
                </div>

                <div class="mt-auto pt-6 flex justify-end">
                    <a :href="activeProject?.link" target="_blank" 
                       class="bg-[#7A0016] text-white hover:bg-zinc-950 font-black uppercase px-6 py-3 border-2 border-transparent hover:border-zinc-950 tracking-wider transition duration-300 shadow-[4px_4px_0px_0px_rgba(24,24,27,1)] hover:shadow-none hover:translate-x-1 hover:translate-y-1">
                        Kunjungi Source Code ↗
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- ORGANIZATION SECTION -->
    <section id="org" class="py-20 px-6 md:px-12 bg-white border-b border-gray-200">
        <div class="mb-12">
            <h2 class="text-3xl font-black text-[#7A0016] uppercase tracking-tight border-r-8 border-[#7A0016] pr-4 text-right inline-block">Pengalaman Organisasi</h2>
        </div>

        <div class="max-w-4xl mx-auto space-y-8">
            @foreach($organizations as $org)
                <div class="border-l-4 border-zinc-950 pl-6 py-2 relative">
                    <div class="absolute w-3 h-3 bg-[#7A0016] rounded-none -left-[8px] top-4 border border-white"></div>
                    <span class="text-xs font-bold text-gray-500 block uppercase mb-1">{{ $org['period'] }}</span>
                    <h3 class="text-xl font-black text-zinc-950 uppercase">{{ $org['name'] }}</h3>
                    <h4 class="text-sm font-bold text-[#7A0016] mb-3 italic">{{ $org['role'] }}</h4>
                    <p class="text-sm text-gray-600 font-medium leading-relaxed">{{ $org['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </section>


    <!-- RESEARCH INTEREST-->
<!-- RESEARCH INTERESTS SECTION -->
<section id="research" class="py-20 px-6 md:px-12 bg-gray-50 border-b border-gray-200">
    <div class="mb-12">
        <h2 class="text-3xl font-black text-zinc-950 uppercase tracking-tight">
            Research Interests
        </h2>
        <p class="text-gray-600 font-medium">
            Bidang yang saat ini saya pelajari, teliti, dan ingin kembangkan lebih lanjut.
        </p>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white border-2 border-zinc-950 p-6 shadow-[4px_4px_0px_0px_rgba(122,0,22,1)]">
            <h3 class="font-black text-[#7A0016] uppercase">Disaster Technology</h3>
        </div>

        <div class="bg-white border-2 border-zinc-950 p-6 shadow-[4px_4px_0px_0px_rgba(122,0,22,1)]">
            <h3 class="font-black text-[#7A0016] uppercase">Data Analysis</h3>
        </div>

        <div class="bg-white border-2 border-zinc-950 p-6 shadow-[4px_4px_0px_0px_rgba(122,0,22,1)]">
            <h3 class="font-black text-[#7A0016] uppercase">Artificial Intelligence</h3>
        </div>

        <div class="bg-white border-2 border-zinc-950 p-6 shadow-[4px_4px_0px_0px_rgba(122,0,22,1)]">
            <h3 class="font-black text-[#7A0016] uppercase">Education Technology</h3>
        </div>

        <div class="bg-white border-2 border-zinc-950 p-6 shadow-[4px_4px_0px_0px_rgba(122,0,22,1)]">
            <h3 class="font-black text-[#7A0016] uppercase">Human-Centered Technology</h3>
        </div>

        <div class="bg-white border-2 border-zinc-950 p-6 shadow-[4px_4px_0px_0px_rgba(122,0,22,1)]">
            <h3 class="font-black text-[#7A0016] uppercase">Scientific Writing</h3>
        </div>
    </div>
</section>


<!-- QUOTE SECTION -->
<section class="py-24 px-6 md:px-12 bg-white border-b border-gray-200">
    <div class="max-w-4xl mx-auto text-center">
        <blockquote class="text-3xl md:text-5xl font-black text-zinc-950 leading-tight">
            "Learning, researching, and building technology to create solutions that matter."
        </blockquote>

        <div class="mt-8">
            <span class="text-[#7A0016] font-black uppercase tracking-widest">
                — Cut Tarina
            </span>
        </div>
    </div>
</section>


    <!-- CONTACT SECTION -->
    <section id="contact" class="py-20 px-6 md:px-12 bg-zinc-950 text-white text-center">
        <h2 class="text-4xl md:text-5xl font-black uppercase tracking-tight mb-4">Mari Berdiskusi dan Berkolaborasi</h2>
        <p class="text-gray-400 font-medium max-w-xl mx-auto mb-8">
        Terbuka untuk diskusi mengenai teknologi, penelitian, karya ilmiah, kompetisi inovasi, maupun peluang kolaborasi akademik.
        </p>
        
        <div class="mb-8">
            <a href="mailto:{{ $profile['email'] }}" class="bg-[#7A0016] hover:bg-white hover:text-[#7A0016] border border-[#7A0016] text-white text-lg font-black uppercase px-8 py-4 inline-block tracking-wider transition duration-300 shadow-[4px_4px_0px_0px_rgba(255,255,255,1)]">
                Kirim Email
            </a>
        </div>

        <div class="flex justify-center space-x-6 text-sm font-bold uppercase tracking-widest text-gray-400">
            @foreach($profile['socials'] as $name => $url)
                <a href="{{ $url }}" target="_blank" class="hover:text-white transition">{{ $name }}</a>
            @endforeach
        </div>
    </section>

@endsection