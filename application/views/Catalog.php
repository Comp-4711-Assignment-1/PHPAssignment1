<div class="row">
	<div class="col-2 text-center">
	</div>
	<div class="col-8 text-center">
		<h1 class="display-1">Catalog</h1>
	</div>
	<div class="col-2 text-center">
	</div>
</div>
{items}
<div class="row border-bottom">
	<div class="col-2 offset-2 text-center">
		<h2>{name}</h2>
	</div>
	<div class="col-2" style="margin: auto;">
		{img}
	</div>
	<div class="col-2 text-center" style="margin: 1%;">
		<p>{desc}<p>
		Accuracy: {acc}<br />
		Fire Rate: {fr}<br />
		Damage: {dmg}
	</div>
	<div class="col-2" style="margin: auto; display: flex; align-items: center;">
		{edit}
	</div>
</div>
{/items}