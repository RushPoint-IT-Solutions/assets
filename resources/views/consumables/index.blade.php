@extends('layouts.header')

@section('content')
<div class="row">
    <div class="col-md-12 mb-5">
        <div class="consumables-card">
            <div class="consumables-card-header">
                <h5 class="consumables-card-title mb-0">Consumables</h5>
                <div class="consumables-filter-group">
                    <input type="text" id="consumablesSearchFilter" class="form-control form-control-sm" placeholder="Search..." style="width: 200px;">
                    <select id="consumablesCategoryFilter" class="form-select form-select-sm" style="width: 150px;">
                        <option value="">All Categories</option>
                        <option value="Office Supplies">Office Supplies</option>
                        <option value="Printer Supplies">Printer Supplies</option>
                        <option value="Cleaning Supplies">Cleaning Supplies</option>
                    </select>
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addConsumableModal" style="height: 31px; font-size: 12px;">
                        <i class="ri-add-line"></i> Add Consumable
                    </button>
                    <button class="consumables-btn-export" onclick="exportConsumablesToCSV()">
                        <i class="ri-file-excel-line"></i> Export CSV
                    </button>
                </div>
            </div>
            <div class="consumables-card-body">
                <div class="consumables-table-responsive">
                    <table class="consumables-table" id="consumablesTable">
                        <thead>
                            <tr>
                                <th class="sortable" data-column="0">Name</th>
                                <th class="sortable" data-column="1">Category</th>
                                <th data-column="2">Model No.</th>
                                <th data-column="3">Location</th>
                                <th data-column="4">Item No.</th>
                                <th data-column="5">Order Number</th>
                                <th class="sortable" data-column="6">Purchase Date</th>
                                <th class="sortable" data-column="7">Min. QTY</th>
                                <th class="sortable" data-column="8">Total</th>
                                <th class="sortable" data-column="9">Remaining</th>
                                <th class="sortable consumables-text-right" data-column="10">Unit Cost</th>
                                <th class="sortable consumables-text-right" data-column="11">Total Cost</th>
                                <th data-column="12">In/Out</th>
                                <th data-column="13">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="consumablesTableBody">
                            <tr data-name="A4 Paper" data-category="Office Supplies" data-model="WH-A4-500" data-location="Storage Room A" data-item="ITEM-001" data-order="ORD-2024-001" data-purchase="2024-01-15" data-minqty="100" data-total="500" data-remaining="250" data-unitcost="5.50" data-totalcost="2750.00">
                                <td>A4 Paper</td>
                                <td>Office Supplies</td>
                                <td>WH-A4-500</td>
                                <td>Storage Room A</td>
                                <td>ITEM-001</td>
                                <td>ORD-2024-001</td>
                                <td>2024-01-15</td>
                                <td>100</td>
                                <td>500</td>
                                <td>250</td>
                                <td class="consumables-text-right">₱5.50</td>
                                <td class="consumables-text-right">₱2,750.00</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="ri-check-line me-2"></i> In</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ri-close-line me-2"></i> Out</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="ri-eye-line me-2"></i> View</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ri-edit-line me-2"></i> Edit</a></li>
                                            <li>
                                                <form method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                                    <button type="submit" class="dropdown-item text-danger">
                                                        <i class="ri-delete-bin-line me-2"></i> Delete
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr data-name="Toner Cartridge" data-category="Printer Supplies" data-model="HP-CF410A" data-location="IT Department" data-item="ITEM-002" data-order="ORD-2024-015" data-purchase="2024-02-20" data-minqty="5" data-total="20" data-remaining="8" data-unitcost="85.00" data-totalcost="1700.00">
                                <td>Toner Cartridge</td>
                                <td>Printer Supplies</td>
                                <td>HP-CF410A</td>
                                <td>IT Department</td>
                                <td>ITEM-002</td>
                                <td>ORD-2024-015</td>
                                <td>2024-02-20</td>
                                <td>5</td>
                                <td>20</td>
                                <td>8</td>
                                <td class="consumables-text-right">₱85.00</td>
                                <td class="consumables-text-right">₱1,700.00</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="ri-check-line me-2"></i> In</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ri-close-line me-2"></i> Out</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="ri-eye-line me-2"></i> View</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ri-edit-line me-2"></i> Edit</a></li>
                                            <li>
                                                <form method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                                    <button type="submit" class="dropdown-item text-danger">
                                                        <i class="ri-delete-bin-line me-2"></i> Delete
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr data-name="Ballpen (Black)" data-category="Office Supplies" data-model="PEN-BLK-001" data-location="Supply Cabinet" data-item="ITEM-003" data-order="ORD-2024-008" data-purchase="2024-01-10" data-minqty="50" data-total="200" data-remaining="120" data-unitcost="2.50" data-totalcost="500.00">
                                <td>Ballpen (Black)</td>
                                <td>Office Supplies</td>
                                <td>PEN-BLK-001</td>
                                <td>Supply Cabinet</td>
                                <td>ITEM-003</td>
                                <td>ORD-2024-008</td>
                                <td>2024-01-10</td>
                                <td>50</td>
                                <td>200</td>
                                <td>120</td>
                                <td class="consumables-text-right">₱2.50</td>
                                <td class="consumables-text-right">₱500.00</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="ri-check-line me-2"></i> In</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ri-close-line me-2"></i> Out</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="ri-eye-line me-2"></i> View</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ri-edit-line me-2"></i> Edit</a></li>
                                            <li>
                                                <form method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                                    <button type="submit" class="dropdown-item text-danger">
                                                        <i class="ri-delete-bin-line me-2"></i> Delete
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr data-name="Disinfectant Spray" data-category="Cleaning Supplies" data-model="CLN-DSF-500" data-location="Janitor Closet" data-item="ITEM-004" data-order="ORD-2024-022" data-purchase="2024-03-05" data-minqty="10" data-total="30" data-remaining="3" data-unitcost="45.00" data-totalcost="1350.00">
                                <td>Disinfectant Spray <span class="consumables-text-warning"><i class="ri-alert-line"></i></span></td>
                                <td>Cleaning Supplies</td>
                                <td>CLN-DSF-500</td>
                                <td>Janitor Closet</td>
                                <td>ITEM-004</td>
                                <td>ORD-2024-022</td>
                                <td>2024-03-05</td>
                                <td>10</td>
                                <td>30</td>
                                <td class="consumables-text-danger">3</td>
                                <td class="consumables-text-right">₱45.00</td>
                                <td class="consumables-text-right">₱1,350.00</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="ri-check-line me-2"></i> In</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ri-close-line me-2"></i> Out</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="ri-eye-line me-2"></i> View</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ri-edit-line me-2"></i> Edit</a></li>
                                            <li>
                                                <form method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                                    <button type="submit" class="dropdown-item text-danger">
                                                        <i class="ri-delete-bin-line me-2"></i> Delete
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr data-name="Printer Paper (Legal)" data-category="Office Supplies" data-model="LG-PRT-500" data-location="Storage Room B" data-item="ITEM-005" data-order="ORD-2024-012" data-purchase="2024-02-01" data-minqty="50" data-total="150" data-remaining="75" data-unitcost="6.75" data-totalcost="1012.50">
                                <td>Printer Paper (Legal)</td>
                                <td>Office Supplies</td>
                                <td>LG-PRT-500</td>
                                <td>Storage Room B</td>
                                <td>ITEM-005</td>
                                <td>ORD-2024-012</td>
                                <td>2024-02-01</td>
                                <td>50</td>
                                <td>150</td>
                                <td>75</td>
                                <td class="consumables-text-right">₱6.75</td>
                                <td class="consumables-text-right">₱1,012.50</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="ri-check-line me-2"></i> In</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ri-close-line me-2"></i> Out</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="ri-eye-line me-2"></i> View</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ri-edit-line me-2"></i> Edit</a></li>
                                            <li>
                                                <form method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
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
                            <tr id="consumablesTotalRow">
                                <td colspan="11" class="consumables-text-right"><strong>Total:</strong></td>
                                <td class="consumables-text-right"><strong id="consumablesTotalCost">₱7,312.50</strong></td>
                                <td colspan="2"></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div id="consumablesNoResults" class="consumables-no-results" style="display: none;">
                        No matching records found
                    </div>
                </div>
                <div class="consumables-pagination-info">
                    <div id="consumablesPaginationText">Showing 1 to 5 of 5 entries</div>
                    <div class="consumables-pagination-controls">
                        <button id="consumablesPrevPage" onclick="changeConsumablesPage(-1)">Previous</button>
                        <button class="active">1</button>
                        <button id="consumablesNextPage" onclick="changeConsumablesPage(1)">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('consumables.new')
@endsection

@section('js')
<script>
    let consumablesCurrentPage = 1;
    let consumablesRowsPerPage = 10;
    let consumablesAllRows = [];
    let consumablesFilteredRows = [];
    let consumablesSortColumn = -1;
    let consumablesSortDirection = 'asc';

    document.addEventListener('DOMContentLoaded', function() {
        const tbody = document.getElementById('consumablesTableBody');
        consumablesAllRows = Array.from(tbody.querySelectorAll('tr'));
        consumablesFilteredRows = [...consumablesAllRows];
        
        document.querySelectorAll('#consumablesTable .sortable').forEach(th => {
            th.addEventListener('click', function() {
                const column = parseInt(this.dataset.column);
                sortConsumablesTable(column);
            });
        });
        
        updateConsumablesDisplay();
    });

    document.getElementById('consumablesSearchFilter')?.addEventListener('input', function() {
        filterConsumablesTable();
    });

    document.getElementById('consumablesCategoryFilter')?.addEventListener('change', function() {
        filterConsumablesTable();
    });

    function filterConsumablesTable() {
        const searchValue = document.getElementById('consumablesSearchFilter').value.toLowerCase();
        const categoryValue = document.getElementById('consumablesCategoryFilter').value.toLowerCase();
        
        consumablesFilteredRows = consumablesAllRows.filter(row => {
            const text = row.textContent.toLowerCase();
            const category = row.dataset.category.toLowerCase();
            
            const matchesSearch = text.includes(searchValue);
            const matchesCategory = !categoryValue || category.includes(categoryValue);
            
            return matchesSearch && matchesCategory;
        });
        
        consumablesCurrentPage = 1;
        updateConsumablesDisplay();
    }

    function sortConsumablesTable(column) {
        const headers = document.querySelectorAll('#consumablesTable .sortable');
        
        if (consumablesSortColumn === column) {
            consumablesSortDirection = consumablesSortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            consumablesSortDirection = 'asc';
            consumablesSortColumn = column;
        }
        
        headers.forEach(th => {
            th.classList.remove('sorted-asc', 'sorted-desc');
            if (parseInt(th.dataset.column) === column) {
                th.classList.add(consumablesSortDirection === 'asc' ? 'sorted-asc' : 'sorted-desc');
            }
        });
        
        consumablesFilteredRows.sort((a, b) => {
            let aVal, bVal;
            
            switch(column) {
                case 0:
                    aVal = a.dataset.name.toLowerCase();
                    bVal = b.dataset.name.toLowerCase();
                    break;
                case 1:
                    aVal = a.dataset.category.toLowerCase();
                    bVal = b.dataset.category.toLowerCase();
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
            
            if (aVal < bVal) return consumablesSortDirection === 'asc' ? -1 : 1;
            if (aVal > bVal) return consumablesSortDirection === 'asc' ? 1 : -1;
            return 0;
        });
        
        updateConsumablesDisplay();
    }

    function updateConsumablesDisplay() {
        const tbody = document.getElementById('consumablesTableBody');
        const noResults = document.getElementById('consumablesNoResults');
        const totalRow = document.getElementById('consumablesTotalRow');
        
        tbody.innerHTML = '';
        
        if (consumablesFilteredRows.length === 0) {
            noResults.style.display = 'block';
            totalRow.style.display = 'none';
            document.querySelector('.consumables-pagination-info').style.display = 'none';
            return;
        }
        
        noResults.style.display = 'none';
        totalRow.style.display = '';
        document.querySelector('.consumables-pagination-info').style.display = 'flex';
        
        const start = (consumablesCurrentPage - 1) * consumablesRowsPerPage;
        const end = Math.min(start + consumablesRowsPerPage, consumablesFilteredRows.length);
        const pageRows = consumablesFilteredRows.slice(start, end);
        
        pageRows.forEach(row => tbody.appendChild(row.cloneNode(true)));
        
        document.getElementById('consumablesPaginationText').textContent = 
            `Showing ${start + 1} to ${end} of ${consumablesFilteredRows.length} entries`;
        
        calculateConsumablesTotals();
        
        updateConsumablesPaginationButtons();
    }

    function calculateConsumablesTotals() {
        let totalCost = 0;
        
        consumablesFilteredRows.forEach(row => {
            totalCost += parseFloat(row.dataset.totalcost);
        });
        
        document.getElementById('consumablesTotalCost').textContent = '₱' + totalCost.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2});
    }

    function updateConsumablesPaginationButtons() {
        const totalPages = Math.ceil(consumablesFilteredRows.length / consumablesRowsPerPage);
        document.getElementById('consumablesPrevPage').disabled = consumablesCurrentPage === 1;
        document.getElementById('consumablesNextPage').disabled = consumablesCurrentPage === totalPages || totalPages === 0;
    }

    function changeConsumablesPage(direction) {
        const totalPages = Math.ceil(consumablesFilteredRows.length / consumablesRowsPerPage);
        const newPage = consumablesCurrentPage + direction;
        
        if (newPage >= 1 && newPage <= totalPages) {
            consumablesCurrentPage = newPage;
            updateConsumablesDisplay();
        }
    }

    function exportConsumablesToCSV() {
        const headers = Array.from(document.querySelectorAll('#consumablesTable thead th')).map(th => th.textContent.trim());
        let csv = [headers.join(',')];
        
        consumablesFilteredRows.forEach(row => {
            const cells = Array.from(row.cells).map(cell => {
                let text = cell.textContent.trim();
                text = text.replace(/[\u{1F300}-\u{1F9FF}]/gu, '').replace(/⚠️/g, '').trim();
                return '"' + text.replace(/"/g, '""') + '"';
            });
            csv.push(cells.join(','));
        });
        
        const totalCost = document.getElementById('consumablesTotalCost').textContent;
        csv.push(`"","","","","","","","","","","Total:","${totalCost}","",""`);
        
        const csvContent = csv.join('\n');
        const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'consumables-report-' + new Date().toISOString().split('T')[0] + '.csv';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        window.URL.revokeObjectURL(url);
    }
</script>
@endsection