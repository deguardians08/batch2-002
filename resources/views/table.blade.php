@extends("template")
@section("content")
<div class="text-right">
<a href="{{ url('form') }}" class="btn btn-primary">Tambah Data</a>
<table class="table table-boredered">
	<thead>
	<tr>
		<th>KOLOM HEADER</th>
		<th>KOLOM HEADER</th>
		<th>KOLOM HEADER</th>
		<th>KOLOM HEADER</th>
		<th>KOLOM HEADER</th>
	</tr>
	</thead>
	<tbody>
	<tr>
	<td>data</td>
	<td>data</td>
	<td>data</td>
	<td>data</td>
	<td>data</td>
	</tr>
	</tbody>
</table>
@endsection