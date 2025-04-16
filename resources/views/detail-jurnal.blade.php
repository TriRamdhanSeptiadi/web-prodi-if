<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Artikel Google Scholar</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Tambahkan CSS jika diperlukan -->
</head>
<body>

    <!-- Header atau Navigasi (Jika diperlukan) -->
    <header>
        <nav>
            <!-- Tambahkan navigasi jika diperlukan -->
        </nav>
    </header>

    <!-- Konten Utama -->
    <div class="max-w-3xl mx-auto p-4">
        <h2 class="text-2xl font-semibold mb-4">Artikel Google Scholar untuk {{ $nama }}</h2>

        @if(count($results) > 0)
            <ul class="space-y-4">
                @foreach($results as $article)
                    @php
                        // Ambil summary jika ada, jika tidak set ke string kosong
                        $summary = $article['publication_info']['summary'] ?? 'Tidak ada ringkasan tersedia.';
                        // Cek apakah summary mengandung "international women university"
                        $isIWU = Str::contains(strtolower($summary), 'international women university');
                    @endphp

                    <li class="p-4 border rounded hover:bg-gray-100">
                        <!-- Pastikan link valid -->
                        @if(isset($article['link']))
                            <a href="{{ $article['link'] }}" target="_blank" class="text-blue-600 font-medium text-lg">
                                {{ $article['title'] }}
                            </a>
                        @else
                            <span class="text-gray-500">{{ $article['title'] }}</span>
                        @endif

                        <p class="text-sm text-gray-600 mt-1">
                            {{ $summary }}
                        </p>

                        @if($isIWU)
                            <div class="flex items-center mt-2 space-x-2">
                                <img src="{{ asset('images/Iwu.png') }}" alt="IWU Logo" class="w-6 h-6">
                                <span class="text-green-600 font-semibold text-sm">International Women University</span>
                            </div>
                        @endif
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-500">Tidak ada artikel ditemukan untuk dosen ini.</p>
        @endif
    </div>

    <!-- Footer (Jika diperlukan) -->
    <footer>
        <p>&copy; {{ date('Y') }} Nama Website</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Jika ada JS tambahan -->
</body>
</html>