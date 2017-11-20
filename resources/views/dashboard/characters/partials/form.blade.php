 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Quản lý hán tự - {{$type}}
                </div>
                <div class="panel-body">
                    <div class="pull-right">
                        <a href="{{route('admin.characters.index')}}" class="btn btn-primary"><i class="fa fa-backward"></i> Index</a>
                        @if (isset($previous))
                        <a href="{{route('admin.characters.edit',$previous->id)}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Previous</a>
                        @endif
                        @if (isset($next))
                            <a href="{{route('admin.characters.edit',$next->id)}}" class="btn btn-primary"><i class="fa fa-arrow-right"></i> Next</a>
                        @endif
                    </div>
                    <div class="clearfix"></div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (isset($character))
                        <div data-toggle="kanji-draw" data-character="{{$character->character}}" id="character-strokes">
                            <img src="{{asset('kanji-strokes/0'.utf16_code($character->character).'.svg')}}">
                        </div>
                    @endif
                    <form class="form" action="{{$target}}" method="POST">
                        {{csrf_field()}}
                        {{!empty($method)?method_field($method):null}}
                        <div class="form-group">
                            <label>Hán tự :</label>
                            <input class="form-control" name="character" value="{{$character->character or null}}">
                        </div>
                        <div class="form-group">
                            <label>Âm Hán Việt :</label>
                            <input class="form-control" name="han_tu" value="{{$character->han_tu or null}}">
                        </div>
                        <div class="form-group">
                            <label>Số nét :</label>
                            <input class="form-control" name="stroke_count" value="{{$character->stroke_count or null}}">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="is_bushu" {{isset ($character) && !empty($character->bushu)?"checked":null}}> Bộ thủ?
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Cách viết :</label>
                            <input class="form-control" name="stroke_order_link" value="{{$character->stroke_order_link or null}}">
                        </div>
                        <div class="form-group">
                            <label>Thứ tự trong sách của Đông Du :</label>
                            <input class="form-control" name="dongdu_order" value="{{$character->dongdu_order or null}}">
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>