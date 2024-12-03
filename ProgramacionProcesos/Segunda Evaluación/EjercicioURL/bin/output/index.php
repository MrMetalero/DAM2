<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="tWIIUHOAtlXCghDNkKU17BICpSIhC5mgazOq6TBG">
    <link rel="shortcut icon" href="/img/codea-favicon.png" type="image/png" />
    <title>¿Cómo hacer scraping en cualquier página web con PHP? | PHP </title>
    <meta name="description" content="Escanear una web es fácil con la clase curl de PHP, extraeremos los metas title, description y keywords, tags de posicionamiento web de varias páginas web">
    <meta property="og:title" content="¿Cómo hacer scraping en cualquier página web con PHP? | PHP"/>    
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Escanear una web es fácil con la clase curl de PHP, extraeremos los metas title, description y keywords, tags de posicionamiento web de varias páginas web"/>
    <meta property="og:url" content="https://codea.app/blog/programar-un-scraper-web-en-php"/>
    <link rel="canonical" href="https://codea.app/blog/programar-un-scraper-web-en-php"/>
    <meta property="og:image" content="https://codea.app/img/programaciones/programar-un-scraper-web-en-php_.png"/>
    <meta name="autor" content="Codea Applications">
    <meta name="theme-color" content="#000000">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@400;500&display=swap" rel="stylesheet">
    <link rel="preload" as="style" href="https://codea.app/build/assets/app.22a66ea3.css" /><link rel="stylesheet" href="https://codea.app/build/assets/app.22a66ea3.css" />    <meta name="google-site-verification" content="0M3oSa-Ya2RdXODXy95YVv7XD9Tc2baK8Pq4GMN-fWE" />
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9471603402378632"
     crossorigin="anonymous"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-39YHXZ675Y"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-39YHXZ675Y');
    </script>   
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container">
          <a class="navbar-brand d-flex align-items-center" href="https://codea.app" title="Codea App | Cursos de programación con proyectos" ><img loading="lazy" src="/img/codea-applications.svg" width="150" height="60" class="img-fluid" alt="Plataforma de Cursos de Programación Online"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" title="Cursos básicos" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cursos Básicos</a>
                    <ul class="dropdown-menu">                        
                        <li><a class="dropdown-item disabled" aria-disabled="true">Desarrollo Web</a></li>
                        <li><a class="dropdown-item" href="/laravel" title="Curso básico Laravel">Curso de Laravel</a></li>                        
                        <li><a class="dropdown-item" href="/html" title="Curso básico HTML">Curso de HTML</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li class="nav-item"><a class="nav-link disabled" aria-disabled="true">Apps móviles</a></li>
                        <li><a class="dropdown-item" href="/android" title="Curso básico Android">Curso de Android</a></li>
                        
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link " href="/cursos" title="Cursos con proyectos">Cursos Pro</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/blog" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tutoriales</a>
                    <ul class="dropdown-menu"><li><a class="dropdown-item" href="/tutoriales/php" title="PHP">PHP</a></li><li><a class="dropdown-item" href="/tutoriales/android" title="Android">Android</a></li><li><a class="dropdown-item" href="/tutoriales/flutter" title="Flutter">Flutter</a></li><li><a class="dropdown-item" href="/tutoriales/laravel" title="Laravel">Laravel</a></li><li><a class="dropdown-item" href="/tutoriales/programacion-basica" title="Programación básica">Programación básica</a></li><li><a class="dropdown-item" href="/tutoriales/kotlin" title="Kotlin">Kotlin</a></li></ul>
                </li>                
                <li class="nav-item"><a class="nav-link" href="https://www.youtube.com/@jluisdev" target="blank" title="Canal Youtube de programación">Youtube</a></li>
                <li class="nav-item"><a class="nav-link " href="/preguntas-frecuentes" title="Preguntas frecuentes">Faq</a></li>                               
                                <li class="nav-item">
                    <a class="nav-link " href="/store" rel="nofollow" title="Carrito vacio"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                      </svg></a>
                </li>
                            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item"><a class="nav-link" rel="nofollow" href="https://codea.app/login">LogIn</a></li>                            </ul>
          </div>
        </div>
    </nav>
</header> 
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "headline": "Programar un scrapper web en PHP",
      "author": {
        "@type": "Person",
        "name": "J. Luis",
        "url": "https://apptivaweb.com/jluisdev",
        "image": "https://apptivaweb.com/img/jluisdev.jpg",
        "sameAs": [
          "https://twitter.com/@apptivaweb",
          "https://pe.linkedin.com/in/jluisanccasi"
        ]
      },
      "datePublished": "2018-10-24 09:40:18",
      "image": "https://codea.app/img/programaciones/programar-un-scraper-web-en-php_.png",
      "description": "Escanear una web es fácil con la clase curl de PHP, extraeremos los metas title, description y keywords, tags de posicionamiento web de varias páginas web"
    }
</script>
<div class="text-center"><script>
    // Función para ocultar el mensaje después de 3 segundos (3000 milisegundos)
    setTimeout(function() {
        var successMessage = document.getElementById('success-message');
        var errorMessage = document.getElementById('error-message');

        if (successMessage) {
            successMessage.style.display = 'none';
        }

        if (errorMessage) {
            errorMessage.style.display = 'none';
        }
    }, 3000);
</script></div>
<div class="container-fluid bg-light d-none d-sm-block border-top border-bottom">
    <div class="container p-2">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <a href="/" class="text-sm text-decoration-none small">Inicio</a> »
                <a href="/blog" title="Blog" class="text-sm text-decoration-none small">Blog</a> »
                <a href="/php" class="text-sm text-decoration-none small" title="Tutoriales de PHP">PHP</a> 
            </div>
            <div class="col-sm-6">
                <form role="search">
                    <input class="form-control rounded-pill" id="buscador" type="search" placeholder="Buscar:" aria-label="Search">
                    <div id="sugerencias"></div>
                </form> 
            </div>
        </div>        
    </div>
</div>
<div class="container pt-5 pb-5">
    <p class="text-secondary lead m-0">24 octubre, 2018</p>
    <h1 class="fw-bolder mt-0 display-4">Programar un scrapper web en PHP</h1>    
    <div class="row align-items-center p-2">
        <div class="col-3 col-sm-1">
            <img src="https://yt3.ggpht.com/N05rlmhR-5GPIdSJp7URzl79CZUbk_YQFlJ3A-I3OMNLOyqJfUFWivIPAxJHDvhECDmgia-suQ=s176-c-k-c0x00ffffff-no-rj" alt=""  title="" width="65" height="65" loading="lazy" class="rounded-circle img-fluid border border-4"> 
        </div>
        <div class="col-9 col-sm-2">
            <a href="https://apptivaweb.com/jluisdev" class="text-decoration-none text-danger fs-4" target="blank">Autor: <b class="text-danger">J. Luis</b></a> 
        </div>
        <div class="col-sm-7 d-none d-sm-block">
                        <a href="/tutoriales/php" title="PHP" class="btn btn-outline-danger btn-sm rounded-pill px-3">#PHP</a>
                        <a href="/tutoriales/css" title="CSS" class="btn btn-outline-danger btn-sm rounded-pill px-3">#CSS</a>
                        <a href="/tutoriales/html" title="HTML" class="btn btn-outline-danger btn-sm rounded-pill px-3">#HTML</a>
                    </div>
    </div>
    <div class="text-center" >
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9471603402378632" data-ad-slot="8938323702" data-ad-format="auto"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>
    <p class="mt-5 mb-5 lead bg-light rounded p-1 p-sm-5">Escanear una web es fácil con la clase curl de PHP, extraeremos los metas title, description y keywords, tags de posicionamiento web de varias páginas web</p>
    <div class="row">
        <div class="col-sm-9">
                            <img class="mx-auto d-block img-fluid rounded-3" loading="lazy" src="/img/programaciones/programar-un-scraper-web-en-php_.png" width="800" height="450" alt="Programar un scrapper web en PHP" title="Programar un scrapper web en PHP">
                        <div class="text-center bg-light rounded-4 mt-4 mb-4 p-5">
                <p class="fs-3">Suscríbete a nuestro canal en Youtube</p>
                <a href="https://www.youtube.com/c/Codeapps?sub_confirmation=1" class="btn btn-danger btn-lg">Suscríbirse <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                  </svg></a>
            </div>

            
            
            
            <div id="contenido" class="mt-5">
                <link href="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.11.3/plugins/codesnippet/lib/highlight/styles/monokai_sublime.css" rel="stylesheet">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.11.3/plugins/codesnippet/lib/highlight/highlight.pack.js"></script>
                <p>El scrapeo o scrapping de contenidos en p&aacute;ginas es algo fascinante, talvez por que es la forma que Google escanea y extrae informaci&oacute;n de la p&aacute;ginas web para guardarlas en sus servidores, no si antes clasificarlas e indexarlas, obviamente para ello utiliza diferentes algoritmos de b&uacute;squeda y clasificaci&oacute;n.&nbsp;</p>

<h2><strong>&iquest;Qu&eacute; es Scrapping&nbsp; o Scrapper?</strong></h2>

<p>Es una t&eacute;cnica para extraer informaci&oacute;n de una p&aacute;gina web usando programas o scripts web que escanean la estructura HTML del sitio web. Realizar scrapping requiere de conocimientos avanzados o medianamente avanzados en programaci&oacute;n y an&aacute;lisis de estructuras HTML.</p>

<h2><strong>&iquest;C&oacute;mo hacer Scrapping en PHP de una p&aacute;gina web?</strong></h2>

<p>En esta ocaci&oacute;n utilizaremos la librer&iacute;a CURL soportada por PHP.&nbsp; CURL es una biblioteca creada por Daniel Stenberg que permite comunicarse y comunicarse con diferentes tipos de servidores y diferentes tipos de protocolos.</p>

<p>Lo que intentaremos hacer es crear un peque&ntilde;o aplicativo que scrapea cualquier p&aacute;gina web, claro est&aacute; si esta no tiene restricciones y si &eacute;sta es accesible por la peque&ntilde;a ara&ntilde;a que programaremos, el c&oacute;digo es bastante sencillo, indicarles que hay librer&iacute;as mucho mas sofisticadas y con mayor n&uacute;mero de funcionalidades.</p>

<p>Empezaremos creando un archivo index.php donde colocaremos un formulario get en html con&nbsp;un campo de tipo text y un boton submit, veamos el c&oacute;digo:</p>

<pre>
<code>&lt;form&gt;
		&lt;input type=&quot;url&quot; name=&quot;url&quot; placeholder=&quot;Ej. http://www.empresa.com&quot; required&gt;
		&lt;button name=&quot;btn&quot; type=&quot;submit&quot;&gt;SCRAPEAR&lt;/button&gt;		
&lt;/form&gt;</code></pre>

<p>Implementaremos dos funciones, la primera&nbsp;<strong>file_get_contents_curl($url),&nbsp;</strong>esta funci&oacute;n se conectar&aacute; mediante la clase curl y nos retornar&aacute; el contenido de la web a trav&eacute;s de la url:</p>

<pre>
<code>function file_get_contents_curl($url){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $data = curl_exec($ch);
      curl_close($ch);
      return $data;
}</code></pre>

<p>La segunda funci&oacute;n limpiar&aacute; una cadena de caracteres que no deseamos:</p>

<pre>
<code>function limpiarString($String){ 
     $String = str_replace(array(&quot;|&quot;,&quot;|&quot;,&quot;[&quot;,&quot;^&quot;,&quot;&acute;&quot;,&quot;`&quot;,&quot;&uml;&quot;,&quot;~&quot;,&quot;]&quot;,&quot;&#39;&quot;,&quot;#&quot;,&quot;{&quot;,&quot;}&quot;,&quot;.&quot;,&quot;&quot;),&quot;&quot;,$String);
     return $String;
}</code></pre>

<p>Siguiendo con la funcionalidad de la aplicaci&oacute;n: una vez enviada la url con el formulario debemos parsear el contenido para poder extraer los metas</p>

<ul>
	<li>Title</li>
	<li>Description</li>
	<li>Keywords</li>
</ul>

<p>Estos metas permiten que su p&aacute;gina web sea indexable de forma &oacute;ptima y asi aparecer en los resultados de b&uacute;squeda de Google y cualquier otro buscador como Yahoo, Bing, Ask, Altalaweb, etc.</p>

<pre>
<code> $url 	=	$_GET[&#39;url&#39;];
	$html 	= 	file_get_contents_curl($url);                    
    $doc 	= 	new DOMDocument();
    @$doc-&gt;loadHTML($html);
    $nodes 	= 	$doc-&gt;getElementsByTagName(&#39;title&#39;);
    $title 	= 	limpiarString($nodes-&gt;item(0)-&gt;nodeValue);
    $metas 	= 	$doc-&gt;getElementsByTagName(&#39;meta&#39;);
    for ($i = 0; $i &lt; $metas-&gt;length; $i++):
		$meta = $metas-&gt;item($i);
        if($meta-&gt;getAttribute(&#39;name&#39;) == &#39;description&#39;)
        	$description = limpiarString($meta-&gt;getAttribute(&#39;content&#39;));
        if($meta-&gt;getAttribute(&#39;name&#39;) == &#39;keywords&#39;)
        	$keywords = limpiarString($meta-&gt;getAttribute(&#39;content&#39;));
    endfor;
	echo &quot;TITLE :&lt;br&gt;&quot;.$title.&quot;&lt;br&gt;&quot;;
    echo &quot;DESCRIPTION :&lt;br&gt;&quot;.$description.&quot;&lt;br&gt;&quot;;
    echo &quot;KEYWORDS :&lt;br&gt;&quot;.$keywords;</code></pre>

<p>Y listo, hasta aqu&iacute; ya podemos hacer scrapping de cualquier p&aacute;gina web!!</p>

<h2><strong>C&oacute;digo completo para scrappear una p&aacute;gina web</strong></h2>

<p>C&oacute;digo completo en PHP para extraer el contenido de una web</p>

<pre>
<code>&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;title&gt;SCRAPPING WEB&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;?php
if(isset($_GET[&#39;btn&#39;])):
    function file_get_contents_curl($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
    function limpiarString($String){ 
        $String = str_replace(array(&quot;|&quot;,&quot;|&quot;,&quot;[&quot;,&quot;^&quot;,&quot;&acute;&quot;,&quot;`&quot;,&quot;&uml;&quot;,&quot;~&quot;,&quot;]&quot;,&quot;&#39;&quot;,&quot;#&quot;,&quot;{&quot;,&quot;}&quot;,&quot;.&quot;,&quot;&quot;),&quot;&quot;,$String);
        return $String;
    }
    $url 	=	$_GET[&#39;url&#39;];
	$html 	= 	file_get_contents_curl($url);                    
    $doc 	= 	new DOMDocument();
    @$doc-&gt;loadHTML($html);
    $nodes 	= 	$doc-&gt;getElementsByTagName(&#39;title&#39;);
    $title 	= 	limpiarString($nodes-&gt;item(0)-&gt;nodeValue);
    $metas 	= 	$doc-&gt;getElementsByTagName(&#39;meta&#39;);
    for ($i = 0; $i &lt; $metas-&gt;length; $i++):
		$meta = $metas-&gt;item($i);
        if($meta-&gt;getAttribute(&#39;name&#39;) == &#39;description&#39;)
        	$description = limpiarString($meta-&gt;getAttribute(&#39;content&#39;));
        if($meta-&gt;getAttribute(&#39;name&#39;) == &#39;keywords&#39;)
        	$keywords = limpiarString($meta-&gt;getAttribute(&#39;content&#39;));
    endfor;
	echo &quot;TITLE :&lt;br&gt;&quot;.$title.&quot;&lt;br&gt;&quot;;
    echo &quot;DESCRIPTION :&lt;br&gt;&quot;.$description.&quot;&lt;br&gt;&quot;;
    echo &quot;KEYWORDS :&lt;br&gt;&quot;.$keywords;
else:
?&gt;
&lt;form&gt;
	&lt;input type=&quot;url&quot; name=&quot;url&quot; placeholder=&quot;Ej. http://empresa.com&quot; required&gt;
	&lt;button name=&quot;btn&quot; type=&quot;submit&quot;&gt;SCRAPEAR&lt;/button&gt;		
&lt;/form&gt;
&lt;?php endif; ?&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>

<p>&nbsp;</p>                
                <script>hljs.initHighlightingOnLoad();</script>
                <hr>
                <p class="text-end p-5 small"> Leido <strong>26172</strong> veces | 11 usuarios</p>
            </div>
            <div class="text-center" >
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9471603402378632" data-ad-slot="8938323702" data-ad-format="auto"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
            </div>   

            <div class="mt-5 mb-5">
                                    
                            </div>

                        
            <!-- DESCARGA-->            
                                        
            <div class="card">
                <div class="card-body my-5 text-center">
                    <h2 class="fw-bold" id="descargar">Descarga del código fuente PHP de Programar un scrapper web en PHP</h2>
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-file-earmark-zip-fill text-success" viewBox="0 0 16 16">
                        <path d="M5.5 9.438V8.5h1v.938a1 1 0 0 0 .03.243l.4 1.598-.93.62-.93-.62.4-1.598a1 1 0 0 0 .03-.243"/>
                        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1m-4-.5V2h-1V1H6v1h1v1H6v1h1v1H6v1h1v1H5.5V6h-1V5h1V4h-1V3zm0 4.5h1a1 1 0 0 1 1 1v.938l.4 1.599a1 1 0 0 1-.416 1.074l-.93.62a1 1 0 0 1-1.109 0l-.93-.62a1 1 0 0 1-.415-1.074l.4-1.599V8.5a1 1 0 0 1 1-1"/>
                      </svg></p>
                    <p>179 descargas</p>                    
                                        <p>Para descargar el código crea una cuenta</p>    
                        <a href="/register" title="Acceder a la plataforma" class="btn btn-success rounded-pill pe-5 ps-5">Crear cuenta</a>
                                
                </div>
            </div>
                        <!--// DESCARGA-->
            <!-- share-->
            <div class="mt-5 mb-5">
                <p class="text-center lead">Compartir link del tutorial con tus amigos</p>
                <div class="text-center flex justify-center mt-5">
                    <a class="btn btn-dark" title="Copiar Link" href="javascript:getlink();">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-link" viewBox="0 0 16 16">
                            <path d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9c-.086 0-.17.01-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z"/>
                            <path d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4.02 4.02 0 0 1-.82 1H12a3 3 0 1 0 0-6H9z"/>
                        </svg>
                    </a>
                    <a class="btn btn-dark" title="Link WhatsApp" href="https://api.whatsapp.com/send?text=Programar un scrapper web en PHP https://codea.app/blog/programar-un-scraper-web-en-php" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg>
                    </a> 
                    <a class="btn btn-dark" title="Link a Messenger" href="fb-messenger://share?link=https://codea.app/blog/programar-un-scraper-web-en-php" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-messenger" viewBox="0 0 16 16">
                            <path d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z"/>
                        </svg>
                    </a> 
                    <a class="btn btn-dark" title="Link a Facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://codea.app/blog/programar-un-scraper-web-en-php" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                    </a>
                    <a class="btn btn-dark" title="Link a Twitter" href="https://www.twitter.com/sharer?url=https://codea.app/blog/programar-un-scraper-web-en-php" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                    </a>
                </div>                        
            </div>
            <!-- // share-->
        </div>
        <div class="col-sm-3 bg-dark rounded-3" id="resultado">            
            <div class="mt-3">          
            <!-- peruvertical -->
            <ins class="adsbygoogle"
                style="display:inline-block;width:300px;height:600px"
                data-ad-client="ca-pub-9471603402378632"
                data-ad-slot="9661790222"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            </div>
            <hr>
            <div class="sticky-top">
                                <div class="card mt-5">
                    <div class="card-body text-center">
                        <img src="/img/cursos/mvc-php-y-mysql-pagina-web-1723207091.jpg" class="img-fluid rounded" title="MVC PHP y MySql Página Web" loading="lazy" alt="MVC PHP y MySql Página Web">
                        <p class="fw-bold">USD 10.00</p>
                        <p class="text-success">Descarga del código fuente</p>
                                                <a href="/cursos/pagina-web-administrable" class="btn btn-danger btn-sm w-100 mt-3">MVC PHP y MySql Página Web</a>
                                                
                        
                        
                    </div>
                </div>
                            </div>
        </div>        
    </div>

</div>


<div class="container">    
    <!-- posts-->
    <div class="col-sm-12 my-5">
        <h2><a href="/tutoriales/php" class="text-decoration-none">Más tutoriales de PHP</a></h2>
        <div class="row">
                <div class="col-sm-3 my-5">
            <a href="/blog/array-de-inputs-en-formularios-y-procesamiento-con-php" rel="nofollow" class="text-decoration-none">
                <img src="/img/programaciones/array-de-inputs-en-formularios-y-procesamiento-con-php_.png" alt="Array de inputs en formularios y procesamiento con php" loading="lazy" class="img-fluid rounded-3">
                <p class="text-center small">Array de inputs en formularios y procesamiento con php</p>
            </a>    
        </div>
                <div class="col-sm-3 my-5">
            <a href="/blog/generador-de-codigos-qr-con-phpqrcode" rel="nofollow" class="text-decoration-none">
                <img src="/img/programaciones/generador-de-codigos-qr-con-phpqrcode_10.jpg" alt="Generador de Códigos QR con PHPQRCODE" loading="lazy" class="img-fluid rounded-3">
                <p class="text-center small">Generador de Códigos QR con PHPQRCODE</p>
            </a>    
        </div>
                <div class="col-sm-3 my-5">
            <a href="/blog/obtener-la-imagen-miniatura-de-un-video-youtube" rel="nofollow" class="text-decoration-none">
                <img src="/img/programaciones/obtener-la-imagen-miniatura-de-un-video-youtube_.png" alt="Obtener la imagen miniatura de un video Youtube" loading="lazy" class="img-fluid rounded-3">
                <p class="text-center small">Obtener la imagen miniatura de un video Youtube</p>
            </a>    
        </div>
                <div class="col-sm-3 my-5">
            <a href="/blog/renombrar-archivos-con-numeracion-correlativa" rel="nofollow" class="text-decoration-none">
                <img src="/img/programaciones/renombrar-archivos-con-numeracion-correlativa14_.png" alt="Renombrar archivos con numeración correlativa" loading="lazy" class="img-fluid rounded-3">
                <p class="text-center small">Renombrar archivos con numeración correlativa</p>
            </a>    
        </div>
                </div>
    </div>
    <!-- // posts-->
    <!-- CURSOS DE PROGRAMACION-->
    <div class="col-sm-12 my-5">                

        <div class="card">
            <div class="card-header">
                <h2><a href="/cursos" class="text-decoration-none">Más cursos de programación</a></h2>
            </div>
            <div class="card-body">                
                <div class="row">
                                        <div class="col-sm-3 mt-3">
                        <a href="/cursos/laravel-pagina-web-administrable" rel="nofollow" class="text-decoration-none">
                            <img src="/img/cursos/laravel-11-pagina-web-administrable-1712411691.jpg" alt="Laravel Página Web Administrable" loading="lazy" class="img-fluid rounded-3 shadow">
                            <p class="text-center small">Curso Laravel Página Web Administrable</p>
                        </a>    
                    </div>
                                        <div class="col-sm-3 mt-3">
                        <a href="/cursos/tienda-flutter-laravel" rel="nofollow" class="text-decoration-none">
                            <img src="/img/cursos/flutter-y-laravel-tienda-delivery.jpg" alt="Flutter y Laravel Tienda Delivery" loading="lazy" class="img-fluid rounded-3 shadow">
                            <p class="text-center small">Curso Flutter y Laravel Tienda Delivery</p>
                        </a>    
                    </div>
                                        <div class="col-sm-3 mt-3">
                        <a href="/cursos/lector-qr-android-php-mysql" rel="nofollow" class="text-decoration-none">
                            <img src="/img/cursos/android-php-mysql-lector-qr.jpg" alt="Lector QR en Android PHP y MySql" loading="lazy" class="img-fluid rounded-3 shadow">
                            <p class="text-center small">Curso Lector QR en Android PHP y MySql</p>
                        </a>    
                    </div>
                                        <div class="col-sm-3 mt-3">
                        <a href="/cursos/app-restaurant-flutter" rel="nofollow" class="text-decoration-none">
                            <img src="/img/cursos/flutter-app-restaurant-con-carrito-1729082889.webp" alt="App restaurant con pedidos en Flutter" loading="lazy" class="img-fluid rounded-3 shadow">
                            <p class="text-center small">Curso App restaurant con pedidos en Flutter</p>
                        </a>    
                    </div>
                                
                </div>
            </div>
        </div>
        
    </div>
    <!--//CURSOS DE PROGRAMACION-->
</div>
<style>
body{counter-reset:section; background:white;}
#contenido h2{font-size: 22px; font-weight: bold; margin-top:50px; counter-reset:subsection; color:crimson;  padding: 10px 0px}
#contenido h2:before{counter-increment:section;content: counter(section) ". ";}
#contenido h3{font-size: 18px; font-weight: bold; color: #121f3d}
#contenido h3:before{counter-increment:subsection;content:counter(section) "." counter(subsection) " ";}
#contenido a{ text-decoration: none;} #contenido a:hover{text-decoration: underline}
#contenido p, #contenido {font-size: 20px !important}
code{
    border-radius: 10px; 
    margin-top: 30px;
    margin-bottom: 30px;
    padding: 30px 10px !important;    
    overflow: auto;    
    user-select: none; /* Deshabilitar la selección de texto */
    pointer-events: none; /* Deshabilitar eventos de puntero */
    color: #aaa; /* Cambiar el color para indicar que no es seleccionable */        
}
@media(max-width:560px){
    .contenido img{
        height: auto !important;
        width: 100% !important;
    }
    code{overflow: auto;}
}
.video-container {
  position: relative;
  padding-bottom: 56.25%; /* Proporción de aspecto 16:9 (9 / 16 * 100) */
  overflow: hidden;
}

.video-container iframe, .video-container video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
</style>
<script>
    function getlink() {
      var aux = document.createElement("input");
      aux.setAttribute("value", window.location.href.split("?")[0].split("#")[0]);
      document.body.appendChild(aux);
      aux.select();
      document.execCommand("copy");
      document.body.removeChild(aux);
      var css = document.createElement("style");
      var estilo = document.createTextNode("#aviso {position:fixed; z-index: 9999999; widht: 120px; top:30%;left:50%;margin-left: -60px;padding: 20px; background: gold;border-radius: 8px;font-size: 14px;font-family: sans-serif;}");
      css.appendChild(estilo);
      document.head.appendChild(css);
      var aviso = document.createElement("div");
      aviso.setAttribute("id", "aviso");
      var contenido = document.createTextNode("URL copiada");
      aviso.appendChild(contenido);
      document.body.appendChild(aviso);
      window.load = setTimeout("document.body.removeChild(aviso)", 2000);
    }

    // Deshabilitar el clic derecho en todo el documento
    document.addEventListener('contextmenu', (event) => {
        event.preventDefault(); // Prevenir el menú contextual
    });
</script>
<style>
    #sugerencias{    
        border-radius: 25px;
        background: white;
        width: 500px;
        display: none;
        z-index: 1;        
        position: absolute;
    }
    #sugerencias a{
        display: block;
        padding: 10px;
        text-decoration: none;
    }
    #sugerencias a:hover{
        background-color: #003366;
        color: white;
    }
    #sugerencias strong{
        color: black;
    }
    </style>
    <script>
        function orderPost(texto) {
            fetch('/buscador', {
                method: 'post',
                body: JSON.stringify({ texto : texto }),
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-Token": document.head.querySelector("[name~=csrf-token][content]").content
                }
            })
            .then(response => {
                return response.json()
            })
            .then(data => {            
                var table = "<div class='list-group position-absolute' style='z-index:1'>" ;
                for(var i in data.posts){
                    var nombre = data.posts[i].pnombre.toLowerCase().replace(texto,'<span class="text-danger">' + texto + '</span>');
                    table += '<a href="/blog/'+data.posts[i].pslug+'" class="list-group-item small">'+nombre+'</a>';
                }
                sugerencias.classList.add("d-block")
                table += '</ul>'
                document.getElementById("sugerencias").innerHTML = "";    
                document.getElementById("sugerencias").innerHTML = table;
                document.getElementById("sugerencias").classList.remove('d-none');    
                
            })
            .catch(error => console.error(error));
        };
        
        document.getElementById('buscador').addEventListener('keyup', (e)=>{
            var texto = e.target.value   
            if(texto.length>1)
                orderPost(texto);
        })
    
    </script>
<div class="bg-dark container-fluid pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <p class="text-center">
                    <a href="/" class="text-decoration-none text-white fw-bolder" title="Codea App | Academia de programación ">
                    <img loading="lazy" src="/img/codea-applications.png" class="img-fluid mx-auto d-block" alt="Codea Applications"  width="175" height="50" title="Codea Applications | Cursos"></a> 
                </p>
                <p class="text-center small text-white">México, Colombia, España, Venezuela, Argentina, Bolivia, Perú</p>
                <p class="text-center">
                    <a class="btn btn-dark btn-sm" href="https://www.youtube.com/@jluisdev" rel="nofollow" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                      </svg></a>
                    <a class="btn btn-dark btn-sm" href="https://www.facebook.com/codeaapp" rel="nofollow" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                      </svg></a>
                    <a class="btn btn-dark btn-sm" href="https://api.whatsapp.com/send?phone=51956337507&text=Hola! JLuis" rel="nofollow" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                      </svg></a>
                    <a class="btn btn-dark btn-sm" href="https://www.tiktok.com/@jluis.dev" rel="nofollow" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                        <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                      </svg></a>
                </p>
            </div>
            <div class="col-sm-3 border-right border-1">
                <p class="text-white fs-4">Core </p>
                <ul>
                    <li><a class="text-decoration-none" href="/cursos" title="Más cursos de programación">Cursos</a></li>                    
                    <li><a class="text-decoration-none" href="/blog" title="Tutoriales">Tutoriales</a></li>
                    <li><a class="text-decoration-none" href="/tools/centrar-div-con-css" title="Generador de código CSS">Centrar DIV con CSS</a></li>
                    <li><a class="text-decoration-none" href="/tools/centrar-div-con-bootstrap" title="Generador de código Bootstrap">Centrar DIV con Bootstrap</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <p class="text-white fs-4">Enlaces</p>
                <ul>
                    <li><a class="text-decoration-none" href="/hola">Hola</a></li>
                    <li><a class="text-decoration-none" href="/preguntas-frecuentes">Preguntas frecuentes</a></li>
                    <li><a class="text-decoration-none" href="/terminos" rel="nofollow">Términos y condiciones</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="text-white bg-black border-top border-secondary">
    <div class="container">
        <p class="text-white small py-2 m-0">&copy; Copyright <a href="/hola" class="text-decoration-none text-white">Codea::App Cursos de Programación Online</a> | LATAM | 2020 - 2024</p>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
