<div class="modal fade" id="addComponentModal" tabindex="-1" aria-labelledby="addComponentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addComponentModalLabel">
                    <i class="ri-add-line me-2"></i>Add New Component
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="componentName" class="form-label">Component Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="componentName" name="component_name" required>
                        </div>

                        <div class="col-md-10">
                            <label for="componentCategoryName" class="form-label">Category <span class="text-danger">*</span></label>
                            <select class="form-select" id="componentCategoryName" name="category_id" required>
                                <option value="">Select a Category</option>
                                <option value="1">RAM</option>
                                <option value="2">Storage</option>
                                <option value="3">CPU</option>
                                <option value="4">GPU</option>
                                <option value="5">Motherboard</option>
                                <option value="6">PSU</option>
                                <option value="7">Cooling</option>
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="button" class="btn btn-sm btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#newCategoryModal" style="height: 40px;">New</button>
                        </div>

                        <div class="col-md-6">
                            <label for="componentQuantity" class="form-label">Quantity <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="componentQuantity" name="quantity" min="1" required>
                        </div>

                        <div class="col-md-6">
                            <label for="componentMinQty" class="form-label">
                                Min. QTY 
                                <i class="ri-information-line" data-bs-toggle="tooltip" title="Minimum quantity threshold"></i>
                            </label>
                            <input type="number" class="form-control" id="componentMinQty" name="min_qty" min="0">
                        </div>

                        <div class="col-md-12">
                            <label for="componentSerial" class="form-label">Serial</label>
                            <input type="text" class="form-control" id="componentSerial" name="serial">
                        </div>

                        <div class="col-md-10">
                            <label for="componentManufacturer" class="form-label">Manufacturer</label>
                            <select class="form-select" id="componentManufacturer" name="manufacturer_id">
                                <option value="">Select a Manufacturer</option>
                                <option value="1">Kingston</option>
                                <option value="2">Samsung</option>
                                <option value="3">Intel</option>
                                <option value="4">NVIDIA</option>
                                <option value="5">ASUS</option>
                                <option value="6">Corsair</option>
                                <option value="7">Noctua</option>
                                <option value="8">Crucial</option>
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="button" class="btn btn-sm btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#newManufacturerModal" style="height: 40px;">New</button>
                        </div>

                        <div class="col-md-12">
                            <label for="componentModelNo" class="form-label">Model No.</label>
                            <input type="text" class="form-control" id="componentModelNo" name="model_no">
                        </div>

                        <div class="col-md-12">
                            <label for="componentCompany" class="form-label">Company</label>
                            <select class="form-select" id="componentCompany" name="company_id">
                                <option value="">Select Company</option>
                                <option value="1">Acme Corp</option>
                                <option value="2">Tech Solutions</option>
                                <option value="3">Global Industries</option>
                            </select>
                        </div>

                        <div class="col-md-10">
                            <label for="componentLocation" class="form-label">Location</label>
                            <select class="form-select" id="componentLocation" name="location_id">
                                <option value="">Select a Location</option>
                                <option value="1">Warehouse A - Shelf 01</option>
                                <option value="2">Warehouse A - Shelf 02</option>
                                <option value="3">Warehouse B - Shelf 01</option>
                                <option value="4">Warehouse B - Shelf 02</option>
                                <option value="5">Storage Room</option>
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="button" class="btn btn-sm btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#newLocationModal" style="height: 40px;">New</button>
                        </div>

                        <div class="col-md-10">
                            <label for="componentSupplier" class="form-label">Supplier</label>
                            <select class="form-select" id="componentSupplier" name="supplier_id">
                                <option value="">Select a Supplier</option>
                                <option value="1">Newegg</option>
                                <option value="2">Amazon</option>
                                <option value="3">CDW</option>
                                <option value="4">B&H Photo</option>
                                <option value="5">Local Distributor</option>
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="button" class="btn btn-sm btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#newSupplierModal" style="height: 40px;">New</button>
                        </div>

                        <div class="col-md-12">
                            <label for="componentOrderNumber" class="form-label">Order Number</label>
                            <input type="text" class="form-control" id="componentOrderNumber" name="order_number">
                        </div>

                        <div class="col-md-12">
                            <label for="componentPurchaseDate" class="form-label">Purchase Date</label>
                            <input type="date" class="form-control" id="componentPurchaseDate" name="purchase_date" placeholder="Select Date (YYYY-MM-DD)">
                        </div>

                        <div class="col-md-12">
                            <label for="componentUnitCost" class="form-label">Unit Cost</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="componentUnitCost" name="unit_cost" step="0.01" min="0">
                                <span class="input-group-text">PHP</span>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="componentNotes" class="form-label">Notes</label>
                            <textarea class="form-control" id="componentNotes" name="notes" rows="3"></textarea>
                        </div>

                        <div class="col-md-12">
                            <label for="componentImage" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" id="componentImage" name="image" accept="image/jpeg,image/png,image/gif,image/webp,image/svg+xml,.avif">
                            <small class="text-muted">Accepted Filetypes are jpg, webp, png, gif, svg, and avif. The maximum upload size allowed is 10000M.</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="ri-save-line me-1"></i>Save Component
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    #addComponentModal .modal-content {
        border-radius: 8px;
        border: none;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    }

    #addComponentModal .modal-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
        padding: 1rem 1.5rem;
    }

    #addComponentModal .modal-title {
        font-weight: 600;
        color: #2c3e50;
    }

    #addComponentModal .modal-body {
        padding: 1.5rem;
        max-height: 70vh;
        overflow-y: auto;
    }

    #addComponentModal .form-label {
        font-weight: 500;
        color: #495057;
        margin-bottom: 0.5rem;
    }

    #addComponentModal .form-control,
    #addComponentModal .form-select {
        border: 1px solid #ced4da;
        border-radius: 4px;
        padding: 0.5rem 0.75rem;
        font-size: 0.95rem;
    }

    #addComponentModal .form-control:focus,
    #addComponentModal .form-select:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }

    #addComponentModal .text-danger {
        color: #dc3545;
    }

    #addComponentModal .text-muted {
        color: #6c757d;
        font-size: 0.875rem;
        margin-top: 0.25rem;
        display: block;
    }

    #addComponentModal .ri-information-line {
        color: #6c757d;
        cursor: help;
        font-size: 1.1rem;
    }

    #addComponentModal .modal-footer {
        background-color: #f8f9fa;
        border-top: 1px solid #dee2e6;
        padding: 1rem 1.5rem;
    }

    #addComponentModal .btn {
        padding: 0.5rem 1rem;
        font-weight: 500;
        border-radius: 4px;
    }

    #addComponentModal .input-group-text {
        background-color: #e9ecef;
        border: 1px solid #ced4da;
    }
</style>

@include('components.new_category')
@include('components.new_manufacturer')
@include('components.new_location')
@include('components.new_supplier')