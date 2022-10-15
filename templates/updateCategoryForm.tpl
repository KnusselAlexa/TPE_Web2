{include file = "header.tpl"}
<form action="categoryUpdated/{$category->id}" method="POST" class="my-4">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre categoria</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name_c"
            value="{$category->nombre_c}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tipo</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="type" value="{$category->tipo}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Responsable</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="manager"
            value="{$category->responsable}">
    </div>
    <button type="submit" class="btn btn-primary mt-2">Modificar</button>
</form>
{include file = "footer.tpl"}