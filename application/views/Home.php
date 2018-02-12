<div class="row">
	<div class="col-2 text-center">
	</div>
	<div class="col-8 text-center">
		<h1 class="display-1">Home</h1>
	</div>
	<div class="col-2 text-center">
	</div>
</div>
<div class="row">
	<div class="col-6">
		<div style="display: block;">
			<img src="/assets/images/Background.png"
				style="position: relative; width: 640px; height: 640px;" />
			{sight}
			{stock}
			{body}
			{barrel}
			{grip}
		</div>
	</div>
	<div class="col-6">
		<table class="table">
			<thead>
				<th scope="col" class="text-center">Name</th>
				<th scope="col" class="text-center">Description</th>
				<th scope="col" class="text-center">Accuracy</th>
				<th scope="col" class="text-center">Fire Rate</th>
				<th scope="col" class="text-center">Damage</th>
			</thead>
			<tbody>
				{items}
					<tr>
						<th scope="row" class="text-center">{name}</th>
						<td class="text-center">{desc}</td>
						<td class="text-center">{acc}</td>
						<td class="text-center">{fr}</td>
						<td class="text-center">{dmg}</td>
					</tr>
				{/items}
				<tr>
					<th scope="row" colspan="2" class="display-4 text-center">Total</th>
					<td class="display-4 text-center">{tAcc}</td>
					<td class="display-4 text-center">{tFr}</td>
					<td class="display-4 text-center">{tDmg}</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<div class="row">
	<div class="col-12">
		<div class="dropdown text-center">
			<button class="btn btn-lg btn-primary dropdown-toggle" 
					type="button" 
					id="dropdownMenuButton" 
					data-toggle="dropdown" 
					aria-haspopup="true" 
					aria-expanded="false">
				Sets
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="/set/1">Set 1</a>
				<a class="dropdown-item" href="/set/2">Set 2</a>
			</div>
		</div>
	</div>
</div>