<br> <x-admin-layout>
	@section('content')
	<div class="container">
		<h2>{{ $document->name }}</h2>
		<p><strong>Description:</strong> {{ $document->description ?? 'No description available' }}</p>
		<p><strong>Uploaded At:</strong> {{ $document->created_at->format('d M Y') }}</p>

		<a href="{{ asset('storage/' . $document->file_path) }}" target="_blank" class="btn btn-primary">View Document</a>

		<a href="{{ route('admin_dashboard') }}" class="btn btn-secondary">Back to Dashboard</a>
	</div>
	@endsection
</x-admin-layout>
