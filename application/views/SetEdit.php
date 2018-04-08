<div class="container">
	<div class="row">
		<div class="col-8 offset-2 text-center">
			<h1>Edit Set {setNumber}</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-8 offset-2">
			<form action="/Set/change" method="post" style="padding: 10%;">
				{id}
				<div class="form-row">
					<div class="form-group col-4 offset-4">
						<label for="inputScope">Scope</label>
						<select name="sight" id="inputScope" class="form-control">
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
							{stocks}
								{item}
							{/stocks}
						</select>
					</div>
					<div class="form-group col-4 ">
						<label for="inputBody">Body</label>
						<select name="body" id="inputBody" class="form-control">
							{bodies}
								{item}
							{/bodies}
						</select>
					</div>
					<div class="form-group col-4 ">
						<label for="inputBarrel">Barrel</label>
						<select name="barrel" id="inputBarrel" class="form-control">
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
							{grips}
								{item}
							{/grips}
						</select>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Save Set</button>
			</form>
		</div>
	</div>
</div>
