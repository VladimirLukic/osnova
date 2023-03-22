<div>
	<div class="row">
		<div class="col-md-12">
			<div class="table-wrap">
				<table class="table table-striped table-hover">
					<thead class="sticky-md-top">
					<tr>
						@foreach($columns as $column)
						<th>{{ $column }}</th>
						@endforeach
						<th></th>
					</tr>
					</thead>
                    <tbody>

                    {{ $slot }}

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>