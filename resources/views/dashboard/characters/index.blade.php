@extends('layouts.dashboard')

@section('content')
<div class="container characters index">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Quản lý Hán tự</div>
				<div class="panel-body">
					<div class="pull-right">
						<a href="{{route('admin.characters.bushu')}}" class="btn btn-primary"><i class="fa fa-filter" aria-hidden="true"></i> Chỉ Bộ thủ</a>
						<a href="{{route('admin.characters.create')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Thêm</a>
					</div>
					<div class="clearfix"></div>
					@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
					@endif
					@if (count($characters)>0)
						<div class="row">
						@foreach ($characters->chunk(6) as $chunk)
							@foreach ($chunk as $char)
							<div class="col-md-2">
								<a href="{{route('admin.characters.edit',$char->id)}}" class="kanji">
									<dl>
										<dt>{{ $char->character }}</dt>
										<dd>{{ $char->han_tu }}</dd>
									</dl>
								</a>
							</div>
							@endforeach
							<div class="clearfix hidden-xs"></div>
						@endforeach
						</div>
						{{$characters->links()}}
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection