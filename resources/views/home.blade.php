@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
    <?php for($i = 0; $i < 10;$i++){ ?>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">แบบทดสอบ</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Wellcome {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>
@endsection
