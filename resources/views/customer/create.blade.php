<x-bootstrap title="Create a customer">
    <div class="row">
        <div class="col-lg-12">
            <div class="py-4">
                <a class="btn btn-primary" href="{{ route('customer.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>โปรดระวัง</strong> ปัญหาการกรอกข้อมูล<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-4">
            <div class="col-md-12">
                <strong>Firstname: <span class="text-danger">*</span> </strong>
                <input type="text" name="firstname" class="form-control" required>
            </div>
            <div class="col-md-12">
                <strong>Lastname: <span class="text-danger">*</span> </strong>
                <input type="text" name="lastname" class="form-control" required >
            </div>
            <div class="col-md-12">
                <strong>Email: <span class="text-danger">*</span> </strong>
                <input type="text" name="email" class="form-control" required placeholder="example@gmail.com">
            </div>
            <div class="col-md-12">
                <strong>Phone: <span class="text-danger">*</span> </strong>
                <input type="number" name="phone" class="form-control" required placeholder="0xx-xxxxxxx">
            </div>
            <div class="col-md-12">
                <strong>Address: <span class="text-danger">*</span> </strong>
                <input type="text" name="address" class="form-control" required>
            </div>
            <div class="col-md-12">
                <strong>Photo: </strong>
                <input type="file" name="photo" class="form-control" required >
                 
            </div>
           
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
</x-bootstrap>