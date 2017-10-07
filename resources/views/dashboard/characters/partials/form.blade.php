 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Quản lý hán tự - {{$type}}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
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
                                <input type="checkbox" name="is_bushu" {{isset ($character) && $character->is_bushu?"checked":null}}> Bộ thủ?
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Cách viết :</label>
                            <input class="form-control" name="stroke_order_link" value="{{$character->stroke_order_link or null}}">
                        </div>
                        <div class="form-group">
                            <label>Thứ tự trong sách của Đông Du :</label>
                            <input class="form-control" name="dongdu_order" value="{{$character->dongdu_order or null}}" required>
                        </div>
                        <button type="submit" class="btn btn-default">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>