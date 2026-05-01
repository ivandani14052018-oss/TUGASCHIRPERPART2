<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chirper</title>

<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

@vite(['resources/css/app.css', 'resources/js/app.js'])

<style>
*{margin:0;padding:0;box-sizing:border-box}
body{
  font-family:'Instrument Sans',sans-serif;
  background:#eef6fd;
  color:#1a2a3a;
  min-height:100vh;
  display:flex;flex-direction:column;
}

nav{
  display:flex;justify-content:space-between;align-items:center;
  padding:1rem 2rem;
  border-bottom:1px solid #cce3f5;
  background:#fff;
}
.logo{font-size:1.1rem;font-weight:600;color:#1a6fba;text-decoration:none}

main{
  flex:1;
  display:flex;
  justify-content:center;
  padding:3rem 1.5rem;
}

.container{
  width:100%;
  max-width:600px;
}

.chirp-card{
  background:#fff;
  border:1px solid #cce3f5;
  border-radius:12px;
  padding:1.2rem 1.4rem;
  margin-bottom:1rem;
  transition:all .2s;
}
.chirp-card:hover{
  box-shadow:0 4px 12px rgba(0,0,0,0.05);
}

.chirp-header{
  display:flex;
  justify-content:space-between;
  align-items:center;
  margin-bottom:.4rem;
}

.author{
  font-weight:600;
  color:#1a2a3a;
}

.time{
  font-size:.8rem;
  color:#7fa6c4;
}

.message{
  font-size:.95rem;
  color:#4a6b85;
  line-height:1.5;
}

footer{
  text-align:center;
  padding:1rem;
  font-size:.75rem;
  color:#9ab8cc;
  border-top:1px solid #cce3f5;
  background:#fff;
}
</style>
</head>

<body>

<nav>
  <a href="/" class="logo">🐦 Chirper</a>
</nav>

<main>
  <div class="container">

    @foreach ($chirps as $chirp)
      <div class="chirp-card">
        <div class="chirp-header">
          <div class="author">{{ $chirp['author'] }}</div>
          <div class="time">{{ $chirp['time'] }}</div>
        </div>
        <div class="message">{{ $chirp['message'] }}</div>
      </div>
    @endforeach

  </div>
</main>

<footer>
  © 2026 Chirper — Built with Laravel & ❤️
</footer>

</body>
</html>