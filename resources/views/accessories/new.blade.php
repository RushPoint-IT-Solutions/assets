<div class="modal fade" id="addAccessoryModal" tabindex="-1" aria-labelledby="addAccessoryModalLabel" aria-hidden="true" style="display:none;">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAccessoryModalLabel">
                    <i class="ri-add-line me-2"></i>Add New Accessory
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="accCompany" class="form-label">Company <span class="text-danger">*</span></label>
                            <select class="form-select" id="accCompany" name="company_id" required>
                                <option value="">Select Company</option>
                                <option value="1">Acme Corp</option>
                                <option value="2">Tech Solutions</option>
                                <option value="3">Global Industries</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="accName" class="form-label">Accessory Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="accName" name="accessory_name" required>
                        </div>

                        <div class="col-md-10">
                            <label for="accCategory" class="form-label">Category <span class="text-danger">*</span></label>
                            <select class="form-select" id="accCategory" name="category_id" required>
                                <option value="">Select a Category</option>
                                <option value="1">Mouse</option>
                                <option value="2">Keyboard</option>
                                <option value="3">Monitor</option>
                                <option value="4">Cable</option>
                                <option value="5">Webcam</option>
                                <option value="6">Headset</option>
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="button" class="btn btn-sm btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#newCategoryModal" style="height: 40px;">New</button>
                        </div>

                        <div class="col-md-10">
                            <label for="accSupplier" class="form-label">Supplier</label>
                            <select class="form-select" id="accSupplier" name="supplier_id">
                                <option value="">Select a Supplier</option>
                                <option value="1">Tech Supplies Inc</option>
                                <option value="2">Office Depot</option>
                                <option value="3">Amazon Business</option>
                                <option value="4">Best Buy</option>
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="button" class="btn btn-sm btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#newSupplierModal" style="height: 40px;">New</button>
                        </div>

                        <div class="col-md-10">
                            <label for="accManufacturer" class="form-label">Manufacturer</label>
                            <select class="form-select" id="accManufacturer" name="manufacturer_id">
                                <option value="">Select a Manufacturer</option>
                                <option value="1">Logitech</option>
                                <option value="2">Dell</option>
                                <option value="3">Microsoft</option>
                                <option value="4">HP</option>
                                <option value="5">Keychron</option>
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="button" class="btn btn-sm btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#newManufacturerModal" style="height: 40px;">New</button>
                        </div>

                        <div class="col-md-10">
                            <label for="accLocation" class="form-label">Location</label>
                            <select class="form-select" id="accLocation" name="location_id">
                                <option value="">Select a Location</option>
                                <option value="1">IT Storage Room</option>
                                <option value="2">Office Floor 1</option>
                                <option value="3">Office Floor 2</option>
                                <option value="4">Warehouse</option>
                                <option value="5">Cable Storage</option>
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="button" class="btn btn-sm btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#newLocationModal" style="height: 40px;">New</button>
                        </div>

                        <div class="col-md-12">
                            <label for="accModelNo" class="form-label">Model No.</label>
                            <input type="text" class="form-control" id="accModelNo" name="model_no">
                        </div>

                        <div class="col-md-12">
                            <label for="accOrderNumber" class="form-label">Order Number</label>
                            <input type="text" class="form-control" id="accOrderNumber" name="order_number">
                        </div>

                        <div class="col-md-12">
                            <label for="accPurchaseDate" class="form-label">Purchase Date</label>
                            <input type="date" class="form-control" id="accPurchaseDate" name="purchase_date">
                        </div>

                        <div class="col-md-12">
                            <label for="accUnitCost" class="form-label">Unit Cost</label>
                            <div class="input-group">
                                <span class="input-group-text">PHP</span>
                                <input type="number" class="form-control" id="accUnitCost" name="unit_cost" step="0.01" min="0">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="accQuantity" class="form-label">Quantity <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="accQuantity" name="quantity" min="1" required>
                        </div>

                        <div class="col-md-6">
                            <label for="accMinQty" class="form-label">
                                Min. QTY 
                                <i class="ri-information-line" data-bs-toggle="tooltip" title="Minimum quantity threshold"></i>
                            </label>
                            <input type="number" class="form-control" id="accMinQty" name="min_qty" min="0">
                        </div>

                        <div class="col-md-12">
                            <label for="accNotes" class="form-label">Notes</label>
                            <textarea class="form-control" id="accNotes" name="notes" rows="3"></textarea>
                        </div>

                        <div class="col-md-12">
                            <label for="accUploadImage" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" id="accUploadImage" name="image" accept=".jpg,.jpeg,.webp,.png,.gif,.svg,.avif">
                            <small class="form-text text-muted">
                                Accepted filetypes are jpg, webp, png, gif, svg, and avif. The maximum upload size allowed is 10000M.
                            </small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="ri-save-line me-1"></i>Save Accessory
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    #addAccessoryModal .modal-content {
        border-radius: 8px;
        border: none;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    }

    #addAccessoryModal .modal-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
        padding: 1rem 1.5rem;
    }

    #addAccessoryModal .modal-title {
        font-weight: 600;
        color: #2c3e50;
    }
    

    #addAccessoryModal .modal-body {
        padding: 1.5rem;
        max-height: 70vh;
        overflow-y: auto;
    }

    #addAccessoryModal .form-label {
        font-weight: 500;
        color: #495057;
        margin-bottom: 0.5rem;
    }

    #addAccessoryModal .form-control,
    #addAccessoryModal .form-select {
        border: 1px solid #ced4da;
        border-radius: 4px;
        padding: 0.5rem 0.75rem;
        font-size: 0.95rem;
    }

    #addAccessoryModal .form-control:focus,
    #addAccessoryModal .form-select:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }

    #addAccessoryModal .text-danger {
        color: #dc3545;
    }

    #addAccessoryModal .ri-information-line {
        color: #6c757d;
        cursor: help;
        font-size: 1.1rem;
    }

    #addAccessoryModal .modal-footer {
        background-color: #f8f9fa;
        border-top: 1px solid #dee2e6;
        padding: 1rem 1.5rem;
    }

    #addAccessoryModal .btn {
        padding: 0.5rem 1rem;
        font-weight: 500;
        border-radius: 4px;
    }

    #addAccessoryModal .form-check-input {
        width: 1.2em;
        height: 1.2em;
        margin-top: 0.15em;
    }

    #addAccessoryModal .form-check-label {
        margin-left: 0.5rem;
        font-weight: 500;
    }
</style>

@include('accessories.new_category')
@include('accessories.new_manufacturer')
@include('accessories.new_supplier')
@include('accessories.new_location')