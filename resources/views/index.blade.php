<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <style>
        /* Reset some styles for consistency */
body, h1, h2, ul {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
}

/* Custom styles */
header {
    height: 80px;
    background-color: #3F51B5;
    display: flex;
    justify-content: center;
    align-items: center;
    padding-left: 20px;
}

header h1 {
    color: #fff;
    text-align: center;
}

nav {
    background-color: #eee;
    padding: 10px 20px;
    display: flex;
    justify-content:space-between;
    align-items: center;
}
nav ul {
    list-style-type: none;
    display: flex;
    flex: 1;
    padding: 10px;
    text-align: center;
    max-width: 100%;
    justify-content: center;
}

nav ul li {
    margin-right: 20px;
    text-align: center;
    max-width: 100%;
}

nav a {
    text-decoration: none;
    color: #333;
}

main {
    display: flex;
    padding: 20px;
}

main section {
    flex: 1;
    margin-right: 20px;
}

main section h2 {
    font-size: 2rem;
    margin-bottom: 10px;
}

main section p {
    font-size: 1.2rem;
    color: #666;
    max-width: 100%;
}
.box-design {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #F5F5F5;
    padding: 10px 20px;
    border-radius: 5px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);

}

.box-design svg {
    width: 30px;
    height: 30px;
    fill: #3F51B5;
}
.clean-button {
  background-color:  #8997e7;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

.clean-button:hover {
  background-color:  #3F51B5;
}
    </style>
</head>
<body>
    <header>
        <h1>Dashboard</h1>
    </header>
    <nav>
        <ul>
            <li><form method="post" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="clean-button">Logout</button>
            </form></li>
            <li><a href="{{ route('newPemohon.view')}}"><button class="clean-button">Pemohon Baru</button></a></li>
            <li><a href="{{ route('pemohon.display')}}"><button class="clean-button">Semua Pemohon</button></a></li>
        </ul>
    </nav>
    <main>
        <section>
        <div class="box-design">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 18c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8zm-1-11H11v-2h2v2zm0-4H11V7h2v2zm0-4H11V3h2v2z"/>
            </svg>
            <span>
                <h2>Jumlah Admin: {{ $totalUser}} </h2>
            </span>
        </div>
    </section>
    <section>
        <div class="box-design">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 18c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8zm-1-11H11v-2h2v2zm0-4H11V7h2v2zm0-4H11V3h2v2z"/>
            </svg>
            <span>
                <h2>Jumlah Pemohon: {{ $totalPemohon}} </h2>
            </span>
        </div>
    </section>
    <section>
        <div class="box-design">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 18c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8zm-1-11H11v-2h2v2zm0-4H11V7h2v2zm0-4H11V3h2v2z"/>
            </svg>
            <span>
                <h2>Jumlah Kawasan</h2>
            </span>
        </div>
    </section>
    </main>
    <footer>
        <!-- Footer content here -->
    </footer>
</body>
</html>