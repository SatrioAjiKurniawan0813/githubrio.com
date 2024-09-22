<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Web Sederhana</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .welcome-message {
            position: absolute;
            top: 50px;
            right: 20px;
            font-size: 20px;
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .container {
            display: flex;
        }

        aside {
            width: 20%;
        }

        main {
            width: 80%;
        }

        iframe {
            width: 100%;
            height: 500px;
            border: none;
        }
    </style>
</head>
<body>
    <header>
        <h1>FRANK RIO WEB</h1>
        <p>Welcome to FRANK RIO WEB</p>
    </header>
    <nav style="text-align: center;">
        <ul>
            <li><a href="https://ppdb.smkn1bawang.sch.id/" target="contentFrame">WEB SMKN 1 Bawanng</a></li>
            <li><a href="#" onclick="loadContent('about.html')">About</a></li>
            <li><a href="#" onclick="loadContent('services.html')">Services</a></li>
            <li><a href="#" onclick="loadContent('contact.html')">Contact</a></li>
        </ul>
    </nav>
    <div class="container">
        <aside>
            <h2>Sidebar</h2>
            <ul>
                <li><a href="#" onclick="loadContent('Home.html')">beranda</a></li>
                <li><a href="#" onclick="loadContent('biodata.html')">biodata</a></li>
                <li><a href="#" onclick="loadContent('latihan form.html')">form</a></li>
                <li><a href="#" onclick="loadContent('latihantabel.html')">table</a></li>
                <li><a href="#" onclick="loadContent('latihanjs.html')">latihan js</a></li>
                <li><a href="#" onclick="loadContent('Login.html')">Login</a></li>
            </ul>
            <p>Informasi tambahan atau link lainnya bisa ditempatkan di sini.</p>
        </aside>
        <main>
            <h2>Selamat Datang</h2>
            <p>`Di WEB Satrio Aji Kurniawan Semoga Anda Bahagia`.</p>
            <iframe name="contentFrame"></iframe>
        </main>
    </div>
    <footer>
        <p>2024 Nama Anda.</p>
    </footer>

    <script>
        function loadContent(page) {
            document.querySelector('iframe').src = page;
        }

        // Membuat elemen div baru untuk pesan selamat datang
        const welcomeMessage = document.createElement('div');
        welcomeMessage.className = 'welcome-message';
        welcomeMessage.textContent = 'Selamat Datang di Web Frank Rio';
        
        // Menambahkan elemen tersebut ke dalam body
        document.body.appendChild(welcomeMessage);
    </script>
</body>
</html>
