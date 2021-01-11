<x-calendar-layout>
    <div style="display:flex; background-color:rgba(179, 179, 179, 0.7);">
        <div class="jumbotron"
            style="margin:2rem; width: 100%; background-color:rgb(241, 241, 241); text-align:center;">
            <h1 class="display-4 title title-shadow" style="margin-bottom: 7%;">Make your reservation</h1>
            <div id="calendar"></div>
        </div>
    </div>

    @push('modals')
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to add this appointment?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Title:</label>
                                <input type="text" class="form-control" id="title">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Start:</label>
                                <input type="text" class="form-control" id="start" disabled>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">End:</label>
                                <input type="text" class="form-control" id="end" disabled>
                            </div>
                            <div class="form-group" hidden>
                                <label for="recipient-name" class="col-form-label">UserID:</label>
                                <input type="text" class="form-control" id="user_id">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                </div>
            </div>
        </div>
    @endpush

    @push('scripts')
        <script>
            $(document).ready(renderTimeGridView);

        </script>
    @endpush
</x-calendar-layout>
