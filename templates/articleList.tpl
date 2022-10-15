{include file = "header.tpl"}
<div class="main">
    <table class="table table-dark table-striped-columns">
        <tr>
            <td>Nombre</td>
            <td>{$article->nombre}</td>
        </tr>
        <tr>
            <td>Precio</td>
            <td>{$article->precio}</td>
        </tr>
        <tr>
            <td>Descripcion</td>
            <td>{$article->descripcion}</td>
        </tr>
        <tr>
            <td>Stock</td>
            <td>{$article->stock}</td>
        </tr>
        <tr>
            <td>Categoria</td>
            <td>{$article->nombre_c}</td>
        </tr>
    </table>
</div>
{include file = "footer.tpl"}