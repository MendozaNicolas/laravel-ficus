<!-- Modal -->
<div class="modal fade" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add item</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/items/create" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input autocomplete="off" type="text" class="form-control" name="name" id="floatingInput"
                            placeholder="name">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input autocomplete="off" type="text" class="form-control" name="description"
                            id="floatingInput" placeholder="description">
                        <label for="floatingInput">Description</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input autocomplete="off" type="number" class="form-control" name="quantity" id="floatingInput"
                            placeholder="quantity" min="1">
                        <label for="floatingInput">Quantity</label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>

        </div>
    </div>
</div>
