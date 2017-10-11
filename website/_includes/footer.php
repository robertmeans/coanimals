<footer>
	<div class="footer-container">
		<div class="footer-one">
			<ul>
				<li><a class="footer-nav" href="chiropractic-osteopathy.php">Chiropractic &amp; Osteopathy</a></li>
				<li><a class="footer-nav" href="in-home-euthanasia.php">In-Home Euthanasia</a></li>
				<li><a class="footer-nav" href="hospice.php">Hospice</a></li>
				<li><a class="footer-nav" href="homeopathy.php">Homeopathy</a></li>
				<li><a class="footer-nav" href="western-medicine.php">Western Medicine</a></li>
			</ul>
		</div>
		<div class="footer-two">
			<ul>
				<li><a class="footer-nav" href="appointments.php">Appointments</a></li>
				<li><a class="footer-nav" href="appointments.php">Surgery</a></li>
				<li><a class="footer-nav" href="links.php">Useful Resources</a></li>
			</ul>
		</div>
		<div class="footer-three">
			<ul>
				<li><a class="footer-nav" href="index.php#about">About Dr. Amy Norton</a></li>
				<li><a class="footer-nav" href="index.php#contact">Contact</a></li>
			</ul>
		</div>
	</div>

	<?php
		function ewd_copyright($startYear) {
			$currentYear = date('Y');
			if ($startYear < $currentYear) {
				$currentYear = date('y');
				return "&copy; $startYear&ndash;$currentYear";
			} else {
				return "&copy; $startYear";
			}
		}
	?>	
	<p class="copyright"><?= ewd_copyright(2017); ?> Circle of Animals, LLC | <a class="footer-link" href="http://www.evergreenwebdesign.com" target="_blank">Evergreen Web Design</a></p>

</footer>