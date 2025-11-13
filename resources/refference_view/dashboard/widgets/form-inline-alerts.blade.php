@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
@if(session('warning'))
    <div class="alert alert-warning">
        {{ session('warning') }}
    </div>
@endif
@if(session('info'))
    <div class="alert alert-info">
        {{ session('info') }}
    </div>
@endif
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('status'))
    <div class="alert alert-info">
        {{ session('status') }}
    </div>
@endif
@if(session('message'))
    <div class="alert alert-primary">
        {{ session('message') }}
    </div>
@endif
@if(session('alert'))
    <div class="alert alert-secondary">
        {{ session('alert') }}
    </div>
@endif
@if(session('notice'))
    <div class="alert alert-light">
        {{ session('notice') }}
    </div>
@endif