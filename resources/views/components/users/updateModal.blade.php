<!-- Modal -->
<div class="modal fade" id="updateModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Update user</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/users/update" method="POST">
                @csrf
                <div class="modal-body">
                    <input hidden autocomplete="off" type="number" class="form-control" name="id"
                        id="user-update-id">
                    <div class="form-floating mb-3">
                        <input autocomplete="off" type="text" class="form-control" name="username"
                            id="user-update-username" placeholder="username">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input autocomplete="off" type="text" class="form-control" name="name"
                            id="user-update-name" placeholder="name">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input autocomplete="off" type="password" class="form-control" name="password"
                            id="user-update-password" placeholder="password" min="1">
                        <label for="password">Password</label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>

        </div>
    </div>
</div>
