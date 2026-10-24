
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AgroClima Garut</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f1f8f2;
            color: #24352a;
        }
        header, footer {
            background: #246b45;
            color: white;
            text-align: center;
            padding: 20px;
        }
        nav {
            background: #dcefe0;
            padding: 15px;
            text-align: center;
        }
        nav a {
            margin: 0 12px;
            color: #205b38;
            text-decoration: none;
            font-weight: bold;
        }
        main {
            max-width: 950px;
            margin: 30px auto;
            padding: 25px;
            background: white;
            border-radius: 12px;
        }

        
h1, h2, h3 {
    color: #246b45;
}

main {
    min-height: 300px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
}

nav a:hover {
    color: #159447;
    text-decoration: underline;
}

input, select, button {
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #cbd5ce;
    border-radius: 6px;
}

button {
    background: #246b45;
    color: white;
    cursor: pointer;
}

button:hover {
    background: #174b30;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th {
    background: #246b45;
    color: white;
}

th, td {
    padding: 10px;
    text-align: left;
}

tr:nth-child(even) {
    background: #f1f8f2;
}

@media (max-width: 600px) {
    main {
        margin: 12px;
        padding: 15px;
        overflow-x: auto;
    }

    nav a {
        display: inline-block;
        margin: 6px;
    }
}

    </style>
</head>
<body>
    <header>
        <h1>AgroClima Kabupaten Garut</h1>
        <p>Sistem Prediksi Mikroklimat Tanaman</p>
    </header>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    <footer>
        © 2026 AgroClima Kelompok Tani Makmur Kabupaten Garut
    </footer>

    
<script>
document.querySelectorAll('form').forEach(function(form) {
    form.addEventListener('submit', function() {
        const tombol = form.querySelector('button[type="submit"]');

        if (tombol) {
            tombol.textContent = 'Memproses...';
            tombol.disabled = true;
        }
    });
});
</script>

</body>
</html>
