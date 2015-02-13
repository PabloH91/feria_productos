<?php require_once("../app/config.php"); ?>
<?php require_once("../app/functions.php"); ?>

<?php include(TEMPLATES_PATH . "/header.php"); ?>

        <ul class="nav nav-tabs pull-right">
            <li role="presentation"><a href="index.php">Home</a></li>
            <li role="presentation" class="active"><a href="about.php">About</a></li>
            <li role="presentation"><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <h2 class="text-muted">Feria del Productor</h2>
</div>
<div class="container">
	<div class="row">
		<article class="col-sm-8 col-sm-offset-1 col-sm-push-3">
			<h3>Article</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa natus facilis id omnis error neque alias quam debitis labore laudantium dicta est molestias quibusdam laboriosam, accusantium architecto, nostrum animi? Et!</p>
		</article>
		<aside class="col-sm-3 col-sm-pull-9">
			<h3>Aside</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, nemo, nesciunt? Labore non quia, veniam nobis nesciunt quasi enim quis ut adipisci, consequuntur dolores, earum, sit asperiores nemo voluptatibus! Est.</p>
		</aside>
	</div>
</div>
<?php include(TEMPLATES_PATH . "/footer.php"); ?>