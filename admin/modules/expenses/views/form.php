<div class="col-sm-12 well">
	<div class="col-sm-12">
		<form name="form1" id="form1" method="post" action="" autocomplete="off">
			<input type="text" name="plan_id" ng-model="x.id" hidden>
			<div class="col-sm-12 mb-2">
				<label>Name</label>
				<input name="name" class="form-control" ng-model="x.name">
			</div>

			<div class="col-sm-12 mb-2">
				<label>Description</label>
				<input name="description" class="form-control" ng-model="x.description" autofocus>
			</div>
			<div class="col-sm-12 mb-2">
				<label>Price</label>
				<input name="price" class="form-control" ng-model="x.price">
			</div>

			<div class="col-sm-12 mb-2">
				<label>Category</label>
				<input name="category" class="form-control" ng-model="x.category">
			</div>

			<div class="col-sm-12 mb-2">
				<label>Date</label>
				<input name="expense_date" type="date" class="form-control" ng-model="x.expense_date">
			</div>

			<div class="clearfix"></div>

			<div class="col-sm-12">
				<div id="webprogress" style="display: none">
					<img src="<?= base_url() ?>/assets/images/progress/load.gif">
				</div>
				<button type="submit" id="submitbtn" accesskey="s" ng-click="save_data(x)" class="btn btn-info"
					ng-disabled="form1.$invalid">
					<u><b>S</b></u>ave
				</button>
				<a class="btn btn-default" accesskey="c" ng-click="filter_new()"><u><b>C</b></u>lear</a>
				<br><br>
			</div>
		</form>
	</div>
</div>

<style>
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
	.mb-2{
		margin-bottom: 10px;
	}
</style>