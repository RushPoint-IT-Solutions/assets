<div class="modal fade" id="newCategoryModal" tabindex="-1" aria-labelledby="newCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title" id="newCategoryModalLabel">Create Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" id="categoryForm">
                @csrf
                <div class="modal-body pt-4">
                    <div class="mb-3">
                        <label for="categoryName" class="form-label fw-semibold">Name:</label>
                        <input type="text" class="form-control" id="categoryName" name="name" required>
                    </div>
                </div>
                <div class="modal-footer border-0 pt-0">
                    <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary px-4">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    #newCategoryModal .modal-content {
        border-radius: 8px;
        border: none;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    }

    #newCategoryModal .modal-header {
        padding: 1.5rem 1.5rem 0;
    }

    #newCategoryModal .modal-title {
        font-size: 1.25rem;
        font-weight: 400;
        color: #2c3e50;
    }

    #newCategoryModal .modal-body {
        padding: 1rem 1.5rem;
    }

    #newCategoryModal .form-label {
        font-weight: 600;
        color: #495057;
        margin-bottom: 0.5rem;
        font-size: 0.95rem;
    }

    #newCategoryModal .form-control {
        border: 1px solid #ced4da;
        border-radius: 4px;
        padding: 0.5rem 0.75rem;
        font-size: 0.95rem;
        border-right: 3px solid #ffc107;
    }

    #newCategoryModal .form-control:focus {
        border-color: #ced4da;
        border-right-color: #ffc107;
        box-shadow: none;
        outline: none;
    }

    #newCategoryModal .modal-footer {
        padding: 0 1.5rem 1.5rem;
        justify-content: space-between;
    }

    #newCategoryModal .btn {
        font-weight: 400;
        border-radius: 4px;
        font-size: 0.95rem;
    }

    #newCategoryModal .btn-secondary {
        background-color: #e9ecef;
        border-color: #e9ecef;
        color: #495057;
    }

    #newCategoryModal .btn-secondary:hover {
        background-color: #dde0e3;
        border-color: #dde0e3;
    }

    #newCategoryModal .btn-primary {
        background-color: #4a7c9e;
        border-color: #4a7c9e;
    }

    #newCategoryModal .btn-primary:hover {
        background-color: #3d6a87;
        border-color: #3d6a87;
    }
</style>

<script>
    document.getElementById('newCategoryModal')?.addEventListener('hidden.bs.modal', function () {
        document.getElementById('categoryForm')?.reset();
    });
</script>