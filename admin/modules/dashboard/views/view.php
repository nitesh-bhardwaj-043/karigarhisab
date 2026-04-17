<div class="inner-content">
    <div class="panel theme-panel">
        <div class="panel-heading bg-primary text-white p-3 rounded-top">
            <h2 class="m-0"><i class="fa fa-tachometer-alt me-2"></i> Dashboard</h2>
        </div>
        <div class="panel-body bg-white p-4 rounded-bottom shadow-sm">
            <div class="row g-4">

                <div class="col-xs-12 bg-primary" style="margin-bottom: 20px;">
                    <div class="col-xs-12 col-md-6 shadow-sm text-right text-white rounded">
                        <h3 class="mt-2">{{name}} &nbsp; &nbsp; <b> -- </b></h3>
                    </div>
                    <div class="col-xs-12 col-md-6 shadow-sm text-left text-white rounded">
                        <h3 class="mt-2">{{grams}} grams</h3>
                    </div>
                </div>

                <!-- Newly Arrived Products -->
                <div class="col-md-3 column" ui-sref="workers">
                    <div class="feature-box shadow-sm text-center p-4 rounded bg-light-blue">
                        <span class="feature-icon text-blue"><i class="fa fa-archive fa-2x"></i></span>
                        <h5 class="mt-2">Workers</h5>
                        <label><b>{{workers}}</b> items</label>
                    </div>
                </div>
                <div class="col-md-3 column" ui-sref="transactions">
                    <div class="feature-box shadow-sm text-center p-4 rounded bg-light-blue">
                        <span class="feature-icon text-blue"><i class="fa fa-archive fa-2x"></i></span>
                        <h5 class="mt-2">Transactions</h5>
                        <label><b>{{transactions}}</b> items</label>
                    </div>
                </div>
                <div class="col-md-3 column" ui-sref="records">
                    <div class="feature-box shadow-sm text-center p-4 rounded bg-light-blue">
                        <span class="feature-icon text-blue"><i class="fa fa-archive fa-2x"></i></span>
                        <h5 class="mt-2">Records</h5>
                        <label><b>{{records}}</b> items</label>
                    </div>
                </div>
                <div class="col-md-3 column" ui-sref="expenses">
                    <div class="feature-box shadow-sm text-center p-4 rounded bg-light-blue">
                        <span class="feature-icon text-blue"><i class="fa fa-archive fa-2x"></i></span>
                        <h5 class="mt-2">Expenses</h5>
                        <label><b>{{expenses}}</b> items</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel theme-panel mt-4">
    <div class="panel-heading bg-success text-white p-3 rounded-top">
        <h4 class="m-0">
            <i class="fa fa-chart-line me-2"></i> Summary & Analysis
        </h4>
    </div>

    <div class="panel-body bg-white p-4 rounded-bottom shadow-sm">

        <div class="row">

            <!-- Monthly Expense Card -->
            <div class="col-md-4">
                <div class="summary-box text-center p-4 shadow-sm rounded">
                    <h6 class="text-muted">This Month Expenses</h6>
                    <h2 class="text-danger mt-2">₹ {{this_month.total}}</h2>
                </div>
            </div>

            <!-- Last 5 Transactions -->
            <div class="col-md-8">
                <div class="summary-box p-3 shadow-sm rounded">
                    <h6 class="mb-3">Last 5 Transactions</h6>

                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Worker</th>
                                <th>Grams</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="z in datadb | limitTo:5">
                                <td>{{z.worker_name}}</td>
                                <td>{{z.grams}}</td>
                                <td>
                                    <span ng-style="{
                                        'background-color': z.direction == 1 ? '#ff4d4d' : '#28a745',
                                        'color': 'white',
                                        'padding': '3px 8px',
                                        'border-radius': '10px',
                                        'font-size': '12px'
                                    }">
                                        {{ z.direction == 1 ? 'Given' : 'Taken' }}
                                    </span>
                                </td>
                            </tr>

                            <tr ng-if="!datadb.length">
                                <td colspan="3" class="text-center text-muted">
                                    No transactions found
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
</div>
</div>

<style>
    /* Theme Colors */
    .text-blue {
        color: #0d6efd;
        /* Bootstrap primary blue */
    }

    .bg-light-blue {
        background: #f0f7ff;
        /* light blue shade */
        transition: 0.3s ease-in-out;
    }

    .bg-light-blue:hover {
        background: #8dbdf7ff;
        /* slightly darker on hover */
        transform: translateY(-5px);
    }

    .panel {
        border-radius: 12px;
        overflow: hidden;
    }

    .feature-box h5 {
        font-weight: 600;
        color: #0d3c61;
    }

    .feature-box label {
        color: #3b5d7a;
        font-size: 14px;
    }

    .column {
        cursor: pointer;
    }

    .summary-box {
    background: #f9fbfd;
    transition: 0.3s;
}

.summary-box:hover {
    transform: translateY(-3px);
}
</style>