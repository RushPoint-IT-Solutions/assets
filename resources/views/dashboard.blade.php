@extends('layouts.header')

@section('content')

<div class="row">
    <div class="col-xl-2 col-md-4 col-6 mb-3">
        <a href="/hardware" style="text-decoration: none;">
            <div class="dashboard-card bg-teal">
                <div class="icon-circle">
                    <i class="ri-computer-line"></i>
                </div>
                <h2 data-count="2547">2,547</h2>
                <p>Assets</p>
                <div class="trend trend-up">
                    <i class="ri-arrow-up-line"></i> 5.2% from last month
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-2 col-md-4 col-6 mb-3">
        <a href="/licenses" style="text-decoration: none;">
            <div class="dashboard-card bg-maroon">
                <div class="icon-circle">
                    <i class="ri-file-text-line"></i>
                </div>
                <h2 data-count="342">342</h2>
                <p>Licenses</p>
                <div class="trend trend-up">
                    <i class="ri-arrow-up-line"></i> 2.1% from last month
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-2 col-md-4 col-6 mb-3">
        <a href="/accessories" style="text-decoration: none;">
            <div class="dashboard-card bg-orange">
                <div class="icon-circle">
                    <i class="ri-plug-line"></i>
                </div>
                <h2 data-count="1234">1,234</h2>
                <p>Accessories</p>
                <div class="trend trend-down">
                    <i class="ri-arrow-down-line"></i> 1.3% from last month
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-2 col-md-4 col-6 mb-3">
        <a href="/consumables" style="text-decoration: none;">
            <div class="dashboard-card bg-purple">
                <div class="icon-circle">
                    <i class="ri-inbox-line"></i>
                </div>
                <h2 data-count="567">567</h2>
                <p>Consumables</p>
                <div class="trend trend-up">
                    <i class="ri-arrow-up-line"></i> 8.4% from last month
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-2 col-md-4 col-6 mb-3">
        <a href="/components" style="text-decoration: none;">
            <div class="dashboard-card bg-yellow">
                <div class="icon-circle">
                    <i class="ri-cpu-line"></i>
                </div>
                <h2 data-count="890">890</h2>
                <p>Components</p>
                <div class="trend trend-up">
                    <i class="ri-arrow-up-line"></i> 3.7% from last month
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-2 col-md-4 col-6 mb-3">
        <a href="/users" style="text-decoration: none;">
            <div class="dashboard-card bg-light-blue">
                <div class="icon-circle">
                    <i class="ri-team-line"></i>
                </div>
                <h2 data-count="1456">1,456</h2>
                <p>People</p>
                <div class="trend trend-up">
                    <i class="ri-arrow-up-line"></i> 12.3% from last month
                </div>
            </div>
        </a>
    </div>
</div>

<!-- Recent Activity and Status Chart -->
<div class="row equal-height-row">
    <div class="col-xl-8 mb-3">
        <div class="custom-card">
            <div class="custom-card-header">
                <h5 class="custom-card-title mb-0">Recent Activity</h5>
                <div class="filter-group">
                    <input type="date" id="activityDateFilter" class="form-control form-control-sm" style="width: 150px;">
                    <select id="activityTypeFilter" class="form-select form-select-sm" style="width: 120px;">
                        <option value="">All Actions</option>
                        <option value="checkout">Checkout</option>
                        <option value="checkin">Checkin</option>
                        <option value="create">Create</option>
                        <option value="update">Update</option>
                        <option value="delete">Delete</option>
                    </select>
                </div>
            </div>
            <div class="custom-card-body">
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="activityTable">
                        <thead>
                            <tr>
                                <th style="width: 40px;"></th>
                                <th>Date</th>
                                <th>Created By</th>
                                <th>Action</th>
                                <th>Item</th>
                                <th>Target</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="ri-checkbox-circle-fill text-success fs-18"></i></td>
                                <td><small>Nov 13, 10:30 AM</small></td>
                                <td><a href="#" class="text-body">John Doe</a></td>
                                <td><span class="badge badge-success">Checkout</span></td>
                                <td><a href="#" class="text-primary">MacBook Pro #12345</a></td>
                                <td><a href="#" class="text-body">Jane Smith</a></td>
                            </tr>
                            <tr>
                                <td><i class="ri-add-circle-fill text-primary fs-18"></i></td>
                                <td><small>Nov 13, 09:15 AM</small></td>
                                <td><a href="#" class="text-body">Admin User</a></td>
                                <td><span class="badge badge-info">Create</span></td>
                                <td><a href="#" class="text-primary">Dell Monitor #98765</a></td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td><i class="ri-arrow-go-back-fill text-warning fs-18"></i></td>
                                <td><small>Nov 13, 08:45 AM</small></td>
                                <td><a href="#" class="text-body">Sarah Johnson</a></td>
                                <td><span class="badge badge-warning">Checkin</span></td>
                                <td><a href="#" class="text-primary">iPhone 13 #54321</a></td>
                                <td><a href="#" class="text-body">Bob Wilson</a></td>
                            </tr>
                            <tr>
                                <td><i class="ri-edit-fill text-info fs-18"></i></td>
                                <td><small>Nov 13, 08:20 AM</small></td>
                                <td><a href="#" class="text-body">Mike Brown</a></td>
                                <td><span class="badge badge-info">Update</span></td>
                                <td><a href="#" class="text-primary">Office License #11223</a></td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td><i class="ri-checkbox-circle-fill text-success fs-18"></i></td>
                                <td><small>Nov 12, 04:30 PM</small></td>
                                <td><a href="#" class="text-body">Emily Davis</a></td>
                                <td><span class="badge badge-success">Checkout</span></td>
                                <td><a href="#" class="text-primary">Logitech Mouse #44556</a></td>
                                <td><a href="#" class="text-body">Tom Anderson</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="/reports/activity" class="btn btn-primary btn-sm d-flex justify-content-center align-items-center" style="height:35px; width: 20%;">
                        View All Activity&emsp;→
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-4 mb-3">
        <div class="custom-card">
            <div class="custom-card-header">
                <h5 class="custom-card-title mb-0">Assets by Status</h5>
            </div>
            <div class="custom-card-body">
                <div class="chart-container">
                    <canvas id="statusPieChart" 
                        data-ready="1234" 
                        data-deployed="892" 
                        data-pending="267" 
                        data-broken="154"
                        width="200" 
                        height="200"
                        aria-label="Asset status distribution chart"></canvas>
                </div>
                <ul class="chart-legend">
                    <li>
                        <span class="chart-legend-color" style="background: #28a745;"></span>
                        <div class="chart-legend-text">
                            Ready to Deploy
                            <span class="chart-legend-count">1,234 <span class="chart-legend-percent">48%</span></span>
                        </div>
                    </li>
                    <li>
                        <span class="chart-legend-color" style="background: #17a2b8;"></span>
                        <div class="chart-legend-text">
                            Deployed
                            <span class="chart-legend-count">892 <span class="chart-legend-percent">35%</span></span>
                        </div>
                    </li>
                    <li>
                        <span class="chart-legend-color" style="background: #ffc107;"></span>
                        <div class="chart-legend-text">
                            Pending
                            <span class="chart-legend-count">267 <span class="chart-legend-percent">11%</span></span>
                        </div>
                    </li>
                    <li>
                        <span class="chart-legend-color" style="background: #dc3545;"></span>
                        <div class="chart-legend-text">
                            Broken
                            <span class="chart-legend-count">154 <span class="chart-legend-percent">6%</span></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Locations and Categories -->
<div class="row equal-height-row">
    <div class="col-xl-6 mb-3">
        <div class="custom-card">
            <div class="custom-card-header">
                <h5 class="custom-card-title mb-0">Top Locations</h5>
            </div>
            <div class="custom-card-body">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Assets</th>
                                <th>Assigned</th>
                                <th>People</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#" class="text-primary">Marinduque Office</a></td>
                                <td>456</td>
                                <td>342</td>
                                <td>89</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-primary">Marinduque Office</a></td>
                                <td>389</td>
                                <td>298</td>
                                <td>76</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-primary">Marinduque Office</a></td>
                                <td>234</td>
                                <td>187</td>
                                <td>52</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-primary">Marinduque Office</a></td>
                                <td>178</td>
                                <td>145</td>
                                <td>38</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-primary">Marinduque Office</a></td>
                                <td>156</td>
                                <td>123</td>
                                <td>34</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end mt-1">
                    <a href="/locations" class="btn btn-primary btn-sm d-flex justify-content-center align-items-center" style="height:35px; width: 30%;">
                        View All locations&emsp;→
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 mb-3">
        <div class="custom-card">
            <div class="custom-card-header">
                <h5 class="custom-card-title">Asset Categories</h5>
            </div>
            <div class="custom-card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Assets</th>
                                <th>Accessories</th>
                                <th>Consumables</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#" class="text-primary">Laptops</a></td>
                                <td><span class="badge bg-info-subtle text-info">Asset</span></td>
                                <td>892</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-primary">Desktops</a></td>
                                <td><span class="badge bg-info-subtle text-info">Asset</span></td>
                                <td>567</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-primary">Monitors</a></td>
                                <td><span class="badge bg-info-subtle text-info">Asset</span></td>
                                <td>445</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-primary">Peripherals</a></td>
                                <td><span class="badge bg-warning-subtle text-warning">Accessory</span></td>
                                <td>0</td>
                                <td>1234</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-primary">Mobile Devices</a></td>
                                <td><span class="badge bg-info-subtle text-info">Asset</span></td>
                                <td>334</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end mt-1">
                    <a href="/categories" class="btn btn-primary btn-sm d-flex justify-content-center align-items-center" style="height:35px; width: 30%;">
                        View All Categories&emsp;→
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>
<script>
    // Asset Status Chart
    var ctx = document.getElementById('statusPieChart');
    if (ctx) {
        const canvas = ctx;
        const ready = parseInt(canvas.dataset.ready);
        const deployed = parseInt(canvas.dataset.deployed);
        const pending = parseInt(canvas.dataset.pending);
        const broken = parseInt(canvas.dataset.broken);
        
        ctx = ctx.getContext('2d');
        var statusPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Ready to Deploy', 'Deployed', 'Pending', 'Broken'],
                datasets: [{
                    data: [ready, deployed, pending, broken],
                    backgroundColor: [
                        '#28a745',
                        '#17a2b8',
                        '#ffc107',
                        '#dc3545'
                    ],
                    borderWidth: 2,
                    borderColor: '#fff'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                var label = context.label || '';
                                var value = context.parsed || 0;
                                var total = context.dataset.data.reduce((a, b) => a + b, 0);
                                var percentage = Math.round((value / total) * 100);
                                return label + ': ' + value.toLocaleString() + ' (' + percentage + '%)';
                            }
                        }
                    }
                }
            }
        });
    }

    // Activity filters
    document.getElementById('activityDateFilter')?.addEventListener('change', function() {
        filterActivity();
    });

    document.getElementById('activityTypeFilter')?.addEventListener('change', function() {
        filterActivity();
    });

    function filterActivity() {
        const dateFilter = document.getElementById('activityDateFilter').value;
        const typeFilter = document.getElementById('activityTypeFilter').value.toLowerCase();
        const rows = document.querySelectorAll('#activityTable tbody tr');
        
        rows.forEach(row => {
            let showRow = true;
            
            // Type filter
            if (typeFilter) {
                const badge = row.querySelector('.badge');
                if (badge && !badge.textContent.toLowerCase().includes(typeFilter)) {
                    showRow = false;
                }
            }
            
            row.style.display = showRow ? '' : 'none';
        });
    }

    // Number animation on page load
    document.addEventListener('DOMContentLoaded', function() {
        const counters = document.querySelectorAll('[data-count]');
        
        counters.forEach(counter => {
            const target = parseInt(counter.dataset.count);
            const duration = 1000;
            const increment = target / (duration / 16);
            let current = 0;
            
            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    counter.textContent = Math.floor(current).toLocaleString();
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target.toLocaleString();
                }
            };
            
            updateCounter();
        });
    });
</script>
@endsection