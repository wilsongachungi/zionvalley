<x-app-layout>
	<x-slot name="header">
		<h1>Admin Dashboard</h1>
	</x-slot>

	<div class="container">
		<aside>
			<h2>Sidebar</h2>
			<!-- Sidebar content goes here -->

			<ul style="padding-top: 20px">
				<li><a href="{{ route('involve') }}">Get involved</a></li>
				<li><a href="{{ route('job_application') }}">Job application</a></li>
				<li><a href="{{ route('contact') }}">Contact Us</a></li>
			</ul>

			<!-- Add more navigation links as needed -->

		</aside>

		<main>
			<h2>Main Content</h2>
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Email</th>
						<th>Email</th>
						<th>Email</th>
						<!-- Add more table headers as needed -->
					</tr>
				</thead>
				<tbody>
					<!-- Add more rows as needed -->
					<tr>
						<td>1</td>
						<td>John Doe</td>
						<td>john@example.com</td>
						<td>john@example.com</td>
						<td>john@example.com</td>
						<td>john@example.com</td>
						<!-- Add more table data as needed -->
					</tr>
				</tbody>
			</table>

			<div class="pagination">
				<button class="active" onclick="changePage(1)">1</button>
				<button onclick="changePage(2)">2</button>
				<button onclick="changePage(3)">3</button>
				<!-- Add more pagination buttons as needed -->
			</div>
		</main>
	</div>
</x-app-layout>