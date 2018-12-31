@extends('admin.pages.article')

@section('dashboard-content')
<div class="card mb-3">
	<div class="card-header">
		<i class="fas fa-table"></i>
		List of Articles
	</div>
	<div class="card-body">
		<div class="table-responsive" style="display: block; max-height: 600px; overflow-y: auto; -ms-overflow-style: -ms-autohiding-scrollbar;">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Title</th>
						<th>Category</th>
						<th>Content</th>
						<th>Attachment</th>
						<th>Created At</th>
						<th>Updated At</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($articles as $article)
					<tr>
						<td>{{ $article->title }}</td>
						<td>{{ $article->category }}</td>
						<td>{{ substr($article->body, 0, 50) }}{{ strlen($article->body) > 100 ? '....' : '' }}</td>
						<td>
							@if (count($article->media) > 0)
							<img src="{{ '/storage/'.$article->media[0]->path }}" alt="" height="200" width="200">
							@endif
						</td>
						<td>{{ $article->created_at }}</td>
						<td>{{ $article->updated_at }}</td>
						<td class="form-inline">
							<form action="{{ route('admin.articles.edit', ['id' => $article->article_id]) }}" method="GET">
								<button type="submit" class="btn btn-primary">Edit</button>
							</form>
							<form action="{{ route('admin.articles.destroy', ['id' => $article->article_id]) }}" method="POST">
								<input type="hidden" name="_method" value="DELETE" />
								<button type="submit" class="btn btn-danger">Delete</button>
								{!! csrf_field() !!}
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
@endsection
