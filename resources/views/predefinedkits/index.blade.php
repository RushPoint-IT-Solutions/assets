@extends('layouts.header')

@section('content')
<div class="row">
    <div class="col-md-12 mb-5">
        <div class="kits-card">
            <div class="kits-card-header">
                <h5 class="kits-card-title mb-0">Predefined Kits</h5>
                <div class="kits-filter-group">
                    <input type="text" id="kitsSearchFilter" class="form-control form-control-sm" placeholder="Search..." style="width: 200px;">
                    <button class="kits-btn-export" onclick="exportKitsToCSV()">
                        <i class="ri-file-excel-line"></i> Export CSV
                    </button>
                </div>
            </div>
            <div class="kits-card-body">
                <div class="kits-table-responsive">
                    <table class="kits-table" id="kitsTable">
                        <thead>
                            <tr>
                                <th class="sortable" data-column="0">Name</th>
                                <th data-column="1">Checkin/Checkout</th>
                                <th data-column="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="kitsTableBody">
                            <tr data-name="New Employee Onboarding Kit" data-created="2024-01-15">
                                <td>New Employee Onboarding Kit</td>
                                <td>
                                    <button class="btn btn-sm btn-primary">Checkout</button>
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
                                                <form method="POST" onsubmit="return confirm('Are you sure you want to delete this kit?');">
                                                    <button type="submit" class="dropdown-item text-danger">
                                                        <i class="ri-delete-bin-line me-2"></i> Delete
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr data-name="Developer Starter Kit" data-created="2024-02-10">
                                <td>Developer Starter Kit</td>
                                <td>
                                    <button class="btn btn-sm btn-primary">Checkout</button>
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
                                                <form method="POST" onsubmit="return confirm('Are you sure you want to delete this kit?');">
                                                    <button type="submit" class="dropdown-item text-danger">
                                                        <i class="ri-delete-bin-line me-2"></i> Delete
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr data-name="Home Office Setup" data-created="2024-03-05">
                                <td>Home Office Setup</td>
                                <td>
                                    <button class="btn btn-sm btn-primary">Checkout</button>
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
                                                <form method="POST" onsubmit="return confirm('Are you sure you want to delete this kit?');">
                                                    <button type="submit" class="dropdown-item text-danger">
                                                        <i class="ri-delete-bin-line me-2"></i> Delete
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr data-name="Executive Package" data-created="2024-01-20">
                                <td>Executive Package</td>
                                <td>
                                    <button class="btn btn-sm btn-success">Checkin</button>
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
                                                <form method="POST" onsubmit="return confirm('Are you sure you want to delete this kit?');">
                                                    <button type="submit" class="dropdown-item text-danger">
                                                        <i class="ri-delete-bin-line me-2"></i> Delete
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr data-name="Conference Room Kit" data-created="2024-02-28">
                                <td>Conference Room Kit</td>
                                <td>
                                    <button class="btn btn-sm btn-primary">Checkout</button>
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
                                                <form method="POST" onsubmit="return confirm('Are you sure you want to delete this kit?');">
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
                    </table>
                    <div id="kitsNoResults" class="kits-no-results" style="display: none;">
                        No matching records found
                    </div>
                </div>
                <div class="kits-pagination-info">
                    <div id="kitsPaginationText">Showing 1 to 5 of 5 entries</div>
                    <div class="kits-pagination-controls">
                        <button id="kitsPrevPage" onclick="changeKitsPage(-1)">Previous</button>
                        <button class="active">1</button>
                        <button id="kitsNextPage" onclick="changeKitsPage(1)">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
    let kitsCurrentPage = 1;
    let kitsRowsPerPage = 10;
    let kitsAllRows = [];
    let kitsFilteredRows = [];
    let kitsSortColumn = -1;
    let kitsSortDirection = 'asc';

    document.addEventListener('DOMContentLoaded', function() {
        const tbody = document.getElementById('kitsTableBody');
        kitsAllRows = Array.from(tbody.querySelectorAll('tr'));
        kitsFilteredRows = [...kitsAllRows];
        
        document.querySelectorAll('#kitsTable .sortable').forEach(th => {
            th.addEventListener('click', function() {
                const column = parseInt(this.dataset.column);
                sortKitsTable(column);
            });
        });
        
        updateKitsDisplay();
    });

    document.getElementById('kitsSearchFilter')?.addEventListener('input', function() {
        filterKitsTable();
    });

    function filterKitsTable() {
        const searchValue = document.getElementById('kitsSearchFilter').value.toLowerCase();
        
        kitsFilteredRows = kitsAllRows.filter(row => {
            const text = row.textContent.toLowerCase();
            return text.includes(searchValue);
        });
        
        kitsCurrentPage = 1;
        updateKitsDisplay();
    }

    function sortKitsTable(column) {
        const headers = document.querySelectorAll('#kitsTable .sortable');
        
        if (kitsSortColumn === column) {
            kitsSortDirection = kitsSortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            kitsSortDirection = 'asc';
            kitsSortColumn = column;
        }
        
        headers.forEach(th => {
            th.classList.remove('sorted-asc', 'sorted-desc');
            if (parseInt(th.dataset.column) === column) {
                th.classList.add(kitsSortDirection === 'asc' ? 'sorted-asc' : 'sorted-desc');
            }
        });
        
        kitsFilteredRows.sort((a, b) => {
            let aVal, bVal;
            
            switch(column) {
                case 0:
                    aVal = a.dataset.name.toLowerCase();
                    bVal = b.dataset.name.toLowerCase();
                    break;
                default:
                    aVal = a.cells[column].textContent.toLowerCase();
                    bVal = b.cells[column].textContent.toLowerCase();
            }
            
            if (aVal < bVal) return kitsSortDirection === 'asc' ? -1 : 1;
            if (aVal > bVal) return kitsSortDirection === 'asc' ? 1 : -1;
            return 0;
        });
        
        updateKitsDisplay();
    }

    function updateKitsDisplay() {
        const tbody = document.getElementById('kitsTableBody');
        const noResults = document.getElementById('kitsNoResults');
        
        tbody.innerHTML = '';
        
        if (kitsFilteredRows.length === 0) {
            noResults.style.display = 'block';
            document.querySelector('.kits-pagination-info').style.display = 'none';
            return;
        }
        
        noResults.style.display = 'none';
        document.querySelector('.kits-pagination-info').style.display = 'flex';
        
        const start = (kitsCurrentPage - 1) * kitsRowsPerPage;
        const end = Math.min(start + kitsRowsPerPage, kitsFilteredRows.length);
        const pageRows = kitsFilteredRows.slice(start, end);
        
        pageRows.forEach(row => tbody.appendChild(row.cloneNode(true)));
        
        document.getElementById('kitsPaginationText').textContent = 
            `Showing ${start + 1} to ${end} of ${kitsFilteredRows.length} entries`;
        
        updateKitsPaginationButtons();
    }

    function updateKitsPaginationButtons() {
        const totalPages = Math.ceil(kitsFilteredRows.length / kitsRowsPerPage);
        document.getElementById('kitsPrevPage').disabled = kitsCurrentPage === 1;
        document.getElementById('kitsNextPage').disabled = kitsCurrentPage === totalPages || totalPages === 0;
    }

    function changeKitsPage(direction) {
        const totalPages = Math.ceil(kitsFilteredRows.length / kitsRowsPerPage);
        const newPage = kitsCurrentPage + direction;
        
        if (newPage >= 1 && newPage <= totalPages) {
            kitsCurrentPage = newPage;
            updateKitsDisplay();
        }
    }

    function exportKitsToCSV() {
        const headers = Array.from(document.querySelectorAll('#kitsTable thead th')).map(th => th.textContent.trim());
        let csv = [headers.join(',')];
        
        kitsFilteredRows.forEach(row => {
            const cells = Array.from(row.cells).map(cell => {
                let text = cell.textContent.trim();
                text = text.replace(/[\u{1F300}-\u{1F9FF}]/gu, '').trim();
                return '"' + text.replace(/"/g, '""') + '"';
            });
            csv.push(cells.join(','));
        });
        
        const csvContent = csv.join('\n');
        const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'predefined-kits-report-' + new Date().toISOString().split('T')[0] + '.csv';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        window.URL.revokeObjectURL(url);
    }
</script>
@endsection