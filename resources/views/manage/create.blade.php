@include('layout.css')
@include('layout.script')

<!-- Modal -->
<div class="modal fade center" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="post" action="{{ route('student_add') }}">
                    @csrf
                    @method('post')
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputEmail" type="text" placeholder="Name" name="name" />
                        <label for="name">Name</label>
                    </div>
                    <div class="dropdown ">
                        <select name="grade" id="" class="dropdown-toggle p-2 mb-3 w-8 border"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            @foreach ($grades as $grade)
                                <option value="{{ $grade->grade }}">{{ $grade->grade }}</option>
                            @endforeach
                        </select>


                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputEmail" type="text" placeholder="Address"
                            name="address" />
                        <label for="address">Address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputPassword" type="number" placeholder="Contect"
                            name="contact" />
                        <label for="contact">Contect</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Add Student">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
