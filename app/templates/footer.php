    <footer>
    	Copyright <?php echo date("Y"); ?>, Fernan Castro | Pablo Hernández
    </footer>
    
    <script src="vendor/jquery/jquery-1.11.2.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
<?php
  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>