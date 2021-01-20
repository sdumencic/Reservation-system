<x-app-layout>
    @push('scripts')
    <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
          //$("#UserList").tablesorter();
        });
    </script>
    <script>
        function sortTable(columnId, descending) {
            $("#UserList").tablesorter({ sortList: [[columnId,descending]] });
        }
    </script>
    @endpush
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="grid grid-cols-1 md:grid-cols-2" style="display:flex; background-color:rgba(179, 179, 179, 0.7);">
            <div class="jumbotron"
                style="margin:2rem; width: 100%; height:100%; background-color:rgb(241, 241, 241); text-align:center;">
                <h1 class="display-4 title title-shadow">History of reservations
                </h1>

                <input class="form-control | w-25 p-3" id="myInput" type="text" placeholder="Search..">

                <table class="table table-striped" id="UserList">
                    <thead>
                        <tr>
                            <th style="cursor: pointer;" scope="col" onClick="sortTable(0, 0)">Name of user and package</th>
                            <th style="cursor: pointer;" scope="col" onClick="sortTable(1, 0)">Start</th>
                            <th style="cursor: pointer;" scope="col" onClick="sortTable(2, 0)">End</th>
                            <th style="cursor: pointer;" scope="col" onClick="sortTable(3, 0)">Color</th>
                            <th style="cursor: pointer;" scope="col" onClick="sortTable(4, 0)">Text Color</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach ($events as $event)
                            <tr>
                                <td>{{ $event->user->name }} - {{ $event->title }}</td>
                                <td>{{ $event->start }}</td>
                                <td>{{ $event->end }}</td>
                                <td class="color" style="background: {{ $event->color }}"></td>
                                <td class="color" style="background: {{ $event->textColor }}"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
