{include file = "header.tpl"}
<div class="main">
    <table class="table table-dark table-striped-columns">
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Tipo</td>
                <td>Responsable</td>
                {if {$email}}
                    <td></td>
                    <td></td>
                {/if}
            </tr>
        </thead>
        <tbody>
            {foreach $categories as $category}
                <tr>
                    <td><a class="item-name" href="articles/{$category->id}">{$category->nombre_c}</a></td>
                    <td>{$category->tipo}</td>
                    <td>{$category->responsable}</td>
                    {if {$email}}
                        <td><a href='updateCategory/{$category->id}' type='button' class='btn btn-danger'>Modificar</a></td>
                        <td><a href='deleteCategory/{$category->id}' type='button' class='btn btn-danger'>Borrar</a></td>
                    {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>
    {if {$email}}
        {include file = "categoryForm.tpl"}
    {/if}
</div>
{include file = "footer.tpl"}