<?php  include("/view/header.php");?>
<main id="main">

	<div class="container">
		<div class="row topspace">
			<div class="col-sm-8 col-sm-offset-2">
															
				<article class="post">
					<header class="entry-header">
						<div class="entry-meta"> 
							<span class="posted-on"><time class="entry-date published" date="2016-04-05">Abril 05, 2016</time></span>			
						</div>
						<h1 class="entry-title"><a href="single.html" rel="bookmark">Banco de Dados</a></h1>
					</header>
					<div class="entry-content">
							<p>
							  <?php
							    //cria a conexao com o banco de dados
								$db = new PDO("pgsql:host=localhost;dbname=space", "postgres", "kassio");
							    
							    //verifica se ouve sucesso na conexão
								if($db == true){
								   echo "<b>Essa Mensagem é para dizer que estamos conectado ao banco de dados :)</b><BR/>";
								}
								else{
									echo "Infelizmente não conectou ao banco de dados :(";
								}

							?>
						</p>
					</div>
				</article>
 				
 				<article class="post">
					<header class="entry-header">
 						<div class="entry-meta"> 
 							<span class="posted-on"><time class="entry-date published" date="2013-06-17">Abril 05, 2016</time></span>			
 						</div> 
 						<h1 class="entry-title"><a href="single.html" rel="bookmark">Vivamus Lacus Mauris</a></h1>
					</header> 
					<div class="entry-content"> 
						<p><img alt="" src="view/assets/images/mac.jpg"></p>
						<p>Mauris eget quam orci. Quisque porta varius dui, quis posuere nibh mollis quis. Mauris commodo rhoncus porttitor. Maecenas et euismod elit. Nulla facilisi. Vivamus lacus libero, ultrices non ullamcorper ac, tempus sit amet enim. Suspendisse at semper ipsum. Suspendisse sagittis diam a massa viverra sollicitudin. Vivamus sagittis est eu diam fringilla nec tristique metus vestibulum. Donec magna purus, pellentesque vel lobortis ut, convallis id augue. Sed odio magna, pellentesque eget convallis ac, vehicula vel arcu. Sed eu scelerisque dui. Sed eu arcu at nibh hendrerit viverra. Vivamus lacus augue, sodales id cursus in, condimentum at risus. <a href="single.html" class="more-link">Continue reading&#8230;</a></p>
					</div> 
				</article><!-- #post-## -->
											
				<article class="post">
					<header class="entry-header">
 						<div class="entry-meta"> 
 							<span class="posted-on"><time class="entry-date published" date="2013-06-17">JAbril 05, 2016</time></span>			
 						</div> 
 						<h1 class="entry-title"><a href="single.html" rel="bookmark">Vivamus Lacus Mauris</a></h1>
					</header> 
					<div class="entry-content"> 
						<p>Mauris eget quam orci. Quisque porta varius dui, quis posuere nibh mollis quis. Mauris commodo rhoncus porttitor. Maecenas et euismod elit. Nulla facilisi. Vivamus lacus libero, ultrices non ullamcorper ac, tempus sit amet enim. Suspendisse at semper ipsum. Suspendisse sagittis diam a massa viverra sollicitudin. Vivamus sagittis est eu diam fringilla nec tristique metus vestibulum. Donec magna purus, pellentesque vel lobortis ut, convallis id augue. Sed odio magna, pellentesque eget convallis ac, vehicula vel arcu. Sed eu scelerisque dui. Sed eu arcu at nibh hendrerit viverra. Vivamus lacus augue, sodales id cursus in, condimentum at risus.</p>
					</div> 
				</article><!-- #post-## -->
											
				<article class="post">
					<header class="entry-header"> 
						<div class="entry-meta"> 
							<span class="posted-on"><time class="entry-date published" date="2013-04-04">Abril 05, 2016</time></span>			
						</div>
						<h1 class="entry-title"><a href="single.html" rel="bookmark">Maecenas Quisque Suspendisse Lorem</a></h1>
					</header>
					<div class="entry-content">
						<p>Mauris eget quam orci. Quisque porta varius dui, quis posuere nibh mollis quis. Mauris commodo rhoncus porttitor. Maecenas et euismod elit. Nulla facilisi. Vivamus lacus libero, ultrices non ullamcorper ac, tempus sit amet enim. Suspendisse at semper ipsum. Suspendisse sagittis diam a massa viverra sollicitudin. Vivamus sagittis est eu diam fringilla nec tristique metus vestibulum. Donec magna purus, pellentesque vel lobortis ut, convallis id augue. Sed odio magna, pellentesque eget convallis ac, vehicula vel arcu. Sed eu scelerisque dui. Sed eu arcu at nibh hendrerit viverra. Vivamus lacus augue, sodales id cursus in, condimentum at risus. <a href="single.html" class="more-link">Continue reading&#8230;</a></p>
					</div>
 				</article><!-- #post-## -->
											
				<article class="post">
					<header class="entry-header">
 						<div class="entry-meta"> 
 							<span class="posted-on"><time class="entry-date published" date="2013-03-20">Abril 05, 2016</time></span>			
 						</div>
						<h1 class="entry-title"><a href="single.html" rel="bookmark">Pellentesque Eget Convallis</a></h1>
					</header>
					<div class="entry-content">
						<p>Mauris eget quam orci. Quisque porta varius dui, quis posuere nibh mollis quis. Mauris commodo rhoncus porttitor. Maecenas et euismod elit. Nulla facilisi. Vivamus lacus libero, ultrices non ullamcorper ac, tempus sit amet enim. Suspendisse at semper ipsum. Suspendisse sagittis diam a massa viverra sollicitudin. Vivamus sagittis est eu diam fringilla nec tristique metus vestibulum. Donec magna purus, pellentesque vel lobortis ut, convallis id augue. Sed odio magna, pellentesque eget convallis ac, vehicula vel arcu. Sed eu scelerisque dui. Sed eu arcu at nibh hendrerit viverra. Vivamus lacus augue, sodales id cursus in, condimentum at risus. <a href="single.html" class="more-link">Continue reading&#8230;</a></p>
					</div>
				</article><!-- #post-## --> 
			</div> 
		</div>

		<center class="">
			<ul class="pagination">
				<li class="disabled"><a href="">&laquo;</a></li>
				<li class="active"><a href="">1</a></li>
				<li><a href="">2</a></li>
				<li><a href="">3</a></li>
				<li><a href="">4</a></li>
				<li><a href="">5</a></li>
				<li><a href="">6</a></li>
				<li><a href="">&raquo;</a></li>
			</ul>
		</center>
	

	</div>	<!-- /container -->

</main>
<?php  include("/view/footer.php");?>
<!-- Comentários de um contribuidor -->