@extends('layouts.dashboard')

@section('content')
<div class="container characters bushu index">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Bộ thủ</div>
				<div class="panel-body">
					<div class="pull-right">
						<a href="{{route('admin.characters.index')}}" class="btn btn-primary"><i class="fa fa-globe" aria-hidden="true"></i> Hán tự 2000</a>
						<a href="{{route('admin.characters.create')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Thêm</a>
					</div>
					<div class="clearfix"></div>
					@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
					@endif
					@if (count($characters)>0)
						<dl>
						@foreach ($characters->groupBy('stroke_count')->all() as $stroke_count=>$group)
							<div class="clearfix">
								<h2>Số nét: {{$stroke_count}}</h2>
								@foreach ($group as $char)
								<a href="{{route('admin.characters.edit',$char->id)}}" class="kanji">
									<dt>{{ $char->character }}</dt>
									<dd>{{ $char->han_tu }}</dd>
								</a>
								@endforeach
							</div>
						@endforeach
						</dl>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection