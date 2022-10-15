<form action="addArticle" method="POST" class="my-4">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre articulo</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Precio</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="amount">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Descripcion</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="description">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Stock</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="stock">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Categoria</label>
        <select name="category" class="form-select" id="exampleFormControlInput1">
            {foreach $categories as $category}
                <option value="{$category->id}">{$category->nombre_c}</option>
            {/foreach}
        </select>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Agregar</button>
</form>