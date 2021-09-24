<link href="/llttmmss/assets/css/style.css" rel="stylesheet" type="text/css">
<script src="https://kit.fontawesome.com/1edf5219f2.js" crossorigin="anonymous"></script>
<header class="header" id="header">
	
<nav class="nav">
	<div class="cap">
	
	<p>
		<img src="/llttmmss/assets/images/pozahead.png" width="100" height="70" alt=""/ >
	     <span>Liceul Teoretic</sapan>
	     <span> Mihail Sadoveanu</span>
	</p>
  </div>

	<ul>
		<li <?php if(isset($page)&& $page =="acasa") : ?> class="activ"<?php endif;?></l>
		  <a href="index.php" tabindex="1" title="Prima pagina site" accesskey="A" class="positiv">
			  <i class="fas fa-school"></i>
			   Acasa
		</a>
		</li>
		
	    <li <?php if(isset($page)&& $page =="despre") : ?> class="activ"<?php endif;?>>
		  <a href="despre.php" tabindex="2" title="Informatii despre liceu" accesskey="D" class="positiv"><i class="far fa-sticky-note"></i>
			  Despre liceu
				  
		   </a>
			<ul class="dropdown">
				<li><a href="misiune.php" tabindex="7" title="Misiune si viziune liceu" accesskey="M" class="positiv">Misiune si viziune</a></li>
				<li><a href="istoric.php" tabindex="8" title="Istoric liceu" accesskey="I" class="positiv">Istoric</a></li>
				<li><a href="cadre.php" title="Cadre didactice liceu" class="positiv">Cadre didactice</a></li>
				<li><a href="dotari.php" title="Dotari liceu"class="positiv">Dotari</a></li>
			</ul>
		</li>
		
		<li <?php if(isset($page)&& $page =="informatii") : ?> class="activ"<?php endif;?>>
		  <a href="informatii.php" tabindex="3" title="Informatii despre liceu" accesskey="I" class="positiv">
			  <i class="fas fa-check"></i>
			  Informatii</a>
			<ul class= "dropdown">
				<li><a href="examen.php" title="Informatii bac" class="positiv">Examenul de Bacalaureat</a></li>
				<li><a href="admitere.php" class="positiv">Admitere liceu</a></li>
				<li><a href="documente.php" class="positiv">Documente</a></li>

			</ul>
		</li>
		
		<li <?php if(isset($page)&& $page =="comunitate") : ?> class="activ"<?php endif;?>>
		  <a href="comunitate.php" tabindex="4" title="Conducere si personal" accesskey="C" class="positiv">
			  <i class="fas fa-hands-helping"></i>
			  Comunitate</a>
			<ul class="dropdown">
				<li><a href="asociatia.php" class="positiv">Proiecte</a></li>
				<li><a href="cluburi.php" class="positiv">Activitati</a></li>
				<li><a href="parteneriate.php" class="positiv">Parteneriate</a></li>
			</ul>
		</li>
		
		<li <?php if(isset($page)&& $page =="rezultate") : ?> class="activ"<?php endif;?>>
		  <a href="rezultate.php" tabindex="5" title="Rezultate elevi" accesskey="R" class="positiv"> <i class="fas fa-book-open"></i> Catalog</a>
		</li>
		
		<li<?php if(isset($page)&& $page =="contact") : ?> class="activ"<?php endif;?>>
		  <a href="contact.php" tabindex="6" title="Adresa si telefon" accesskey="X" class="positiv"> <i class="fas fa-paper-plane"></i> Contact</a>
		</li>
	</ul>
</nav>
</header>
