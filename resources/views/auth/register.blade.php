@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">สมัครสมาชิก</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">ชื่อ-สนามกุล</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">อีเมล์</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">รหัสผ่าน</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">ใส่รหัสผ่านอีกครั้ง</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">สถานะ</label>
                            <div class="col-md-7">
                                <label class="radio-inline"><input onchange="onChangeKey('stu')" type="radio" name="status" value="student" required checked>นักเรียน/นักศึกษา</label>
                                <label class="radio-inline"><input onchange="onChangeKey('teac')" type="radio" name="status" value="teacher" required>ครู/อาจารย์</label>
                            </div>
                        </div>
                        <div id="keyFor_tracher" style="display:none;">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" >
                                <label for="position" class="col-md-4 control-label">ตำเเหน่ง</label>
                                <div class="col-md-6">
                                    <input id="position" type="text" class="form-control" name="position" required >
                                    @if ($errors->has('position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}" >
                                <label for="tel" class="col-md-4 control-label">เบอร์โทรติดต่อ</label>
                                <div class="col-md-6">
                                    <input id="tel" type="text" class="form-control" name="tel" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required >
                                    @if ($errors->has('tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function onChangeKey(status){
        if(status == 'stu'){
            $('#keyFor_tracher').fadeOut();
        }else{
            $('#keyFor_tracher').fadeIn();
        }   
    }
</script>
@endsection
