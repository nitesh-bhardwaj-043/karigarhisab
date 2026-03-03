<div class="inner-content">
    <div class="panel theme-panel">
        <div class="panel-heading bg-primary text-white p-3 rounded-top">
            <h2 class="m-0"><i class="fa fa-tachometer-alt me-2"></i> Workers</h2>
        </div>
        <div class="panel-body bg-white p-4 rounded-bottom shadow-sm">
            <div class="row g-4">
                <?php foreach ($data as $worker): ?>
                    <div class="col-md-3 column" ui-sref="worker_detail({id:<?= $worker['id'] ?>})">
                        <div class="feature-box shadow-sm text-center p-4 rounded bg-light-blue">
                            <div class="worker-image mb-3">
                                <img src="<?= base_url('assets/uploads/workers/thumb/' . $worker['image']) ?>" 
                                     alt="<?= htmlspecialchars($worker['name'], ENT_QUOTES, 'UTF-8') ?>" 
                                     class="rounded-circle img-fluid" 
                                     style="width: 80px; height: 80px; object-fit: cover;">
                            </div>
                            <h5 class="mt-2"><?= htmlspecialchars($worker['name'], ENT_QUOTES, 'UTF-8') ?></h5>
                            <div class="worker-stats mt-3">
                                <div class="stat-item text-success">
                                    <small>Taken:</small> 
                                    <span><?= number_format($worker['taken'], 2) ?> g</span>
                                </div>
                                <div class="stat-item text-danger">
                                    <small>Given:</small> 
                                    <span><?= number_format($worker['given'], 2) ?> g</span>
                                </div>
                                 <div class="stat-item text-warning">
                                    <small>Net:</small> 
                                    <span><?= number_format($worker['taken'] - $worker['given'], 2) ?> g</span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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

    .worker-image img {
        border: 3px solid #fff;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    
    .worker-stats {
        font-size: 1.5rem;
        border-top: 1px solid rgba(0,0,0,0.1);
        padding-top: 10px;
    }
    
    .stat-item {
        margin: 5px 0;
    }
    
    .stat-item small {
        opacity: 0.7;
        display: inline-block;
        width: 45px;
    }
</style>