const contenedorTarjetas = document.getElementById("productos-container");

/** Crea las tarjetas de productos teniendo en cuenta la lista en bicicletas.js */
function crearTarjetasProductosInicio(productos){
  productos.forEach(producto => {
    const nuevaEspecial = document.createElement("div");
    nuevaEspecial.classList = "tarjeta-producto"
    nuevaEspecial.innerHTML = `
    <img src="../img/img.especialidades/${producto.id}.webp" alt="Especial 1">
    <h3>${producto.nombre}</h3>
    <p class="precio">$${producto.precio}</p>
    <button>Agregar al carrito</button>`
    contenedorTarjetas.appendChild(nuevaEspecial);
    nuevaEspecial.getElementsByTagName("button")[0].addEventListener("click",() => agregarAlCarrito(producto))
  });
}
crearTarjetasProductosInicio(especiales);