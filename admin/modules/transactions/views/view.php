<div class="heading">
    <ol class="breadcrumb">
        <li><a href="#/">Dashboard</a></li>
        <li><a href="javascript:void(0)">transactions</a></li>
    </ol>
</div>
<div class="col-sm-12">
    <h2 class="bg-primary text-center" style="padding-top:10px;padding-bottom:10px;">Grams taken by worker</h2>
    <form name="form1" id="form1" method="post" action="" autocomplete="off">

        <div class="col-sm-12 col-md-4 mb-2">
            <label>From</label>
            <select name="given_by1"
                ng-model="x.given_by1"
                ng-options="worker.id as worker.name for worker in workers" class="form-control">
            </select>
        </div>

        <div class="col-sm-12 col-md-4 mb-2">
            <label>To</label>
            <select name="taken_by1"
                ng-model="x.taken_by1"
                ng-options="admin.id as admin.name for admin in admins" class="form-control">
            </select>
        </div>

        <div class="col-sm-12 col-md-4 mb-2">
            <label>Grams</label>
            <input name="grams1" class="form-control" ng-model="x.grams1" autofocus>
        </div>

        <div class="clearfix"></div>

        <div class="col-sm-12">
            <div id="webprogress" style="display: none">
                <img src="<?= base_url() ?>/assets/images/progress/load.gif">
            </div>
            <button type="submit" id="submitbtn1" ng-click="save_data1(x)" class="btn btn-info"
                ng-disabled="form1.$invalid">
                <u><b>S</b></u>ave
            </button>
            <a class="btn btn-default" accesskey="c" ng-click="filter_new()"><u><b>C</b></u>lear</a>
            <br><br>
        </div>
    </form>
</div>

<div class="col-sm-12">
    <h2 class="bg-primary text-center" style="padding-top:10px;padding-bottom:10px;">Grams given to worker</h2>
    <form name="form2" id="form2" method="post" action="" autocomplete="off">

        <div class="col-sm-12 col-md-4 mb-2">
            <label>From</label>
            <select name="given_by2"
                ng-model="y.given_by2"
                ng-options="admin.id as admin.name for admin in admins" class="form-control">
            </select>
        </div>

        <div class="col-sm-12 col-md-4 mb-2">
            <label>To</label>
            <select name="taken_by2"
                ng-model="y.taken_by2"
                ng-options="worker.id as worker.name for worker in workers" class="form-control">
            </select>
        </div>

        <div class="col-sm-12 col-md-4 mb-2">
            <label>Grams</label>
            <input name="grams2" class="form-control" ng-model="y.grams2" autofocus>
        </div>

        <div class="clearfix"></div>

        <div class="col-sm-12">
            <div id="webprogress" style="display: none">
                <img src="<?= base_url() ?>/assets/images/progress/load.gif">
            </div>
            <button type="submit" id="submitbtn2" ng-click="save_data2(y)" class="btn btn-info"
                ng-disabled="form2.$invalid">
                <u><b>S</b></u>ave
            </button>
            <a class="btn btn-default" accesskey="c" ng-click="filter_new()"><u><b>C</b></u>lear</a>
            <br><br>
        </div>
    </form>
</div>

<div class="col-sm-12 well">
    <div class="table_horizontal">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-group custom_addon">
                    <div class="input-group-addon" style="box-shadow:none; -webkit-box-shadow:none;">
                        <i class="fa fa-search"></i>
                    </div>
                    <input type="text" ng-model="search_text" placeholder="Search here...">
                </div>
            </div>
        </div>
    </div>
    <div class="table-data">
        <div class="table-responsive-custom">
            <table class="table table-hover">
                <thead>
                    <tr class="active">
                        <th>Sl No.</th>
                        <th>To</th>
                        <th>Type</th>
                        <th>Grams</th>
                        <th>Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr dir-paginate="z in datadb | filter: search_text | itemsPerPage: 10">
                        <td>{{$index+1}}</td>
                        <td>{{z.admin_id}}</td>
                        <td>{{z.direction}}</td>
                        <td>{{z.grams}}</td>
                        <td>{{z.created_at}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-12">
        <dir-pagination-controls boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)"
            template-url="app/pagination"></dir-pagination-controls>
    </div>
</div>
<style>
    .table-responsive-custom {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive-custom table {
        min-width: 1000px;
    }

    .form-check {
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px double #fff;
        border-radius: 4px;
    }

    .mb-2 {
        margin-bottom: 10px;
    }
</style>