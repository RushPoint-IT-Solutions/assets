@extends('layouts.header')

@section('content')
<div class="row">
    <div class="col-md-12 mb-5">
        <div class="custom-card">
            <div class="custom-card-header">
                <h5 class="custom-card-title mb-0">Licenses</h5>
                <div class="filter-group">
                    <input type="text" id="searchFilter" class="form-control form-control-sm" placeholder="Search..." style="width: 200px;">
                    <select id="companyFilter" class="form-select form-select-sm" style="width: 150px;">
                        <option value="">All Companies</option>
                        <option value="Acme Corp">Acme Corp</option>
                        <option value="Tech Solutions">Tech Solutions</option>
                        <option value="Global Industries">Global Industries</option>
                    </select>
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addLicenseModal" style="height: 31px; font-size: 12px;">
                        <i class="ri-add-line"></i> Add License
                    </button>
                    <button class="btn-export" onclick="exportToCSV()">
                        <i class="ri-file-excel-line"></i> Export CSV
                    </button>
                </div>
            </div>
            <div class="custom-card-body">
                <div class="table-responsive">
                    <table class="simple-table" id="licensesTable">
                        <thead>
                            <tr>
                                <th class="sortable" data-column="0">ID</th>
                                <th class="sortable" data-column="1">Company</th>
                                <th class="sortable" data-column="2">Name</th>
                                <th data-column="3">Product Key</th>
                                <th class="sortable" data-column="4">Expiration Date</th>
                                <th data-column="5">Termination Date</th>
                                <th data-column="6">Licensed to Email</th>
                                <th data-column="7">Licensed to Name</th>
                                <th class="sortable" data-column="8">Category</th>
                                <th data-column="9">Supplier</th>
                                <th data-column="10">Manufacturer</th>
                                <th class="sortable" data-column="11">Min QTY</th>
                                <th class="sortable" data-column="12">Total</th>
                                <th class="sortable" data-column="13">Avail</th>
                                <th class="sortable" data-column="14">Purchase Date</th>
                                <th data-column="15">Depreciation</th>
                                <th data-column="16">Maintained</th>
                                <th data-column="17">Reassignable</th>
                                <th class="sortable text-right" data-column="18">Purchase Cost</th>
                                <th data-column="19">Purchase Order Number</th>
                                <th data-column="20">Order Number</th>
                                <th data-column="21">Created By</th>
                                <th class="sortable" data-column="22">Created At</th>
                                <th class="sortable" data-column="23">Updated at</th>
                                <th data-column="24">Notes</th>
                                <th data-column="25">Checkin/Checkout</th>
                                <th data-column="26">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            <tr data-id="LIC-001" data-company="Acme Corp" data-name="Microsoft Office 365" data-category="Productivity" data-cost="2500" data-book="1875" data-diff="625" data-seats="50" data-remaining="12" data-expiration="2025-12-31" data-purchase="2024-01-15" data-created="2024-01-15" data-updated="2024-11-10">
                                <td>LIC-001</td>
                                <td>Acme Corp</td>
                                <td>Microsoft Office 365</td>
                                <td class="text-masked">XXXXX-XXXXX-XXXXX</td>
                                <td>2025-12-31</td>
                                <td>-</td>
                                <td>admin@acmecorp.com</td>
                                <td>John Smith</td>
                                <td>Productivity</td>
                                <td>Microsoft Store</td>
                                <td>Microsoft</td>
                                <td>10</td>
                                <td>50</td>
                                <td>12</td>
                                <td>2024-01-15</td>
                                <td>Straight Line (36 months)</td>
                                <td>Yes</td>
                                <td>Yes</td>
                                <td class="text-right">$2,500.00</td>
                                <td>PO-2024-001</td>
                                <td>ORD-2024-001</td>
                                <td>Admin User</td>
                                <td>2024-01-15</td>
                                <td>2024-11-10</td>
                                <td>Annual subscription</td>
                                <td><button class="btn btn-sm btn-primary">Checkout</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button 
                                        class="btn btn-sm btn-outline-secondary" 
                                        type="button" 
                                        id="documentDropdown" 
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
                                            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this document?');">
                                            <button type="submit" class="dropdown-item text-danger">
                                                <i class="ri-delete-bin-line me-2"></i> Delete
                                            </button>
                                            </form>
                                        </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr data-id="LIC-002" data-company="Tech Solutions" data-name="Adobe Creative Cloud" data-category="Design" data-cost="7500" data-book="3125" data-diff="4375" data-seats="25" data-remaining="5" data-expiration="2025-06-30" data-purchase="2023-07-01" data-created="2023-07-01" data-updated="2024-10-15">
                                <td>LIC-002</td>
                                <td>Tech Solutions</td>
                                <td>Adobe Creative Cloud</td>
                                <td class="text-masked">YYYYY-YYYYY-YYYYY</td>
                                <td>2025-06-30</td>
                                <td>-</td>
                                <td>design@techsolutions.com</td>
                                <td>Sarah Johnson</td>
                                <td>Design</td>
                                <td>Adobe Direct</td>
                                <td>Adobe</td>
                                <td>5</td>
                                <td>25</td>
                                <td>5</td>
                                <td>2023-07-01</td>
                                <td>Straight Line (24 months)</td>
                                <td>Yes</td>
                                <td>No</td>
                                <td class="text-right">$7,500.00</td>
                                <td>PO-2023-045</td>
                                <td>ORD-2023-089</td>
                                <td>IT Manager</td>
                                <td>2023-07-01</td>
                                <td>2024-10-15</td>
                                <td>Enterprise plan</td>
                                <td><button class="btn btn-sm btn-primary">Checkout</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button 
                                        class="btn btn-sm btn-outline-secondary" 
                                        type="button" 
                                        id="documentDropdown" 
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
                                            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this document?');">
                                            <button type="submit" class="dropdown-item text-danger">
                                                <i class="ri-delete-bin-line me-2"></i> Delete
                                            </button>
                                            </form>
                                        </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr data-id="LIC-003" data-company="Acme Corp" data-name="Windows Server License" data-category="Infrastructure" data-cost="5000" data-book="4166.67" data-diff="833.33" data-seats="10" data-remaining="2" data-expiration="2026-03-15" data-purchase="2024-03-15" data-created="2024-03-15" data-updated="2024-11-12">
                                <td>LIC-003</td>
                                <td>Acme Corp</td>
                                <td>Windows Server License</td>
                                <td class="text-masked">ZZZZZ-ZZZZZ-ZZZZZ</td>
                                <td>2026-03-15</td>
                                <td>-</td>
                                <td>it@acmecorp.com</td>
                                <td>Mike Davis</td>
                                <td>Infrastructure</td>
                                <td>CDW</td>
                                <td>Microsoft</td>
                                <td>2</td>
                                <td>10</td>
                                <td>2</td>
                                <td>2024-03-15</td>
                                <td>Straight Line (60 months)</td>
                                <td>Yes</td>
                                <td>Yes</td>
                                <td class="text-right">$5,000.00</td>
                                <td>PO-2024-015</td>
                                <td>ORD-2024-032</td>
                                <td>System Admin</td>
                                <td>2024-03-15</td>
                                <td>2024-11-12</td>
                                <td>Datacenter edition</td>
                                <td><button class="btn btn-sm btn-primary">Checkout</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button 
                                        class="btn btn-sm btn-outline-secondary" 
                                        type="button" 
                                        id="documentDropdown" 
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
                                            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this document?');">
                                            <button type="submit" class="dropdown-item text-danger">
                                                <i class="ri-delete-bin-line me-2"></i> Delete
                                            </button>
                                            </form>
                                        </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr data-id="LIC-004" data-company="Global Industries" data-name="AutoCAD Professional" data-category="Engineering" data-cost="12000" data-book="6000" data-diff="6000" data-seats="15" data-remaining="0" data-expiration="2025-08-20" data-purchase="2023-08-20" data-created="2023-08-20" data-updated="2024-09-05">
                                <td>LIC-004</td>
                                <td>Global Industries</td>
                                <td>AutoCAD Professional</td>
                                <td class="text-masked">AAAAA-AAAAA-AAAAA</td>
                                <td>2025-08-20</td>
                                <td>-</td>
                                <td>engineering@globalind.com</td>
                                <td>Robert Chen</td>
                                <td>Engineering</td>
                                <td>Autodesk Reseller</td>
                                <td>Autodesk</td>
                                <td>5</td>
                                <td>15</td>
                                <td>0</td>
                                <td>2023-08-20</td>
                                <td>Straight Line (36 months)</td>
                                <td>Yes</td>
                                <td>Yes</td>
                                <td class="text-right">$12,000.00</td>
                                <td>PO-2023-078</td>
                                <td>ORD-2023-156</td>
                                <td>Engineering Lead</td>
                                <td>2023-08-20</td>
                                <td>2024-09-05</td>
                                <td>All seats allocated</td>
                                <td><button class="btn btn-sm btn-success">Checkin</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button 
                                        class="btn btn-sm btn-outline-secondary" 
                                        type="button" 
                                        id="documentDropdown" 
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
                                            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this document?');">
                                            <button type="submit" class="dropdown-item text-danger">
                                                <i class="ri-delete-bin-line me-2"></i> Delete
                                            </button>
                                            </form>
                                        </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr data-id="LIC-005" data-company="Tech Solutions" data-name="Slack Enterprise" data-category="Communication" data-cost="8000" data-book="0" data-diff="8000" data-seats="100" data-remaining="23" data-expiration="2024-12-01" data-purchase="2023-12-01" data-created="2023-12-01" data-updated="2024-11-01">
                                <td>LIC-005</td>
                                <td>Tech Solutions</td>
                                <td>Slack Enterprise</td>
                                <td class="text-masked">BBBBB-BBBBB-BBBBB</td>
                                <td>2024-12-01</td>
                                <td>2024-11-30 <span class="text-danger"><i class="ri-alert-line"></i></span></td>
                                <td>team@techsolutions.com</td>
                                <td>Lisa Wang</td>
                                <td>Communication</td>
                                <td>Slack Sales</td>
                                <td>Slack Technologies</td>
                                <td>20</td>
                                <td>100</td>
                                <td>23</td>
                                <td>2023-12-01</td>
                                <td>Straight Line (12 months)</td>
                                <td>No</td>
                                <td>Yes</td>
                                <td class="text-right">$8,000.00</td>
                                <td>PO-2023-098</td>
                                <td>ORD-2023-201</td>
                                <td>IT Director</td>
                                <td>2023-12-01</td>
                                <td>2024-11-01</td>
                                <td>Renewal pending</td>
                                <td><button class="btn btn-sm btn-primary">Checkout</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button 
                                        class="btn btn-sm btn-outline-secondary" 
                                        type="button" 
                                        id="documentDropdown" 
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
                                            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this document?');">
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
                            <tr id="totalRow">
                                <td colspan="18" class="text-right"><strong>Total:</strong></td>
                                <td class="text-right"><strong id="totalCost">$35,000.00</strong></td>
                                <td colspan="8"></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div id="noResults" class="no-results" style="display: none;">
                        No matching records found
                    </div>
                </div>
                <div class="pagination-info">
                    <div id="paginationText">Showing 1 to 5 of 5 entries</div>
                    <div class="pagination-controls">
                        <button id="prevPage" onclick="changePage(-1)">Previous</button>
                        <button class="active">1</button>
                        <button id="nextPage" onclick="changePage(1)">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('licenses.new')

@endsection

@section('js')
<script>
    let currentPage = 1;
    let rowsPerPage = 10;
    let allRows = [];
    let filteredRows = [];
    let sortColumn = -1;
    let sortDirection = 'asc';

    document.addEventListener('DOMContentLoaded', function() {
        const tbody = document.getElementById('tableBody');
        allRows = Array.from(tbody.querySelectorAll('tr'));
        filteredRows = [...allRows];
        
        document.querySelectorAll('.sortable').forEach(th => {
            th.addEventListener('click', function() {
                const column = parseInt(this.dataset.column);
                sortTable(column);
            });
        });
        
        updateDisplay();
    });

    document.getElementById('searchFilter')?.addEventListener('input', function() {
        filterTable();
    });

    document.getElementById('companyFilter')?.addEventListener('change', function() {
        filterTable();
    });

    function filterTable() {
        const searchValue = document.getElementById('searchFilter').value.toLowerCase();
        const companyValue = document.getElementById('companyFilter').value.toLowerCase();
        
        filteredRows = allRows.filter(row => {
            const text = row.textContent.toLowerCase();
            const company = row.dataset.company.toLowerCase();
            
            const matchesSearch = text.includes(searchValue);
            const matchesCompany = !companyValue || company.includes(companyValue);
            
            return matchesSearch && matchesCompany;
        });
        
        currentPage = 1;
        updateDisplay();
    }

    function sortTable(column) {
        const headers = document.querySelectorAll('.sortable');
        
        if (sortColumn === column) {
            sortDirection = sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            sortDirection = 'asc';
            sortColumn = column;
        }
        
        headers.forEach(th => {
            th.classList.remove('sorted-asc', 'sorted-desc');
            if (parseInt(th.dataset.column) === column) {
                th.classList.add(sortDirection === 'asc' ? 'sorted-asc' : 'sorted-desc');
            }
        });
        
        filteredRows.sort((a, b) => {
            let aVal, bVal;
            
            switch(column) {
                case 0:
                    aVal = a.dataset.id;
                    bVal = b.dataset.id;
                    break;
                case 1:
                    aVal = a.dataset.company.toLowerCase();
                    bVal = b.dataset.company.toLowerCase();
                    break;
                case 2:
                    aVal = a.dataset.name.toLowerCase();
                    bVal = b.dataset.name.toLowerCase();
                    break;
                case 4:
                    aVal = new Date(a.dataset.expiration);
                    bVal = new Date(b.dataset.expiration);
                    break;
                case 8:
                    aVal = a.dataset.category.toLowerCase();
                    bVal = b.dataset.category.toLowerCase();
                    break;
                case 11:
                    aVal = parseInt(a.cells[11].textContent);
                    bVal = parseInt(b.cells[11].textContent);
                    break;
                case 12:
                    aVal = parseInt(a.dataset.seats);
                    bVal = parseInt(b.dataset.seats);
                    break;
                case 13:
                    aVal = parseInt(a.dataset.remaining);
                    bVal = parseInt(b.dataset.remaining);
                    break;
                case 14:
                    aVal = new Date(a.dataset.purchase);
                    bVal = new Date(b.dataset.purchase);
                    break;
                case 18:
                    aVal = parseFloat(a.dataset.cost);
                    bVal = parseFloat(b.dataset.cost);
                    break;
                case 22:
                    aVal = new Date(a.dataset.created);
                    bVal = new Date(b.dataset.created);
                    break;
                case 23:
                    aVal = new Date(a.dataset.updated);
                    bVal = new Date(b.dataset.updated);
                    break;
                default:
                    aVal = a.cells[column].textContent.toLowerCase();
                    bVal = b.cells[column].textContent.toLowerCase();
            }
            
            if (aVal < bVal) return sortDirection === 'asc' ? -1 : 1;
            if (aVal > bVal) return sortDirection === 'asc' ? 1 : -1;
            return 0;
        });
        
        updateDisplay();
    }

    function updateDisplay() {
        const tbody = document.getElementById('tableBody');
        const noResults = document.getElementById('noResults');
        const totalRow = document.getElementById('totalRow');
        
        tbody.innerHTML = '';
        
        if (filteredRows.length === 0) {
            noResults.style.display = 'block';
            totalRow.style.display = 'none';
            document.querySelector('.pagination-info').style.display = 'none';
            return;
        }
        
        noResults.style.display = 'none';
        totalRow.style.display = '';
        document.querySelector('.pagination-info').style.display = 'flex';
        
        const start = (currentPage - 1) * rowsPerPage;
        const end = Math.min(start + rowsPerPage, filteredRows.length);
        const pageRows = filteredRows.slice(start, end);
        
        pageRows.forEach(row => tbody.appendChild(row.cloneNode(true)));
        
        document.getElementById('paginationText').textContent = 
            `Showing ${start + 1} to ${end} of ${filteredRows.length} entries`;
        
        calculateTotals();
        
        updatePaginationButtons();
    }

    function calculateTotals() {
        let totalCost = 0;
        
        filteredRows.forEach(row => {
            totalCost += parseFloat(row.dataset.cost);
        });
        
        document.getElementById('totalCost').textContent = '$' + totalCost.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2});
    }

    function updatePaginationButtons() {
        const totalPages = Math.ceil(filteredRows.length / rowsPerPage);
        document.getElementById('prevPage').disabled = currentPage === 1;
        document.getElementById('nextPage').disabled = currentPage === totalPages || totalPages === 0;
    }

    function changePage(direction) {
        const totalPages = Math.ceil(filteredRows.length / rowsPerPage);
        const newPage = currentPage + direction;
        
        if (newPage >= 1 && newPage <= totalPages) {
            currentPage = newPage;
            updateDisplay();
        }
    }

    function exportToCSV() {
        const headers = Array.from(document.querySelectorAll('#licensesTable thead th')).map(th => th.textContent.trim());
        let csv = [headers.join(',')];
        
        filteredRows.forEach(row => {
            const cells = Array.from(row.cells).map(cell => {
                let text = cell.textContent.trim();
                text = text.replace(/[\u{1F300}-\u{1F9FF}]/gu, '').replace(/⚠️/g, '').trim();
                return '"' + text.replace(/"/g, '""') + '"';
            });
            csv.push(cells.join(','));
        });
        
        const totalCost = document.getElementById('totalCost').textContent;
        csv.push(`"","","","","","","","","","","","","","","","","","","Total:","${totalCost}","","","","","","",""`);
        
        const csvContent = csv.join('\n');
        const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'license-report-' + new Date().toISOString().split('T')[0] + '.csv';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        window.URL.revokeObjectURL(url);
    }
</script>
@endsection