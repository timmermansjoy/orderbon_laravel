<div class="modal fade" id="{{$item->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure, you want to delete {{$item->name ?? $item->id}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                    style="padding: 0.4em 0.6em; margin:5px 6px">Close</button>

                <form action="{{$title}}/{{$item->id}}" method="POST">
                    @method('delete')
                    @csrf
                    <button class="btn btn-primary" style="padding: 0.4em 0.6em; margin:5px 6px">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
