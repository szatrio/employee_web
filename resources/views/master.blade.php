<html>
<head>
	<title>Tutorial Laravel #8 : Sistem Template Blade Laravel</title>
</head>
<body>
 
	<header>
 
		<nav>
			<a href="/blog">HOME</a>
			|
			<a href="/blog/about">TENTANG</a>
			|
			<a href="/blog/contact">KONTAK</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>
 
	<!-- bagian judul halaman blog -->
	<h3> @yield('page_title') </h3>
 
 
	<!-- bagian konten blog -->
	@yield('content')
 
 
	<br/>
	<br/>
	<hr/>
	<footer>
		<p>
        &copy; <a href="https://www.github.com/szatrio">Satrio Utomo</a>
        <script>document.write( new Date().getFullYear() );</script>
        </p>
	</footer>
 
</body>
</html>