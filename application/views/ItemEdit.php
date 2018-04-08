<div class="container">
	<div class="row">
		<div class="col-2 text-center">
		</div>
		<div class="col-8 text-center">
			<h1>Editing: {name}</h1>
		</div>
		<div class="col-2 text-center">
		</div>
	</div>

	<div class="row">
		<div class="col-2 text-center">
		</div>
		<div class="col-8 text-center">
			<img src="/{img}" class="img-fluid">
		</div>
		<div class="col-2 text-center">
		</div>
	</div>

	<form action="/Item/Save" method="post">

		<input type="hidden" name="id" value="{id}">
		<div class="form-row">
			<div class="col-xl text-center" style="margin-bottom: 2em">
				<h5>Name</h5>
				<input type="text" name="name" value="{name}">
			</div>
		</div>

		<div class="form-row">
			<div class="col-xl text-center" style="margin-bottom: 2em">
				<h5>Description</h5>
				<input type="text" name="desc" value="{desc}">
			</div>
		</div>

		<div class="form-row">
			<div class="col-xl text-center" style="margin-bottom: 2em">
				<h5>Accuracy</h5>
				<input type="text" name="acc" value="{acc}">
			</div>
		</div>

		<div class="form-row">
			<div class="col-xl text-center" style="margin-bottom: 2em">
				<h5>Fire Rate</h5>
				<input type="text" name="fr" value="{fr}">
			</div>
		</div>

		<div class="form-row">
			<div class="col-xl text-center">
				<h5>Damage</h5>
				<input type="text" name="dam" value="{dam}">
			</div>
		</div>
		<input type="hidden" name="img" value={img}>
		<input type="hidden" name="category" value="{category}">

		<div class="form-row">
			<div class="col-xl-12 text-center">
				<button type="submit" class="btn btn-primary" style="margin: 5%">Save Item</button>
			</div>
		</div>
	</form>
</div>