const buildJumpNav = ( element ) => {
	if ( ! element ) {
		return;
	}

	const allElements = document.querySelectorAll(element);
	let jumpNav       = document.querySelector('.wp-block-kdc-table-of-contents-sticky-nav .toc-list');

	if (jumpNav) {

		allElements.forEach((el, index) => {

			// LIST NAV
			// make a copy of the element for use in the jump nav
			let elClone = el.cloneNode(true);

			// Build custom ID for each element based on the index
			let elId = `heading-${index}`;

			// create an anchor tag
			let a = document.createElement('a');

			// set the anchor tag href
			a.href = '#' + elId;

			// create a list item to hold the element text
			let li = document.createElement('li');

			// append the anchor to the list item
			li.append(a);

			// set the inner text of the list item to the text of the element
			a.innerText = elClone.innerText;

			// add the id to each element
			el.setAttribute('id', elId);

			li.setAttribute('data-target', el.getAttribute('id'));

			// add a class to each element to differentiate h2 vs. h3
			if ( el.tagName === 'H3' ) {
				li.classList.add( 'subheading' );
			} else {
				li.classList.add( 'heading' );
			}

			jumpNav.append(li);

		});
	}
};

buildJumpNav('.entry-content h2, .entry-content h3');

// Find the H3 / subheading items, wrap them in their own UL, and append to respective H2 / heading item
// Get the list item elements from within the table of contents
const listItems = document.querySelectorAll('.wp-block-kdc-table-of-contents-sticky-nav li');

const initListItemAppend = ( elements ) => {
	if ( ! elements ) {
		return;
	}

	let currentUl = null;

	elements.forEach((item) => {
		if (item.classList.contains('heading') && item.nextElementSibling !== null) {
			// Append UL element to items with heading class if followed by subheading elements
			currentUl = document.createElement('ul');
			item.appendChild(currentUl);
		}
		if (item.classList.contains('subheading') && currentUl !== null) {
			// If subheading found after heading, append it to the current ul element
			currentUl.appendChild(item.cloneNode(true)); // Append subheading directly to the ul
			// Remove the original subheading element
			item.parentNode.removeChild(item);
		}
	});
}

if ( listItems.length > 0 ) {
	initListItemAppend(listItems);
}
