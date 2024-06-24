function initialize(elements) {
	function progressBarsUpdate() {
		scrollProgress(elements);
	}

	function scrollProgress(elements) {
		const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
		const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
		const scrolled = ((winScroll / height) * 99.99);

		for (let i = 0; i < elements.length; i++) {
			const element = elements[i];

			if (element) {
				element.style.minWidth = scrolled + "%";
			}
		}
	}

	// When the user scrolls the page, execute scrollProgress
	document.addEventListener("scroll", progressBarsUpdate);
}

const progressBars = document.querySelectorAll(".progressBar");

if (0 < progressBars.length) {
	initialize(progressBars);
}
