<div class="modal fade" id="addLicenseModal" tabindex="-1" aria-labelledby="addLicenseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addLicenseModalLabel">
                    <i class="ri-add-line me-2"></i>Add New License
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="softwareName" class="form-label">Software Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="softwareName" name="software_name" required>
                        </div>

                        <div class="col-md-10">
                            <label for="categoryName" class="form-label">Category Name <span class="text-danger">*</span></label>
                            <select class="form-select" id="categoryName" name="category_id" required>
                                <option value="">Select a Category</option>
                                <option value="1">Productivity</option>
                                <option value="2">Design</option>
                                <option value="3">Infrastructure</option>
                                <option value="4">Engineering</option>
                                <option value="5">Communication</option>
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="button" class="btn btn-sm btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#newCategoryModal" style="height: 40px;">New</button>
                        </div>

                        <div class="col-md-6">
                            <label for="seats" class="form-label">Seats <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="seats" name="seats" min="1" required>
                        </div>

                        <div class="col-md-6">
                            <label for="minQty" class="form-label">
                                Min. QTY 
                                <i class="ri-information-line" data-bs-toggle="tooltip" title="Minimum quantity threshold"></i>
                            </label>
                            <input type="number" class="form-control" id="minQty" name="min_qty" min="0">
                        </div>

                        <div class="col-md-12">
                            <label for="productKey" class="form-label">Product Key</label>
                            <textarea class="form-control" id="productKey" name="product_key" rows="3"></textarea>
                        </div>

                        <div class="col-md-12">
                            <label for="company" class="form-label">Company <span class="text-danger">*</span></label>
                            <select class="form-select" id="company" name="company_id" required>
                                <option value="">Select Company</option>
                                <option value="1">Acme Corp</option>
                                <option value="2">Tech Solutions</option>
                                <option value="3">Global Industries</option>
                            </select>
                        </div>

                        <div class="col-md-10">
                            <label for="manufacturer" class="form-label">Manufacturer</label>
                            <select class="form-select" id="manufacturer" name="manufacturer_id">
                                <option value="">Select a Manufacturer</option>
                                <option value="1">Microsoft</option>
                                <option value="2">Adobe</option>
                                <option value="3">Autodesk</option>
                                <option value="4">Slack Technologies</option>
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="button" class="btn btn-sm btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#newManufacturerModal" style="height: 40px;">New</button>
                        </div>

                        <div class="col-md-6">
                            <label for="licensedToName" class="form-label">Licensed to Name</label>
                            <input type="text" class="form-control" id="licensedToName" name="licensed_to_name">
                        </div>

                        <div class="col-md-6">
                            <label for="licensedToEmail" class="form-label">Licensed to Email</label>
                            <input type="email" class="form-control" id="licensedToEmail" name="licensed_to_email">
                        </div>

                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="reassignable" name="reassignable" value="1" checked>
                                <label class="form-check-label" for="reassignable">
                                    Reassignable
                                </label>
                            </div>
                        </div>

                        <div class="col-md-10">
                            <label for="supplier" class="form-label">Supplier</label>
                            <select class="form-select" id="supplier" name="supplier_id">
                                <option value="">Select a Supplier</option>
                                <option value="1">Microsoft Store</option>
                                <option value="2">Adobe Direct</option>
                                <option value="3">CDW</option>
                                <option value="4">Autodesk Reseller</option>
                                <option value="5">Slack Sales</option>
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="button" class="btn btn-sm btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#newSupplierModal" style="height: 40px;">New</button>
                        </div>

                        <div class="col-md-6">
                            <label for="orderNumber" class="form-label">Order Number</label>
                            <input type="text" class="form-control" id="orderNumber" name="order_number">
                        </div>

                        <div class="col-md-6">
                            <label for="purchaseCost" class="form-label">Purchase Cost</label>
                            <div class="input-group">
                                <span class="input-group-text">PHP</span>
                                <input type="number" class="form-control" id="purchaseCost" name="purchase_cost" step="0.01" min="0">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="purchaseDate" class="form-label">Purchase Date</label>
                            <input type="date" class="form-control" id="purchaseDate" name="purchase_date">
                        </div>

                        <div class="col-md-4">
                            <label for="expirationDate" class="form-label">Expiration Date</label>
                            <input type="date" class="form-control" id="expirationDate" name="expiration_date">
                        </div>

                        <div class="col-md-4">
                            <label for="terminationDate" class="form-label">Termination Date</label>
                            <input type="date" class="form-control" id="terminationDate" name="termination_date">
                        </div>

                        <div class="col-md-12">
                            <label for="poNumber" class="form-label">Purchase Order Number</label>
                            <input type="text" class="form-control" id="poNumber" name="po_number">
                        </div>

                        <div class="col-md-12">
                            <label for="depreciation" class="form-label">Depreciation</label>
                            <select class="form-select" id="depreciation" name="depreciation">
                                <option value="">Do Not Depreciate</option>
                                <option value="12">Straight Line (12 months)</option>
                                <option value="24">Straight Line (24 months)</option>
                                <option value="36">Straight Line (36 months)</option>
                                <option value="48">Straight Line (48 months)</option>
                                <option value="60">Straight Line (60 months)</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="maintained" name="maintained" value="1">
                                <label class="form-check-label" for="maintained">
                                    Maintained
                                </label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="notes" class="form-label">Notes</label>
                            <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="ri-save-line me-1"></i>Save License
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    #addLicenseModal .modal-content {
        border-radius: 8px;
        border: none;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    }

    #addLicenseModal .modal-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
        padding: 1rem 1.5rem;
    }

    #addLicenseModal .modal-title {
        font-weight: 600;
        color: #2c3e50;
    }
    

    #addLicenseModal .modal-body {
        padding: 1.5rem;
        max-height: 70vh;
        overflow-y: auto;
    }

    #addLicenseModal .form-label {
        font-weight: 500;
        color: #495057;
        margin-bottom: 0.5rem;
    }

    #addLicenseModal .form-control,
    #addLicenseModal .form-select {
        border: 1px solid #ced4da;
        border-radius: 4px;
        padding: 0.5rem 0.75rem;
        font-size: 0.95rem;
    }

    #addLicenseModal .form-control:focus,
    #addLicenseModal .form-select:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }

    #addLicenseModal .text-danger {
        color: #dc3545;
    }

    #addLicenseModal .ri-information-line {
        color: #6c757d;
        cursor: help;
        font-size: 1.1rem;
    }

    #addLicenseModal .modal-footer {
        background-color: #f8f9fa;
        border-top: 1px solid #dee2e6;
        padding: 1rem 1.5rem;
    }

    #addLicenseModal .btn {
        padding: 0.5rem 1rem;
        font-weight: 500;
        border-radius: 4px;
    }

    #addLicenseModal .form-check-input {
        width: 1.2em;
        height: 1.2em;
        margin-top: 0.15em;
    }

    #addLicenseModal .form-check-label {
        margin-left: 0.5rem;
        font-weight: 500;
    }
    
</style>

@include('licenses.new_category')
@include('licenses.new_manufacturer')
@include('licenses.new_supplier')