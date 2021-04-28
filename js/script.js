const hamburger = document.getElementById("hamburger");
const headerLinks = document.getElementById("header-links");

hamburger.addEventListener('click', () => {
  headerLinks.classList.toggle('show');
});
