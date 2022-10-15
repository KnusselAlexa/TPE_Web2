{include file = "header.tpl"}
<div class="main">
    <table class="table table-dark table-striped-columns">
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Precio</td>
                <td>Descripcion</td>
                <td>Stock</td>
                <td>Categoria</td>
                {if {$email}}
                    <td></td>
                    <td></td>
                {/if}
            </tr>
        </thead>
        <tbody>
            {foreach $articles as $article}
                <tr>
                    <td><a class="item-name" href="detail/{$article->id}" type="button">{$article->nombre}</a></td>
                    <td>{$article->precio}</td>
                    <td>{$article->descripcion|truncate:40}</td>
                    <td>{$article->stock}</td>
                    <td>{$article->nombre_c}</td>
                    {if {$email}}
                        <td><a href='updateArticle/{$article->id}' type='button' class='btn btn-danger'>Modificar</a></td>
                        <td><a href='deleteArticle/{$article->id}' type='button' class='btn btn-danger'>Borrar</a></td>
                    {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>
    {if {$email}}
        {include file = "articleForm.tpl"}
    {/if}
</div>
{include file = "footer.tpl"}