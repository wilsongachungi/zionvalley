<x-admin-layout>
    <table class="table table-dark">
        <thead>
            <tr style="margin-top: 10px; background-color: #87CEEB; color: white; padding: 10px; border-radius: 5px;">
                <th style="color: green; text-align: left; padding-right: 20px;">Tasks</th>
                <th style="color: green; text-align: right; padding-left: 20px;">Message</th>
            </tr>
        </thead>
        <tbody>
            
            @forelse ($tasks as $record)
                <tr style="margin-top: 10px; display:flex; flex-wrap: wrap;">
                    <td style="color: #fff; flex-basis: 50%; box-sizing: border-box; padding: 5px;">
                        {{ $record->description }}</td>
                    <td style="color: #fff; flex-basis: 50%; box-sizing: border-box; padding: 5px;">
                        {{ $record->message }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="2" style="text-align: center;">There is no data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</x-admin-layout>
