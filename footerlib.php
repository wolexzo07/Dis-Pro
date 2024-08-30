
  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/parallax/jarallax.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/ytplayer/index.js"></script>
  <script src="assets/smart-cart/minicart.js"></script>
  <script src="assets/smart-cart/minicart-customizer.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid.min.js"></script>
  <script>
	$(document).ready(function() {
		
		manageDivs(".record-show" , ".record-result" , ".record-result-close");
		manageDivs(".website-show" , ".website-read" , ".website-read-close");
		manageDivs(".f-show" , ".finance-read" , ".finance-read-close");
		manageDivs(".mobile-show" , ".mobile-read" , ".mobile-read-close");
		manageDivs(".l-show" , ".l-read" , ".l-read-close");
		manageDivs(".pp-show" , ".pp-read" , ".pp-read-close");
		
		// Array of text values
		const texts = [
			'Result Compilation',
			'Financial Management',
			'Standard Website',
			'Customized Mobile App',
			'Digital Marketing',
			'Advance SMS Service',
			'Payment Integration',
			'Online Registration'
		];

		let index = 0; // Index to track the current text
		let charIndex = 0; // Index to track the current character
		const speed = 100; // Speed of typing effect in milliseconds

		function typeText() {
			const currentText = texts[index];
			if (charIndex < currentText.length) {
				$('#changing-text').text($('#changing-text').text() + currentText.charAt(charIndex));
				charIndex++;
				setTimeout(typeText, speed);
			} else {
				setTimeout(() => {
					// Pause before deleting text
					setTimeout(deleteText, 1000);
				}, 2000);
			}
		}

		function deleteText() {
			const currentText = texts[index];
			if (charIndex > 0) {
				$('#changing-text').text(currentText.substring(0, charIndex - 1));
				charIndex--;
				setTimeout(deleteText, speed);
			} else {
				// Move to the next text
				index = (index + 1) % texts.length;
				setTimeout(typeText, 500); // Pause before starting to type next text
			}
		}

		// Start typing effect
		typeText();
	});
	
	function manageDivs(btnClick , contentReveal , contentClose){
		
		$(btnClick).click(function(){
		
			$(contentReveal).show(300);
		
		});
		
		$(contentClose).click(function(){
			
			$(contentReveal).hide(300);
			
		});
	}
</script>