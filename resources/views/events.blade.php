<x-calendar-layout>
    <div class="container">
        @if(session('status'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        @endif
        @if(session('warning'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('warning') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        @endif
    </div>

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
                    <div class="modal-body" id="dialog">
                        <form id="dayClick" method="post" action="{{ route('events.add') }}">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Title:</label>
                                <input type="text" class="form-control" id="title" name="title">
                                {{-- <select id="packages" name="packages">
                                    <option value="basic">Basic package</option>
                                    <option value="standard">Standard package</option>
                                    <option value="premium" selected>Premium Package</option>
                                    <input type="submit" class="form-control" id="title"> --}}
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Start:</label>
                                <input type="text" class="form-control" id="start" name="start" readonly>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">End:</label>
                                <input type="text" class="form-control" id="end" name="end" readonly>
                            </div>
                            <div class="form-group" hidden>
                                <label for="recipient-name" class="col-form-label">UserID:</label>
                                <input type="text" class="form-control" id="user_id" name="user_id">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Color:</label>
                                <input type="color" class="form-control" id="start" name="color">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Text color:</label>
                                <input type="color" class="form-control" id="end" name="textColor">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Send message</button>
                            </div>
                        </form>
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
