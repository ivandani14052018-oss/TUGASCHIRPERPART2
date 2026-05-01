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
.nav-links{display:flex;gap:.5rem}
a.ghost{
  padding:.4rem .9rem;border:1px solid transparent;border-radius:6px;
  font-size:.85rem;color:#5a8ab0;text-decoration:none;transition:all .15s;
}
a.ghost:hover{border-color:#cce3f5;color:#1a6fba}
a.solid{
  padding:.4rem .9rem;border-radius:6px;
  font-size:.85rem;color:#fff;background:#2d8fe8;text-decoration:none;
  transition:background .15s;
}
a.solid:hover{background:#1a6fba}

main{
  flex:1;display:flex;align-items:center;justify-content:center;
  padding:4rem 2rem;
}
.card{
  background:#fff;border:1px solid #cce3f5;border-radius:14px;
  padding:3rem 2.5rem;max-width:460px;width:100%;text-align:center;
}
.bird{font-size:2.5rem;margin-bottom:1.25rem}
h1{font-size:1.6rem;font-weight:600;margin-bottom:.6rem;color:#1a2a3a}
p{font-size:.95rem;color:#6a90aa;line-height:1.65;margin-bottom:2rem}
.cta{display:flex;gap:.75rem;justify-content:center;flex-wrap:wrap}
a.btn-main{
  padding:.6rem 1.5rem;background:#2d8fe8;color:#fff;
  border-radius:7px;font-size:.875rem;font-weight:500;text-decoration:none;
  transition:background .15s;
}
a.btn-main:hover{background:#1a6fba}
a.btn-sec{
  padding:.6rem 1.25rem;border:1px solid #cce3f5;color:#5a8ab0;
  border-radius:7px;font-size:.875rem;text-decoration:none;background:#fff;
  transition:all .15s;
}
a.btn-sec:hover{border-color:#2d8fe8;color:#1a6fba}

footer{
  text-align:center;padding:1.25rem;font-size:.78rem;color:#9ab8cc;
  border-top:1px solid #cce3f5;background:#fff;
}
</style>
</head>
<body>

<nav>
  <a href="/" class="logo">🐦 Chirper</a>
  <div class="nav-links">
    <a href="#" class="ghost">Sign In</a>
    <a href="#" class="solid">Sign Up</a>
  </div>
</nav>

<main>
  <div class="card">
    <div class="bird">🐦</div>
    <h1>Welcome to Chirper!</h1>
    <p>Your brand new Laravel app is ready. Start sharing your thoughts, connect with others, and make it yours.</p>
    <div class="cta">
      <a href="#" class="btn-main">Get Started</a>
      <a href="#" class="btn-sec">Learn more</a>
    </div>
  </div>
</main>

<footer>
  © 2026 Chirper — Built with Laravel & ❤️ M. Ivandanizar (240170174)
</footer>

</body>
</html>