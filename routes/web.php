<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Data statis portofolio kamu
    $profile = [
        'name' => 'Cut Tarina',
        'role' => 'Mahasiswi Teknik Informatika',
        'photo' => 'profile.jpeg',
        'about' => 'Mahasiswi Teknik Informatika yang memiliki minat pada pengembangan teknologi, penelitian, analisis data, dan penulisan ilmiah. Saya percaya bahwa teknologi memiliki nilai ketika mampu memberikan solusi terhadap permasalahan nyata di masyarakat.',
        'email' => 'ctari455@gmail.com', // ganti dengan emailmu
        'socials' => [
            'Github' => 'https://github.com/icuut',
            'LinkedIn' => 'https://www.linkedin.com/in/cut-tarina-8246b834b/',
            'Instagram' => 'https://www.instagram.com/cut_trna/',
        ]
    ];

    $projects = [
        [
            'title' => 'Kost Finder',
            'category' => 'Web Application',
            'desc' => 'Platform pencarian dan pengelolaan informasi rumah dan kost.',
            'full_desc' => 'Aplikasi berbasis web yang membantu pengguna mencari rumah dan kost berdasarkan lokasi, harga, serta fasilitas yang tersedia. Sistem juga mendukung pengelolaan data properti oleh pemilik dan penyajian informasi yang mudah diakses oleh calon penyewa.',
            'link' => '----'
        ],

        [
            'title' => 'Students Performance Analysis',
            'category' => 'Data Analysis',
            'desc' => 'Analisis statistik dataset Students Performance in Exams.',
            'full_desc' => 'Proyek analisis data menggunakan Python untuk mengidentifikasi pola performa akademik siswa. Melibatkan statistik deskriptif, visualisasi data, dan interpretasi hasil untuk menghasilkan insight yang relevan terhadap faktor-faktor yang memengaruhi prestasi belajar.',
            'link' => '----'
        ],

        [
            'title' => 'PRISMA Talent Mapping',
            'category' => 'Organization Technology',
            'desc' => 'Sistem pemetaan minat dan potensi anggota organisasi.',
            'full_desc' => 'Proyek pengembangan sistem pemetaan minat, bakat, dan potensi anggota organisasi untuk mendukung pengembangan sumber daya manusia. Digunakan sebagai dasar pengelompokan minat serta perencanaan program pengembangan anggota.',
            'link' => '----'
        ],

        [
            'title' => 'Comparing Unimodal EEG and Multimodal Fusion of EMG-IMU Using Classic Machine Learning XGBoost Toward Practical Upper-Limb Exoskeleton Control',
            'category' => 'Journal Article',
            'desc' => 'Penelitian mengenai perbandingan performa EEG dan fusi multimodal EMG-IMU untuk deteksi niat gerakan pada kendali eksoskeleton lengan atas menggunakan algoritma XGBoost.',
            'full_desc' => 'Artikel penelitian internasional yang mengevaluasi efektivitas dua konfigurasi biosinyal, yaitu EEG unimodal dan fusi multimodal EMG-IMU, dalam mendeteksi niat gerakan pengguna untuk aplikasi kendali eksoskeleton rehabilitasi. Penelitian menggunakan dataset MUMID dan model klasifikasi XGBoost dengan protokol evaluasi yang terkontrol. Hasil menunjukkan bahwa kombinasi EMG-IMU memberikan performa yang lebih tinggi dan lebih stabil dibandingkan EEG saja untuk skenario kendali eksoskeleton yang praktis.', 
            'link' => 'https://www.jstage.jst.go.jp/article/ijabc/2026/2/2026_153/_article/-char/en'
        ],

        [
            'title' => 'Studi Literatur: Perkembangan Teknologi Firewall dan Strategi Pertahanan Jaringan pada Sistem Komputer',
            'category' => 'Journal Article',
            'desc' => 'Kajian literatur mengenai evolusi teknologi firewall modern dan strategi pertahanan jaringan dalam menghadapi ancaman siber kontemporer.',
            'full_desc' => 'Artikel ilmiah yang membahas perkembangan teknologi firewall dari generasi awal hingga Next-Generation Firewall (NGFW), termasuk implementasi firewall berbasis cloud dan integrasinya dengan strategi keamanan modern. Penelitian dilakukan melalui studi literatur terhadap publikasi ilmiah dan standar keamanan jaringan terkini untuk menganalisis efektivitas firewall dalam menghadapi ancaman seperti malware, ransomware, DDoS, serta penerapan pendekatan Defense in Depth dan Zero Trust Architecture.',
            'link' => 'https://journal.dcircle.org/index.php/jikum/article/view/154'
        ],

    
        
    ];

    $organizations = [
        [
            'name' => 'CREATIVE MINORITY',
            'role' => 'Divisi Penelitian',
            'period' => '2026 - Sekarang',
            'desc' => 'Berkontribusi dalam program kerja divisi khusunya pada penelitian dan menciptakan karya tulis ilmiah yang berkualitas.'
        ],
        [
            'name' => 'Himpunan Mahasiswa Informatika',
            'role' => 'Ketua Divisi Kesekretariatan',
            'period' => '2025-2026',
            'desc' => 'Memanajemen anggota dan memastikan seluruh alur informasi, pengarsipan, dan kebutuhan perlengkapan berjalan rapi.'
        ],

        [
            'name' => 'IMPS (Ikatan Mahasiswa Pematang Siantar Simalungun)',
            'role' => 'Anggota Kesekretariatan',
            'period' => '2025-2026',
            'desc' => 'Berpartisipasi membantu dalam pengarsipan surat dan program kerja'
        ]
    ];

    return view('portfolio', compact('profile', 'projects', 'organizations'));
});