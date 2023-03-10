
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="table-wrap">
            <table class="table table-striped table-hover">
                <!-- {{-- <thead class="sticky-md-top"> --}} -->
                <thead>
					
					<tr>
						@foreach($data['columns'] as $column)
							<th>{{ $column }}</th>
						@endforeach
						<th></th>
					</tr>
				</thead>
				<tbody>
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

			</div>
		</div>
	</div>
	
@endsection

