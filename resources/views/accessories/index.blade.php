@extends('layouts.header')

@section('content')
<div class="row">
    <div class="col-md-12 mb-5">
        <div class="acc-custom-card">
            <div class="acc-custom-card-header">
                <h5 class="acc-custom-card-title mb-0">Accessories</h5>
                <div class="acc-filter-group">
                    <input type="text" id="accSearchFilter" class="form-control form-control-sm" placeholder="Search..." style="width: 200px;">
                    <select id="accCategoryFilter" class="form-select form-select-sm" style="width: 180px;">
                        <option value="">All Categories</option>
                        <option value="Mouse">Mouse</option>
                        <option value="Keyboard">Keyboard</option>
                        <option value="Monitor">Monitor</option>
                        <option value="Cable">Cable</option>
                    </select>
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addAccessoryModal" style="height: 31px; font-size: 12px;">
                        <i class="ri-add-line"></i> Add Accessory
                    </button>
                    <button class="acc-btn-export" onclick="accExportToCSV()">
                        <i class="ri-file-excel-line"></i> Export CSV
                    </button>
                </div>
            </div>
            <div class="acc-custom-card-body">
                <div class="acc-table-responsive">
                    <table class="acc-simple-table" id="accessoriesTable">
                        <thead>
                            <tr>
                                <th data-column="0">Device Image</th>
                                <th class="acc-sortable" data-column="1">Name</th>
                                <th class="acc-sortable" data-column="2">Accessory Category</th>
                                <th class="acc-sortable" data-column="3">Model No.</th>
                                <th class="acc-sortable" data-column="4">Location</th>
                                <th class="acc-sortable" data-column="5">Min. QTY</th>
                                <th class="acc-sortable" data-column="6">Total</th>
                                <th class="acc-sortable" data-column="7">Checked Out</th>
                                <th class="acc-sortable acc-text-right" data-column="8">Unit Cost</th>
                                <th class="acc-sortable acc-text-right" data-column="9">Total Cost</th>
                                <th data-column="10">In/Out</th>
                                <th data-column="11">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="accTableBody">
                            <tr data-name="Logitech MX Master 3S" data-category="Mouse" data-model="910-006556" data-location="IT Storage Room" data-min="5" data-total="25" data-checked="8" data-unit="99.99" data-totalcost="2499.75">
                                <td><img src="" alt="Mouse" class="acc-device-img"></td>
                                <td>Logitech MX Master 3S</td>
                                <td>Mouse</td>
                                <td>910-006556</td>
                                <td>IT Storage Room</td>
                                <td>5</td>
                                <td>25</td>
                                <td>8</td>
                                <td class="acc-text-right">₱99.99</td>
                                <td class="acc-text-right">₱2,499.75</td>
                                <td><button class="btn btn-sm btn-primary">Check Out</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button 
                                        class="btn btn-sm btn-outline-secondary" 
                                        type="button" 
                                        id="accDropdown1" 
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
                                            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this accessory?');">
                                            <button type="submit" class="dropdown-item text-danger">
                                                <i class="ri-delete-bin-line me-2"></i> Delete
                                            </button>
                                            </form>
                                        </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr data-name="Dell UltraSharp U2720Q" data-category="Monitor" data-model="U2720Q" data-location="Office Floor 2" data-min="3" data-total="15" data-checked="15" data-unit="649.99" data-totalcost="9749.85">
                                <td><img src="" alt="Monitor" class="acc-device-img"></td>
                                <td>Dell UltraSharp U2720Q</td>
                                <td>Monitor</td>
                                <td>U2720Q</td>
                                <td>Office Floor 2</td>
                                <td>3</td>
                                <td>15</td>
                                <td>15</td>
                                <td class="acc-text-right">₱649.99</td>
                                <td class="acc-text-right">₱9,749.85</td>
                                <td><button class="btn btn-sm btn-success">Check In</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button 
                                        class="btn btn-sm btn-outline-secondary" 
                                        type="button" 
                                        id="accDropdown2" 
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
                                            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this accessory?');">
                                            <button type="submit" class="dropdown-item text-danger">
                                                <i class="ri-delete-bin-line me-2"></i> Delete
                                            </button>
                                            </form>
                                        </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr data-name="Keychron K8 Pro" data-category="Keyboard" data-model="K8-PRO-RGB" data-location="IT Storage Room" data-min="10" data-total="30" data-checked="12" data-unit="109.00" data-totalcost="3270.00">
                                <td><img src="" alt="Keyboard" class="acc-device-img"></td>
                                <td>Keychron K8 Pro</td>
                                <td>Keyboard</td>
                                <td>K8-PRO-RGB</td>
                                <td>IT Storage Room</td>
                                <td>10</td>
                                <td>30</td>
                                <td>12</td>
                                <td class="acc-text-right">₱109.00</td>
                                <td class="acc-text-right">₱3,270.00</td>
                                <td><button class="btn btn-sm btn-primary">Check Out</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button 
                                        class="btn btn-sm btn-outline-secondary" 
                                        type="button" 
                                        id="accDropdown3" 
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
                                            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this accessory?');">
                                            <button type="submit" class="dropdown-item text-danger">
                                                <i class="ri-delete-bin-line me-2"></i> Delete
                                            </button>
                                            </form>
                                        </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr data-name="USB-C to HDMI Cable" data-category="Cable" data-model="CBL-USBC-HDMI-2M" data-location="Cable Storage" data-min="20" data-total="100" data-checked="35" data-unit="15.99" data-totalcost="1599.00">
                                <td><img src="" alt="Cable" class="acc-device-img"></td>
                                <td>USB-C to HDMI Cable</td>
                                <td>Cable</td>
                                <td>CBL-USBC-HDMI-2M</td>
                                <td>Cable Storage</td>
                                <td>20</td>
                                <td>100</td>
                                <td>35</td>
                                <td class="acc-text-right">₱15.99</td>
                                <td class="acc-text-right">₱1,599.00</td>
                                <td><button class="btn btn-sm btn-primary">Check Out</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button 
                                        class="btn btn-sm btn-outline-secondary" 
                                        type="button" 
                                        id="accDropdown4" 
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
                                            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this accessory?');">
                                            <button type="submit" class="dropdown-item text-danger">
                                                <i class="ri-delete-bin-line me-2"></i> Delete
                                            </button>
                                            </form>
                                        </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr data-name="Logitech C920 HD Pro Webcam" data-category="Webcam" data-model="960-001055" data-location="IT Storage Room" data-min="5" data-total="20" data-checked="3" data-unit="79.99" data-totalcost="1599.80">
                                <td><img src="" alt="Webcam" class="acc-device-img"></td>
                                <td>Logitech C920 HD Pro Webcam</td>
                                <td>Webcam</td>
                                <td>960-001055</td>
                                <td>IT Storage Room</td>
                                <td>5</td>
                                <td>20</td>
                                <td>3</td>
                                <td class="acc-text-right">₱79.99</td>
                                <td class="acc-text-right">₱1,599.80</td>
                                <td><button class="btn btn-sm btn-primary">Check Out</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button 
                                        class="btn btn-sm btn-outline-secondary" 
                                        type="button" 
                                        id="accDropdown5" 
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
                                            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this accessory?');">
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
                            <tr id="accTotalRow">
                                <td colspan="9" class="acc-text-right"><strong>Total:</strong></td>
                                <td class="acc-text-right"><strong id="accTotalCost">₱18,718.40</strong></td>
                                <td colspan="2"></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div id="accNoResults" class="acc-no-results" style="display: none;">
                        No matching records found
                    </div>
                </div>
                <div class="acc-pagination-info">
                    <div id="accPaginationText">Showing 1 to 5 of 5 entries</div>
                    <div class="acc-pagination-controls">
                        <button id="accPrevPage" onclick="accChangePage(-1)">Previous</button>
                        <button class="acc-active">1</button>
                        <button id="accNextPage" onclick="accChangePage(1)">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('accessories.new')
@endsection

@section('js')
<script>
    let accCurrentPage = 1;
    let accRowsPerPage = 10;
    let accAllRows = [];
    let accFilteredRows = [];
    let accSortColumn = -1;
    let accSortDirection = 'asc';

    document.addEventListener('DOMContentLoaded', function() {
        const tbody = document.getElementById('accTableBody');
        accAllRows = Array.from(tbody.querySelectorAll('tr'));
        accFilteredRows = [...accAllRows];
        
        document.querySelectorAll('.acc-sortable').forEach(th => {
            th.addEventListener('click', function() {
                const column = parseInt(this.dataset.column);
                accSortTable(column);
            });
        });
        
        accUpdateDisplay();
    });

    document.getElementById('accSearchFilter')?.addEventListener('input', function() {
        accFilterTable();
    });

    document.getElementById('accCategoryFilter')?.addEventListener('change', function() {
        accFilterTable();
    });

    function accFilterTable() {
        const searchValue = document.getElementById('accSearchFilter').value.toLowerCase();
        const categoryValue = document.getElementById('accCategoryFilter').value.toLowerCase();
        
        accFilteredRows = accAllRows.filter(row => {
            const text = row.textContent.toLowerCase();
            const category = row.dataset.category.toLowerCase();
            
            const matchesSearch = text.includes(searchValue);
            const matchesCategory = !categoryValue || category.includes(categoryValue);
            
            return matchesSearch && matchesCategory;
        });
        
        accCurrentPage = 1;
        accUpdateDisplay();
    }

    function accSortTable(column) {
        const headers = document.querySelectorAll('.acc-sortable');
        
        if (accSortColumn === column) {
            accSortDirection = accSortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            accSortDirection = 'asc';
            accSortColumn = column;
        }
        
        headers.forEach(th => {
            th.classList.remove('acc-sorted-asc', 'acc-sorted-desc');
            if (parseInt(th.dataset.column) === column) {
                th.classList.add(accSortDirection === 'asc' ? 'acc-sorted-asc' : 'acc-sorted-desc');
            }
        });
        
        accFilteredRows.sort((a, b) => {
            let aVal, bVal;
            
            switch(column) {
                case 1:
                    aVal = a.dataset.name.toLowerCase();
                    bVal = b.dataset.name.toLowerCase();
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
                case 5:
                    aVal = parseInt(a.dataset.min);
                    bVal = parseInt(b.dataset.min);
                    break;
                case 6:
                    aVal = parseInt(a.dataset.total);
                    bVal = parseInt(b.dataset.total);
                    break;
                case 7:
                    aVal = parseInt(a.dataset.checked);
                    bVal = parseInt(b.dataset.checked);
                    break;
                case 8:
                    aVal = parseFloat(a.dataset.unit);
                    bVal = parseFloat(b.dataset.unit);
                    break;
                case 9:
                    aVal = parseFloat(a.dataset.totalcost);
                    bVal = parseFloat(b.dataset.totalcost);
                    break;
                default:
                    aVal = a.cells[column].textContent.toLowerCase();
                    bVal = b.cells[column].textContent.toLowerCase();
            }
            
            if (aVal < bVal) return accSortDirection === 'asc' ? -1 : 1;
            if (aVal > bVal) return accSortDirection === 'asc' ? 1 : -1;
            return 0;
        });
        
        accUpdateDisplay();
    }

    function accUpdateDisplay() {
        const tbody = document.getElementById('accTableBody');
        const noResults = document.getElementById('accNoResults');
        const totalRow = document.getElementById('accTotalRow');
        
        tbody.innerHTML = '';
        
        if (accFilteredRows.length === 0) {
            noResults.style.display = 'block';
            totalRow.style.display = 'none';
            document.querySelector('.acc-pagination-info').style.display = 'none';
            return;
        }
        
        noResults.style.display = 'none';
        totalRow.style.display = '';
        document.querySelector('.acc-pagination-info').style.display = 'flex';
        
        const start = (accCurrentPage - 1) * accRowsPerPage;
        const end = Math.min(start + accRowsPerPage, accFilteredRows.length);
        const pageRows = accFilteredRows.slice(start, end);
        
        pageRows.forEach(row => tbody.appendChild(row.cloneNode(true)));
        
        document.getElementById('accPaginationText').textContent = 
            `Showing ${start + 1} to ${end} of ${accFilteredRows.length} entries`;
        
        accCalculateTotals();
        
        accUpdatePaginationButtons();
    }

    function accCalculateTotals() {
        let totalCost = 0;
        
        accFilteredRows.forEach(row => {
            totalCost += parseFloat(row.dataset.totalcost);
        });
        
        document.getElementById('accTotalCost').textContent = '₱' + totalCost.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2});
    }

    function accUpdatePaginationButtons() {
        const totalPages = Math.ceil(accFilteredRows.length / accRowsPerPage);
        document.getElementById('accPrevPage').disabled = accCurrentPage === 1;
        document.getElementById('accNextPage').disabled = accCurrentPage === totalPages || totalPages === 0;
    }

    function accChangePage(direction) {
        const totalPages = Math.ceil(accFilteredRows.length / accRowsPerPage);
        const newPage = accCurrentPage + direction;
        
        if (newPage >= 1 && newPage <= totalPages) {
            accCurrentPage = newPage;
            accUpdateDisplay();
        }
    }

    function accExportToCSV() {
        const headers = Array.from(document.querySelectorAll('#accessoriesTable thead th')).map(th => th.textContent.trim());
        let csv = [headers.join(',')];
        
        accFilteredRows.forEach(row => {
            const cells = Array.from(row.cells).map(cell => {
                let text = cell.textContent.trim();
                text = text.replace(/[\u{1F300}-\u{1F9FF}]/gu, '').trim();
                return '"' + text.replace(/"/g, '""') + '"';
            });
            csv.push(cells.join(','));
        });
        
        const totalCost = document.getElementById('accTotalCost').textContent;
        csv.push(`"","","","","","","","","Total:","${totalCost}","",""`);
        
        const csvContent = csv.join('\n');
        const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'accessories-report-' + new Date().toISOString().split('T')[0] + '.csv';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        window.URL.revokeObjectURL(url);
    }
</script>
@endsection