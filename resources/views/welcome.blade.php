<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChrisHR - Enterprise HRIS System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #0f172a;
            color: #f8fafc;
        }
        .hero-glow {
            background: radial-gradient(circle at 50% 50%, rgba(56, 189, 248, 0.15) 0%, rgba(15, 23, 42, 0) 50%);
        }
        .glass-card {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .gradient-text {
            background: linear-gradient(to right, #38bdf8, #818cf8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="antialiased overflow-x-hidden">

    <!-- Navigation -->
    <nav class="absolute w-full z-10 border-b border-white/10 glass-card">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex-shrink-0 flex items-center">
                    <span class="text-3xl font-extrabold text-white tracking-tight">Chris<span class="text-sky-400">HR</span></span>
                </div>
                <div>
                    <a href="/admin" class="inline-flex items-center px-6 py-2.5 border border-sky-400/50 text-sm font-semibold rounded-full text-sky-400 hover:bg-sky-400 hover:text-slate-900 shadow-[0_0_15px_rgba(56,189,248,0.3)] hover:shadow-[0_0_25px_rgba(56,189,248,0.6)] transition-all duration-300">
                        Login to Portal &rarr;
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative pt-32 pb-20 sm:pt-40 sm:pb-24 overflow-hidden hero-glow">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center rounded-full px-4 py-1 text-sm font-medium text-sky-300 ring-1 ring-sky-400/30 mb-8 bg-sky-400/10 backdrop-blur-sm">
                <span class="flex h-2 w-2 rounded-full bg-sky-400 mr-2 animate-pulse"></span>
                Sistem HRIS & Payroll Masa Depan
            </div>
            
            <h1 class="text-5xl font-extrabold tracking-tight sm:text-7xl mb-8 leading-tight">
                Kelola Karyawanmu dengan <br/>
                <span class="gradient-text">Logika Enterprise.</span>
            </h1>
            
            <p class="mt-4 max-w-3xl text-xl text-slate-400 mx-auto mb-12">
                Bukan sekadar buku catatan, ChrisHR adalah Sistem Informasi Sumber Daya Manusia (HRIS) berskala korporat yang mengotomatisasi struktur organisasi, alur persetujuan cuti, dan kalkulasi penggajian.
            </p>
            
            <div class="flex justify-center gap-6">
                <a href="/admin" class="px-8 py-4 border border-transparent text-lg font-bold rounded-xl text-slate-900 bg-sky-400 hover:bg-sky-300 shadow-[0_0_30px_rgba(56,189,248,0.5)] transition-all hover:scale-105 duration-300">
                    Masuk ke Admin Dashboard
                </a>
            </div>

            <!-- Mockup Image Preview -->
            <div class="mt-20 relative mx-auto max-w-5xl">
                <div class="absolute -inset-1 rounded-xl bg-gradient-to-r from-sky-400 to-indigo-500 opacity-30 blur-lg"></div>
                <div class="relative rounded-xl border border-white/10 glass-card p-2 shadow-2xl">
                    <div class="rounded-lg bg-slate-900 flex items-center justify-center py-20 px-4 border border-white/5">
                        <div class="text-center">
                            <svg class="w-16 h-16 text-sky-400 mx-auto mb-4 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <p class="text-lg font-bold text-slate-300">Secure Admin Portal Area</p>
                            <p class="text-sm text-slate-500 mt-2">Login required to view real-time analytic dashboard and sensitive employee records.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Education Section (What is HRIS?) -->
    <div class="py-24 bg-slate-900/50 border-y border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-white tracking-wide uppercase">Bagaimana Sistem Ini Bekerja?</h2>
                <p class="mt-4 text-slate-400 max-w-2xl mx-auto">Sistem ini memecahkan masalah pencatatan manual berbasis Excel yang rawan hilang dan sulit dilacak. Semuanya terpusat dalam satu database.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
                <!-- Connectors (Desktop only) -->
                <div class="hidden md:block absolute top-1/2 left-[15%] right-[15%] h-0.5 bg-gradient-to-r from-sky-400/20 via-sky-400/50 to-sky-400/20 -z-10"></div>

                <!-- Step 1 -->
                <div class="glass-card rounded-2xl p-8 border-t-4 border-t-sky-400 hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-14 h-14 rounded-xl bg-sky-400/20 flex items-center justify-center text-sky-400 font-bold text-2xl mb-6 shadow-[0_0_15px_rgba(56,189,248,0.2)]">1</div>
                    <h3 class="text-xl font-bold text-white mb-3">Struktur Berelasi</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Admin HR mendefinisikan Departemen (contoh: IT) dan Jabatan (contoh: Programmer). Setelah fondasi ini ada, baru data Karyawan dimasukkan, membentuk relasi database yang kokoh.</p>
                </div>
                
                <!-- Step 2 -->
                <div class="glass-card rounded-2xl p-8 border-t-4 border-t-indigo-400 hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-14 h-14 rounded-xl bg-indigo-400/20 flex items-center justify-center text-indigo-400 font-bold text-2xl mb-6 shadow-[0_0_15px_rgba(129,140,248,0.2)]">2</div>
                    <h3 class="text-xl font-bold text-white mb-3">Approval Cuti Digital</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Karyawan mengajukan cuti. Status awal adalah <i>Pending</i>. HRD melakukan peninjauan di Dashboard dan mengeksekusi aksi <i>Approve/Reject</i> dengan satu klik. Bebas kertas kerja.</p>
                </div>

                <!-- Step 3 -->
                <div class="glass-card rounded-2xl p-8 border-t-4 border-t-purple-400 hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-14 h-14 rounded-xl bg-purple-400/20 flex items-center justify-center text-purple-400 font-bold text-2xl mb-6 shadow-[0_0_15px_rgba(192,132,252,0.2)]">3</div>
                    <h3 class="text-xl font-bold text-white mb-3">Kalkulasi Penggajian</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Setiap bulan, Admin memasukkan potongan gaji (jika ada). Sistem otomatis mengambil standar gaji pokok jabatan, menghitung Gaji Bersih, dan menerbitkan <b>Slip Gaji</b> siap cetak.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-10 text-center border-t border-white/5 mt-10">
        <p class="text-slate-500 font-medium">&copy; 2026 ChrisHR Enterprise Software. Developed for Professional Portfolio.</p>
    </footer>

</body>
</html>
