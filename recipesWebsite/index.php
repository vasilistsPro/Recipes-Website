<?php
   require('db.php');
   include 'header.php';
   //Check if a user is logged in or not
   session_start();
   	if (isset($_SESSION['username'])){
   	$username = $_SESSION['username'];
   	//Display a message for logged-in users only
   	echo "<center><h3>Hello " . $username . "
   	!</h3></center>";
   	echo "<center><div><p><a href='dashboard.php'> Dashboard</a><a href='logout.php'> Logout</a></p></div></center>";
   
   	}
   	else{
   	//Display different text if a user is not logged in.
   	echo "<center><h3>Καλώς ήλθατε στη σελίδα με τις συνταγές!</h3></center>";
   			echo '<center><div>New user? Please <a href="login.php">Login</a> or <a href="register.php">Register</a>
   			</div></center>';
   	}
   ?> 
<html>
   <body>
      <header>
      <script>
		function updateLikeCount(card) {
			var likeCounter = card.querySelector(".like-counter");
			var currentCount = parseInt(likeCounter.innerText);
			likeCounter.innerText = currentCount + 1;
		}
	</script>
         <div class="container">
            <h1>Οι συνταγές μας!</h1>
            <?php
               //If the user is logged-in
               if (isset($_SESSION['username'])){
               $username = $_SESSION['username'];
               echo '
               <nav class="navbar navbar-inverse navbar-fixed-top">
               <div class="container">
               	<div class="navbar-header">
               		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               			<span class="sr-only">Toggle navigation</span>
               			<span class="icon-bar"></span>
               			<span class="icon-bar"></span>
               			<span class="icon-bar"></span>
               		</button>
               		<a class="navbar-brand" href="#">My Recipe Site</a>
               	</div>
               <div id="navbar" class="navbar-collapse collapse">
               		<ul class="nav navbar-nav navbar-right">
               			<li class="active"><a href="index.php">
               				<span class="glyphicon glyphicon-home"></span> 
               				Home</a></li>
               			<li><a href="dashboard.php"> Dashboard</a></li>
               			<li><a href="addRecipe.php"> Add Recipe</a></li>
               			<li><a href="logout.php"> Logout</a></li>';
               }
               //If the user is logged-out
               else{
               echo '
               <nav class="navbar navbar-inverse navbar-fixed-top">
               	<div class="container">
               		<div class="navbar-header">
               			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               				<span class="sr-only">Toggle navigation</span>
               				<span class="icon-bar"></span>
               				<span class="icon-bar"></span>
               				<span class="icon-bar"></span>
               			</button>
               			<a class="navbar-brand" href="#">My Recipe Site</a>
               		</div>
               
               	<div id="navbar" class="navbar-collapse collapse">
               			<ul class="nav navbar-nav navbar-right">
               				<li class="active"><a href="index.php">
               					<span class="glyphicon glyphicon-home"></span> 
               					Home</a></li>
               
               	<li><a href="login.php"><span class="glyphicon 
               			glyphicon-log-in"></span> Login</a></li>
               			<li><a href="register.php"><span class="glyphicon 
               			glyphicon-user"></span> Register</a></li>';
               
               }
               
               ?>       
         </div>
      </header>
      <section class="container" >
         <div class="row">
            <div class="col-md-9 content">
               <p class="text-justify">
               
               <div class="container">
		<div class="card">
			<img src="https://as2.ftcdn.net/v2/jpg/02/44/17/79/1000_F_244177956_bsZPhMt5bUrmfteRj1pfiyzCT358rQzJ.jpg" alt="lasagna">
			<h2><strong>Λαζάνια</strong></h2>
			<p>Το λαζάνια είναι ένα επίπεδο και διογκωμένο φύλλο ζυμαρικών, που παρασκευάζεται παραδοσιακά στην Ιταλία με Parmigiano-Reggiano (τυρί παρμεζάνα), σάλτσα μπεσαμέλ (λευκή σάλτσα) και ragù (σάλτσα με βάση το κρέας). Παρά την παραδοσιακή μορφή που εξακολουθεί να είναι δημοφιλής, τα λαζάνια έχουν πάρει πολλές διαφορετικές συνταγές με τα χρόνια.</p>
			<?php if (isset($_SESSION['username'])): ?>
			<div class="like-counter">0 likes</div>
			<button onclick="updateLikeCount(this.parentNode)">Like</button>
			<?php else: ?>
				<?php endif; ?>

		</div>
		<div class="card">
			<img src="https://as2.ftcdn.net/v2/jpg/01/09/14/93/1000_F_109149332_D0TOFEq71ali74RutI4Ims0A87tF2QF5.jpg" alt="carbonara">
			<h2><strong>Καρμπονάρα</strong></h2>
			<p>Μπορεί να μην υπάρχει πιο αγαπημένο ιταλικό πιάτο από την καρμπονάρα: ζεστά ζυμαρικά με μια κρεμώδη σάλτσα από ωμά χτυπημένα αυγά, τονισμένα με τραγανά κομμάτια guanciale και τελειωμένα με ένα ντους τριμμένο παλαιωμένο τυρί Pecorino Romano και φρεσκοτριμμένο μαύρο πιπέρι.</p>
			<?php if (isset($_SESSION['username'])): ?>

			<div class="like-counter">0 likes</div>
			<button onclick="updateLikeCount(this.parentNode)">Like</button>
			<?php else: ?>
				<?php endif; ?>
		</div>
		
      <div class="card">
			<img src="https://as2.ftcdn.net/v2/jpg/00/49/38/79/1000_F_49387974_Hn6wRVRpbrPvdb1jKPRcax6YK3v8fKjm.jpg" alt="fakes">
			<h2><strong>Φακές</strong></h2>
			<p>Η σούπα με φακές είναι μια σούπα με κύριο συστατικό τις φακές. Mπορεί να είναι χορτοφαγικό ή να περιλαμβάνει κρέας και μπορεί να χρησιμοποιεί καφέ, κόκκινες, κίτρινες, πράσινες ή μαύρες φακές, με ή χωρίς το φλοιό. Οι αποφλοιωμένες κίτρινες και κόκκινες φακές διαλύονται στο μαγείρεμα, φτιάχνοντας μια πηχτή σούπα.</p>
			<?php if (isset($_SESSION['username'])): ?>
			<div class="like-counter">0 likes</div>
			<button onclick="updateLikeCount(this.parentNode)">Like</button>
			<?php else: ?>
				<?php endif; ?>
		</div>


		<div class="card">
			<img src="https://as2.ftcdn.net/v2/jpg/04/80/97/55/1000_F_480975547_sDDbo5N9UNHPqirXHhDs1QJ3twKQgmUU.jpg" alt="spanakopita">
			<h2><strong>Σπανακόπιτα</strong></h2>
			<p>Η σπανακόπιτα είναι μια ελληνική συνταγή που αποτελείται από ένα βουτυρωμένο, ξεφλουδισμένο φύλλο με γέμιση από μαγειρεμένο σπανάκι, χυμό λεμονιού, τυρί φέτα και μερικές φορές άνηθο. Μπορεί να σερβιριστεί είτε ως μικρό σνακ, είτε ως ορεκτικό, είτε ως ελαφρύ κυρίως πιάτο.</p>
			<?php if (isset($_SESSION['username'])): ?>
			<div class="like-counter">0 likes</div>
			<button onclick="updateLikeCount(this.parentNode)">Like</button>
			<?php else: ?>
				<?php endif; ?>
		</div>

		<div class="card">
			<img src="https://as2.ftcdn.net/v2/jpg/01/71/22/21/1000_F_171222187_IFisPJeA1fp06pwooiooKIyWCj6NVKwe.jpg" alt="kokoretsi">
			<h2><strong>Κοκορέτσι</strong></h2>
			<p>Το κοκορέτσι είναι ένα παραδοσιακό ελληνικό πιάτο, φτιαγμένο από εντόσθια ψητά στη σούβλα. Σερβίρεται συνήθως σε φέτες ως ορεκτικό. Τρώγεται όλο το χρόνο αλλά προτιμάται ιδιαίτερα ως πασχαλινό πιάτο.</p>
			<?php if (isset($_SESSION['username'])): ?>
			<div class="like-counter">0 likes</div>
			<button onclick="updateLikeCount(this.parentNode)">Like</button>
			<?php else: ?>
				<?php endif; ?>
		</div>
	

   <div class="card">
			<img src="https://as1.ftcdn.net/v2/jpg/04/50/53/22/1000_F_450532270_RrGNY47ISoivVLkfEeKnCM6yvRu1rLxh.jpg" alt="fasolada">
			<h2><strong>Φασολάδα</strong></h2>
			<p>Η Φασολάδα είναι μια δημοφιλής ελληνική συνταγή, που κατά καιρούς αναφέρεται ως το εθνικό φαγητό των Ελλήνων! Τα βασικά συστατικά αυτής της απλής φασολάδας είναι: λευκά φασόλια, σέλινο και εξαιρετικό παρθένο ελαιόλαδο -- στην πραγματικότητα, μια υγιεινή ποσότητα ποιοτικού έξτρα παρθένου ελαιολάδου κάνει τη διαφορά.</p>
			<?php if (isset($_SESSION['username'])): ?>
			<div class="like-counter">0 likes</div>
			<button onclick="updateLikeCount(this.parentNode)">Like</button>
			<?php else: ?>
				<?php endif; ?>
		</div>
	</div>

               </p>
            </div>
         </div>
      </section>
      <footer class="container">
         <?php include 'footer.php'; ?>
      </footer>
   </body>
</html>