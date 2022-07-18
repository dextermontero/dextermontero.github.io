const select = (el, all = false) => {
	el = el.trim()
	if (all) {
		return [...document.querySelectorAll(el)]
	} else {
		return document.querySelector(el)
	}
}		

window.addEventListener('load', () => {
	AOS.init({
		duration: 1000,
		easing: 'ease-in-out',
		once: false,
		mirror: false
	})
});

let skilsContent = select('.skills-content');
if (skilsContent) {
	new Waypoint({
		element: skilsContent,
		offset: '80%',
		handler: function(direction) {
			let progress = select('.progress .progress-bar', true);
			progress.forEach((el) => {
				el.style.width = el.getAttribute('aria-valuenow') + '%'
			});
		}
	})
}