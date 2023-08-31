function changeImage(imageElement, newImageSrc) {
    imageElement.classList.add('hovered'); // Agrega la clase para aplicar el efecto hover
    imageElement.src = newImageSrc; // Cambia la ruta por la imagen hover
  }
  
  function resetImage(imageElement, originalImageSrc) {
    imageElement.classList.remove('hovered'); // Remueve la clase para quitar el efecto hover
    imageElement.src = originalImageSrc; // Vuelve a la imagen original
  }