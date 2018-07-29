<div>
	@foreach($listImagenes as $image)
	<div>A</div>
	@endforeach

	<button onclick="add()">Clik</button>
</div>

<script>
	function add()
	{
		$listImagenes.push('1');
	}
</script>