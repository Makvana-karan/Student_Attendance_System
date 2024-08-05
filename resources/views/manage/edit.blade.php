@include('layout.css')
@include('layout.script')

<!-- Modal -->
<div class="container justify-content-center bg-slate-400 mb-3" style="width: 50%; height: 50%;">

    <div class="modal-header justify-content-start" style="margin-top: 50px;">
        <h5 class="modal-title mt-4" id="edit" style="margin-left: 20px;">Edit Student</h5>
    </div>
    <div class=" justify-content-center align-items-center mt-5" style="width: 100%;">
        <form method="post" action="">
            @csrf
            @method('put')
            <div class="form-group mb-3 "col-xs-4"">
                <input class="form-control" id="inputEmail" type="text" placeholder="Name" name="name"
                    value="" />

            </div>

            <div class="dropdown ">
                <select name="grade" id="" class="dropdown-toggle p-2 mb-3 w-8 border"
                    data-bs-toggle="dropdown" aria-expanded="false" value="">
                    @foreach ($grades as $grade)
                        <option value="{{ $grade->grade }}">{{ $grade->grade }}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group mb-3">
                <input class="form-control" id="inputEmail" type="text" placeholder="Address" name="address"
                    value="" />

            </div>


            <div class="form-group mb-3">
                <input class="form-control" id="inputPassword" type="number" placeholder="Contect" name="contact"
                    value="" />

            </div>


            <div class="modal-footer">

                <input type="submit" class="btn btn-primary" value="Update">
            </div>


        </form>
    </div>
</div>
