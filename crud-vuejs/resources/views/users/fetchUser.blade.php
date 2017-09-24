

@extends('Layout')

@section('content')
<div id="UserController" style="padding-top: 2em">

<div class="alert alert-danger" v-if="!isValid">
	
	<ul>
		<li v-show="!validation.name">Name field is required</li>
		<li v-show="!validation.email">Input valid email address</li>
		<li v-show="!validation.address">address field is required</li>
	</ul>
</div>

<form action="#" @submit.prevent="AddNewUser">
	
	<div class="form-group">
		
		<label for="name"> Name :</label>
		<input v-model ="newUser.name" type="text" name="name" id="name" class="form-control" >
     
	</div>

	<div class="form-group">
		
		<label for="email"> Email:</label>
		<input v-model ="newUser.email" type="text" name="email" id="email" class="form-control" >

	</div>

	<div class="form-group">
		
		<label for="name"> Address :</label>
		<input v-model ="newUser.address" type="text" name="address" id="addrees" class="form-control">

	</div>

	<div class="form-group">
		<button :disabled="!isValid" class="btn btn-primary" class="form-control" type="submit">Add New User</button>
	</div>
</form>
	
<table class="table">
			<thead>
				<th>ID</th>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>ADDRESS</th>
				<th>CREATED_AT</th>
				<th>UPDATED_AT</th>
				<th>CONTROLLER</th>
			</thead>

			<tbody>
				<tr v-for="user in users">
					<td>@{{ user.id }}</td>
					<td>@{{ user.name }}</td>
					<td>@{{ user.email }}</td>
					<td>@{{ user.address }}</td>
					<td>@{{ user.created_at }}</td>
					<td>@{{ user.updated_at }}</td>
					<td>
						<button class="btn btn-default btn-sm" @click="ShowUser(user.id)">Edit</button>
						<button class="btn btn-danger btn-sm" @click="RemoveUser(user.id)">Remove</button>
					</td>
				</tr>
			</tbody>
			
</table>

</div>
@endsection

@push('scripts')
<script src ="/js/script.js"></script>
@endpush