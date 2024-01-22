function readItemModal(data) {
    document.getElementById('item-read-title').textContent = data.name;
    document.getElementById('item-read-name').value = data.name;
    document.getElementById('item-read-description').value = data.description;
    document.getElementById('item-read-quantity').value = data.quantity;
}

function updateItemModal(data) {
    document.getElementById('item-update-id').value = data.id;
    document.getElementById('item-update-name').value = data.name;
    document.getElementById('item-update-description').value = data.description;
    document.getElementById('item-update-quantity').value = data.quantity;
}

function readUserModal(data) {
    document.getElementById('user-read-title').textContent = data.name;
    document.getElementById('user-read-name').value = data.username;
    document.getElementById('user-read-description').value = data.name;
    document.getElementById('user-read-password').value = data.password;
}

function updateUserModal(data) {
    document.getElementById('user-update-id').value = data.id;
    document.getElementById('user-update-username').value = data.username;
    document.getElementById('user-update-name').value = data.name;
}

function readRoleModal(name, guard_name) {
    document.getElementById('role-read-title').textContent = name;
    document.getElementById('role-read-name').value = name;
    document.getElementById('role-read-guard_name').value = guard_name;
}

function updateRoleModal(id, name, guard_name) {
    document.getElementById('role-update-id').value = id;
    document.getElementById('role-update-name').value = name;
    document.getElementById('role-update-guard_name').value = guard_name;
}

function readPermissionModal(name, guard_name) {
    document.getElementById('permission-read-title').textContent = name;
    document.getElementById('permission-read-name').value = name;
    document.getElementById('permission-read-guard_name').value = guard_name;
}

function updatePermissionModal(id, name, guard_name) {
    document.getElementById('permission-update-id').value = id;
    document.getElementById('permission-update-name').value = name;
    document.getElementById('permission-update-guard_name').value = guard_name;
}