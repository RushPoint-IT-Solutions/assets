<div class="modal fade" id="newManufacturerModal" tabindex="-1" aria-labelledby="newManufacturerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title" id="newManufacturerModalLabel">Create Manufacturer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" id="manufacturerForm">
                @csrf
                <div class="modal-body pt-4">
                    <div class="mb-3">
                        <label for="manufacturerName" class="form-label fw-semibold">Name:</label>
                        <input type="text" class="form-control" id="manufacturerName" name="name" required>
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
    #newManufacturerModal .modal-content {
        border-radius: 8px;
        border: none;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    }

    #newManufacturerModal .modal-header {
        padding: 1.5rem 1.5rem 0;
    }

    #newManufacturerModal .modal-title {
        font-size: 1.25rem;
        font-weight: 400;
        color: #2c3e50;
    }

    #newManufacturerModal .modal-body {
        padding: 1rem 1.5rem;
    }

    #newManufacturerModal .form-label {
        font-weight: 600;
        color: #495057;
        margin-bottom: 0.5rem;
        font-size: 0.95rem;
    }

    #newManufacturerModal .form-control {
        border: 1px solid #ced4da;
        border-radius: 4px;
        padding: 0.5rem 0.75rem;
        font-size: 0.95rem;
        border-right: 3px solid #ffc107;
    }

    #newManufacturerModal .form-control:focus {
        border-color: #ced4da;
        border-right-color: #ffc107;
        box-shadow: none;
        outline: none;
    }

    #newManufacturerModal .modal-footer {
        padding: 0 1.5rem 1.5rem;
        justify-content: space-between;
    }

    #newManufacturerModal .btn {
        font-weight: 400;
        border-radius: 4px;
        font-size: 0.95rem;
    }

    #newManufacturerModal .btn-secondary {
        background-color: #e9ecef;
        border-color: #e9ecef;
        color: #495057;
    }

    #newManufacturerModal .btn-secondary:hover {
        background-color: #dde0e3;
        border-color: #dde0e3;
    }

    #newManufacturerModal .btn-primary {
        background-color: #4a7c9e;
        border-color: #4a7c9e;
    }

    #newAccessoryManufacturerModal .btn-primary:hover {
        background-color: #3d6a87;
        border-color: #3d6a87;
    }
</style>

<script>
    document.getElementById('newManufacturerModal')?.addEventListener('hidden.bs.modal', function () {
        document.getElementById('manufacturerForm')?.reset();
    });
</script>