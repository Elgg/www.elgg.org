/* after editing, update ?v in _includes/foot.php */

!function (d) {
	// highlight global and side menu items based on URL.
	var i,
		link,
		found = 0,
		links = d.querySelectorAll('#globalheader li > a');

	for (i = 0; i < links.length; i++) {
		if (location.href === links[i].href) {
			found = 1;
			links[i].className += ' selected';
		}
	}

	links = d.querySelectorAll('a.side-menu');
	for (i = 0; i < links.length; i++) {
		if (location.href === links[i].href) {
			links[i].className += ' selected';

			var wrapper = links[i].parentNode.parentNode.parentNode;
			if (wrapper.getAttribute('data-selector')) {
				link = d.querySelector(wrapper.getAttribute('data-selector'));
				if (link) {
					found = 1;
					link.className += ' selected';
				}
			}
			return;
		}
	}

	if (!found) {
		link = d.querySelector('#community-link');
		if (link) {
			link.className += ' selected';
		}
	}
}(document);
