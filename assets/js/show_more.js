const showMore = document.querySelector('.show__more');
const productsLength = document.querySelectorAll('.news__block').length;
let items = 5;

showMore.addEventListener('click', () => {
	items += 3;
	const array = Array.from(document.querySelector('.news__container').children);
	const visItems = array.slice(0, items);

	visItems.forEach(el => el.classList.add('is-visible'));

	if (items >= productsLength) {
		showMore.style.display = 'none';
	}
});