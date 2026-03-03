<div class="heading">
	<ol class="breadcrumb">
		<li><a href="#/">Dashboard</a></li>
		<li><a href="javascript:void(0)">Expenses</a></li>
	</ol>
</div>
<div class="col-sm-12 well">
	<div class="table_horizontal">
		<div class="row">
			<div class="col-xs-7 col-md-9">
				<div class="input-group custom_addon">
					<div class="input-group-addon" style="box-shadow:none; -webkit-box-shadow:none;">
						<i class="fa fa-search"></i>
					</div>
					<input type="text" ng-model="search_text" placeholder="Search here...">
				</div>
			</div>
			<div class="col-xs-5 col-md-3 text-right">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#expensesModal">
					Add expenses
				</button>
			</div>
		</div>
	</div>
	<div class="table-data">
		<div class="table-responsive-custom">
		<table class="table table-hover">
			<thead>
				<tr class="active">
					<th>Sl No.</th>
					<th>Name</th>
					<th>Description</th>
					<th>Price</th>
					<th>Category</th>
					<th>Date</th>
					<th style="width:85px">Action</th>
				</tr>
			</thead>
			<tbody>
				<tr dir-paginate="y in datadb | filter: search_text | itemsPerPage: 10">
					<td>{{$index+1}}</td>
					<td>{{y.name}}</td>
					<td>{{y.description}}</td>
					<td>{{y.price}}</td>
					<td>{{y.category}}</td>
					<td>{{y.expense_date}}
					</td>
					<td>
						<a href="javascript:void(0)" ng-click="update_call(y)" data-toggle="modal"
							data-target=".bs-example-modal-sm">
							<span class="fa fa-pencil fa-2x"></span>
						</a>
						&nbsp;&nbsp;
						<a href="javascript:void(0)" style="color:red" ng-click="delete_data(y.id)">
							<span class="fa fa-trash fa-2x"></span>
						</a>
					</td>
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

<div class="modal fade" id="expensesModal" tabindex="-1" role="dialog" aria-labelledby="expensesModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" ng-click="close_modal()">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="expensesModalLabel">Add expenses</h4>
			</div>

			<div class="modal-body" style="max-height:70vh; overflow-y:auto;">
				<?php $this->load->view('form'); ?>
			</div>
		</div>
	</div>
</div>
<style>
	 .table-responsive-custom {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive-custom table {
        min-width: 800px;
    }
</style>