<x-bootstrap title="{{ $customer->title }}">
    <div class="row g-4">
        <div class="col-lg-12">
            <a class="btn btn-primary" href="{{ route('customer.index') }}"> Back</a>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-lg-4">
            <img src="{{ $customer->photo }}" class="img-fluid img-thumbnail "
                style="    width: 300px;
    height: 300px;
    border-radius: 50%; 
    object-fit: cover;" />
        </div>
        <div class="col-lg-8">

            <h2>{{ $customer->firstname }} {{ $customer->lastname }}</h2>
            <div><strong>Email: </strong>{{ $customer->email }} </div>
            <div><strong>Phone Number : </strong>{{ $customer->phone }} </div>

            <hr />
            <div>
                <strong>Address: </strong>
                <span class="">{{ $customer->address }}</span>
            </div>
            <hr />

        </div>
    </div>
</x-bootstrap>
