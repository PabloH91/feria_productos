    <footer>
    	Copyright <?php echo date("Y"); ?>, Fernan Castro | Pablo Hernández
    </footer>
	</body>
</html>
<?php
  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>