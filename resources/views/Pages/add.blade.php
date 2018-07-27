@extends('layouts.admin')

@section('add')
<div class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<form action="" method="post">
		@csrf
		<p>
			<span>Введите наименование категории: </span>
        	<input type="text" name="title" placeholder="Title">
		</p>

		<p>
			<span>Короткий текст статьи</span>
			<textarea name="short_description" cols="30" rows="5" placeholder="short_description"></textarea>
		</p>
	
		<p>
			<span>Полный текст статьи</span>
			<textarea name="full_description" cols="30" rows="5" placeholder="full_description"></textarea>
		</p>
        
        
        <button type="submit" class="btn btn-success">Добавить</button>
	</form> 	
</div>
@endsection()
