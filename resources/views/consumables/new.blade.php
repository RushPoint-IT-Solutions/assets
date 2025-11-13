<div class="modal fade" id="addConsumableModal" tabindex="-1" aria-labelledby="addConsumableModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addConsumableModalLabel">
                    <i class="ri-add-line me-2"></i>Add New Consumable
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="companyConsumable" class="form-label">Company <span class="text-danger">*</span></label>
                            <select class="form-select" id="companyConsumable" name="company_id" required>
                                <option value="">Select Company</option>
                                <option value="1">Acme Corp</option>
                                <option value="2">Tech Solutions</option>
                                <option value="3">Global Industries</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="consumableName" class="form-label">Consumable Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="consumableName" name="consumable_name" required>
                        </div>

                        <div class="col-md-10">
                            <label for="categoryConsumable" class="form-label">Category <span class="text-danger">*</span></label>
                            <select class="form-select" id="categoryConsumable" name="category_id" required>
                                <option value="">Select a Category</option>
                                <option value="1">Office Supplies</option>
                                <option value="2">Printer Supplies</option>
                                <option value="3">Cleaning Supplies</option>
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="button" class="btn btn-sm btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#newCategoryModal" style="height: 40px;">New</button>
                        </div>

                        <div class="col-md-10">
                            <label for="supplierConsumable" class="form-label">Supplier</label>
                            <select class="form-select" id="supplierConsumable" name="supplier_id">
                                <option value="">Select a Supplier</option>
                                <option value="1">Office Depot</option>
                                <option value="2">Staples</option>
                                <option value="3">Amazon Business</option>
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="button" class="btn btn-sm btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#newSupplierModal" style="height: 40px;">New</button>
                        </div>

                        <div class="col-md-10">
                            <label for="manufacturerConsumable" class="form-label">Manufacturer</label>
                            <select class="form-select" id="manufacturerConsumable" name="manufacturer_id">
                                <option value="">Select a Manufacturer</option>
                                <option value="1">HP</option>
                                <option value="2">Canon</option>
                                <option value="3">Epson</option>
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="button" class="btn btn-sm btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#newManufacturerModal" style="height: 40px;">New</button>
                        </div>

                        <div class="col-md-10">
                            <label for="locationConsumable" class="form-label">Location</label>
                            <select class="form-select" id="locationConsumable" name="location_id">
                                <option value="">Select a Location</option>
                                <option value="1">Storage Room A</option>
                                <option value="2">Storage Room B</option>
                                <option value="3">IT Department</option>
                                <option value="4">Supply Cabinet</option>
                                <option value="5">Janitor Closet</option>
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="button" class="btn btn-sm btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#newLocationModal" style="height: 40px;">New</button>
                        </div>

                        <div class="col-md-6">
                            <label for="modelNo" class="form-label">Model No.</label>
                            <input type="text" class="form-control" id="modelNo" name="model_no">
                        </div>

                        <div class="col-md-6">
                            <label for="itemNo" class="form-label">Item No.</label>
                            <input type="text" class="form-control" id="itemNo" name="item_no">
                        </div>

                        <div class="col-md-12">
                            <label for="orderNumber" class="form-label">Order Number</label>
                            <input type="text" class="form-control" id="orderNumber" name="order_number">
                        </div>

                        <div class="col-md-12">
                            <label for="purchaseDate" class="form-label">Purchase Date</label>
                            <input type="date" class="form-control" id="purchaseDate" name="purchase_date" placeholder="Select Date (YYYY-MM-DD)">
                        </div>

                        <div class="col-md-12">
                            <label for="unitCost" class="form-label">Unit Cost</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="unitCost" name="unit_cost" step="0.01" min="0">
                                <span class="input-group-text">PHP</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="quantity" class="form-label">Quantity <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
                        </div>

                        <div class="col-md-6">
                            <label for="minQtyConsumable" class="form-label">
                                Min. QTY 
                                <i class="ri-information-line" data-bs-toggle="tooltip" title="Minimum quantity threshold for reorder alerts"></i>
                            </label>
                            <input type="number" class="form-control" id="minQtyConsumable" name="min_qty" min="0">
                        </div>

                        <div class="col-md-12">
                            <label for="notes" class="form-label">Notes</label>
                            <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
                        </div>

                        <div class="col-md-12">
                            <label for="uploadImage" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" id="uploadImage" name="image" accept=".jpg,.jpeg,.png,.gif,.svg,.webp,.avif">
                            <small class="text-muted d-block mt-1">
                                Accepted Filetypes are jpg, webp, png, gif, svg, and avif. The maximum upload size allowed is 10000M.
                            </small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="ri-save-line me-1"></i>Save Consumable
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    #addConsumableModal .modal-content {
        border-radius: 8px;
        border: none;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    }

    #addConsumableModal .modal-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
        padding: 1rem 1.5rem;
    }

    #addConsumableModal .modal-title {
        font-weight: 600;
        color: #2c3e50;
    }

    #addConsumableModal .modal-body {
        padding: 1.5rem;
        max-height: 70vh;
        overflow-y: auto;
    }

    #addConsumableModal .form-label {
        font-weight: 500;
        color: #495057;
        margin-bottom: 0.5rem;
    }

    #addConsumableModal .form-control,
    #addConsumableModal .form-select {
        border: 1px solid #ced4da;
        border-radius: 4px;
        padding: 0.5rem 0.75rem;
        font-size: 0.95rem;
    }

    #addConsumableModal .form-control:focus,
    #addConsumableModal .form-select:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }

    #addConsumableModal .text-danger {
        color: #dc3545;
    }

    #addConsumableModal .text-muted {
        color: #6c757d;
        font-size: 0.875rem;
    }

    #addConsumableModal .ri-information-line {
        color: #6c757d;
        cursor: help;
        font-size: 1.1rem;
    }

    #addConsumableModal .modal-footer {
        background-color: #f8f9fa;
        border-top: 1px solid #dee2e6;
        padding: 1rem 1.5rem;
    }

    #addConsumableModal .btn {
        padding: 0.5rem 1rem;
        font-weight: 500;
        border-radius: 4px;
    }

    #addConsumableModal .input-group-text {
        background-color: #e9ecef;
        border: 1px solid #ced4da;
    }
</style>

@include('consumables.new_category')
@include('consumables.new_supplier')
@include('consumables.new_manufacturer')
@include('consumables.new_location')