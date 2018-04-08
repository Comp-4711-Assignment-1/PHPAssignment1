<div class="container">
	<div class="row">
		<div class="col-8 offset-2 text-center">
			<h1>Create Set</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-8 offset-2">
			<form action="Add" method="post" style="padding: 10%;">
				<input type="hidden" name="id" value="" />
				<div class="form-row">
					<div class="form-group col-4 offset-4">
						<label for="inputScope">Scope</label>
						<select name="sight" id="inputScope" class="form-control">
							<option selected></option>
							{sights}
								{item}
							{/sights}
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-4 ">
						<label for="inputStock">Stock</label>
						<select name="stock" id="inputStock" class="form-control">
							<option selected></option>
							{stocks}
								{item}
							{/stocks}
						</select>
					</div>
					<div class="form-group col-4 ">
						<label for="inputBody">Body</label>
						<select name="body" id="inputBody" class="form-control">
							<option selected></option>
							{bodies}
								{item}
							{/bodies}
						</select>
					</div>
					<div class="form-group col-4 ">
						<label for="inputBarrel">Barrel</label>
						<select name="barrel" id="inputBarrel" class="form-control">
							<option selected></option>
							{barrels}
								{item}
							{/barrels}
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-4 offset-4">
						<label for="inputGrip">Grip</label>
						<select name="grip" id="inputGrip" class="form-control">
							<option selected></option>
							{grips}
								{item}
							{/grips}
						</select>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Create Set</button>
			</form>
		</div>
	</div>
</div>