<!-- Modal -->
<div class="modal fade" id="readModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="read-title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="item-read-title">itemName</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating mb-3">
                    <input disabled autocomplete="off" type="text" class="form-control" name="name"
                        id="item-read-name" placeholder="name">
                    <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input disabled autocomplete="off" type="text" class="form-control" name="description"
                        id="item-read-description" placeholder="description">
                    <label for="floatingInput">Description</label>
                </div>
                <div class="form-floating mb-3">
                    <input disabled autocomplete="off" type="number" class="form-control" name="quantity"
                        id="item-read-quantity" placeholder="quantity" min="1">
                    <label for="floatingInput">Quantity</label>
                </div>

            </div>

        </div>
    </div>
</div>
