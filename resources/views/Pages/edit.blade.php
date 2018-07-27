<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
		<h1>Редактировать категорию</h1><br>
		<form method="post">
			@csrf
			<p>
				<span>Введите наименование категории: </span>
				<input type="text" name="title" class="form-control" value="{{ $category->title }}">
			</p>		
			<p>
				<span>Текст категории</span>
				<textarea type="text" name="description" class="form-control">{{ $category->description }}</textarea>
			</p>
			<button type="submit" class="btn btn-success">Редактировать</button>
		</form>
		
</main>