const showMoreBtn = document.querySelector('.show-more-btn');
const description = document.querySelector('.description');

showMoreBtn.addEventListener('click', () => {
  if (description.style.maxHeight === '100px') {
    description.style.maxHeight = 'none';
    showMoreBtn.textContent = 'Show less';
  } else {
    description.style.maxHeight = '100px';
    showMoreBtn.textContent = 'Show more';
  }
});
