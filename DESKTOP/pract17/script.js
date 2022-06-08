let links = document.querySelectorAll('header a');
links.forEach(link => {
  link.addEventListener('click', async function (e) {
    e.preventDefault();
    let href = this.href;
    let data = await fetch(href);
    document.querySelector('#container').innerHTML = await data.text();
    window.location.hash = this.getAttribute('data-hash');
  });
});

async function start() {
  let hash = window.location.hash.substring(1);
  if (!hash) {
    hash = 'main';
  }
  let data = await fetch(`${hash}.html`);
  document.querySelector('#container').innerHTML = await data.text();
}
start();

window.addEventListener('hashchange', start);
