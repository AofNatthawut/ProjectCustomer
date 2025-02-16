<x-bootstrap title="Edit Customer">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="py-4">
                <a class="btn btn-primary" href="{{ route('customer.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('customer.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="row g-4">
            <div class="col-md-12">
                <strong>Firstname: <span class="text-danger">*</span> </strong>
                <input type="text" name="firstname" class="form-control" value="{{ $customer->firstname }}" required>
            </div>
            <div class="col-md-12">
                <strong>Lastname: <span class="text-danger">*</span> </strong>
                <input type="text" name="lastname" class="form-control" value="{{ $customer->lastname }}" required>
            </div>
            <div class="col-md-12">
                <strong>Email: <span class="text-danger">*</span> </strong>
                <input type="text" name="email" class="form-control" value="{{ $customer->email }}" required>
            </div>
            <div class="col-md-12">
                <strong>Phone: <span class="text-danger">*</span> </strong>
                <input type="text" name="phone" class="form-control" value="{{ $customer->phone }}" required>
            </div>
            <div class="col-md-12">
                <strong>Address: <span class="text-danger">*</span> </strong>
                <input type="text" name="address" class="form-control" value="{{ $customer->address }}" required>
            </div>
          
            <div class="col-md-12">
                <strong>Photo: </strong>
                <input type="file" name="photo" class="form-control" value="{{ $customer->photo }}" >
                <img src="{{ $customer->photo }}" height="150" />
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>


    </form>
</x-bootstrap>