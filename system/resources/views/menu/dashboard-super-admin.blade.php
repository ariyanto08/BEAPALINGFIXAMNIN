@extends('template.super-admin')

@section('content')
<div class="row ">
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0">Total User Operasional</p>
                        <h4 class="my-1">{{ $user}}</h4>
                    </div>
                    <div class="widgets-icons ms-auto"><i class='bx bxs-group'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
