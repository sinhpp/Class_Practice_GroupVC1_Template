<div class="container mt-4">
    <h2 class="mb-3">Bootstrap 5 Table List</h2>

    <!-- Search Input -->
    <input class="form-control mb-3" id="searchInput" type="text" placeholder="Search...">

    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="tableBody">
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>+123456789</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm delete-btn">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>jane@example.com</td>
                    <td>+987654321</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm delete-btn">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Michael Johnson</td>
                    <td>michael@example.com</td>
                    <td>+111222333</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm delete-btn">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Emily Brown</td>
                    <td>emily@example.com</td>
                    <td>+444555666</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm delete-btn">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>David Lee</td>
                    <td>david@example.com</td>
                    <td>+777888999</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm delete-btn">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Sarah Wilson</td>
                    <td>sarah@example.com</td>
                    <td>+999888777</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm delete-btn">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Chris Martin</td>
                    <td>chris@example.com</td>
                    <td>+666555444</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm delete-btn">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Olivia Taylor</td>
                    <td>olivia@example.com</td>
                    <td>+333222111</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm delete-btn">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Daniel Anderson</td>
                    <td>daniel@example.com</td>
                    <td>+555666777</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm delete-btn">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Ava Thompson</td>
                    <td>ava@example.com</td>
                    <td>+888999000</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm delete-btn">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
    // Search filter functionality
    document.getElementById('searchInput').addEventListener('keyup', function() {
        let value = this.value.toLowerCase();
        document.querySelectorAll('#tableBody tr').forEach(row => {
            row.style.display = row.innerText.toLowerCase().includes(value) ? '' : 'none';
        });
    });

    // Delete row functionality
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function() {
            if (confirm("Are you sure you want to delete this row?")) {
                this.closest('tr').remove();
            }
        });
    });
</script>
