@extends("layouts.global")

@section("title") Testing @endsection

@section("content")

<div class="container mt-4">
   
    <div class="card">
        <div class="card-body">
             <h5>Page User</h5>
            This is some text within a card body.
            Page User 
        </div>
    </div>
</div>

@can('admin')
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
             <h5>ADMIN</h5>
            This is some text within a card body.
            ADMIN 
        </div>
    </div>
</div>
@endcan

@endsection