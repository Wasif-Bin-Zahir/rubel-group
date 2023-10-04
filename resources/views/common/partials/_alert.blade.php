@if (session()->has('alert.status'))
    <div class="alert alert-{{ session()->get('alert.status') }} alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5>{{ session()->get('alert.title') }}</h5>
        {{ session()->get('alert.body') }}
    </div>
@endif
