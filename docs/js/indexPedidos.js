const contenedorTarjetas = document.getElementById("productos-container");

/** Crea las tarjetas de productos teniendo en cuenta la lista en bicicletas.js */
function crearTarjetasProductosInicio(productos){
  productos.forEach(producto => {
    const nuevaPedido = document.createElement("div");
    nuevaPedido.classList = "tarjeta-producto"
    nuevaPedido.innerHTML = `
    <img src="../img/img.pedidos/${producto.id}.webp" alt="Pedidos 1">
    <h3>${producto.nombre}</h3>
    <p class="precio">$${producto.precio}</p>
    <button>Agregar al carrito</button>`
    contenedorTarjetas.appendChild(nuevaPedido);
    nuevaPedido.getElementsByTagName("button")[0].addEventListener("click",() => agregarAlCarrito(producto))
  });
}
crearTarjetasProductosInicio(pedidos);