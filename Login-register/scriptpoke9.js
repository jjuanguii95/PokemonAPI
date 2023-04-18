const url = 'https://pokeapi.co/api/v2/pokemon/9/'

fetch(url)
  .then(response => response.json())
  .then(data => {
    let element = document.getElementById('elem')
    element.innerHTML = `
    <p>${data.name} </p>

    <p>${data.order}</p>

    <img src='${data.sprites.front_default}' />
    `
  });

