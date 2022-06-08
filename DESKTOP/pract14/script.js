let show_index = 0,
  photos = document.querySelectorAll('.photo');

document.querySelector('#prev').addEventListener('click', function () {
  photos.forEach(photo => {
    photo.classList.remove('show');
  });
  show_index--;
  if (show_index < 0) 
    show_index = photos.length - 1;
  photos[show_index].classList.add('show');
});

document.querySelector('#next').addEventListener('click', function () {
  photos.forEach(photo => {
    photo.classList.remove('show');
  });
  show_index++;
  if (show_index >= photos.length)
    show_index = 0;
  photos[show_index].classList.add('show');
});
