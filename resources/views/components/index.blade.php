@extends('layouts.header')

@section('content')
<div class="row">
    <div class="col-md-12 mb-5">
        <div class="component-custom-card">
            <div class="component-custom-card-header">
                <h5 class="component-custom-card-title mb-0">Components</h5>
                <div class="component-filter-group">
                    <input type="text" id="componentSearchFilter" class="form-control form-control-sm" placeholder="Search..." style="width: 200px;">
                    <select id="componentCategoryFilter" class="form-select form-select-sm" style="width: 150px;">
                        <option value="">All Categories</option>
                        <option value="RAM">RAM</option>
                        <option value="Storage">Storage</option>
                        <option value="CPU">CPU</option>
                        <option value="GPU">GPU</option>
                        <option value="Motherboard">Motherboard</option>
                        <option value="PSU">PSU</option>
                        <option value="Cooling">Cooling</option>
                    </select>
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addComponentModal" style="height: 31px; font-size: 12px;">
                        <i class="ri-add-line"></i> Add Component
                    </button>
                    <button class="component-btn-export" onclick="exportComponentToCSV()">
                        <i class="ri-file-excel-line"></i> Export CSV
                    </button>
                </div>
            </div>
            <div class="component-custom-card-body">
                <div class="component-table-responsive">
                    <table class="component-simple-table" id="componentsTable">
                        <thead>
                            <tr>
                                <th class="component-sortable" data-column="0">Name</th>
                                <th class="component-sortable" data-column="1">Serial</th>
                                <th class="component-sortable" data-column="2">Category</th>
                                <th class="component-sortable" data-column="3">Model No.</th>
                                <th class="component-sortable" data-column="4">Location</th>
                                <th data-column="5">Order Number</th>
                                <th class="component-sortable" data-column="6">Purchase Date</th>
                                <th class="component-sortable" data-column="7">Min. QTY</th>
                                <th class="component-sortable" data-column="8">Total</th>
                                <th class="component-sortable" data-column="9">Remaining</th>
                                <th class="component-sortable component-text-right" data-column="10">Unit Cost</th>
                                <th class="component-sortable component-text-right" data-column="11">Total Cost</th>
                                <th data-column="12">Checkin/Checkout</th>
                                <th data-column="13">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="componentTableBody">
                            <tr data-name="Kingston HyperX DDR4" data-serial="KHX-3200-16GB-001" data-category="RAM" data-model="HX432C16FB3/16" data-location="Warehouse A - Shelf 12" data-order="ORD-2024-101" data-purchase="2024-01-10" data-minqty="5" data-total="50" data-remaining="15" data-unitcost="85.00" data-totalcost="4250.00" data-created="2024-01-10" data-updated="2024-11-12">
                                <td>Kingston HyperX DDR4</td>
                                <td>KHX-3200-16GB-001</td>
                                <td>RAM</td>
                                <td>HX432C16FB3/16</td>
                                <td>Warehouse A - Shelf 12</td>
                                <td>ORD-2024-101</td>
                                <td>2024-01-10</td>
                                <td>5</td>
                                <td>50</td>
                                <td>15</td>
                                <td class="component-text-right">₱85.00</td>
                                <td class="component-text-right">₱4,250.00</td>
                                <td><button class="btn btn-sm btn-primary">Checkout</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button 
                                        class="btn btn-sm btn-outline-secondary" 
                                        type="button" 
                                        data-bs-toggle="dropdown" 
                                        aria-expanded="false"
                                        >
                                        <i class="ri-more-2-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" target="_blank" rel="noopener noreferrer">
                                            <i class="ri-eye-line me-2"></i> View
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                            <i class="ri-edit-line me-2"></i> Edit
                                            </a>
                                        </li>
                                        <li>
                                            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this component?');">
                                            <button type="submit" class="dropdown-item text-danger">
                                                <i class="ri-delete-bin-line me-2"></i> Delete
                                            </button>
                                            </form>
                                        </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr data-name="Samsung 970 EVO Plus" data-serial="SSD-970EP-1TB-045" data-category="Storage" data-model="MZ-V7S1T0BW" data-location="Warehouse A - Shelf 08" data-order="ORD-2024-089" data-purchase="2024-02-15" data-minqty="10" data-total="100" data-remaining="32" data-unitcost="120.00" data-totalcost="12000.00" data-created="2024-02-15" data-updated="2024-11-10">
                                <td>Samsung 970 EVO Plus</td>
                                <td>SSD-970EP-1TB-045</td>
                                <td>Storage</td>
                                <td>MZ-V7S1T0BW</td>
                                <td>Warehouse A - Shelf 08</td>
                                <td>ORD-2024-089</td>
                                <td>2024-02-15</td>
                                <td>10</td>
                                <td>100</td>
                                <td>32</td>
                                <td class="component-text-right">₱120.00</td>
                                <td class="component-text-right">₱12,000.00</td>
                                <td><button class="btn btn-sm btn-primary">Checkout</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button 
                                        class="btn btn-sm btn-outline-secondary" 
                                        type="button" 
                                        data-bs-toggle="dropdown" 
                                        aria-expanded="false"
                                        >
                                        <i class="ri-more-2-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" target="_blank" rel="noopener noreferrer">
                                            <i class="ri-eye-line me-2"></i> View
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                            <i class="ri-edit-line me-2"></i> Edit
                                            </a>
                                        </li>
                                        <li>
                                            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this component?');">
                                            <button type="submit" class="dropdown-item text-danger">
                                                <i class="ri-delete-bin-line me-2"></i> Delete
                                            </button>
                                            </form>
                                        </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr data-name="Intel Core i7-13700K" data-serial="CPU-I7-13700K-023" data-category="CPU" data-model="BX8071513700K" data-location="Warehouse B - Shelf 03" data-order="ORD-2024-067" data-purchase="2024-03-20" data-minqty="3" data-total="25" data-remaining="8" data-unitcost="420.00" data-totalcost="10500.00" data-created="2024-03-20" data-updated="2024-11-11">
                                <td>Intel Core i7-13700K</td>
                                <td>CPU-I7-13700K-023</td>
                                <td>CPU</td>
                                <td>BX8071513700K</td>
                                <td>Warehouse B - Shelf 03</td>
                                <td>ORD-2024-067</td>
                                <td>2024-03-20</td>
                                <td>3</td>
                                <td>25</td>
                                <td>8</td>
                                <td class="component-text-right">₱420.00</td>
                                <td class="component-text-right">₱10,500.00</td>
                                <td><button class="btn btn-sm btn-primary">Checkout</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button 
                                        class="btn btn-sm btn-outline-secondary" 
                                        type="button" 
                                        data-bs-toggle="dropdown" 
                                        aria-expanded="false"
                                        >
                                        <i class="ri-more-2-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" target="_blank" rel="noopener noreferrer">
                                            <i class="ri-eye-line me-2"></i> View
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                            <i class="ri-edit-line me-2"></i> Edit
                                            </a>
                                        </li>
                                        <li>
                                            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this component?');">
                                            <button type="submit" class="dropdown-item text-danger">
                                                <i class="ri-delete-bin-line me-2"></i> Delete
                                            </button>
                                            </form>
                                        </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr data-name="NVIDIA RTX 4070" data-serial="GPU-RTX4070-012" data-category="GPU" data-model="RTX4070-GAMING-OC" data-location="Warehouse B - Shelf 05" data-order="ORD-2024-134" data-purchase="2024-04-12" data-minqty="2" data-total="15" data-remaining="3" data-unitcost="650.00" data-totalcost="9750.00" data-created="2024-04-12" data-updated="2024-11-08">
                                <td>NVIDIA RTX 4070</td>
                                <td>GPU-RTX4070-012</td>
                                <td>GPU</td>
                                <td>RTX4070-GAMING-OC</td>
                                <td>Warehouse B - Shelf 05</td>
                                <td>ORD-2024-134</td>
                                <td>2024-04-12</td>
                                <td>2</td>
                                <td>15</td>
                                <td class="component-text-warning">3</td>
                                <td class="component-text-right">₱650.00</td>
                                <td class="component-text-right">₱9,750.00</td>
                                <td><button class="btn btn-sm btn-primary">Checkout</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button 
                                        class="btn btn-sm btn-outline-secondary" 
                                        type="button" 
                                        data-bs-toggle="dropdown" 
                                        aria-expanded="false"
                                        >
                                        <i class="ri-more-2-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" target="_blank" rel="noopener noreferrer">
                                            <i class="ri-eye-line me-2"></i> View
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                            <i class="ri-edit-line me-2"></i> Edit
                                            </a>
                                        </li>
                                        <li>
                                            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this component?');">
                                            <button type="submit" class="dropdown-item text-danger">
                                                <i class="ri-delete-bin-line me-2"></i> Delete
                                            </button>
                                            </form>
                                        </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr data-name="ASUS ROG Strix B660" data-serial="MB-ASUS-B660-089" data-category="Motherboard" data-model="ROG-STRIX-B660-F" data-location="Warehouse A - Shelf 15" data-order="ORD-2024-078" data-purchase="2024-01-25" data-minqty="5" data-total="30" data-remaining="12" data-unitcost="250.00" data-totalcost="7500.00" data-created="2024-01-25" data-updated="2024-11-13">
                                <td>ASUS ROG Strix B660</td>
                                <td>MB-ASUS-B660-089</td>
                                <td>Motherboard</td>
                                <td>ROG-STRIX-B660-F</td>
                                <td>Warehouse A - Shelf 15</td>
                                <td>ORD-2024-078</td>
                                <td>2024-01-25</td>
                                <td>5</td>
                                <td>30</td>
                                <td>12</td>
                                <td class="component-text-right">₱250.00</td>
                                <td class="component-text-right">₱7,500.00</td>
                                <td><button class="btn btn-sm btn-primary">Checkout</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button 
                                        class="btn btn-sm btn-outline-secondary" 
                                        type="button" 
                                        data-bs-toggle="dropdown" 
                                        aria-expanded="false"
                                        >
                                        <i class="ri-more-2-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" target="_blank" rel="noopener noreferrer">
                                            <i class="ri-eye-line me-2"></i> View
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                            <i class="ri-edit-line me-2"></i> Edit
                                            </a>
                                        </li>
                                        <li>
                                            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this component?');">
                                            <button type="submit" class="dropdown-item text-danger">
                                                <i class="ri-delete-bin-line me-2"></i> Delete
                                            </button>
                                            </form>
                                        </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr id="componentTotalRow">
                                <td colspan="11" class="component-text-right"><strong>Total:</strong></td>
                                <td class="component-text-right"><strong id="componentTotalCost">₱44,000.00</strong></td>
                                <td colspan="2"></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div id="componentNoResults" class="component-no-results" style="display: none;">
                        No matching records found
                    </div>
                </div>
                <div class="component-pagination-info">
                    <div id="componentPaginationText">Showing 1 to 5 of 5 entries</div>
                    <div class="component-pagination-controls">
                        <button id="componentPrevPage" onclick="changeComponentPage(-1)">Previous</button>
                        <button class="component-active">1</button>
                        <button id="componentNextPage" onclick="changeComponentPage(1)">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.new')
@endsection

@section('js')
<script>
    let componentCurrentPage = 1;
    let componentRowsPerPage = 10;
    let componentAllRows = [];
    let componentFilteredRows = [];
    let componentSortColumn = -1;
    let componentSortDirection = 'asc';

    document.addEventListener('DOMContentLoaded', function() {
        const tbody = document.getElementById('componentTableBody');
        componentAllRows = Array.from(tbody.querySelectorAll('tr'));
        componentFilteredRows = [...componentAllRows];
        
        document.querySelectorAll('.component-sortable').forEach(th => {
            th.addEventListener('click', function() {
                const column = parseInt(this.dataset.column);
                sortComponentTable(column);
            });
        });
        
        updateComponentDisplay();
    });

    document.getElementById('componentSearchFilter')?.addEventListener('input', function() {
        filterComponentTable();
    });

    document.getElementById('componentCategoryFilter')?.addEventListener('change', function() {
        filterComponentTable();
    });

    function filterComponentTable() {
        const searchValue = document.getElementById('componentSearchFilter').value.toLowerCase();
        const categoryValue = document.getElementById('componentCategoryFilter').value.toLowerCase();
        
        componentFilteredRows = componentAllRows.filter(row => {
            const text = row.textContent.toLowerCase();
            const category = row.dataset.category.toLowerCase();
            
            const matchesSearch = text.includes(searchValue);
            const matchesCategory = !categoryValue || category.includes(categoryValue);
            
            return matchesSearch && matchesCategory;
        });
        
        componentCurrentPage = 1;
        updateComponentDisplay();
    }

    function sortComponentTable(column) {
        const headers = document.querySelectorAll('.component-sortable');
        
        if (componentSortColumn === column) {
            componentSortDirection = componentSortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            componentSortDirection = 'asc';
            componentSortColumn = column;
        }
        
        headers.forEach(th => {
            th.classList.remove('component-sorted-asc', 'component-sorted-desc');
            if (parseInt(th.dataset.column) === column) {
                th.classList.add(componentSortDirection === 'asc' ? 'component-sorted-asc' : 'component-sorted-desc');
            }
        });
        
        componentFilteredRows.sort((a, b) => {
            let aVal, bVal;
            
            switch(column) {
                case 0:
                    aVal = a.dataset.name.toLowerCase();
                    bVal = b.dataset.name.toLowerCase();
                    break;
                case 1:
                    aVal = a.dataset.serial.toLowerCase();
                    bVal = b.dataset.serial.toLowerCase();
                    break;
                case 2:
                    aVal = a.dataset.category.toLowerCase();
                    bVal = b.dataset.category.toLowerCase();
                    break;
                case 3:
                    aVal = a.dataset.model.toLowerCase();
                    bVal = b.dataset.model.toLowerCase();
                    break;
                case 4:
                    aVal = a.dataset.location.toLowerCase();
                    bVal = b.dataset.location.toLowerCase();
                    break;
                case 6:
                    aVal = new Date(a.dataset.purchase);
                    bVal = new Date(b.dataset.purchase);
                    break;
                case 7:
                    aVal = parseInt(a.dataset.minqty);
                    bVal = parseInt(b.dataset.minqty);
                    break;
                case 8:
                    aVal = parseInt(a.dataset.total);
                    bVal = parseInt(b.dataset.total);
                    break;
                case 9:
                    aVal = parseInt(a.dataset.remaining);
                    bVal = parseInt(b.dataset.remaining);
                    break;
                case 10:
                    aVal = parseFloat(a.dataset.unitcost);
                    bVal = parseFloat(b.dataset.unitcost);
                    break;
                case 11:
                    aVal = parseFloat(a.dataset.totalcost);
                    bVal = parseFloat(b.dataset.totalcost);
                    break;
                default:
                    aVal = a.cells[column].textContent.toLowerCase();
                    bVal = b.cells[column].textContent.toLowerCase();
            }
            
            if (aVal < bVal) return componentSortDirection === 'asc' ? -1 : 1;
            if (aVal > bVal) return componentSortDirection === 'asc' ? 1 : -1;
            return 0;
        });
        
        updateComponentDisplay();
    }

    function updateComponentDisplay() {
        const tbody = document.getElementById('componentTableBody');
        const noResults = document.getElementById('componentNoResults');
        const totalRow = document.getElementById('componentTotalRow');
        
        tbody.innerHTML = '';
        
        if (componentFilteredRows.length === 0) {
            noResults.style.display = 'block';
            totalRow.style.display = 'none';
            document.querySelector('.component-pagination-info').style.display = 'none';
            return;
        }
        
        noResults.style.display = 'none';
        totalRow.style.display = '';
        document.querySelector('.component-pagination-info').style.display = 'flex';
        
        const start = (componentCurrentPage - 1) * componentRowsPerPage;
        const end = Math.min(start + componentRowsPerPage, componentFilteredRows.length);
        const pageRows = componentFilteredRows.slice(start, end);
        
        pageRows.forEach(row => tbody.appendChild(row.cloneNode(true)));
        
        document.getElementById('componentPaginationText').textContent = 
            `Showing ${start + 1} to ${end} of ${componentFilteredRows.length} entries`;
        
        calculateComponentTotals();
        updateComponentPaginationButtons();
    }

    function calculateComponentTotals() {
        let totalCost = 0;
        
        componentFilteredRows.forEach(row => {
            totalCost += parseFloat(row.dataset.totalcost);
        });
        
        document.getElementById('componentTotalCost').textContent = '₱' + totalCost.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2});
    }

    function updateComponentPaginationButtons() {
        const totalPages = Math.ceil(componentFilteredRows.length / componentRowsPerPage);
        document.getElementById('componentPrevPage').disabled = componentCurrentPage === 1;
        document.getElementById('componentNextPage').disabled = componentCurrentPage === totalPages || totalPages === 0;
    }

    function changeComponentPage(direction) {
        const totalPages = Math.ceil(componentFilteredRows.length / componentRowsPerPage);
        const newPage = componentCurrentPage + direction;
        
        if (newPage >= 1 && newPage <= totalPages) {
            componentCurrentPage = newPage;
            updateComponentDisplay();
        }
    }

    function exportComponentToCSV() {
        const headers = Array.from(document.querySelectorAll('#componentsTable thead th')).map(th => th.textContent.trim());
        let csv = [headers.join(',')];
        
        componentFilteredRows.forEach(row => {
            const cells = Array.from(row.cells).map(cell => {
                let text = cell.textContent.trim();
                text = text.replace(/[\u{1F300}-\u{1F9FF}]/gu, '').replace(/⚠️/g, '').trim();
                return '"' + text.replace(/"/g, '""') + '"';
            });
            csv.push(cells.join(','));
        });
        
        const totalCost = document.getElementById('componentTotalCost').textContent;
        csv.push(`"","","","","","","","","","","Total:","${totalCost}","",""`);
        
        const csvContent = csv.join('\n');
        const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'components-report-' + new Date().toISOString().split('T')[0] + '.csv';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        window.URL.revokeObjectURL(url);
    }
</script>
@endsection