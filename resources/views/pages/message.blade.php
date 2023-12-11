<x-base-layout>
    <div style="padding: 70px;">
        <table style="background-color: black">
            <tr>
                <th style="padding: 10px; font-size: 20px; color: white;">Name </th>
                <th style="padding: 10px; font-size: 20px; color: white;">Date</th>
                <th style="padding: 10px; font-size: 20px; color: white;">Message</th>
                <th style="padding: 10px; font-size: 20px; color: white;">Contribution</th>
                <th style="padding: 10px; font-size: 20px; color: white;">Status</th>
                {{-- <th style="padding: 10px; font-size: 20px; color: white;">Cancel Message</th> --}}
            </tr>

            @foreach ($appoint as $appoints)
                <tr>
                    <td style="padding: 10px;">{{ $appoints->name }}</td>
                    <td style="padding: 10px;">{{ $appoints->date }}</td>
                    <td style="padding: 10px;">{{ $appoints->message }}</td>
                    <td style="padding: 10px;">{{ $appoints->bookfor }}</td>
                    <td style="padding: 10px;">{{ $appoints->status }}</td>
                    {{-- <td><a class="btn btn-danger" onclick="are you sure to delete this" href="{{url('cancel_message',$appoints->id)}}">Cancel</a></td> --}}
                </tr>
            @endforeach
        </table>
    </div>
</x-base-layout>
