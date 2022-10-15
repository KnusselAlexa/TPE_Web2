{include file = "header.tpl"}
<form action="articleUpdated/{$article->id}" method="POST" class="my-4">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre articulo</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{$article->nombre}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Precio</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="amount" value="{$article->precio}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Descripcion</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="description"
            value="{$article->descripcion}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Stock</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="stock" value="{$article->stock}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Categoria</label>
        <select name="category" class="form-select" id="exampleFormControlInput1">
            {foreach $categories as $category}
                {if {$category->id}=={$article->id_categoria_fk}}
                    <option value="{$category->id}" selected>{$category->nombre_c}</option>
                {else}
                    <option value="{$category->id}">{$category->nombre_c}</option>
                {/if}
            {/foreach}
        </select>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Modificar</button>
</form>
{include file = "footer.tpl"}