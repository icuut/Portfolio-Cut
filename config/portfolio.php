<?php

return [
    'profile' => [
        'name' => 'Cut Tarina',
        'title' => 'Mahasiswi Teknik Informatika',
        'sub_title' => 'Researcher • Writer • Developer',
        'bio' => 'Mahasiswi Teknik Informatika yang memiliki minat mendalam pada pengembangan teknologi, penelitian, analisis data, dan penulisan ilmiah. Aktif mengembangkan solusi berbasis teknologi untuk menyelesaikan permasalahan nyata melalui pendekatan riset dan inovasi berbasis dampak sosial.',
        'avatar' => 'avatar.jpg', // Simpan di public/images/avatar.jpg
        'branding' => [
            'Technology Enthusiast',
            'Researcher',
            'Scientific Writer',
            'Future Web Developer',
            'Innovation Competitor'
        ],
        'stats' => [
            ['value' => '5+', 'label' => 'Proyek Teknologi'],
            ['value' => '3+', 'label' => 'Karya Tulis Ilmiah'],
            ['value' => '4+', 'label' => 'Kompetisi Nasional'],
            ['value' => '2+', 'label' => 'Pengalaman Organisasi']
        ]
    ],

    'education' => [
        [
            'year' => '2024 - Sekarang',
            'institution' => 'Universitas Malikussaleh',
            'degree' => 'Sarjana Komputer - Teknik Informatika',
            'description' => 'Fokus pada riset komputasi, pengembangan web modern, dan aktif dalam kegiatan penalaran mahasiswa serta kompetisi ilmiah.'
        ]
    ],

    'skills' => [
        'technical' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel', 'Python', 'MySQL', 'Git', 'Linux Ubuntu'],
        'research' => ['Literature Review', 'Academic Writing', 'Data Analysis', 'Statistics', 'Research Methodology'],
        'soft' => ['Leadership', 'Communication', 'Public Speaking', 'Teamwork', 'Project Management']
    ],

    'projects' => [
        [
            'title' => 'TOCUCE',
            'category' => 'Disaster Technology',
            'description' => 'Teknologi pencarian korban bencana berbasis proximity detection yang dirancang khusus untuk kondisi sedimen hidrometeorologi basah.',
            'tech' => ['IoT Sensors', 'Data Analysis', 'Proximity Protocol'],
            'link' => '#'
        ],
        [
            'title' => 'COW-ROUTE',
            'category' => 'Innovation Project',
            'description' => 'Pengembangan solusi teknologi berbasis riset strategis yang dipersiapkan khusus untuk kompetisi nasional GEMASTIK.',
            'tech' => ['Algorithm Design', 'Optimization', 'Python'],
            'link' => '#'
        ],
        [
            'title' => 'Statistical Analysis Project',
            'category' => 'Data Analysis',
            'description' => 'Analisis mendalam terhadap dataset Students Performance in Exams menggunakan Python dan pemodelan statistik untuk menemukan pola keberhasilan akademik.',
            'tech' => ['Python', 'Pandas', 'Matplotlib', 'Statistics'],
            'link' => '#'
        ],
        [
            'title' => 'Talent Mapping PRISMA',
            'category' => 'Organization Technology',
            'description' => 'Sistem pemetaan minat, bakat, dan potensi adaptif bagi seluruh anggota organisasi guna mengoptimalkan pembagian divisi kerja.',
            'tech' => ['Laravel', 'Tailwind CSS', 'Alpine.js'],
            'link' => '#'
        ],
        [
            'title' => 'Database Management System',
            'category' => 'Database Design',
            'description' => 'Perancangan arsitektur dan optimasi sistem database relasional untuk manajemen transaksi toko ritel skala menengah.',
            'tech' => ['MySQL', 'Database Normalization', 'SQL Tuning'],
            'link' => '#'
        ],
    ],

    'publications' => [
        [
            'title' => 'Bukan Sekadar Monyet Nakal: Analisis Sampah Makanan sebagai Pemicu Konflik Mahasiswa dan Monyet di Universitas Malikussaleh Lokasi Bukit Indah',
            'publisher' => 'Independent Academic Report / Campus Research Initiative',
            'year' => '2025',
            'tags' => ['Lingkungan', 'Satwa', 'Kampus'],
            'abstract' => 'Penelitian ini menganalisis tata kelola limbah organik domestik di area kampus yang memicu pergeseran perilaku ekologis satwa liar sekitar.'
        ]
    ],

    'competitions' => [
        ['year' => '2025', 'name' => 'GEMASTIK - Kategori Karya Tulis Ilmiah TIK', 'status' => 'Proposal & Prototype Stage'],
        ['year' => '2025', 'name' => 'Kompetisi Inovasi Teknologi Tepat Guna', 'status' => 'Finalist'],
        ['year' => '2026', 'name' => 'Program Kreativitas Mahasiswa (PKM-RE/KC)', 'status' => 'In Preparation']
    ],

    'organizations' => [
        [
            'name' => 'Creative Minority',
            'role' => 'Core Member / Researcher',
            'focus' => ['Riset Kolektif', 'Penulisan Kreatif-Ilmiah', 'Pengembangan Talenta Mahasiswa']
        ],
        [
            'name' => 'Authorship Program',
            'role' => 'Academic Coordinator',
            'focus' => ['Workshop Kepenulisan', 'Fasilitasi Seminar', 'Publikasi Ilmiah Mahasiswa']
        ]
    ],

    'interests' => [
        ['name' => 'Research', 'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'],
        ['name' => 'Technology', 'icon' => 'M9.75 3.104v1.244c0 .46.26.877.672 1.077l.56.274c.41.2.67.624.67 1.077v3.537c0 .46-.26.876-.67 1.077l-.56.274c-.41.2-.672.618-.672 1.077v1.244M14.25 3.104v1.244c0 .46-.26.877-.672 1.077l-.56.274c-.41.2-.67.624-.67 1.077v3.537c0 .46.26.876.67 1.077l.56.274c.41.2.672.618.672 1.077v1.244M3 12h18M3 15h18'],
        ['name' => 'Scientific Writing', 'icon' => 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z'],
        ['name' => 'Web Development', 'icon' => 'M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z'],
        ['name' => 'Data Analysis', 'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z'],
        ['name' => 'Illustration & Animation', 'icon' => 'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z'],
    ],

    'contact' => [
        'email' => 'cut.tarina@example.com',
        'github' => 'https://github.com',
        'linkedin' => 'https://linkedin.com',
        'instagram' => 'https://instagram.com'
    ],
    
    'quote' => 'Technology becomes meaningful when it helps solve real-world problems.'
];