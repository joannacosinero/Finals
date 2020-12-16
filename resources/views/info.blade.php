@if($info = Session::get('info'))

    <div class="card">
        <div class="card-body bg-success text-white">
            {{$info}}
        </div>
    </div>

@endif
