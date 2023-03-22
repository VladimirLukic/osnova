
@extends('layouts.app')

@section('content')

<x-Columns :columns="$data['columns']">

	@if (count($data['users']) > 0)								
		@foreach ($data['users'] as $user)
			<tr>
				<td>{{ $user->name.' '. $user->last_name }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->phone }}</td>
				<td>{{ $user->role }}</td>
				<td>
					<a href="/users/{{ $user->id }}" class="btn btn-success">View</a>
				</td>
			</tr>	
		@endforeach
	@else
		<h3>There are no entries</h3>
	@endif

</x-Columns>
	
@endsection

